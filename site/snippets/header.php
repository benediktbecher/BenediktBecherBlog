<!doctype html>
<html amp lang="de">

    <head>
    <meta charset="utf-8">
    <title>Hello, AMPs</title>
    <link rel="canonical" href="http://blog.benediktbecher.de">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <?php

            $css = css('assets/css/main.css');
            preg_match_all('~href=("|\')(.*?)\1~', $css, $out);
            $css_data = file_get_contents($out[2][0]);
        ?>

        <style>

            <?php echo $css_data; ?>

        </style>

    </head>
    <body>

    <header class="header cf" role="banner">
        <a class="logo" href="<?php echo url() ?>">
            <amp-img src="<?php echo url('assets/images/logo.svg') ?>" height="45" width="40" alt="<?php echo $site->title()->html() ?>"></amp-img>
        </a>
        <?php snippet('menu') ?>
    </header>