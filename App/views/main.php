<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">ВАЖНО! Секрет раскрыт!</h1>
        <p class="lead my-3">Что бы изучить PHP программирование всего за 3 дня, нужно всего лишь на восходящую луну сказать...</p>
        <p class="lead mb-0"><a href="https://www.php.net/manual/ru/langref.php" class="text-white font-weight-bold" target="_blank">Читать статью...</a></p>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-warning">Тема: MySQL</strong>
                <h3 class="mb-0">Введение в MySQL</h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">MySQL - система управления реляционными базами данных</p>
                <a href="#" class="stretched-link">Читать статью</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="img/mysql.svg" width="200" height="250">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">Тема: PHP</strong>
                <h3 class="mb-0">Новое в PHP 7.3</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">PHP - это интерпретируемый язык програмирования. Используется для разработки WEB приложений и сайтов</p>
                <a href="#" class="stretched-link">Читать статью</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="img/PHP-logo.svg" width="200" height="250">
            </div>
        </div>
    </div>
</div>
</div>
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                Последние статьи блога
            </h3>
            <?php if (isset($data)):?>

                <?php foreach ($data as $key=>$value):?>
                    <div class="blog-post">
                        <h4><a href="#" class="text-dark"><?=$value['title'];?></a></h4>
                        <p class="blog-post-meta"><?=$value['date_add'];?> >> Автор: <a href="#"><?=$value['autor'];?></a></p>
                        <p><?=$value['text'];?></p>
                        <a href="#">Читать статью</a>
                        <hr>
                    </div><!-- /.blog-post -->
                <?php endforeach;?>

            <?php endif;?>

            <nav class="blog-pagination">
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Предыдущая страница</a>
                <a class="btn btn-outline-primary" href="#">Еще статьи</a>
            </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">О Блоге</h4>
                <p class="mb-0">Блог создан с целью изучения базовых навыков в WEB разработке посредством <em>PHP, MySQL, HTML/CSS, GIT, JS/JQuery/Ajax</em></p>
            </div>

            <div class="p-4">
                <h4 class="font-italic">Рубрики статей</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">MySQL</a></li>
                    <li><a href="#">Java Script</a></li>
                    <li><a href="#">Ajax</a></li>
                    <li><a href="#">JQuery</a></li>
                </ol>
            </div>

            <div class="p-4">
                <h4 class="font-italic">Автор в социальных сетях</h4>
                <ol class="list-unstyled">
                    <li><a href="https://github.com/RusanovAn">GitHub</a></li>
                    <li><a href="https://www.facebook.com/floverspresent">Facebook</a></li>
                    <li><a href="https://www.linkedin.com/in/%D0%B0%D0%BD%D0%B4%D1%80%D0%B5%D0%B9-%D1%80%D1%83%D1%81%D0%B0%D0%BD%D0%BE%D0%B2-6827751b2/">LinkedIn</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->
