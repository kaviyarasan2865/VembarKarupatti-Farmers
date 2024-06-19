<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <link rel="website icon" type="png"  href="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background:url('bg.png');
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            color: rgb(255, 255, 255);
        }

        .container {
            max-width: 400px;
            margin: auto;
            margin-top: 120px;
        }

        .container {
            border-radius: 30px;
            padding: 60px;
            background-color: rgba(0, 0, 0, 0.244);
        }

        img {
            height: 30px;
            width: 30px;
        }

    </style>
</head>

<body>

    <div class="container login-container">

 <!-- Display any form validation errors and success messages -->
 <div class="alert alert-danger" style="display:none">
    <ul></ul>
</div>

<div class="alert alert-success" id="successMessage" style="display:none">
    <ul></ul>
</div>


{{-- errors --}}
<!-- Display any form validation errors -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Display success message -->
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <h4 class="text-center mb-4">Login  to your account</h4>
        <form action="{{ route('login') }}" method="post">
            @csrf


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div><br>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
