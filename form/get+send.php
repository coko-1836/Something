<!DOCTYPE html>
<head>
    <title>Form-Test</title>
    <meta charset="utf-8" />
    <link rel="icon" href="img/icon.png" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
</head>
<body>
    <header>
        <h1>Form-Test</h1>
    </header>
    <body>
        
        <a href="./form.html">Return To Top</a>
        <?php
            mb_language("Japanese");
            mb_internal_encoding("UTF-8");
            $name = htmlspecialchars($_POST['user_name']);
            $mail = htmlspecialchars($_POST['user_email']);
            $message = htmlspecialchars($_POST['user_message']);
            $to = 'tacbusinesscl@gmail.com';
            $date = date("F j, Y, g:i a");
            $subject = "Test Mail ($date)";
            $header = "From: $name + $mail";
            if(mb_send_mail($to,$subject,$message,$header)){
                echo '<p>送信完了</p>';
            }else{
                echo '<p>送信失敗</p>';
            }
        ?>
    </body>
    <footer>
        
    </footer>
</body>