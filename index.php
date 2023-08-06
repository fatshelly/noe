<!--
Template Name: トップページ
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('includes/header'); ?>

    <main id="main">
        <div id="main_visual">
            <div id="scroll">
                <p>SCROLL</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/scroll.gif" alt="">
            </div>
            <div class="main_visual">
                <img src="<?php echo get_template_directory_uri(); ?>/img/main-visual.png" class="pc" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual_sp.png" class="sp" alt="NoE">
            </div>
        </div>

        <section id="top_news" class="section">
            <h2 class="title">NEWS</h2>
            <div class="container flex">
                <div class="news_feed">
                    <span class="updated_date"><?php the_time(get_option('date_format')); ?></span>
                    <p><?php the_title(); ?></p>
                    <div class="icon">
                        <span class="arrow_right"></span>
                        <span class="circle"></span>
                    </div>
                </div>
                <div class="news_feed">
                    <span class="updated_date"><?php the_time(get_option('date_format')); ?></span>
                    <p><?php the_title(); ?></p>
                    <div class="icon">
                        <span class="arrow_right"></span>
                        <span class="circle"></span>
                    </div>
                </div>
            </div>
        </section>

        <div id="wrapper">
            <div class="bg_animation"></div>
            <div class="bg_animation"></div>
            <div class="bg_animation"></div>
            <div class="bg_animation"></div>
            <div class="bg_animation"></div>
            <div class="bg_animation"></div>
            <div class="bg_animation"></div>
            <div class="bg_animation"></div>
            <div class="bg_animation"></div>
            <div class="bg_animation"></div>
            <div class="bg_animation"></div>
            <section id="about" class="section container">
                <div class="content">

                    <h2 class="section_heading"><span class="sub_heading">NoEについて</span>ABOUT NoE</h2>

                    <div class="flex">
                        <div class="img_box">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/about1.png" alt="laptop">
                        </div>
                        <div class="text">
                            <h3 class="heading">教えるだけではなく<br>"導く"指導を目指します。</h3>
                            <p>
                                学んでも活かせないスキルは何も意味をなさない。
                                学習において大切なのは、学んだ後の人生でどれだけ身につけたスキルを
                                活かして変化をもたらせるかだとNoEは考えます。関わってくださった全ての方を
                                プログラミングを通して導けるような存在（Navigator of engineering）になり、
                                プログラミング事業の革命を起こすことを目指しています。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="content2">
                    <div class="img_box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about2.png" alt="laptop">
                    </div>
                    <div class="text2">
                        <h3 class="heading">NoEの由来<br>"Navigator Of Engineering"</h3>
                        <p>
                            社名にかけたNavigatorは"導く"理念を元に<br>
                            名付けられました。
                        </p>
                        <p>
                            プログラミングを学んだ方々が<br>
                            弊社との関わりで導かれ、<br>
                            今後の導いていけるような存在になることを<br>
                            願っています。
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <section id="business-details" class="section">
            <div id="section_heading_flex" class="container">
                <h2 class="section_heading"><span class="sub_heading">事業内容</span>BUSINESS<br class="br"> DETAILS</h2>
                <div class="title_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business-details-title.svg" alt="">
                </div>
            </div>

            <div id="slideIn" class="slide_items">
                <div class="left slide">
                    <div class="number_circle">
                        <div class="number">
                            <p>BUSINESS</p>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="text_content">
                        <span class="subheading">プログラミングスクール</span>
                        <h4 class="content_heading">Pro navi</h4>
                        <p>
                            Pro naviはプログラミング業界初の
                            "コーチング型"の教室になります。
                            一人ひとりに合わせた課題を見極め、
                            より効果的にプログラミングを学習し
                            実践的なスキルを身につけることを目指します。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business_details1.png" class="details_pic" alt="">
                </div>

                <div class="right slide">
                    <div class="number_circle">
                        <div class="number">
                            <p>BUSINESS</p>
                            <span>2</span>
                        </div>
                    </div>
                    <div class="text_content">
                        <span class="subheading">ホームページ・アプリ制作</span>
                        <h4 class="content_heading">Web Design</h4>
                        <p>
                            Pro naviはプログラミング業界初の
                            "コーチング型"の教室になります。
                            一人ひとりに合わせた課題を見極め、
                            より効果的にプログラミングを学習し
                            実践的なスキルを身につけることを目指します。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business_details.png" class="details_pic" alt="">
                </div>

                <div class="left slide">
                    <div class="number_circle">
                        <div class="number">
                            <p>BUSINESS</p>
                            <span>3</span>
                        </div>
                    </div>
                    <div class="text_content">
                        <span class="subheading">SNSマーケティングコンサル</span>
                        <h4 class="content_heading">SNS consulting</h4>
                        <p>
                            会社様に向けたコンサルティングを行なっています。<br>
                            SNSを通してよりターゲットに近い人に商品を伝え、集客することを目的に、企業様に合わせたコンサルティングを行なっています。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business_details4.png" class="details_pic" alt="">
                </div>
            </div>
        </section>

        <section id="news" class="news">
            <div class="container">
                <h2 class="section_heading"><span class="sub_heading">新着情報</span>NEWS</h2>

                <div class="viewmore_box">
                    <a href="<?php echo home_url('/news/'); ?>" class="viewmore">View more >></a>
                </div>

                <div class="contents">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
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
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>記事が見つかりませんでした</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>

</html>