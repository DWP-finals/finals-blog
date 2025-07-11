<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link href="/resources/css/app.css" rel="stylesheet">
    @vite('resources/css/article.css')
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
                <button class="btn">Log In</button>
                <button class="btn">Sign Up</button>
            </ul>
        </div>
    </nav>

    <!--========== ARTICLE IMAGE CONTAINER ==========-->
    <div class = "container">
        <div class = "article">
            <h1>Flavors and Profiles of Coffee</h1>
            <div class = "details">
                <p class = "author">by Dana Alania</p>
                <p class = "date"> Last edited on July 10, 2025</p>
            </div>
            <div class = "containerImg">
                <img class = "postImg" src = "{{asset('storage/images/img.jpg')}}">
            </div>
            <p class = "tags">#Coffee #Flavors</p>
            <p class = "content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class = "others">
            <h3>Other Posts</h3>
    
            <div class = "other card1"> <!-- other contains img and content of a card -->
                <div class = "otherImgContainer">
                    <img class = "img1" src = "{{asset('storage/images/coffee5.jpg')}}">
                </div>
                <div class = "otherContentContainer">
                    <a href = "#" class = "otherTitle">Origin of Coffee</p>
                    <p class = "otherAuthor">by Dana Alania</p>
                </div>
            </div>
            <hr class = "line">
            <div class = "other card2"> <!-- other contains img and content of a card -->
                <div class = "otherImgContainer">
                    <img class = "img1" src = "{{asset('storage/images/coffee4.jpg')}}">
                </div>
                <div class = "otherContentContainer">
                    <a href = "#" class = "otherTitle">Kape Kape KAPE</p>
                    <p class = "otherAuthor">by Dana Alania</p>
                </div>
            </div>
            <hr class = "line">
            <div class = "other card3"> <!-- other contains img and content of a card -->
                <div class = "otherImgContainer">
                    <img class = "img1" src = "{{asset('storage/images/coffee3.jpg')}}">
                </div>
                <div class = "otherContentContainer">
                    <a href = "#" class = "otherTitle">Kape Kape KAPE</p>
                    <p class = "otherAuthor">by Dana Alania</p>
                </div>
            </div>
            <hr class = "line">
            <div class = "other card4"> <!-- other contains img and content of a card -->
                <div class = "otherImgContainer">
                    <img class = "img1" src = "{{asset('storage/images/coffee2.jpg')}}">
                </div>
                <div class = "otherContentContainer">
                    <a href = "#" class = "otherTitle">Why I Go to Starbucks Despite It Tasting Awful</p>
                    <p class = "otherAuthor">by Dana Alania</p>
                </div>
            </div>
            <hr class = "line">
        </div>
    </div>
</body>
</html>