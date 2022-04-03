<?php get_header(); ?>

 

  <!--Main layout-->
  <main class="my-5">
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-4">
          <!--Section: Content-->
          <section>
            <!-- Post -->
            <?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
            <div class="row">
            <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                <?php the_post_thumbnail('large-medium', array("class" => 'img-fluid')); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
            </div>

            <div class="col-md-8 mb-4">
                <h5><?php the_title(); ?></h5>
                <?php if(!is_home()) {
                    the_content();
                } else {
                    the_excerpt();
                } ?>

                <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-primary float-end">Read more</button></a>
            </div>
            </div>
             
            
        <?php

    } // end while
    echo paginate_links();

} // end if

?>


          </section>
          <!--Section: Content-->
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">
          <!--Section: Sidebar-->
          <section class="sticky-top" style="top: 80px;">
            <!--Section: Ad-->
            <section class="text-center border-bottom pb-4 mb-4">
              <div class="bg-image hover-overlay ripple mb-4">
                <img
                  src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/standard/about/assets/mdb5-about.webp"
                  class="img-fluid" />
                <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
                  <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                </a>
              </div>
              <h5>Material Design for Bootstrap 5</h5>

              <p>
                500+ components, free templates, 1-min installation, extensive tutorial, huge
                community. MIT license - free for personal & commercial use
              </p>
              <a role="button" class="btn btn-primary" href="https://mdbootstrap.com/docs/standard/"
                target="_blank">Download for free<i class="fas fa-download ms-2"></i></a>
            </section>
            <!--Section: Ad-->

            <!--Section: Video-->
            <section class="text-center">
              <h5 class="mb-4">Learn the newest Bootstrap 5</h5>

              <div class="embed-responsive embed-responsive-16by9 shadow-4-strong">
                <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/c9B4TPnak1A"
                  allowfullscreen></iframe>
              </div>
            </section>
            <!--Section: Video-->
          </section>
          <!--Section: Sidebar-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->

      <!-- Pagination -->
      
    </div>
  </main>
  <!--Main layout-->



<?php get_footer(); ?>
