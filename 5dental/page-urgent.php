<?php
/**
 * Template Name: 緊急治療・主訴治療
 * Description: 緊急治療・主訴治療のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<style>
.wisdom-tooth-section__content {
    display: flex;
    align-items: flex-start;
    gap: 24px;
}

.wisdom-tooth-section__image {
    flex-shrink: 0;
    max-width: 400px;
}

.wisdom-tooth-section__image img {
    width: 100%;
    height: auto;
}

.wisdom-tooth-section__text {
    flex: 1;
}

@media (max-width: 768px) {
    .wisdom-tooth-section__content {
        flex-direction: column;
        gap: 24px;
    }
    
    .wisdom-tooth-section__image {
        max-width: 100%;
    }
}
</style>

<main class="main">
    <section class="implant-fv">
        <div class="implant-fv__container">
            <div class="implant-fv__bg-text">Urgent care</div>
            
            <div class="implant-fv__content">
                <h1 class="implant-fv__title">緊急治療・主訴治療</h1>
                
                <nav class="implant-fv__breadcrumb">
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
                                <span class="breadcrumb__text">緊急治療・主訴治療</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <section class="implant-content">
        <div class="implant-content__container">
            <main class="implant-content__main">
                <div class="implant-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/urgent/urgent.webp" alt="緊急治療・主訴治療" class="">
                </div>

                <h1 class="implant-content__main-title">緊急治療・主訴治療</h1>
                
                <div class="urgent-content">
                    <p>「歯が痛い」「歯が取れた」「親知らずが腫れた」など、急なトラブルに対してすぐに対応いたします。</p>
                    
                    <p>歯科医院はご予約制がほとんどです。<span class="urgent-highlight">当院もご予約制</span>になっておりますが、<span class="urgent-highlight">応急処置のみ</span>であれば、できるかぎり緊急で対応いたしますので、まずご連絡ください。<br>電話にてご連絡いただければ、当日でもできる限り緊急で対応できる時間帯を案内させていただくようにしています。</p>
                    
                    <p>もちろん状況によりますが、「急な痛み」であれば、痛み止め、抗生物質など内服薬の処方、噛み合わせ調整、患部消毒などの応急的処置したり、もしくは神経を取る（抜髄）などの処置を行い、「痛み」を緩和・改善いたします。</p>
                    
                    <p>「歯が取れた」であれば、取れた詰め物・被せ物の付け直しや、むし歯で再治療が必要であれば消毒し、薬の仮詰めなどを行います。また、「前歯が取れた」で審美的にお困りであれば、前歯を付け直したり、詰めたり、もしくは仮歯を製作するなど応急的審美歯科治療を行います。</p>
                </div>

                <div class="wisdom-tooth-section">
                    <h3 class="h3-gray-bg">「親知らずが腫れた」というトラブルも比較的に多いです。</h3>
                    
                    <div class="wisdom-tooth-section__content">
                        <div class="wisdom-tooth-section__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/urgent/urgent-care-wisdom.webp" alt="親知らずの腫れ">
                        </div>
                        
                        <div class="wisdom-tooth-section__text">
                            <p>親知らず周囲粘膜は構造上炎症を起こしやすかったり、痛み腫れになりやすい特徴があります（智歯周囲炎）。洗浄や消毒および痛み止め抗生物質など内服薬の処方で「腫れや痛み」を緩和・改善します。</p>
                            
                            <p>親知らずは骨の中に埋まっていたり（埋伏智歯）、太い動脈・神経（下顎管、下歯槽管）に近接・接触していたりする場合があります。</p>
                            
                            <p>応急的には歯科医院で「腫れや痛み」を緩和することができますが、そのような状況のときには最終的に病院の口腔外科で抜歯してもらう必要がある場合があります。</p>
                        </div>
                    </div>
                </div>
            </main>

            <?php get_template_part( 'template-parts/sidebar', 'service' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>