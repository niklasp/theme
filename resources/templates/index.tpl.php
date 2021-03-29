<?php get_header(); ?>

<?php
    /**
     * Functions hooked into `theme/index/header` action.
     *
     * @hooked Tonik\Theme\Index\render_header - 10
     */
    do_action('theme/index/header');
?>

<section class="section">
    <div class="wrapper">
        <div class="content">
            <p class="intro"> Intro Text Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum animi repellendus necessitatibus expedita voluptas id tempore placeat, quisquam quibusdam quae tenetur, pariatur molestiae sed aperiam veritatis, blanditiis ipsum! Quam, possimus! </p>
            <?php if (have_posts()) : ?>
                <h1>Aktuelles aus dem Gemeinschaftsgarten Prachttomate</h1>

                <div class="posts">
                    <?php while (have_posts()) : the_post() ?>
                        <?php
                            /**
                             * Functions hooked into `theme/index/post/thumbnail` action.
                             *
                             * @hooked Tonik\Theme\App\Structure\render_post_thumbnail - 10
                             */
                            do_action('theme/index/post/thumbnail');
                        ?>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <?php
                    /**
                     * Functions hooked into `theme/index/content/none` action.
                     *
                     * @hooked Tonik\Theme\App\Structure\render_empty_content - 10
                     */
                    do_action('theme/index/content/none');
                ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
