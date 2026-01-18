<style>
    .navbar {
        background: rgba(255, 255, 255, 0.95) !important;
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .navbar-brand {
        font-weight: bold;
        color: #667eea !important;
    }
    .nav-link {
        color: #333 !important;
        font-weight: 500;
    }
    .nav-link:hover {
        color: #667eea !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><i class="fas fa-graduation-cap"></i> Student Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('students.index') }}"><i class="fas fa-users"></i> Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('students.create') }}"><i class="fas fa-plus"></i> Add Student</a>
                </li>
            </ul>
        </div>
    </div>
</nav>