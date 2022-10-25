<?php
require_once "autoloader.php";
require_once "constants.php";
new db();
?>

<?php utility::get_part("header"); ?>
<?php utility::get_part("hero"); ?>


    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center">

                    <?php var_dump(postController::get_last_posts()); ?>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis eligendi
                                et
                                libero sint. Aperiam architecto at dolores, eum exercitationem, explicabo fugiat iure
                                modi
                                natus porro quas ratione reiciendis voluptas!</p>
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2"
                                   class="glightbox preview-link"><i
                                            class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Gallery Section -->

    </main><!-- End #main -->

<?php utility::get_part("footer"); ?>