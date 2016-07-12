<?php get_header(); ?>






<div class="container single">
    <div class="row single_top">
        <header class="col-md-6 single_top_header">
            <a href="<?php bloginfo('url'); ?>" class="single_top_header_link">
                <span class="nome">Leandro Sampaio</span>
                <span class="titulo">Design & Technology</span>
            </a>
        </header>
        <nav class="col-md-6 single_nav">
            <?php include 'inc_menu.php'; ?>
        </nav>
    </div>


    <div class="row single_content">
        <?php while (have_posts()) : the_post(); ?>    
            <article class="col-md-9 single_content_article">
                <h1 class="single_content_article_title"><?php the_title(); ?></h1>
                <div class="single_content_article_text">
                    <?php the_content(); ?>
                </div>
            </article>
            <aside class="col-md-3 single_content_aside">
                <div class="single_content_aside_pessoas">
                    <?php echo get_field('pessoas'); ?>
                </div>
                <div class="single_content_aside_tech">
                    <?php echo get_field('tech'); ?>
                </div>
            </aside>
        <?php endwhile; ?>
    </div>
</div>


<?php get_footer(); ?>