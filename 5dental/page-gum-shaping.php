<?php
/**
 * Template Name: ガミースマイル治療
 * Description: ガミースマイル治療 施術症例紹介のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="gum-shaping-fv">
        <div class="gum-shaping-fv__container">
            <!-- 背景テキスト "Gummy case" -->
            <div class="gum-shaping-fv__bg-text">Gummy case</div>
            
            <!-- コンテンツエリア -->
            <div class="gum-shaping-fv__content">
                <!-- メインタイトル "ガミースマイル治療 施術症例紹介" -->
                <h1 class="gum-shaping-fv__title">ガミースマイル治療 施術症例紹介</h1>
                
                <!-- パンくずリスト -->
                <nav class="gum-shaping-fv__breadcrumb">
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
                                <span class="breadcrumb__text">ガミースマイル治療</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <!-- メインコンテンツセクション -->
    <section class="gum-shaping-content">
        <div class="gum-shaping-content__container">
            <!-- メインコンテンツエリア -->
            <main class="gum-shaping-content__main">
                <!-- ガミースマイル治療画像 -->
                <div class="gum-shaping-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/gummy.webp" alt="ガミースマイル治療" class="gum-shaping-content__hero-img">
                </div>

                <!-- ガミースマイル改善バナー -->
                <div class="gum-shaping-banner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/banner-gummy.webp" alt="ガミースマイル改善 - 歯肉整形/ラミネートベニア" class="gum-shaping-banner__img">
                </div>

                <!-- メインタイトル -->
                <h1 class="gum-shaping-content__main-title">ガミースマイル治療</h1>

                <!-- ガミースマイルの症例① -->
                <section class="gum-shaping-content__section">
                    <h3 class="h3-gray-bg">ガミースマイルの症例①</h3>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/a1.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/a2.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>

                            <!-- 治療詳細テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療内容</div>
                                    <div class="gum-shaping-case__table-content">歯肉整形8本＋ラミネートべニア8本</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">約6週間</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費用</div>
                                    <div class="gum-shaping-case__table-content">575,000円（税別）</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療詳細</div>
                                    <div class="gum-shaping-case__table-content">
                                        <p>口元からの歯や歯ぐき（歯肉）の見え方を、歯が小さく縦長さが短いのを、歯肉整形と削らないラミネートべニアにて改善しました。</p>
                                        <p>前歯が小さいのとガミースマイルを歯肉整形で改善し、すきっ歯と歯の色・形を削らないラミネートべニアで白くして形を整えました。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ガミースマイルの症例② -->
                <section class="gum-shaping-content__section">
                    <h3 class="h3-gray-bg">ガミースマイルの症例②</h3>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/a3.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/a4.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>

                            <!-- 治療詳細テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療内容</div>
                                    <div class="gum-shaping-case__table-content">歯肉整形8本＋ラミネートべニア8本</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">約6週間</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費用</div>
                                    <div class="gum-shaping-case__table-content">575,000円（税別）</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療詳細</div>
                                    <div class="gum-shaping-case__table-content">
                                        <p>口元からの歯や歯ぐき（歯肉）の見え方や左右の傾きを、歯肉整形と削らないラミネートべニアにて改善しました。</p>
                                        <p>前歯が小さいのと歯並びの傾きを歯肉整形で改善し、歯並びと歯の色・形を削らないラミネートべニアで整えました。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ガミースマイルの症例③ -->
                <section class="gum-shaping-content__section">
                    <h3 class="h3-gray-bg">ガミースマイルの症例③</h3>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/a5.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/a6.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>

                            <!-- 治療詳細テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療内容</div>
                                    <div class="gum-shaping-case__table-content">歯肉整形（骨整形）8本</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">約3週間</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費用</div>
                                    <div class="gum-shaping-case__table-content">80,000円（税別）</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療詳細</div>
                                    <div class="gum-shaping-case__table-content">
                                        <p>歯が小さく縦長さが短いのを、歯肉整形（骨整形）にて改善しました。</p>
                                        <p>歯の着色と汚れをクリーニングにて改善し、歯肉炎で被っていた歯ぐき（歯肉）を歯肉と骨の整形にて改善しました。</p>
                                        <p>この状態は術後3週間なのですがまだ歯肉は治癒の途中です。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ガミースマイルの症例④ -->
                <section class="gum-shaping-content__section">
                    <h3 class="h3-gray-bg">ガミースマイルの症例④</h3>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/b1.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/b2.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>

                            <!-- 治療詳細テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療内容</div>
                                    <div class="gum-shaping-case__table-content">歯肉整形8本</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">約2週間</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費用</div>
                                    <div class="gum-shaping-case__table-content">80,000円（税別）</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療詳細</div>
                                    <div class="gum-shaping-case__table-content">
                                        <p>口元からの歯や歯ぐき（歯肉）の見え方を、歯が小さく縦長さが短いのを、歯肉整形にて改善しました。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ガミースマイルの症例⑤ -->
                <section class="gum-shaping-content__section">
                    <h3 class="h3-gray-bg">ガミースマイルの症例⑤</h3>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/b3.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/b4.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>

                            <!-- 治療詳細テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療内容</div>
                                    <div class="gum-shaping-case__table-content">歯肉整形8本</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">約2週間</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費用</div>
                                    <div class="gum-shaping-case__table-content">80,000円（税別）</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療詳細</div>
                                    <div class="gum-shaping-case__table-content">
                                        <p>口元からの歯や歯ぐき（歯肉）の見え方を、歯が小さく縦長さが短いのを、歯肉整形にて改善しました。</p>
                                        <p>歯が小さくガミースマイルだと可愛らしく見えてしまいやすいので、ガミースマイルの改善は男性にも特にお薦めです。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ガミースマイルの症例⑥ -->
                <section class="gum-shaping-content__section">
                    <h3 class="h3-gray-bg">ガミースマイルの症例⑥</h3>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/c3.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/c4.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>

                            <!-- 治療詳細テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療内容</div>
                                    <div class="gum-shaping-case__table-content">歯肉整形8本＋オールセラミッククラウン3本</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">約5週間</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費用</div>
                                    <div class="gum-shaping-case__table-content">440,000円（税別）</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療詳細</div>
                                    <div class="gum-shaping-case__table-content">
                                        <p>口元からの歯並びや歯ぐき（歯肉）の見え方を、歯肉整形とオールセラミッククラウンにて改善しました。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ガミースマイルの症例⑦ -->
                <section class="gum-shaping-content__section">
                    <h3 class="h3-gray-bg">ガミースマイルの症例⑦</h3>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/d1.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/d2.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>

                            <!-- 治療詳細テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療内容</div>
                                    <div class="gum-shaping-case__table-content">歯肉整形8本＋ラミネートべニア8本</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">約6週間</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費用</div>
                                    <div class="gum-shaping-case__table-content">575,000円（税別）</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療詳細</div>
                                    <div class="gum-shaping-case__table-content">
                                        <p>口元からの歯や歯ぐき（歯肉）の見え方歯を、歯が小さく縦長さが短いのを、歯肉整形と削らないラミネートべニアにて改善しました。</p>
                                        <p>前歯が小さいのとガミースマイルを歯肉整形で改善し、歯の色・形を削らないラミネートべニアで整えました。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ガミースマイルの症例⑧ -->
                <section class="gum-shaping-content__section">
                    <h3 class="h3-gray-bg">ガミースマイルの症例⑧</h3>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/d3.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/d4.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>

                            <!-- 治療詳細テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療内容</div>
                                    <div class="gum-shaping-case__table-content">歯肉整形8本＋ラミネートべニア8本</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">約6週間</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費用</div>
                                    <div class="gum-shaping-case__table-content">575,000円（税別）</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療詳細</div>
                                    <div class="gum-shaping-case__table-content">
                                        <p>口元からの歯並びや歯ぐき（歯肉）の見え方歯を、歯が小さくすきっ歯なのを、歯肉整形と削らないラミネートべニアにて改善しました。</p>
                                        <p>前歯が小さいのとガミースマイルを歯肉整形で改善し、すきっ歯と歯の形や矮小歯を削らないラミネートべニアで形と歯並びを整えました。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ガミースマイルの症例⑨ -->
                <section class="gum-shaping-content__section">
                    <h3 class="h3-gray-bg">ガミースマイルの症例⑨</h3>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/e3.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/e4.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>

                            <!-- 治療詳細テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療内容</div>
                                    <div class="gum-shaping-case__table-content">歯肉整形8本</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">約2週間</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費用</div>
                                    <div class="gum-shaping-case__table-content">80,000円（税別）</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療詳細</div>
                                    <div class="gum-shaping-case__table-content">
                                        <p>口元からの歯や歯ぐき（歯肉）の見え方を、歯が小さく縦長さが短いのを、歯肉整形にて改善しました。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ガミースマイルの症例⑩ -->
                <section class="gum-shaping-content__section">
                    <h3 class="h3-gray-bg">ガミースマイルの症例⑩</h3>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/g3.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy/g4.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>

                            <!-- 治療詳細テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療内容</div>
                                    <div class="gum-shaping-case__table-content">歯肉整形8本</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">約2週間</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費用</div>
                                    <div class="gum-shaping-case__table-content">80,000円（税別）</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療詳細</div>
                                    <div class="gum-shaping-case__table-content">
                                        <p>口元からの歯や歯ぐき（歯肉）の見え方を、歯が小さく縦長さが短いのを、歯肉整形にて改善しました。</p>
                                    </div>
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