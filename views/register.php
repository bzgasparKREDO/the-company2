<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register</title>
</head>
<body class="bg-light">
    <div style="height: 100vh;">
    <div class="row h-100 m-0">
        <div class="card w-25 my-auto mx-auto py-3">
            <div class="card-header bg-white border-0 py-3">
                <h1 class="text-center text-uppercase">register</h1>
            </div>
            <div class="card-body">
                <form action="../actions/register.php" method="POST">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" required autofocus placeholder="First Name">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" required placeholder="Last Name">
                    </div>
                    <div class="mb-3 fw-bold">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control fw-bold" required  placeholder="Username">
                    </div>
                    <div class="mb-3 fw-bold">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control fw-bold" required  placeholder="Password" aria-describedby="password-info" minlength="8">
                        <div class="form-text" id="password-info">Password must be at least 8 characters long</div>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Register</button>
                </form>
                <p class="text-center mt-3 small">
                    Registered Already? <a href="index.php">Log in.</a>
                </p>
            </div>
        </div>
    </div>
    </div>
</body>
</html>