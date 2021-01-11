<?php $this->include_dir("panel.layouts.header") ?>

    <form method="post" action="<? $this->url('article/update/'.$article['id']) ?>">
        <section class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<? echo $article['title'] ?>">
        </section>
        <section class="form-group">
            <label for="cat_id">Category</label>
            <select class="form-control" id="cat_id" name="cat_id">
                <? foreach ($categories as $category){?>
                    <option <? if($article['cat_id']==$category['id']) echo "SELECTED"?> value="<? echo $category['id'] ?>"><? echo $category['name'] ?></option>
                <? } ?>
            </select>
        </section>
        <section class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="5"><? echo $article['body'] ?></textarea>
        </section>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
<?php $this->include_dir("panel.layouts.footer") ?>