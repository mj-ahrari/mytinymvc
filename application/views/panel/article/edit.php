<?php $this->include("panel.layout.header") ?>
<section class="col-md-10 pt-3">

    <form action="<?php echo BASE_URL . "article/update/".$article['id'] ?>" method="POST">
        <section class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title ..." name="title" value="<?php echo $article['title'] ?>">
        </section>
        <section class="form-group">
            <label for="cat_id">Category</label>
            <select class="form-control" id="cat_id" name="cat_id">
                <?php foreach ($categories as $category) { ?>
                    <option value="<?php echo $category['id'] ?>" <?php if ($article['cat_id'] === $category['id']) {
                                                                        echo "selected";
                                                                    } ?>><?php echo $category['name'] ?></option>
                <?php } ?>
            </select>
        </section>
        <section class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" rows="5" placeholder="body ..." name="body"><?php echo $article['body'] ?></textarea>
        </section>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>

</section>
<?php $this->include("panel.layout.footer") ?>