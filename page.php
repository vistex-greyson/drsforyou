<?php get_header(); 

// DFY Homepage

?>

<section class="dfy-homepage-hero">
    <div class="container-fluid">
        <div class="row">
            <div id="dfyHeroCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://drs.vistex.com/wp-content/uploads/2023/05/dfy-homepage-1-1.png" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Guided by humanitarian principles of humanity, impartiality, and neutrality.</h1>
                            <p>Providing sustainable, equitable, effective, and efficient health care services to the most vulnerable individuals and communities.</p>
                            <p class="hero-btn-outer"><a class="btn btn-lg btn-white hero-btn" href="#">donate now</a></p>
                        </div>
                    </div>
                    <div class="carousel-item new">
                        <img class="d-block w-100" src="https://drs.vistex.com/wp-content/uploads/2023/05/dfy-homepage-2-1.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://drs.vistex.com/wp-content/uploads/2023/05/dfy-homepage-3-1.png" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('#dfyHeroCarousel').carousel({
    interval: 3000,
    cycle: true
});
</script>
