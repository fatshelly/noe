$(function () {

    // $(window).scroll(function () {
    //     var classes = ["left", "right"];
    //     var addClasses = ["slideInL", "slideInR"];

    //     var scroll = $(window).scrollTop();
    //     var windowHeight = $(window).height();

    //     for (var i = 0; i < classes.length; i++) {
    //         $("." + classes[i]).each(function () {
    //             var target = $(this).offset().top;
    //             if ((scroll > target - windowHeight + $(this).outerHeight())) {
    //                 $(this).addClass(addClasses[i]);
    //             }
    //         });
    //     }
    // });

    $(window).scroll(function () {
        var classes = ["left", "right"];
        var addClasses = ["slideInL", "slideInR"];
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        for (var i = 0; i < classes.length; i++) {
            $("." + classes[i]).each(function () {
                var target = $(this).offset().top;
                if (scroll > target - windowHeight + $(this).outerHeight()) {
                    $(this).addClass(addClasses[i]);
                }
            });
        }
    });


    // ハンバーガーメニューのクリックイベント
    $(".menu_bar").on("click", function () {
        $('.header').toggleClass('open');
    });

    // メニューが表示されている時に画面をクリックした場合
    $('#nav a').on('click', function () {
        // openクラスを削除して、メニューを閉じる
        $('.header').toggleClass('open');
    });

    

    /*=================================================
    header scroll後 色変更
    ===================================================*/

    var headerAnimated = false; // ヘッダーがアニメーションされたかを追跡する変数を追加
    function FixedAnime() {
        var elemTop = $('.section').offset().top;
        var scroll = $(window).scrollTop();
        if (scroll <= 20) {
            $('#page_header, #header').removeClass('UpMove'); // UpMoveクラスを除去
            $('#page_header, #header').addClass('DownMove'); // DownMoveクラスを追加
            headerAnimated = false; // ヘッダーのアニメーションフラグをリセット
        } else if (scroll >= elemTop) {
            if (!headerAnimated) { // ヘッダーがアニメーションされていない場合にのみ実行
                $('#page_header, #header').addClass('change_color');
                $('#page_header, #header').removeClass('UpMove'); // UpMoveクラスを除去
                $('#page_header, #header').addClass('DownMove'); // DownMoveクラスを追加
                headerAnimated = true; // ヘッダーのアニメーションフラグをセット
            }
        } else {
            if ($('#page_header, #header').hasClass('DownMove')) {
                $('#page_header, #header').removeClass('DownMove');
                $('#page_header, #header').addClass('UpMove');
                $('#page_header, #header').removeClass('change_color');
                headerAnimated = false; // ヘッダーが上から下にアニメーションされている場合にリセット
            }
        }
    }

    $(window).scroll(function () {
        FixedAnime();
    });

    $(document).ready(function () {
        FixedAnime();
    });


    if (window.matchMedia("(max-width: 768px)").matches) {
        var li = $('.header .nav_flex li:last');
        var liText = $('.header .nav_flex li:last a');
        $(liText).html('お問合わせ');
        var listStyle = {
            background: "#6764bd",
            borderRadius: "24px",
            textAlign: "center",
            width: "180px",
            margin: "60px auto",
        }
        var colorChange = {
            color: "#fff",
        }
        $(li).css(listStyle);
        $(liText).css(colorChange);
    }


    function adjustTitles() {
        if ($(window).width() <= 480) {
            var subHeading = $('#contact .sub_heading');
            $(subHeading).text('お問い合わせ');
            $('#business .section_heading').text('Business Details').prepend('<span class="sub_heading">事業内容</span>')
            $('#pronavi .heading').text('教えるだけではなく”導く”指導を目指します。');
            $('.box .text_content .text_box p ').text('社名にかけたNavigatorは”導く”理念を元に名付けられました。プログラミングを学んだ方々が弊社との関わりで導かれ、今後の導いてい蹴るような存在になることを願っています。');
            $('#confirm .section_heading .sub_heading').text('CONTACT');
            $('#confirm .section_heading').text('送信内容確認').prepend('<span class="sub_heading">CONTACT</span>');
        }
    }
    // ページロード時とウィンドウサイズが変更された時にタイトルを調整
    adjustTitles();
    $(window).resize(function () {
        adjustTitles();
    });

    function adjustContents() {
        if ($(window).width() <= 480) {
            var addContent = $('')
        }
    }
    adjustContents();
    $(window).resize(function () {
        adjustContents();
    });

});