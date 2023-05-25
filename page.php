<?php get_header(); 

// DFY Homepage

?>

<section class="dfy-homepage-hero">
    <div class="container-fluid">
        <div class="row">
            <?php get_template_part('hero-carousel') ?>
        </div>
    </div>
</section>

<section class="dfy-mid-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 offset-md-3">
                <h3>Doctors For You International is an extended arm of Doctors For You India</h3>
                <p>The organization is pioneer in public health care services to marginalized populations and a leader among entities for disaster relief response in the shortest period of time.</p>
                <p class="mid-dark-btn"><a class="btn btn-lg btn-dark text-white dark-btn" href="#">learn more</a></p>
            </div>
            <div class="col-lg-1 icons-col">
                <p class="calendar"><img class="img-responsive" src="https://drs.vistex.com/wp-content/uploads/2023/05/calendar.png" width="50" alt="calendar image"></p>
                <p class="india"><img class="img-responsive" src="https://drs.vistex.com/wp-content/uploads/2023/05/india.png" width="50" alt="india image"></p>
                <p class="location-ping"><img class="img-responsive" src="https://drs.vistex.com/wp-content/uploads/2023/05/location.png" width="50" alt="location-ping image"></p>
            </div>
            <div class="col-lg-2">
                <div>
                    <p class="pink-number">15</p>
                    <p class="grey-text">Number of <b>years operating</b> in India</p>
                    <hr class="pink-line">
                </div>
                <div>
                    <p class="pink-number">3</p>
                    <p class="grey-text">The number of Union <b>territories spread</b> in India</p>
                    <hr class="pink-line">
                </div>
                <div>
                    <p class="pink-number">25</p>
                    <p class="grey-text">The number of the <b>geographic footprint</b> spread of States in India</p>
                    <hr class="pink-line">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dfy-project-slider">
    <div class="container-fluid">
        <div class="row">
            <?php get_template_part('project-carousel') ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>

