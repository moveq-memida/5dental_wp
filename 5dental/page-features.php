<?php
/**
 * Template Name: 当院の特徴
 * Description: 当院の特徴のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<style>
/* 初めての方へセクションのテキストスタイル */
.first-visit__description {
    color: #595A5D;
    font-family: "Zen Old Mincho";
    font-size: 1rem; /* 16px */
    font-style: normal;
    font-weight: 400;
    line-height: 1.5; /* 150% */
    letter-spacing: 0.02rem; /* 0.32px */
    margin-bottom: 1rem;
}

.first-visit__content {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    background: var(--white-ffffff, #FFF);
    box-shadow: 10px 10px 10px 0 rgba(122, 134, 158, 0.03);
}

/* ボタンコンポーネントのスタイル修正 */
.btn-section-cta {
    border-radius: 33px;
    background: var(--gradation3, linear-gradient(268deg, #949BA9 3.88%, #697181 100.68%));
    max-width: none !important;
}

/* 初めてご来院のボタン専用padding */
.first-visit__cta {
    margin-top: 1rem;
}

.first-visit__cta .btn-section-cta {
    padding: 0 3.5rem 0 1.5rem;
}

/* 予約、診療についてセクションのテキストスタイル */
.appointment-info__description {
    color: var(--txt-595A5D, #595A5D);
    font-family: "Zen Old Mincho";
    font-size: 1rem; /* 16px */
    font-style: normal;
    font-weight: 400;
    line-height: 1.5; /* 150% */
    letter-spacing: 0.02rem; /* 0.32px */
}

/* 当院の特徴セクションのテキストスタイル */
.clinic-features__description {
    color: var(--txt-595A5D, #595A5D);
    font-family: "Zen Old Mincho";
    font-size: 1rem; /* 16px */
    font-style: normal;
    font-weight: 400;
    line-height: 1.5; /* 150% */
    letter-spacing: 0.02rem; /* 0.32px */
}

/* 当院の特徴テーブルのスタイル */
.clinic-features__table-wrapper {
    box-shadow: 10px 10px 10px 0 rgba(122, 134, 158, 0.03);
}

.clinic-features__table {
    border: 1.5px solid #E0E0E5;
    border-collapse: collapse;
}

.clinic-features__table td {
    border: 1.5px solid #E0E0E5;
}

/* 一番左側のテキスト（カテゴリー） */
.clinic-features__table-category {
    color: var(--txt-737484, #737484);
    text-align: center;
    font-family: "Zen Old Mincho";
    font-size: 1rem; /* 16px */
    font-style: normal;
    font-weight: 600;
    line-height: 1.35; /* 135% */
    letter-spacing: 0.02rem; /* 0.32px */
    background-color: #f6f6f7;
}

/* 一番右側のテキスト（説明） */
.clinic-features__table-description {
    color: var(--txt-595A5D, #595A5D);
    font-family: "Zen Old Mincho";
    font-size: 1rem; /* 16px */
    font-style: normal;
    font-weight: 400;
    line-height: 1.35; /* 135% */
    letter-spacing: 0.02rem; /* 0.32px */
}

/* 体に優しい審美歯科、削らないラミネートベニア、ホワイトニング、3Dデジタルマウスピース矯正セクションの下padding */
.aesthetic-dentistry,
.laminate-veneer,
.whitening {
    padding-bottom: 18rem;
}
</style>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="orthodontics-fv">
        <div class="orthodontics-fv__container">
            <!-- 背景テキスト "Orthodontics" -->
            <div class="orthodontics-fv__bg-text">Orthodontics</div>
            
            <!-- コンテンツエリア -->
            <div class="orthodontics-fv__content">
                <!-- メインタイトル "矯正歯科" -->
                <h1 class="orthodontics-fv__title">当院の特徴</h1>
                
                <!-- パンくずリスト -->
                <nav class="orthodontics-fv__breadcrumb">
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
                                <span class="breadcrumb__text">当院の特徴</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>
    <!-- 初めての方へセクション -->
    <section class="first-visit">
        <div class="first-visit__container">
            <h2 class="section-title-with-subtitle">
                <span class="section-title-with-subtitle__subtitle">First-time visitors</span>
                <span class="section-title-with-subtitle__title">初めての方へ</span>
            </h2>
            
            <div class="first-visit__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/first-time.webp" alt="初めての方へ" loading="lazy">
            </div>
            
            <div class="first-visit__content">
                <p class="first-visit__description">
                    5DENTAL東京銀座では、審美歯科に力を入れています。（審美歯科は保険外（自費）です。）
                </p>
                <p class="first-visit__description">
                    前歯の審美歯科や詰め物(Inインレー)や被せ物(Crクラウン)は保険外診療(自費)を中心に行っています。
                </p>
                <p class="first-visit__description">
                    保険外診療（自費）のメニューは<span class="highlight">高品質な治療をできるだけ安価で行えるような料金</span>に設定しています。
                </p>
                <p class="first-visit__description">
                    予約診療制で行っており、<span class="highlight">遠方からの患者様や長時間診療の患者様に対応</span>しています。
                </p>
                <p class="first-visit__description">
                    保険外診療（自費）を中心に行っていますので、保険内診療のみの希望の方や、すぐに急ぎでの対処だけを希望の方などには、当院はお薦めしておりません。
                </p>
                
                <div class="first-visit__cta">
                    <a href="<?php echo esc_url( home_url( '/access' ) ); ?>" class="btn-section-cta">
                        初めてご来院される方はこちらをご覧ください
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 予約、診療についてセクション -->
    <section class="appointment-info">
        <div class="appointment-info__container">
            <h2 class="section-title-with-subtitle">
                <span class="section-title-with-subtitle__subtitle">Appointment</span>
                <span class="section-title-with-subtitle__title">予約、診療について</span>
            </h2>
            
            <div class="appointment-info__content">
                <p class="appointment-info__description">
                    削らない審美歯科を希望してご来院くださる患者様のために、できるだけ多くの審美歯科のメニューを準備し、できるだけ丁寧にカウンセリングを行えるように予約時間を取りします。<span class="highlight">電話で審美歯科の診療希望を伝えていただいて、必ず予約のうえ来院</span>ください。
                </p>
                
                <div class="appointment-info__cta">
                    <a href="<?php echo esc_url( home_url( '/access' ) ); ?>" class="btn-section-cta">
                        予約される方はこちら
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 当院の特徴セクション -->
    <section class="clinic-features">
        <div class="clinic-features__container">
            <h2 class="section-title-with-subtitle">
                <span class="section-title-with-subtitle__subtitle">Features</span>
                <span class="section-title-with-subtitle__title">当院の特徴</span>
            </h2>
            
            <div class="clinic-features__content">
                <p class="clinic-features__description">
                    専門的に行っている分野があるからこそ、より良い機材やより良い方法を取り入れ力を入れて取り組んでいる分野と、逆にそうでない分野もあります。
                </p>
                
                <p class="clinic-features__description">
                    当院では審美歯科に力を入れています。それ以外の分野やその他の専門的な分野の患者様は、当院よりも他の歯科医院または専門分野は大学病院への受診をお勧めいたします。
                </p>
                
                <p class="clinic-features__description">
                    当院において力を入れている分野とそうでない分野について参考数値の表です。
                </p>
            </div>
        </div>
    </section>
    
    <!-- テーブルセクション -->
    <section class="clinic-features__table-section">
        <div class="clinic-features__table-container">
            <div class="clinic-features__table-wrapper">
                <div class="clinic-features__table-inner">
                    <table class="clinic-features__table">
                        <tbody>
                            <tr>
                                <td class="clinic-features__table-category">削らないラミネートベニア<br>セラミックベニア</td>
                                <td class="clinic-features__table-rating">
                                    <div class="star-rating">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                                    </div>
                                </td>
                                <td class="clinic-features__table-description">できるだけ削らないラミネートベニアは非常に数多く行っています。</td>
                            </tr>
        <tr>
            <td class="clinic-features__table-category">セラミッククラウン<br>オールセラミック治療</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">セラミックは症例数も多く、レベルの高い技工士と連携して行います。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">ダイレクトボンディング<br>セラミックベニア</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">小さな範囲の審美歯科を行うことができます。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">前歯の審美歯科</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">「低侵襲で体に優しい、健康を犠牲にしない審美歯科」が得意としております。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">側々審美歯科</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">ホワイトニングベニアを提案していますが、セラミッククラウンも高品質で行えます。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">削らない審美歯科</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">数も力も入れて取り組んでいます。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">ホワイトニング</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">多くの症例数を行っています。<br>高品質なホワイトニングを行えます。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">部分的な矯正治療</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">3Dマウスピース矯正が人気です。<br>セラミックとの組み合わせも行っています。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">全体的な矯正治療</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">難症例は大学病院をお勧めします。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">骨格的不正を伴う矯正治療</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">大学病院をお勧めします。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">一般的なインプラント治療</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">インプラント専門での経験はありますが、現在はインプラント専門では行っていません。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">特殊なども伴う<br>インプラント治療</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">難症例は大学病院をお勧めします。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">入れ歯</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">自費の入れ歯は技術の高い専門のラボで製作します。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">予防歯科</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">専門ではありません。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">歯周病予防やスケーリング</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">現在集中していません。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">専門的な歯周病治療</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">大学病院や専門医院をお勧めします。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">専門的な根の治療</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">設備していません。<br>大学病院や専門医院をお勧めします。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">軽微なけする治療<br>虫歯治療</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">現在集中していません。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">親知らずの抜歯</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">大学病院や口腔外科をお勧めします。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">親知らずの抜歯</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">大学病院をお勧めします。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">口臭</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">専門ではありません。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">レーザー治療</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">設備していません。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">口腔粘膜疾患<br>(口内炎、腫瘍、ガンなど)</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">大学病院をお勧めします。</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">治療・薬剤・顎矯管理</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">治療にEPIOSを薬剤を使用しており、高いレベルで取り組んでいます。EPIOS水についてはゴチナ</td>
        </tr>
        <tr>
            <td class="clinic-features__table-category">低価格の料金設定</td>
            <td class="clinic-features__table-rating">
                <div class="star-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star.webp" alt="★" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/star02.webp" alt="☆" class="star-rating__star">
                </div>
            </td>
            <td class="clinic-features__table-description">高品質な治療を安価でできる料金設定にしています。</td>
        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- コンセプトセクション -->
    <section class="concept">
        <div class="concept__container">
            <h2 class="section-title-with-subtitle">
                <span class="section-title-with-subtitle__subtitle">Concept</span>
                <span class="section-title-with-subtitle__title">コンセプト</span>
            </h2>
            
            <div class="concept__content">
                <p class="concept__paragraph">
                    医療法人社団ever 5DENTAL東京銀座では、審美歯科に力を入れています。（審美歯科は保険外（自費）です。）
                </p>
                
                <p class="concept__paragraph">
                    当院では、<span class="highlight">「より低侵襲で体に優しい、健康を犠牲にしないような審美歯科」</span>が望ましいと考えています。
                </p>
                
                <p class="concept__paragraph">
                    審美歯科の選択肢として、ホワイトニングや矯正治療、オールセラミック治療やダイレクトボンディング、削らないラミネートベニアなどの<span class="highlight">「歯をできるだけ削らない方法」で「健康的な方法」</span>を提案します。
                </p>
            </div>
        </div>
    </section>

    <!-- 審美歯科セクション -->
    <section class="aesthetic-dentistry">
        <div class="aesthetic-dentistry__container">
            <div class="aesthetic-dentistry__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/consept-esthetic.webp" alt="審美歯科治療" class="aesthetic-dentistry__image-img">
            </div>
            
            <div class="aesthetic-dentistry__content">
                <div class="aesthetic-dentistry__content-inner">
                    <h2 class="aesthetic-dentistry__title">
                        体に優しい審美歯科
                    </h2>
                    <p class="aesthetic-dentistry__subtitle">
                        Minimally invasive cosmetic dental care
                    </p>
                    
                    <div class="aesthetic-dentistry__text">
                        <p class="aesthetic-dentistry__paragraph">
                            当院では、審美歯科に力を入れています。その中でも、<span class="highlight">「より低侵襲で体に優しい、健康を犠牲にしないような審美歯科」</span>が望ましいと考えています。
                        </p>
                        
                        <p class="aesthetic-dentistry__paragraph">
                            審美歯科の選択肢として、ホワイトニングや矯正治療、オールセラミックやダイレクトボンディング、削らないラミネートベニアなどの<span class="highlight">「歯をできるだけ削らない方法」で「健康的な方法」</span>を提案します。
                        </p>
                        
                        <p class="aesthetic-dentistry__paragraph">
                            また当院では、歯科治療時の痛みに配慮した治療にも積極的に取り組んでいます。症例によって薬や機器・治療法を変え、低侵襲を基本に治療いたします。
                        </p>
                    </div>
                    
                    <div class="aesthetic-dentistry__buttons">
                        <a href="<?php echo esc_url( home_url( '/menu' ) ); ?>" class="btn-section-cta">
                            審美歯科の詳細へ
                        </a>
                        
                        <a href="<?php echo esc_url( home_url( '/no-pain' ) ); ?>" class="btn-section-cta">
                            当院の無痛治療について
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ラミネートベニアセクション -->
    <section class="laminate-veneer">
        <div class="laminate-veneer__container">
            <div class="laminate-veneer__content">
                <div class="laminate-veneer__content-inner">
                    <h2 class="laminate-veneer__title">
                        削らないラミネートベニア
                    </h2>
                    <p class="laminate-veneer__subtitle">
                        Non-prep veneer
                    </p>
                    
                    <div class="laminate-veneer__text">
                        <p class="laminate-veneer__paragraph">
                            <span class="highlight">削らないセラミック</span>の審美歯科を行っています。（もちろん従来法による削って被せるセラミッククラウンも行っていますし、日本でトップランクのセラミック審美歯科技工を手掛けるラボと綿密に連携を取って行っています。）
                        </p>
                        
                        <p class="laminate-veneer__paragraph">
                            セラミッククラウンや従来型のラミネートベニアでは歯を削りセラミックを被せて審美歯科を行っています。削らないラミネートベニアでは<span class="highlight">支台の歯を削らないで極薄の高強度セラミックを貼りつけてセラミックの審美歯科を行える方法</span>です。
                        </p>
                        
                        <p class="laminate-veneer__paragraph">
                            また、削らないラミネートベニアとセラミッククラウンとを組み合わせた治療なども多く行っています。
                        </p>
                    </div>
                    
                    <div class="laminate-veneer__buttons">
                        <a href="<?php echo esc_url( home_url( '/front-ceramic-case' ) ); ?>" class="btn-section-cta">
                            削らないラミネートべニアの詳細へ
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="laminate-veneer__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/consept-venner.webp" alt="削らないラミネートベニア" class="laminate-veneer__image-img">
            </div>
        </div>
    </section>

    <!-- ホワイトニングセクション -->
    <section class="whitening">
        <div class="whitening__container">
            <div class="whitening__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/consept-whitening.webp" alt="ホワイトニング" class="whitening__image-img">
            </div>
            
            <div class="whitening__content">
                <div class="whitening__content-inner">
                    <h2 class="whitening__title">
                        ホワイトニング
                    </h2>
                    <p class="whitening__subtitle">
                        Whitening
                    </p>
                    
                    <div class="whitening__text">
                        <p class="whitening__paragraph">
                            削らない審美歯科の大切なメニューとして、<span class="highlight">オフィスホワイトニングやホームホワイトニングにも力を入れています</span>。
                        </p>
                        
                        <p class="whitening__paragraph">
                            当院では海外ブランドのホワイトニングキット用いています。一般的に行われているホワイトニングよりも<span class="highlight">強くしっかりと効果が期待できます</span>。
                        </p>
                        
                        <p class="whitening__paragraph">
                            セラミックの審美歯科はとてもキレイになるので価値のあるものであると思います。しかしながら、我々は<span class="highlight">「より健康的な方法」で審美歯科を行いたい</span>と考えているので、ホワイトニングだけでも満足できる結果を出せるようにしたいと考えています。
                        </p>
                        
                        <p class="whitening__paragraph">
                            セラミックやダイレクトボンディングの審美歯科においても、<span class="highlight">ホワイトニングと組み合わせた治療計画</span>を常に行っています。
                        </p>
                        
                        <p class="whitening__paragraph">
                            ホワイトニングだけでは限界があるのは事実ですが、ホワイトニングサロンや以前のホワイトニングで満足できなかった方など、当院では結果が出せる可能性があります。（ホワイトニングサロンなどとは薬剤が違います。）
                        </p>
                        
                        <p class="whitening__paragraph">
                            当院では<span class="highlight">一般的には難しいとされている失活歯やテトラサイクリン歯についてもホワイトニングで改善している症例</span>があります。
                        </p>
                    </div>
                    
                    <div class="whitening__buttons">
                        <a href="<?php echo esc_url( home_url( '/whitening' ) ); ?>" class="btn-section-cta">
                            ホワイトニングの詳細へ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3Dデジタルマウスピース矯正セクション -->
    <section class="laminate-veneer">
        <div class="laminate-veneer__container">
            <div class="laminate-veneer__content">
                <div class="laminate-veneer__content-inner">
                    <h2 class="laminate-veneer__title">
                        3Dデジタルマウスピース矯正
                    </h2>
                    <p class="laminate-veneer__subtitle">
                        Orthodontics
                    </p>
                    
                    <div class="laminate-veneer__text">
                        <p class="laminate-veneer__paragraph">
                            3Dデジタルマウスピース矯正で目立たない矯正治療を行いたいといった患者様が多いように感じます。またマウスピース矯正で対応できないケースにおいては<span class="highlight">表側ワイヤー矯正や裏側ワイヤー矯正で対応する</span>ことも行っています。
                        </p>
                        
                        <p class="laminate-veneer__paragraph">
                            矯正治療のリスクについて、医院によっては説明が十分に行われていないことがあるようですが、成人の矯正治療では矯正治療によって歯の支え（歯根や歯周組織）が大きくダメージします。また矯正治療には必ず後戻りがあります。
                        </p>
                        
                        <p class="laminate-veneer__paragraph">
                            成人の矯正治療では、<span class="highlight">歯の移動量を最小限にし矯正期間を短く治療計画し矯正のダメージを最小限にしたい</span>と考えます。
                        </p>
                        
                        <p class="laminate-veneer__paragraph">
                            3Dデジタル矯正では<span class="highlight">3次元的なコンピューター診断でより効率的な治療計画をより具体的に行う</span>ことができます。
                        </p>
                        
                        <p class="laminate-veneer__paragraph">
                            前歯の歯並びをセラミッククラウンで改善することは可能です。しかし矯正治療の方が望ましいケースも多いです。
                        </p>
                        
                        <p class="laminate-veneer__paragraph">
                            また、上前歯の虫歯はセラミックで治して下の歯並びは矯正治療で治すなど、<span class="highlight">セラミックの審美歯科と3Dデジタル矯正を組み合わせて行うことで、より効率的な満足度の高い治療を行うことができる</span>ケースもあります。
                        </p>
                    </div>
                    
                    <div class="laminate-veneer__buttons">
                        <a href="<?php echo esc_url( home_url( '/orthodontics' ) ); ?>" class="btn-section-cta">
                            審美矯正の詳細はこちら
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="laminate-veneer__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/concept-orthodontics02.webp" alt="3Dデジタルマウスピース矯正" class="laminate-veneer__image-img">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>