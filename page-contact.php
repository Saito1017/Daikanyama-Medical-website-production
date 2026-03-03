<?php
	get_header();
?>

    <main id="main">

        <section class="page-index" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/image/contact/page-index.png);">
            <div class="container">
                <div class="title">
                    <h2 class="lead">お問い合わせ</h2>
                </div>
            </div>
        </section>

        <section class="page-contact">
            <div class="container">
                <div class="contact-wrap">
                    <p class="contact-wrap-txt">お問い合わせ内容を選択いただくことで、状況に合わせたご案内が可能になります。該当する項目にチェックのうえ、下記フォームへご入力ください。</p>
                    <div class="contact-search">
                        <div class="contact-search-box">
                            <input type="checkbox" name="" id="">
                            <label for="">資料請求</label>
                        </div>
                        <div class="contact-search-box">
                            <input type="checkbox" name="" id="">
                            <label for="">無料受験相談</label>
                        </div>
                        <div class="contact-search-box">
                            <input type="checkbox" name="" id="">
                            <label for="">無料体験</label>
                        </div>
                        <div class="contact-search-box">
                            <input type="checkbox" name="" id="">
                            <label for="">寮見学</label>
                        </div>
                        <div class="contact-search-box">
                            <input type="checkbox" name="" id="">
                            <label for="">その他</label>
                        </div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="row">
                        <p class="lead">氏名<span class="need">必須</span></p>
                        <input type="text" name="" id="" placeholder="例）金丸秀夫">
                    </div>
                    <div class="row">
                        <p class="lead">フリガナ<span class="need">必須</span></p>
                        <input type="text" name="" id="" placeholder="例）がねまる　ひでお">
                    </div>
                    <div class="row">
                        <p class="lead">電話番号<span class="need">必須</span></p>
                        <input type="number" name="" id="" placeholder="0123456789">
                    </div>
                    <div class="row">
                        <p class="lead">メールアドレス<span class="need">必須</span></p>
                        <input type="email" name="" id="" placeholder="example@mail.com">
                    </div>
                    <div class="row">
                        <p class="lead">続柄<span class="need">必須</span></p>
                        <div class="row-check">
                            <div class="row-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="">本人</label>
                            </div>
                            <div class="row-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="">保護者</label>
                            </div>
                            <div class="row-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="">その他</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p class="lead">郵便番号<span class="need">必須</span></p>
                        <input type="number" name="" id="" placeholder="123-4567">
                    </div>
                    <div class="row">
                        <p class="lead">住所<span class="need">必須</span></p>
                        <input type="text" name="" id="" placeholder="東京都港区新橋1丁目11-3">
                    </div>
                    <div class="row">
                        <h3 class="row_ttl">生徒情報</h3>
                        <p class="lead">学年<span class="need">必須</span></p>
                        <select name="" id="">
                            <option value="">中1</option>
                            <option value="">中2</option>
                            <option value="">中3</option>
                            <option value="">中4</option>
                        </select>
                    </div>
                    <div class="row">
                        <p class="lead">既卒<span class="need">必須</span></p>
                        <select name="" id="">
                            <option value="">2025</option>
                            <option value="">2024</option>
                            <option value="">2023</option>
                            <option value="">2022</option>
                        </select>
                    </div>
                    <div class="row">
                        <p class="lead">在籍/出身高校<span class="need">必須</span></p>
                        <input type="text" name="" id="" placeholder="">
                    </div>
                    <div class="row">
                        <p class="lead">塾名・予備校名</p>
                        <input type="text" name="" id="" placeholder="">
                    </div>
                    <div class="row">
                        <p class="lead">志望校</p>
                        <input type="text" name="" id="" placeholder="">
                    </div>
                    <div class="row">
                        <h3 class="row_ttl">無料受験相談・無料体験・寮見学の希望日</h3>
                        <p class="lead">第一希望<span class="need">必須</span></p>
                        <input type="date" name="" id="">
                    </div>
                    <div class="row">
                        <p class="lead">第二希望<span class="need">必須</span></p>
                        <input type="date" name="" id="">
                    </div>
                    <div class="row">
                        <p class="lead">第三希望<span class="need">必須</span></p>
                        <input type="date" name="" id="">
                    </div>
                    <div class="row">
                        <h3 class="row_ttl">ご相談内容</h3>
                        <p class="lead">自由記述</p>
                        <textarea name="" id="" rows="8"></textarea>
                    </div>
                    <div class="row">
                        <h3 class="row_ttl">友人/知人の紹介</h3>
                        <p class="lead">紹介者名</p>
                        <input type="text" name="" id="" placeholder="">
                    </div>
                    <div class="row">
                        <p class="lead">紹介者との関係</p>
                        <div class="row-check">
                            <div class="row-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="">兄弟</label>
                            </div>
                            <div class="row-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="">親族</label>
                            </div>
                            <div class="row-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="">友人</label>
                            </div>
                            <div class="row-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="">保護者友人</label>
                            </div>
                            <div class="row-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="">その他</label>
                            </div>
                        </div>
                    </div>
                    <div class="contact-privacy">
                        <p class="contact-privacy-txt">ご記入いただいた個人情報は、<a href="<?php echo home_url() ?>/privacy">プライバシーポリシー</a>に従って取り扱います。</p>
                        <div class="row-check-box">
                            <input type="checkbox" name="" id="">
                            <label for="">プライバシーポリシーに同意する</label>
                        </div>
                    </div>
                    <div class="contact-item-btn">
                        <a href="<?php echo home_url() ?>/" class="link-btn">
                            <span>送信する</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="common-banner-section">
            <div class="container">
                <div class="section-wrapper">
                    <ul class="banner-list">
                        <li>
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