<?php
	get_header();
?>

    <main id="main">

        <section class="page-index" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/image/record/page-index.png);">
            <div class="container">
                <div class="title">
                    <h2 class="lead">合格実績</h2>
                </div>
            </div>
        </section>

        <section class="mainvisual">
            <div class="mainvisual-swiper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture class="mainvisual-image">
                            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png" alt="mainvisual-bg" loading="lazy">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture class="mainvisual-image">
                            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png" alt="mainvisual-bg" loading="lazy">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture class="mainvisual-image">
                            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png" alt="mainvisual-bg" loading="lazy">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture class="mainvisual-image">
                            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png" alt="mainvisual-bg" loading="lazy">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture class="mainvisual-image">
                            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png" alt="mainvisual-bg" loading="lazy">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture class="mainvisual-image">
                            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/record/record-slider-img1.png" alt="mainvisual-bg" loading="lazy">
                        </picture>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="record-search">
            <div class="container">
                <div class="record-search-index">
                    <div class="search-item">
                        <p class="search-item-lead">年度</p>
                        <div class="search-item-area">
                            <div class="search-item-box">
                                <input type="checkbox" name="" id="">
                                <label for="">2025年</label>
                            </div>
                            <div class="search-item-box">
                                <input type="checkbox" name="" id="">
                                <label for="">2024年</label>
                            </div>
                            <div class="search-item-box">
                                <input type="checkbox" name="" id="">
                                <label for="">2023年</label>
                            </div>
                            <div class="search-item-box">
                                <input type="checkbox" name="" id="">
                                <label for="">2022年</label>
                            </div>
                            <div class="search-item-box">
                                <input type="checkbox" name="" id="">
                                <label for="">2021年</label>
                            </div>
                            <div class="search-item-box">
                                <input type="checkbox" name="" id="">
                                <label for="">2020年</label>
                            </div>
                            <div class="search-item-box">
                                <input type="checkbox" name="" id="">
                                <label for="">2019年</label>
                            </div>
                        </div>
                        <p class="search-item-lead mt-2">合格者</p>
                        <div class="search-item-area">
                            <div class="search-item-box">
                                <input type="checkbox" name="" id="">
                                <label for="">現役生</label>
                            </div>
                            <div class="search-item-box">
                                <input type="checkbox" name="" id="">
                                <label for="">高卒生</label>
                            </div>
                        </div>
                    </div>
                    <div class="record-search-btn">
                        <a href="<?php echo home_url() ?>/" class="link-btn search">
                            <span>実績を検索する</span>
                        </a>
                    </div>
                </div>
                <div class="record-people">
                    <h3 class="record-people-lead">合格実績</h3>
                    <div class="record-people-item">                        
                        <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'post_type' => 'pass-rate',
                                'posts_per_page' => 12,
                            );
                            $custom_query = new WP_Query( $args );
                        ?>
                        <?php if( $custom_query->have_posts() ) : ?>                
                            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>"> 
                                    <div class="record-people-box">
                                        <figure class="record-people-img">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/image/record/record-people-img1.png" alt="">
                                        </figure>
                                        <p class="record-people-sm"><?php echo get_field('current_state'); ?></p>
                                        <p class="record-people-name"><?php echo get_field('pass_name'); ?></p>
                                        <p class="record-people-txt"><?php echo get_field('graduated_school'); ?><br><?php echo get_field('pass_school'); ?></p>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                        
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