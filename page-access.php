<?php
	get_header();
?>

    <main id="main">
        <section class="page-index common">
            <div class="container">
                <div class="title">
                    <h2 class="lead">アクセス</h2>
                </div>
            </div>
        </section>

        <section class="page-access-section">
            <div class="container">
                <div class="section-access-wrapper">
                    <div class="section-intro">
                        <p>代官山MEDICALは渋谷駅「サクラステージ内新南口」から徒歩2分。<br>エスカレーターを降りて桜並木を上がればすぐに代官山MEDICAL。<br>文教地区なのでとても静かな落ち着いた環境です。</p>
                    </div>
                    <div class="section-title">
                        <h2 class="jp">本館</h2>
                    </div>
                    <div class="section-content">
                        <div class="access-map">
                            <ul class="address">
                                <li>
                                    <strong>住所</strong>
                                    <span>東京都渋谷区桜丘町18-6渋谷日本会館6階</span>
                                </li>
                                <li>
                                    <strong>電話</strong>
                                    <span>03-3780-3073</span>
                                </li>
                                <li>
                                    <strong>最寄り駅</strong>
                                    <span>JR渋谷駅 徒歩2分</span>
                                </li>
                            </ul>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.856997929449!2d139.69827177623037!3d35.655894731364754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b575afb0465%3A0xdffb0467cecf1166!2z5pel5pys44CB44CSMTUwLTAwMzEg5p2x5Lqs6YO95riL6LC35Yy65qGc5LiY55S677yR77yY4oiS77yWIOa4i-iwt-aXpeacrOS8mumkqOODk-ODqyA26ZqO!5e0!3m2!1sja!2s!4v1764652644033!5m2!1sja!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="acccess-cross">
                            <a href="<?php echo get_template_directory_uri()?>/assets/image/access-cross.png" class="venobox" data-gall="access-gallery">
                                <img src="<?php echo get_template_directory_uri()?>/assets/image/access-cross.png" alt="交差点" loading="lazy">
                            </a>
                            <p class="help">※画像をクリックで拡大</p>
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