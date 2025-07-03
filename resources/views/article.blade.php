<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/resources/css/app.css" rel="stylesheet">
    @vite('resources/css/article.css')
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

    <!--========== ARTICLE IMAGE CONTAINER ==========-->
    <div class = "article-img">
        <img class = "imgcontainer" src = "img.jpg">
    </div>

</body>
</html>