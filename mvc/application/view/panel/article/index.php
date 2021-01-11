<?php $this->include_dir("panel.layouts.header") ?>

                <section class="mb-2 d-flex justify-content-between align-items-center">
                    <h2 class="h4">Articles</h2>
                    <a href="<? $this->url('article/create') ?>" class="btn btn-sm btn-success">Create</a>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>cat_id</th>
                            <th>body</th>
                            <th>setting</th>
                        </tr>
                        </thead>
                        <tbody>

                        <? $i=1;
                        foreach ($articles as $article){ ?>

                        <tr>
                            <td><? echo $i ?></td>
                            <td><? echo $article['title'] ?></td>
                            <td><? echo $article['cat_id'] ?></td>
                            <td><? echo substr($article['body'],0,40)." ..." ?></td>
                            <td>
                                <a href="<? $this->url('article/edit/'.$article['id']) ?>" class="btn btn-info btn-sm">Edit</a>
                                <a href="<? $this->url('article/destroy/'.$article['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                        <? $i++;}?>
                        </tbody>
                    </table>
                </section>
<?php $this->include_dir("panel.layouts.footer") ?>