<?php
/**
 * Template Name: 噛み合わせ・顎関節症
 * Description: 噛み合わせ・顎関節症治療のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<style>
.occlusion-content-wrapper {
    gap: 24px !important;
}
</style>

<main class="main">
    <section class="implant-fv">
        <div class="implant-fv__container">
            <div class="implant-fv__bg-text">Occlusion</div>
            
            <div class="implant-fv__content">
                <h1 class="implant-fv__title">噛み合わせ/顎関節症</h1>
                
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
                                <span class="breadcrumb__text">噛み合わせ/顎関節症</span>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/occlusion/non-prep-veneer.webp" alt="噛み合わせ治療" class="">
                </div>

                <h1 class="implant-content__main-title">噛み合わせ/顎関節症</h1>

                <div class="implant-content__section">
                    <h2 class="implant-content__section-title">噛み合わせ治療について</h2>
                    <div class="implant-content__section-content">
                        <div class="occlusion-content-wrapper">
                            <div class="occlusion-content-left">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/occlusion/occlusion_01.webp" alt="女性の口元" class="occlusion-image">
                            </div>
                            
                            <div class="occlusion-content-right">
                                <div class="implant-content__text">
                                    <p>むし歯や歯周病、歯の欠損（抜けた状態）、歯並びによって、適正な噛み合わせが安定しない状態を治療します。</p>
                                </div>
                                <div class="implant-content__text">
                                    <p>痛みや歯の欠損でしっかりと噛めない状態が続いてしまうと、咀嚼筋や顔面の表情筋の機能低下などを引き起こし、左右のバランスが崩れたり、顔や体の歪みを引き起こしたりすると考えられています。</p>
                                </div>
                                <div class="implant-content__text">
                                    <p>また、痛みや歯の欠損をそのままにしてしまうと、逆に健康な歯の部分に負担が集中しダメージさせてしまうことになります。</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="implant-content__text">
                            <p>むし歯治療、歯周病治療はもちろん、入れ歯治療、インプラント治療、矯正治療などを適切に行い、しっかりよく噛めて、バランスの良い状態を維持することは、お体の健康を保つ上でも顔や骨格をキレイに保つアンチエイジングの観点からも必要でとても効果的です。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>当院では、新しい素材の入れ歯<span class="highlight">ノンクラスプデンチャー</span>や、<span class="highlight">EPIOS殺菌水</span>の衛生的な環境での<span class="highlight">インプラント治療</span>、<span class="highlight">3Dデジタル裏側矯正・マウスピース矯正</span>などの充実した治療技術で様々なケースの治療に対応しています。</p>
                        </div>
                    </div>
                </div>

                <div class="implant-content__section">
                    <h2 class="implant-content__section-title">顎関節症</h2>
                    <div class="implant-content__section-content">
                        <div class="occlusion-content-wrapper">
                            <div class="occlusion-content-left">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/occlusion/occlusion_02.webp" alt="顎関節症の女性" class="occlusion-image">
                            </div>
                            
                            <div class="occlusion-content-right">
                                <div class="implant-content__text">
                                    <p>顎関節症の主な症状は、「顎が痛む（顎関節痛）」、「口が開かない（開口障害）」、「顎を動かすと音がする（顎関節雑音）」で、このうちどれか1つ以上の症状があり、鑑別診断で他の疾患がない病態を「顎関節症」といいます。</p>
                                </div>
                                <div class="implant-content__text">
                                    <p>症状は一時的であったり、慢性的で長期にわたることがあったり、軽度の場合から日常生活に支障が出る状態まで様々です。</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="implant-content__text">
                            <p>噛み合わせが原因であると言われたりしていましたが、原因は多因子であり、頬づえやうつ伏せ寝などの生活習慣によるとも言われており、はっきりとは診断できないと考えられています。</p>
                        </div>
                        
                        <div class="implant-content__text">
                            <p>（あいまいな診断で顎関節症治療の名目で行う噛み合わせ治療を今後抑止するため、2010年世界的に権威ある米国歯科研究学会（AADR）が顎関節症の診断・治療に関する声明を発表しました。それに伴い日本顎関節学会や各歯科大学も同じ指針を示しています。）</p>
                        </div>
                        
                        <div class="implant-content__text">
                            <p>現在学術的には保存的治療・可逆的治療（歯を削ったり、歯列矯正治療を行ったりしない）が推奨されていて、以前に行われていたような噛み合わせ治療・バイトプレートなどが中心の治療は推奨されていません。</p>
                        </div>
                        
                        <div class="implant-content__text">
                            <p>当院では安易な診断で大規模な噛み合わせ治療や矯正治療などを行うことはせず、適切に診断し保存的治療・可逆的治療を中心に改善できるように努めています。</p>
                        </div>
                        
                        <div class="implant-content__text">
                            <p>顎関節症やその他顎の疾患に関しては、診断や治療においてMRIや内視鏡手術・外科手術などの設備が必要になることがあるため、歯科医院では難しい症例や重篤なケースについては、大学病院などの専門機関にご紹介させていただいております。</p>
                        </div>
                    </div>
                </div>

            </main>

            <?php get_template_part( 'template-parts/sidebar', 'service' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>