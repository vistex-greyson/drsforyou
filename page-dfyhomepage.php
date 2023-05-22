<?php
/* Template Name: DFY Homepage */

get_header(); 

echo the_title(); 
echo the_content();
?>
<section class="dfy-homepage-hero">
    <div class="container-fluid">
        <div class="row">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="http://localhost/VistexDrsForYou/wp-content/uploads/2023/05/dfy-homepage-1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://localhost/VistexDrsForYou/wp-content/uploads/2023/05/dfy-homepage-2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://localhost/VistexDrsForYou/wp-content/uploads/2023/05/dfy-homepage-3.png" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<?php get_footer(); ?>