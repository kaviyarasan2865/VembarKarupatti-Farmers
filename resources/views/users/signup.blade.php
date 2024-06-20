<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signup Page</title>
    <link rel="website icon" type="png" href="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background:url('bg.png');
            background-color: black;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            color: rgb(0, 0, 0);
        }

        .container {
            max-width: 400px;
            margin: auto;
            margin-top: 5px;
        }

        .container {
            border-radius: 30px;
            padding: 30px;
            background-color: rgb(255, 255, 255);
        }

        img {
            height: 30px;
            width: 30px;
        }

    </style>
</head>

<body>

    <div class="container login-container">

        <h4 class="text-center mb-4">Create an Account</h4>
        <form action="{{route('register.user')}}" method="post" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name"
                    placeholder="Enter your Name" required autofocus>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                    required autofocus>
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="number" class="form-control" id="phone_number" name="phone_number"
                    placeholder="Enter your Phone Number" required autofocus>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
            <textarea class="form-control" rows="3" placeholder="Enter your address" id="address" name="address" required></textarea>
            </div>

            <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="number" class="form-control" id="pincode" name="pincode"
                    placeholder="Enter your Pincode" required autofocus>
            </div>


            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter your password" required>
            </div><br>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
            <hr>
            {{-- <center><p>Already have an Account? <a href="{{ route('users.login') }}">Login</a></p></center> --}}
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
