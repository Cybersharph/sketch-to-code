@extends('layouts.app')

@section('content')
{{-- Contact page --}}
<main class="main">
    <h1 class="contact-us-heading">Contact Us</h1>
    <div class="contact-container">
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>
                <strong>Address:</strong> P.O. Box 127570, Kampala - UG
            </p>
            <p>
                <strong>Phone:</strong> +256-759-657-977
            </p>
            <p>
                <strong>Email:</strong> hello@sketch2code.com
            </p>
        </div>
        <div class="contact-form">
            <h2>Send us a message</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="  Enter full name" required>
                </div>
                <div class="form-group  ">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="  Enter valid email" required>
                </div>  
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" class="form-control" rows="5" required placeholder="  Start typing..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</main>

@endsection