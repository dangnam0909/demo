<?php 
  date_default_timezone_set('Asia/Tokyo');
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\PHPMailer;
  require('PHPMailer-6.4.0/src/Exception.php');
  require('PHPMailer-6.4.0/src/PHPMailer.php');
  require('PHPMailer-6.4.0/src/SMTP.php');

  // header('Content-Type: application/json');
  $errors = array();

  if ($_SERVER['REQUEST_METHOD'] == 'POST'):
    $fields = array(
      'menu_121',
      'your_name',
      'your_kana',
      'tel_152',
      'menu_210',
      'menu_209',
      'menu_208',
      'menu_207',
      'text_258',
      'email_248',
      'company',
      'tel_company',
      'company_adress',
      'menu_015',
      'menu_014',
      'menu_013',
      'menu_012',
      'kikyu_name',
      'kankei',
      'tel_kinkyu',
      'other',
      'after'
    );


  foreach ($fields as $field) {
    if(!validate($field))  $errors[$field] = '※こちらの項目を入力してください';
  }

  if(!validateReCaptcha())
    $errors['recaptcha'] = 'あなたがロボットでないなら。 更新して再試行してください！';

  if(empty($errors)){
    extract($_POST);

  $body = <<<EOT
  <br>
    --------------------------------------------------------------

    <table>
    <tr>
      <td width='25%' >ご希望商品</td>
      <td width='10%'>:</td>
      <td width='65%'>$menu_121</td>
    </tr>
    <tr>
      <td width='25%' >名前</td>
      <td width='10%'>:</td>
      <td width='65%'>$your_name</td>
    </tr>
    <tr>
      <td width='25%' >フリガナ</td>
      <td width='10%'>:</td>
      <td width='65%'>$your_kana</td>
    </tr>
    <tr>
      <td width='25%' >携帯電話番号</td>
      <td width='10%'>:</td>
      <td width='65%'>$tel_152</td>
    </tr>
    <tr>
      <td width='25%' >生年月日</td>
      <td width='10%'>:</td>
      <td width='65%'>$menu_210 - $menu_209 - $menu_208</td>
    </tr>
    <tr>
      <td width='25%' >年齢</td>
      <td width='10%'>:</td>
      <td width='65%'>$menu_207</td>
    </tr>
    <tr>
      <td width='25%' >住所</td>
      <td width='10%'>:</td>
      <td width='65%'>$text_258</td>
    </tr>
    <tr>
      <td width='25%' >自宅番号</td>
      <td width='10%'>:</td>
      <td width='65%'>$text_30511</td>
    </tr>
    <tr>
      <td width='25%' >メールアドレス</td>
      <td width='10%'>:</td>
      <td width='65%'>$email_248</td>
    </tr>
      <tr>
      <td width='25%' >勤務先名</td>
      <td width='10%'>:</td>
      <td width='65%'>$company</td>
    </tr>
      <tr>
      <td width='25%' >勤務先番号</td>
      <td width='10%'>:</td>
      <td width='65%'>$tel_company</td>
    </tr>
    <tr>
      <td width='25%' >勤務先住所 </td>
      <td width='10%'>:</td>
      <td width='65%'>$company_adress</td>
    </tr>
    <tr>
      <td width='25%' >雇用形態</td>
      <td width='10%'>:</td>
      <td width='65%'>$menu_015</td>
    </tr>
    <tr>
      <td width='25%' >勤続年数</td>
      <td width='10%'>:</td>
      <td width='65%'>$menu_014</td>
    </tr>
    <tr>
      <td width='25%' >手取り月収</td>
      <td width='10%'>:</td>
      <td width='65%'>$menu_013</td>
    </tr>
      <tr>
      <td width='25%' >給与支給方法</td>
      <td width='10%'>:</td>
      <td width='65%'>$menu_012</td>
    </tr>
    <tr>
      <td width='25%' >緊急連絡先名前</td>
      <td width='10%'>:</td>
      <td width='65%'>$kikyu_name</td>
    </tr>
      <tr>
      <td width='25%' >緊急連絡先関係</td>
      <td width='10%'>:</td>
      <td width='65%'>$kankei</td>
    </tr>
      <tr>
      <td width='25%' >緊急連絡先番号</td>
      <td width='10%'>:</td>
      <td width='65%'>$tel_kinkyu</td>
    </tr>
      <tr>
      <td width='25%' >現在利用中の他業者名</td>
      <td width='10%'>:</td>
      <td width='65%'>$other</td>
    </tr>
      <tr>
      <td width='25%' >過去利用の他業者名</td>
      <td width='10%'>:</td>
      <td width='65%'>$after</td>
    </tr>
  </table> 

  --------------------------------------------------------------<br>
  EOT;

  $admin_subject = "【Title】お客様よりお問い合わせがありました";
  $admin_body = <<<EOT
    お客様からお問い合わせがありました。<br><br>
    
    ＜送信内容＞
    $body
    ※このメールは自動返信メールになります。
  EOT;

  $customer_subject = "【Title】お問い合わせ誠にありがとうござます";
  $customer_body = <<<EOT
    この度は、お問い合わせいただき、誠にありがとうございます。<br>
    お問い合わせいただきました内容を確認後<br>
    担当よりご連絡いたしますので、今しばらくお待ちくださいませ。<br><br>
    
    ＜送信内容＞
    $body
    ※このメールは自動返信メールになります。
  EOT;

  // $to = "murase@digitalship.asia";
  $to = "ps2104001@gmail.com";
  //$bcc  = "";
  
  sendEmail($email_248, $customer_subject, $customer_body);
  $send = sendEmail($to, $admin_subject, $admin_body);

  if(!$send)  $errors['submit'] = "メールを送信できません";
  else {
    header('Location:' . '../thanks/' );
    exit();
  }
}

  endif;
  function sendEmail($to, $subject, $body, $bcc=false){
    mb_language("ja");
    $subject = mb_convert_encoding($subject, "ISO-2022-JP","AUTO");
    $subject = mb_encode_mimeheader($subject);
    
    $from_email = '';
    // $from_email = 'hamura_s_d_c@yahoo.co.jp';
    $from_name = "【羽村ステーションデンタル】";
    $headers  = "MIME-Version: 1.0 \n" ;
    $headers .= "From: " .
        "".mb_encode_mimeheader (mb_convert_encoding($from_name,"ISO-2022-JP","AUTO")) ."" .
        "<".$from_email."> \n";
    $headers .= "Reply-To: " .
        "".mb_encode_mimeheader (mb_convert_encoding($from_name,"ISO-2022-JP","AUTO")) ."" .
        "<".$from_email."> \n";
    $headers .= "Content-Type: text/html;charset=ISO-2022-JP \n";
    if($bcc)
    $headers .= "Bcc: {$bcc} \n";
    $sendmail_params  = "-f$from_email";
    $result = mail($to, $subject, $body, $headers,$sendmail_params);
    $result = false;
    if(!$result){
      $mail = new PHPMailer();
      $mail->IsSMTP();
      //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
      $mail->SMTPAuth = true; // authentication enabled
      $mail->CharSet = 'UTF-8';
      $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465; // or 587
      $mail->IsHTML(true);
      $mail->Username = "ps2104001@gmail.com";
      $mail->Password = "tcjetvgblcilleew";
      $mail->SetFrom($from_email, $from_name);
      $mail->Subject = $subject;
      $mail->Body = $body;
      $mail->AddAddress($to);
      if($bcc)    $mail->addBCC($bcc);
      return $mail->Send();
    }
    return true;
  }

  function validate($field){
    return (isset($_POST[$field]) && $_POST[$field]!="");
  }

  function validateReCaptcha(){
    $recaptcha = isset($_POST['token'])?$_POST['token']:false;
    if (!$recaptcha)  return false;
    $secret   = '6LcKDXsbAAAAAPLnU5ooVxKLN-ER1iE25hDroFEa';
    $response = file_get_contents(
      "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
    );
    $response = json_decode($response);

    if ($response->success === false)  return false;
    return true;

    /* if ($response->success==true && $response->score <= 0.5) {
        //Do something to denied access
    } */
  }