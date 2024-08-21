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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- icons using FontAwesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.6.0-web/css/all.min.css') }}">
    <!-- Local CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
        <!-- Menu -->
        <div id="menu">
            <nav>
                <ul>
                    <li><a href="{{ route('user.index') }}">Index</a></li>
                    <li><a href="{{ route('user.create') }}">Add</a></li>
                    <li><a href="#">Edit</a></li>
                    <li><a href="#">Delete</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Body -->
    <div class="container mt-4">
        <h3 class="text-center">
            Please, select which contact you want to edit.
        </h3>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="form-container">
            <form method="POST" action="{{ route('user.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input name="first_name" type="text" class="form-control" id="firstName" value="{{ old('first_name', $user->first_name) }}" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input name="last_name" type="text" class="form-control" id="lastName" value="{{ old('last_name', $user->last_name) }}" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input name="age" type="number" min="18" class="form-control" id="age" value="{{ old('age', $user->age) }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                    <small class="form-text text-muted">Leave blank to keep current password.</small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" value="{{ old('email', $user->email) }}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input name="phone" type="tel" class="form-control" id="phone" value="{{ old('phone', $user->phone) }}">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input name="address" type="text" class="form-control" id="address" value="{{ old('address', $user->address) }}">
                </div>
                <div class="mb-3">
                    <label for="summary" class="form-label">Professional Summary</label>
                    <textarea name="summary" class="form-control" id="summary" rows="3">{{ old('summary', $user->summary) }}</textarea>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
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
                    <p>Monday - Friday: 8:00 - 17:00 <br> Saturday: 8:00 - 12:00</p>
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
            <!-- Sub menu -->
            <div class="col">
                <nav id="subMenu">
                    <ul>
                        <li><a href="{{ route('user.index') }}">Index</a></li>
                        <li><a href="{{ route('user.create') }}">Add</a></li>
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Delete</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </nav
