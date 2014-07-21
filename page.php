<?php
/*
Template Name: Default page
*/
?>
<?php get_header(); ?>

    <div class="masthead">
        <section>
            <h1><?php the_title( ); ?></h1>
        </section>
    </div>

    <br>
        <h2>Actorshop has worked with large global companies, government and small individual firms.<br> No matter what size your business we have a programme for you.</h2>

            <hr>

<div class="section">
    <section>
        <article>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <p><?php the_content(); ?></p>
                <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>

        </article>
    </section>
</div>
    <!--

     end of page section

    -->
<div class="callout callout-centered clearfix">

    <section>
        <h2>Don't see what you're looking for?</h2>
        <div class="button"><a href="/contact/">Just Ask</a>
        </div>
    </section>

</div>

<?php get_footer(); ?>