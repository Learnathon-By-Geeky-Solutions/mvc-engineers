<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 60px;
            background-color: #f1f3f5;
            padding-top: 20px;
        }
        .sidebar .nav-link {
            color: #6c757d;
            text-align: center;
            padding: 15px 0;
        }
        .main-content {
            margin-left: 60px;
            padding: 40px;
        }
        .welcome-section {
            margin-bottom: 40px;
        }
        .welcome-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .welcome-section p {
            color: #6c757d;
        }
        .product-card {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        .product-card.selected {
            border-color: #28a745;
        }
        .product-card .check-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #28a745;
            font-size: 1.5rem;
        }
        .footer-links {
            margin-top: 40px;
        }
        .footer-links .col {
            text-align: center;
        }
        .footer-links a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
<!-- Sidebar -->
<div class="sidebar">
    <nav class="nav flex-column">
        <a class="nav-link" href="#"><i class="bi bi-grid"></i></a>
        <a class="nav-link" href="#"><i class="bi bi-person"></i></a>
        <a class="nav-link" href="#"><i class="bi bi-gear"></i></a>
    </nav>
</div>

<!-- Main Content -->
<div class="main-content">
    <!-- Welcome Section -->
    <div class="welcome-section">
        <h1>Welcome, {{auth()->user()->name}}</h1>
        <p>It's always a pleasure to see you. Please select the restaurant you wish to play. Have a great session!</p>
    </div>

    <!-- Product Selection -->
    <div class="row mb-4">
        <div class="col-12">
            <div>
                <h2 class="text-center">Select Your Restaurant</h2>
            </div>
            <div class="row mb-4">

                {{$slot}}
            </div>
        </div>

    </div>




<!-- Bootstrap JS and Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
