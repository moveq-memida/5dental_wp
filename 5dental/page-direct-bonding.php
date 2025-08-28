<?php
/**
 * Template Name: ダイレクトボンディング
 * Description: ダイレクトボンディング治療のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <section class="direct-bonding-fv">
        <div class="direct-bonding-fv__container">
            <div class="direct-bonding-fv__bg-text">Direct-bonding</div>
            
            <div class="direct-bonding-fv__content">
                <h1 class="direct-bonding-fv__title">ダイレクトボンディング</h1>
                
                <nav class="direct-bonding-fv__breadcrumb">
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
                                <span class="breadcrumb__text">ダイレクトボンディング</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <section class="direct-bonding-content">
        <div class="direct-bonding-content__container">
            <main class="direct-bonding-content__main">
                <div class="direct-bonding-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/direct-bonding/esthetic6.webp" alt="ダイレクトボンディング治療" class="direct-bonding-content__hero-img">
                </div>

                <h1 class="direct-bonding-content__main-title">ダイレクトボンディングとは</h1>

                <section class="direct-bonding-content__section">
                    <h3 class="h3-gray-bg">新しい考え方の予防歯科・クリーニング</h3>
                    <div class="direct-bonding-content__concept">
                        <div class="direct-bonding-content__concept-content">
                            <div class="direct-bonding-content__concept-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/direct-bonding/direct_02.webp" alt="ダイレクトボンディング材" class="direct-bonding-content__concept-img">
                            </div>
                            <div class="direct-bonding-content__concept-text">
                                <p>MI（ミニマルインターベンション：従来の歯質切削中心の歯科治療から、齲蝕の最小限の除去を目指す概念）の考え方に基づいて、<span class="highlight">健康な歯質を極力に削らずコンポジットレジン（歯科治療用プラスチック）を口腔内で直接接着充填することで歯の形態や機能を回復する</span>方法です。</p>
                                <p>※写真は当院で用いているダイレクトボンディング材です。</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="direct-bonding-content__section">
                    <h3 class="h3-gray-bg">ダイレクトボンディング＋ホワイトニングの症例</h3>
                    <div class="direct-bonding-content__case-study">
                        <h4 class="h4-left-line">左上3（犬歯）1本</h4>

                        <div class="direct-bonding-content__case-images">
                            <div class="direct-bonding-content__case-image-item">
                                <div class="direct-bonding-content__case-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/direct-bonding/direct_03.webp" alt="施術前" class="direct-bonding-content__case-img">
                                    <div class="direct-bonding-content__case-label">施術前</div>
                                </div>
                                <div class="direct-bonding-content__case-text">
                                    <p>術前は、左上3が虫歯でしみる症状があります。全体的には歯の黄ばみ茶色と着色とプラーク汚れがあります。</p>
                                </div>
                            </div>

                            <div class="direct-bonding-content__case-image-item">
                                <div class="direct-bonding-content__case-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/direct-bonding/direct_04.webp" alt="ホワイトニング後" class="direct-bonding-content__case-img">
                                    <div class="direct-bonding-content__case-label">ホワイトニング後</div>
                                </div>
                                <div class="direct-bonding-content__case-text">
                                    <p>クリーニングとホワイトニングを行いました(術後)。簡単なクリーニングとオフィスホワイトニングとホームホワイトニングを行い、黄ばみ茶色をキレイにしました。キレイに清潔になったので、左上3の虫歯治療も有利に行えます。</p>
                                </div>
                            </div>

                            <div class="direct-bonding-content__case-image-item">
                                <div class="direct-bonding-content__case-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/direct-bonding/direct_05.webp" alt="ダイレクトボンディング後" class="direct-bonding-content__case-img">
                                    <div class="direct-bonding-content__case-label">ダイレクトボンディング後</div>
                                </div>
                                <div class="direct-bonding-content__case-text">
                                    <div>
                                        <p style="margin-bottom: 12px;">今回は、左上3のみを虫歯除去しEPIOS殺菌水システムにて洗浄消毒後に、ダイレクトボンディングにて修復しました。左上3の虫歯しか削ってはいません。それ以外はクリーニングとホワイトニングだけでキレイになっています。</p>
                                        <p>黄ばみ茶色もホワイトニングと組み合わせることで、虫歯のみ最小限の切削量で審美的にキレイに治すことができます。</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="direct-bonding-content__case-table">
                            <table class="direct-bonding-treatment-table">
                                <tbody>
                                    <tr>
                                        <th class="direct-bonding-treatment-table__header">治療の内容</th>
                                        <td class="direct-bonding-treatment-table__cell">クリーニングとホワイトニングを行ったのちに、ダイレクトボンディングにて修復しました。</td>
                                    </tr>
                                    <tr>
                                        <th class="direct-bonding-treatment-table__header">トータルの治療費用</th>
                                        <td class="direct-bonding-treatment-table__cell">79,000円（税別）</td>
                                    </tr>
                                    <tr>
                                        <th class="direct-bonding-treatment-table__header">通院回数や治療期間</th>
                                        <td class="direct-bonding-treatment-table__cell">通院4回　期間1.5ヶ月</td>
                                    </tr>
                                    <tr>
                                        <th class="direct-bonding-treatment-table__header">主なリスクや副作用</th>
                                        <td class="direct-bonding-treatment-table__cell">虫歯や窩洞が深かったり大きかったり広範囲である場合には、ダイレクトボンディングは適応外となります。</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <section class="direct-bonding-content__section">
                    <h3 class="h3-gray-bg">特徴</h3>
                    <div class="direct-bonding-content__features-list">
                        <ul class="direct-bonding-feature-list">
                            <li class="direct-bonding-feature-list__item">クラウンなどに比べ、歯の切削量が少ない</li>
                            <li class="direct-bonding-feature-list__item">周囲になじみやすく、審美的には非常に自然な仕上がりにしやすい</li>
                            <li class="direct-bonding-feature-list__item">臼歯部（奥歯）などの咬合力のかかる部分では破折やすり減りが起こりやすい</li>
                            <li class="direct-bonding-feature-list__item">金属やセラミックに比べ、長期的には吸水性があるため着色し劣化し不衛生になりやすい</li>
                            <li class="direct-bonding-feature-list__item">臼歯部（奥歯）の治療や大きな窩洞の修復には向かないが、前歯の小さな部分的な窩洞の修復においては有効な方法</li>
                        </ul>
                    </div>
                </section>

                <section class="direct-bonding-content__section">
                    <h3 class="h3-gray-bg">当院のダイレクトボンディング</h3>
                    <div class="direct-bonding-content__clinic-approach">
                        <div class="direct-bonding-content__clinic-layout">
                            <div class="direct-bonding-content__clinic-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/direct-bonding/direct_06.webp" alt="当院のダイレクトボンディング" class="direct-bonding-content__clinic-img">
                            </div>
                            
                            <div class="direct-bonding-content__clinic-text">
                                <p>ダイレクトボンディングのような接着治療は細やかな治療であり、治療部位を戦略に洗浄消毒することが大切です。</p>
                                
                                <p>当院では全てにおいて<span style="text-decoration: underline;">EPIOS殺菌水システム</span>を使っていて切削や洗浄に使っている水は<span class="highlight">次亜塩素酸水</span>です。EPIOS殺菌水システムでは<span class="highlight">治療部位をより厳密に洗浄消毒</span>できるので、より厳密に接着を施すことができます。</p>
                                
                                <p>また、当院では<span class="highlight">低侵襲で体に優しい、健康を犠牲にしないような審美歯科治療が望ましい</span>と考えています。</p>
                            </div>
                        </div>
                        
                        <div class="direct-bonding-content__clinic-footer">
                            <p>ダイレクトボンディングの他にセラミッククラウン、<span class="highlight">削らないラミネートベニアやホワイトニング</span>に力を入れています。それらの治療メニューをそれぞれ組み合わせて最小限の歯の切削で審美歯科を行えるようにより良い提案をします。</p>
                            
                            <div class="direct-bonding-content__clinic-links">
                                <a href="<?php echo esc_url( home_url( '/laminate-veneer' ) ); ?>" class="direct-bonding-link">
                                    <span class="direct-bonding-link__text">削らないラミネートベニアへ</span>
                                </a>
                                
                                <a href="<?php echo esc_url( home_url( '/whitening' ) ); ?>" class="direct-bonding-link">
                                    <span class="direct-bonding-link__text">ホワイトニングへ</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <?php get_template_part( 'template-parts/sidebar', 'service' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>