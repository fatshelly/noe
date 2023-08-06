<?php wp_body_open(); ?>

<header id="page_header" class="header">
    <h1 class="site_title">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="pc" alt="NoE">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_sp.svg" class="sp" alt="NoE">
        </a>
    </h1>
    <nav id="nav">
        <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_sp.svg" alt="NoE"></a>
        <ul class="nav_flex">
            <li>
                <a href="<?php echo home_url(); ?>">トップ</a>
            </li>
            <li>
                <a href="<?php echo home_url('/company/'); ?>">会社概要</a>
            </li>
            <li>
                <a href="<?php echo home_url('/business-details/'); ?>">事業内容</a>
            </li>
            <li>
                <a href="<?php echo home_url('/news/'); ?>">ニュース</a>
            </li>
            <li>
                <a href="<?php echo home_url('/contact/'); ?>">コンタクト</a>
            </li>
        </ul>
    </nav>
    <div class="menu_bar">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>