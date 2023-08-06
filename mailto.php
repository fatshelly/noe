<!--
Template Name: 送信完了
-->

<?php
session_start();
if ($_SESSION['token'] === $_POST['token']) { //#1
    // echo "正常なアクセスです";
    if (isset($_SESSION['kinds'])) { //#2
        $kinds = $_SESSION['kinds'];
        $name = $_SESSION['name'];
        $email = str_replace(array("\r", "\n"), '', $_SESSION['email']);
        $tel = $_SESSION['tel'];
        $company = $_SESSION['company'];
        $department = $_SESSION['department'];
        $content = $_SESSION['content'];
    } //#2
    // 自分に送るお問い合わせ内容メールを構築
    $to = "tshibano8@gmail.com";
    $subject = "{$name}様より{$kinds}に関するお問い合わせが届きました。";
    $body = <<< EOD

    【 お問い合わせ種別 】
    {$kinds}
    【 名前 】
    {$name}
    【 メールアドレス 】
    {$email}
    【 電話番号 】
    {$tel}
    【 会社名 】
    {$company}
    【 部署名 】
    {$department}
    【 お問合せ内容 】
    {$content}
    EOD;
    $from = "Return-Path: {$to}\r\n";
    $from .= "From: {$email}\r\n";//送信元メールアドレス
    //自分に送る問い合わせ内容メールを構築

        //相手に送る送信完了メールを構築
        $to2 = $email;
        $subject2 = "［自動送信］お問い合わせ内容の確認";
        $body2 = <<< EOD
        {$name} 様お問い合わせありがとうございます。
        以下のお問い合わせ内容を、メールにて確認させていただきました。
        ===================================================
        【 お問い合わせ種別 】
        {$kinds}
        【 名前 】
        {$name}
        【 メールアドレス 】
        {$email}
        【 電話番号 】
        {$tel}
        【 会社名 】
        {$company}
        【 部署名 】
        {$department}
        【 お問合せ内容 】
        {$content}
        ===================================================
        内容を確認のうえ、回答させて頂きます。
        しばらくお待ちください。
        EOD;
            $from2 = "Return-Path:" . $to . "\r\n";
            $from2 = $from2 . 'From: ' . $to;
        // 相手に送る送信完了メールを構築
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $param = "-f" . $to;
        //  mb_send_mail(送信先,タイトル,本文,追加ヘッダ,追加コマンドラインパラメータ)
        if (mb_send_mail($to2,$subject2,$body2,$from2,$param)) { // 相手に送信 // #3
            $message = '<p class="question-text">『' . $email . '』宛に確認メールを送信しました<br>お問い合わせありがとうございます。</p>';
            if (mb_send_mail($to,$subject,$body,$from,$param)) { // 自分に送信 // #4
                
                // 終了処理開始 セッションの破棄
                $_SESSION = [];
                if (isset($_COOKIE[session_name()])) { //#5
                    $params = session_get_cookie_params();
                    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params['httponly']);
                } 
                session_destroy();
                //セッションの破棄
            } else { //#4
                $message = '<p class="question-text error">何らかの理由で送信エラーが発生しました<br>しばらく待ってから再度送信してください</p>';
            } //#4
        } else { //#3
            $message = '<p class="question-text error">『' . $email . '』宛に確認メールを送信できませんでした。<br>正しいメールアドレスで再度ご連絡をお願いいたします。</p>';
        } //#3
} else { //#1
    // 直接mailto.phpにアクセスしようとしたら強制的にリダイレクト
    header('Location: page-confirm.php');
} //#1
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/page-header'); ?>

    <main id="mailto" class="main section">
        <section class="container">
            <h2 class="section_heading"><span class="sub_heading">コンタクト</span>CONTACT</h2>
            <div class="inner">
                <h3 class="info_title">送信完了</h3>
                <p class="message">
                    お問い合わせありがとうございます。<br>
                    お問合せ内容の確認は自動返信メールをお送りしておりますのでそちらをご確認ください。
                </p>
                <div class="btn_box">
                    <a href="index.php" class="return_home">ホームに戻る</a>
                </div>
            </div>
        </section>
    </main>

    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>

</html>