<?php
/**
 * Template Name: インビザラインGO
 * Description: インビザラインGOのページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <section class="invisalign-go-fv">
        <div class="invisalign-go-fv__container">
            <div class="invisalign-go-fv__bg-text">Invisalign GO</div>
            
            <div class="invisalign-go-fv__content">
                <h1 class="invisalign-go-fv__title">インビザラインGO</h1>
                
                <nav class="invisalign-go-fv__breadcrumb">
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
                                <span class="breadcrumb__text">インビザラインGO</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <section class="invisalign-go-content">
        <div class="invisalign-go-content__container">
            <main class="invisalign-go-content__main">
                <div class="invisalign-go-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/orthodontics/invisalign-go.webp" alt="インビザラインGO" class="invisalign-go-content__hero-img">
                </div>

                <h1 class="orthodontics-content__main-title">インビザラインGO</h1>

                <section class="invisalign-go-content__section">
                    <h3 class="h3-gray-bg">インビザラインGOとは？</h3>
                    <div class="invisalign-go-content__section-content">
                        <div class="invisalign-go-images">
                            <div class="invisalign-go-images__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/igo/invisalign-go-model.webp" alt="インビザラインGOモデル" class="invisalign-go-images__img">
                            </div>
                            <div class="invisalign-go-images__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/igo/invisalign-go-wear.webp" alt="インビザラインGO装着" class="invisalign-go-images__img">
                            </div>
                        </div>
                        
                        <div class="invisalign-go-content__text-content">
                            <p class="invisalign-go-content__text">
                                インビザラインGOシステムは、インビザラインにコンピューターAIの機能を加えて、<span class="highlight">前歯の矯正・部分矯正がより効率的で、よりスピーディーに行うことができる</span>インビザラインの新しいシステムです。
                            </p>
                            <p class="invisalign-go-content__text">
                                インビザラインGOは前歯を中心とした審美領域に特化した、インビザラインのAIによるマウスピース矯正プログラムによって、他の矯正方法よりも効率的でスピーディーな矯正治療を行うことができるインビザラインの新しいシステムです。
                            </p>
                            <p class="invisalign-go-content__text">
                                インビザラインGOは前歯部中心の審美領域の矯正計画になるため、<span class="highlight">矯正期間は非常に短くおおよそ3～7ヶ月程度で歯並びを審美的に改善できます</span>。ただしインビザラインのように1歯ごとに細かな矯正を計画したり、奥歯全体の咬合改善などを行うことはできません。そういったケースではインビザラインの方がより細やかな特殊な矯正計画を行うことができます。
                            </p>
                        </div>

                        <div class="invisalign-go-single-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/igo/ortho_invisalign1001.webp" alt="インビザラインGO詳細" class="invisalign-go-single-image__img">
                        </div>
                    </div>
                </section>

                <section class="invisalign-go-content__section">
                    <h3 class="h3-gray-bg">インビザラインGOの症例</h3>
                    <div class="invisalign-go-content__section-content">
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/igo/igo_031.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/igo/igo_041.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>
                        </div>

                        <div class="invisalign-go-content__text-content">
                            <p class="invisalign-go-content__text">
                                インビザラインGoで上下前歯のすきっ歯とガミースマイルを改善した症例です。
                            </p>
                            <p class="invisalign-go-content__text">
                                状態にもよりますが、すきっ歯はインビザラインGoの得意とするケースの一つです。
                            </p>
                            <p class="invisalign-go-content__text">
                                臼歯（奥歯）の歯並び咬み合わせが比較的キレイで骨格的な問題が無ければ、前歯の歯並びはインビザラインGoで効率的に改善することができます。
                            </p>
                            <p class="invisalign-go-content__text">
                                効率的な治療計画で最小限の期間と負担で矯正を行いました。
                            </p>
                        </div>

                        <table class="invisalign-go-case-table">
                            <tbody>
                                <tr class="invisalign-go-case-table__row">
                                    <th class="invisalign-go-case-table__item">リスクと副作用</th>
                                    <td class="invisalign-go-case-table__cost">
                                        インビザラインGoは臼歯（奥歯）の歯並び咬み合わせを改善することはできません。<br>
                                        矯正治療の期間や方法は歯並びや顎骨などの状態によって大きく異なります。<br>
                                        矯正治療は歯や歯周組織などに必ずダメージがあります。<br>
                                        矯正治療のダメージを最小限にするために健康的で現実的な治療計画を提案します。
                                    </td>
                                </tr>
                                <tr class="invisalign-go-case-table__row">
                                    <th class="invisalign-go-case-table__item">治療費</th>
                                    <td class="invisalign-go-case-table__cost">583,000円（税込）</td>
                                </tr>
                                <tr class="invisalign-go-case-table__row">
                                    <th class="invisalign-go-case-table__item">治療期間</th>
                                    <td class="invisalign-go-case-table__cost">6.5ヶ月</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section class="invisalign-go-content__section">
                    <h3 class="h3-gray-bg">インビザラインGOのメリット</h3>
                    <div class="invisalign-go-content__section-content">
                        <div class="invisalign-go-merit">
                            <h4 class="invisalign-go-merit__title">インビザラインの実績と信頼の品質</h4>
                            <p class="invisalign-go-merit__text">
                                インビザラインからの新商品なので、<span class="highlight">インビザラインの技術や品質がそのまま受け継がれています</span>。インビザラインGOはよりシンプルでスピーディーな特長があります。
                            </p>
                        </div>

                        <div class="invisalign-go-merit">
                            <h4 class="invisalign-go-merit__title">費用が抑えられる</h4>
                            <p class="invisalign-go-merit__text">
                                インビザラインよりもシンプルでオートマチックな治療計画になるので、<span class="highlight">治療期間が早く費用も安く行うことが出来ます</span>。
                            </p>
                        </div>

                        <div class="invisalign-go-merit">
                            <h4 class="invisalign-go-merit__title">矯正治療が短期間</h4>
                            <p class="invisalign-go-merit__text">
                                インビザラインのAIが約6ヶ月のシンプルな治療計画を設計します。<span class="highlight">6ヶ月程度で行えるマウスピース矯正です</span>。（6ヶ月のインビザラインGOを2回行うこともできます。）
                            </p>
                        </div>
                    </div>
                </section>

                <section class="invisalign-go-content__section">
                    <h3 class="h3-gray-bg">インビザラインGOに適しているケース</h3>
                    <div class="invisalign-go-content__section-content">
                        <div class="invisalign-go-apply">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/igo/invisalign-go-apply.webp" alt="インビザラインGOに適しているケース" class="invisalign-go-apply__img">
                        </div>

                        <div class="invisalign-go-case">
                            <h4 class="invisalign-go-case__title">歯並びの審美的改善</h4>
                            <p class="invisalign-go-case__text">
                                前歯の見た目や咬み合わせが気になっているが、奥歯の歯並びや咬み合わせには問題がないような<span class="highlight">一般的な歯列不正</span>を改善したいケース全般。
                            </p>
                        </div>

                        <div class="invisalign-go-case">
                            <h4 class="invisalign-go-case__title">前歯のすきっ歯</h4>
                            <p class="invisalign-go-case__text">
                                前歯のすきっ歯を改善したいケースでは、状態にもよりますが奥歯の咬み合わせに問題がなければ、<span class="highlight">他の矯正方法よりも効率的で短期間に行える可能性があります</span>。
                            </p>
                        </div>

                        <div class="invisalign-go-case">
                            <h4 class="invisalign-go-case__title">費用を抑えて矯正治療をしたい</h4>
                            <p class="invisalign-go-case__text">
                                インビザラインGOはAIによってオートマチックな治療計画を行うことができます。<span class="highlight">治療期間や治療の規模を最小限に設計</span>することで、インビザラインや他の矯正方法よりも費用を抑えることができます。
                            </p>
                        </div>

                        <div class="invisalign-go-case">
                            <h4 class="invisalign-go-case__title">以前に矯正治療の後戻りの改善</h4>
                            <p class="invisalign-go-case__text">
                                以前に矯正治療を行い後戻りによる歯列不正が気になっているようなケースでは、矯正治療後の今のその状態を生かして気になっているところ、<span class="highlight">改善したいところにだけフォーカス</span>して効率的な治療計画を行うことができます。
                            </p>
                        </div>

                        <div class="invisalign-go-case">
                            <h4 class="invisalign-go-case__title">インプラントやブリッジをするための術前矯正</h4>
                            <p class="invisalign-go-case__text">
                                <span class="highlight">歯を失うと周りの歯がズレて歯並びや咬み合わせが崩れてしまいます</span>。インプラントやブリッジをする場合に歯のスペースを適切に整えたり周りの歯並び咬み合わせを整えたりする術前矯正を行うことができます。
                            </p>
                        </div>

                        <div class="invisalign-go-case">
                            <h4 class="invisalign-go-case__title">ラミネートベニアの審美歯科における術前矯正</h4>
                            <p class="invisalign-go-case__text">
                                ラミネートベニアは上前歯の審美歯科が歯を削らずに行うことができる方法です。削って被せるセラミッククラウンと比較して低侵襲で行えるのですが、歯並びを大きく変えることができません。<span class="highlight">ラミネートベニアの審美歯科をより有利にキレイに行う</span>ために、インビザラインGoではより効率的に費用を抑えて術前矯正を行うことができます。
                            </p>
                            <p class="invisalign-go-case__text">
                                また逆に、他院での矯正治療後の審美障害（歯の変色や歯並び不正やブラックトライアングルやすきっ歯など）に対して前歯の審美を改善するために、削らないラミネートベニアを選択し、矯正治療と審美歯科の両方に精通する当院にご来院なさる方も非常に多いです。
                            </p>
                        </div>

                        <div class="invisalign-go-case">
                            <h4 class="invisalign-go-case__title">セラミック治療や審美歯科における術前矯正</h4>
                            <p class="invisalign-go-case__text">
                                セラミッククラウンによる虫歯治療や審美歯科は歯並びや咬み合わせを改善することができますが、過度に歯並びが悪ければセラミック治療にも無理がかかります。<span class="highlight">セラミック治療をより有利にキレイに行う</span>ために、インビザラインGoではより効率的に費用を抑えて術前矯正を行うことができます。
                            </p>
                            <p class="invisalign-go-case__text">
                                また逆に、他院での矯正治療後の審美障害（歯の変色、歯並び不正、ブラックトライアングル、すきっ歯など）や機能障害（虫歯、歯のグラつき動揺、咬合の不正など）に対してオールセラミック治療を行うために、矯正治療とオールセラミック補綴治療の両方に精通する当院にご来院なさる方も非常に多いです。
                            </p>
                        </div>

                        <div class="invisalign-go-case">
                            <h4 class="invisalign-go-case__title">ワイヤー矯正治療が長期間になり滞っているケース</h4>
                            <p class="invisalign-go-case__text">
                                全体的な矯正治療を表側ワイヤー矯正や裏側ワイヤー矯正で行っているケースで、全体的には矯正が進んでいるが前歯審美領域の微調整などの仕上げ部分に時間がかかりワイヤー矯正治療が滞ってしまっているケースなどでは、<span class="highlight">デジタルのインビザラインGOでは細やかな矯正治療が仕上げやすい</span>です。
                            </p>
                            <p class="invisalign-go-case__text">
                                また当院ではラミネートベニアやオールセラミックの審美歯科の対応も可能です。
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