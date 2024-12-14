<!-- Navigation Bar -->
<div class="menu-area w-100" style="background-color: #1f6f78;">
    <nav class="main-menu d-flex justify-content-between align-items-center p-3">
        <!-- Navigation Links -->
        <ul class="d-flex align-items-center m-0" style="list-style: none; padding-left: 0;">
            <li class="me-4">
                <a href="{{ route('index') }}" class="nav-link text-white text-decoration-none fw-bold">Home</a>
            </li>
            <li class="me-4">
                <a href="{{ route('about') }}" class="nav-link text-white text-decoration-none fw-bold">About Us</a>
            </li>
            <li class="me-4">
                <a href="{{ route('contact') }}" class="nav-link text-white text-decoration-none fw-bold">Contact Us</a>
            </li>
            <li class="me-4">
                <a href="{{ route('register', ['refer' => 'admin', 'position' => 'left']) }}" 
                   class="nav-link text-white text-decoration-none fw-bold">
                   Create Account
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" class="nav-link text-white text-decoration-none fw-bold">Sign In</a>
            </li>
        </ul>
        
        <!-- "Need Help Now?" Section -->
        <div class="d-flex align-items-center pe-3">
            <i class="fas fa-headset me-2" style="color:#93e4c1;"></i>
            <span class="media-label text-white fw-bold">NEED HELP NOW?</span>
        </div>
    </nav>
</div>

<!-- CSS for Hover Effect -->
<style>
    .nav-link {
        position: relative;
        transition: all 0.3s ease-in-out;
    }

    .nav-link:hover {
        text-decoration: none;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0; /* Initial state: border invisible */
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #93e4c1; /* Border color */
        transition: width 0.3s ease-in-out;
    }

    .nav-link:hover::after {
        width: 100%; /* Full width on hover */
    }
</style>
