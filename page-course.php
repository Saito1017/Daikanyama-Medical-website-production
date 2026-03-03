<?php
	get_header();
?>

    <main id="main">

        <section class="page-index" style="background-image: url(./assets/image/course/page-index.png);">
            <div class="container">
                <div class="title">
                    <h2 class="lead">コース案内</h2>
                </div>
            </div>
        </section>

        <section class="page-course-section">
            <div class="container">
                <div class="section-index-wrapper">
                    <ul class="course-index-list">
                        <li>
                            <a href="#course-01" class="index-item scrollto">
                                <div class="title">
                                    <p>1年で医学部合格を<br class="pc-only">目指す基礎〜実戦の総合コース</p>
                                    <h3>高卒生コース</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#course-02" class="index-item scrollto">
                                <div class="title">
                                    <p>学校と両立しながら<br class="pc-only">医学部レベルへ引き上げるコース</p>
                                    <h3>現役生コース</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#course-03" class="index-item scrollto">
                                <div class="title">
                                    <p>推薦・二次・後期に向けた<br class="pc-only">短期集中プログラム</p>
                                    <h3>特別対策講座</h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="course-01" class="section-course-wrapper">
                    <div class="section-intro">
                        <div class="wrap">
                            <div class="title">
                                <p>1年で医学部合格を目指す基礎〜実戦の総合コース</p>
                                <h3>高卒生コース</h3>
                            </div>
                        </div>
                        <picture class="back">
                            <source media="(min-width:769px)" srcset="./assets/image/course/course01-bg.png">
                            <source media="(max-width:768px)" srcset="./assets/image/course/course01-bg.png">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/course/course01-bg.png" alt="高卒生コース" loading="lazy">
                        </picture>
                    </div>
                    <div class="content-in">
                        <ul class="section-grid">
                            <li>
                                <div class="section-title">
                                    <h2 class="jp">特徴</h2>
                                    <p class="en">Features</p>
                                </div>
                                <div class="section-content">
                                    <ul class="text-list">
                                        <li>医学部合格を目指す高卒生向けの年間総合コース</li>
                                        <li>基礎の抜けを徹底的に補強し、全科目の得点力を体系的に引き上げる</li>
                                        <li>毎週の到達度チェックで「できていない部分」を確実に改善</li>
                                        <li>少人数制・個別対応で、勉強計画も学習管理も講師が伴走</li>
                                    </ul>
                                </div>        
                            </li>
                            <li>
                                <div class="section-title">
                                    <h2 class="jp">メリット</h2>
                                    <p class="en">Merit</p>
                                </div>
                                <div class="section-content">
                                    <ul class="text-list">
                                        <li>偏差値・模試データに基づいた個別カリキュラム</li>
                                        <li>生活習慣・学習量の管理まで含めた“医学部仕様”の学習環境</li>
                                        <li>一次〜二次試験（面接・小論文）まで一貫指導</li>
                                        <li>医学部受験に特化したプロ講師陣による指導体制</li>
                                    </ul>
                                </div>        
                            </li>
                        </ul>
                        <div class="section-course">
                            <div class="course-index">
                                <a href="<?php echo home_url() ?>/" class="index-btn">
                                    <span>コース一覧を見る</span>
                                </a>
                            </div>
                            <ul class="course-list">
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type mz">Mz</strong>
                                            <span class="txt">私立・国立医学部【特待】コース</span>
                                        </h4>
                                        <div class="desc">問題処理のスピードと知識精度を極限まで高め、最難関医学部合格を狙うトップクラス</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type b">B</strong>
                                            <span class="txt">私立医学部基礎貫徹ベイシックコース</span>
                                        </h4>
                                        <div class="desc">中学レベルから再構築し、偏差値30台から1年で医学部合格を狙うクラス</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type m">M</strong>
                                            <span class="txt">私立医学部選抜マスターコース</span>
                                        </h4>
                                        <div class="desc">圧倒的な演習量を積み重ね、「量」で「質」を凌駕し、難関医学部合格を掴み取る。</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type d">D</strong>
                                            <span class="txt">私立歯学部進学コース</span>
                                        </h4>
                                        <div class="desc">歯学部入試に特化したカリキュラムで、傾向分析と対策を徹底。確実な合格へ導く</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type a">A</strong>
                                            <span class="txt">私立医学部基礎貫徹アドバンスコース</span>
                                        </h4>
                                        <div class="desc">基礎から徹底的に積み上げ、偏差値40台からの医学部合格を実現する実践クラス</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type p">P</strong>
                                            <span class="txt">完全1対1マンツーマンコース 代官山PERSONAL</span>
                                        </h4>
                                        <div class="desc">完全1対1の個別指導。授業・演習・質問すべてを専用設計し、医学部合格まで最短で導く。</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="course-02" class="section-course-wrapper">
                    <div class="section-intro">
                        <div class="wrap">
                            <div class="title">
                                <p>学校と両立しながら医学部レベルへ引き上げるコース</p>
                                <h3>現役生コース</h3>
                            </div>
                        </div>
                        <picture class="back">
                            <source media="(min-width:769px)" srcset="./assets/image/course/course02-bg.png">
                            <source media="(max-width:768px)" srcset="./assets/image/course/course02-bg.png">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/course/course02-bg.png" alt="現役生コース" loading="lazy">
                        </picture>
                    </div>
                    <div class="content-in">
                        <ul class="section-grid">
                            <li>
                                <div class="section-title">
                                    <h2 class="jp">特徴</h2>
                                    <p class="en">Features</p>
                                </div>
                                <div class="section-content">
                                    <ul class="text-list">
                                        <li>学校と両立しながら医学部レベルの学力へ到達するための現役生専門カリキュラム</li>
                                        <li>学年ごとに必要な科目・授業進度・学習量を最適化</li>
                                        <li>定期テスト・模試・志望校対策を一体化した指導</li>
                                        <li>部活や学校行事にも対応した時間割・個別調整</li>
                                    </ul>
                                </div>        
                            </li>
                            <li>
                                <div class="section-title">
                                    <h2 class="jp">メリット</h2>
                                    <p class="en">Merit</p>
                                </div>
                                <div class="section-content">
                                    <ul class="text-list">
                                        <li>学年別の「今やるべきこと」が明確になる</li>
                                        <li>現役で医学部を目指すための最短ルートを設計</li>
                                        <li>推薦対策（面接・小論文・調査書対策）も対応</li>
                                        <li>苦手科目だけのスポット補強も可能</li>
                                    </ul>
                                </div>        
                            </li>
                        </ul>
                        <div class="section-course">
                            <div class="course-index">
                                <a href="<?php echo home_url() ?>/" class="index-btn">
                                    <span>コース一覧を見る</span>
                                </a>
                            </div>
                            <ul class="course-list">
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type mz">T</strong>
                                            <span class="txt">高3生東大・国公立医学部クラス</span>
                                        </h4>
                                        <div class="desc">東大・千葉大・横浜市立大など首都圏国公立医学部を現役で目指す特別選抜クラス</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type b">K2</strong>
                                            <span class="txt">高2生</span>
                                        </h4>
                                        <div class="desc">弱点を「武器」に変える一年。医学部合格に必要な思考力を、この時期に完成させる</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type m">S</strong>
                                            <span class="txt">高3生私立医学部選抜クラス</span>
                                        </h4>
                                        <div class="desc">慈恵・順天堂・日医など私立トップレベル医学部を現役で突破するための実践クラス</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type d">K1</strong>
                                            <span class="txt">高1生</span>
                                        </h4>
                                        <div class="desc">夢を「目標」に変える一年。医学部合格への第一歩を、ここから確実に</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type a">B</strong>
                                            <span class="txt">高3生私立医学部基礎徹底クラス</span>
                                        </h4>
                                        <div class="desc">基礎力を磨き上げ、応用力へ昇華。何が何でも医学部現役合格を目指す本気のクラス</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type p">Jr</strong>
                                            <span class="txt">中学生 代官山PERSONAL</span>
                                        </h4>
                                        <div class="desc">学ぶ土台を医学部受験レベルへ。中学の学びを徹底し、将来の医学部合格への軌道を描く</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="course-03" class="section-course-wrapper">
                    <div class="section-intro">
                        <div class="wrap">
                            <div class="title">
                                <p>推薦・二次・後期に向けた短期集中プログラム</p>
                                <h3>特別対策講座</h3>
                            </div>
                        </div>
                        <picture class="back">
                            <source media="(min-width:769px)" srcset="./assets/image/course/course03-bg.png">
                            <source media="(max-width:768px)" srcset="./assets/image/course/course03-bg.png">
                            <img src="<?php echo get_template_directory_uri()?>/assets/image/course/course03-bg.png" alt="特別対策講座" loading="lazy">
                        </picture>
                    </div>
                    <div class="content-in">
                        <ul class="section-grid">
                            <li>
                                <div class="section-title">
                                    <h2 class="jp">特徴</h2>
                                    <p class="en">Features</p>
                                </div>
                                <div class="section-content">
                                    <ul class="text-list">
                                        <li>短期間で合格に必要な得点・表現力を高める集中講座</li>
                                        <li>推薦入試：面接・小論文・志望理由書を徹底指導</li>
                                        <li>一般後期：短期で結果を出すための過去問分析特化</li>
                                        <li>二次試験：医系面接・MMI・小論文・ディスカッション対策</li>
                                    </ul>
                                </div>        
                            </li>
                            <li>
                                <div class="section-title">
                                    <h2 class="jp">メリット</h2>
                                    <p class="en">Merit</p>
                                </div>
                                <div class="section-content">
                                    <ul class="text-list">
                                        <li>「あと一歩」を合格ラインに押し上げる特化型プログラム</li>
                                        <li>医学部出身講師または医系専門講師による指導</li>
                                        <li>個々の弱点に合わせた個別演習</li>
                                        <li>短期だが効果が可視化しやすい</li>
                                    </ul>
                                </div>        
                            </li>
                        </ul>
                        <div class="section-course">
                            <div class="course-index">
                                <a href="<?php echo home_url() ?>/" class="index-btn">
                                    <span>コース一覧を見る</span>
                                </a>
                            </div>
                            <ul class="course-list">
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type mz">推<sub>薦</sub></strong>
                                            <span class="txt">推薦対策授業</span>
                                        </h4>
                                        <div class="desc">大学別の評価基準に合わせ、受験生の経験と思考を最適な形へ導き、合格へと確実につなげるための推薦入試対策講座です。</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type b">二<sub>次</sub></strong>
                                            <span class="txt">2次試験対策授業</span>
                                        </h4>
                                        <div class="desc">大学別の面接・小論文に合わせ、受験生の思考と表現力を本番仕様に丁寧に仕上げ、実力を最大限発揮させる二次試験対策講座です。</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url() ?>/" class="course-item">
                                        <h4 class="title">
                                            <strong class="type a">後<sub>期</sub></strong>
                                            <span class="txt">後期試験対策授業</span>
                                        </h4>
                                        <div class="desc">大学別の医学部後期入試に特化した大学別完全予想問題を使用し、少人数制で徹底指導で合格へと導くための後期試験対策講座です。</div>
                                    </a>
                                </li>
                            </ul>
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