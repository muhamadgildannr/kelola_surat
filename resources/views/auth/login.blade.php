<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/assets/css/auth/style.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Login</header>
            <form action="{{ route('login.auth') }}" method="POST">
                @csrf
                <div class="field input">
                    <label>Email</label>
                    <input name="email" type="text" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input name="password" type="password" placeholder="Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="{{ route('register') }}">Signup now</a></div>
        </section>
    </div>
</body>
<script src="{{ asset('/assets/js/show-hide.js') }}"></script>
</html>


