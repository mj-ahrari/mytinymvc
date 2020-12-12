<?php  $this->include("panel.layout.header") ?>
            <section class="col-md-10 pt-3">

                <form method="POST" action="<?php echo BASE_URL."article/store" ?>">
                    <section class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="title ..." name="title">
                    </section>
                    <section class="form-group">
                        <label for="cat_id">Category</label>
                        <select class="form-control" id="cat_id" name="cat_id">
                            <?php foreach($categories as $category) {?>
                            <option value="<?php echo $category['id'] ?>"><?=$category['name']?></option>
                            <?php }?>
                        </select>
                    </section>
                    <section class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" rows="5" placeholder="body ..." name="body"></textarea>
                    </section>
                    <button type="submit" class="btn btn-primary" name="insert">Create</button>
                </form>
                <?php
                if(isset($Err) and $Err=2020){
                    ?>
                    <script>alert("news successfully created")</script>
                    <?php
                }
                ?>
            </section>
<?php  $this->include("panel.layout.footer") ?>