<?php
/**
 * Template Name: 入れ歯/ブリッジ
 * Description: 入れ歯/ブリッジ治療のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<style>
.denture-nonclasps__intro-content {
    align-items: flex-start !important;
}
</style>

<main class="main">
    <section class="denture-fv">
        <div class="denture-fv__container">
            <div class="denture-fv__bg-text">Denture/Bridge</div>
            
            <div class="denture-fv__content">
                <h1 class="denture-fv__title">入れ歯/ブリッジ</h1>
                
                <nav class="denture-fv__breadcrumb">
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
                                <span class="breadcrumb__text">入れ歯/ブリッジ</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <section class="denture-content">
        <div class="denture-content__container">
            <main class="denture-content__main">
                <div class="denture-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/denture/denture.webp" alt="入れ歯/ブリッジ治療" class="denture-content__hero-img">
                </div>

                <h1 class="denture-content__main-title">入れ歯</h1>

                <div class="denture-nonclasps">
                    <h3 class="h3-gray-bg">ノンクラスプデンチャー ＜金属の止め具のない入れ歯＞</h3>

                    <div class="denture-nonclasps__intro">
                        <div class="denture-nonclasps__intro-content">
                            <div class="denture-nonclasps__intro-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/denture/denture_01.webp" alt="ノンクラスプデンチャー" class="denture-nonclasps__intro-img">
                            </div>
                            <div class="denture-nonclasps__intro-text">
                                <p>目立たない。やわらかいのに丈夫。<br>
                                しなやかで快適。<br>
                                今までの部分入れ歯とは、発想が違います。</p>
                            </div>
                        </div>
                    </div>

                    <div class="denture-nonclasps__features">
                        <div class="denture-nonclasps__feature">
                            <h4 class="h4-left-line">ほとんど目立ちません。</h4>
                            <div class="denture-nonclasps__feature-content">
                                <div class="denture-nonclasps__feature-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/denture/denture_02.webp" alt="ほとんど目立ちません" class="denture-nonclasps__feature-img">
                                    <div class="denture-nonclasps__comparison">
                                        <span class="denture-nonclasps__comparison-label denture-nonclasps__comparison-label--left">ノンクラスプデンチャー</span>
                                        <span class="denture-nonclasps__comparison-label denture-nonclasps__comparison-label--right">今までの入れ歯</span>
                                    </div>
                                </div>
                                <div class="denture-nonclasps__feature-text">
                                    <p>金属の止め具がなく、口の中と同じ色をした半透明性の素材を使いますので目立ちません。</p>
                                </div>
                            </div>
                            <div class="denture-nonclasps__feature-note">
                                <p>金属アレルギーに敏感な方にもおすすめです。</p>
                            </div>
                        </div>

                        <div class="denture-nonclasps__feature">
                            <h4 class="h4-left-line">やわらかいのに丈夫です。</h4>
                            <div class="denture-nonclasps__feature-content">
                                <div class="denture-nonclasps__feature-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/denture/denture_03.webp" alt="やわらかいのに丈夫です" class="denture-nonclasps__feature-img">
                                    <div class="denture-nonclasps__comparison">
                                        <span class="denture-nonclasps__comparison-label denture-nonclasps__comparison-label--left">ノンクラスプデンチャー</span>
                                        <span class="denture-nonclasps__comparison-label denture-nonclasps__comparison-label--right">今までの入れ歯</span>
                                    </div>
                                </div>
                                <div class="denture-nonclasps__feature-text">
                                    <p>丈夫でしなやか。長持ちしやすい入れ歯です。</p>
                                    <p>こんなに曲げても元に戻ります！</p>
                                </div>
                            </div>
                        </div>

                        <div class="denture-nonclasps__feature">
                            <h4 class="h4-left-line">しっかりホールド。</h4>
                            <div class="denture-nonclasps__feature-content">
                                <div class="denture-nonclasps__feature-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/denture/denture_04.webp" alt="しっかりホールド" class="denture-nonclasps__feature-img">
                                </div>
                                <div class="denture-nonclasps__feature-text">
                                    <p>歯茎から包み込む形状で、しっかり安定。</p>
                                </div>
                            </div>
                        </div>

                        <div class="denture-nonclasps__feature">
                            <h4 class="h4-left-line">とっても薄い。とっても軽い。</h4>
                            <div class="denture-nonclasps__feature-text">
                                <p>丈夫でしなやかだから、今までの入れ歯よりも、うーんと薄い入れ歯です。しかも超軽量。</p>
                            </div>
                        </div>

                        <div class="denture-nonclasps__feature">
                            <h4 class="h4-left-line">しなやかフィット！</h4>
                            <div class="denture-nonclasps__feature-text">
                                <p>しなやかさが、お口の中で安定を守ります。</p>
                            </div>
                        </div>
                    </div>

                    <div class="denture-nonclasps__table">
                        <table class="denture-treatment-table">
                            <tbody>
                                <tr>
                                    <th class="denture-treatment-table__header">治療の内容</th>
                                    <td class="denture-treatment-table__cell">歯の欠損部に対する取り外しの入れ歯</td>
                                </tr>
                                <tr>
                                    <th class="denture-treatment-table__header">リスク・副作用</th>
                                    <td class="denture-treatment-table__cell">歯や歯周組織の変化によって経年的な適合不良が起こります。</td>
                                </tr>
                                <tr>
                                    <th class="denture-treatment-table__header">治療期間の目安</th>
                                    <td class="denture-treatment-table__cell">3～6週間程度</td>
                                </tr>
                                <tr>
                                    <th class="denture-treatment-table__header">治療回数の目安</th>
                                    <td class="denture-treatment-table__cell">2～4回程度</td>
                                </tr>
                                <tr>
                                    <th class="denture-treatment-table__header">治療費総額の目安</th>
                                    <td class="denture-treatment-table__cell">小さい部分入れ歯で80,000～180,000円程度<br>大きな広範囲の入れ歯で300,000～480,000円程度</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="denture-fee-section">
                    <h3 class="h3-gray-bg">治療費</h3>
                    
                    <div class="denture-fee-table" style="margin-bottom: 24px;">
                        <table class="denture-treatment-table">
                            <tbody>
                                <tr>
                                    <th class="denture-treatment-table__header" style="width: 50%; text-align: left;">ノンクラスプデンチャー</th>
                                    <td class="denture-treatment-table__cell" style="width: 50%; text-align: right;">77,000円～220,000円（税込）</td>
                                </tr>
                                <tr>
                                    <th class="denture-treatment-table__header" style="width: 50%; text-align: left;">金属床入れ歯　チタン入れ歯<br>機能美デンチャー</th>
                                    <td class="denture-treatment-table__cell" style="width: 50%; text-align: right;">330,000円～660,000円（税込）</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="denture-fee-notes">
                        <p>期間は約1ヶ月程度です。<br>
                        入れ歯はブリッジやインプラントでは対応できないケースや多数歯欠損、全歯欠損であっても対応できる可能性があります。<br>
                        ノンクラスプデンチャーは比較的に安価で、<span class="highlight">金属が見えない</span>ため人気があります。<br>
                        金属床入れ歯、チタン入れ歯、機能美デンチャーなどは<span class="highlight">入れ歯技工を行っている専門のラボ</span>で製作します。</p>
                    </div>
                </div>

            </main>

            <?php get_template_part( 'template-parts/sidebar', 'service' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>