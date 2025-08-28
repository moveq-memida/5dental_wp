<?php
/**
 * Template Name: 奥歯セラミック症例
 * Description: 奥歯セラミック症例のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "Back Ceramic Case" -->
            <div class="implant-fv__bg-text">Back Ceramic Case</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "奥歯のセラミック治療 施術症例紹介" -->
                <h1 class="implant-fv__title">奥歯のセラミック治療 施術症例紹介</h1>
                
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
                            <li class="breadcrumb__item">
                                <a href="<?php echo esc_url( home_url( '/menu' ) ); ?>" class="breadcrumb__link">
                                    <span class="breadcrumb__text">診療メニュー</span>
                                </a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--current">
                                <span class="breadcrumb__text">奥歯のセラミック治療 施術症例紹介</span>
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
                <div class="implant-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case02/banner-gummy-smile.webp" alt="奥歯セラミック治療" class="implant-content__hero-img">
                </div>

                <!-- 奥歯のセラミック治療タイトル -->
                <h1 class="orthodontics-content__main-title">奥歯のセラミック治療</h1>
                
                <!-- 施術症例紹介セクション -->
                <section class="pulpectomy-content__section">
                    
                    <!-- 奥歯のセラミックの症例① -->
                    <h3 class="h3-gray-bg">奥歯のセラミックの症例①</h3>
                    
                    <!-- Case1 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像ペア -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case02/01.webp" alt="奥歯セラミック治療施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case02/02.webp" alt="奥歯セラミック治療施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">下顎６番</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">セラミックインレー　１本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">2週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">60,000円（税別）</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 奥歯のセラミックの症例② -->
                    <h3 class="h3-gray-bg">奥歯のセラミックの症例②</h3>
                    
                    <!-- Case2 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像セット（上段2枚、下段1枚） -->
                        <div class="gum-shaping-case__images">
                            <!-- 上段の画像ペア -->
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case02/03.webp" alt="奥歯セラミック治療施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case02/05.webp" alt="奥歯セラミック治療施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- 下段の画像（1枚のみ） -->
                        <div class="gum-shaping-case__images" style="margin-top: 20px;">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case02/04.webp" alt="奥歯セラミック治療施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container" style="opacity: 0; pointer-events: none;">
                                <!-- 空のコンテナでレイアウトを保持 -->
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">下顎7番</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">セラミックインレー　１本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">2週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">60,000円（税別）</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 奥歯のセラミックの症例③ -->
                    <h3 class="h3-gray-bg">奥歯のセラミックの症例③</h3>
                    
                    <!-- Case3 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像ペア -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case02/06.webp" alt="奥歯セラミック治療施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case02/07.webp" alt="奥歯セラミック治療施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">下顎6番　下顎7番</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">下顎6番：セラミックインレー1本　下顎7番オールセラミッククラウン1本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">下顎7番：2週間　下顎7番：2週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">下顎7番：60,000円（税別）　下顎7番：80,000円（税別）</div>
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