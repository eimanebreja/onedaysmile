<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>1DAYSMILE</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>

<body>
    <nav>
        <div class="nav-area">
            <div class="nav-logo">
                <a href="index.php"><img src="assets/img/logo_nav.png" alt="Oneday Smile Logo" /></a>
            </div>
            <div class="nav-contact pc">
                <div class="contact-container">
                    <div class="contact-area-tel">
                        <a href="tel:0120-130-218"><img src="assets/img/contact_number.png" alt="" /></a>
                    </div>
                    <div class="contact-area">
                        <a href="index.php#company"><img src="assets/img/button1.png" alt="" /></a>
                    </div>
                    <div class="contact-area">
                        <a href="index.php#price"><img src="assets/img/button2.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="confirm-area">
            <div class="confirm-container">
                <form action="send.php" method="POST">
                    <div class="confirm-text">
                        会員情報の確認
                    </div>
                    <div class="confirm-form">
                        <div class="confirm-title">
                            お名前
                        </div>
                        <div class="confirm-answer">
                            <?php echo $_POST['name']; ?>
                            <input class="input-style" name="name" value="<?php echo $_POST['name']; ?>" type="hidden">
                        </div>
                        <div class="confirm-title">
                            フリガナ
                        </div>
                        <div class="confirm-answer">
                            <?php echo $_POST['reading']; ?>
                            <input class="input-style" name="reading" value="<?php echo $_POST['reading']; ?>"
                                type="hidden">
                        </div>
                        <div class="confirm-title">
                            年齢
                        </div>
                        <div class="confirm-answer">
                            <?php echo $_POST['age']; ?>
                            <input class="input-style" name="age" value="<?php echo $_POST['age']; ?>" type="hidden">
                        </div>
                        <div class="confirm-title">
                            性別
                        </div>
                        <div class="confirm-answer">
                            <?php echo $_POST['gender']; ?>
                            <input class="input-style" name="gender" value="<?php echo $_POST['gender']; ?>"
                                type="hidden">
                        </div>
                        <div class="confirm-title">
                            ご住所
                        </div>
                        <div class="confirm-answer">
                            <?php echo $_POST['address']; ?>
                            <input class="input-style" name="address" value="<?php echo $_POST['address']; ?>"
                                type="hidden">
                        </div>
                        <div class="confirm-title">
                            メールアドレス
                        </div>
                        <div class="confirm-answer">
                            <?php echo $_POST['email']; ?>
                            <input class="input-style" name="email" value="<?php echo $_POST['email']; ?>"
                                type="hidden">
                        </div>
                        <div class="confirm-title">
                            カウンセリング第1希望日時
                        </div>
                        <div class="confirm-answer">
                            <?php echo $_POST['cons_month']."月".$_POST['cons_day']."日".$_POST['cons_year']; ?>
                            <input class="input-style" name="date1month" value="<?php echo $_POST['cons_month']."月"; ?>"
                                type="hidden">
                            <input class="input-style" name="date1day" value="<?php echo $_POST['cons_day']."日"; ?>"
                                type="hidden">
                            <input class="input-style" name="date1time" value="<?php echo $_POST['cons_year']; ?>"
                                type="hidden">
                        </div>
                        <div class="confirm-title">
                            カウンセリング第２希望日時
                        </div>
                        <div class="confirm-answer">
                            <?php echo $_POST['cons_monthss']."月".$_POST['cons_dayss']."日".$_POST['cons_yearss']; ?>
                            <input class="input-style" name="date2month"
                                value="<?php echo $_POST['cons_monthss']."月"; ?>" type="hidden">
                            <input class="input-style" name="date2day" value="<?php echo $_POST['cons_dayss']."日"; ?>"
                                type="hidden">
                            <input class="input-style" name="date2time" value="<?php echo $_POST['cons_yearss']; ?>"
                                type="hidden">
                        </div>
                        <div class="confirm-title">
                            お電話番号
                        </div>
                        <div class="confirm-answer">
                            <?php echo $_POST['phone']; ?>
                            <input class="input-style" name="phone" value="<?php echo $_POST['phone']; ?>"
                                type="hidden">
                        </div>
                        <div class="confirm-title last-child">
                            お問い合わせ内容
                        </div>
                        <div class="confirm-answer last-child">
                            <?php echo $_POST['inquiry']; ?>
                            <input class="input-style" name="inquiry" value="<?php echo $_POST['inquiry']; ?>"
                                type="hidden">
                        </div>
                    </div>
                    <div class="confirm-btn">
                        <input class="btn btn-back" type="button" value="戻る" onclick="goBack()">
                        <button id="btn-submit" type="submit" name="send">内容を送信する</button>
                    </div>
                </form>
            </div>
        </div>
    </section>




    <footer>
        <div class="footer-area" id="foot">
            <div class="footer-container">
                <div class="footer-logo">
                    <img src="assets/img/logo_footer.png" alt="">
                    <p>医療法人メディカル・ライフクオリティ</p>
                    <p class="footer-title pc">
                        ワンデイスマイルインプラント総合クリニック
                    </p>
                    <p class="footer-title sp">
                        ワンデイスマイル<br>インプラント総合クリニック
                    </p>
                    <p class="footer-subtitle pc">
                        〒812-0013 福岡県福岡市博多区博多駅東1-13-17 松岡ビル4階
                    </p>
                    <p class="footer-subtitle sp">
                        〒812-0013 福岡県福岡市<br>博多区博多駅東1-13-17 松岡ビル4階
                    </p>


                    <div class="foot-tel">
                        <div class="tel">
                            <img src="assets/img/cont_icon.png" alt="">
                        </div>
                        <div class="tel-num">
                            0120-130-218
                        </div>
                    </div>
                    <p class="sched-time">【営業時間】9:00 ~ 18:00 （月～金）</p>
                    <p class="copyright">Copyright © One Day Smile Implant Clinic.</p>
                </div>
            </div>

        </div>
    </footer>

    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src="assets/js/daysmile.js"></script>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>

</body>

</html>