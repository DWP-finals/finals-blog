<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('/resources/css/app.css')
    @vite('/resources/css/register.css')

    <title>blog | register</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="left">
            <h1>Register Now</h1>
            <div class="container">
                <div class="row">
                    <div class="col-1">
                        <label for="email"><b>Email</b></label>
                    </div>
                    <div class="col-2">
                        <input type="text" placeholder="Enter email address" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <label for="password"><b>Password</b></label>
                    </div>
                    <div class="col-2">
                        <input type="password" placeholder="Enter secure password" name="password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <label for="cpassword"><b>Confirm Password</b></label>
                    </div>
                    <div class="col-2">
                        <input type="password" placeholder="Re-enter password" name="cpassword" required>
                    </div>
                </div>
                <button class="button" onclick="">Create Account</button>
            </div>
        </div>
        <div class="right">
            <h3>Already have an account?</h3>
            <p class="subheading">Log in through the home page and continue where you left off!</p>
            <button class="home">Home</button>
        </div>
    </div>
</body>
</html>
