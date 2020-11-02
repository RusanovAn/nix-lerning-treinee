<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nix-learning</title>
    <meta name="description" content="first site Nix-learning">
    <link rel="stylesheet" href="/beginer_level/cssiv/css/styles.css?v=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<header>NIX Education</header>
<nav class="nav">
    <a class="nav-link" href="/">Главная</a>
    <a class="nav-link" href="/beginer_level/simple-multi-table.phple.php">Урок 1</a>
    <a class="nav-link" href="/beginer_level/color-multi-table.php">Урок 2</a>
    <a class="nav-link" href="/beginer_level/form.phprm.php">Урок 3</a>
</nav>
<main>
    <h1>Таблица умножения Цветная</h1>

    <?php
        $result='<div class="container"><table class="umnojen">';
        $kar=1;
        for ($j=1;$j<=10;$j++){
           if ($j==$kar){
              $result.='<tr>';
              $kar=$kar+5;
           }
           $result.='<td>';
            for ($k=1;$k<=10;$k++){
                $result.=$j.'*'.$k.'='.($j * $k).'<br>';
            }
            $result.='</td>';
            if ($j==$kar) $result.='</tr>';
        }
        $result.='</table></div>';

    $m1   = range(1, 4);
    $m2   = [
        '<span style="color: red">1</span>',
        '<span style="color: green">2</span>',
        '<span style="color: yellow">3</span>',
        '<span style="color: blue">4</span>',
    ];

    $result=str_replace($m1,$m2,$result);

        echo $result;
    ?>
</main>
<footer>Футтер тестовый</footer>

</body>
</html>
