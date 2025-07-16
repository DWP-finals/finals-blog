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
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <script>
        function changeContent(hide,show) {
            document.getElementById(hide).style.display="none";
            document.getElementById(show).style.display="block";
        }
    </script>


    <!--========== ARTICLE IMAGE CONTAINER ==========-->
    <div class = "container">
        <div class = "dashboard">
            <ul class = "options">
                <li class = "logo"><img src = "{{asset('storage/images/icons8-coffee-48.png')}}"></li>
                <li><a href = "#" class = "button btnManage" onclick="replace(this, 'manage')">Manage Posts</a></li>
                <li><a href = "#" class = "button btnCreate" onclick="replace(this, 'create')">Create Post</a></li>
                <li><a href = "#" class = "button btn3">Drafts</a></li>
                <li><a href = "#" class = "button btn4">Analytics</a></li>
            </ul>
            <hr class = "hrDashboard">
            <ul class = "optionsFromNavbar">
                <li><a href = "#" class = "button btn5">About</a></li>
                <li><a href = "#" class = "button btn6">Contact</a></li>
                <li><a href = "#" class = "button btn7">Log Out</a></li>
            </ul>
        </div>
        <div class = "content">
            <!-- MANAGE POSTS -->
            <div id = "manage">
                <h1>Manage Posts</h1>
                <h2>Profile</h2><hr>
                <h2>Personal Details</h3><hr>
            </div>
            <div id = "create">
                <h1>Create Posts</h1>
                <h2>create create create</h2>

            </div>
        </div>
    </div>
</body>
</html>