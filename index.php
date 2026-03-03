<?php
	get_header();
?>

    <main id="main">

        <section id="top" class="mainvisual">
            <div class="mainvisual-swiper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture class="mainvisual-image">
                            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/mainvisual-slide01.png">
                            <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/mainvisual-slide01.png">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/mainvisual-slide01.png" alt="mainvisual-bg" loading="lazy">
                        </picture>
                        <div class="mainvisual-action">
                            <a href="<?php echo home_url() ?>/" class="link-btn">
                                <span>もっと詳しく見る</span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <picture class="mainvisual-image">
                            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/mainvisual-slide02.jpg">
                            <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/mainvisual-slide02_sp.jpg">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/mainvisual-slide02.png" alt="mainvisual-bg" loading="lazy">
                        </picture>
                        <div class="mainvisual-action">
                            <a href="<?php echo home_url() ?>/" class="link-btn">
                                <span>もっと詳しく見る</span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <picture class="mainvisual-image">
                            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/mainvisual-slide03.jpg">
                            <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/mainvisual-slide03_sp.jpg">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/mainvisual-slide03.png" alt="mainvisual-bg" loading="lazy">
                        </picture>
                        <div class="mainvisual-action">
                            <a href="<?php echo home_url() ?>/" class="link-btn">
                                <span>もっと詳しく見る</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="top-post-section">
            <div class="container">
                <div class="section-grid">
                    <div class="section-news-wrapper">
                        <div class="section-title">
                            <h2 class="jp">お知らせ</h2>
                            <p class="en">Latest News</p>
                        </div>
                        <div class="section-content">
                            <div class="scroller">
                                <ul class="news-list">
                                <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 6,
                                        'cat' => ''
                                    );
                                    $custom_query = new WP_Query( $args );
                                    ?>
                                    <?php if( $custom_query->have_posts() ) : ?>                
                                        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?> 
                                            <li>
                                                <div class="news-item">
                                                    <p class="date"><?php  echo get_post_time('Y.m.d');?></p>
                                                    <h4 class="title">
                                                        <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                                                    </h4>
                                                </div>
                                            </li>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="news-action">
                                <a href="<?php echo home_url() ?>/" class="more">>お知らせ一覧</a>
                            </div>
                        </div>
                    </div>
                    <div class="section-infomation-wrapper">
                        <div class="section-title">
                            <h2 class="jp">イベント情報</h2>
                            <p class="en">Event Information</p>
                        </div>
                        <div class="section-content">
                            <ul class="infomation-list">
                                <?php
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                    $args = array(
                                        'post_type' => 'medical_event',
                                        'posts_per_page' => 2,
                                    );
                                    $custom_query = new WP_Query( $args );
                                    ?>
                                    <?php if( $custom_query->have_posts() ) : ?>                
                                        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?> 
                                            <li>
                                                <div class="infomation-item">
                                                    <p class="date"><?php  echo get_post_time('Y.m.d');?></p>
                                                    <h4 class="title"><?php echo the_title(); ?></h4>
                                                    <a href="<?php the_permalink(); ?>" class="more">>詳しくはこちら</a>
                                                </div>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </ul>
                            <div class="infomation-banner">
                                <picture class="thumb">
                                    <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/event-banner.jpg">
                                    <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/event-banner-sp.jpg">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/image/event-banner.jpg" alt="イベント情報" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="method" class="top-method-section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="section-title">
                        <h2 class="jp">代官山メディカルの<br class="sp-only">合格メソッド</h2>
                        <p class="en">Method to Passing</p>
                    </div>
                    <div class="section-content">
                        <div class="method-article">
                            <h4 class="label">
                                <span>1年で医学部合格を果たす</span>
                                <small>代官山MEDICALの</small>
                                <strong>「7つの秘訣」</strong>
                            </h4>
                            <h5 class="lead">徹底した少人数制で一人ひとりを確実に合格に導く</h5>
                            <div class="desc">塾生一人ひとりの入試とのかかわり方を指導し、<br class="pc-only">一年後見事に医学部入試を突破して、<br class="pc-only">将来社会に貢献できる立派な医師に育って欲しい、<br class="pc-only">そんな強い思いから構築した教育システムを採用。<br><strong>1年で必ず合格へと導きます。</strong></div>
                        </div>
                        <div class="method-scroller">
                            <ul class="method-list">
                                <li>
                                    <div class="method-item" style="background-image: url('./assets/image/method-bg01.png');">
                                        <div class="count">
                                            <small>METHOD</small>
                                            <strong>01</strong>
                                        </div>
                                        <h3 class="title">1日12時間の徹底指導―<br>知識の定着まで<br>校舎で完結</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="method-item" style="background-image: url('./assets/image/method-bg02.png');">
                                        <div class="count">
                                            <small>METHOD</small>
                                            <strong>02</strong>
                                        </div>
                                        <h3 class="title">1クラス9名による双方向<br>型授業 ― 思考を深め、<br>適切なレベルで学力を伸ばす</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="method-item" style="background-image: url('./assets/image/method-bg03.png');">
                                        <div class="count">
                                            <small>METHOD</small>
                                            <strong>03</strong>
                                        </div>
                                        <h3 class="title">60名を超えるプロ講師<br>陣 ― その日の疑問は<br>その日に解決</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="method-item" style="background-image: url('./assets/image/method-bg04.png');">
                                        <div class="count">
                                            <small>METHOD</small>
                                            <strong>04</strong>
                                        </div>
                                        <h3 class="title">学力別12クラス編成 ― <br>意志の弱さを補う<br>「さぼれない環境」</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="method-item" style="background-image: url('./assets/image/method-bg05.png');">
                                        <div class="count">
                                            <small>METHOD</small>
                                            <strong>05</strong>
                                        </div>
                                        <h3 class="title">成果の見える化 ― デー<br>タで導く、合格への最<br>短ルート</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="method-item" style="background-image: url('./assets/image/method-bg06.png');">
                                        <div class="count">
                                            <small>METHOD</small>
                                            <strong>06</strong>
                                        </div>
                                        <h3 class="title">医学部合格に直結<br>するオリジナル教<br>材 ― 驚異の的中率</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="method-item" style="background-image: url('./assets/image/method-bg07.png');">
                                        <div class="count">
                                            <small>METHOD</small>
                                            <strong>07</strong>
                                        </div>
                                        <h3 class="title">学院長と担任で合格へ<br>導く― 合格まで泥臭く<br>伴走します</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="method-action">
                            <a href="<?php echo home_url() ?>/" class="link-btn">
                                <span>代官山メソッドについてもっと詳しく</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="result" class="top-result-section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="section-title">
                        <h2 class="jp">輝かしい合格実績</h2>
                        <p class="en">Great Results</p>
                    </div>
                    <div class="section-content">
                        <div class="result-article">
                            <h3 class="label">驚異の<br>医学部進学率&<br>医学部合格率</h3>
                            <div class="desc">塾生一人ひとりの入試とのかかわり方を指導し、<br class="pc-only">一年後に見事に医学部入試を突破して、<br class="pc-only">将来社会に貢献できる立派な医師に育ってほしい、<br class="pc-only">そんな強い思いから構築した教育システム。<br>それが“代官山メソッド”です。</div>
                            <ul class="meta">
                                <li>
                                    <p>医学部<br>累計進学者数</p>
                                    <h5>935名</h5>
                                </li>
                                <li>
                                    <p>2025年<br>医学部進学者数</p>
                                    <h5>79名</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="result-report">
                            <figure class="thumb">
                                <img src="<?php echo get_template_directory_uri()?>/assets/image/result-report.jpg" alt="合格実績レポート" loading="lazy">
                            </figure>
                        </div>
                        <div class="result-action">
                            <a href="<?php echo home_url() ?>/" class="link-btn">
                                <span>合格実績をもっと詳しく見る</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="course" class="top-course-section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="section-title">
                        <h2 class="jp">コース案内</h2>
                        <p class="en">Course Guidance</p>
                    </div>
                    <div class="section-content">
                        <div class="course-article">
                            <h3 class="label">一人ひとりに<br>合わせた<br>徹底的な指導</h3>
                            <h4 class="lead">徹底した少人数制で一人ひとりを確実に合格に導く</h4>
                            <div class="desc">塾生一人ひとりの入試とのかかわり方を指導し、一年後に見事に医学部入試を突破して、将来社会に貢献できる立派な医師に育ってほしい、そんな強い思いから構築した教育システム。それが“代官山メソッド”です。</div>
                            <div class="action pc-only">
                                <a href="<?php echo home_url() ?>/" class="link-btn">
                                    <span>コース案内をもっと詳しく見る</span>
                                </a>
                            </div>
                        </div>
                        <ul class="course-list">
                            <li>
                                <div class="course-item">
                                    <div class="wrap">
                                        <h4 class="label">高卒生コース</h4>
                                        <p class="tag">全6コース</p>
                                        <div class="desc">徹底的に医学部合格ににこだわる高卒生コース。医学部合格のためにすべてを一人ひとりにナビゲートします。</div>
                                        <ul class="a-list">
                                            <li>
                                                <p class="item item-m">M</p>
                                            </li>
                                            <li>
                                                <p class="item item-a">A</p>
                                            </li>
                                            <li>
                                                <p class="item item-b">B</p>
                                            </li>
                                            <li>
                                                <p class="item item-d">D</p>
                                            </li>
                                            <li>
                                                <p class="item item-p">P</p>
                                            </li>
                                            <li>
                                                <p class="item item-mz">Mz</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <figure class="thumb">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/image/course-img01.png" alt="高卒生コース" loading="lazy">
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="course-item">
                                    <div class="wrap">
                                        <h4 class="label">現役生コース</h4>
                                        <p class="tag pink-bg">全4コース</p>
                                        <div class="desc">徹底的に医学部合格ににこだわる高卒生コース。医学部合格のためにすべてを一人ひとりにナビゲートします。</div>
                                        <ul class="b-list">
                                            <li>
                                                <p class="item">
                                                    <strong>高３生</strong>
                                                    <span>コース</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="item">
                                                    <strong class="ls">高1・2生</strong>
                                                    <span>コース</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="item">
                                                    <strong>中学生</strong>
                                                    <span>コース</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <figure class="thumb">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/image/course-img02.png" alt="現役生コース" loading="lazy">
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <div class="course-item">
                                    <div class="wrap">
                                        <h4 class="label">特別対策講座</h4>
                                        <p class="tag blue-bg">全4コース</p>
                                        <div class="desc">徹底的に医学部合格ににこだわる高卒生コース。医学部合格のためにすべてを一人ひとりにナビゲートします。</div>
                                        <ul class="c-list">
                                            <li>
                                                <p class="item">特別対策講座</p>
                                            </li>
                                            <li>
                                                <p class="item">推薦対策講座</p>
                                            </li>
                                            <li>
                                                <p class="item">2次試験対策講座</p>
                                            </li>
                                            <li>
                                                <p class="item">後期試験対策講座</p>
                                            </li>
                                            <li class="full">
                                                <a href="<?php echo home_url() ?>/" class="link-btn">
                                                    <span>各種講座一覧</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <figure class="thumb">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/image/course-img03.png" alt="特別対策講座" loading="lazy">
                                    </figure>
                                </div>
                            </li>
                        </ul>
                        <div class="course-action sp-only">
                            <a href="<?php echo home_url() ?>/" class="link-btn">
                                <span>コース案内をもっと詳しく見る</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="lecturer" class="top-lecturer-section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="section-title">
                        <h2 class="jp">講師・チューター<br class="sp-only">紹介</h2>
                        <p class="en">Lecturers and Tutors</p>
                    </div>
                    <div class="section-content">
                        <div class="result-article">
                            <h3 class="label">医学部入試に<br>特化した<br>60名超えの<br>プロ講師陣</h3>
                            <div class="desc">医学部受験のプロの視点から、<br>先生方がテーマごとに担当科目の学習方法や<br class="pc-only">受験の突破法をお伝えします。</div>
                        </div>
                        <div class="result-bg">
                            <picture class="thumb">
                                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/lecturer-bg.png">
                                <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/lecturer-bg-sp.png">
                                <img src="<?php echo get_template_directory_uri()?>/assets/image/lecturer-bg.png" alt="講師・チューター紹介" loading="lazy">
                            </picture>
                            
                        </div>
                        <div class="result-action">
                            <a href="<?php echo home_url() ?>/" class="link-btn">
                                <span>講師・チューターについて詳しく見る</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="examination" class="top-examination-section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="section-title">
                        <h2 class="jp">私立・国立医学部<br class="sp-only">受験情報</h2>
                        <p class="en">Examination Information</p>
                    </div>
                    <div class="section-content">
                        <div class="result-article">
                            <h3 class="label">私立・国立<br class="sp-only">医学部の<br>最新入試情報をお届け</h3>
                            <h5 class="lead">医学部受験のプロの視点から、<br>先生方がテーマごとに担当科目の学習方法や<br class="pc-only">受験の突破法をお伝えします。</h5>
                            <div class="desc">塾生一人ひとりの入試とのかかわり方を指導し、<br class="pc-only">一年後に見事に医学部入試を突破して、<br class="pc-only">将来社会に貢献できる立派な医師に育ってほしい、<br class="pc-only">そんな強い思いから構築した教育システム。<br>それが“代官山メソッド”です。</div>
                        </div>
                        <div class="result-bg">
                            <picture class="thumb">
                                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/examination-bg.png">
                                <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/examination-bg-sp.png">
                                <img src="<?php echo get_template_directory_uri()?>/assets/image/examination-bg.png" alt="私立・国立医学部受験情報" loading="lazy">
                            </picture>
                        </div>
                        <div class="result-action">
                            <a href="<?php echo home_url() ?>/" class="link-btn">
                                <span>受験情報をもっと詳しく見る</span>
                            </a>
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

