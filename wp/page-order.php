<?php 
    /*
        Template Name: Order Page
    */

    $str_json           = file_get_contents('php://input');
    $response           = json_decode($str_json, true);
    $content            = $response['content'];
    $__from             = $response['email'];
    
    $to = 'info@oldboyacademy.com';
    $subject = 'Заявка в академию';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    wp_mail( $to, $subject, $content, $headers );
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php echo '---- start ----';?>
    <?php echo $content;?> 
    <?php echo '---- end ----'; ?>
</body>
</html> -->