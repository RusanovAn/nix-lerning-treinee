<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nix-learning</title>
    <meta name="description" content="first site Nix-learning">
    <link rel="stylesheet" href="/css/styles.css?v=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<header>NIX Education</header>
<nav class="nav">
    <a class="nav-link" href="/">Главная</a>
    <a class="nav-link" href="/simple-multi-table.php">Урок 1</a>
    <a class="nav-link" href="/color-multi-table.php">Урок 2</a>
    <a class="nav-link" href="/form.php">Урок 3</a>
</nav>
<main>
    <h1>Результат Формы</h1>

    <?php
    $mess=trim(htmlspecialchars($_POST['str']));
    if ($mess==''){
        echo 'Ошибка. Введите строку для перевода';
    }else{
        echo '<b>Вы ввели:</b> ', $mess,'<br>';
        function my_rev ($str)//если введен текст в кирилице
        {
            $str = iconv('utf-8', 'windows-1251', $str);
            $str = strrev($str);
            $str = iconv('windows-1251', 'utf-8', $str);
            return $str;
        }
        echo '<b>Результат:</b> '.my_rev($mess).'<br>';
    }
    ?>
    <a class="btn btn-primary my-button" href="/form.php" role="button">Вернуться к форме</a>
</main>
<footer>Футтер тестовый</footer>

</body>
</html>
