<?php
/**
 * Template Name: クリアコレクト
 * Description: クリアコレクトのページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<style>
.invisalign-visual {
    height: auto !important;
}

.invisalign-visual__img {
    max-width: 100% !important;
}
</style>

<main class="main">
    <section class="invisalign-fv">
        <div class="invisalign-fv__container">
            <div class="invisalign-fv__bg-text">ClearCorrect</div>
            
            <div class="invisalign-fv__content">
                <h1 class="invisalign-fv__title">クリアコレクト</h1>
                
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
                                <span class="breadcrumb__text">クリアコレクト</span>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clearcorrect/claercorrect.webp" alt="クリアコレクト" class="invisalign-content__hero-img">
                </div>

                <h1 class="orthodontics-content__main-title">クリアコレクト</h1>

                <section class="invisalign-content__section">
                    <h3 class="h3-gray-bg">クリアコレクトとは？</h3>
                    <div class="invisalign-content__section-content">
                        <div class="invisalign-visual">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clearcorrect/clearcorrect-model.webp" alt="クリアコレクト マウスピース" class="invisalign-visual__img">
                        </div>

                        <div class="invisalign-content__text-content">
                            <p class="invisalign-content__text">
                                クリアコレクトとは、2006年アメリカで開発されたマウスピース型の矯正装置です。インプラントで有名な歯科の最大手企業ストローマンが提携しており、インビザラインの後発ではありますがマウスピース型矯正装置において2番目の実績を誇っています。
                            </p>
                            <p class="invisalign-content__text">
                                インビザラインよりも<span class="highlight">マウスピースが薄く</span>適合がタイトで、<span class="highlight">目立ちにくい</span>特長があります。
                            </p>
                        </div>
                    </div>
                </section>

                <section class="invisalign-content__section">
                    <h3 class="h3-gray-bg">クリアコレクトのメリット</h3>
                    <div class="invisalign-content__section-content">
                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">薄くしなやかなマウスピース</h4>
                            <p class="invisalign-merit__text">
                                クリアコレクトはインビザラインや他のマウスピース矯正よりも、<span class="highlight">マウスピースが薄く</span>フィットがタイトなため<span class="highlight">装着中の異物感が少ない</span>と言われています。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">歯を動かす力が強い</h4>
                            <p class="invisalign-merit__text">
                                マウスピースのフィットがタイトで、そのうえ歯肉に2mm程度が包むように設計されています。<span class="highlight">他のマウスピース矯正に比べて矯正力が強い</span>と言われています。マウスピース自体の矯正力が強いためアタッチメントという歯の表面に着ける矯正用の突起の数が少なくて済みます。
                            </p>
                        </div>

                        <div class="invisalign-visual">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clearcorrect/strong-image.webp" alt="クリアコレクト トリムライン比較図" class="invisalign-visual__img">
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">見えにくい、目立たない</h4>
                            <p class="invisalign-merit__text">
                                マウスピース矯正自体が目立ちにくい矯正と言われていますが、クリアコレクトはインビザラインや他のマウスピース矯正よりもマウスピースが薄くフィットがタイトです。薄いマウスピースで表面にも光沢が出ないように加工がしてあります。またアタッチメントという歯の表面に着ける突起の数が少なくて済みます。これは審美的にはかなり有利です。クリアコレクトは<span class="highlight">他のマウスピース矯正よりも目立ちにくいように開発されています</span>。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">金属アレルギーの方にも対応</h4>
                            <p class="invisalign-merit__text">
                                他のマウスピース矯正と同様に<span class="highlight">金属は不使用</span>のため、金属アレルギーをお持ちの方も安心して治療ができます。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">費用が抑えられる</h4>
                            <p class="invisalign-merit__text">
                                インビザラインの後発商品ですが、<span class="highlight">費用を安く行うことができます</span>。当院ではストローマンインプラントの取引があるのでクリアコレクトでは特にコストカットすることが出来ます。
                            </p>
                            <p class="invisalign-merit__text">
                                インビザライン以外と比べれば実績も優れたマウスピース矯正ですので、<span class="highlight">品質は心配ありません</span>。かなり特別な矯正ケース以外であればクリアコレクトで問題があるとは考えにくいです。
                            </p>
                        </div>
                    </div>
                </section>

                <section class="invisalign-content__section">
                    <h3 class="h3-gray-bg">クリアコレクトのデメリット</h3>
                    <div class="invisalign-content__section-content">
                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">マウスピースが硬い</h4>
                            <p class="invisalign-merit__text">
                                クリアコレクトはインビザラインや他のマウスピース矯正よりもマウスピースが薄く異物感は少ないですが、<span class="highlight">フィットがタイトなので取り外しにくかったり痛みが出やすいかもしれません</span>。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">デジタルスキャンのみ対応</h4>
                            <p class="invisalign-merit__text">
                                インビザラインやその他マウスピース矯正と異なり従来の歯型採りには対応しておらず、3Dデジタルスキャンのみに対応しているので、<span class="highlight">3Dデジタル矯正専用のスキャナーが使用できない医院や環境ではクリアコレクトを選択できません</span>。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">自己管理ができないと治療が遅れる</h4>
                            <p class="invisalign-merit__text">
                                他のマウスピース矯正と同様に<span class="highlight">患者様自身で装着を管理</span>することになります。マウスピースは毎日22時間以上の装着が必要です。食事と歯磨きの時以外は、ほぼ装着することになります。自由に外せることはメリットですが、<span class="highlight">時間を守って装着しないと治療が遅れることがあります</span>。
                            </p>
                        </div>

                        <div class="invisalign-merit">
                            <h4 class="invisalign-merit__title">クリアコレクトだけでは適用できない症例がある</h4>
                            <p class="invisalign-merit__text">
                                他の矯正方法と同様にマウスピースで動かすことができるのは歯と歯根のみです。<span class="highlight">骨格性の不正咬合などにはクリアコレクトだけでは対応できません</span>。
                            </p>
                        </div>
                    </div>
                </section>

                <section class="invisalign-content__section">
                    <h3 class="h3-gray-bg">クリアコレクトの症例</h3>
                    <div class="invisalign-content__section-content">
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images" style="margin-bottom: .5rem;">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clearcorrect/clearcorrect_06.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clearcorrect/clearcorrect_07.webp" alt="クリアコレクト矯正" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">クリアコレクト矯正</div>
                                </div>
                            </div>
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clearcorrect/clearcorrect_0702.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clearcorrect/clearcorrect_0902.webp" alt="クリアコレクト矯正" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">クリアコレクト矯正</div>
                                </div>
                            </div>
                        </div>

                        <div class="invisalign-content__text-content">
                            <p class="invisalign-content__text">
                                クリアコレクト矯正で上前歯2本の前突と下歯列全体の叢生を改善した症例です。
                            </p>
                            <p class="invisalign-content__text">
                                この症例は、上前歯2本の前突と下歯列全体の叢生の程度が大きかったので、クリアコレクト矯正でダメージしないように優しく矯正力をかけて進めました。
                            </p>
                            <p class="invisalign-content__text">
                                クリアコレクトはマウスピースの外形（トリムライン）が大きめで矯正圧が強いので臼歯部歯列の拡大を有利に行うことができます。
                            </p>
                            <p class="invisalign-content__text">
                                矯正量の大きなケースを最小限のダメージで矯正を行いました。
                            </p>
                        </div>

                        <table class="invisalign-go-case-table">
                            <tbody>
                                <tr class="invisalign-go-case-table__row">
                                    <th class="invisalign-go-case-table__item">リスクと副作用</th>
                                    <td class="invisalign-go-case-table__cost">
                                        クリアコレクトは他のマウスピース矯正に比べると、痛みが出やすいかもしれません。<br>
                                        矯正治療の期間や方法は歯並びや顎骨などの状態によって大きく異なります。<br>
                                        矯正治療は歯や歯周組織などに必ずダメージがあります。<br>
                                        矯正治療のダメージを最小限にするために健康的で現実的な治療計画を提案します。
                                    </td>
                                </tr>
                                <tr class="invisalign-go-case-table__row">
                                    <th class="invisalign-go-case-table__item">治療費</th>
                                    <td class="invisalign-go-case-table__cost">682,000円（税込）</td>
                                </tr>
                                <tr class="invisalign-go-case-table__row">
                                    <th class="invisalign-go-case-table__item">治療期間</th>
                                    <td class="invisalign-go-case-table__cost">12ヶ月</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

            </main>

            <?php get_template_part( 'template-parts/sidebar', 'service' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>