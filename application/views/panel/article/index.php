<?php  $this->include("panel.layout.header") ?>
            <section class="col-md-10 pt-3">

                <section class="mb-2 d-flex justify-content-between align-items-center">
                    <h2 class="h4">Articles</h2>
                    <a href="<?php echo BASE_URL."article/create" ?>" class="btn btn-sm btn-success">Create</a>
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
                        <?php 
                        $i=1;
                        foreach($articles as $article){; ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$article['title']?></td>
                                <td><?=$article['cat_id']?></td>
                                <td><?=$article['summary']?></td>
                                <td>
                                    <a href="<?php echo BASE_URL."article/create/".$article['id']?>" class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?php echo BASE_URL."article/delete/".$article['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php $i++; }?>
                        </tbody>
                    </table>
                </section>


            </section>
<?php  $this->include("panel.layout.footer") ?>