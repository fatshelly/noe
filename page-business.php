<!--
Template Name: 事業内容
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/page-header'); ?>


    <main class="main"> 
        <section id="business" class="section">
            <ul class="circleBG">
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="container">
                <h2 class="section_heading"><span class="sub_heading">事業内容</span>BUSINESS DETAILS</h2>
            </div>
        </section>
        <section id="pronavi">
            <div class="container">
                <h2 class="section_heading"><span class="sub_heading">プログラミングスクール</span>PRO NAVI</h2>

                <div class="box">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about1.png" alt="">
                    </div>
                    <div class="text_content">
                        <h4 class="heading">プログラミング業界に革命を起こす。</h4>
                        <div class="text_box">
                            <p>
                                社名にかけたNavigatorは”導く”理念を元に<br>
                                名付けられました。<br>
                                プログラミングを学んだ方々が<br>
                                弊社との関わりで導かれ、<br>
                                今後の導いてい蹴るような存在になることを<br>
                                願っています。<br>
                                <br>
                                社名にかけたNavigatorは”導く”理念を元に<br>
                                名付けられました。<br>
                                プログラミングを学んだ方々が<br>
                                弊社との関わりで導かれ、<br>
                                今後の導いてい蹴るような存在になることを<br>
                                願っています。
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide_contents">
                <div class="slide_content left">
                    <div class="number_circle">
                        <div class="number">
                            <p>選ばれる理由</p>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="text_content">
                        <h4 class="content_heading">あなたのレベルに合わせた<br>カリキュラム作成</h4>
                        <p>
                            Pro naviはプログラミング業界初の
                            "コーチング型"の教室になります。
                            一人ひとりに合わせた課題を見極め、
                            より効果的にプログラミングを学習し
                            実践的なスキルを身につけることを目指します。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reason1.png" alt="">
                </div>
                
                <div class="slide_content right">
                    <div class="number_circle">
                        <div class="number">
                            <p>選ばれる理由</p>
                            <span>2</span>
                        </div>
                    </div>
                    <div class="text_content">
                        <h4 class="content_heading">担当講師による<br>週一のカウンセリング</h4>
                        <p>
                        Pro naviではプログラミングスキルの習得を最終目的とするのではなく、
                        あなたの人生の目的のために案件を獲得し仕事をこなせるようになることも目指します。
                        プログラミングのスキルを習得することは大前提として教えていきます。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reason2.png" alt="">
                </div>
                
                <div class="slide_content left">
                    <div class="number_circle">
                        <div class="number">
                            <p>選ばれる理由</p>
                            <span>3</span>
                        </div>
                    </div>
                    <div class="text_content">
                        <h4 class="content_heading">プログラミングスキルの習得は大前提</h4>
                        <p>
                            会社様に向けたHP制作を行なっています。
                            Pro naviはプログラミング業界初の
                            "コーチング型"の教室になります。
                            一人ひとりに合わせた課題を見極め、
                            より効果的にプログラミングを学習し
                            実践的なスキルを身につけることを目指します。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reason3.png" alt="">
                </div>

                <div class="slide_content right">
                    <div class="number_circle">
                        <div class="number">
                            <p>選ばれる理由</p>
                            <span>4</span>
                        </div>
                    </div>
                    <div class="text_content">
                        <h4 class="content_heading">案件獲得も<br>継続的サポート</h4>
                        <p>
                            ProNaviは案件獲得のプログラミングスキルを身に付けた後も徹底的にサポートします。
                            スクールの担当コンサルタントが付いて案件獲得をサポートし、
                            継続的にに協力し合える関係を目指します。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reason1.png" alt="">
                </div>
            </div>

            <div class="price">
                <a href="<?php echo home_url('/tuition/'); ?>">料金についてはこちら</a>
            </div>
        </section>
    </main>


    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>

</html>