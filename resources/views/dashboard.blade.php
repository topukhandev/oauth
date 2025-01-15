<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            background-color: #343a40;
        }
        .sidebar .nav-link {
            color: #fff;
            padding: 10px 20px;
        }
        .sidebar .nav-link:hover {
            background-color: #495057;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .main-content {
                margin-left: 0;
            }
        }
        .card {
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar col-md-3 col-lg-2">
        <div class="d-flex flex-column p-3">
            <h4 class="text-white mb-4">Dashboard</h4>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-home me-2"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user me-2"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cog me-2"></i> Settings
                    </a>
                </li>
                <li class="nav-item mt-auto">
                    <form method="POST" action="{{ route('logout') }}" class="nav-link">
                        @csrf
                        <button type="submit" class="btn btn-link text-white p-0">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Welcome Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Welcome, {{ Auth::user()->name }}!</h2>
            <div class="text-muted">{{ now()->format('l, F j, Y') }}</div>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Total Projects</h5>
                        <h2 class="card-text">12</h2>
                        <small>↑ 10% from last month</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Active Tasks</h5>
                        <h2 class="card-text">25</h2>
                        <small>↑ 5% from last week</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">Messages</h5>
                        <h2 class="card-text">5</h2>
                        <small>3 new messages</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Recent Activity</h5>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="mb-1">New project created</h6>
                                <small class="text-muted">Project ABC was created</small>
                            </div>
                            <small class="text-muted">5 mins ago</small>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="mb-1">Task completed</h6>
                                <small class="text-muted">Homepage redesign finished</small>
                            </div>
                            <small class="text-muted">2 hours ago</small>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="mb-1">New message</h6>
                                <small class="text-muted">You have a new message from John</small>
                            </div>
                            <small class="text-muted">1 day ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>