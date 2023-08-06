<!--
Template Name: お問い合わせ
-->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if (isset($_POST['submit'])) { //#1
    $kinds = htmlspecialchars($_POST['kinds'], ENT_QUOTES | ENT_HTML5);
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES | ENT_HTML5);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES | ENT_HTML5);
    $tel = htmlspecialchars($_POST['tel'], ENT_QUOTES | ENT_HTML5);
    $company = htmlspecialchars($_POST['company'], ENT_QUOTES | ENT_HTML5);
    $department = htmlspecialchars($_POST['department'], ENT_QUOTES | ENT_HTML5);
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES | ENT_HTML5);

    $errors = []; //エラー格納用配列
    //trim(文字列)→文字列内の空白を除去 →値がなくなればエラーにする
    if (trim($name) === '' || trim($name) === "　") {
        $errors['name'] = "名前を入力してください";
    }
    if (trim($tel) === '' || trim($tel) === "　") {
        $errors['tel'] = "電話番号を入力してください";
    }
    if (trim($content) === '' || trim($content) === "　") {
        $errors['content'] = "内容を入力してください";
    }

    // エラー配列がなければ異常なし
    if (count($errors) === 0) { // #2
        $_SESSION['kinds'] = $kinds;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['tel'] = $tel;
        $_SESSION['company'] = $company;
        $_SESSION['department'] = $department;
        $_SESSION['content'] = $content;
        error_log('Redirecting to confirm page');
        header('Location: http://mysite.local/contact/confirm/');
        exit();
    } else {
        // エラー配列があればエラーを表示
        echo $errors['name'];
        echo $errors['tel'];
        echo $errors['content'];
    } // #2
} //#1


?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/page-header'); ?>

    <main id="contact" class="main section">
        <section class="container">

            <h2 class="section_heading"><span class="sub_heading">コンタクト</span>CONTACT</h2>
            <p class="note">入力フォームを記入の上、送信してください。追って担当者より<br>ご連絡いたします。<span class="required">※ は入力必須項目です。</span></p>
            <section id="contact_form">
                <div class="inner">
                    <form action="confirm.php" method="post"> <!-- actionに送信先のphp -->
                        <dl>
                            <dt><label for="kinds">お問い合わせ種別</label></dt>
                            <dd><select name="kinds" id="kinds" required class="round">
                                    <option value="">選択してください</option>
                                    <option value="Pro naviに関して">Pro naviに関して</option>
                                    <option value="HP/チラシ制作に関して">HP/チラシ制作に関して</option>
                                    <option value="SNSコンサルに関して">SNSコンサルに関して</option>
                                    <option value="その他">その他</option>
                                </select></dd>
                            <dt><label for="name">名前<span class="required">※</span></label></dt>
                            <dd><input type="text" id="name" name="name" placeholder="山田　太郎" required></dd>
                            <dt><label for="email">メールアドレス<span class="required">※</span></label></dt>
                            <dd><input type="email" id="email" name="email" placeholder="abcd012@gmail.com" required></dd>
                            <dt><label for="tel">電話番号<span class="required">※</span></label></dt>
                            <dd><input type="tel" id="phone" name="tel" placeholder="000-0000-0000" required></dd>
                            <dt><label for="company">会社名</label></dt>
                            <dd><input type="text" id="company" name="company" placeholder="日本株式会社"></dd>
                            <dt><label for="department">部署名</label></dt>
                            <dd><input type="text" id="department" name="department" placeholder="広報部"></dd>
                            <dt><label for="content">お問合せ内容<span class="required">※</span></label></dt>
                            <dd><textarea id="message" name="content" required></textarea></dd>
                            <dt>
                                <p class="confirmation">個人情報保護方針をお読みの上、<br>問題なければ下記項目にチェックしてください。</p>
                            </dt>
                            <dd><input type="checkbox" name="confirmation" value="confirm" required><label for=""></label> 個人情報保護方針 に同意する</dd>
                        </dl>
                        <div class="submit-btn">
                            <input type="submit" name="submit" value="確認画面へ">
                        </div>
                    </form>
                </div>
            </section>

        </section>
    </main>

    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>

</html>

