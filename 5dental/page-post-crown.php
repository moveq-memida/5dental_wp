<?php
/**
 * Template Name: 差し歯の色
 * Description: 差し歯の色に関するページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "Post crown" -->
            <div class="implant-fv__bg-text">Post crown</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "差し歯の色" -->
                <h1 class="implant-fv__title">差し歯の色</h1>
                
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
                                <span class="breadcrumb__text">差し歯の色</span>
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
                <!-- 差し歯の色セクション -->
                <div class="post-crown-section">
                    <!-- メインタイトル -->
                    <div class="post-crown-section__main-title">
                        <h2 class="post-crown-section__title">差し歯の色</h2>
                        <div class="post-crown-section__title-line"></div>
                    </div>
                    
                    <!-- サブセクション -->
                    <div class="post-crown-subsection">
                        <h3 class="h3-gray-bg">差し歯の色について</h3>
                        
                        <div class="post-crown-subsection__content">
                            <div class="post-crown-subsection__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post-crown/trouble5.svg" alt="差し歯の色について">
                            </div>
                            
                            <div class="post-crown-subsection__text">
                                <p>歯冠全体を覆うように被せる人工物をクラウンといいます。前歯用のクラウンには、保険適応のレジン前装金属クラウン、ハイブリッドレジンクラウン、メタルボンドセラミッククラウン、オールセラミッククラウンなどがあります。</p>
                                
                                <p>レジン前装冠は金属の上にプラスチックが貼り付けてある構造をしています。レジンや金属を含む材料のクラウンではクラウンと歯肉の境目に炎症や変色（ブラックマージンやブラックトライアングル）が起きます。</p>
                            </div>
                        </div>
                        
                        <div class="post-crown-subsection__bottom-text">
                            <p>オールセラミッククラウンの審美歯科では、1本で治すこともありますし8本や10本をまとめてキレイにすることもあります。また、事前のホワイトニングによってご自身の周りの歯の色を全体的に白くしてからそれに合わせてオールセラミッククラウンで治すこともします。</p>
                            
                            <p>左右対称の本数や8本や10本などある程度まとまった本数で計画すると、歯の色や歯並び歯の形を整えることができるため、全体的な仕上がりの審美性は高くなります。</p>
                            
                            <p>多数歯に対して審美歯科を行う場合に、オールセラミッククラウンにすると審美性は高いですが歯を削る必要があります。削らないラミネートベニアだと歯を削らずにセラミックの審美歯科を行えます。当院ではオールセラミッククラウンと削らないラミネートベニアの組み合わせ治療も数多く行っています。</p>
                        </div>
                    </div>
                </div>
                
                <!-- 施術症例紹介セクション -->
                <section class="post-crown-content__section">
                    <h3 class="h3-gray-bg">施術症例紹介</h3>
                    
                    <!-- Case1 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case1. 上前歯7本 オールセラミッククラウン</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post-crown/post-crown_01.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post-crown/post-crown_02.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>前歯の古いクラウンや虫歯の治療を、オールセラミッククラウンにて行いました。オールセラミッククラウンは歯肉の境目がキレイに健康に治療することができます。</p>
                                    <p>＊虫歯や歯肉の状態が悪ければ、オールセラミック治療の前に虫歯治療や歯周病治療を行う必要があります。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case2 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case2. 上前歯10本 オールセラミッククラウン など</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post-crown/post-crown_03.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post-crown/post-crown_04.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>前歯の古いクラウンや虫歯の治療を、オールセラミッククラウンにて行いました。オールセラミッククラウンは歯肉の境目がキレイに健康に治療することができます。中央前歯部の歯肉の黒ずみには歯肉切除、左前歯上下には歯肉粘膜手術を行っています。</p>
                                    <p>＊虫歯や歯肉の状態が悪ければ、オールセラミック治療の前に虫歯治療や歯周病治療を行う必要があります。</p>
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