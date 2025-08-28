<?php
/**
 * Template Name: テトラサイクリン歯
 * Description: テトラサイクリン歯のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "Tetracycline" -->
            <div class="implant-fv__bg-text">Tetracycline</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "テトラサイクリン歯" -->
                <h1 class="implant-fv__title">テトラサイクリン歯</h1>
                
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
                                <span class="breadcrumb__text">テトラサイクリン歯</span>
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
                <!-- テトラサイクリン歯セクション -->
                <div class="tetracycline-section">
                    <!-- メインタイトル -->
                    <div class="tetracycline-section__main-title">
                        <h2 class="tetracycline-section__title">テトラサイクリン歯</h2>
                        <div class="tetracycline-section__title-line"></div>
                    </div>
                    
                    <!-- サブセクション -->
                    <div class="tetracycline-subsection">
                        <h3 class="h3-gray-bg">テトラサイクリン歯について</h3>
                        
                        <div class="tetracycline-subsection__content">
                            <div class="tetracycline-subsection__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tetracycline/trouble1.svg" alt="テトラサイクリン歯について">
                            </div>
                            
                            <div class="tetracycline-subsection__text">
                                <p>テトラサイクリン歯は歯の変色が1本や一部分ではないため、広範囲もしくは全体的な審美歯科処置が必要となってしまいます。</p>
                                
                                <p>削って被せるセラミッククラウンであれば変色歯を希望の色味に改善することができますが、歯を削る必要があるので多数歯にわたる場合では積極的に治療を勧めていません。</p>
                                
                                <p>重度のテトラサイクリン歯（変色が強い、濃い⋰黒・グレー）でもホワイトニングによって色を薄くし、改善することができます。</p>
                            </div>
                        </div>
                        
                        <div class="tetracycline-subsection__bottom-text">
                            <p>テトラサイクリン歯のホワイトニングは確実な効果は出しにくいとされていますが、当院では多くの症例実績があり、ある程度のホワイトニング効果は期待できます。</p>
                            
                            <p>ホワイトニングは身体へのダメージがほとんどない方法だと考えています。他の審美歯科治療と比べると安価で、広範囲または全体に行える処置です。</p>
                            
                            <p>テトラサイクリン歯軽度（変色が弱い）であればホワイトングだけで満足していただけることが多いです。</p>
                            
                            <p>ホワイトニングだけで改善しきれなかった場合、従来は削って被せるセラミッククラウンにする方法が一般的でしたが、削らないラミネートベニアによって歯を削らずにキレイにすることができるようになりました。</p>
                            
                            <p>セラミッククラウンと比較すると強度の面では劣りますが、削らないラミネートベニアはご自身の歯を大きく削る必要がないので、体に優しい審美歯科治療です。</p>
                            
                            <p>下の歯には削らないラミネートベニアが適応ではないため、下の歯はホワイトニングのみまたはセラミッククラウンの選択肢になります。</p>
                        </div>
                    </div>
                </div>
                
                <!-- 施術症例紹介セクション -->
                <section class="tetracycline-content__section">
                    <h3 class="h3-gray-bg">施術症例紹介</h3>
                    
                    <!-- Case1 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case1. 上前歯8本 ラミネートベニア + ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tetracycline/tetracycline_01.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tetracycline/tetracycline_03.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tetracycline/tetracycline_02.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tetracycline/tetracycline_04.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアでテトラサイクリン歯（グレー系の歯）の色を改善した症例です。事前にホワイトニングを行い、ご自身の歯の色をできるだけ改善してからラミネートベニアを行いました。</p>
                                    <p>透明感を出すことで、周りの歯になじむ自然な仕上がりになりました。</p>
                                    <p>＊テトラサイクリン歯の色調には個人差があります。グレー色が濃い方、帯状の模様が強い方は事前にホワイトニングを行い、歯の色をできるだけキレイにしてからラミネートベニアを行うようにしています。</p>
                                    <p>＊テトラサイクリン歯でも不透明なベニアを選択すれば白くすることができます。この症例では、あえて透明なベニアで歯の色が透けることで自然と調和するようにしています。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case2 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case2. 上前歯8本 ラミネートベニア + ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tetracycline/tetracycline_05.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tetracycline/tetracycline_06.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアでテトラサイクリン歯（茶色系グレー系の歯）の色を改善した症例です。</p>
                                    <p>事前にホワイトニングを行い、ご自身の歯の色をできるだけ改善してからラミネートベニアを行いました。</p>
                                    <p>ラミネートベニアに少し透明感を出すことで、周りの歯になじむ自然な仕上がりになりました。</p>
                                    <p>＊テトラサイクリン歯の色調には個人差があります。グレー色が濃い方、帯状の模様が強い方は事前にホワイトニングを行い、歯の色をできるだけキレイにしてからラミネートベニアを行うようにしています。</p>
                                    <p>＊テトラサイクリン歯でも不透明なベニアを選択すれば真っ白くすることができます。この症例では、あえて少し透明なベニアで歯の色が透けることで自然に調和するようにしています。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case3 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case3. 上前歯４本ラミネートベニアと2本オールセラミッククラウン + ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tetracycline/tetracycline_07.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tetracycline/tetracycline_08.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>テトラサイクリン歯の色と古いクラウンを改善した症例です。下前歯や全体をホワイトニングしました。上前歯中央2本は元々のセラミッククラウンをオールセラミッククラウンにし、周りの4本を削らないラミネートベニアで色調を統一し改善しました。</p>
                                    <p>オールセラミッククラウンと削らないラミネートベニアの組み合わせによる治療は当院で数多く行っています。</p>
                                    <p>＊下前歯にはラミネートベニアを行えません。ホワイトニングかセラミッククラウンの選択肢になります。</p>
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