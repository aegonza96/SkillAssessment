<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Career Training College">
    <meta name="keywords" content="Career, Training college, college, studies, perth, australia, skills for work">
    <meta name="author" content="Alvaro Gonzalez">
    <title>Career Training College</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>
    <div id="bg">
    <div class="login-container">
        <div class="form-container">
            <div class="logo">
                <img src="{{ asset('logo.png') }}" alt="CTC Logo">
            </div>
            <h4 class="text-center">WELCOME</h4>
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group text-right">
                    <a href="#" class="text-secondary">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-login btn-block">LOG IN</button>
            </form>
        </div>
        <div class="image-container"></div>
    </div>
    </div>    
</body>
</html>