<?php
/**
 * Template Name: 痛みに配慮した治療
 * Description: 痛みに配慮した治療のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

    <div class="bg-decoration">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-gray.png" alt="" class="bg-decoration__img">
    </div>

    <main class="main">
        <section class="orthodontics-fv">
            <div class="orthodontics-fv__container">
                <div class="orthodontics-fv__bg-text">Painless</div>

                <div class="orthodontics-fv__content">
                    <h1 class="orthodontics-fv__title">痛みに配慮した治療について</h1>

                    <nav class="orthodontics-fv__breadcrumb">
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
                                <span class="breadcrumb__text">痛みに配慮した治療について</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <!-- メインコンテンツセクション -->
        <section class="access-info">
            <div class="access-info__container">
                <!-- メインタイトル -->
                <h2 class="section-title-with-subtitle">
                    <span class="section-title-with-subtitle__subtitle">Painless</span>
                    <span class="section-title-with-subtitle__title">痛みに配慮した治療について</span>
                </h2>

                <div class="access-info__details">
                    <!-- 導入文 -->
                    <div class="no-pain-intro">
                        <p class="no-pain-intro__text">当院では歯科治療時の<span class="cleaning-highlight">痛みに配慮した治療</span>に取り組んでいます。</p>
                        <p class="no-pain-intro__text">歯科治療を苦手に感じている方は多いです。多くの患者様は以前の虫歯治療時の痛みや、麻酔時の痛みをイメージなさるかもしれません。患者様にストレスなく歯科治療を受けて頂けるように、当院では痛みが少なく効率的な治療を行っています。</p>
                    </div>

                    <!-- 電動麻酔機セクション -->
                    <h3 class="no-pain-section-title">電動麻酔機</h3>
                    <div class="new-approach-section">
                        
                        <div class="new-approach-section__content">
                            <div class="new-approach-section__image-text">
                                <div class="new-approach-section__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-pain/no-pain_01.webp" alt="電動麻酔機">
                                </div>
                                
                                <div class="new-approach-section__right-text">
                                    <p>麻酔時の痛みは、麻酔薬の注入スピードと関連します。<br>電動麻酔機では注入スピードを自動でコントロールします。</p>
                                    <p>歯科麻酔薬を適切なスピードで、ゆっくりとしたスピードで注入することによって、歯科麻酔時の痛みを最小限で行えます。</p>
                                </div>
                            </div>
                            
                            <div class="new-approach-section__bottom-text">
                                <p>また、激痛時の治療や、奥歯の治療や、抜歯の時など歯科麻酔が効きづらい場合があります。電動麻酔機では男性歯科医師以上のパワーで注入することも可能です。逆に安全のためにパワーのかかり過ぎの無いようにもコントロールすることが出来ます。</p>
                                <p>通常の歯科麻酔に比べ、麻酔が効きづらい場合でも確実に効かせることが出来ます。<span class="cleaning-highlight">痛みの軽減、低侵襲、安全のため</span>にとても優秀な機材です。</p>
                            </div>
                        </div>
                    </div>

                    <!-- 極細の注射針セクション -->
                    <h3 class="no-pain-section-title">極細の注射針</h3>
                    <div class="new-approach-section">
                        
                        <div class="new-approach-section__content">
                            <div class="new-approach-section__image-text new-approach-section__image-text--reverse">
                                <div class="new-approach-section__left-text">
                                    <p>注射針も新しくなっています。</p>
                                    <p>以前は安全性のためあまり細い針は使えませんでした。<br>現在は注射針の材質も向上し強度があるため、当院の電動麻酔機では<span class="cleaning-highlight">とても細い注射針</span>を使うことが出来ます。</p>
                                    <p>通常の麻酔針に比べて痛みの少ない歯科麻酔が行えます。</p>
                                </div>
                                
                                <div class="new-approach-section__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-pain/no-pain_02.webp" alt="極細の注射針">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 表面麻酔薬セクション -->
                    <h3 class="no-pain-section-title">表面麻酔薬（ぬり薬の麻酔）</h3>
                    <div class="access-info__method">
                        <p>歯科麻酔時の針刺しの痛みを和らげるための表面麻酔薬も使えます。</p>
                        <p>当院では<span class="cleaning-highlight">電動麻酔機用の極細の針</span>を用いるため、針刺し時の痛みはかなり少ないですが、注射が苦手な方などには、より痛みが少ないように針刺し前に表面麻酔薬(ぬり薬の麻酔)を使うことも出来ます。</p>
                    </div>

                    <!-- 痛み止めの処方セクション -->
                    <h3 class="no-pain-section-title">痛み止めの処方</h3>
                    <div class="access-info__method">
                        <p>当院では<span class="cleaning-highlight">低侵襲(歯や体にダメージの少ない)の治療、滅菌・消毒・衛生管理を高いレベルで行っています</span>ので、痛みや腫れは起こりにくい治療を行っております。しかし歯科治療後の痛みや腫れが心配である患者様に対して、痛み止めなどの処方も出来ます。</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>