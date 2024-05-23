@extends('layouts.app')

@section('content')

<main class="main">
    <h1>How it works</h1>
    <div class="guidelines-container">
        <div class="step-1">
            <p>
                <h2>Step 1:</h2>
                Welcome to <strong><em>Sketch2Code!</em></strong> This tool allows you to convert <em><strong>hand-drawn and digital sketches into code.</strong></em> 
                It is a simple and easy-to-use tool that can help you quickly generate code for your projects.
                This tool uses machine learning to analyze your sketch and generate code based on the elements in the sketch.
                To get started, simply upload a sketch image, and the tool will generate the code for you.
            </p>
            <p>
                <a href="{{ route('home') }}" class="btn btn-primary">Try Sketch2Code</a>
            </p>
        </div>

        <div class="step-2">
            <p>
                <h2>Step 2:</h2>
                Welcome to <strong><em>Sketch2Code!</em></strong> This tool allows you to convert <em><strong>hand-drawn and digital sketches into code.</strong></em> 
                It is a simple and easy-to-use tool that can help you quickly generate code for your projects.
                This tool uses machine learning to analyze your sketch and generate code based on the elements in the sketch.
                To get started, simply upload a sketch image, and the tool will generate the code for you.
            </p>
            <p>
                <a href="{{ route('home') }}" class="btn btn-primary">Try Sketch2Code</a>
            </p>
        </div>

        <div class="step-3">
            <p>
                <h2>Step 3:</h2>
                Welcome to <strong><em>Sketch2Code!</em></strong> This tool allows you to convert <em><strong>hand-drawn and digital sketches into code.</strong></em> 
                It is a simple and easy-to-use tool that can help you quickly generate code for your projects.
                This tool uses machine learning to analyze your sketch and generate code based on the elements in the sketch.
                To get started, simply upload a sketch image, and the tool will generate the code for you.
            </p>
            <p>
                <a href="{{ route('home') }}" class="btn btn-primary">Try Sketch2Code</a>
            </p>
        </div>
    </div>

    <hr class="horizontal-rule">

    {{-- call to action --}}
    <div class="call-to-action">
        <h2>Ready to get started?</h2>
        <a href="{{ route('home') }}" class="btn btn-primary">Try Generating Code</a>
    </div>

</main>

@endsection