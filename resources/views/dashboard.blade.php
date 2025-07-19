<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/dashboard.css')


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">
    
</head>
<body>
    <script>
        function changeContent(contentId, btnSelected) {
            // gonna leave comments for each block of code here kasi baka makalimutan ko how all these work
            
            // to hide all divs under content onli by default
            document.querySelectorAll('.content > div').forEach(div => {
                div.classList.add('hidden'); // adds tailwind hidden to class name of selected divs
            });

            // unhide the selected div
            const currentContent = document.getElementById(contentId);
            if (currentContent) {
                currentContent.classList.remove('hidden'); // basically removes the tailwind hidden from class name to display block :DD
            }

            // style of button when not hovered/selected (sets unhovered/deselected to default) 
            document.querySelectorAll('.btnDashboard').forEach(btn => {
                btn.classList.remove('text-white', 'font-bold');
                btn.classList.add('text-[#9a9594]');
            });
            
            // selected button ( , this)  will have these stuff
            btnSelected.classList.remove('text-[#9a9594]');
            btnSelected.classList.add('text-white');
        }
        function toggleSort() {
            let jsSortOverlay = document.querySelector(".sortOverlay");
            if (jsSortOverlay.style.display === 'none')
                jsSortOverlay.style.display = 'flex';
            else
                jsSortOverlay.style.display = 'none';
        }
    </script>


    <!--========== ARTICLE IMAGE CONTAINER ==========-->
    <div class = "container">
        <div class = "dashboard">
            <ul class = "options">
                <li class = "logo"><a href = "#"><img src = "{{asset('storage/images/icons8-coffee-48.png')}}"></a></li>
                <li><a href = "#" class = "button btnDashboard text-white" onclick="changeContent('manage', this)">Manage Posts</a></li>
                <li><a href = "#" class = "button btnDashboard text-[#9a9594]" onclick="changeContent('create', this)"><img width="48" height="48" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/9a9594/external-Write-business-tanah-basah-glyph-tanah-basah.png" alt="external-Write-business-tanah-basah-glyph-tanah-basah"/>Create Post</a></li>
                <li><a href = "#" class = "button btnDashboard text-[#9a9594]">Drafts</a></li>
                <li><a href = "#" class = "button btnDashboard text-[#9a9594]">Analytics</a></li>
            </ul>
            <hr class = "hrDashboard">
            <ul class = "optionsFromNavbar">
                <li><a href = "#" class = "button btnNavbar">About</a></li>
                <li><a href = "#" class = "button btnNavbar">Contact</a></li>
                <li><a href = "#" class = "button btnNavbar">Log Out</a></li>
            </ul>
        </div>
        <div class = "content">
            <!-- MANAGE POSTS -->
            <div id = "manage">
                <h1>Manage Posts</h1>
                <div class = "arrangement">
                    <div class = "sort">
                        <button type = "button" class = "arrangementBtn" onclick = "toggleSort()"><img class = "sortIcon" width="24" height="24" src="https://img.icons8.com/forma-light/24/352b28/generic-sorting.png" alt="generic-sorting"/><p>Sort</p></button>
                        <div class = "sortOverlay">

                            <label for = "sortOptions">Sort by: </label>
                            <select id = "sortOptions">
                                <option value = "title">Title</option>
                                <option value = "date">Last Edited</option>
                            </select>
                            <label for = "sortOrder">Order: </label>
                            <select id = "sortOrder">
                                <option value = "ascending">Ascending</option>
                                <option value = "descending">Descending</option>
                            </select>


                        </div>
                    </div>
                    <button type = "button" class = "arrangementBtn"><img class = "filterIcon" width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/352b28/horizontal-settings-mixer--v1.png" alt="horizontal-settings-mixer--v1"/><p>Filter</p></button>

                </div>
            </div>
            <div id = "create">
                <h1>Create Posts</h1>
                <h2>create create create</h2>

            </div>
        </div>
    </div>
</body>
</html>