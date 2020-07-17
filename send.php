<?php
if (isset($_POST['send'])) {
    $from = $_POST['email'];
    $name = $_POST['name'];
    $reading = $_POST['reading'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $date1month =   $_POST['date1month'];
    $date1day =   $_POST['date1day'];
    $date1time =   $_POST['date1time'];
    $date2month =   $_POST['date2month'];
    $date2day =   $_POST['date2day'];
    $date2time =   $_POST['date2time'];
    $phone = $_POST['phone'];
    $inquiry = $_POST['inquiry'];
 
    $to = "nimuel24@gmail.com";
    $too = $_POST['email'];
    $subject = '=?UTF-8?B?' . base64_encode('【インプラント専門ワンデイスマイル】カウンセリング予約の確認') . '?=';
    $headers = array(
        "From: {$from}",
        "MIME-Version: 1.0",
        "Content-Type: text/plain; charset=utf-8"
    );

    $messageInquirer = "こちらは自動返信メールです。\n"
    ."この度はワンデイスマイルのカウンセリング予約ありがとうございます。\n"
    ."下記の内容で受付させていただきました。\n"
    ."またこの後、当医院よりお電話で予約確認のお電話を入れさせていただきますのでよろしくお願い申し上げます。\n"
    ."当日のご来院お待ちしております。\n"
    ."ーーーーーーーーーーーーーーーーーーーーーー\n"
    ."●名前 :" .$name. "\n"
    ."●フリガナ :" .$reading ."\n"
    ."●年齢 :" .$age ."\n"
    ."●性別 :" .$gender ."\n"
    ."●住所 :" .$address ."\n"
    ."●メール :" .$from ."\n"
    ."●カウンセリング第1希望(月) :" .$date1month ."\n"
    ."●カウンセリング第1希望(日) :" .$date1day ."\n"
    ."●カウンセリング第1希望(時間) :" .$date1time ."\n"
    ."●カウンセリング第2希望(月) :" .$date2month ."\n"
    ."●カウンセリング第2希望(日) :" .$date2day ."\n"
    ."●カウンセリング第2希望(時間) :" .$date2time ."\n"
    ."●TEL :" .$phone ."\n"
    ."●お問い合わせ内容 :" .$inquiry ."\n"
    ."ーーーーーーーーーーーーーーーーーーーーーー";


    $messageDoctor = "「ワンデイスマイル カウンセリング予約フォーム　LP」からメールが届きました\n"
    ."━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n"
    ."●名前\n"
    .$name ."\n"
    ."--------------------------------------------------------------\n"
    ."●フリガナ\n"
    .$reading ."\n"
    ."--------------------------------------------------------------\n"
    ."●年齢\n"
    .$age ."\n"
    ."--------------------------------------------------------------\n"
    ."●性別\n"
    .$gender ."\n"
    ."--------------------------------------------------------------\n"
    ."●住所\n"
    .$address ."\n"
    ."--------------------------------------------------------------\n"
    ."●メール\n"
    .$from ."\n"
    ."--------------------------------------------------------------\n"
    ."●カウンセリング第1希望(月)\n"
    .$date1month ."\n"
    ."--------------------------------------------------------------\n"
    ."●カウンセリング第1希望(日)\n"
    .$date1day ."\n"
    ."--------------------------------------------------------------\n"
    ."●カウンセリング第1希望(時間)\n"
    .$date1time ."\n"
    ."--------------------------------------------------------------\n"
    ."●カウンセリング第2希望(月)\n"
    .$date2month ."\n"
    ."--------------------------------------------------------------\n"
    ."●カウンセリング第2希望(日)\n"
    .$date2day ."\n"
    ."--------------------------------------------------------------\n"
    ."●カウンセリング第2希望(時間)\n"
    .$date2time ."\n"
    ."--------------------------------------------------------------\n"
    ."●TEL\n"
    .$phone ."\n"
    ."--------------------------------------------------------------\n"
    ."●お問い合わせ内容\n"
    .$inquiry ."\n"
    ."--------------------------------------------------------------\n";

    // $headers = "From:" . $from;

    mail($to, $subject, $messageDoctor, implode("\r\n", $headers));
    mail($too, $subject, $messageInquirer, implode("\r\n", $headers));

    echo "<script>window.open('thanks.php','_self')</script>";

}

?>