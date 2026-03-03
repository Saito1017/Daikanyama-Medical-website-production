<?php
	get_header();
?>

    <main id="main">

        <section class="page-index" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/image/company/page-index.png);">
            <div class="container">
                <div class="title">
                    <h2 class="lead">運営会社</h2>
                </div>
            </div>
        </section>

        <section class="page-company">
            <div class="container">
                <div class="page-company-section">
                    <figure class="page-company-logo">
                        <img src="<?php echo get_template_directory_uri()?>/assets/image/company/company-logo.png" alt="">
                    </figure>
                    <div class="page-company-item">
                        <div class="page-company-row">
                            <p class="category">会社名</p>
                            <p class="txt">株式会社代官山Educational</p>
                        </div>
                        <div class="page-company-row">
                            <p class="category">所在地</p>
                            <p class="txt">東京都渋谷区桜丘町18-6 8階</p>
                        </div>
                        <div class="page-company-row">
                            <p class="category">創業年月日</p>
                            <p class="txt">1999年4月1日</p>
                        </div>
                        <div class="page-company-row">
                            <p class="category">設立年月日</p>
                            <p class="txt">2024年(令和6年)1月1日</p>
                        </div>
                        <div class="page-company-row">
                            <p class="category">資本金</p>
                            <p class="txt">1000万円</p>
                        </div>
                        <div class="page-company-row">
                            <p class="category">従業員数</p>
                            <p class="txt">80名（正社員・非常勤含む）</p>
                        </div>
                        <div class="page-company-row">
                            <p class="category">連絡先</p>
                            <p class="txt">03-3780-3073</p>
                        </div>
                        <div class="page-company-row">
                            <p class="category">事業内容</p>
                            <p class="txt">医学部受験専門予備校として、医学部受験に特化したカリキュラムを提供し、生徒一人ひとりに丁寧な指導を提供し、生徒の合格をサポートしています。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="common-banner-section">
            <div class="container">
                <div class="section-wrapper">
                    <ul class="banner-list">
                        <li class="pc-only">
                            <div class="banner-item banner01">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/image/banner-img01.png" alt="バナー" loading="lazy">
                                </div>
                                <div class="block">
                                    <h4 class="label">個別入学説明会</h4>
                                    <div class="action">
                                        <a href="<?php echo home_url() ?>/" class="banner-btn">
                                            <span>お申し込みはこちらから</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-item banner02">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/image/banner-img02.png" alt="バナー" loading="lazy">
                                </div>
                                <div class="block">
                                    <h4 class="label">資料等のご請求</h4>
                                    <div class="action">
                                        <a href="<?php echo home_url() ?>/" class="banner-btn">
                                            <span>お申し込みはこちらから</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-item banner03">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/image/banner-img03.png" alt="バナー" loading="lazy">
                                </div>
                                <div class="block">
                                    <h4 class="label">医学部受験<span class="pc-only">のご</span>相談</h4>
                                    <div class="action">
                                        <a href="<?php echo home_url() ?>/" class="banner-btn">
                                            <span>お申し込みはこちらから</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="banner-desc">代官山MEDICALのパンフレットのご請求は電話・FAX、またはお問い合わせフォームより受け付けております。<br class="pc-only">入学説明会（予約制：午前10時から午後7時）の申し込みも受け付けています。</div>
                </div>
            </div>
        </section>

    </main>

    <?php get_footer(); ?>