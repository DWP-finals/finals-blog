<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/resources/css/app.css" rel="stylesheet">
    @vite('resources/css/dashboard.css')
    @vite('/resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <!--========== NAVIGATION BAR ==========-->
    <nav class = "navbar" class="shadow-md">
        <div class = "logo">
            <i class="ri-cup-line"></i>
            <a href = "index.html" class = "blog_name">Blog Name</a>
        </div>
        <div class = "navbar_content">
                <ul class = "navbar_items">
                    <li style="padding-right: 1.5rem;"><a href = "#">Home</a></li>
                    <li style="padding-right: 1.5rem;"><a href = "#">About</a></li>
                    <li style="padding-right: 1.5rem;"><a href = "#">Contact</a></li>
                    <button class="btn" onclick="openFormLogIn()">Log In</button>
                    <button class="btn" onclick="openFormSignUp()">Sign Up</button>
                </ul>
        </div>
    </nav>

    <!--========== ARTICLE IMAGE CONTAINER ==========-->
    <div class = "container">
        <div class = "dashboard">
            <ul>
                <li><a href = "#">Manage Posts</a></li>
                <li><a href = "#">Create Post</a></li>
                <li><a href = "#">Drafts</a></li>
                <li><a href = "#">Analytics</a></li>
            </ul>
        </div>
        <div class = "content">
            <h3>hi</h3>
        </div>
    </div>
</body>
</html>