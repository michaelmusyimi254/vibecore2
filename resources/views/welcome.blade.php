<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VibeCore - Your Complete Fitness & Wellness Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
        }
        .feature-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .btn-custom {
            border-radius: 25px;
            padding: 12px 30px;
            font-weight: 600;
        }
        .stats-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }
        .stat-card {
            text-align: center;
            padding: 30px;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #667eea;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-dumbbell me-2"></i>VibeCore
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Your Complete Fitness & Wellness Platform</h1>
            <p class="lead mb-5">Connect with trainers, discover facilities, join events, and shop for fitness gear all in one place.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('register') }}" class="btn btn-light btn-custom">
                    <i class="fas fa-user-plus me-2"></i>Get Started
                </a>
                <a href="#features" class="btn btn-outline-light btn-custom">
                    <i class="fas fa-info-circle me-2"></i>Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">What VibeCore Offers</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-dumbbell fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Find Facilities</h5>
                            <p class="card-text">Discover gyms, swimming pools, boxing clubs, yoga studios, and more in your area.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-user-tie fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Connect with Trainers</h5>
                            <p class="card-text">Book sessions with certified trainers specializing in fitness, swimming, boxing, dance, and more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-calendar-alt fa-3x text-warning mb-3"></i>
                            <h5 class="card-title">Join Events</h5>
                            <p class="card-text">Participate in bootcamps, workshops, competitions, and wellness retreats.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-shopping-cart fa-3x text-info mb-3"></i>
                            <h5 class="card-title">Shop Fitness Gear</h5>
                            <p class="card-text">Browse and purchase equipment, supplements, apparel, and fitness accessories.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-users fa-3x text-danger mb-3"></i>
                            <h5 class="card-title">Community</h5>
                            <p class="card-text">Connect with like-minded fitness enthusiasts and share your journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt fa-3x text-secondary mb-3"></i>
                            <h5 class="card-title">Mobile Ready</h5>
                            <p class="card-text">Access VibeCore on any device with our responsive platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">50+</div>
                        <p class="text-muted">Facilities</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">100+</div>
                        <p class="text-muted">Trainers</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">500+</div>
                        <p class="text-muted">Products</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">1000+</div>
                        <p class="text-muted">Users</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h3 class="mb-4">Ready to Start Your Fitness Journey?</h3>
            <p class="lead mb-4">Join thousands of users who have transformed their lives with VibeCore.</p>
            <a href="{{ route('register') }}" class="btn btn-light btn-custom">
                <i class="fas fa-rocket me-2"></i>Join Now
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 VibeCore. Made by Brandsmith. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 