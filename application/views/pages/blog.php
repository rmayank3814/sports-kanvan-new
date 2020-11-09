<div class="comman-page">
    <div class="global-container">
        <section class="our-blog mt-5 pb-5">
            <div class="container">
                <div class="text-center">
                    <h3 class="heading-title text-center pb-5">Blog</h3>
                    <p>It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                </div>
                <div class="row mt-5">
                <?php
                foreach($blog_data as $blog) { ?> 
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card post-cards">
                            <img src="<?php echo base_url();?>main/images/blog/<?=$blog['photo']?>" alt="forward exercise sports" class="img-fluid ">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="#"><?=$blog['title']?></a>
                                </h5>
                                <p class="date-author">
                                    <?=$blog['date']?><span class="author">By <?=$blog['author']?></span>
                                </p>
                                <p class="card-text"><?=$blog['content']?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>
    </div>
</div>