<div style="margin-top:100px">
    <?php 
        foreach($banner_data as $banner) {
    ?>

    <!-- <div class="row">
        <div class="col"> -->
            <div id="carousel " class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" title="sports image" style="background-image: url('<?php echo base_url();?>main/images/banners/<?=$banner['name']?>');">
                        <div class="caption">
                            <h1><?=$banner['title']?></h1>
                            <h2><?=$banner['sub-title']?></h2>
                            <a class="btn-text" href="<?php echo base_url();?>index.php/<?=$banner['description']?>" title="view more">View more <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="carousel-item" title="sports image" style="background-image: url('<?php echo base_url();?>main/images/banners/<?=$banner['name']?>');">
                        <div class="caption">
                            <h1><?=$banner['title']?></h1>
                            <h2><?=$banner['sub-title']?></h2>
                            <a class="btn-text" href="<?php echo base_url();?>index.php/<?=$banner['description']?>" title="view more">View more <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    <!-- </div>
    </div> -->
    <?php } ?>

    <marquee class="latest-updates"><i><?=$eventdata['event']?></i><i><?=$eventdata['date']?></i><i><?=$eventdata['time']?></i></marquee>
    <marquee behavior="alternate" scrollamount="13">Hurry Up</marquee>           

    <div class="service-half comman-gr">
        <div class="container py-1">
            <div class="row ">
                    <div class="section-head col-sm-12">
                        <h3 class="heading-title text-center pb-5">What  Choose ?</h3>
                    </div>
                <div class="col-md-6">
                    <img src="main/images/sports-1.jpg" alt=".." class="img-fluid img-bg mt-2 wow fadeInLeft" data-wow-delay="0.2s">
                </div>
                <div class="col-md-6 align-self-center wow fadeInRight" data-wow-delay="0.2s">
                    <h3 class="my-2 heading-terinary">Awesome with Ordinary Flexibility</h3>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl augue, feugiat non hendrerit quis, pellentesque et dui. Integer nisi ligula, aliquet ac ullamcorper non, scelerisque mattis nisi. Maecenas volutpat bibendum
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl augue, feugiat non hendrerit quis, pellentesque et dui. Integer nisi ligula, aliquet ac ullamcorper non, scelerisque mattis nisi. Maecenas volutpat bibendum
                        consequat. Praesent eget feugiat quam</p>

                    <a href="" title="view details" class="btn-text">View Details →</a>
                </div>
            </div>
        </div>
    </div>
    <div class="service-half comman-gr">
        <div class="container py-1">
            <div class="row ">
                <div class="section-head col-sm-12">
                    <h3 class="heading-title text-center pb-5">What  Choose ?</h3>
                </div>
                <div class="col-md-7 align-self-center wow fadeInRight" data-wow-delay="0.2s">
                    <h3 class="my-2 heading-terinary">Awesome with Ordinary Flexibility</h3>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl augue, feugiat non hendrerit quis, pellentesque et dui. Integer nisi ligula, aliquet ac ullamcorper non, scelerisque mattis nisi. Maecenas volutpat bibendum
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl augue, feugiat non hendrerit quis, pellentesque et dui. Integer nisi ligula, aliquet ac ullamcorper non, scelerisque mattis nisi. Maecenas volutpat bibendum
                        consequat. Praesent eget feugiat quam</p>

                    <a href="" title="view details" class="btn-text">View Details →</a>
                </div>
                <div class="col-md-5">
                    <img src="main/images/inner-page/fitness.gif" alt=".." class="img-fluid img-bg mt-2 wow fadeInLeft" data-wow-delay="0.2s">
                </div>
            </div>
        </div>
    </div>

    <div class="service-half comman-gr">
        <div class="container py-1">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h3 class="heading-title text-center pb-5">Why Choose ?</h3>
                </div>
                <div class="col-md-6 wrap-service11-box">
                    <div class="card card-shadow border-0 mb-4 wow">
                        <div class="p-4">
                            <h6 class="font-weight-medium"><a href="#" class="linking">Our Technology Helps You</a></h6>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl augue, feugiat non hendrerit quis, pellentesque et dui. Integer nisi ligula, aliquet ac ullamcorper non, scelerisque mattis nisi. Maecenas volutpat
                                bibendum consequat.</p>
                            <a href="#" title="Read More" class="btn-text mt-1">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 wrap-service11-box">
                    <div class="card card-shadow border-0 mb-4">
                        <div class="p-4">
                            <h6 class="font-weight-medium"><a href="#" class="linking">Meetings</a></h6>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl augue, feugiat non hendrerit quis, pellentesque et dui. Integer nisi ligula, aliquet ac ullamcorper non, scelerisque mattis nisi. Maecenas volutpat
                                bibendum consequat.</p>
                            <a href="#" title="Read More" class="btn-text mt-1">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 wrap-service11-box">
                    <div class="card card-shadow border-0 mb-4">
                        <div class="p-4">
                            <h6 class="font-weight-medium"><a href="#" class="linking">Documentation</a></h6>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl augue, feugiat non hendrerit quis, pellentesque et dui. Integer nisi ligula, aliquet ac ullamcorper non, scelerisque mattis nisi. Maecenas volutpat
                                bibendum consequat.</p>
                            <a href="#" title="Read More" class="btn-text mt-1">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wrap-service11-box">
                    <div class="card card-shadow border-0 mb-4">
                        <div class="p-4">
                            <h6 class="font-weight-medium"><a href="#" class="linking">Training</a></h6>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl augue, feugiat non hendrerit quis, pellentesque et dui. Integer nisi ligula, aliquet ac ullamcorper non, scelerisque mattis nisi. Maecenas volutpat
                                bibendum consequat</p>
                            <a href="#" title="Read More" class="btn-text mt-1">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- </div>   -->