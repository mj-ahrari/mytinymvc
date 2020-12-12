
<?php
    $this->include("template.layout.header",compact("categories"));
    ?>
    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <section class="col-md-12">
                <h1><?=$article["title"]?></h1>
                <h5 class="d-flex justify-content-between align-items-center">
                    <span class="date-time"><?=$article['created_at']?></span>
                </h5>
                <article class="bg-article p-3"><?=$article['body']?></article>
            </section>
        </section>
    </section>
    <?php
    $this->include("template.layout.footer");
    ?>