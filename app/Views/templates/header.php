<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">AdminDB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex ms-3" action="/search" method="get">
                    <input class="form-control me-2" type="search" name="q" placeholder="Search admins...">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                <div class="form-check form-switch ms-auto">
                    <input class="form-check-input" type="checkbox" id="darkModeToggle">
                    <label class="form-check-label text-white" for="darkModeToggle">Dark Mode</label>
                </div>
            </div>
        </div>
    </nav>
    <div class="container my-5">