<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div class="register-container">
        <h2 class="fw-bold text-white">Register</h2>
        <form class="register-form" action="" method="post">
            {{ csrf_field() }}
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <div style="color:red">{{ $errors->first('email') }}</div>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" onclick="validateForm(event)">Register</button>

            <p class="register__login text-white">
                Already have an account? 
                <a class="link text-decoration-none text-white" href="{{ url('login') }}">Login</a>
            </p>
            
        </form>
     </div>
     
     <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
                {{-- <script src="./js/register.js"></script> --}}
</body>
</html>
