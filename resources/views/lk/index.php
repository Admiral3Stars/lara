<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>My first web-site on Laravel</title>
</head>
<body>

<div class="container">
    <header class="site-header">
        <a href="/" class="header-logo">LaraSite</a>
        <nav class="site-menu">
            <a href="/" class="menu-item">Home</a>
            <a href="/news" class="menu-item">News</a>
            <a href="/categories" class="menu-item">Categories</a>
            <a href="/login" class="menu-item">Login</a>
        </nav>
    </header>

    <main class="site-content content-loginform">

        <form action="" method="POST">
            <input type="text" placeholder="login">
            <input type="password" placeholder="*******">
            <input type="submit" value="login">
        </form>

    </main>

    <footer class="site-footer">
        &copy Admiral 2022
    </footer>
</div>

</body>
</html>
