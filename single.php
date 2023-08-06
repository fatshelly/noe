<!--
Template Name: ニュース
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('includes/header'); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <main class="main">
                <section id="news" class="section">
                    <div class="container">
                        <div class="bg_circle"></div>
                        <h2 class="section_heading"><span class="sub_heading">新着情報</span>NEWS</h2>

                        <div class="news_contents">

                            <div class="news_feed">
                                <span class="updated_date"><?php the_time(get_option('date_format')); ?></span>
                                <p>
                                    <?php the_title(); ?>
                                </p>
                                <div class="icon">
                                    <span class="arrow_right"></span>
                                    <span class="circle"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
                
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>

</html>