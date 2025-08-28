<?php
/**
 * Template Name: 出っ歯/八重歯
 * Description: 出っ歯/八重歯のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "Projecting-teeth" -->
            <div class="implant-fv__bg-text">Projecting-teeth</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "出っ歯/八重歯" -->
                <h1 class="implant-fv__title">出っ歯/八重歯</h1>
                
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
                                <span class="breadcrumb__text">出っ歯/八重歯</span>
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
                <!-- 出っ歯/八重歯セクション -->
                <div class="projecting-teeth-section">
                    <!-- メインタイトル -->
                    <div class="projecting-teeth-section__main-title">
                        <h2 class="projecting-teeth-section__title">出っ歯/八重歯</h2>
                        <div class="projecting-teeth-section__title-line"></div>
                    </div>
                    
                    <!-- サブセクション -->
                    <div class="projecting-teeth-subsection">
                        <h3 class="h3-gray-bg">出っ歯/八重歯について</h3>
                        
                        <div class="projecting-teeth-subsection__content">
                            <div class="projecting-teeth-subsection__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trouble8.svg" alt="出っ歯/八重歯について">
                            </div>
                            
                            <div class="projecting-teeth-subsection__text">
                                <p>歯並びを改善するための治療で1つ目の選択肢が矯正治療です。ワイヤー矯正やマウスピース矯正で咬み合わせや歯並びを改善する方法です。</p>
                                
                                <p>前歯の出っ歯・八重歯の見た目だけを改善したい場合には、セラミックの審美歯科があります。前歯をセラミックで形や色や歯並びを整える方法です。</p>
                                
                                <p>本来は矯正治療によって機能的にも審美的にも改善することが必要であると考えますが、咬み合わせや歯並び以外に、虫歯や失活歯（神経ない歯）や不適合補綴物を改善するためには矯正治療では治せません。セラミッククラウンの選択肢になります。</p>
                            </div>
                        </div>
                        
                        <div class="projecting-teeth-subsection__bottom-text">
                            <p>見た目の歯並びや白を改善するだけであれば、歯を削らないラミネートベニアの選択肢も提案できるかもしれません。当院では矯正だけでなくセラミックの審美歯科だけでなく、状態に応じて話し合って治療の選択肢を提案します。</p>
                        </div>
                    </div>
                </div>
                
                <!-- 施術症例紹介セクション -->
                <section class="projecting-teeth-content__section">
                    <h3 class="h3-gray-bg">マウスピース矯正（インビザライン）</h3>
                    
                    <!-- マウスピース矯正症例 -->
                    <div class="gum-shaping-content__section">
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth/projecting-teeth_mv_01.webp" alt="施術前" class="gum-shaping-case__image">
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth/projecting-teeth_mv_02.webp" alt="施術後" class="gum-shaping-case__image">
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>マウスピース矯正ですきっ歯と歯並びを改善した症例です。</p>
                                    <p>歯並びの治療において矯正治療は選択肢の1つ目にあがります。すきっ歯の矯正治療はマウスピース矯正で有利に行いやすいです。</p>
                                    <p>＊マウスピース矯正は用法を守ることが必要です。<br>＊矯正治療にはリスクもありますので、理解した上で行う必要があります。</p>
                                    <p>マウスピース矯正で上前歯の前突を改善した症例です。この症例では奥歯の咬み合わせなどは変化させずに、上下の前歯の矯正だけで出っ歯を改善しています。この矯正治療の矯正期間は7ヶ月程度です。</p>
                                    <p>＊大規模な矯正治療は必ずしもメリットだけではありません。矯正治療のダメージが最小限になるように効率的な治療計画を考える必要があります。</p>
                                    <p>＊インビザライン、インビザラインGo、クリアコレクトなど、必要に応じて提案します。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- 施術症例紹介セクション -->
                <section class="projecting-teeth-content__section">
                    <h3 class="h3-gray-bg">施術症例紹介</h3>
                    
                    <!-- Case1 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case1. 上前歯4本 オールセラミッククラウン + 歯肉整形</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth/projecting-teeth_03.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth/projecting-teeth_04.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>歯肉整形とオールセラミッククラウンでガミースマイルと前歯の審美性を改善した症例です。上前歯8本に歯肉整形をして、上前歯中央4本にオールセラミッククラウンを行いました。</p>
                                </div>
                                
                                <!-- 治療詳細テーブル -->
                                <div class="gum-shaping-case__table">
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                        <div class="gum-shaping-case__table-content">当院で行える歯肉整形は比較的に軽度なガミースマイルが対象です。口腔外科や美容外科で行っているような骨切り手術（Le Fort手術）や口唇粘膜を切開縫合する手術などは対応していません。</div>
                                    </div>
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">治療費</div>
                                        <div class="gum-shaping-case__table-content">616,000</div>
                                    </div>
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">治療期間</div>
                                        <div class="gum-shaping-case__table-content">2ヶ月</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case2 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case2. 上前歯8本 ラミネートベニア + 歯肉整形</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth/projecting-teeth_01.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth/projecting-teeth_02.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアで上前歯の歯並びの見え方を改善した症例です。中央前歯2本が目立つ症例です。ガミースマイル（歯肉が見える）の改善と前歯を大きくするために歯肉整形をしてから、削らないラミネートベニア8本で歯並びがキレイに見えるようにしています。</p>
                                    <p>＊ラミネートベニアは歯を大きくすることはできますが、出っ歯や歯の出っ張りを引っ込めることはできません。出っ歯や歯の出っ張り部分を削れば、歯の形を修正することもできます。</p>
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