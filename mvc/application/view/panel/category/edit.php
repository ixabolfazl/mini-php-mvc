<?php $this->include_dir("panel.layouts.header"); ?>

    <form method="post" action="<? $this->url('category/update/'.$category['id']) ?>">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<? echo $category['name'] ?>" ">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="<? echo $category['description'] ?>" ">
                    </section>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
<?php $this->include_dir("panel.layouts.footer") ?>