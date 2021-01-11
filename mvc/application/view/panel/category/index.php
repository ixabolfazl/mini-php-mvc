<?php $this->include_dir("panel.layouts.header") ?>

    <section class="mb-2 d-flex justify-content-between align-items-center">
        <h2 class="h4">Categories</h2>
        <a href="<? $this->url('category/create') ?>" class="btn btn-sm btn-success">Create</a>
    </section>

    <section class="table-responsive">
        <table class="table table-striped table-">
            <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>description</th>
                <th>setting</th>
            </tr>
            </thead>
            <tbody>
            <? $i=1; foreach ($categories as $category) { ?>
                <tr>
                    <td><? echo $category['id'] ?></td>
                    <td><? echo $category['name'] ?></td>
                    <td><? echo substr( $category['description'],0,40)." ..." ?></td>
                    <td>
                        <a href="<? $this->url('category/edit/'.$category['id']) ?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="<? $this->url('category/destroy/'.$category['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <? $i++; } ?>

            </tbody>
        </table>
    </section>

<?php $this->include_dir("panel.layouts.footer") ?>