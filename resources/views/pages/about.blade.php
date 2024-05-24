@extends('layouts.app')

@section('content')
    <main class="main">
        <h1 class="about-heading">About Us</h1>
        <div class="about-container">
            <div class="about-info">
                <h2>Who we are</h2>
                <p>
                    Sketch2Code is a web development company that specializes in converting hand-drawn sketches to code. We are a team of experienced developers who are passionate about creating beautiful and functional websites.
                </p>
                <p>
                    Our mission is to help designers bring their ideas to life by providing them with high-quality code that is easy to use and customize. We believe that every great design deserves great code, and we are committed to delivering the best possible results to our clients.
                </p>
            </div>
            <h2>Our Team</h2>
            <div class="about-team">
                <div class="team-member">
                    <img src="/images/team-avatar.png" alt="Team Member 1">
                    <h3>John Doe</h3>
                    <p>Lead Developer</p>
                </div>
                <div class="team-member">
                    <img src="/images/team-avatar.png" alt="Team Member 2">
                    <h3>Jane Smith</h3>
                    <p>Designer</p>
                </div>
                <div class="team-member">
                    <img src="/images/team-avatar.png" alt="Team Member 3">
                    <h3>Michael Johnson</h3>
                    <p>Project Manager</p>
                </div>
            </div>
        </div>
    </main>
@endsection
