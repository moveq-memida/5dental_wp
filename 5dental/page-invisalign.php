<?php
/**
 * Template Name: インビザライン
 * Description: インビザラインのページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <section class="invisalign-fv">
        <div class="invisalign-fv__container">
            <div class="invisalign-fv__bg-text">Invisalign</div>
            
            <div class="invisalign-fv__content">
                <h1 class="invisalign-fv__title">インビザライン</h1>
                
                <nav class="invisalign-fv__breadcrumb">
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
                            <li class="breadcrumb__item">
                                <a href="<?php echo esc_url( home_url( '/orthodontics' ) ); ?>" class="breadcrumb__link">
                                    <span class="breadcrumb__text">矯正歯科</span>
                                </a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--current">
                                <span class="breadcrumb__text">インビザライン</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <section class="invisalign-content">
        <div class="invisalign-content__container">
            <main class="invisalign-content__main">
                <div class="invisalign-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/invisalign/invisalign.webp" alt="インビザライン" class="invisalign-content__hero-img">
                </div>

                <h1 class="orthodontics-content__main-title">東京でインビザライン（マウスピース矯正）を考えているなら5DENTAL TOKYO GINZA へ</h1>

                <section class="invisalign-content__section">
                    <h3 class="h3-gray-bg">インビザラインとは？</h3>
                    <div class="invisalign-content__section-content">
                        <div class="invisalign-visual">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/invisalign/invisalign-visual.webp" alt="インビザライン マウスピース" class="invisalign-visual__img">
                        </div>

                        <div class="invisalign-content__text-content">
                            <p class="invisalign-content__text">
                                インビザラインとは<span class="highlight">アメリカのアライン・テクノロジー社によるマウスピース型の矯正装置</span>のことです。2006年頃から日本でも普及し始めました。
                            </p>
                            <p class="invisalign-content__text">
                                以前から手作業技工によるマウスピース矯正はありましたが、インビザラインは現在では主流の3Dデジタルマウスピース矯正のパイオニアです。マウスピース矯正において最も多くのシェアと特許技術を持っていると言われる<span class="highlight">No.1の実績あるブランド</span>です。
                            </p>
                        </div>
                    </div>
                </section>

                <section class="invisalign-content__section">
                    <h3 class="h3-gray-bg">インビザラインのメリット</h3>
                    <div class="invisalign-content__section-content">
                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">マウスピースの材質が使いやすい</h4>
                            <p class="invisalign-merit__text">
                                他のマウスピース矯正に比べてマウスピースの材質が優秀で、<span class="highlight">柔らかく優しい矯正力なので痛みやトラブルが少ない</span>と言われています。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">装着していても目立たない</h4>
                            <p class="invisalign-merit__text">
                                <span class="highlight">薄く透明なマウスピース</span>なので従来のワイヤー矯正装置に比べて、矯正治療期間中も装置が目立ちにくいです。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">部分矯正が有利</h4>
                            <p class="invisalign-merit__text">
                                従来のワイヤー矯正と異なり<span class="highlight">3Dデジタルで治療を設計</span>するので、余計や矯正力やダメージをかからないので、<span class="highlight">前歯や見える範囲だけなどの部分矯正が有利</span>に行えます。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">大切なイベントの時は外すことができる</h4>
                            <p class="invisalign-merit__text">
                                試験や結婚式、証明写真の撮影、など<span class="highlight">大切なイベントの時には、マウスピースを外すこともできます</span>。数ヶ月後先の大切なイベントを気にせず、いつでも誰でも矯正を始めることができます。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">いつも通りに歯磨きができる</h4>
                            <p class="invisalign-merit__text">
                                従来のワイヤー矯正では食事や歯磨きの時に不自由がありましたが、食事と歯磨きの時にはマウスピースを外すことができるので、矯正期間中の虫歯のリスクや食事や歯磨きの不自由がありません。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">金属アレルギーの方でも問題ありません</h4>
                            <p class="invisalign-merit__text">
                                <span class="highlight">マウスピースには金属は含まれていません</span>ので、金属アレルギーの方も安心して使うことができます。また、金属アレルギーでない人が矯正によって金属アレルギーになる心配もありません。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">長期の矯正にも対応できる</h4>
                            <p class="invisalign-merit__text">
                                インビザラインは成長期や乳歯の生え変わり期の患者様では、まだ生えていない永久歯や萌出途中の永久歯には、<span class="highlight">永久歯が萌出するスペースを確保するための仕組み</span>があり年齢に応じて対応することができます。
                            </p>
                        </div>
                    </div>
                </section>

                <section class="invisalign-content__section">
                    <h3 class="h3-gray-bg">インビザラインのデメリット</h3>
                    <div class="invisalign-content__section-content">
                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">自己管理ができないと治療が遅れる</h4>
                            <p class="invisalign-merit__text">
                                マウスピースは毎日<span class="highlight">22時間以上の装着が必要</span>です。食事と歯磨きの時以外は、ほぼ装着することになります。自由に外せることはメリットですが、時間を守って装着しないと治療が遅れることがあります。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">インビザラインだけでは適用できない症例がある</h4>
                            <p class="invisalign-merit__text">
                                マウスピースで動かすことができるのは歯と歯根のみです。骨格性の不正咬合などにはインビザラインだけでは対応できません。
                            </p>
                        </div>
                    </div>
                </section>

            </main>

            <?php get_template_part( 'template-parts/sidebar', 'service' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>