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
                    <li style="padding-right: 1.5rem;"><a href = "#">Home</a></li>
                    <li style="padding-right: 1.5rem;"><a href = "#">About</a></li>
                    <li style="padding-right: 1.5rem;"><a href = "#">Contact</a></li>
                    <button class="btn">Log In</button>
                    <button class="btn">Sign Up</button>
                </ul>
            </div>
        </nav>
        <div class="carousel-container">
            <h2>Featured Posts</h2>
            <div class="carousel">
                <div class="carousel-track">
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/FF5733/FFFFFF?text=Post+Image+1" alt="Featured Post 1">
                        <h3><a href="#">Amazing New Technologies in 2025</a></h3>
                        <p>Discover the groundbreaking innovations set to revolutionize our world this year.</p>
                        <span class="post-date">July 10, 2025</span>
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/33FF57/FFFFFF?text=Post+Image+2" alt="Featured Post 2">
                        <h3><a href="#">The Future of Remote Work: A Comprehensive Guide</a></h3>
                        <p>Explore the trends and tools shaping the remote work landscape.</p>
                        <span class="post-date">July 8, 2025</span>
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/3357FF/FFFFFF?text=Post+Image+3" alt="Featured Post 3">
                        <h3><a href="#">Top 10 Healthy Recipes for Busy Professionals</a></h3>
                        <p>Quick and nutritious meals to keep you energized throughout the week.</p>
                        <span class="post-date">July 5, 2025</span>
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/FF33A1/FFFFFF?text=Post+Image+4" alt="Featured Post 4">
                        <h3><a href="#">Mastering SEO: Tips and Tricks for Bloggers</a></h3>
                        <p>Boost your blog's visibility with these essential search engine optimization strategies.</p>
                        <span class="post-date">July 3, 2025</span>
                    </div>

                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/FF5733/FFFFFF?text=Post+Image+1" alt="Featured Post 1">
                        <h3><a href="#">Amazing New Technologies in 2025</a></h3>
                        <p>Discover the groundbreaking innovations set to revolutionize our world this year.</p>
                        <span class="post-date">July 10, 2025</span>
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/33FF57/FFFFFF?text=Post+Image+2" alt="Featured Post 2">
                        <h3><a href="#">The Future of Remote Work: A Comprehensive Guide</a></h3>
                        <p>Explore the trends and tools shaping the remote work landscape.</p>
                        <span class="post-date">July 8, 2025</span>
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/3357FF/FFFFFF?text=Post+Image+3" alt="Featured Post 3">
                        <h3><a href="#">Top 10 Healthy Recipes for Busy Professionals</a></h3>
                        <p>Quick and nutritious meals to keep you energized throughout the week.</p>
                        <span class="post-date">July 5, 2025</span>
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/FF33A1/FFFFFF?text=Post+Image+4" alt="Featured Post 4">
                        <h3><a href="#">Mastering SEO: Tips and Tricks for Bloggers</a></h3>
                        <p>Boost your blog's visibility with these essential search engine optimization strategies.</p>
                        <span class="post-date">July 3, 2025</span>
                    </div>

                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/FF5733/FFFFFF?text=Post+Image+1" alt="Featured Post 1">
                        <h3><a href="#">Amazing New Technologies in 2025</a></h3>
                        <p>Discover the groundbreaking innovations set to revolutionize our world this year.</p>
                        <span class="post-date">July 10, 2025</span>
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/33FF57/FFFFFF?text=Post+Image+2" alt="Featured Post 2">
                        <h3><a href="#">The Future of Remote Work: A Comprehensive Guide</a></h3>
                        <p>Explore the trends and tools shaping the remote work landscape.</p>
                        <span class="post-date">July 8, 2025</span>
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/3357FF/FFFFFF?text=Post+Image+3" alt="Featured Post 3">
                        <h3><a href="#">Top 10 Healthy Recipes for Busy Professionals</a></h3>
                        <p>Quick and nutritious meals to keep you energized throughout the week.</p>
                        <span class="post-date">July 5, 2025</span>
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/400x250/FF33A1/FFFFFF?text=Post+Image+4" alt="Featured Post 4">
                        <h3><a href="#">Mastering SEO: Tips and Tricks for Bloggers</a></h3>
                        <p>Boost your blog's visibility with these essential search engine optimization strategies.</p>
                        <span class="post-date">July 3, 2025</span>
                    </div>
                </div>
            </div>

            <button class="carousel-button prev">&#10094;</button>
            <button class="carousel-button next">&#10095;</button>

            <div class="carousel-indicators">
        </div>

    <script>
        const carousel = document.querySelector('.carousel');
        const carouselTrack = document.querySelector('.carousel-track');
        const carouselItems = document.querySelectorAll('.carousel-item');
        const prevButton = document.querySelector('.carousel-button.prev');
        const nextButton = document.querySelector('.carousel-button.next');
        const indicatorsContainer = document.querySelector('.carousel-indicators');

        const originalItemCount = carouselItems.length / 3; // Assuming we duplicated original set 3 times
        const uniqueItems = Array.from(carouselItems).slice(0, originalItemCount); // Get only the first set of unique items

        let currentIndex = 0; // Tracks the index of the current unique item (for indicators)
        let scrollPosition = 0; // Tracks the pixel scroll position
        const scrollSpeed = 0.5; // Pixels per frame
        let autoScrollInterval; // To store the interval ID for stopping/starting auto-scroll
        let animationFrameId; // To store the requestAnimationFrame ID

        // Calculate item width including margin
        const itemWidth = carouselItems[0].offsetWidth + (parseFloat(getComputedStyle(carouselItems[0]).marginRight) || 0);
        const totalOriginalWidth = itemWidth * originalItemCount; // Width of one complete set of unique items

        // 1. Create Indicators
        function createIndicators() {
            uniqueItems.forEach((_, index) => {
                const indicator = document.createElement('div');
                indicator.classList.add('indicator');
                if (index === currentIndex) {
                    indicator.classList.add('active');
                }
                indicator.addEventListener('click', () => {
                    goToSlide(index);
                    resetAutoScroll(); // Reset auto-scroll timer after manual interaction
                });
                indicatorsContainer.appendChild(indicator);
            });
        }

        // 2. Update Indicators
        function updateIndicators() {
            const indicators = document.querySelectorAll('.indicator');
            indicators.forEach((indicator, index) => {
                indicator.classList.remove('active');
                if (index === currentIndex) {
                    indicator.classList.add('active');
                }
            });
        }

        // 3. Go to a specific slide (for buttons and indicators)
        function goToSlide(index, smooth = true) {
            currentIndex = index;
            const targetScrollPosition = itemWidth * (originalItemCount + index); // Target the duplicate set

            if (smooth) {
                // Use CSS transition for smooth manual slide
                carouselTrack.style.transition = 'transform 0.5s ease-in-out';
            } else {
                carouselTrack.style.transition = 'none'; // No transition for instant jumps
            }
            carouselTrack.style.transform = `translateX(-${targetScrollPosition}px)`;
            scrollPosition = targetScrollPosition; // Update scrollPosition to match
            updateIndicators();
        }

        // 4. Handle Next Slide
        function showNextSlide() {
            currentIndex = (currentIndex + 1) % originalItemCount;
            // When we reach the end of the *original* set, we need to transition to the first duplicate
            // The magic for infinite loop happens when the last visible item is part of the first duplicate set.
            // When the current scroll position is just past the original set, we instantly snap back to the start.

            // To ensure smooth transition to next, let the JS continue moving
            // Then check if we are at the wrap-around point
            let targetScroll = scrollPosition + itemWidth;
            carouselTrack.style.transition = 'transform 0.5s ease-in-out'; // Smooth transition for manual/auto slide
            carouselTrack.style.transform = `translateX(-${targetScroll}px)`;
            scrollPosition = targetScroll;

            // If we've scrolled past the first set of unique items, instantly snap back
            // This happens after the transition is complete, to avoid a visible jump
            if (currentIndex === 0) { // If it wrapped around
                 // Wait for the transition to finish before snapping
                setTimeout(() => {
                    carouselTrack.style.transition = 'none'; // Disable transition for snap
                    scrollPosition = itemWidth * originalItemCount; // Jump back to the start of the first duplicated set
                    carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
                }, 500); // Match this timeout to your CSS transition duration
            }

            updateIndicators();
        }

        // 5. Handle Previous Slide
        function showPrevSlide() {
            currentIndex = (currentIndex - 1 + originalItemCount) % originalItemCount;

            // Similar logic for going backwards: if we are at the very beginning of the original set
            // instantly jump to the equivalent position in the last duplicated set, then transition.
            if (scrollPosition <= itemWidth * originalItemCount) { // If near the first item of the original set
                 carouselTrack.style.transition = 'none'; // Disable transition for snap
                 scrollPosition = itemWidth * (originalItemCount * 2); // Jump to the start of the second duplicated set
                 carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
                 // Force a reflow to apply the instant snap before the next transition
                 carouselTrack.offsetHeight;
            }

            let targetScroll = scrollPosition - itemWidth;
            carouselTrack.style.transition = 'transform 0.5s ease-in-out'; // Smooth transition
            carouselTrack.style.transform = `translateX(-${targetScroll}px)`;
            scrollPosition = targetScroll;
            updateIndicators();
        }

        // 6. Auto-scrolling logic
        function startAutoScroll() {
            // Clear any existing interval to prevent multiple intervals running
            if (autoScrollInterval) {
                clearInterval(autoScrollInterval);
            }
            // Set an interval to automatically move to the next slide
            autoScrollInterval = setInterval(() => {
                showNextSlide();
            }, 3000); // Change slide every 3 seconds (3000 ms)
        }

        function stopAutoScroll() {
            clearInterval(autoScrollInterval);
        }

        // 7. Reset Auto-scroll timer (e.g., after manual interaction)
        function resetAutoScroll() {
            stopAutoScroll();
            startAutoScroll();
        }

        // Event Listeners
        prevButton.addEventListener('click', () => {
            showPrevSlide();
            resetAutoScroll();
        });

        nextButton.addEventListener('click', () => {
            showNextSlide();
            resetAutoScroll();
        });

        // Pause on hover over the entire carousel container
        carousel.addEventListener('mouseenter', stopAutoScroll);
        carousel.addEventListener('mouseleave', startAutoScroll);

        // Initial setup
        createIndicators();
        // Start by displaying the first item of the *first duplicate set* to allow smooth backward navigation
        goToSlide(0, false); // Go to the first item (of duplicate set) instantly
        startAutoScroll(); // Start auto-scrolling
    </script>
        </div>
    </body>
</html>
