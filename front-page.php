<span class="mobile"><?php get_header();?></span>
<section class="page-wrap">
<div class="container">



<?php get_template_part('includes/section','content');?>

</div>

<div class="container-fluid" id="home">
  <div id="carousel" class="row carousel slide carousel-fade" data-bs-ride="carousel">
    
    <div class="carousel" style="height: 92vh; width:100vw;">
      <div class="carousel-item active item-1" data-bs-interval="4000">
      </div>
      <div class="carousel-item item-2" data-bs-interval="4000">
      </div>
      <div class="carousel-item item-3" data-bs-interval="4000">
      </div>
      <div class="carousel-item item-4" data-bs-interval="4000">
      </div>
      <div class="carousel-item item-5" data-bs-interval="4000">
      </div>
    </div>
  </div>
</div>
</section>

<?php get_footer();?>