<!--
Template Name: 送信確認
Template Post Type: post
-->

<?php
session_start();

if (isset($_SESSION['kinds'])) {
    $kinds = $_SESSION['kinds'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $tel = $_SESSION['tel'];
    $company = $_SESSION['company'];
    $department = $_SESSION['department'];
    $content = $_SESSION['content'];
}
$token = sha1(uniqid('',true));
$_SESSION['token'] = $token;


if (isset($_POST["submit"])) {
    mb_language("ja");
    mb_internal_encoding("UTF-8");
    $subject = "［自動送信］お問い合わせ内容の確認";
    $body = <<< EOM
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
EOM;

    $fromEmail = "送信元のメールアドレス";
    $fromName = "送信元の名前";
    $header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";
    mb_send_mail($mail, $subject, $body, $header);
    mb_send_mail($fromEmail, $subject, $body, $header);
    header("Location: page-confirm.php");
    exit;
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $_SESSION['kinds'] = $_POST["kinds"];
//     $_SESSION['name'] = $_POST["name"];
//     $_SESSION['email'] = $_POST["email"];
//     $_SESSION['tel'] = $_POST["tel"];
//     $_SESSION['company'] = $_POST["company"];
//     $_SESSION['department'] = $_POST["department"];
//     $_SESSION['content'] = $_POST["content"];
// }
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/page-header'); ?>

    <main id="confirm" class="main section">
        <section class="container">
            <h2 class="section_heading"><span class="sub_heading">コンタクト</span>CONTACT</h2>
            <div class="inner">

                <form action="form.php" method="post">
                    <!-- valueの中にphpが入る -->
                    <input type="hidden" name="kinds" value="<?php echo $kinds; ?>">
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="hidden" name="tel" value="<?php echo $tel; ?>">
                    <input type="hidden" name="company" value="<?php echo $company; ?>">
                    <input type="hidden" name="department" value="<?php echo $department; ?>">
                    <input type="hidden" name="content" value="<?php echo $content; ?>">

                    <div class="confirmation_box">
                        <h3 class="info_title">送信内容の確認</h3>
                        <p class="double_check">ご入力内容にお間違いがないか確認してください。</p>
                        <dl class="answer">
                            <dt><label for="kinds">お問い合わせ種別</label></dt>
                            <dd><?php echo $kinds; ?></dd>
                            <dt><label for="name">名前</label></dt>
                            <dd><?php echo isset($name) ? htmlspecialchars($name) : ''; ?></dd>
                            <dt><label for="email">メールアドレス<span class="required">※</span></label></dt>
                            <dd><?php echo $email; ?></dd>
                            <dt><label for="tel">電話番号<span class="required">※</span></label></dt>
                            <dd><?php echo $tel; ?></dd>
                            <dt><label for="company">会社名</label></dt>
                            <dd><?php echo $company; ?></dd>
                            <dt><label for="department">部署名</label></dt>
                            <dd><?php echo $department; ?></dd>
                            <dt><label for="content">お問合せ内容</label></dt>
                            <dd><?php echo nl2br($content); ?></dd>
                        </dl>
                    </div>
                    <div class="btn_box inner_wrap">
                        <input type="hidden" name="token" value="<?php echo $token ?>">
                        <input class="btn" type="button" name="back" value="修正する" onclick="history.back(-1)">
                        <button class="btn" type="submit" name="submit">送信する</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>

</html>