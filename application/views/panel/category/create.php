<?php  $this->include("panel.layout.header") ?>
            <section class="col-md-10 pt-3">

                <form action="<?php echo BASE_URL."category/store" ?>" method="POST">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="name ..." name="name">
                    </section>
                    <button type="submit" class="btn btn-primary" name="create">Create</button>
                </form>

            </section>
<?php  $this->include("panel.layout.footer") ?>