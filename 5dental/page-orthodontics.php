<?php
/**
 * Template Name: 矯正歯科
 * Description: 3Dデジタルマウスピース矯正(歯列矯正)のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <section class="orthodontics-fv">
        <div class="orthodontics-fv__container">
            <div class="orthodontics-fv__bg-text">Orthodontics</div>
            
            <div class="orthodontics-fv__content">
                <h1 class="orthodontics-fv__title">矯正歯科</h1>
                
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
                                <span class="breadcrumb__text">矯正歯科</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <section class="orthodontics-content">
        <div class="orthodontics-content__container">
            <main class="orthodontics-content__main">
                <div class="orthodontics-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orthodontics/orthodontics.webp" alt="矯正歯科" class="orthodontics-content__hero-img">
                </div>

                <h1 class="orthodontics-content__main-title">前歯だけ？短期間で？審美的に？3Dデジタルマウスピース矯正でご希望に合わせた矯正計画を。</h1>

                <div class="orthodontics-content__description">
                    <p class="orthodontics-content__text">
                        <span class="highlight">大人の矯正治療は矯正専門歯科だけでは対応できない</span>と言われています。一般歯科、審美歯科との連携が必要になります。
                    </p>
                    <p class="orthodontics-content__text">
                        大人の矯正治療はメリットだけではありません。必ず歯の支えなどにダメージがあります。前歯だけの矯正や部分的矯正を行うことも一般歯科や審美歯科と組み合わせることも、当院では患者様ごとに<span class="highlight">効率的でダメージの少ない現実的な治療計画</span>を提案できます。
                    </p>
                    <p class="orthodontics-content__text">
                        当院では iTero スキャンや インビザライン、インビザライン GO、クリアコレクトや表側ワイヤー矯正、裏側ワイヤー矯正などを扱っています。
                    </p>
                </div>

                <h3 class="h3-gray-bg">当院の3Dデジタル矯正</h3>
                
                <div class="orthodontics-stage">
                    <div class="orthodontics-stage__header">
                        <h4 class="h4-left-line">インビザライン GO</h4>
                    </div>
                    <div class="orthodontics-stage__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orthodontics/invisalign-go.webp" alt="インビザライン GO" class="orthodontics-stage__img">
                    </div>
                    <div class="orthodontics-stage__text">
                        <p class="orthodontics-content__text">
                            <span class="highlight">前歯エリアの審美矯正、6ヶ月プランのスピード矯正</span>
                        </p>
                        <p class="orthodontics-content__text">
                            インビザラインGOシステムは、インビザラインにAIを導入して、前歯の審美矯正・部分矯正がより効率的で、よりスピーディーに矯正できるインビザラインの新しいシステムです。6ヶ月のスピード矯正プランです。
                        </p>
                        <a href="<?php echo esc_url( home_url( '/invisalign-go' ) ); ?>" class="btn-section-cta">invisalign go 詳細ページ</a>
                    </div>
                </div>

                <div class="orthodontics-stage">
                    <div class="orthodontics-stage__header">
                        <h4 class="h4-left-line">インビザライン</h4>
                    </div>
                    <div class="orthodontics-stage__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orthodontics/invisalign.webp" alt="インビザライン" class="orthodontics-stage__img">
                    </div>
                    <div class="orthodontics-stage__text">
                        <p class="orthodontics-content__text">
                            <span class="highlight">マウスピース矯正実績No,1</span>
                        </p>
                        <p class="orthodontics-content__text">
                            インビザラインは、最近になって爆発的に普及してきている、マウスピース矯正システムの中でも最も実績があるトップブランドです。他のマウスピース矯正よりも多くの技術が組み込まれたプログラムで設計できる矯正システムです。マウスピースに弾力があり柔らかく、痛みが少ない特長があります。
                        </p>
                        <a href="<?php echo esc_url( home_url( '/invisalign' ) ); ?>" class="btn-section-cta">invisalign 詳細ページ</a>
                    </div>
                </div>

                <div class="orthodontics-stage">
                    <div class="orthodontics-stage__header">
                        <h4 class="h4-left-line">クリアコレクト</h4>
                    </div>
                    <div class="orthodontics-stage__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orthodontics/claercorrect.webp" alt="クリアコレクト" class="orthodontics-stage__img">
                    </div>
                    <div class="orthodontics-stage__text">
                        <p class="orthodontics-content__text">
                            <span class="highlight">低価格、薄くて目立ちにくい</span>
                        </p>
                        <p class="orthodontics-content__text">
                            インビザラインの後発ブランドですが、歯科の最大手企業ストローマンのマウスピース矯正です。インビザラインよりもマウスピースが薄く適合がタイトで、目立ちにくい特長があります。
                        </p>
                        <a href="<?php echo esc_url( home_url( '/clearcorrect' ) ); ?>" class="btn-section-cta">clearcorrect 詳細ページ</a>
                    </div>
                </div>

                <div class="orthodontics-stage">
                    <div class="orthodontics-stage__header">
                        <h4 class="h4-left-line">ワイヤー矯正</h4>
                    </div>
                    <div class="orthodontics-stage__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orthodontics/wire-braces.webp" alt="ワイヤー矯正" class="orthodontics-stage__img">
                    </div>
                    <div class="orthodontics-stage__text">
                        <p class="orthodontics-content__text">
                            表側ワイヤー矯正や裏側ワイヤー矯正、ワイヤー矯正とマウスピース矯正の組み合わせ矯正などの様々なケースに対応します。
                        </p>
                    </div>
                </div>

                <h3 class="h3-gray-bg">マウスピース矯正専用3Dデジタルスキャナー「iTero」</h3>
                
                <div class="itero-section">
                    <div class="itero-section__hero">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orthodontics/itero.webp" alt="iTero 3Dデジタルスキャナー" class="itero-section__hero-img">
                    </div>
                    
                    <div class="itero-section__content">
                        <p class="itero-section__text">
                            当院は、よりスピーディーかつ正確に矯正治療を提供するため、iTero最新モデルを導入しております。
                        </p>
                        
                        <a href="<?php echo esc_url( home_url( '/itero' ) ); ?>" class="btn-section-cta">iTero 詳細ページへ</a>
                    </div>
                </div>

                <section class="orthodontics-content__section">
                    <div class="orthodontics-content__section-content">
                        <h3 class="h3-gray-bg">矯正治療はメリットだけではありません。</h3>
                        
                        <div class="orthodontics-detail__text-content">
                            <p class="orthodontics-content__text">
                                <span class="highlight">大人の矯正治療は矯正専門歯科だけでは対応できない</span>と言われています。一般歯科、審美歯科との連携が必要になります。
                            </p>
                            <p class="orthodontics-content__text">
                                成人矯正では矯正でかかる力と矯正の期間で、歯の支えとなる歯根と歯周組織が必ずダメージを受けます。成長の完成した歯列に対する矯正治療は歯根や歯周組織に対するダメージになるため、必ずしも大規模な矯正治療や長期間の矯正治療が理想的ではありません。
                            </p>
                            <p class="orthodontics-content__text">
                                ご自身の改善したい部分や気になっている部分が前歯だけであったり部分的であったりする場合には、部分矯正で矯正治療のダメージが最小限にできるように効率的に短期間で行えるように治療計画を配慮し、健康的で現実的な治療計画を提案できます。
                            </p>
                        </div>

                        <div class="orthodontics-detail__subsection">
                            <h4 class="h4-left-line">3Dデジタルマウスピース矯正のメリット</h4>
                            
                            <div class="orthodontics-detail__text-content">
                                <p class="orthodontics-content__text">
                                    3Dデジタルマウスピース矯正は、細かな矯正力を発揮させたり、矯正移動のコントロールができたりするので、部分的な歯並びを安定して矯正することができます。
                                </p>
                                <p class="orthodontics-content__text">
                                    具体的には、インビザラインGOシステムは咬合の基盤になる大臼歯の咬合を温存しアンカー（矯正治療の支え）とすることで、前歯部から小臼歯部の露出（デコボコ並び）をより効率的にスピーディーに動かすことができる前歯の審美矯正・部分矯正に特化したシステムです。
                                </p>
                                <p class="orthodontics-content__text">
                                    このインビザラインGOシステムは、マウスピース矯正の最先端システムのインビザラインに、コンピューターAIの技術を導入したインビザラインの次世代システムです。インビザラインの膨大なビックデータをもとにプログラムされたAIが矯正治療をより効率的に治療計画します。
                                </p>
                                <p class="orthodontics-content__text">
                                    従来のプログラムよりもより効率的に早く、そして低価格で矯正治療を行うことができるシステムです。インビザラインGOシステムはインビザラインに比べて前歯の審美矯正や部分的な矯正治療に適しています。
                                </p>
                            </div>
                        </div>

                        <a href="<?php echo esc_url( home_url( '/adult' ) ); ?>" class="btn-section-cta">大人の矯正のメリット・<br>デメリットへ</a>
                    </div>
                </section>

                <section class="orthodontics-content__section">
                    <h3 class="h3-gray-bg">3Dデジタルマウスピース矯正の治療の流れ</h3>
                    <div class="orthodontics-content__section-content">
                        <div class="orthodontics-flow">
                            <div class="orthodontics-flow__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orthodontics/orthodontics-flow.webp" alt="3Dデジタルマウスピース矯正の治療の流れ" class="orthodontics-flow__img">
                            </div>
                        </div>

                        <div class="orthodontics-stage">
                            <div class="orthodontics-stage__header">
                                <h4 class="h4-left-line">step1. 問診カウンセリング</h4>
                            </div>
                            <div class="orthodontics-stage__text">
                                <p class="orthodontics-content__text">
                                    通常の歯科治療と同様に、問診や口腔内検査を行います。ご説明用に撮影したお写真をご覧いただき、現在の状態や治療方法等をご説明させていただきます。
                                </p>
                            </div>
                        </div>

                        <div class="orthodontics-stage">
                            <div class="orthodontics-stage__header">
                                <h4 class="h4-left-line">step2. 矯正診断</h4>
                            </div>
                            <div class="orthodontics-stage__text">
                                <p class="orthodontics-content__text">
                                    お顔や口腔内の写真撮影、歯の型取りを行い、そのデータを元に3Dデジタルの治療計画ができあがります。コンピューターを使用することで、正確な矯正力のベクトルを可能にし、治療期間からどのように歯並びがきれいになっていくのかをイメージすることができます。この診断結果に基づいて治療期間と費用をお伝えします。
                                </p>
                            </div>
                        </div>

                        <div class="orthodontics-stage">
                            <div class="orthodontics-stage__header">
                                <h4 class="h4-left-line">step3. 矯正用マウスピースを制作</h4>
                            </div>
                            <div class="orthodontics-stage__text">
                                <p class="orthodontics-content__text">
                                    治療計画に従いオーダーメイドの矯正用マウスピースを製作します。製作には約3週間かかります。
                                </p>
                            </div>
                        </div>

                        <div class="orthodontics-stage">
                            <div class="orthodontics-stage__header">
                                <h4 class="h4-left-line">step4. 矯正治療開始</h4>
                            </div>
                            <div class="orthodontics-stage__text">
                                <p class="orthodontics-content__text">
                                    製作したマウスピースの使用方法・注意事項等を説明させていただき、矯正治療を開始します。
                                </p>
                            </div>
                        </div>

                        <div class="orthodontics-stage">
                            <div class="orthodontics-stage__header">
                                <h4 class="h4-left-line">step5. 経過観察</h4>
                            </div>
                            <div class="orthodontics-stage__text">
                                <p class="orthodontics-content__text">
                                    治療開始後、経過チェックや調整、クリーニングのため定期的にご来院いただきます。最終的に歯並びが綺麗になりましたら、リテーナーと呼ばれる後戻り防止用のマウスピースを装着していただきます。
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="orthodontics-content__section">
                    <h3 class="h3-gray-bg">3Dデジタル矯正の紹介動画</h3>
                    <div class="orthodontics-content__section-content">
                        <p class="orthodontics-content__text">
                            以下にご紹介ビデオを掲載いたしました。もしよろしければご覧くださいませ。
                        </p>

                        <div class="orthodontics-videos">
                            <div class="orthodontics-videos__item">
                                <div class="orthodontics-videos__wrapper">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Jv8oipV7iHQ?si=VfWGK4scNJhGBMNX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="orthodontics-videos__item">
                                <div class="orthodontics-videos__wrapper">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/DY1_gK1JkAk?si=MJgpWRI6tCfJLaTg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
   
                            <div class="orthodontics-videos__item">
                                <div class="orthodontics-videos__wrapper">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TJ5hBmkmKug?si=iD03AJzQVjkcYcyW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="orthodontics-content__section">
                    <h3 class="h3-gray-bg">料金表</h3>
                    <div class="orthodontics-content__section-content">
                        <div class="orthodontics-price">
                            <h4 class="h4-left-line">3Dデジタルマウスピース矯正</h4>
                            
                            <div class="orthodontics-price__table">
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">インビザライン　前歯</div>
                                    <div class="orthodontics-price__cost">385,000円～660,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">インビザライン　奥歯含む全体</div>
                                    <div class="orthodontics-price__cost">660,000円～990,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">クリアコレクト　前歯</div>
                                    <div class="orthodontics-price__cost">154,000円～550,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">クリアコレクト　奥歯含む全体</div>
                                    <div class="orthodontics-price__cost">550,000円～880,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">矯正治療計画　デジタルスキャン</div>
                                    <div class="orthodontics-price__cost">33,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">保定装置　上下各</div>
                                    <div class="orthodontics-price__cost">22,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">矯正処置料（治療日ごとに）</div>
                                    <div class="orthodontics-price__cost">1,650～5,500円（税込）</div>
                                </div>
                            </div>
                        </div>

                        <div class="orthodontics-price">
                            <h4 class="h4-left-line">3Dデジタルワイヤー矯正またはワイヤー矯正</h4>
                            
                            <div class="orthodontics-price__table">
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">表側ワイヤー矯正　上下</div>
                                    <div class="orthodontics-price__cost">550,000円～880,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">表側ワイヤー矯正　上下どちらか</div>
                                    <div class="orthodontics-price__cost">330,000円～550,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">裏側ワイヤー矯正　上下</div>
                                    <div class="orthodontics-price__cost">770,000円～1100,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">裏側ワイヤー矯正　上下どちらか</div>
                                    <div class="orthodontics-price__cost">550,000円～770,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">矯正治療計画　デジタルスキャン</div>
                                    <div class="orthodontics-price__cost">33,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">保定装置　上下各</div>
                                    <div class="orthodontics-price__cost">22,000円（税込）</div>
                                </div>
                                <div class="orthodontics-price__row">
                                    <div class="orthodontics-price__item">矯正処置料（治療日ごとに）</div>
                                    <div class="orthodontics-price__cost">1,650～5,500円（税込）</div>
                                </div>
                            </div>
                        </div>

                        <div class="orthodontics-price__notes">
                            <p class="orthodontics-content__text">
                                矯正治療計画デジタルスキャンは診断後に当院側から治療を断りするケースに関して料金はかかりません。もしくは返金します。
                            </p>
                            <p class="orthodontics-content__text">
                                骨格性不正咬合などの難症例は大学病院の矯正診療科をお薦めします。
                            </p>
                            <p class="orthodontics-content__text">
                                治療期間は2ヶ月～1.5年程度かケースによってはそれ以上～3年程度です。マウスピース矯正は矯正の程度と期間によって変動します。短期間（2～7ヶ月程度）だと140,000～600,000円程度、それより長期間（8～15ヶ月程度）だと600,000円～900,000円程度とマウスピースの数や期間などによります。
                            </p>
                            <p class="orthodontics-content__text">
                                クリアコレクトはインビザラインの後発商品ですが費用を安く行うことができます。当院はクリアコレクトの会社とストローマンインプラントの取引があるのでクリアコレクトでは特にコストカットすることが出来ます。
                            </p>
                            <p class="orthodontics-content__text">
                                <span class="highlight">インビザラインGOはインビザラインの新製品で前歯の矯正を短期間で進めることができます</span>。
                            </p>
                            <p class="orthodontics-content__text">
                                ワイヤー矯正は処置後に痛みを伴う場合があります。マウスピース矯正も痛みはありますが楽な場合が多いです。
                            </p>
                            <p class="orthodontics-content__text">
                                成人の矯正治療では矯正治療によって歯の支え（歯根や歯周組織）が必ずダメージします。
                            </p>
                            <p class="orthodontics-content__text">
                                矯正治療には必ず後戻りがあります。後戻り防止のためには保定装置の使用が必要です。
                            </p>
                            <p class="orthodontics-content__text">
                                <span class="highlight">マウスピース矯正や裏側ワイヤー矯正は従来の表側ワイヤー矯正に比べて目立ちにくいです</span>。
                            </p>
                            <p class="orthodontics-content__text">
                                矯正治療はリスクを説明したうえで判断してもらうようにしています。
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