<!-- <!DOCTYPE html>
<html>
<head>
    <title>Student TPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">TPS</a>
            <div>
                <a href="{{ route('students.index') }}" class="btn btn-outline-light btn-sm me-2">Students</a>
                <a href="{{ route('sections.index') }}" class="btn btn-outline-light btn-sm">Sections</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Student TPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    @if (!request()->routeIs('home'))
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="{{ route('home') }}">TPS</a>
                <div>
                    <a href="{{ route('students.index') }}" class="btn btn-outline-light btn-sm me-2">Students</a>
                    <a href="{{ route('sections.index') }}" class="btn btn-outline-light btn-sm">Sections</a>
                </div>
            </div>
        </nav>
    @endif

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>
