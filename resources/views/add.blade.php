<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Career Training College">
    <meta name="keywords" content="Career, Training college, college, studies, perth, australia, skills for work">
    <meta name="author" content="Alvaro Gonzalez">
    <title>Career Training College</title>
    <link rel="icon" href="{{ url('logo.png') }}">
    <!--- Bootsrap --->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- icons using fontawesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.6.0-web/css/all.min.css') }}">
    <!--- Local css --->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>
    <!-- Header -->
    <div id="top"></div>  
    <div class="container-fluid">
        <div class="container">
            <div class="d-block mx-auto" style="width:250px;">
                <img src="{{ asset('logo.png') }}" alt="CTC Logo" class="img-fluid">
            </div>
        </div>
        <!-- menu -->
        <div id="menu">
            <nav>
                <ul>
                    <li><a href="/index">Index</a></li>
                    <li><a href="/add">Add</a></li>
                    <li><a href="/edit">Edit</a></li>
                    <li><a href="">Delete</a></li>
                    <li><a href="">About Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Body -->
    <div class="container">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="form-container">
            <form action="{{ route('user.add') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input name="first_name" type="text" class="form-control" id="firstName" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input name="last_name" type="text" class="form-control" id="lastName" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input name="age" type="number" min="18" class="form-control" id="age">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input name="phone" type="tel" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input name="address" type="text" class="form-control" id="address">
                </div>
                <div class="mb-3">
                    <label for="summary" class="form-label">Professional Summary</label>
                    <textarea name="summary" class="form-control" id="summary" rows="3"></textarea>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
<footer class="container-fluid">
    <div class="row">
        <!-- Logo & Info -->
        <div class="col text-center">
            <div class="d-block mx-auto" style="width:100px;">
                <img src="{{ asset('logo.png') }}" alt="CTC Logo" class="img-fluid">
            </div>
            <!-- Información -->
            <div class="info-item">
                <span><img src="{{ asset('email.png') }}" alt="email icon"></span>
                <p>careercollegetraining@ctc.com.au</p>
            </div>
            <div class="info-item">
                <span><img src="{{ asset('clock.png') }}" alt="clock icon"></span>
                <p>Monday - Friaday: 8:00 - 17.00 <br> Saturday: 8:00 - 12:00</p>
            </div>
            <div class="info-item">
                <span><img src="{{ asset('location.png') }}" alt="location icon"></span>
                <p>151 High St, Freemantle WA 6160, Australia</p>
            </div>
            <div class="info-item">
                <span><img src="{{ asset('phone.png') }}" alt="phone icon"></span>
                <p>0123 456 789</p>
            </div>
        </div>
        <!-- sub menu -->
        <div class="col">
            <nav id="subMenu">
                <ul>
                    <li><a href="/index">Index</a></li>
                    <li><a href="/add">Add</a></li>
                    <li><a href="/edit">Edit</a></li>
                    <li><a href="">Delete</a></li>
                    <li><a href="">About Us</a></li>
                </ul>
            </nav>
        </div>
        <!-- map -->
        <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.6118341313677!2d115.86454927416175!3d-31.94429437402269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32a52a4b6095db%3A0xdfe4712a1ea419c8!2sNational%20Institute%20of%20Technology!5e0!3m2!1sen!2sau!4v1723353149120!5m2!1sen!2sau" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</footer>
    <div id="botton">
        <p>All rights reserved. Designed by Alvaro Gonzalez</p>
    </div>
</body>
<script href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}"></script>
</html>