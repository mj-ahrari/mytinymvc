<?php  $this->include("panel.layout.header") ?>
            <section class="col-md-10 pt-3">

                <section class="mb-2 d-flex justify-content-between align-items-center">
                    <h2 class="h4">Categories</h2>
                    <a href="<?php echo BASE_URL."category/create"?>" class="btn btn-sm btn-success">Create</a>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>setting</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                            foreach($categories as $category){?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$category['name']?></td>
                                <td>
                                    <a href="<?php echo BASE_URL."category/edit/".$category['id'] ?>" class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?php echo BASE_URL."category/delete/".$category['id']?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php $i++; }?>
                        </tbody>
                    </table>
                </section>


            </section>
<?php  $this->include("panel.layout.footer") ?>