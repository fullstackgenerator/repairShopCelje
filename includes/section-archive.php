<?php if( have_posts() ): while( have_posts() ): the_post();?>
<br>

<div class="card">
    <div class="card-body mb-3">

<h3><?php the_title();?></h3>

<?php the_excerpt();?>

<a href="<?php the_permalink();?>" class="btn btn-success">Več o tem</a>

</div>
</div>

<?php endwhile; else: endif;?>

