<?php
	get_header();
?>

    <main id="main">

        <section class="page-index" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/image/entrance/page-index.png);">
            <div class="container">
                <div class="title">
                    <h2 class="lead">医学部入試ガイダンス</h2>
                </div>
            </div>
        </section>

        <section class="page-entrance-section">
            <div class="container">
                <div class="section-entrance-wrapper">
                    <div class="section-desc">
                        <p>代官山MEDICALでは説明会・個別相談会・講演イベントを開催しています。<br>医学部受験の最新情報や勉強へのモチベーションを上げる絶好の機会です。</p>
                    </div>
                    <div class="section-intro">
                        <div class="intro-lead">
                            <p>医学部ガイダンス開催</p>
                            <h3>大学とつながる、未来への対話</h3>
                        </div>
                        <div class="intro-desc">代官山MEDICALでは、毎年、医学部の教授や入試広報担当の方々を招いた「医学部ガイダンス」を実施しています。<br>オープンキャンパスに参加する間も惜しんで勉強に専念する代官山生向けに、大学の先生方に校舎へお越しいただき、<br>「逆オープンキャンパス」を実施しています。<br>入試に向けた具体的な対策や、二次面接でよく問われる内容など、普段は聞くことのできない実践的な話を直接伺うことができます。<br>男女比や現浪比、学生生活の実態といった細かな情報にも触れられ、生徒にとってはもちろん、保護者や現役生にも人気のイベントとして、毎回満員御礼となっています。<br>こうした大学との連携が実現しているのは、代官山MEDICALが長年にわたり確かな合格実績と信頼関係を築いてきたからです。<br>大学側から見ても、生徒を安心して送り出せる予備校として評価されています。</div>
                    </div>
                    <div class="section-university">
                        <h4 class="lead reset">これまでにご来校いただいた大学</h4>
                        <div class="item">
                            <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'post_type' => 'guidance',
                                    'posts_per_page' => 50,
                                );
                                $custom_query = new WP_Query( $args );
                            ?>
                            <?php if( $custom_query->have_posts() ) : ?>                
                                <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                    <div class="box">
                                        <div class="area">
                                            <p class="area_lead"><?php echo get_field('guidance_category'); ?></p>
                                            <p class="area_ttl"><?php echo get_field('guidance_title'); ?></p>
                                            <p class="area_txt">開催日：<?php echo get_field('start_date'); ?></p>
                                            <p class="area_txt">時　間： <?php echo get_field('start_time'); ?></p>
                                            <p class="area_txt">会　場：<?php echo get_field('meeting_area'); ?></p>
                                            <div class="area_btn">
                                                <a href="<?php the_permalink(); ?>" class="link-btn">
                                                    <span>詳しく見る</span>
                                                </a>
                                            </div>
                                        </div>
                                        <figure class="box_img">
                                            <img src="<?php echo get_field('guidance_img'); ?>" alt="">
                                        </figure>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
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