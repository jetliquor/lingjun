<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>换芯宝</title>
    <link rel="shortcut icon" href="favicon.ico">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="换芯宝">
    <meta name="keywords" content="换芯宝">

    <?php
    foreach ($csses as $css) {
        echo '<link rel="stylesheet" href="' . $css . '">' . PHP_EOL;
    }
    ?>
</head>

<body>
<header class="header container">
    <div class="logo">
        <a href="/" class="logo_img"><img src="<?= getImg('logo.jpg') ?>"></a>
    </div>
    <ul class="menu">
        <?php
        $pages = array(array('home', '首页', 'Home'),
            array('appoint', '在线预约', 'Online booking'),
            array('card', '加入会员', 'Membership'),
            array('faq', '常见问题', 'FAQ'),
            array('join', '加入我们', 'Join us'));
        foreach ($pages as $page) {
            if ($page_name == $page[0]) {
                $on = 'on';
                $link = '#';
            } else {
                $on = '';
                $link = '/' . $page[0];
            }
            echo <<<EOT
<li><a class="text-center $on" href="$link"><p>$page[1]</p><b>$page[2]</b></a></li>
EOT;
        }
        ?>
    </ul>
</header>

<?php
echo $content_for_layout;
foreach ($jses as $js) {
    echo '<script src="' . $js . '"></script>' . PHP_EOL;
}
?>

<footer class="container">
    <p class="">
        <a href="/misc/news">媒体报道</a><span>|</span>
        <a href="/join">加入我们</a><span>|</span>
        <a href="/faq">常见问题</a><span>|</span>
        <a href="/misc/agreement">用户协议</a>
    </p>

    <p>©2015&nbsp;&nbsp;换芯宝
        &nbsp;&nbsp;沪ICP备xxxxxxx</p>
</footer>

</body>

</html>