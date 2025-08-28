<?php
/**
 * Template Name: 大人の矯正治療
 * Description: 大人の矯正治療のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <section class="orthodontics-fv">
        <div class="orthodontics-fv__container">
            <div class="orthodontics-fv__bg-text">Adult Orthodontics</div>
            
            <div class="orthodontics-fv__content">
                <h1 class="orthodontics-fv__title">大人の矯正治療</h1>
                
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
                                <span class="breadcrumb__text">大人の矯正治療</span>
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
                <h1 class="orthodontics-content__main-title">大人の矯正治療</h1>

                <div class="orthodontics-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/adult/adult-orthodontics.webp" alt="大人の矯正治療" class="orthodontics-content__hero-img">
                </div>
                
                <h3 class="h3-gray-bg">大人の矯正治療について</h3>

                <div class="orthodontics-content__description">
                    <p class="orthodontics-content__text">
                        大人の矯正治療は矯正専門歯科だけでは対応できないと言われています。
                    </p>
                    <p class="orthodontics-content__text">
                        大人の矯正治療では骨格の成長は止まっていて、歯並びや咬み合わせは完成しています。
                    </p>
                    <p class="orthodontics-content__text">
                        <span class="highlight">成長や発育が複雑に影響することがない</span>ので、シンプルに診断や治療計画を行うことができます。その一方で成人として<span class="highlight">口腔内の問題が関係してきます</span>。
                    </p>
                </div>
                
                <h3 class="h3-gray-bg">大人の矯正の問題点</h3>
                
                <div class="orthodontics-content__problems">
                    <ul class="direct-bonding-feature-list">
                        <li class="direct-bonding-feature-list__item">年齢に応じた歯周組織の変化、歯周病。</li>
                        <li class="direct-bonding-feature-list__item">すでに虫歯治療や被せ物、ブリッジが入っていたり、それが古くなっていたりする。</li>
                        <li class="direct-bonding-feature-list__item">すでに悪くなってしまっている歯や歯の欠損がある。</li>
                        <li class="direct-bonding-feature-list__item">インプラント治療やブリッジの治療が必要であったりする。</li>
                        <li class="direct-bonding-feature-list__item">すでに歯に継ぎはぎ模様や変色があり、歯並びだけが治ってもキレイにならない。</li>
                    </ul>
                </div>

                <div class="orthodontics-content__description">
                    <p class="orthodontics-content__text">
                        これらの問題がある場合には矯正専門歯科だけでは対応できないと言われています。<br>
                        <span class="highlight">一般歯科、審美歯科との連携</span>が必要になります。
                    </p>
                    <p class="orthodontics-content__text">
                        大人の矯正では矯正でかかる力と矯正の期間で、<span class="highlight">歯の支えとなる歯周組織が必ずダメージを受けます</span>。
                    </p>
                    <p class="orthodontics-content__text">
                        成長の完成した歯列に対する矯正治療は歯根や歯周組織に対するダメージになるため、<span class="highlight">必ずしも大規模な矯正治療や長期間の矯正治療が理想的ではありません</span>。
                    </p>
                    <p class="orthodontics-content__text">
                        ご自身の改善したい部分や気になっている部分が前歯だけであったり部分的であったりする場合には、部分矯正で<span class="highlight">矯正治療のダメージが最小限にできるように</span>効率的に短期間で行えるように治療計画を配慮し、健康的で現実的な治療計画を提案できます。
                    </p>
                    <p class="orthodontics-content__text">
                        3Dデジタルマウスピース矯正は細かな矯正力や矯正移動のコントロールができるので部分矯正を安定しておこなえます。
                    </p>
                </div>
                
                <h3 class="h3-gray-bg">大人の矯正治療のメリット</h3>
                
                <div class="orthodontics-stage">
                    <div class="orthodontics-stage__header">
                        <h4 class="h4-left-line">治療期間が早い</h4>
                    </div>
                    <div class="orthodontics-stage__text">
                        <p class="orthodontics-content__text">
                            骨格の成長が完成しているため成長や発育が複雑に影響することがないので、<span class="highlight">シンプルな診断や治療計画を行うことができます</span>。最近では3Dデジタルで計測や診断を行うことができ、成長期のように時期や期間に左右されないので治療期間が早い矯正計画が組めます。
                        </p>
                    </div>
                </div>
                
                <div class="orthodontics-stage">
                    <div class="orthodontics-stage__header">
                        <h4 class="h4-left-line">見た目のコンプレックスを解消</h4>
                    </div>
                    <div class="orthodontics-stage__text">
                        <p class="orthodontics-content__text">
                            歯並びを気にして口元を手で隠したり、思い切り笑うことを避けたりしてはいませんか？<span class="highlight">口元の美しさはご自身の自信につながります</span>。矯正を終えた患者さんは前より笑うことが多くなったり、積極的になったりする方が多いように感じます。
                        </p>
                    </div>
                </div>
                
            </main>

            <?php get_template_part( 'template-parts/sidebar', 'service' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>