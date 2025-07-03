<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/resources/assets/icons8-coffee-48.png">
        @vite('resources/css/landing.css')
        @vite('/resources/css/app.css')

        <title>insert blog name here</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">

    </head>
    <body>
        <nav class = "navbar" class="shadow-md">
            <div class = "logo">
                <i class="ri-cup-line"></i>
                <a href = "index.html" class = "blog_name">Blog Name</a>
            </div>
            <div class = "navbar_content">
                <ul class = "navbar_items">
                    <li><a href = "#">HOME</a></li>
                    <li><a href = "#">ABOUT</a></li>
                    <li><a href = "#">CONTACT</a></li>
                    <button class="btn">Sign Up</button>
                    <li class = "dropdown">
                        <i class="ri-menu-3-line"></i>
                        <div class = "dropdown_content">
                            <a href = "#">Account</a>
                            <a href = "#">My Posts</a>
                            <a href = "#">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>
