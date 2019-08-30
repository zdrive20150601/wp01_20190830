<?php get_header(); ?>
	<?php if (have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
      <article class="post">
        <h2>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="entry">
          <p><?php the_content(); ?></a></p>
        </div>
      </article><!-- post -->
  	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>