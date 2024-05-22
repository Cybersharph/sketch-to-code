
{{-- Header blade component --}}

<header class="header">
    <div class="header_container">
        <a href="{{ route('home') }}" class="header_logo">
            <img src="{{ asset('images/logos/logo.svg') }}" alt="Logo" class="logo">
        </a>
        <nav class="header_nav">
            <ul class="header_nav-list">
                <li class="header_nav-item">
                    <a href="{{ route('home') }}" class="header_nav-link">Home</a>
                </li>
                <li class="header_nav-item">
                    <a href="{{ route('about') }}" class="header_nav-link">About</a>
                </li>
                <li class="header_nav-item">
                    <a href="{{ route('how') }}" class="header_nav-link">How?</a>
                </li>
                <li class="header_nav-item">
                    <a href="{{ route('publications') }}" class="header_nav-link">Publications</a>
                </li>
                <li class="header_nav-item">
                    <a href="{{ route('contact') }}" class="header_nav-link">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>