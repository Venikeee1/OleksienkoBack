<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php if ($page->url == "/"): ?>

        <title><?php echo $page->title ?></title>
        <meta property="og:title" content="<?php echo $page->title ?>" />
        
    <?php else: ?>
        
        <title><?php echo $page->title ?> | <?php echo $page->parent->title ?> | Oleksienko</title>
        <meta property="og:title" content="<?php echo $page->title ?> - <?php echo $page->parent->title ?> - Skyline Design" />
        
    <?php endif; ?>

    <meta content="" name="description">
    <meta content="" name="keywords">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<meta content="telephone=no" name="format-detection">-->
    <!--<meta name="HandheldFriendly" content="true">-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&amp;subset=
    <meta name="msapplication-TileColor" content="#da532c">

    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="source/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="source/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="source/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="source/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="source/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!--favicon end-->

    <meta property="og:image" content="" />

    <link href="/site/templates/styles/main.css?1.1.1" rel="stylesheet" type="text/css">

    <!--cdn jquery-->

    <!--<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-79364246-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-79364246-5');
    </script>-->
</head>
<body>
    
