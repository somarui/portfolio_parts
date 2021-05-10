pamphlet
<?php 
$post_id = $post->ID;
$link = get_post_meta($post_ID, 'リンク', true); 
?>

<a href="<?php echo $link; ?>"><?php the_content(); ?></a>

<?php echo esc_html($link); ?>
