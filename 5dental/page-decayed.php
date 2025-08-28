<?php
/**
 * Template Name: 虫歯治療
 * Description: 虫歯治療のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<style>
.cavity-prevention__title {
    border-bottom: 1px dashed #737484 !important;
}

.cavity-prevention__item {
    background-color: #f1f1f3 !important;
}
</style>

<main class="main">
    <section class="cavity-fv">
        <div class="cavity-fv__container">
            <div class="cavity-fv__bg-text">Gum disease</div>
            
            <div class="cavity-fv__content">
                <h1 class="cavity-fv__title">虫歯治療</h1>
                
                <nav class="cavity-fv__breadcrumb">
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
                                <span class="breadcrumb__text">虫歯治療</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <section class="cavity-content">
        <div class="cavity-content__container">
            <main class="cavity-content__main">
                <div class="cavity-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/decayed/tooth-decay.webp" alt="虫歯治療" class="cavity-content__hero-img">
                </div>

                <h1 class="orthodontics-content__main-title">むし歯治療</h1>

                <section class="cavity-content__section">
                    <h2 class="h3-gray-bg">むし歯とは</h2>
                    <div class="cavity-content__section-content">
                        <p class="cavity-content__text">
                            口の中には1,000億個以上の細菌が存在するといわれています。その中の主なむし歯菌はミュータンス菌と呼ばれ、これらのむし歯菌は食物を栄養として生きています。そして、食物の中の糖質を分解してプラークを形成し、プラークの中に他の細菌が増殖することで酸が産生されます。
                        </p>
                        <p class="cavity-content__text">
                            この酸が歯質を溶かすことを脱灰とよびます。これに対し、脱灰によって溶けた部分が唾液の作用により回復することを再石灰化とよび、飲食をすることで脱灰と再石灰化が繰り返し行われます。しかし、このバランスが崩れ脱灰の時間が長くなるとむし歯になってしまうのです。
                        </p>
                    </div>
                </section>

                <section class="cavity-content__section">
                    <h2 class="h3-gray-bg">むし歯の段階</h2>
                    <div class="cavity-content__section-content">
                        <p class="cavity-content__text cavity-content__text--large-margin">
                            虫歯は進行具合によってC0からC4までの5段階に分類されます。早期発見・早期治療により、歯への負担を最小限に抑えることができます。
                        </p>

                        <div class="cavity-stage">
                            <div class="cavity-stage__header">
                                <h3 class="cavity-stage__title">段階：C0</h3>
                            </div>
                            <div class="cavity-stage__content">
                                <div class="cavity-stage__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/decayed/tooth-decay-c0.webp" alt="C0段階の虫歯" class="cavity-stage__img">
                                </div>
                                <div class="cavity-stage__text">
                                    <p class="cavity-content__text">
                                        歯の表面のエナメル質がほんの少し溶け、白濁した状態で痛みなどの症状はありません。プラークを丁寧に除去することや、フッ素を効果的に使用することで再石灰化が促進され、元の状態に戻すことも可能です。
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="cavity-stage">
                            <div class="cavity-stage__header">
                                <h3 class="cavity-stage__title">段階：C1</h3>
                            </div>
                            <div class="cavity-stage__content">
                                <div class="cavity-stage__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/decayed/tooth-decay-c1.webp" alt="C1段階の虫歯" class="cavity-stage__img">
                                </div>
                                <div class="cavity-stage__text">
                                    <p class="cavity-content__text">
                                        エナメル質に穴が開いた状態ですが、痛みなどの自覚症状はほとんどないため気が付かないこともあります。また、一度穴が開いてしまうと元の状態にもどることはありません。
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="cavity-stage">
                            <div class="cavity-stage__header">
                                <h3 class="cavity-stage__title">段階：C2</h3>
                            </div>
                            <div class="cavity-stage__content">
                                <div class="cavity-stage__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/decayed/tooth-decay-c2.webp" alt="C2段階の虫歯" class="cavity-stage__img">
                                </div>
                                <div class="cavity-stage__text">
                                    <p class="cavity-content__text">
                                        エナメル質の奥に存在する象牙質までむし歯が進行した状態で、甘いものや冷たいものがしみることがあります。また、象牙質は柔らかいのでC1までの状態よりもむし歯の進行が加速します。
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="cavity-stage">
                            <div class="cavity-stage__header">
                                <h3 class="cavity-stage__title">段階：C3</h3>
                            </div>
                            <div class="cavity-stage__content">
                                <div class="cavity-stage__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/decayed/tooth-decay-c3.webp" alt="C3段階の虫歯" class="cavity-stage__img">
                                </div>
                                <div class="cavity-stage__text">
                                    <p class="cavity-content__text">
                                        歯の神経の近くまでむし歯が進行した状態で、非常に強い痛みを伴います。痛みを放置すると生きていた神経が死んでしまうため痛みが治まることもあります。
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="cavity-stage">
                            <div class="cavity-stage__header">
                                <h3 class="cavity-stage__title">段階：C4</h3>
                            </div>
                            <div class="cavity-stage__content">
                                <div class="cavity-stage__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/decayed/tooth-decay-c4.webp" alt="C4段階の虫歯" class="cavity-stage__img">
                                </div>
                                <div class="cavity-stage__text">
                                    <p class="cavity-content__text">
                                        歯全体にむし歯が波及し、神経も死んでいるため痛みはありません。残っている歯や根っこの状態にもよりますが、抜歯の対象となることもあります。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="cavity-content__section">
                    <h2 class="h3-gray-bg">むし歯の予防法</h2>
                    <div class="cavity-content__section-content">
                        <p class="cavity-content__text cavity-content__text--large-margin">
                            むし歯により歯に穴が開いてしまうと、いくら再石灰化を促しても元に戻ることはありません。まずはしっかりと歯磨きや予防を行うことでむし歯にしないことが大切です。
                        </p>

                        <div class="cavity-treatment">
                            <div class="cavity-treatment__header">
                                <h3 class="cavity-treatment__title">お家でできるむし歯予防</h3>
                            </div>
                            <div class="cavity-treatment__content">
                                <p class="cavity-content__text">
                                    家では歯磨きをしっかりと行うことが一番のむし歯予防です。どんなにフッ素の入った歯磨き粉を使用してもプラークが除去できていなければ、効果は得られません。歯と歯の間、歯と歯茎の境目、奥歯の噛む面の溝はむし歯になりやすい部分なので、特に丁寧に磨き、歯と歯の間はデンタルフロスなどを活用するとよいでしょう。
                                </p>
                            </div>
                        </div>

                        <div class="cavity-treatment">
                            <div class="cavity-treatment__header">
                                <h3 class="cavity-treatment__title">歯科医院で行うむし歯予防</h3>
                            </div>
                            <div class="cavity-treatment__content">
                                <p class="cavity-content__text cavity-content__text--large-margin">
                                    歯科医院では濃度の高いフッ素を使用したり、むし歯になりやすい部分の予防処置を行います。
                                </p>

                                <div class="cavity-prevention">
                                    <div class="cavity-prevention__item">
                                        <h4 class="cavity-prevention__title">フッ素</h4>
                                        <p class="cavity-prevention__text">
                                            最近ではほとんどの歯磨き粉に含まれるようになりましたが、フッ素濃度が低いものもあります。歯科医院ではより濃度の濃いフッ化物を適切に使用することで再石灰化を促しむし歯の予防をします。
                                        </p>
                                    </div>
                                    <div class="cavity-prevention__item">
                                        <h4 class="cavity-prevention__title">シーラント</h4>
                                        <p class="cavity-prevention__text">
                                            むし歯になりやすい部位の一つである奥歯の溝を、レジン系の材料を充填しむし歯の発生を予防します。特に、6歳臼歯などの生えたての歯は形が複雑で、歯質も弱くむし歯になりやすいため頻繁に使用されます。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="cavity-content__section">
                    <h2 class="h3-gray-bg">むし歯の治療法</h2>
                    <div class="cavity-content__section-content">
                        <p class="cavity-content__text cavity-content__text--large-margin">
                            虫歯を予防することも大切ですが、万が一むし歯を疑う自覚症状がある場合は、歯科医院へ相談して早期に問題を発見し、適切な処置を行うことが重要です。
                        </p>

                        <div class="cavity-treatment">
                            <div class="cavity-treatment__header">
                                <h3 class="cavity-treatment__title">コンポジットレジン修復法</h3>
                            </div>
                            <div class="cavity-treatment__content">
                                <p class="cavity-content__text">
                                    むし歯になってしまった部分を削りとり、白いレジン系の材料で充填します。保険が適用されるので、比較的安い値段で治療できます。
                                </p>
                                <p class="cavity-content__text">
                                    適用部位については歯科医院の方針などによっても変わってきますが、大きなむし歯や隣接面を含むもの、奥歯の力がかかる部分は割れてしまうことがあるのであまり使われません。
                                </p>
                            </div>
                        </div>

                        <div class="cavity-treatment">
                            <div class="cavity-treatment__header">
                                <h3 class="cavity-treatment__title">インレー修復法</h3>
                            </div>
                            <div class="cavity-treatment__content">
                                <p class="cavity-content__text">
                                    神経を取るほどの大きさのむし歯ではないものの、コンポジットレジンでは修復困難な形態や奥歯の噛む面の場合はインレー修復法が適応されます。
                                </p>
                                <p class="cavity-content__text">
                                    メタルインレーと呼ばれる部分的な銀の詰め物は保険適用となります。銀歯の見た目が気になる場合は、セラミックスインレーによる歯と同じ色の詰め物でのインレー修復も可能です。
                                </p>
                            </div>
                        </div>

                        <div class="cavity-treatment">
                            <div class="cavity-treatment__header">
                                <h3 class="cavity-treatment__title">クラウン修復法</h3>
                            </div>
                            <div class="cavity-treatment__content">
                                <p class="cavity-content__text">
                                    むし歯の進行が大きく神経を取る治療が必要な場合は、根っこの治療後歯の上に土台を立て、その上から被せ物（クラウン）をセットします。
                                </p>
                                <p class="cavity-content__text">
                                    奥歯の場合は保険適応のものだと銀歯となります。見た目が気になる場合は自費治療によりオールセラミックスでの治療も可能です。
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="cavity-content__section">
                    <h2 class="h3-gray-bg">むし歯に罹らないことがなによりも大切</h2>
                    <div class="cavity-content__section-content">
                        <div class="cavity-summary">
                            <div class="cavity-summary__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/decayed/tooth-decay-sumarry.webp" alt="むし歯予防の重要性" class="cavity-summary__img">
                            </div>
                            <div class="cavity-summary__content">
                                <p class="cavity-content__text">
                                    一度むし歯にしてしまった歯は二度と戻ることはありません。
                                </p>
                                <p class="cavity-content__text">
                                    日頃からのプラークコントロールを心がけることや、歯科医院で定期健診を受けることで、お金も時間もかけず治療を終えることができます。
                                </p>
                                <p class="cavity-content__text">
                                    また、歯を失う二大疾患はむし歯と歯周病と言われています。いつまでも自分の歯で食事ができるよう、今から心がけていきましょう。
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