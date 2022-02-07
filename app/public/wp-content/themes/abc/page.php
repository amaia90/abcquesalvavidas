<?php get_header(); ?> <!--Incluye el archivo header.php-->

<?php
while(have_posts(  )):the_post();
?>
<h1><?php the_title();?></h1>
<?php the_content();?>
<?php endwhile; ?>