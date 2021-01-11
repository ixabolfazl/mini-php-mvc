<?php $this->include_dir("panel.layouts.header") ?>

    <form method="post" action="<? $this->url('category/store') ?>">
        <section class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name ...">
        </section>
        <section class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="description ...">
        </section>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
<?php $this->include_dir("panel.layouts.footer") ?>