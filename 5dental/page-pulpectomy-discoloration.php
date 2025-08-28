<?php
/**
 * Template Name: すきっ歯/矮小歯
 * Description: すきっ歯/矮小歯のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "Small teeth" -->
            <div class="implant-fv__bg-text">Small teeth</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "すきっ歯/矮小歯" -->
                <h1 class="implant-fv__title">すきっ歯/矮小歯</h1>
                
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
                                <span class="breadcrumb__text">すきっ歯/矮小歯</span>
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
                <!-- すきっ歯/矮小歯セクション -->
                <div class="pulpectomy-section">
                    <!-- メインタイトル -->
                    <div class="pulpectomy-section__main-title">
                        <h2 class="pulpectomy-section__title">すきっ歯/矮小歯</h2>
                        <div class="pulpectomy-section__title-line"></div>
                    </div>
                    
                    <!-- サブセクション -->
                    <div class="pulpectomy-subsection">
                        <h3 class="h3-gray-bg">すきっ歯/矮小歯について</h3>
                        
                        <div class="pulpectomy-subsection__content">
                            <div class="pulpectomy-subsection__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/trouble2.svg" alt="すきっ歯/矮小歯のイラスト">
                            </div>
                            
                            <div class="pulpectomy-subsection__text">
                                <p>すきっ歯をセラミックの審美歯科で改善したい場合には、当院では削らないラミネートベニアをお薦めています。ラミネートベニアでは歯の表面に貼り付けるので出っ歯や八重歯の改善は難しいですが、すきっ歯や矮小歯の改善は得意です。</p>
                                
                                <p>すきっ歯の隙間を埋めるためには歯を大きくするのでラミネートベニアの横幅が広くなってしまいます。そのため通常は歯の形やバランスをキレイにするために歯肉整形とラミネートベニアを併用をして歯の形のバランスを整えます。</p>
                            </div>
                        </div>
                        
                        <div class="pulpectomy-subsection__bottom-text">
                            <p>矮小歯とは周りに比べて小さい歯のことで、側切歯（２番目の歯）に多く見られます。歯並びのバランスが崩れて見えたり、歯の隙間が目立ってしまったりします。</p>
                            <p>ラミネートベニアは小さい歯を大きくすることができます。</p>
                        </div>
                    </div>
                </div>

                <!-- 施術症例紹介セクション -->
                <section class="pulpectomy-content__section">
                    <h3 class="h3-gray-bg">すきっ歯・矮小歯をラミネートベニアで改善したケース</h3>
                    
                    <!-- Case1 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">上前歯6本 ラミネートベニア</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_01.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_02.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアで歯の色・すきっ歯・歯の形を改善した症例です。お口元がとても美しくなりました。</p>
                                    <p>＊削らないラミネートベニアは元の歯よりも少し厚く大きくなります。この症例のように歯を大きくすることはできますが、歯を小さくしたり出っ歯を治すことはできません。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case2 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">上前歯6本 ラミネートベニア</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_03.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_05.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_04.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/super_enamel_example_58.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアで歯の形、すきっ歯を改善した症例です。 すきっ歯で前歯の軸が右に曲がっていました。全体的にホワイトニングをしてから、削らないラミネートベニア6本を行いました。</p>
                                    <p>＊ラミネートベニアはすきっ歯を埋めることはできますが、出っ歯や歯の出っ張りを引っ込めることはできません。出っ歯や歯の出っ張り部分を削れば、歯の形を修正することもできます。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case3 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">上前歯6本 ラミネートベニア</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_07.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_09.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_0402.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_10.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアと歯肉整形ですきっ歯・矮小歯・歯の色を改善した症例です。歯肉整形と削らないラミネートベニアを行い、曲がっていた歯列が左右対称に見えるように改善しました。</p>
                                    <p>＊ラミネートベニアはすきっ歯を埋めることはできますが、出っ歯や歯の出っ張りを引っ込めることはできません。出っ歯や出っ張り部分の歯を削れば、歯の形を修正することもできます。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case4 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">上前歯8本 ラミネートベニア</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/super_enamel_example_53.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/super_enamel_example_55.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/super_enamel_example_54.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/super_enamel_example_56.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアで歯の大きさ・すきっ歯・乳歯・矮小歯を改善した症例です。</p>
                                    <p>歯肉整形と削らないラミネートベニアを行い、曲がっていた歯列が左右対称に見えるように改善しました。</p>
                                    <p>＊ラミネートベニアはすきっ歯を埋めることはできますが、出っ歯や歯の出っ張りを引っ込めることはできません。出っ歯や出っ張り部分の歯を削れば、歯の形を修正することもできます。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case5 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">上前歯8本 ラミネートベニア</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_11.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_12.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアと歯肉整形ですきっ歯・歯並び・歯の形を改善した症例です。全体的にホワイトニングをしてから、歯肉整形と削らないラミネートベニア8本を行いました。</p>
                                    <p>＊ラミネートベニアは削って被せるセラミッククラウンに比べると強度や耐久性は劣ります。この症例でもラミネートベニアは支台の歯を削っていません。</p>
                                    <p>＊削らないラミネートベニアは削らないで接着するため、元の歯よりも厚く大きくなります。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case6 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">上前歯8本 ラミネートベニア</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_13.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_14.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアですきっ歯・矮小歯を改善した症例です。 全体的にホワイトニングをしてから、歯肉整形と削らないラミネートベニア8本を行いました。</p>
                                    <p>＊ラミネートベニアは削って被せるセラミッククラウンに比べると強度や耐久性は劣ります。この症例でもラミネートベニアは支台の歯を削っていません。</p>
                                    <p>＊当院の削らないラミネートベニアは、スーパーエナメルやルミネアーズではありません。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case7 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">上前歯6本 ラミネートベニア</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_1502.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_1602.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>削らないラミネートベニアで、すきっ歯・歯の色・歯の形を改善した症例です。</p>
                                    <p>状態にもよりますが、すきっ歯は削らないラミネートベニアが最も得意とするケースの一つです。</p>
                                    <p>＊当院の削らないラミネートベニアは、スーパーエナメルやルミネアーズではありません。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case8 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">左上前歯3本 オールセラミッククラウンと5本ラミネートベニア + 歯肉整形</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/ceramic_case_13.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/ceramic_case_15.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_15.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/ceramic_case_16.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>左上前歯3本のオールセラミックブリッジと上中央前歯2本を含む5本のラミネートベニアを行った症例です。左上Cの残存乳歯は抜歯し、全体の歯肉整形と合わせてオールセラミックブリッジを行ました。上中央前歯はすきっ歯と歯並びを改善するために削ってからラミネートベニアを行いました。</p>
                                    <p>＊病状によりますが治療期間が長くかかるケースもあります。下前歯にはラミネートベニアを行えません。ラミネートベニア前に下前歯や全体的なホワイトニングを行うようにしています。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- マウスピース矯正セクション -->
                <section class="pulpectomy-content__section">
                    <h3 class="h3-gray-bg">すきっ歯をマウスピース矯正で改善したケース</h3>
                    
                    <!-- Case1 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">上下前歯すっ歯 マウスピース矯正</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_21.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_22.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>マウスピース矯正の部分矯正で上下前歯のすっ歯を改善した症例です。</p>
                                    <p>状態によりますが、すっ歯の前歯のマウスピース矯正の期間はそう長くないです。</p>
                                    <p>全体的な歯列矯正では期間・費用の問題もあり躊躇されやすい。</p>
                                </div>
                                
                                <!-- テーブル -->
                                <div class="gum-shaping-case__table">
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">矯正治療の期間・方法</div>
                                        <div class="gum-shaping-case__table-content">矯正治療の期間・方法は症状や今やりたいことの判断によって大きく異なります。<br>マウスピース矯正<br>矯正治療は歯や組織を移動などによってアンカーーーをとります。<br>矯正治療のメリットーデメリットに関してはそういった判断での評価項目を具体し考えます。</div>
                                    </div>
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">治療費</div>
                                        <div class="gum-shaping-case__table-content">583,000</div>
                                    </div>
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">治療期間</div>
                                        <div class="gum-shaping-case__table-content">6.5ヶ月</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case2 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">上下前歯すっ歯 マウスピース矯正</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_17.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_18.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>マウスピース矯正の部分矯正で上下前歯のすっ歯を改善した症例です。</p>
                                    <p>状態によりますが、すっ歯の前歯のマウスピース矯正の期間はそう長くないです。</p>
                                    <p>全体的な歯列矯正では期間・費用の問題もあり躊躇されやすい。</p>
                                </div>
                                
                                <!-- テーブル -->
                                <div class="gum-shaping-case__table">
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">矯正治療の期間・方法</div>
                                        <div class="gum-shaping-case__table-content">矯正治療の期間・方法は症状や今やりたいことの判断によって大きく異なります。<br>マウスピース矯正<br>矯正治療は歯や組織を移動などによってアンカーーーをとります。<br>矯正治療のメリットーデメリットに関してはそういった判断での評価項目を具体し考えます。</div>
                                    </div>
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">治療費</div>
                                        <div class="gum-shaping-case__table-content">470,000</div>
                                    </div>
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">治療期間</div>
                                        <div class="gum-shaping-case__table-content">6.5ヶ月</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Case3 -->
                    <div class="gum-shaping-content__section">
                        <h4 class="h4-left-line">上前歯すっ歯 マウスピース矯正</h4>
                        <div class="gum-shaping-content__section-content">
                            <!-- Before/After画像 -->
                            <div class="gum-shaping-case">
                                <div class="gum-shaping-case__images">
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_19.webp" alt="施術前" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術前</div>
                                    </div>
                                    <div class="gum-shaping-case__image-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pulpectomy-discoloration/small_teeth_20.webp" alt="施術後" class="gum-shaping-case__image">
                                        <div class="gum-shaping-case__label">施術後</div>
                                    </div>
                                </div>
                                
                                <div class="gum-shaping-case__text">
                                    <p>マウスピース矯正の部分矯正で上前歯のすっ歯を改善した症例です。</p>
                                    <p>状態によりますが、すっ歯の前歯のマウスピース矯正の期間はそう長くないです。</p>
                                    <p>矯正治療は歯列調和では明らかに調整が必要された治療も実施致します。</p>
                                </div>
                                
                                <!-- テーブル -->
                                <div class="gum-shaping-case__table">
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">矯正治療の期間・方法</div>
                                        <div class="gum-shaping-case__table-content">矯正治療の期間・方法は症状や今やりたいことの判断によって大きく異なります。<br>マウスピース矯正<br>矯正治療は歯や組織を移動などによってアンカーーーをとります。<br>矯正治療のメリットーデメリットに関してはそういった判断での評価項目を具体し考えます。</div>
                                    </div>
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">治療費</div>
                                        <div class="gum-shaping-case__table-content">420,000</div>
                                    </div>
                                    <div class="gum-shaping-case__table-row">
                                        <div class="gum-shaping-case__table-header">治療期間</div>
                                        <div class="gum-shaping-case__table-content">4.5ヶ月</div>
                                    </div>
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