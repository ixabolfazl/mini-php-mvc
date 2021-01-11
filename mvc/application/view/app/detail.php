
<?php $this->include_dir("app.layouts.header",['categories' => $categories]) ?>
    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <section class="col-md-12">
                <h1><? echo $article['title'] ?></h1>
                <h5 class="d-flex justify-content-between align-items-center">
                    <a href="<? $this->url('home/category/'.$article['cat_id']) ?>"><? echo $article['category'] ?></a>
                    <span class="date-time"> <? echo $article['created_at'] ?></span>
                </h5>
                <article class="bg-article p-3">
                    <? echo $article['body'] ?>
                </article>
            </section>
        </section>
    </section>
<?php $this->include_dir("app.layouts.footer") ?>