<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container mt-5">
        <h2>UPLOAD</h2>

        <!-- Menu Navigasi -->
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.uploadnewjob') }}">Upload New Job</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.archivejob') }}">Archive Job</a>
            </li>
        </ul>

        <!-- Tombol Logout -->
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
