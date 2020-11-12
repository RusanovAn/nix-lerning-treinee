<main role="main" class="container">
    <hr>
    <div class="row">
        <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">Цитата дня:</h4>
                <p class="mb-0">Изучай программирование. Знания за плечами не носить</p>
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

        </aside><!-- /.blog-sidebar -->
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                Список постов
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
<!--            <nav class="blog-pagination">
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Предыдущая страница</a>
                <a class="btn btn-outline-primary" href="#">Еще статьи</a>
            </nav>-->

        </div><!-- /.blog-main -->
    </div><!-- /.row -->

</main><!-- /.container -->
