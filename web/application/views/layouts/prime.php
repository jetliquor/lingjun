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
        echo '<link rel="stylesheet" href="' . $css . '">';
    }
    ?>
</head>

<body>
<header class="header container">
    <div class="logo">
        <a href="/" class="logo_img"><img src="/image/logo.jpg"></a>
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
            $li_line = sprintf('<li><a class="text-center %s" href="%s"><p>%s</p><b>%s</b></a></li>', $on, $link, $page[1], $page[2]);
            echo $li_line;
        }
        ?>
    </ul>
</header>

<?php
echo $content_for_layout;
foreach ($jses as $js) {
    echo '<script src="' . $js . '"></script>';
}
?>

<footer class="container">
    <p class="">
        <a href="#">媒体报道</a><span>|</span>
        <a href="/join">加入我们</a><span>|</span>
        <a href="/faq">常见问题</a><span>|</span>
        <a href="#">用户协议</a>
    </p>

    <p>©2015&nbsp;&nbsp;换芯宝
        &nbsp;&nbsp;沪ICP备xxxxxxx</p>
</footer>

</body>

</html>