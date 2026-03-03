<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:locale" content="ja_JP">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="医学部専門予備校代官山MEDICAL" />
    <meta name="description" content="医学部専門予備校代官山MEDICAL" />

    <title>医学部専門予備校代官山MEDICAL</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/font/fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/app.css">

    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <div class="header-wrapper">
            <h1 class="header-logo scrollto">
                <a class="logo-link" href="<?php echo home_url() ?>/">
                    <img src="<?php echo get_template_directory_uri()?>/assets/image/logo.png" alt="医学部専門予備校代官山MEDICAL" loading="lazy">
                </a>
            </h1>
            <div class="header-meta">
                <div class="meta-tel">
                    <span>お気軽にお問い合わせください</span>
                    <a href="tel:03-3780-3073">03-3780-3073</a>
                </div>
                <ul class="meta-menu">
                    <li>
                        <a href="<?php echo home_url() ?>/">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/header-top-icon01.png" alt="保護者の皆さまへ" loading="lazy">
                            <span>保護者の皆さまへ</span>  
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() ?>/faq">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/header-top-icon02.png" alt="よくあるご質問" loading="lazy">
                            <span>よくあるご質問</span>  
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() ?>/contact">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/header-top-icon03.png" alt="資料請求" loading="lazy">
                            <span>資料請求</span>  
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() ?>/contact">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/header-top-icon04.png" alt="お問い合わせ" loading="lazy">
                            <span>お問い合わせ</span>  
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url() ?>/access">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/header-top-icon05.png" alt="アクセス" loading="lazy">
                            <span>アクセス</span>  
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="header-nav">
            <ul class="nav-menu">
                <li>
                    <a href="<?php echo home_url() ?>/method" class="menu-link active">
                        <img src="<?php echo get_template_directory_uri()?>/assets/image/menu-icon01.png" alt="合格メソッド" loading="lazy">
                        <span>合格メソッド</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">
                        <img src="<?php echo get_template_directory_uri()?>/assets/image/menu-icon02.png" alt="合格実績" loading="lazy">
                        <span>合格実績</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">
                        <img src="<?php echo get_template_directory_uri()?>/assets/image/menu-icon03.png" alt="講師・紹介" loading="lazy">
                        <span>講師・紹介</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">
                        <img src="<?php echo get_template_directory_uri()?>/assets/image/menu-icon04.png" alt="コース案内" loading="lazy">
                        <span>コース案内</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">
                        <img src="<?php echo get_template_directory_uri()?>/assets/image/menu-icon05.png" alt="特別対策講座" loading="lazy">
                        <span>特別対策講座</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">
                        <img src="<?php echo get_template_directory_uri()?>/assets/image/menu-icon06.png" alt="入学案内" loading="lazy">
                        <span>入学案内</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">
                        <img src="<?php echo get_template_directory_uri()?>/assets/image/menu-icon07.png" alt="説明会イベント" loading="lazy">
                        <span>説明会イベント</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">
                        <img src="<?php echo get_template_directory_uri()?>/assets/image/menu-icon08.png" alt="私立・国立医学部受験情報" loading="lazy">
                        <span>私立・国立医学部<br>受験情報</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="mobile-nav">
        <nav class="mobile-nav-container">
            <ul class="mobile-nav-menu">
                <li>
                    <a href="<?php echo home_url() ?>/method" class="menu-link">合格メソッド</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">合格実績</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">講師・紹介</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">コース案内</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">特別対策講座</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">入学案内</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">説明会イベント</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">私立・国立医学部受験情報</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">保護者の皆さまへ</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">よくあるご質問</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">資料請求</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">お問い合わせ</a>
                </li>
                <li>
                    <a href="<?php echo home_url() ?>/" class="menu-link">アクセス</a>
                </li>
            </ul>
        </nav>
    </div>