<?php
/**
 * Template Name: 前歯の詰め物の変色
 * Description: 前歯の詰め物の変色のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "Front teeth filling" -->
            <div class="implant-fv__bg-text">Front teeth filling</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "前歯の詰め物の変色" -->
                <h1 class="implant-fv__title">前歯の詰め物の変色</h1>
                
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
                                <span class="breadcrumb__text">前歯の詰め物の変色</span>
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
                <!-- 前歯の詰め物の変色セクション -->
                <div class="frontteeth-filling-section">
                    <!-- メインタイトル -->
                    <div class="frontteeth-filling-section__main-title">
                        <h2 class="frontteeth-filling-section__title">前歯の詰め物の変色</h2>
                        <div class="frontteeth-filling-section__title-line"></div>
                    </div>
                    
                    <!-- サブセクション -->
                    <div class="frontteeth-filling-subsection">
                        <h3 class="h3-gray-bg">前歯の詰め物の変色が気になる方へ</h3>
                        
                        <div class="frontteeth-filling-subsection__content">
                            <div class="frontteeth-filling-subsection__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frontteeth-filling/trouble6.svg" alt="前歯の詰め物の変色">
                            </div>
                            
                            <div class="frontteeth-filling-subsection__text">
                                <p>前歯の虫歯治療などにCR（コンポジットレジン）の充填をしますが、CRは経年的に黄色や茶色の変色や着色が着いてしまいます。以前に行った古いCRの変色・着色によって前歯が汚れて見えてしまうケースの審美歯科相談は非常に多いです。</p>
                                
                                <p>シンプルであれば古いCRを切削除去し新しいCRを充填しなおす選択肢もあります。すでに充填しているCRが大きかったり破折していたり、汚れた歯質や虫歯の範囲が大きい場合には、CRの再充填では難しいのでセラミッククラウンの適応になります。</p>
                            </div>
                        </div>
                        
                        <div class="frontteeth-filling-subsection__bottom-text">
                            <p>虫歯や破折などの問題がなくて審美障害だけの改善であれば、ホワイトニングやラミネートベニアが低侵襲な審美歯科の選択肢になります。</p>
                        </div>
                    </div>
                </div>

                <!-- 施術症例紹介セクション -->
                <section class="frontteeth-filling-content__section">
                    <h3 class="h3-gray-bg">施術症例紹介</h3>
                    
                    <!-- Case1 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case1. 上前歯6本 ラミネートベニア+ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frontteeth-filling/frontteeth-filling_01.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frontteeth-filling/frontteeth-filling_03.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frontteeth-filling/frontteeth-filling_02.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frontteeth-filling/super_enamel_example_58.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアで歯の色を改善した症例です。右上１は失活歯(神経のない歯)で、グレーに変色していました。周りの歯はCRの充填物が変色・着色していました。</p>
                                    <p>全体的にオフィスホワイトニングとホームホワイトニングを行ってからラミネートベニアを行いました。このような支台の色にバラつきのあるケースでは、仕上がりの色を統一するためにあえてラミネートベニアの透明感を抑えて製作します。</p>
                                    <p>＊CRの変色・着色や歯質の黄ばみ茶色や黒ずみはホワイトニングすることで色の改善ができます。</p>
                                    <p>＊削って被せるクラウンに比べてラミネートベニアは、元々の歯の色味や状態が仕上がりに大きく影響します。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case2 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case2. 上前歯6本 ラミネートベニア</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frontteeth-filling/frontteeth-filling_05.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frontteeth-filling/frontteeth-filling_06.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアで歯の色を改善したケースです。海外の方なのですが、古いCRベニアが劣化して黄ばみと変色がありました。</p>
                                    <p>古いCRベニアを除去し、周りの歯に合わせた自然な色のラミネートベニアで仕上げました。</p>
                                    <p>＊ラミネートベニアは白くツヤツヤにはしやすいですが、透明感がある自然な雰囲気に仕上げる方が難しいです。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case3 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case3. ホワイトニング ＋ 1本 ダイレクトボンディング（自費のCR）</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frontteeth-filling/frontteeth-filling_07.webp" alt="施術前 [左上3（犬歯）1本]" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前 [左上3（犬歯）1本]</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frontteeth-filling/frontteeth-filling_08.webp" alt="施術後(ホワイトニング)" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後(ホワイトニング)</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>左上3が虫歯でしみる症状があります。前歯のCRにも黄色茶色と着色とプラーク汚れがあります。</p>
                                    <p>クリーニングとホワイトニングを行いました。簡単なクリーニングとオフィスホワイトニングとホームホワイトニングを行い、CRの着色・変色や周りの歯質の黄ばみ茶色をキレイにしました。キレイに清潔になったので、左上3の虫歯治療も有利に行えます。</p>
                                </div>
                                
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frontteeth-filling/frontteeth-filling_0702.webp" alt="ダイレクトボンディング（自費CR）後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">ダイレクトボンディング（自費CR）後</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <!-- 空のコンテナで半分のレイアウトを維持 -->
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>今回は、左上3のみを虫歯除去しダイレクトボンディング（CR）にて修復しました。左上3の虫歯しか削ってはいません。それ以外はクリーニングとホワイトニングだけでキレイになっています。黄ばみ茶色もホワイトニングと組み合わせることで、虫歯のみ最小限の切削量で審美的にキレイに治すことができます。</p>
                                    <p>＊CRはクラウンなどに比べて歯の切削量が少ない</p>
                                    <p>＊CRは周囲になじみやすく自然な仕上がりにしやすい</p>
                                    <p>＊CRは金属やセラミックに比べ、吸水性があるため長期的には着色し劣化し不衛生になりやすい</p>
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