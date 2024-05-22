
@extends('layouts.app')

@section('content')
<main class="main">
    <h1 class="home-heading">Home</h1>
    <div class="tool-intro-container">
        <p>
            <h2>Usage Guidelines</h2>
            Welcome to <strong><em>Sketch2Code!</em></strong> This tool allows you to convert <em><strong>hand-drawn and digital sketches into code.</strong></em> 
            It is a simple and easy-to-use tool that can help you quickly generate code for your projects.
            This tool uses machine learning to analyze your sketch and generate code based on the elements in the sketch.
            To get started, simply upload a sketch image, and the tool will generate the code for you.
        </p>
        <p>
            <a href="{{ route('about') }}" class="btn btn-primary">Learn more</a>
        </p>
    </div>
    

    <div class="tool-container">

        <div class="upload-container">
            
            <h2>Upload sketch image</h2>
            <div>
                <input type="file" id="upload" class="upload-input">
            </div>

            <div class="upload-preview">
                <div class="preview-image-container">
                    <img src="{{ asset('images/default-sketch.png') }}" alt="Upload preview" class="upload-preview-image">
                </div>
                
                <button class="btn btn-primary">Upload</button> 
                <button class="btn btn-secondary">Clear File</button>
                <button class="btn btn-secondary">Generate</button>
            </div>

        </div>

        <div class="output-container">
            <h2>Generated results:</h2>
            <textarea name="code" id="code" class="code" rows="12"></textarea>
            <div class="output-container-buttons-div">
                <button class="btn btn-primary">Copy</button>
                <button class="btn btn-secondary">Download Zip</button>
                <button class="btn btn-secondary">Clear Screen</button>
            </div>
        </div>
    </div>

</main>
    
@endsection


