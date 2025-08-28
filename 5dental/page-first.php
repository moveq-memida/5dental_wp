<?php
/**
 * Template Name: 初診の流れ
 * Description: 初診の流れのページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<style>
/* 初診の流れページのスタイル */
.first-visit-flow {
    padding: 80px 0;
}

.first-visit-flow__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.first-visit-flow__title {
    text-align: center;
    margin-bottom: 80px;
}

.first-visit-flow__main-title {
    color: #737484;
    font-family: "Zen Old Mincho";
    font-size: 2.25rem; /* 36px */
    font-weight: 700;
    line-height: 1.35;
    letter-spacing: 0.1125rem; /* 1.8px */
    margin-bottom: 10px;
}

.first-visit-flow__subtitle {
    color: rgba(115, 116, 132, 0.2);
    font-family: "Pinyon Script", cursive;
    font-size: 2.5rem; /* 40px */
    line-height: 0.5;
    font-style: italic;
}

.first-visit-flow__step {
    margin-bottom: 120px;
}

.first-visit-flow__step:last-child {
    margin-bottom: 0;
}

.first-visit-flow__step-title {
    color: #737484;
    font-family: "Zen Old Mincho";
    font-size: 1.875rem; /* 30px */
    font-weight: 700;
    line-height: 1.35;
    letter-spacing: 0.09375rem; /* 1.5px */
    text-align: center;
    margin-bottom: 40px;
}

.first-visit-flow__content {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    max-width: 900px;
    margin: 0 auto;
}

.first-visit-flow__image {
    flex: 1;
}

.first-visit-flow__image img {
    width: 100%;
    height: auto;
}

.first-visit-flow__text {
    flex: 1;
}

.first-visit-flow__description {
    color: #595A5D;
    font-family: "Zen Old Mincho";
    font-size: 1rem; /* 16px */
    font-weight: 400;
    line-height: 1.5;
    letter-spacing: 0.02rem; /* 0.32px */
    margin-bottom: 1rem;
}

.first-visit-flow__description:last-child {
    margin-bottom: 0;
}


/* レスポンシブ */
@media (max-width: 768px) {
    .first-visit-flow {
        padding: 60px 0;
    }
    
    .first-visit-flow__main-title {
        font-size: 1.75rem; /* 28px */
    }
    
    .first-visit-flow__step-title {
        font-size: 1.5rem; /* 24px */
    }
    
    .first-visit-flow__content {
        flex-direction: column;
        gap: 20px;
    }
    
    
    .first-visit-flow__image {
        width: 100%;
    }
}
</style>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="orthodontics-fv">
        <div class="orthodontics-fv__container">
            <!-- 背景テキスト "First Visit" -->
            <div class="orthodontics-fv__bg-text">First Visit</div>
            
            <!-- コンテンツエリア -->
            <div class="orthodontics-fv__content">
                <!-- メインタイトル "初診の流れ" -->
                <h1 class="orthodontics-fv__title">初診の流れ</h1>
                
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
                                <span class="breadcrumb__text">初診の流れ</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <!-- メインコンテンツセクション -->
    <section class="first-visit-flow">
        <div class="first-visit-flow__container">
            <!-- タイトル -->
            <div class="first-visit-flow__title">
                <h2 class="first-visit-flow__main-title">初診の流れ</h2>
                <p class="first-visit-flow__subtitle">Steps</p>
            </div>

            <!-- Step 1: 予診表をご記入いただきます -->
            <div class="first-visit-flow__step">
                <h3 class="first-visit-flow__step-title">step1. 予診表をご記入いただきます</h3>
                <div class="first-visit-flow__content">
                    <div class="first-visit-flow__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/first_01.webp" alt="予診表記入" loading="lazy">
                    </div>
                    <div class="first-visit-flow__text">
                        <p class="first-visit-flow__description">
                            適切な治療を施すには正確な診断が必要です。患者様の症状を明確に把握するため、できるだけ詳しくご記入ください。
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 2: 問診をじっくり実施いたします -->
            <div class="first-visit-flow__step">
                <h3 class="first-visit-flow__step-title">step2. 問診をじっくり実施いたします</h3>
                <div class="first-visit-flow__content">
                    <div class="first-visit-flow__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/first_02.webp" alt="問診" loading="lazy">
                    </div>
                    <div class="first-visit-flow__text">
                        <p class="first-visit-flow__description">
                            お部屋にご案内し、簡単な問診をさせていただきます。
                        </p>
                        <p class="first-visit-flow__description">
                            どのようなことが気になっているのか？<br>
                            どういう風にキレイにしていきたいのか？<br>
                            どのような治療を希望されているのか？<br>
                            など詳しくお聞かせください。
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 3: Ｘ線撮影や歯科用ＣＴ撮影を診断を進めていきます -->
            <div class="first-visit-flow__step">
                <h3 class="first-visit-flow__step-title">step3. Ｘ線撮影や歯科用ＣＴ撮影を診断を進めていきます</h3>
                <div class="first-visit-flow__content">
                    <div class="first-visit-flow__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/first_03.webp" alt="X線撮影・CT撮影" loading="lazy">
                    </div>
                    <div class="first-visit-flow__text">
                        <p class="first-visit-flow__description">
                            目では見えない歯の状態、歯の形などを診るため、必要に応じて別室での歯の全体のＸ線撮影や歯科用ＣＴ撮影を行います。
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 4: カウンセリング -->
            <div class="first-visit-flow__step">
                <h3 class="first-visit-flow__step-title">step4. カウンセリング</h3>
                <div class="first-visit-flow__content">
                    <div class="first-visit-flow__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/first_04.webp" alt="カウンセリング" loading="lazy">
                    </div>
                    <div class="first-visit-flow__text">
                        <p class="first-visit-flow__description">
                            検査の結果をもとに、治療計画について担当医が説明いたします。その際は些細なことでもご不明点はご質問ください。
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 5: 治療を開始いたします -->
            <div class="first-visit-flow__step">
                <h3 class="first-visit-flow__step-title">step5. 治療を開始いたします</h3>
                <div class="first-visit-flow__content">
                    <div class="first-visit-flow__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/first_05.webp" alt="治療開始" loading="lazy">
                    </div>
                    <div class="first-visit-flow__text">
                        <p class="first-visit-flow__description">
                            一番痛むところ、進行しているところから治療を開始いたします。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>