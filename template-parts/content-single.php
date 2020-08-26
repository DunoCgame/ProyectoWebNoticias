<?php
/**
 * The template part for displaying single posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>   class="article-single">

	<hgroup class="grupo_title">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</hgroup><!-- .entry-header -->

<figure class="conainer-img ">
	<?php #CoreWeb_excerpt(); ?>

	<?php CoreWeb_post_thumbnail(); ?>

</figure>

	<div class="entry-content">
		<?php
			the_content();

			// wp_link_pages( array(
			
				// 'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'CoreWeb' ) . '</span>',
				// 'after'       => '</div>',
				// 'link_before' => '<span>',
				// 'link_after'  => '</span>',
				// 'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'CoreWeb' ) . ' </span>%',
				// 'separator'   => '<span class="screen-reader-text">, </span>',
			
			
			// ) );

			// if ( '' !== get_the_author_meta( 'description' ) ) {
				// get_template_part( 'template-parts/biography' );
			// }
			
			// include("Categorias/Post-Relacionados.php");
		// Post_Relacionados($paged);
		
		
		
		?>
		
		
				
	</div>

</article><!-- #post-## -->
<?php 

$orig_post = $post;
global $post;
$categories = get_the_category($post->ID);

if ($categories){
	
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

$args=array(
	'category__in' => $category_ids,
	'post__not_in' => array($post->ID),
	'posts_per_page'=> 4, // Number of related posts that will be shown.
	'ignore_sticky_posts'=>1
);

$query1 = new WP_Query( $args );

if($query1->have_posts()){
	
	echo '<div id="related_posts" class="rel_posts">
		<div class="containner-title">
			<h3>Noticias Relacionadas</h3>
		</div>
	<ul>';
	
while ($query1->have_posts()){
	$query1->the_post();

?>

<li>


<div class="relatedcontent">
	<h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
</div>


<div class="relatedthumb">
	<a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
	<span class="time-container"><?php the_time('M j, Y') ?></span>
</div>

<p class="text-relacionados-post">
<?php 
// the_excerpt();

$excerpt = get_the_excerpt();
 
$excerpt = substr($excerpt, 0, 90);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));
echo $result;

?>
</p>


<center>
<a  class="botonLeermas" href="<?php echo esc_url( get_permalink() );?>">Leer Mas
</a>
</center>

<?php

the_Category();

?>

</li>


<?php 
	}
		echo '</ul>
					</div>';
			}
			 }
	$post = $orig_post;
		wp_reset_query(); 

?>