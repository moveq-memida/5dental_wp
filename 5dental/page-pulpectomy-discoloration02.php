<?php
/**
 * Template Name: 失活歯/変色歯
 * Description: 失活歯/変色歯のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "Discolored teeth" -->
            <div class="implant-fv__bg-text">Discolored teeth</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "失活歯/変色歯" -->
                <h1 class="implant-fv__title">失活歯/変色歯</h1>
                
                <!-- パンくずリスト -->
                <nav class="implant-fv__breadcrumb">
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<div class="breadcrumb">','</div>' );
                    } else { ?>
                        <ul class="breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb__link">
                                    <span class="breadcrumb__text">HOME</span>
                                </a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--current">
                                <span class="breadcrumb__text">失活歯/変色歯</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <!-- メインコンテンツセクション -->
    <section class="implant-content">
        <div class="implant-content__container">
            <!-- メインコンテンツエリア -->
            <main class="implant-content__main">       
                <!-- 失活歯/変色歯セクション -->
                <div class="pulpectomy-section">
                    <!-- メインタイトル -->
                    <div class="pulpectomy-section__main-title">
                        <h2 class="pulpectomy-section__title">失活歯/変色歯</h2>
                        <div class="pulpectomy-section__title-line"></div>
                    </div>
                    
                    <!-- サブセクション -->
                    <div class="pulpectomy-subsection">
                        <h3 class="h3-gray-bg">失活歯/変色歯について</h3>
                        
                        <div class="pulpectomy-subsection__content">
                            <div class="pulpectomy-subsection__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/trouble3.svg" alt="失活歯/変色歯のイラスト">
                            </div>
                            
                            <div class="pulpectomy-subsection__text">
                                <p>CR(コンポジットレジン)が古くなった歯や失活歯（神経のない歯）は歯の色が黒っぽく茶色く変色してしまいます。前歯の変色歯についての審美歯科相談は非常に多いです。CRの部分的な変色であれば再充填で対応できると思います。</p>
                                
                                <p>歯冠全体的な変色に関してはセラミッククラウンやラミネートベニアの適応になります。失活歯に対してのホワイトニングだけでは効きにくいのですが、最も低侵襲な方法としてはホワイトニングの選択肢もあります。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 施術症例紹介セクション -->
                <section class="pulpectomy-content__section">
                    <h3 class="h3-gray-bg">施術症例紹介</h3>
                    
                    <!-- Case1 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case1. 左上1 オールセラミッククラウン + ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_01.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_02.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>左上1の変色歯を全体的にホワイトニングしてからのオールセラミッククラウン1本で改善しました。左上1は失活歯（神経のない歯）で変色していました。</p>
                                    <p>全体的にホワイトニングを行い、左上1はオールセラミッククラウンにし、全体的に統一感と清潔感のある仕上りにしました。</p>
                                    <p>＊セラミッククラウンは歯を削って被せる方法です。</p>
                                    <p>＊上前歯中央（中切歯）の補綴物は色や形に高い完成度が求められます。色の修正や作り直しで回数をかける場合があります。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case2 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case2. 上前歯6本 ラミネートベニア + ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_03.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_05.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_04.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_06.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアで歯の色を改善した症例です。 右上1は失活歯(神経のない歯)でグレーに変色していました。他の前歯はCRの充填物が変色していました。</p>
                                    <p>失活歯やCRの変色に対してホワイトニングを行い支台になる歯を白くキレイにしてからラミネートベニアを行いました。</p>
                                    <p>＊元々の歯の黄ばみや黒ずみはホワイトニングすることで、ある程度の色の改善ができます。ホワイトニングをした上でラミネートベニアを行います。</p>
                                    <p>＊削って被せるクラウンに比べてラミネートベニアは非常に薄く透過性があるので、元々の歯の色や状態が仕上がりに大きく影響します。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case3 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case3. 上前歯4本ラミネートベニアと2本オールセラミッククラウン + ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_07.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_08.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>テトラサイクリン歯と失活歯の色と古いクラウンを改善した症例です。左上2と右下3,1は失活歯で濃い茶色に変色していました。</p>
                                    <p>下前歯や全体をホワイトニングしました。テトラサイクリン歯と失活歯はホワイトニングである程度キレイな色になりました。</p>
                                    <p>上前歯中央2本は元々のセラミッククラウンをオールセラミッククラウンにし、周りの4本を削らないラミネートベニアで色調を統一し改善しました。下前歯はラミネートベニアができないのでホワイトニング中心に提案しています。</p>
                                    <p>オールセラミッククラウンと削らないラミネートベニアの組み合わせによる治療は当院で数多く行っています。</p>
                                    <p>＊下前歯にはラミネートベニアを行えません。ホワイトニングかセラミッククラウンの選択肢になります。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case4 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case4. 上前歯4本ラミネートベニアと2本オールセラミッククラウン + ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/ceramic_case_11.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/ceramic_case_12.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>右上1は失活歯（神経のない歯）で変色し、上中央前歯2本がかなり前突していました。全体的にホワイトニングしてから、上中央前歯2本をオールセラミッククラウン改善しました。歯を小さくしたいとのことで2本のサイズも小さめにしました。歯並びを改善して自然な色と仕上がりに改善できました。</p>
                                    <p>＊オールセラミッククラウンは歯を削って被せる方法です。 上前歯中央（中切歯）の補綴物は色や形に高い完成度が求められます。色の修正や作り直しで回数をかける場合があります。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case5 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case5. ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/whitening_36.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/whitening_37.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>全体的なテトラサイクリン歯の症例です。口元から歯が黒く見えてしまうほど重度の方でした。茶色の色素は取れましたが、黒グレーの色素は取れにくいです。</p>
                                    <p>かなり色味が改善されましたので、口元からの印象はかなり改善できました。</p>
                                    <p>＊テトラサイクリン歯のホワイトニングには限界がありますが、当院のホワイトニングである程度の改善が可能です。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case6 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case6. ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_09.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_10.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>左上1の変色歯に対して、全体的にオフィスホワイトニングとホームホワイトニングを行いました。全体的に白くできましたし、左上1の変色歯も色調の改善ができました。</p>
                                    <p>＊この症例はホワイトニングのみでしています。</p>
                                    <p>＊ホワイトニングにも限界があります。変色歯は周りと同じにはなりません。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case7 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case7. ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_1102.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_12pulpectomy-discoloration_1202.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>左上1の変色歯に対して、全体的にオフィスホワイトニングとホームホワイトニングを行いました。全体的に白くできましたし、左上1の変色歯も色調の改善ができました。</p>
                                    <p>＊この症例はホワイトニングのみでしています。</p>
                                    <p>＊ホワイトニングにも限界があります。変色歯は周りと同じにはなりません。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case8 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case8. インターナルブリーチ（ウォーキングブリーチ）</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_1102.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration02/pulpectomy-discoloration_12pulpectomy-discoloration_1202.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>左上1の変色歯に対して、失活歯のインターナルブリーチをしました。</p>
                                    <p>＊この症例はホワイトニングのみでしています。</p>
                                    <p>＊失活歯のインターナルブリーチは効果が不確実です。</p>
                                    <p>＊失活歯は強度が不安定です。インターナルブリーチが失活歯に対して強度的にマイナスになることがあります。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>

            <!-- サイドバー -->
            <?php get_template_part( 'template-parts/sidebar', 'service' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>