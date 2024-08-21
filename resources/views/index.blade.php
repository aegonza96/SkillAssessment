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
                    <li><a href="/index">Edit</a></li>
                    <li><a href="">Delete</a></li>
                    <li><a href="">About Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Body -->
    <div class="container">
        
    <div class="container mt-4">
    <table class="table table-bordered">
        <thead class="bg-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Professional Summary</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->summary}}</td>
            <!--- Bottons --->
            <td class="text-center">
    <div class="d-flex justify-content-center">
        <a href="{{ route('user.create') }}">
            <button class="btn btn-success btn-sm" title="Add">
                <i class="fas fa-plus fa-fw"></i>
            </button>
        </a>
        <a href="#">
            <button class="btn btn-danger btn-sm mx-2" title="Delete">
                <i class="fas fa-trash fa-fw"></i>
            </button>
        </a>
        <a href="{{ route('user.edit', $user->id) }}">
            <button class="btn btn-primary btn-sm" title="Edit">
                <i class="fas fa-pencil fa-fw"></i>
            </button>
        </a>
    </div>
</td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
                    <li><a href="/index">Edit</a></li>
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