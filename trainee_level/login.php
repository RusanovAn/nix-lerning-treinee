<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Регистрация | NIX-Trainee Level</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <!-- Header -->
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/">NIX-Trainee Level</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="btn btn-sm btn-outline-secondary" href="login.php">Авторизация</a>
                <a class="btn btn-sm btn-outline-secondary" href="registration.php">Регистрация</a>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!-- Navigation -->
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-start">
            <a class="p-2 text-muted" href="#">Посты</a>
            <a class="p-2 text-muted" href="#">| Cсылка Два |</a>
            <a class="p-2 text-muted" href="#">Cсылка три</a>
        </nav>
    </div>
    <!-- End Navigation -->
    <!-- Main content -->
    <div class="py-5 text-center">
        <h2>Авторизация</h2>
    </div>
    <div class="row">
        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Данные пользователя</h4>
            <form class="needs-validation" novalidate>

                    <div class="col-md-3 mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            E-mail указан не верно
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="inputPassword3">Пароль</label>
                        <input type="password" class="form-control" id="inputPassword3">
                        <div class="invalid-feedback">
                            Пароль указан не верно
                        </div>
                    </div>
                <div  class="col-md-3 mb-3">
                    <button type="submit" class="btn btn-primary">Авторизация</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Main content -->
</div>
<!-- Footer -->
<footer class="blog-footer">
    <p>Шаблон блога взят с сайта <a href="https://getbootstrap.com/">Bootstrap</a> Автор шаблона <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>Автор блога <a href="https://www.facebook.com/floverspresent">Русанов Андрей</a></p>
    <p>
        <a href="#">На Верх</a>
    </p>
</footer>
<!-- END Footer -->
</html>
