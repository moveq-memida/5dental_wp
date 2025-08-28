<?php
/**
 * メインテンプレート - トップページ
 *
 * @package 5DENTAL
 */

get_header(); ?>

<?php if ( is_front_page() ) : ?>
    <!-- メインコンテンツ -->
    <main>
        <!-- ファーストビュー スライドショー -->
        <section class="fv-slideshow">
            <div class="swiper fv-swiper">
                <div class="swiper-wrapper">
                    <!-- スライド1 -->
                    <div class="swiper-slide">
                        <div class="fv-slide">
                            <div class="fv-slide__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv1-pc.webp" alt="歯をできるだけ削らない治療">
                            </div>
                            <div class="fv-slide__content">
                                <div class="fv-slide__container">
                                    <h1 class="fv-slide__title">
                                        <span class="fv-slide__title-small">歯をできるだけ削らない</span>
                                        <span class="fv-slide__title-large">審美歯科治療</span>
                                    </h1>
                                    <p class="fv-slide__description">
                                        自然歯をなるべく残した審美治療を心がけています。<br>
                                        当院が得意とするラミネートべニアは、低侵襲・短期間での治療が可能です。
                                    </p>
                                    <div class="fv-slide__buttons">
                                        <a href="<?php echo esc_url( home_url( '/appointment' ) ); ?>" class="fv-slide__button fv-slide__button--primary">
                                            24時間Web予約
                                        </a>
                                        <a href="<?php echo esc_url( home_url( '/laminate-veneer' ) ); ?>" class="fv-slide__button fv-slide__button--secondary">
                                            削らないラミネートべニア
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- スライド2 -->
                    <div class="swiper-slide">
                        <div class="fv-slide">
                            <div class="fv-slide__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv2-pc.webp" alt="高品質な環境と治療設備">
                            </div>
                            <div class="fv-slide__content">
                                <div class="fv-slide__container">
                                    <h1 class="fv-slide__title">
                                        <span class="fv-slide__title-small">高品質な環境と</span>
                                        <span class="fv-slide__title-large">最新治療設備</span>
                                    </h1>
                                    <p class="fv-slide__description">
                                        EPIOS殺菌水システムの導入により、清潔で安全な治療環境を整えています。<br>
                                        最新のデジタル技術を活用し、精密かつ効率的な治療を提供しています。
                                    </p>
                                    <div class="fv-slide__buttons">
                                        <a href="<?php echo esc_url( home_url( '/appointment' ) ); ?>" class="fv-slide__button fv-slide__button--primary">
                                            24時間Web予約
                                        </a>
                                        <a href="<?php echo esc_url( home_url( '/features' ) ); ?>" class="fv-slide__button fv-slide__button--secondary">
                                            当院の特徴
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- スライド3 -->
                    <div class="swiper-slide">
                        <div class="fv-slide">
                            <div class="fv-slide__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv3-pc.webp" alt="銀座駅出口直結のアクセスの良さ">
                            </div>
                            <div class="fv-slide__content">
                                <div class="fv-slide__container">
                                    <h1 class="fv-slide__title">
                                        <span class="fv-slide__title-small">銀座駅出口直結の</span>
                                        <span class="fv-slide__title-large">アクセスの良さ</span>
                                    </h1>
                                    <p class="fv-slide__description">
                                        当院は東京メトロ銀座駅直結、JR有楽町駅徒歩4分の好立地にあります。<br>
                                        この利便性から、都内外を問わず多くの患者様にご来院いただいています。
                                    </p>
                                    <div class="fv-slide__buttons">
                                        <a href="<?php echo esc_url( home_url( '/appointment' ) ); ?>" class="fv-slide__button fv-slide__button--primary">
                                            24時間Web予約
                                        </a>
                                        <a href="<?php echo esc_url( home_url( '/access' ) ); ?>" class="fv-slide__button fv-slide__button--secondary">
                                            アクセス
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ページネーション -->
                <div class="swiper-pagination"></div>
                
                <!-- ナビゲーションボタン -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- 当院の特徴セクション -->
        <section class="features">
            <div class="features__container">
                <!-- タイトル -->
                <div class="features__title">
                    <span class="features__title-en">Feature</span>
                    <h2 class="features__title-jp">当院の特徴</h2>
                </div>

                <!-- 特徴一覧 -->
                <div class="features__list">
                    <!-- 特徴1 -->
                    <div class="features__item">
                        <div class="features__item-number">01</div>
                        <div class="features__item-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature1.webp" alt="歯をできるだけ削らない治療" class="features__item-img">
                        </div>
                        <div class="features__item-content">
                            <div class="features__item-title">
                                <span class="features__item-title-large">歯</span>
                                <div class="features__item-title-text">
                                    <span>をできるだけ削らない、</span>
                                    <span>体の健康を優先した治療</span>
                                </div>
                            </div>
                            <p class="features__item-description">
                                自然歯をなるべく残した審美治療を心がけています。当院が得意とするラミネートべニアは、低侵襲・短期間での治療が可能で、多くの方にご好評いただいています。
                            </p>
                        </div>
                    </div>

                    <!-- 特徴2 -->
                    <div class="features__item">
                        <div class="features__item-number">02</div>
                        <div class="features__item-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature2.webp" alt="高品質な環境と治療設備" class="features__item-img">
                        </div>
                        <div class="features__item-content">
                            <div class="features__item-title">
                                <span class="features__item-title-large">高</span>
                                <div class="features__item-title-text">
                                    <span>品質な環境と、</span>
                                    <span>治療設備</span>
                                </div>
                            </div>
                            <p class="features__item-description">
                                EPIOS殺菌水システムの導入により、清潔で安全な治療環境を整えています。さらに、最新のデジタル技術を活用し、精密かつ効率的な治療を提供しています。
                            </p>
                            <a href="<?php echo esc_url( home_url( '/features/epios' ) ); ?>" class="features__item-link">
                                <span>EPIOS殺菌水システムのご紹介</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="矢印" class="features__item-link-icon">
                            </a>
                        </div>
                    </div>

                    <!-- 特徴3 -->
                    <div class="features__item">
                        <div class="features__item-number">03</div>
                        <div class="features__item-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature3.webp" alt="銀座駅出口直結のアクセスの良さ" class="features__item-img">
                        </div>
                        <div class="features__item-content">
                            <div class="features__item-title">
                                <span class="features__item-title-large">銀</span>
                                <div class="features__item-title-text">
                                    <span>座駅出口直結の、</span>
                                    <span>アクセスの良さ</span>
                                </div>
                            </div>
                            <p class="features__item-description">
                                当院は東京メトロ銀座駅直結、JR有楽町駅徒歩4分の好立地にあります。この利便性から、都内外を問わず多くの患者様にご来院いただています。
                            </p>
                            <a href="#" class="features__item-link">
                                <span>当院へのアクセス方法を確認</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="矢印" class="features__item-link-icon">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- メインボタン -->
                <a href="#" class="features__main-button">
                    <span>当院の特徴へ</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line-large.svg" alt="矢印" class="features__main-button-icon">
                </a>
            </div>
        </section>

        <!-- Instagramバナーセクション -->
        <section class="instagram-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-instagram.webp" alt="Instagram バナー" class="instagram-banner__img">
        </section>

        <!-- ラミネートベニアセクション -->
        <section class="laminate-veneer">
            <!-- 背景テキスト -->
            <div class="laminate-veneer__bg-text">Laminate</div>
            <div class="laminate-veneer__bg-veneer">veneer</div>
            
            <div class="laminate-veneer__container">
                <!-- ヘッダー -->
                <div class="laminate-veneer__header">
                    <h2 class="laminate-veneer__title">そのお口のお悩み、ラミネートべニアなどで解決できる可能性があります</h2>
                    
                    <div class="laminate-veneer__header-bottom">
                        <p class="laminate-veneer__subtitle">あなたのお口のお悩みをお聞かせください</p>
                        
                        <a href="<?php echo esc_url( home_url( '/laminate-veneer' ) ); ?>" class="laminate-veneer__top-button">
                            <span>削らないラミネートべニア</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line-white.svg" alt="arrow" class="laminate-veneer__top-button-icon">
                        </a>
                    </div>
                </div>

                <!-- コンテンツエリア -->
                <div class="laminate-veneer__content">
                    <!-- 問題一覧 -->
                    <div class="laminate-veneer__list">
                        <!-- テトラサイクリン歯 -->
                        <div class="laminate-veneer__item">
                            <div class="laminate-veneer__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trouble1.svg" alt="テトラサイクリン歯">
                            </div>
                            <div class="laminate-veneer__item-content">
                                <h3 class="laminate-veneer__item-title">テトラサイクリン歯</h3>
                                <p class="laminate-veneer__item-description">テトラサイクリン系抗生物質の影響で歯が変色している。</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/tetracycline' ) ); ?>" class="laminate-veneer__item-button">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                            </a>
                        </div>

                        <!-- すきっ歯/矮小歯 -->
                        <div class="laminate-veneer__item">
                            <div class="laminate-veneer__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trouble2.svg" alt="すきっ歯/矮小歯">
                            </div>
                            <div class="laminate-veneer__item-content">
                                <h3 class="laminate-veneer__item-title">すきっ歯/矮小歯</h3>
                                <p class="laminate-veneer__item-description">通常よりも歯が小さく、歯と歯の間に隙間ができている。</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/pulpectomy-discoloration' ) ); ?>" class="laminate-veneer__item-button">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                            </a>
                        </div>

                        <!-- 失活歯/変色歯 -->
                        <div class="laminate-veneer__item">
                            <div class="laminate-veneer__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trouble3.svg" alt="失活歯/変色歯">
                            </div>
                            <div class="laminate-veneer__item-content">
                                <h3 class="laminate-veneer__item-title">失活歯/変色歯</h3>
                                <p class="laminate-veneer__item-description">神経を失った歯などが黄ばんだり、黒ずんでいる。</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/pulpectomy-discoloration02' ) ); ?>" class="laminate-veneer__item-button">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                            </a>
                        </div>

                        <!-- 歯を真っ白にする -->
                        <div class="laminate-veneer__item">
                            <div class="laminate-veneer__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trouble4.svg" alt="歯を真っ白にする">
                            </div>
                            <div class="laminate-veneer__item-content">
                                <h3 class="laminate-veneer__item-title">歯を真っ白にする</h3>
                                <p class="laminate-veneer__item-description">ホワイトニングよりも白くて緺麗な歯にしたい。</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/white-teeth' ) ); ?>" class="laminate-veneer__item-button">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                            </a>
                        </div>

                        <!-- 詰め物の変色 -->
                        <div class="laminate-veneer__item">
                            <div class="laminate-veneer__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trouble5.svg" alt="詰め物の変色">
                            </div>
                            <div class="laminate-veneer__item-content">
                                <h3 class="laminate-veneer__item-title">詰め物の変色</h3>
                                <p class="laminate-veneer__item-description">前歯の詰め物が変色し、本来の歯との色の差が気になる。</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/post-crown' ) ); ?>" class="laminate-veneer__item-button">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                            </a>
                        </div>

                        <!-- 差し歯の色 -->
                        <div class="laminate-veneer__item">
                            <div class="laminate-veneer__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trouble6.svg" alt="差し歯の色">
                            </div>
                            <div class="laminate-veneer__item-content">
                                <h3 class="laminate-veneer__item-title">差し歯の色</h3>
                                <p class="laminate-veneer__item-description">できるだけ歯を削らず、歯の色を揃えたい。</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/frontteeth-filling' ) ); ?>" class="laminate-veneer__item-button">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                            </a>
                        </div>

                        <!-- 歯並びが気になる -->
                        <div class="laminate-veneer__item">
                            <div class="laminate-veneer__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trouble7.svg" alt="歯並びが気になる">
                            </div>
                            <div class="laminate-veneer__item-content">
                                <h3 class="laminate-veneer__item-title">歯並びが気になる</h3>
                                <p class="laminate-veneer__item-description">前歯の歯並びに異常があり、審美的に気になっている。</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/projecting-teeth02' ) ); ?>" class="laminate-veneer__item-button">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                            </a>
                        </div>

                        <!-- 出っ歯/八重歯 -->
                        <div class="laminate-veneer__item">
                            <div class="laminate-veneer__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trouble8.svg" alt="出っ歯/八重歯">
                            </div>
                            <div class="laminate-veneer__item-content">
                                <h3 class="laminate-veneer__item-title">出っ歯/八重歯</h3>
                                <p class="laminate-veneer__item-description">歯列矯正×セラミックなどの治療を提案いたします。</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/projecting-teeth' ) ); ?>" class="laminate-veneer__item-button">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                            </a>
                        </div>

                        <!-- 最後の行 -->
                        <div class="laminate-veneer__last-row">
                            <!-- 歯を大きくしたい -->
                            <div class="laminate-veneer__item">
                                <div class="laminate-veneer__item-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trouble9.svg" alt="歯を大きくしたい">
                                </div>
                                <div class="laminate-veneer__item-content">
                                    <h3 class="laminate-veneer__item-title">歯を大きくしたい</h3>
                                    <p class="laminate-veneer__item-description">歯を大きくして、笑った時に華やかな口元になりたい</p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/tooth-resize' ) ); ?>" class="laminate-veneer__item-button">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                                </a>
                            </div>

                            <!-- メインボタン -->
                            <a href="<?php echo esc_url( home_url( '/laminate-veneer' ) ); ?>" class="laminate-veneer__main-button">
                                <span>ラミネートべニア特設ページへ</span>
                                <div class="laminate-veneer__main-button-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line-large.svg" alt="詳細">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- バナーセクション -->
        <section class="banners">
            <div class="banners__container">
                <div class="banners__item">
                    <a href="<?php echo esc_url( home_url( '/gum-shaping' ) ); ?>" class="banners__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-gummy.webp" alt="ガミースマイルバナー" class="banners__img">
                    </a>
                </div>
                <div class="banners__item">
                    <a href="<?php echo esc_url( home_url( '/laminate-veneer' ) ); ?>" class="banners__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-lv.webp" alt="ラミネートべニアバナー" class="banners__img">
                    </a>
                </div>
            </div>
        </section>

        <!-- 診療メニューセクション -->
        <section class="services">
            <div class="services__container">
                <!-- タイトル -->
                <div class="services__title">
                    <span class="services__title-en">Services</span>
                    <h2 class="services__title-jp">当院の診療メニュー</h2>
                </div>

                <!-- ナビゲーションボタン -->
                <div class="services__nav">
                    <button class="services__nav-button services__nav-button--active">
                        <span class="services__nav-icon">1</span>
                        削らないラミネートベニア
                    </button>
                    <button class="services__nav-button">
                        <span class="services__nav-icon">2</span>
                        審美歯科
                    </button>
                    <button class="services__nav-button">
                        <span class="services__nav-icon">3</span>
                        その他メニュー
                    </button>
                </div>

                <!-- メニューセクション -->
                <div class="services__sections">
                    <!-- 削らないラミネートベニア -->
                    <div class="services__section services__section--laminate">
                        <div class="services__section-content">
                            <div class="services__section-text">
                                <div class="services__section-number">01</div>
                                <h3 class="services__section-title">削らないラミネートベニア</h3>
                                <p class="services__section-description">
                                    ラミネートベニアは、歯の表面に薄いセラミックの板を貼り付ける審美的治療です。付け爪のようなイメージで、歯の形や色を改善できます。審美歯科を掲げる歯科医院でも施術事例の少ない治療法です。当院では施術症例数850件以上・5000本を超える症例への対応実績があります。従来の施術よりもできるだけ天然歯を削らない、かつ健康的な方法で、審美的な悩みの解決を実現できます。
                                </p>
                                <a href="<?php echo esc_url( home_url( '/laminate-veneer' ) ); ?>" class="services__section-button">
                                    <span>削らないラミネートべニア特設ページへ</span>
                                    <div class="services__section-button-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line-large.svg" alt="詳細">
                                    </div>
                                </a>
                            </div>
                            <div class="services__section-banners">
                                <div class="services__banner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/lam1-1.webp" alt="削らないラミネートベニア">
                                </div>
                                <div class="services__banner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/lam1-2.webp" alt="削らないラミネートベニア">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 審美歯科 -->
                    <div class="services__section services__section--regular">
                        <div class="services__section-content">
                            <div class="services__section-text">
                                <div class="services__section-number">02</div>
                                <h3 class="services__section-title">審美歯科</h3>
                                <p class="services__section-description">
                                    歯列を根本から治すマウスピース歯列矯正や、黄ばみや黒ずみを改善するホワイトニング、歯肉の見え方の改善など、歯の形や色・歯以外も含めたさまざまな審美治療を得意としています。
                                </p>
                                <a href="<?php echo esc_url( home_url( '/services/aesthetic' ) ); ?>" class="services__section-button">
                                    <span>審美歯科特設ページへ</span>
                                    <div class="services__section-button-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line-large.svg" alt="詳細">
                                    </div>
                                </a>
                            </div>
                            <div class="services__section-menus">
                                <a href="<?php echo esc_url( home_url( '/orthodontics' ) ); ?>" class="services__menu-item">
                                    <div class="services__menu-item-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/menu1.webp');"></div>
                                    <div class="services__menu-item-content">
                                        <div>
                                            <h4 class="services__menu-item-title">3Dデジタルマウスピース<br>矯正(審美矯正)</h4>
                                            <p class="services__menu-item-subtitle">Orthodontics</p>
                                        </div>
                                        <div class="services__menu-item-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url( '/ceramic' ) ); ?>" class="services__menu-item">
                                    <div class="services__menu-item-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/menu2.webp');"></div>
                                    <div class="services__menu-item-content">
                                        <div>
                                            <h4 class="services__menu-item-title">オールセラミック治療/<br>ジルコニア治療</h4>
                                            <p class="services__menu-item-subtitle">All-ceramic / Zirconia</p>
                                        </div>
                                        <div class="services__menu-item-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url( '/whitening' ) ); ?>" class="services__menu-item">
                                    <div class="services__menu-item-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/menu3.webp');"></div>
                                    <div class="services__menu-item-content">
                                        <div>
                                            <h4 class="services__menu-item-title">ホワイトニング</h4>
                                            <p class="services__menu-item-subtitle">Whitening</p>
                                        </div>
                                        <div class="services__menu-item-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url( '/gum-shaping' ) ); ?>" class="services__menu-item">
                                    <div class="services__menu-item-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/menu4.webp');"></div>
                                    <div class="services__menu-item-content">
                                        <div>
                                            <h4 class="services__menu-item-title">歯肉整形/<br>ガミースマイル改善</h4>
                                            <p class="services__menu-item-subtitle">Gingival contouring /<br>Gummy smile</p>
                                        </div>
                                        <div class="services__menu-item-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- その他メニュー -->
                    <div class="services__section services__section--regular">
                        <div class="services__section-content">
                            <div class="services__section-text">
                                <div class="services__section-number">03</div>
                                <h3 class="services__section-title">その他メニュー</h3>
                                <p class="services__section-description">
                                    審美歯科の治療の他、インプラントや入れ歯のような機能的回復を目指す治療や一般歯科なども行っています。加えて、特別な資格を要するリップアートメイク@デンタルも提供しています。従来の施術であるタトゥー式と比べ、痛みや施術時間・色の持続性などに優れています。
                                </p>
                                <a href="<?php echo esc_url( home_url( '/services/general' ) ); ?>" class="services__section-button">
                                    <span>その他メニュー特設ページへ</span>
                                    <div class="services__section-button-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line-large.svg" alt="詳細">
                                    </div>
                                </a>
                            </div>
                            <div class="services__section-menus">
                                <a href="<?php echo esc_url( home_url( '/implant' ) ); ?>" class="services__menu-item">
                                    <div class="services__menu-item-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/menu5.webp');"></div>
                                    <div class="services__menu-item-content">
                                        <div>
                                            <h4 class="services__menu-item-title">インプラント</h4>
                                            <p class="services__menu-item-subtitle">Implant</p>
                                        </div>
                                        <div class="services__menu-item-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url( '/denture' ) ); ?>" class="services__menu-item">
                                    <div class="services__menu-item-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/menu6.webp');"></div>
                                    <div class="services__menu-item-content">
                                        <div>
                                            <h4 class="services__menu-item-title">入れ歯 / ブリッジ</h4>
                                            <p class="services__menu-item-subtitle">Dentures /Bridge</p>
                                        </div>
                                        <div class="services__menu-item-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url( '/services/general' ) ); ?>" class="services__menu-item">
                                    <div class="services__menu-item-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/menu7.webp');"></div>
                                    <div class="services__menu-item-content">
                                        <div>
                                            <h4 class="services__menu-item-title">総合歯科</h4>
                                            <p class="services__menu-item-subtitle">General dentistry</p>
                                        </div>
                                        <div class="services__menu-item-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url( home_url( '/services/lip-artmake' ) ); ?>" class="services__menu-item">
                                    <div class="services__menu-item-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/menu8.webp');"></div>
                                    <div class="services__menu-item-content">
                                        <div>
                                            <h4 class="services__menu-item-title">リップアートメイク<br>@DENTAL</h4>
                                            <p class="services__menu-item-subtitle">Lip art make @DENTAL</p>
                                        </div>
                                        <div class="services__menu-item-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="詳細">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- メインボタン -->
                <a href="<?php echo esc_url( home_url( '/menu' ) ); ?>" class="services__main-button">
                    <span>診療メニュー一覧へ</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line-large.svg" alt="矢印" class="services__main-button-icon">
                </a>
            </div>
        </section>

        <!-- インフォメーションセクション -->
        <section class="information">
            <div class="information__container">
                <!-- マップエリア -->
                <div class="information__map-area">
                    <iframe 
                        class="information__map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.0950875894746!2d139.76394491545835!3d35.67097003933737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be708a4e4a5%3A0x3e24d2e1bb1b5ae1!2z44CSMTAzLTAwMDEg5p2x5Lqs6YO95Lit5aSu5Yy66Iux6Imz77yV5LiB55uu77yX4oiS77yR!5e0!3m2!1sja!2sjp!4v1699000000000!5m2!1sja!2sjp"
                        width="600" 
                        height="450" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    
                    <a href="https://maps.google.com/?q=東京都中央区銀座5-7-1青藤GINZA5 2F" target="_blank" class="information__map-link">
                        <span>当院へのアクセス方法を確認</span>
                        <div class="information__map-link-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="12" fill="#ffffff"/>
                                <path d="M9 9L15 15M15 15V9M15 15H9" stroke="#787B83" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </a>
                </div>

                <!-- 情報エリア -->
                <div class="information__info-area">
                    <!-- クリニック情報 -->
                    <div class="information__clinic">
                        <p class="information__clinic-type">医療法人社団fever</p>
                        <h2 class="information__clinic-name">5DENTAL東京銀座</h2>
                        
                        <div class="information__address">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-filled.svg" alt="住所" class="information__address-icon">
                            <p class="information__address-text">
                                〒104-0061 東京都中央区銀座5-7-1青藤 GINZA5 2F
                            </p>
                        </div>
                        
                        <div class="information__access">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/train-filled.svg" alt="電車アクセス" class="information__access-icon">
                            <p class="information__access-text">
                                東京メトロ銀座駅 C-1出口直結<br>
                                東京メトロ日比谷駅 A1出口より徒歩2分<br>
                                JR有楽町駅 銀座口より徒歩4分
                            </p>
                        </div>
                    </div>

                    <!-- 診療時間 -->
                    <div class="information__hours-section">
                        <table class="information__hours-table">
                            <thead class="information__hours-header">
                                <tr>
                                    <th>診療時間</th>
                                    <th>月</th>
                                    <th>火</th>
                                    <th>水</th>
                                    <th>木</th>
                                    <th>金</th>
                                    <th>土</th>
                                    <th>日/祝</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="information__hours-row">
                                    <td>10:00 ～ 14:00</td>
                                    <td><span class="information__hours-circle"></span></td>
                                    <td><span class="information__hours-circle"></span></td>
                                    <td><span class="information__hours-circle"></span></td>
                                    <td><span class="information__hours-circle"></span></td>
                                    <td><span class="information__hours-circle"></span></td>
                                    <td>−</td>
                                    <td class="information__hours-close">×</td>
                                </tr>
                                <tr class="information__hours-row">
                                    <td>15:00 ～ 20:00</td>
                                    <td><span class="information__hours-circle"></span></td>
                                    <td><span class="information__hours-circle"></span></td>
                                    <td><span class="information__hours-circle"></span></td>
                                    <td><span class="information__hours-circle"></span></td>
                                    <td><span class="information__hours-circle"></span></td>
                                    <td>−</td>
                                    <td class="information__hours-close">×</td>
                                </tr>
                                <tr class="information__hours-row">
                                    <td>10:00 ～ 14:30</td>
                                    <td>−</td>
                                    <td>−</td>
                                    <td>−</td>
                                    <td>−</td>
                                    <td>−</td>
                                    <td><span class="information__hours-circle"></span></td>
                                    <td class="information__hours-close">×</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="information__notes">
                            <p class="information__note">・医院外診療や長時間診療を予約制にて行っています。必ず事前にお予約をして来院ください。</p>
                            <p class="information__note">・予約状況などにより診療時間や診療日が異なる場合があります。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php else : ?>
    <!-- ブログ記事一覧など -->
    <main class="site-main">
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <div class="posts-grid">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div><?php the_excerpt(); ?></div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p>記事が見つかりませんでした。</p>
            <?php endif; ?>
        </div>
    </main>
<?php endif; ?>

<?php get_footer(); ?>