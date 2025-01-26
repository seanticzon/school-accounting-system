<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOTOO - Admin Dashboard</title>
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
                        <img src="../assets/images/admin-avatar.png" alt="Admin" class="w-10 h-10 rounded-full">
                        <span class="hidden md:inline">Administrator</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Admin Sidebar -->
    <aside id="sidebar" class="bg-white fixed left-0 top-16 h-full w-64 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 shadow-sm z-40">
        <nav class="p-4">
            <ul class="space-y-2">
                <li>
                    <a href="dashboard.php" class="flex items-center space-x-2 p-3 rounded-lg bg-blue-50 text-blue-600">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="students.php" class="flex items-center space-x-2 p-3 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-user-graduate"></i>
                        <span>Student Management</span>
                    </a>
                </li>
                <li>
                    <a href="faculty.php" class="flex items-center space-x-2 p-3 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Faculty Management</span>
                    </a>
                </li>
                <li>
                    <a href="courses.php" class="flex items-center space-x-2 p-3 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-book"></i>
                        <span>Course Management</span>
                    </a>
                </li>
                <li>
                    <a href="settings.php" class="flex items-center space-x-2 p-3 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-cog"></i>
                        <span>System Settings</span>
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
            <!-- Admin Overview -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">System Overview</h2>
                    <div class="flex space-x-2">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                            <i class="fas fa-plus mr-2"></i>Add New User
                        </button>
                        <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200">
                            <i class="fas fa-download mr-2"></i>Download Report
                        </button>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Total Students</p>
                            <h3 class="text-2xl font-bold">1,234</h3>
                            <p class="text-green-600 text-sm">+12% from last month</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-lg">
                            <i class="fas fa-users text-blue-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Active Courses</p>
                            <h3 class="text-2xl font-bold">86</h3>
                            <p class="text-green-600 text-sm">+5 new courses</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-lg">
                            <i class="fas fa-book-open text-green-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Faculty Members</p>
                            <h3 class="text-2xl font-bold">48</h3>
                            <p class="text-blue-600 text-sm">2 pending approvals</p>
                        </div>
                        <div class="bg-yellow-100 p-3 rounded-lg">
                            <i class="fas fa-chalkboard-teacher text-yellow-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">System Status</p>
                            <h3 class="text-2xl font-bold">99.9%</h3>
                            <p class="text-green-600 text-sm">All systems operational</p>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-lg">
                            <i class="fas fa-server text-purple-600"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity and Quick Actions -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Recent System Activities -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold mb-4">Recent Activities</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4 p-3 hover:bg-gray-50 rounded-lg">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <i class="fas fa-user-plus text-blue-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">New Student Registration</p>
                                <p class="text-sm text-gray-500">15 new students registered</p>
                            </div>
                            <span class="text-sm text-gray-500">2 hours ago</span>
                        </div>

                        <div class="flex items-center space-x-4 p-3 hover:bg-gray-50 rounded-lg">
                            <div class="bg-green-100 p-3 rounded-lg">
                                <i class="fas fa-file-alt text-green-600"></i>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">Course Updates</p>
                                <p class="text-sm text-gray-500">Updated 3 course syllabi</p>
                            </div>
                            <span class="text-sm text-gray-500">4 hours ago</span>
                        </div>
                    </div>
                </div>

                <!-- System Health -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold mb-4">System Health</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium">Server Load</span>
                                <span class="text-sm font-medium text-green-600">28%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 28%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium">Storage Usage</span>
                                <span class="text-sm font-medium text-yellow-600">72%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-yellow-500 h-2 rounded-full" style="width: 72%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-sm lg:ml-64">
        <div class="container mx-auto px-6 py-4">
            <p class="text-center text-gray-600">© 2023 TOTOO Learning Management System - Admin Panel</p>
        </div>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>
