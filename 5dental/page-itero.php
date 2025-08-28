<?php
/**
 * Template Name: iTero
 * Description: iTeroのページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<style>
.itero-feature-item {
    background-color: #EFF0F2;
    padding: 2rem;
    margin-bottom: 2rem;
}

.itero-feature-title {
    display: flex;
    align-items: center;
    border-bottom: 1px dashed #737484;
    padding-bottom: 0.75rem;
    margin-bottom: 1.25rem;
}

.itero-feature-dot {
    display: inline-block;
    width: 6px;
    height: 6px;
    background-color: #737484;
    border-radius: 50%;
    margin-right: 0.5rem;
}

.itero-feature-title strong {
    color: #737484;
    font-size: 1rem;
}

.itero-intro-container {
    display: flex;
    gap: 24px;
    align-items: flex-start;
    margin-bottom: 2rem;
}

.itero-logo-box {
    background-color: #ffffff;
    padding: 1.5rem;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-shrink: 0;
    width: 368px;
}

.itero-intro-text {
    flex: 1;
}

@media (max-width: 768px) {
    .itero-intro-container {
        flex-direction: column;
    }
    
    .itero-logo-box {
        width: 100%;
        margin-bottom: 1.5rem;
    }
}
</style>

<main class="main">
    <section class="invisalign-fv">
        <div class="invisalign-fv__container">
            <div class="invisalign-fv__bg-text">iTero</div>
            
            <div class="invisalign-fv__content">
                <h1 class="invisalign-fv__title">iTero</h1>
                
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
                                <span class="breadcrumb__text">iTero</span>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/itero/non-prep-veneer-flow.webp" alt="iTero" class="invisalign-content__hero-img">
                </div>
                
                <h1 class="orthodontics-content__main-title">iTero</h1>

                <section class="invisalign-content__section">
                    <h3 class="h3-gray-bg">iTeroとは？</h3>
                    <div class="invisalign-content__section-content">
                        
                        <div class="itero-intro-container">
                            <div class="itero-logo-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/itero/itero-logo.webp" alt="iTero" style="max-width: 224px; height: auto;">
                            </div>

                            <div class="itero-intro-text">
                                <p class="invisalign-content__text">
                                    iTeroは、近年の歯科技術革新の中で普及しつつある3Dデジタルスキャナーの中でも最もハイスペックな製品の1つです。<span class="highlight">特に矯正治療やインビザラインにおいて優れた特長を持つ3Dデジタルスキャナー</span>です。
                                </p>
                                <p class="invisalign-content__text">
                                    型採りの際には口腔内に入れたiTeroスキャナーのカメラ部分が高速連続撮影を行いコンピューターが写真を合成して歯列の3Dデジタルデータを構築します。
                                </p>
                            </div>
                        </div>

                        <div class="invisalign-content__text-content">
                            <p class="invisalign-content__text">
                                歯列のデータがデジタル化されているためコンピューターで様々な処理やシュミレーション加工が可能で、それらの加工データから<span class="highlight">矯正装置、インビザライン、セラミックの補綴物など</span>を制作することができます。現状ではインビザラインやクリアコレクトなどのマウスピース矯正装置はアメリカなどの海外で製作されるものが多いので、歯型がデジタルデータであることは<span class="highlight">輸送時間がかからない、歯型の紛失などのトラブルがない</span>ことなどとても便利です。
                            </p>
                            <p class="invisalign-content__text">
                                我々にとっては<span class="highlight">コンピューターシュミレーションの出来上がりや矯正装置の出来上がりが早い</span>といったメリットがあります。矯正治療中の装置の再制作、治療計画の修正などにもスピーディーに対応できます。矯正治療専門で行っている歯科医院ではデジタル化はすでに一般化していると言えます。
                            </p>
                        </div>
                    </div>
                </section>

                <section class="invisalign-content__section">
                    <h3 class="h3-gray-bg">iTeroにできること</h3>
                    <div class="invisalign-content__section-content">
                        
                        <div class="itero-feature-item">
                            <div class="itero-feature-title">
                                <span class="itero-feature-dot"></span>
                                <strong>高精度のデジタルスキャン</strong>
                            </div>
                            <p class="invisalign-content__text">
                                従来のシリコン印象での歯型採りよりも<span class="highlight">簡単に確実に行うことができます</span>。全体的な広い範囲での寸法精度に優れているため、矯正治療などでとても有利に3Dデジタルデータをスキャニングできます。
                            </p>
                        </div>

                        <div class="itero-feature-item">
                            <div class="itero-feature-title">
                                <span class="itero-feature-dot"></span>
                                <strong>歯型採りの苦手な方でも大丈夫</strong>
                            </div>
                            <p class="invisalign-content__text">
                                お口の小さな方や嘔吐反射のある方にも便利に歯型採りスキャンができます。矯正治療の歯型採りでは歯列全体の大きな歯型採りが必要になりますが、従来では1度に全体の歯型採りを行えなければならず、失敗することもありやり直しなどもあると結構な負担があり疲れる処置でした。
                            </p>
                            <p class="invisalign-content__text">
                                3Dデジタルスキャンは簡単ではないですが1度に全ての歯型採りができていなくてもスキャンデータを継ぎ足して全体の歯型データを構築することができるので便利で楽です。データの修正も当然デジタルで行うことができます。
                            </p>
                            <p class="invisalign-content__text">
                                矯正治療中は歯にグラつき動揺や痛みが出ることも多いのですが、デジタルスキャンは歯型採りで引っ張ったりしなくて済むので<span class="highlight">痛みの心配もありません</span>。
                            </p>
                        </div>

                        <div class="itero-feature-item">
                            <div class="itero-feature-title">
                                <span class="itero-feature-dot"></span>
                                <strong>すぐに歯型の3Dデータを見ることができる</strong>
                            </div>
                            <p class="invisalign-content__text">
                                従来の歯型採りでは、石膏で歯型の立体模型をつくります。この作業は数時間かかるためすぐに歯型模型を見ることはできませんでした。一方でiTeroはスキャン後すぐに歯型の3Dデータを見ることができます。<span class="highlight">当日すぐに3Dデータを用いた説明や仮想シミュレーション</span>が可能です。
                            </p>
                            <p class="invisalign-content__text">
                                また石膏歯型模型の作製や輸送の日数を削減できるので、<span class="highlight">マウスピース矯正装置やセラミックの補綴物の完成が早くなります</span>。
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