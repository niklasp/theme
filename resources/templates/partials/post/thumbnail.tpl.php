<article class="thumbnail">
    <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
    </a>

    <time>
        <small><?php the_date(); ?></small>
    </time>

    <div class="post-excerpt"><?php the_excerpt(); ?></div>
</article>
