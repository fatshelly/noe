<!--
Template Name: 会社概要
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/page-header'); ?>


    <main class="main">
        <section id="company" class="section">
            <div class="container">
                <div class="bg_circle"></div>
                <h2 class="section_heading"><span class="sub_heading">会社概要</span>COMPANY Info</h2>
                <h3 class="info_title">会社情報</h3>
                <div class="wrapper">
                    <div class="info">
                        <dl>
                            <dt>社名</dt>
                            <dd>株式会社NOE<br>NOE Co., Ltd.</dd>
                            <dt>所在地</dt>
                            <dd>〒467-0002<br>愛知県名古屋市中区<br class="br">丸の内3丁目15-22<br>丸の内Usビル801号室</dd>
                            <dt>代表者名</dt>
                            <dd>加藤大騎</dd>
                            <dt>設立</dt>
                            <dd>2023年1月26日</dd>
                            <dt>事業内容</dt>
                            <dd>プログラミングスクール事業</dd>
                            <dd class="additional">Webデザイン事業</dd>
                            <dd class="additional">SNSマーケティングコンサル</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
    </main>
        

    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>

</html>