<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPDoorway</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <style>
        header {
            height: 50px;
        }
        .nav-wrapper {
            background-color: #000999;
        }
        .brand-logo {
            margin-left: 20px;
            text-shadow: 2px 2px black;
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .address {
            color:black;
        }

        main {
            flex: 1 0 auto;
        }
        footer {
            background-color: black;
            color: white;
            text-align: center;
            height: 50px;
            padding-top: 15px;
        }
     
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="/" class="brand-logo">MP Doorway</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/forms">Forms</a></li>
                    <li><a href="/properties">Properties</a></li>
                    <li><a href="/about">About Us</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield ('content')
    </main>
    <footer>
        © Copyright 2018 MP Doorway
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>