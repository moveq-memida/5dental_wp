<?php
/**
 * Template Name: 歯を真っ白にしたい
 * Description: 歯を真っ白にしたい方向けのページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "White teeth" -->
            <div class="implant-fv__bg-text">White teeth</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "歯を真っ白にしたい" -->
                <h1 class="implant-fv__title">歯を真っ白にしたい</h1>
                
                <!-- パンくずリスト -->
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
                            <li class="breadcrumb__item breadcrumb__item--current">
                                <span class="breadcrumb__text">歯を真っ白にしたい</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <!-- メインコンテンツセクション -->
    <section class="implant-content">
        <div class="implant-content__container">
            <!-- メインコンテンツエリア -->
            <main class="implant-content__main">       
                <!-- 歯を真っ白にしたいセクション -->
                <div class="white-teeth-section">
                    <!-- メインタイトル -->
                    <div class="white-teeth-section__main-title">
                        <h2 class="white-teeth-section__title">歯を真っ白にしたい</h2>
                        <div class="white-teeth-section__title-line"></div>
                    </div>
                    
                    <!-- サブセクション -->
                    <div class="white-teeth-subsection">
                        <h3 class="h3-gray-bg">歯を真っ白にしたい方へ</h3>
                        
                        <div class="white-teeth-subsection__content">
                            <div class="white-teeth-subsection__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-teeth/trouble4.svg" alt="歯のホワイトニング">
                            </div>
                            
                            <div class="white-teeth-subsection__text">
                                <p>歯を白くする方法で第一選択はホワイトニングです。</p>
                                
                                <p>歯科医院でのホワイトニングは薬局などの市販のホワイトニング商品や歯科医院ではないサロンでのホワイトニングとは全く異なり、薬剤によって歯の色素タンパクを分解・漂白して歯の色自体を白くすることができます。歯を削らない低侵襲な審美歯科なので当院ではお薦めしています。</p>
                                
                                <p>ホワイトニングでは透明感のある白さにすることはできます。個人差や限界がありますが、不透明な白や人工的な真っ白にすることはできません。</p>
                            </div>
                        </div>
                        
                        <div class="white-teeth-subsection__bottom-text">
                            <p>ホワイトニング以上の白さを求める場合は、セラミックによって審美歯科治療を行う必要があります。当院でご提案できる方法は、セラミッククラウンと、削らないラミネートベニアです。</p>
                            
                            <p>セラミッククラウンは従来からある審美歯科治療で、歯を削ってセラミックを被せる方法です。セラミッククラウンは歯の全周をセラミックで覆うので強度があります。また、歯並びを整えることも可能で、審美性に優れ、完成度が高い方法です。</p>
                            
                            <p>削らないラミネートベニアは、従来型のラミネートベニアやセラミッククラウンのように歯を削らずに行えるので、低侵襲で身体に優しい治療法です。</p>
                        </div>
                    </div>
                </div>

                <!-- 施術症例紹介セクション -->
                <section class="white-teeth-content__section">
                    <h3 class="h3-gray-bg">施術症例紹介</h3>
                    
                    <!-- Case1 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case1. 上前歯8本 ラミネートベニア</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-teeth/whitening-teeth_05.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-teeth/super_enamel_example_58.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアですきっ歯・矮小歯を改善し、歯を白くした症例です。</p>
                                    <p>歯肉整形と削らないラミネートベニア8本を行いました。</p>
                                    <p>＊ラミネートベニアはすきっ歯を埋めることはできますが、出っ歯や歯の出っ張りを引っ込めることはできません。出っ歯や歯の出っ張り部分を削れば、歯の形を修正することもできます。</p>
                                    <p>＊下前歯にはラミネートベニアを行えません。ホワイトニングかセラミッククラウンの選択肢になります。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case2 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case2. 上前歯8本 ラミネートベニア + ホワイトニング</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-teeth/whitening-teeth_01.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-teeth/whitening-teeth_02.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアで歯の色・形を改善した症例です。歯の形を整えて大きくするために、歯肉整形も行いました。</p>
                                    <p>歯を大きくして真っ白にしたいという希望だったので、全体的にもホワイトニングをし、上前歯を白い色に仕上げました。</p>
                                    <p>＊削らないラミネートベニアは歯を大きくすることができます。出っ歯を引っ込めたり歯を小さくすることはできません。</p>
                                    <p>＊ラミネートベニアは透明感がある自然な雰囲気は難しいですが、白くツヤツヤに仕上げることはできます。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case3 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case3. 上前歯8本 ラミネートベニア</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-teeth/white-teeth_05.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-teeth/white-teeth_06.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>前歯を大きく真っ白くしたい希望の症例です。削らないラミネートベニアで歯の色・大きさ・形を改善しました。</p>
                                    <p>＊削らないラミネートベニアは歯を大きくすることができます。出っ歯を引っ込めたり歯を小さくすることはできません。</p>
                                    <p>＊ラミネートベニアは透明感がある自然な雰囲気は難しいですが、白くツヤツヤに仕上げることはできます。</p>
                                    <p>＊下前歯にはラミネートベニアを行えません。ホワイトニングかセラミッククラウンの選択肢になります。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case4 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">Case4. 上前歯10本 ラミネートベニア</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-teeth/whitening-teeth_03.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-teeth/whitening-teeth_04.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアで歯の色を改善した症例です。歯を大きくして真っ白にしたいという希望だったので、上前歯を真っ白い色に仕上げました。</p>
                                    <p>＊ラミネートベニアは透明感がある自然な雰囲気は難しいですが、白くツヤツヤに仕上げることはできます。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>

            <!-- サイドバー -->
            <?php get_template_part( 'template-parts/sidebar', 'service' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>