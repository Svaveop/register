<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            font-size: 30px;
            text-align: center;
        }
        #a1 {
            text-align: center;
            font-size: 14px;
        }
        .mb-3 {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <form method="POST" action="/admin/action.php">
        <h1>Register</h1>
        <hr>
        <p id="a1">Create your account. It's free and only takes a minute.</p>
        <div class="mb-3">
            <input name="firstname" type="text" class="form-control" placeholder="First Name" required>
        </div>
        <div class="mb-3">
            <input name="lastname" type="text" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="mb-3">
            <input name="password" type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="mb-3">
            <input name="email" type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <input name="username" type="text" class="form-control" placeholder="Username" required>
        </div>
        <div class="mb-3">
            <input name="age" type="number" class="form-control" placeholder="Age" required>
        </div>
        <div class="form-check">
            <input name="accept" class="form-check-input" type="checkbox" value="1" required>
            <label class="form-check-label">I accept the Terms of Use & Privacy Policy.</label>
        </div>
        <br>
        <button type="submit" class="btn btn-success btn-lg">Register Now</button>
    </form>
</body>
</html>
