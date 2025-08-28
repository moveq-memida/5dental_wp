<?php
/**
 * Template Name: ホワイトニング
 * Description: ホワイトニング治療のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="orthodontics-fv">
        <div class="orthodontics-fv__container">
            <!-- 背景テキスト "Whitening" -->
            <div class="orthodontics-fv__bg-text">Whitening</div>
            
            <!-- コンテンツエリア -->
            <div class="orthodontics-fv__content">
                <!-- メインタイトル "ホワイトニング" -->
                <h1 class="orthodontics-fv__title">ホワイトニング</h1>
                
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
                            <li class="breadcrumb__item">
                                <a href="<?php echo esc_url( home_url( '/menu' ) ); ?>" class="breadcrumb__link">
                                    <span class="breadcrumb__text">診療メニュー</span>
                                </a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--current">
                                <span class="breadcrumb__text">ホワイトニング</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <!-- メインコンテンツセクション -->
    <section class="orthodontics-content">
        <div class="orthodontics-content__container">
            <!-- メインコンテンツエリア -->
            <main class="orthodontics-content__main">
                <!-- ホワイトニング画像 -->
                <div class="orthodontics-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whitening/whitening.webp" alt="ホワイトニング" class="orthodontics-content__hero-img">
                </div>

                <!-- ホワイトニングタイトル -->
                <h1 class="orthodontics-content__main-title">歯を削らずに理想の白さへ。銀座クオリティのホワイトニングで自然な美しさを。</h1>

                <!-- ホワイトニング治療の説明 -->
                <div class="orthodontics-content__description">
                    <p class="orthodontics-content__text">
                        銀座という上質な立地にふさわしい高品質なホワイトニングを提供しています。歯を削ることなく、薬剤の力で歯の内部から白くしていく治療法です。
                    </p>
                    <p class="orthodontics-content__text">
                        当院では、患者さまのライフスタイルやご希望に合わせて、オフィスホワイトニング、ホームホワイトニング、そしてデュアルホワイトニング（オフィス＋ホーム）をご用意しています。
                    </p>
                    <p class="orthodontics-content__text">
                        安全性の高い薬剤を使用し、経験豊富な歯科医師・歯科衛生士が施術を行いますので、安心してお任せください。
                    </p>
                </div>

                <!-- 当院のホワイトニング -->
                <h3 class="h3-gray-bg">当院のホワイトニング</h3>
                
                <!-- オフィスホワイトニング -->
                <div class="orthodontics-stage">
                    <div class="orthodontics-stage__header">
                        <h4 class="h4-left-line">オフィスホワイトニング</h4>
                    </div>
                    <div class="orthodontics-stage__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whitening/whitening_12.webp" alt="オフィスホワイトニング" class="orthodontics-stage__img">
                    </div>
                    <div class="orthodontics-stage__text">
                        <p class="orthodontics-content__text">
                            <span class="highlight">1回の施術で効果を実感、即効性重視の方におすすめ</span>
                        </p>
                        <p class="orthodontics-content__text">
                            歯科医院で行うホワイトニングです。高濃度の薬剤を使用し、専用の光を照射することで短時間で歯を白くします。1回の施術で効果を実感でき、忙しい方におすすめです。
                        </p>
                    </div>
                </div>

                <!-- ホームホワイトニング -->
                <div class="orthodontics-stage">
                    <div class="orthodontics-stage__header">
                        <h4 class="h4-left-line">ホームホワイトニング</h4>
                    </div>
                    <div class="orthodontics-stage__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whitening/whitening_13.webp" alt="ホームホワイトニング" class="orthodontics-stage__img">
                    </div>
                    <div class="orthodontics-stage__text">
                        <p class="orthodontics-content__text">
                            <span class="highlight">ご自宅で手軽に、自然な白さを長期間維持</span>
                        </p>
                        <p class="orthodontics-content__text">
                            ご自宅で行うホワイトニングです。オーダーメイドのマウスピースに薬剤を入れて装着します。低濃度の薬剤を使用するため刺激が少なく、自然な白さを長期間維持できます。
                        </p>
                    </div>
                </div>

                <!-- デュアルホワイトニング -->
                <div class="orthodontics-stage">
                    <div class="orthodontics-stage__header">
                        <h4 class="h4-left-line">デュアルホワイトニング</h4>
                    </div>
                    <div class="orthodontics-stage__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whitening/whitening_14.webp" alt="デュアルホワイトニング" class="orthodontics-stage__img">
                    </div>
                    <div class="orthodontics-stage__text">
                        <p class="orthodontics-content__text">
                            <span class="highlight">オフィス＋ホームの併用で最高の効果と持続性を実現</span>
                        </p>
                        <p class="orthodontics-content__text">
                            オフィスホワイトニングとホームホワイトニングを組み合わせた方法です。短期間で理想の白さを実現し、長期間その効果を維持できる最も効果的な方法です。
                        </p>
                    </div>
                </div>

                <!-- ホワイトニングの流れ -->
                <section class="orthodontics-content__section">
                    <h3 class="h3-gray-bg">ホワイトニングの治療の流れ</h3>
                    <div class="orthodontics-content__section-content">
                        <!-- 治療流れの画像 -->
                        <div class="orthodontics-flow">
                            <div class="orthodontics-flow__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whitening/orthodontics-flow.webp" alt="ホワイトニングの治療の流れ" class="orthodontics-flow__img">
                            </div>
                        </div>

                        <!-- ステップ1: カウンセリング・診査 -->
                        <div class="orthodontics-stage">
                            <div class="orthodontics-stage__header">
                                <h4 class="h4-left-line">step1. カウンセリング・診査</h4>
                            </div>
                            <div class="orthodontics-stage__text">
                                <p class="orthodontics-content__text">
                                    現在の歯の状態を詳しく診査し、ホワイトニングに適しているかどうかを確認します。患者さまのご希望やライフスタイルをお聞きして、最適なホワイトニング方法をご提案します。
                                </p>
                            </div>
                        </div>

                        <!-- ステップ2: 歯のクリーニング -->
                        <div class="orthodontics-stage">
                            <div class="orthodontics-stage__header">
                                <h4 class="h4-left-line">step2. 歯のクリーニング</h4>
                            </div>
                            <div class="orthodontics-stage__text">
                                <p class="orthodontics-content__text">
                                    ホワイトニング効果を最大限に発揮するため、歯の表面の汚れや歯石を除去し、クリーニングを行います。きれいな状態でホワイトニングを開始することが重要です。
                                </p>
                            </div>
                        </div>

                        <!-- ステップ3: 施術・マウスピース製作 -->
                        <div class="orthodontics-stage">
                            <div class="orthodontics-stage__header">
                                <h4 class="h4-left-line">step3. 施術・マウスピース製作</h4>
                            </div>
                            <div class="orthodontics-stage__text">
                                <p class="orthodontics-content__text">
                                    オフィスホワイトニングの場合は薬剤を塗布し、専用ライトを照射します。ホームホワイトニングの場合は、オーダーメイドのマウスピースを製作し、使用方法をご説明します。
                                </p>
                            </div>
                        </div>

                        <!-- ステップ4: ホワイトニング開始 -->
                        <div class="orthodontics-stage">
                            <div class="orthodontics-stage__header">
                                <h4 class="h4-left-line">step4. ホワイトニング開始</h4>
                            </div>
                            <div class="orthodontics-stage__text">
                                <p class="orthodontics-content__text">
                                    オフィスホワイトニングは約60分の施術を行います。ホームホワイトニングは専用のマウスピースにジェルを入れて、1日数時間装着していただきます。
                                </p>
                            </div>
                        </div>

                        <!-- ステップ5: アフターケア -->
                        <div class="orthodontics-stage">
                            <div class="orthodontics-stage__header">
                                <h4 class="h4-left-line">step5. アフターケア</h4>
                            </div>
                            <div class="orthodontics-stage__text">
                                <p class="orthodontics-content__text">
                                    ホワイトニング後の注意事項をご説明し、効果を長持ちさせるためのケア方法をお伝えします。定期的なメンテナンスで美しい白さを維持できます。
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ホワイトニングの効果とメリット -->
                <section class="orthodontics-content__section">
                    <div class="orthodontics-content__section-content">
                        <h3 class="h3-gray-bg">ホワイトニングの効果とメリット</h3>
                        
                        <div class="orthodontics-detail__text-content">
                            <p class="orthodontics-content__text">
                                ホワイトニングは歯を削ることなく、薬剤の力で歯を白くする安全で効果的な治療法です。適切な施術とアフターケアにより、自然で美しい白さを実現できます。
                            </p>
                            <p class="orthodontics-content__text">
                                銀座という立地にふさわしい上質なホワイトニングを提供し、患者さまの笑顔に自信をお持ちいただけるよう、丁寧な施術を心がけています。
                            </p>
                        </div>

                        <div class="orthodontics-detail__subsection">
                            <h4 class="h4-left-line">ホワイトニングのメリット</h4>
                            
                            <div class="orthodontics-detail__text-content">
                                <p class="orthodontics-content__text">
                                    ・歯を削らずに白くできる安全な治療法<br>
                                    ・即効性があり、短期間で効果を実感<br>
                                    ・自然な白さで美しい笑顔を演出<br>
                                    ・適切なケアで長期間効果を維持<br>
                                    ・清潔感のある印象で自信もアップ
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- 料金表 -->
                <section class="orthodontics-content__section">
                    <h3 class="h3-gray-bg">料金表</h3>
                    <div class="orthodontics-content__section-content">
                        <!-- ホワイトニング料金 -->
                        <div class="orthodontics-price">
                            <h4 class="h4-left-line">ホワイトニング</h4>
                            
                            <div class="orthodontics-price__table">
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">オフィスホワイトニング（1回）</div>
                                    <div class="orthodontics-price__cost">33,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">オフィスホワイトニング（3回コース）</div>
                                    <div class="orthodontics-price__cost">88,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">ホームホワイトニング（上下）</div>
                                    <div class="orthodontics-price__cost">44,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">デュアルホワイトニング</div>
                                    <div class="orthodontics-price__cost">110,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">ホワイトニングジェル追加（1本）</div>
                                    <div class="orthodontics-price__cost">2,200円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">マウスピース再製作（片顎）</div>
                                    <div class="orthodontics-price__cost">11,000円（税込）</div>
                                </div>
                            </div>
                        </div>

                        <!-- 注意事項 -->
                        <div class="orthodontics-price__notes">
                            <p class="orthodontics-content__text">
                                ホワイトニングの効果には個人差があります。歯の状態によってはホワイトニングに適さない場合もございます。
                            </p>
                            <p class="orthodontics-content__text">
                                施術後24〜48時間は着色しやすい飲食物（コーヒー、紅茶、赤ワイン、カレーなど）の摂取をお控えください。
                            </p>
                            <p class="orthodontics-content__text">
                                妊娠中・授乳中の方、18歳未満の方はホワイトニングをお受けいただけません。
                            </p>
                            <p class="orthodontics-content__text">
                                虫歯や歯周病がある場合は、先にそちらの治療を行ってからホワイトニングを実施します。
                            </p>
                            <p class="orthodontics-content__text">
                                ホワイトニング効果を長持ちさせるため、定期的なメンテナンスをおすすめしています。
                            </p>
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