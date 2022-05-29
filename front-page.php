<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gowell
 */

get_header();
?>

<main id="primary" class="site-main"
    <div class="container-fluid banner"
        style="background-image: url(<?php echo get_template_directory_uri().'/screenshot.jpg'?>)">
        <div class="text-stuff">
            <div class="container">
                <div class="text-center text-white">
                    <h1 class="mb-1">Plan Your Destination Trip</h1>
                    <p>Find the world's largest collection of tours &amp; travel Packages.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="categories2">
        <div class="container">
            <div class="card mb-0 search-card">
                <div class="card-body">
                    <div class="bg-white form-list">
                        <div class="">
                            <div class="form row g-0">
                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-lg-0"> <input type="text"
                                        class="form-control input-lg location-input border-right border-end-0 rounded-start"
                                        placeholder="Enter Location">

                                </div>
                                <div class="form-group col-xl-3 col-lg-3 col-md-12  mb-lg-0"> <select
                                        class="form-control w-100 border-end-0" data-select2-id="select2-data-1-x9k2"
                                        tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-3-q6a4">Destination Location</option>
                                        <option>Australia</option>
                                        <option>Chicago</option>
                                        <option>Germany</option>
                                        <option>India</option>
                                        <option>Japan</option>
                                        <option>London</option>
                                        <option>Los angels</option>
                                        <option>Spain</option>
                                        <option>Sidney</option>
                                    </select> </div>
                                <div class="form-group col-xl-6 col-lg-6 col-md-12 mb-lg-0 location">
                                    <div class="row g-0">
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-lg-0"> <input
                                                class="form-control input-lg fc-datepicker br-0 border-right border-end-0 hasDatepicker"
                                                placeholder="Travel Date" type="text" id="dp1653794103660"> </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-lg-0 select2-lg"> <select
                                                class="form-control w-100 border-end-0"
                                                data-select2-id="select2-data-4-w965" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="select2-data-6-q1ig">Persons</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select></div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-lg-0 select2-lg"> <select
                                                class="form-control w-100 border-end-0"
                                                data-select2-id="select2-data-7-kdrs" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="select2-data-9-ut7i">Kids</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select></div>
                                        <div class="col-xl-3 col-lg-3 col-md-12 mb-0"> <a
                                                class="btn btn-block the-button-color btn-lg ml-0 searchButton px-5 border-start-0"
                                                href="#">Search</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
	$packages= new WP_query(array(
		'posts_per_page'=>'10',
		'post_type'=>'packages'
	));?>
    <div class="container-fluid top-padder">
        <div class="container">
            <div class="row">
                <div class="section-title center-block text-center"> <span
                        class="heading-style">Best</span>
                    <h1>Popular Packages</h1>
                    <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                </div>
                <div class="owl-carousel owl-theme">
                    <?php if($packages->have_posts()):
					while($packages->have_posts()):
						$packages->the_post();
						 ?>
                    <div class="item">
                        <div class="card">
                            <?php
									 if ( has_post_thumbnail() ) {
									 echo get_the_post_thumbnail(
										 get_the_ID(),
										 'featured-thumbnail',
										 [
											 'sizes' => '(max-width: 350px) 350px, 233px',
											 'class' => 'w-100',
										 ]
									 );
									 } else {
									 ?>
                            <img src="https://via.placeholder.com/510x340" class="w-100" alt="Card image cap">
                            <?php
									 }
									 ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <div class="d-flex">
                                    <div class="left">
                                        <p class="card-text">
                                            <i class="fa-solid fa-calendar d-inline-block"></i>
                                            <?php echo get_field('duration_days');?> Days and
                                            <?php echo get_field('duration_nights')?> Nights
                                        </p>
                                        <p class="card-text">
                                            <i class="fa-solid fa-location-dot d-inline-block"></i>
                                            <?php echo get_field('locationcountry')?>
                                        </p>
                                    </div>
                                    <div class="right ms-auto ps-5 text-center border-left">
                                        <h4>Price</h4>
                                        <h2 class="fw-bold">$<?php echo get_field('price')?></h2>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo esc_url(get_the_permalink());?>"
                                class="card-footer text-center custom-card-footer">
                                <span>Book Now</span></a>
                        </div>

                    </div>
                    <?php 
					endwhile;
					endif;
					wp_reset_postdata();
					?>
                </div>
            </div>
        </div>
    </div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
