<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your Library App</title>
    
        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
            }
    
            .container {
                padding: 20px;
                border-radius: 10px;
            }
            
            h1 {
                margin: 0;
                font-size: 30px;
                font-weight: bolder;
            }
    
            ul {
                list-style-type: none;
                padding: 0;
                display: flex;
                justify-content: space-around;
                margin-top: 10px;
            }
    
            li {
                margin-right: 10px;
            }
    
            a {
                padding: 10px;
                border-radius: 5px;
                text-decoration: none;
            }

            a:hover, a.active {
                background: #ff2e62;
            }
        </style>
    
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <h1 class="navbar-brand mb-0 h1">Library</h1>
    
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ url('/author') }}" class="nav-link {{ Request::is('author') ? 'active' : '' }}">Authors</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/book') }}" class="nav-link {{ Request::is('book') ? 'active' : '' }}">Books</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/copy') }}" class="nav-link {{ Request::is('copy') ? 'active' : '' }}">Copies</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="container">
    
            @yield('content')
        </div>
    
 
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
    