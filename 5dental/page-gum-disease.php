<?php
/**
 * Template Name: 歯周病治療
 * Description: 歯周病治療のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <section class="gum-disease-fv">
        <div class="gum-disease-fv__container">
            <div class="gum-disease-fv__bg-text">Gum disease</div>
            
            <div class="gum-disease-fv__content">
                <h1 class="gum-disease-fv__title">歯周病治療</h1>
                
                <nav class="gum-disease-fv__breadcrumb">
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
                                <span class="breadcrumb__text">歯周病治療</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <section class="gum-disease-content">
        <div class="gum-disease-content__container">
            <main class="gum-disease-content__main">
                <div class="gum-disease-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gum-disease/gum-disease.webp" alt="歯周病治療" class="gum-disease-content__hero-img">
                </div>

                <h1 class="orthodontics-content__main-title">歯周病治療</h1>

                <section class="gum-disease-content__section">
                    <h2 class="h3-gray-bg">歯周病とは</h2>
                    <div class="gum-disease-content__section-content">
                        <p class="gum-disease-content__text">
                            歯周病とは、歯を支えている周りの組織（歯茎、骨）の病気で、歯を失う主な原因の1つでもあります。むし歯と違い、ほとんど痛みがなく気が付かない間に進行してしまいます。歯周膿漏といわれることもあります。
                        </p>
                    </div>
                </section>

                <section class="gum-disease-content__section">
                    <h2 class="h3-gray-bg">歯周病になる原因</h2>
                    <div class="gum-disease-content__section-content">
                        <p class="gum-disease-content__text">
                            歯周病の直接的な原因はプラークです。免疫力が下がったり、プラーク中の細菌数が増えると歯周組織が破壊され、歯周病が進行していきます。<br>
                            また、歯石やむし歯があることでプラークがさらに付着しやすくなります。
                        </p>
                        <p class="gum-disease-content__text">
                            最近では、歯周疾患は全身疾患とも関連があるといわれています。妊娠期間中に適切な歯周治療を行った場合、早産や低体重児出産の割合が減少したとの報告があることや、糖尿病患者は歯周疾患の発症率と重篤度が高いことが知られており、糖尿病など全身疾患のコントロールも含めた全身的なアプローチを行うことが重要です。
                        </p>
                    </div>
                </section>

                <section class="gum-disease-content__section">
                    <h2 class="h3-gray-bg">歯周病の段階</h2>
                    <div class="gum-disease-content__section-content">
                        <p class="gum-disease-content__text gum-disease-content__text--large-margin">
                            炎症状態が歯茎までのものを歯肉炎と呼び、さらに進行し、歯を支えている骨まで影響が及んでいる状態を歯周炎とよびます。
                        </p>

                        <div class="gum-disease-stage">
                            <div class="gum-disease-stage__header">
                                <h3 class="gum-disease-stage__title">歯肉炎</h3>
                            </div>
                            <div class="gum-disease-stage__content">
                                <div class="gum-disease-stage__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gum-disease/cross-section-gingivitis.webp" alt="歯肉炎の断面図" class="gum-disease-stage__img">
                                </div>
                                <div class="gum-disease-stage__text">
                                    <p class="gum-disease-content__text">
                                        歯茎が健康な状態より赤く腫れあがった状態が認められ、歯磨きをすると歯茎から出血することもあります。
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="gum-disease-stage">
                            <div class="gum-disease-stage__header">
                                <h3 class="gum-disease-stage__title">歯周炎</h3>
                            </div>
                            <div class="gum-disease-stage__content">
                                <div class="gum-disease-stage__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gum-disease/cross-section-gum-disease.webp" alt="歯周炎の断面図" class="gum-disease-stage__img">
                                </div>
                                <div class="gum-disease-stage__text">
                                    <p class="gum-disease-content__text">
                                        歯肉炎の状態から進行した状態で、歯茎の赤み、腫れた状態がみられます。
                                    </p>
                                    <p class="gum-disease-content__text">
                                        骨の吸収に伴い歯茎の退縮も進行します。また、重度の歯周炎では、歯がグラグラと動くようになったり、歯茎から膿がでてくることもあります。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="gum-disease-content__section">
                    <h2 class="h3-gray-bg">歯周病の治療法</h2>
                    <div class="gum-disease-content__section-content">
                        <p class="gum-disease-content__text gum-disease-content__text--large-margin">
                            歯周病の原因は細菌性プラークであり、プラークやプラークの蓄積を増加させるような原因を除去することが主な治療となります。
                        </p>

                        <div class="gum-disease-treatment">
                            <div class="gum-disease-treatment__header">
                                <h3 class="gum-disease-treatment__title">プラークコントロール</h3>
                            </div>
                            <div class="gum-disease-treatment__content">
                                <p class="gum-disease-content__text">
                                    日常的に行うブラッシングによるプラークコントロールは特に重要です。ブラッシングを行うことでプラークの除去だけではなく、歯茎を刺激することで血流が良くなり治癒が促進されます。また、ブラッシングだけでは歯と歯の汚れを落とすのは難しいためフロスを活用していきましょう。
                                </p>
                            </div>
                        </div>

                        <div class="gum-disease-treatment">
                            <div class="gum-disease-treatment__header">
                                <h3 class="gum-disease-treatment__title">スケーリング・ルートプレーニング</h3>
                            </div>
                            <div class="gum-disease-treatment__content">
                                <p class="gum-disease-content__text">
                                    歯科医院にて、歯科医師や歯科衛生士により歯に付着した歯石や沈着物を除去します。歯石は固く歯ブラシで落とすことはできません。<br>
                                    歯石が存在するとプラークの付着を促進させ歯周病を発症、悪化させます。
                                </p>
                                <p class="gum-disease-content__text">
                                    歯周病が進み、歯周ポケットの深いところまで汚れが沈着している場合には麻酔をかけ治療し、さらに歯石が付いていた歯の根っこを滑らかにすることでプラークが付着しないよう仕上げていきます。
                                </p>
                            </div>
                        </div>

                        <div class="gum-disease-treatment">
                            <div class="gum-disease-treatment__header">
                                <h3 class="gum-disease-treatment__title">フラップ手術</h3>
                            </div>
                            <div class="gum-disease-treatment__content">
                                <p class="gum-disease-content__text">
                                    麻酔をかけ、歯茎を開いて治療を行うことによって治療部位を直接見ることが可能で、より細かい部分の歯石を除去することができます。
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="gum-disease-content__section">
                    <h2 class="h3-gray-bg">歯周病は早期発見・早期治療が肝要</h2>
                    <div class="gum-disease-content__section-content">
                        <div class="gum-disease-summary">
                            <div class="gum-disease-summary__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gum-disease/gum-disease-sumarry.webp" alt="歯周病の早期発見・早期治療" class="gum-disease-summary__img">
                            </div>
                            <div class="gum-disease-summary__content">
                                <p class="gum-disease-content__text">
                                    歯周病はむし歯と違い初期の症状が少なく、歯がグラグラするなどの症状が出始めたころには進行が大きく進み、歯を抜かなければいけない状態であることも少なくありません。
                                </p>
                                <p class="gum-disease-content__text">
                                    今まで問題がなくても年を重ね、免疫力が低下することで歯周病が進んでいることもあります。
                                </p>
                                <p class="gum-disease-content__text">
                                    半年に一度は歯科医院を受診し、レントゲン写真や歯周病検査を行い早期発見、早期治療を行っていくことが重要です。
                                </p>
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