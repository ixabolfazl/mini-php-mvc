<?php $this->include_dir("app.layouts.header",['categories' => $categories]) ?>

    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <? foreach ($articles as $article) {?>
            <section class="col-md-4">
                <h2><? echo $article['title'] ?></h2>
                <p><? echo substr($article['body'],0,120)." ..." ?></p>
                <p><a class="btn btn-primary" href="<? $this->url('home/show/'.$article['id']) ?>" role="button">View details »</a></p>
            </section>
            <? } ?>

    </section>
<?php $this->include_dir("app.layouts.footer") ?>