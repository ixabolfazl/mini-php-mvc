<?php $this->include_dir("panel.layouts.header") ?>

                <form method="post" action="<? $this->url('article/store') ?>">
                    <section class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="title ...">
                    </section>
                    <section class="form-group">
                        <label for="cat_id">Category</label>
                        <select class="form-control" id="cat_id" name="cat_id">
                            <? foreach ($categories as $category){?>
                            <option value="<? echo $category['id'] ?>"><? echo $category['name'] ?></option>
                            <? } ?>
                        </select>
                    </section>
                    <section class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" rows="5"  name="body" placeholder="body ..."></textarea>
                    </section>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>

<?php $this->include_dir("panel.layouts.footer") ?>