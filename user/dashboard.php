<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOTOO - Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm fixed w-full top-0 z-50">
        <div class="flex justify-between items-center px-6 py-3">
            <div class="flex items-center space-x-4">
                <img src="../assets/images/logo.png" alt="TOTOO Logo" class="h-8">
                <button id="menu-toggle" class="lg:hidden">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button class="flex items-center space-x-2">
                        <img src="../assets/images/avatar.png" alt="Profile" class="w-10 h-10 rounded-full">
                        <span class="hidden md:inline">Student Name</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar Navigation -->
    <aside id="sidebar" class="bg-white fixed left-0 top-16 h-full w-64 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 shadow-sm z-40">
        <nav class="p-4">
            <ul class="space-y-2">
                <li>
                    <a href="dashboard.php" class="flex items-center space-x-2 p-3 rounded-lg bg-blue-50 text-blue-600">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="courses.php" class="flex items-center space-x-2 p-3 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-graduation-cap"></i>
                        <span>My Courses</span>
                    </a>
                </li>
                <li>
                    <a href="schedule.php" class="flex items-center space-x-2 p-3 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-calendar"></i>
                        <span>Schedule</span>
                    </a>
                </li>
                <li>
                    <a href="grades.php" class="flex items-center space-x-2 p-3 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-chart-line"></i>
                        <span>Grades</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php" class="flex items-center space-x-2 p-3 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="../logout.php" class="flex items-center space-x-2 p-3 rounded-lg hover:bg-red-50 hover:text-red-600">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="lg:ml-64 pt-16 min-h-screen">
        <div class="p-6">
            <!-- Student Profile Card -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6">
                    <div class="relative">
                        <img src="../assets/images/student-photo.jpg" alt="Student Photo" 
                             class="w-32 h-32 rounded-full object-cover border-4 border-blue-50">
                        <span class="absolute bottom-2 right-2 w-4 h-4 bg-green-400 rounded-full border-2 border-white"></span>
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h2 class="text-2xl font-bold text-gray-800">Juan Dela Cruz</h2>
                        <p class="text-gray-600">Student Number: 2021-00123</p>
                        <p class="text-gray-600">BS Computer Science</p>
                        <p class="text-blue-600">2nd Year Student</p>
                    </div>
                    <div class="flex flex-col items-center md:items-end space-y-2">
                        <div class="bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-sm font-medium">
                            Regular Student
                        </div>
                        <p class="text-gray-500">Block A</p>
                    </div>
                </div>
            </div>

            <!-- Academic Progress -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                <h3 class="text-lg font-semibold mb-4">Academic Progress</h3>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium">Overall Completion</span>
                            <span class="text-sm font-medium text-blue-600">65%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="border rounded-lg p-4">
                            <p class="text-sm text-gray-500">Major Subjects</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-lg font-bold">24/36</span>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 67%"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border rounded-lg p-4">
                            <p class="text-sm text-gray-500">Minor Subjects</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-lg font-bold">18/24</span>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border rounded-lg p-4">
                            <p class="text-sm text-gray-500">Electives</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-lg font-bold">6/12</span>
                                <div class="w-20 bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-500 h-2 rounded-full" style="width: 50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Enrolled Courses</p>
                            <h3 class="text-2xl font-bold">6</h3>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-lg">
                            <i class="fas fa-book text-blue-600"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Current GPA</p>
                            <h3 class="text-2xl font-bold">3.8</h3>
                        </div>
                        <div class="bg-green-100 p-3 rounded-lg">
                            <i class="fas fa-chart-line text-green-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Upcoming Tests</p>
                            <h3 class="text-2xl font-bold">3</h3>
                        </div>
                        <div class="bg-yellow-100 p-3 rounded-lg">
                            <i class="fas fa-clock text-yellow-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Achievements</p>
                            <h3 class="text-2xl font-bold">12</h3>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-lg">
                            <i class="fas fa-medal text-purple-600"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold mb-4">Recent Activities</h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-4 p-3 hover:bg-gray-50 rounded-lg transition">
                        <div class="bg-blue-100 p-3 rounded-lg">
                            <i class="fas fa-file-alt text-blue-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium">Assignment Submitted</p>
                            <p class="text-sm text-gray-500">Programming Fundamentals - Lab 3</p>
                        </div>
                        <span class="text-sm text-gray-500">2 hours ago</span>
                    </div>

                    <div class="flex items-center space-x-4 p-3 hover:bg-gray-50 rounded-lg transition">
                        <div class="bg-green-100 p-3 rounded-lg">
                            <i class="fas fa-check text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium">Grade Posted</p>
                            <p class="text-sm text-gray-500">Mathematics Quiz 2: 95%</p>
                        </div>
                        <span class="text-sm text-gray-500">Yesterday</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-sm lg:ml-64">
        <div class="container mx-auto px-6 py-4">
            <p class="text-center text-gray-600">© 2023 TOTOO Learning Management System</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>
