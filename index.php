<?php
session_start();
include("config/db.php");

// Store error message in a variable
$error_message = '';
if (isset($_SESSION['error'])) {
    $error_message = $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            overflow: hidden;
        }
        .main-header {
            background-color: #1a365d;
            width: 100%;
        }
        .main-footer {
            background-color: #1a365d;
            width: 100%;
        }
        .page-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .main-content {
            flex: 1;
            overflow: hidden;
        }
        .carousel {
            display: flex;
            overflow: hidden;
            position: relative;
            height: 100%;
            background-color: #1a365d;
        }
        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 100%;
            width: 100%;
        }
        .carousel-item {
            min-width: 100%;
            background-size: cover;
            background-position: center;
            height: 100%;
            position: relative;
        }
        .carousel-item::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
        }
        .carousel-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 10;
            width: 80%;
        }
        .carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 1rem;
            cursor: pointer;
            z-index: 20;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .carousel-control-prev {
            left: 10px;
        }
        .carousel-control-next {
            right: 10px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="page-container">
        <!-- Header -->
        <header class="main-header">
            <div class="container mx-auto px-4 py-3">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img src="./image/school-logo.png" alt="School Logo" class="h-12 w-auto">
                        <span class="text-white text-xl font-bold">Your School Name</span>
                    </div>
                    <nav>
                        <ul class="flex space-x-6 text-white">
                            <li><a href="#" class="hover:text-gray-300">Home</a></li>
                            <li><a href="#" class="hover:text-gray-300">About</a></li>
                            <li><a href="#" class="hover:text-gray-300">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <div class="flex h-full">
                <div class="carousel w-1/2">
                    <div class="carousel-inner">
                        <div class="carousel-item" style="background-image: url('./image/pic.jpg');">
                            <div class="carousel-content">
                                <h2 class="text-4xl font-bold mb-4">Welcome to Our School</h2>
                                <p class="text-xl">Building Tomorrow's Leaders Today</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('./image/pic2.jpg');">
                            <div class="carousel-content">
                                <h2 class="text-4xl font-bold mb-4">Excellence in Education</h2>
                                <p class="text-xl">Nurturing Minds, Shaping Futures</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('./image/pic3.jpg');">
                            <div class="carousel-content">
                                <h2 class="text-4xl font-bold mb-4">Quality Learning</h2>
                                <p class="text-xl">Empowering Through Knowledge</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('./image/pic4.jpg');">
                            <div class="carousel-content">
                                <h2 class="text-4xl font-bold mb-4">Join Our Community</h2>
                                <p class="text-xl">Where Excellence Meets Opportunity</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-control carousel-control-prev" onclick="prevSlide()">❮</div>
                    <div class="carousel-control carousel-control-next" onclick="nextSlide()">❯</div>
                </div>
                <div class="w-1/2 flex flex-col justify-center items-center bg-white p-8">
                    <header class="mb-8">
                        <h1 class="text-4xl font-bold text-gray-800">Welcome to Our School</h1>
                    </header>
                    <form class="w-full max-w-sm" action="auth/login.php" method="POST">
                        <?php if ($error_message): ?>
                            <div class="mb-4 text-red-500"><?php echo htmlspecialchars($error_message); ?></div>
                        <?php endif; ?>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Username
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                   name="username" id="username" type="text" required placeholder="Username">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
                                   name="password" id="password" type="password" required placeholder="********">
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                                    type="submit">
                                Sign In
                            </button>
                        </div>
                    </form>
                    <footer class="mt-8">
                        <p class="text-gray-600 text-sm">&copy; 2023 School. All rights reserved.</p>
                    </footer>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="main-footer text-white">
            <div class="container mx-auto px-4 py-4">
                <div class="grid grid-cols-3 gap-8">
                    <div>
                        <h3 class="font-bold mb-2">Contact Us</h3>
                        <p>Phone: (123) 456-7890</p>
                        <p>Email: info@yourschool.com</p>
                    </div>
                    <div>
                        <h3 class="font-bold mb-2">Quick Links</h3>
                        <ul>
                            <li><a href="#" class="hover:text-gray-300">Student Portal</a></li>
                            <li><a href="#" class="hover:text-gray-300">Parent Portal</a></li>
                            <li><a href="#" class="hover:text-gray-300">Faculty Access</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-2">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="hover:text-gray-300">Facebook</a>
                            <a href="#" class="hover:text-gray-300">Twitter</a>
                            <a href="#" class="hover:text-gray-300">Instagram</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 pt-4 border-t border-gray-600">
                    <p>&copy; 2023 Your School Name. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const totalSlides = slides.length;

        function showSlide(index) {
            const carouselInner = document.querySelector('.carousel-inner');
            if (index >= totalSlides) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = totalSlides - 1;
            } else {
                currentSlide = index;
            }
            carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        setInterval(nextSlide, 5000);
    </script>
</body>
</html>
