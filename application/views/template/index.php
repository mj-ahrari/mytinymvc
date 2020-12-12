<?php
    $this->include("template.layout.header",compact("categories"));
    ?>
    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <?php 
            foreach($articles as $article){
            ?>
            <section class="col-md-4">
                <h2><?=$article['title']?></h2>
                <p><?=$article['summary']?></p>
                <p><a class="btn btn-primary" href="<?php echo BASE_URL.'home/show/'.$article['id']?>" role="button">View details »</a></p>
            </section>
            <?php
            }
            ?>
        </section>
    </section>

    <?php
    $this->include("template.layout.footer");
    ?>