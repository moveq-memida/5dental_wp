<?php
/**
 * Template Name: 前歯セラミック症例
 * Description: 前歯セラミック症例のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "Front Ceramic Case" -->
            <div class="implant-fv__bg-text">Front Ceramic Case</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "前歯セラミック症例" -->
                <h1 class="implant-fv__title">前歯のセラミック治療 施術症例紹介</h1>
                
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
                                <span class="breadcrumb__text">前歯のセラミック治療 施術症例紹介</span>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/banner-gummy-smile.webp" alt="インプラント治療" class="implant-content__hero-img">
                </div>

                <!-- 前歯のセラミック治療タイトル -->
                <h1 class="orthodontics-content__main-title">前歯のセラミック治療</h1>
                
                <!-- 施術症例紹介セクション -->
                <section class="pulpectomy-content__section">
                    
                    <!-- 前歯のセラミックの症例① -->
                    <h3 class="h3-gray-bg">前歯のセラミックの症例①</h3>
                    
                    <!-- Case1 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像4枚構成 -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/c1.webp" alt="前歯セラミック矯正施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/c2.webp" alt="前歯セラミック矯正施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/c3.webp" alt="前歯セラミック矯正施術前2" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/c4.webp" alt="前歯セラミック矯正施術後2" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">右上2本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">オールセラミッククラウン1本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">約2週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">160,000円（税別）</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                <div class="gum-shaping-case__table-content">
                                    オールセラミッククラウンは歯を削って被せる方法です。<br>
                                    上前歯中央（中切歯）の審美修復は色や形に高い完成度が求められます。色の修正や入直しで回数をかける場合があります。<br>
                                    状況によって施術後に、腫痛・咬合時痛・冷水痛などが生じる事があります。
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 前歯のセラミックの症例② -->
                    <h3 class="h3-gray-bg">前歯のセラミックの症例②</h3>
                    
                    <!-- Case2 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像ペア -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/d1.webp" alt="前歯セラミック矯正施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/d2.webp" alt="前歯セラミック矯正施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">右上1本→左上1・2</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">オールセラミッククラウン3本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">約4週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">360,000円（税別）</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                <div class="gum-shaping-case__table-content">
                                    オールセラミッククラウンは歯を削って被せる方法です。<br>
                                    上前歯中央（中切歯）の審美修復は色や形に高い完成度が求められます。色の修正や入直しで回数をかける場合があります。<br>
                                    状況によって施術後に、腫痛・咬合時痛・冷水痛などが生じる事があります。
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 前歯のセラミックの症例③ -->
                    <h3 class="h3-gray-bg">前歯のセラミックの症例③</h3>
                    
                    <!-- Case3 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像ペア -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/d5.webp" alt="前歯ラミネートベニア修正施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/d6.webp" alt="前歯ラミネートベニア修正施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">←右上1、→左上1・2・3</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">オールセラミッククラウン3本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">約4週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">360,000円（税別）</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                <div class="gum-shaping-case__table-content">
                                    オールセラミッククラウンは歯を削って被せる方法です。<br>
                                    上前歯中央（中切歯）の審美修復は色や形に高い完成度が求められます。色の修正や入直しで回数をかける場合があります。<br>
                                    状況によって施術後に、腫痛・咬合時痛・冷水痛などが生じる事があります。
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 前歯のセラミックの症例④ -->
                    <h3 class="h3-gray-bg">前歯のセラミックの症例④</h3>
                    
                    <!-- Case4 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像ペア -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/e3.webp" alt="前歯セラミック矯正施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/e4.webp" alt="前歯セラミック矯正施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">右上3～左上3</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">オールセラミッククラウン6本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">約4週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">720,000円（税別）</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                <div class="gum-shaping-case__table-content">
                                    オールセラミッククラウンは歯を削って被せる方法です。<br>
                                    上前歯中央（中切歯）の審美修復は色や形に高い完成度が求められます。色の修正や入直しで回数をかける場合があります。<br>
                                    状況によって施術後に、腫痛・咬合時痛・冷水痛などが生じる事があります。
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 前歯のセラミックの症例⑤ -->
                    <h3 class="h3-gray-bg">前歯のセラミックの症例⑤</h3>
                    
                    <!-- Case5 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像ペア -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/f1.webp" alt="前歯ラミネートベニア修正施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/f2.webp" alt="前歯ラミネートベニア修正施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">上9本、下5本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">オールセラミッククラウン14本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">約3ヶ月</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">1,680,000円（税別）</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                <div class="gum-shaping-case__table-content">
                                    オールセラミッククラウンは歯を削って被せる方法です。<br>
                                    上前歯中央（中切歯）の審美修復は色や形に高い完成度が求められます。色の修正や入直しで回数をかける場合があります。<br>
                                    状況によって施術後に、腫痛・咬合時痛・冷水痛などが生じる事があります。
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 前歯のセラミックの症例⑥ -->
                    <h3 class="h3-gray-bg">前歯のセラミックの症例⑥</h3>
                    
                    <!-- Case6 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像ペア -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/f5.webp" alt="前歯セラミック矯正施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/f6.webp" alt="前歯セラミック矯正施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">左上2本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">オールセラミッククラウン1本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">約3週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">120,000円（税別）</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                <div class="gum-shaping-case__table-content">
                                    オールセラミッククラウンは歯を削って被せる方法です。<br>
                                    上前歯中央（中切歯）の審美修復は色や形に高い完成度が求められます。色の修正や入直しで回数をかける場合があります。<br>
                                    状況によって施術後に、腫痛・咬合時痛・冷水痛などが生じる事があります。
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 前歯のセラミックの症例⑦ -->
                    <h3 class="h3-gray-bg">前歯のセラミックの症例⑦</h3>
                    
                    <!-- Case7 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像ペア -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/g1.webp" alt="前歯ラミネートベニア修正施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/g2.webp" alt="前歯ラミネートベニア修正施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">上8本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">オールセラミッククラウン8本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">約3週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">960,000円（税別）</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                <div class="gum-shaping-case__table-content">
                                    オールセラミッククラウンは歯を削って被せる方法です。<br>
                                    上前歯中央（中切歯）の審美修復は色や形に高い完成度が求められます。色の修正や入直しで回数をかける場合があります。<br>
                                    状況によって施術後に、腫痛・咬合時痛・冷水痛などが生じる事があります。
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 前歯のセラミックの症例⑧ -->
                    <h3 class="h3-gray-bg">前歯のセラミックの症例⑧</h3>
                    
                    <!-- Case8 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像ペア -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/h1.webp" alt="前歯セラミック矯正施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/h2.webp" alt="前歯セラミック矯正施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">上4本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">オールセラミッククラウン4本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">約4週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">480,000円（税別）</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                <div class="gum-shaping-case__table-content">
                                    オールセラミッククラウンは歯を削って被せる方法です。<br>
                                    上前歯中央（中切歯）の審美修復は色や形に高い完成度が求められます。色の修正や入直しで回数をかける場合があります。<br>
                                    状況によって施術後に、腫痛・咬合時痛・冷水痛などが生じる事があります。
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 前歯のセラミックの症例⑨ -->
                    <h3 class="h3-gray-bg">前歯のセラミックの症例⑨</h3>
                    
                    <!-- Case9 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像ペア -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/i1.webp" alt="前歯セラミック矯正施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/i2.webp" alt="前歯セラミック矯正施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">右上２←、左上2→</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">オールセラミッククラウン2本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">約3週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">240,000円（税別）</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                <div class="gum-shaping-case__table-content">
                                    オールセラミッククラウンは歯を削って被せる方法です。<br>
                                    上前歯中央（中切歯）の補綴物は色や形に高い完成度が求められます。色の修正や作り直しで回数をかける場合があります。<br>
                                    状況によって術後に、疼痛・咬合時痛・冷水痛など生じる事があります。
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 前歯のセラミックの症例⑩ -->
                    <h3 class="h3-gray-bg">前歯のセラミックの症例⑩</h3>
                    
                    <!-- Case10 -->
                    <div class="gum-shaping-content__section">
                        <!-- 画像ペア -->
                        <div class="gum-shaping-case__images">
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/i3.webp" alt="前歯セラミック矯正施術前" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術前</span>
                            </div>
                            <div class="gum-shaping-case__image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-ceramic-case/i4.webp" alt="前歯セラミック矯正施術後" class="gum-shaping-case__image">
                                <span class="gum-shaping-case__label">施術後</span>
                            </div>
                        </div>
                        
                        <!-- テーブル -->
                        <div class="gum-shaping-case__table">
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">対象箇所</div>
                                <div class="gum-shaping-case__table-content">上7本、右下←2本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療内容</div>
                                <div class="gum-shaping-case__table-content">オールセラミッククラウン9本</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療期間</div>
                                <div class="gum-shaping-case__table-content">約6週間</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">治療費用</div>
                                <div class="gum-shaping-case__table-content">1,080,000円（税別）</div>
                            </div>
                            <div class="gum-shaping-case__table-row">
                                <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                <div class="gum-shaping-case__table-content">
                                    オールセラミッククラウンは歯を削って被せる方法です。<br>
                                    上前歯中央（中切歯）の補綴物は色や形に高い完成度が求められます。色の修正や作り直しで回数をかける場合があります。<br>
                                    状況によって術後に、疼痛・咬合時痛・冷水痛など生じる事があります。
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