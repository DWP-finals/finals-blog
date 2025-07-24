<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/newdashboard.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <script>
        
        // === DASHBOARD SWITCH CONTENT === //
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
            document.querySelectorAll('.icon').forEach(btn => {
                btn.classList.remove('active'); // remove underline
            });
            btnSelected.classList.add('active'); // add underline to selected button

        }

    </script>



    <div class = "container">
        <!-- === SIDE BAR === -->
        <div class = "sidebar">

            <div>
                <a class = "logo" href = "#"><img src = "{{asset('storage/images/icons8-coffee-48.png')}}"><h2>Blog</h2></a>
                <h2>Dashboard</h2>
                <ul class = "dashboardOptions">
                    <li><a class = "icon active" href = "#" onclick = "changeContent('manage', this)"><img class = "manageIcon" width="24" height="24" src="https://img.icons8.com/material/24/6f4e37/dashboard-layout.png" alt="dashboard-layout"/><p>Manage Posts</p></a></li>
                    <li><a class = "icon " href = "#" onclick = "changeContent('create', this)"><img class = "manageIcon" width="24" height="24" src="https://img.icons8.com/external-solid-adri-ansyah/24/6f4e37/external-ui-essentials-ui-solid-adri-ansyah-4.png" alt="external-ui-essentials-ui-solid-adri-ansyah-4"/><p>Create Post</p></a></li>
                    <li><a class = "icon " href = "#" onclick = "changeContent('drafts', this)"><img class = "manageIcon" width="24" height="24" src="https://img.icons8.com/external-febrian-hidayat-glyph-febrian-hidayat/24/6f4e37/external-edit-user-interface-febrian-hidayat-glyph-febrian-hidayat.png" alt="external-edit-user-interface-febrian-hidayat-glyph-febrian-hidayat"/><p>Drafts</p></a></li>
                    <li><a class = "icon " href = "#"><img class = "manageIcon" width="24" height="24" src="https://img.icons8.com/ios-glyphs/24/6f4e37/analytics.png" alt="analytics"/><p>Analytics</p></a></li>
                </ul>
            </div>
            <hr>
            <div>
                <h2>Account Settings</h2>
                <ul class = "accountOptions">
                    <li><a class = "icon" href = "#"><img class = "manageIcon" width="24" height="24" src="https://img.icons8.com/material-rounded/24/6f4e37/guest-male.png" alt="guest-male"/><p>Profile</p></a></li>
                    <li><a class = "icon" href = "#"><img class = "manageIcon" width="24" height="24" src="https://img.icons8.com/forma-bold-filled/24/6f4e37/settings.png" alt="settings"/><p>Settings</p></a></li>
                    <li><a class = "icon" href = "#"><img class = "manageIcon" width="24" height="24" src="https://img.icons8.com/material-rounded/24/6f4e37/exit.png" alt="exit"/><p>Log Out</p></a></li>
                </ul>
            </div>
        </div>

        <div class = "content">
            <!-- === MANAGE POSTS === -->
            <div id = "manage">
                <div class = "manageHeading">
                    <div class = "manageHeadingText">
                        <h1>Manage Posts</h1>
                        <a href = "{{ url('/') }}">Back to Home</a>
                    </div>
                        <p>DASHBOARD&nbsp;&nbsp; >&nbsp;&nbsp; Manage Posts</p>
                </div>
                <div class = "manageSettings">
                    <div class = "sortOverlay">
                        <label for = "sortOptions">Sort by: </label>
                        <select id = "sortOptions">
                            <option value="" selected disabled hidden></option>
                            <option value = "title">Title</option>
                            <option value = "date">Last Edited</option>
                        </select>
                        <label for = "sortOrder">Order: </label>
                        <select id = "sortOrder">
                            <option value="" selected disabled hidden></option>
                            <option value = "ascending">Ascending</option>
                            <option value = "descending">Descending</option>
                        </select>
                    </div>


                </div>
                <div class = "managePosts">
                    
                    <div class = "post">
                        <div class = "postImgContainer">
                            <img class = "postImg" src = "{{asset('storage/images/coffee2.jpg')}}">
                        </div>
                        <div class = "postDetails">
                            <div class = "postTitleDate">
                                <p class = "title">Why Starbucks Is Overrated And Sells Awful Drinks Yet I Still Buy From Them</p>
                                <p class = "date">PUBLISHED &nbsp;• &nbsp;JULY 19, 2025</p>
                            </div>
                        </div>
                        <div class = "postActions">
                            <div class="postStatus">
                                <div class="displayedStatus border">VISIBLE</div> <!-- hardcoded. replace this code to the current status of post according to database -->
                                <div class="statusOptions">
                                    <div data-value="visible" data-display="VISIBLE">Set as Visible</div>
                                    <div data-value="archive" data-display="ARCHIVED">Move to Archive</div>
                                </div>
                                <input type="hidden" name="status" value="visible"> <!-- "value = "visible"" to be replaced by dun sa nakalagay sa currentStatus. this is the actual value sent to database -->
                                </div>
                            <script>
                                // === PICKER DROPDOWN AND LABE; FOR MANAGE POST VISIBILTY === ///
                                
                                document.querySelectorAll('.postStatus').forEach(jsPostStatus => {
                                    const display = jsPostStatus.querySelector('.displayedStatus'); // label displayed sa picker 
                                    const options = jsPostStatus.querySelector('.statusOptions'); // dropdown options
                                    const hiddenInput = jsPostStatus.querySelector('input[type=hidden]'); // actual value submitted to database

                                    // toggle to hide and show dropdown
                                    display.addEventListener('click', () => {
                                        options.style.display = options.style.display === 'block' ? 'none' : 'block';
                                    });

                                    options.querySelectorAll('div').forEach(option => {
                                        option.addEventListener('click', () => {
                                            display.textContent = option.dataset.display; // to display data-display based sa selected option
                                            hiddenInput.value = option.dataset.value; // assigns hiddenInput based sa data-value of selected option,, this is the one submitted to backend
                                            options.style.display = 'none';

                                            // tailwind for dynamic styles
                                            if (hiddenInput.value === 'visible') {
                                                display.classList.remove('text-gray-900', 'border-gray-900', 'bg-gray-200');
                                                display.classList.add('text-green-900', 'border-green-900', 'bg-green-200');
                                            } else if (hiddenInput.value === 'archive') {
                                                display.classList.remove('text-green-900', 'border-green-900', 'bg-green-200');
                                                display.classList.add('text-gray-900', 'border-gray-900', 'bg-gray-200');
                                            }
                                        });
                                    });

                                    // so dropdown will automatically close when users click outside dropdown area
                                    document.addEventListener('click', e => {
                                    if (!jsPostStatus.contains(e.target)) {
                                        options.style.display = 'none';
                                    }
                                    });
                                });


                            </script>

                            <a href = "#"><img class = "postIcons" width="24" height="24" src="https://img.icons8.com/fluency-systems-filled/24/FA5252/filled-trash.png" alt="filled-trash"/></a>
                            
                        </div>

                    </div>
                </div>
            </div>
            <!-- === CREATE POSTS === -->
            <div id = "create" class = "hidden">
                <div class="createHeading">
                    <div class="createHeadingText">
                        <h1>Create Post</h1>
                        <a href="/">Back to Home</a>
                    </div>
                    <p>DASHBOARD&nbsp;&nbsp; >&nbsp;&nbsp; Create a Post</p>
                </div>
                <div class="formcontainer">
                    <br>
                    <label for="input-file" id="drop-area">
                        <input type="file"  accept="image/*" id="input-file" hidden>
                        <div id="img-view">
                            <img src="\storage\images\icons8-cloud-upload-100.png">
                            <p>DRAG AND DROP OR CLICK</p>
                            <span>Upload an image from computer</span>
                        </div>
                    </label>
                    <script>
                        const dropArea = document.getElementById("drop-area");
                        const inputFile = document.getElementById("input-file");
                        const imageView = document.getElementById("img-view");

                        inputFile.addEventListener("change", uploadImage);

                        function uploadImage() {
                            let imgLink = URL.createObjectURL(inputFile.files[0]);
                            imageView.style.backgroundImage = `url(${imgLink})`;
                            imageView.textContent = " ";
                            imageView.style.border = "none";
                            imageView.style.backgroundSize = "cover";
                            imageView.style.backgroundPosition = "center";
                            imageView.style.backgroundRepeat = "no-repeat";
                        }

                        dropArea.addEventListener("dragover", function(e) {
                            e.preventDefault();
                        });
                        dropArea.addEventListener("drop", function(e) {
                            e.preventDefault();
                            inputFile.files = e.dataTransfer.files;
                            uploadImage();
                        });

                    </script>
                    <label for="title">Title</label>
                    <input type="text" placeholder="Enter title here" name="title" required>
                    <label for="content">Content</label>
                    <textarea placeholder="Share your thoughts here" name="content" required></textarea>
                    <label for="contributor">Contributors</label>
                    <div class="cont-input">
                        <ul id="contributors"></ul>
                        <input type="text" id="input-contributor" placeholder="Enter the names of contributors and press the enter key to confirm" />
                    </div>

                    <script>
                        const conts = document.getElementById('contributors');
                        const inputc = document.getElementById('input-contributor');

                        inputc.addEventListener('keydown', function (event) {

                            if (event.key === 'Enter') {

                                event.preventDefault();
                                const cont = document.createElement('li');

                                const contContent = inputc.value.trim();

                                if (contContent !== '') {

                                    cont.innerText = contContent;
                                    cont.innerHTML += '<button class="delete-button"> x</button>';
                                    conts.appendChild(cont);
                                    inputc.value = '';
                                }
                            }
                        });

                        conts.addEventListener('click', function (event) {

                            if (event.target.classList.contains('delete-button')) {

                                event.target.parentNode.remove();
                            }
                        });
                    </script>

                    <label for="tags">Tags</label>
                    <div class="tags-input">
                        <ul id="tags"></ul>
                        <input type="text" id="input-tag" placeholder="Enter tag and press the enter key to confirm" />
                    </div>

                    <script>
                        const tags = document.getElementById('tags');
                        const inputt = document.getElementById('input-tag');

                        inputt.addEventListener('keydown', function (event) {

                            if (event.key === 'Enter') {

                                event.preventDefault();
                                const tag = document.createElement('li');

                                const tagContent = inputt.value.trim();

                                if (tagContent !== '') {

                                    tag.innerText = tagContent;
                                    tag.innerHTML += '<button class="delete-button"> x</button>';
                                    tags.appendChild(tag);
                                    inputt.value = '';
                                }
                            }
                        });

                        tags.addEventListener('click', function (event) {

                            if (event.target.classList.contains('delete-button')) {

                                event.target.parentNode.remove();
                            }
                        });
                    </script>
                    <div class="button-group">
                        <button class="button1">Publish</button>
                        <button class="button2">Save to Drafts</button>
                        <button class="button2">Delete</button>
                    </div>
                </div>
            </div>

            <!--- === DRAFTS === --->
            <div id = "drafts" class = "hidden">
                <div class = "manageHeading draftHeading">
                    <div class = "manageHeadingText draftHeadingText">
                        <h1>Drafts</h1>
                        <a href = "#">Back to Home</a>
                    </div>
                        <p>DASHBOARD&nbsp;&nbsp; >&nbsp;&nbsp; Drafts</p>
                </div>
                <div class = "manageSettings draftSettings">
                    <div class = "sortOverlay">
                        <label for = "sortOptions">Sort by: </label>
                        <select id = "sortOptions">
                            <option value="" selected disabled hidden></option>
                            <option value = "title">Title</option>
                            <option value = "date">Last Edited</option>
                        </select>
                        <label for = "sortOrder">Order: </label>
                        <select id = "sortOrder">
                            <option value="" selected disabled hidden></option>
                            <option value = "ascending">Ascending</option>
                            <option value = "descending">Descending</option>
                        </select>
                    </div>


                </div>
                <div class = "draftPosts">
                    <div class = "draft">
                        <div class = "draftImgContainer">
                            <img class = "draftImg" src = "{{asset('storage/images/coffee2.jpg')}}">
                        </div>
                        <div class = "draftDetails">
                            <div class = "draftTitleDate">
                                <p class = "draftTitle">draftttt</p>
                                <p class = "draftDate">PUBLISHED &nbsp;• &nbsp;JULY 19, 2025</p>
                            </div>
                        </div>
                        <div class = "draftActions">
                            <a href = "#"><img class = "draftIcons" width="24" height="24" src="https://img.icons8.com/material-rounded/24/FAB005/edit.png" alt="edit"/></a>
                            <a href = "#"><img class = "draftIcons" width="24" height="24" src="https://img.icons8.com/fluency-systems-filled/24/FA5252/filled-trash.png" alt="filled-trash"/></a>
                        </div>

                    </div>



                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
