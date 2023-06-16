<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @yield('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Include CSS and other common head elements -->
</head>
<body>
    <!-- Include header and navigation -->
    
    <!-- Page content -->
    @yield('content')
    
    <!-- Include footer and other common elements -->
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
