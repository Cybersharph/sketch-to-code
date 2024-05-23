
@extends('layouts.app')

@section('content')
<main class="main">

    <h1>Publications</h1>
    <div class="blog-intro">
        <div class="blog-cover">
            <img src="./images/ai.png" alt="AI Image">
        </div>
        <div class="blog-excerpt">
            <h3>How can AI impact your productivity</h3>
            <p>
                Welcome to our blog! Here you will find the latest news and updates about our company, products, and services. 
                We are committed to providing you with the best information possible, so please check back often for new posts and updates. 
                Thank you for visiting our blog, and we hope you enjoy your experience with us! Welcome to our blog! Here you will find the latest news and updates about our company, products, and services. 
                We are committed to providing you with the best information possible, so please check back often for new posts and updates. 
                Thank you for visiting our blog, and we hope you enjoy your experience with us!
            </p>
            <p>
                <a href="{{ route('about') }}" class="btn btn-primary">Learn more</a>
            </p>
        </div>
    </div>
    

    <div class="blog-intro">
        <div class="blog-cover">
            <img src="/images/garden.png" alt="">
        </div>
        <div class="blog-excerpt">
            <h3>How can AI impact your productivity</h3>
            <p>
                Welcome to our blog! Here you will find the latest news and updates about our company, products, and services. 
                We are committed to providing you with the best information possible, so please check back often for new posts and updates. 
                Thank you for visiting our blog, and we hope you enjoy your experience with us! Welcome to our blog! Here you will find the latest news and updates about our company, products, and services. 
                We are committed to providing you with the best information possible, so please check back often for new posts and updates. 
                Thank you for visiting our blog, and we hope you enjoy your experience with us!
            </p>
            <p>
                <a href="{{ route('about') }}" class="btn btn-primary">Learn more</a>
            </p>
        </div>
    </div>
    
    <hr class="horizontal-rule">
    
    <div class="pagination">
        <a href="#" class="pagination-link">Previous</a>
        <a href="#" class="pagination-link">1</a>
        <a href="#" class="pagination-link">2</a>
        <a href="#" class="pagination-link">3</a>  
        <a href="#" class="pagination-link">Next</a>
    </div>

</main>

@endsection