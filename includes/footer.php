<footer id="footer">
    <div class="flex container">
        <div class="footer_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Noe">
        </div>

        <ul class="nav_flex">
            <div class="left_list">
                <li><a href="<?php echo home_url(); ?>">トップ</a></li>
                <li><a href="<?php echo home_url('/news/'); ?>">ニュース</a></li>
                <li><a href="<?php echo home_url('/business-details/'); ?>">事業内容</a></li>
            </div>
            <div class="right_list">
                <li><a href="<?php echo home_url('/company/'); ?>">会社概要</a></li>
                <li><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
                <li><a href="<?php echo home_url('/specified-commercial-transactions-act/'); ?>">特定商取引に基づく表記</a></li>
            </div>
        </ul>
    </div>
</footer>