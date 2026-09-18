<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
    body {
        background-color: #F3F7F0;
        color: #1B3022;
    }

    .navbar {
        background-color: #214E34 !important;
    }

    .btn-primary {
        background-color: #7A9E7E;
        border-color: #7A9E7E;
        color: #1B3022;
    }

    .btn-primary:hover {
        background-color: #668A6B;
        border-color: #668A6B;
    }

    .btn-secondary {
        background-color: #214E34;
        border-color: #214E34;
    }

    .table-dark {
        --bs-table-bg: #214E34;
    }

    footer {
        background-color: #DFEADF !important;
    }
</style>

    <title><?= esc($title) ?></title>
</head>
<body>
    <nav class="navbar navbar-expand bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">POS System</a>

            <div class="navbar-nav">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/customers">Customers</a>
                <a class="nav-link" href="/users">Users</a>
            </div>
        </div>
    </nav>

    <main class="container py-4">