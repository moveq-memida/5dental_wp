<?php
/**
 * Template Name: 前歯の歯並び
 * Description: 前歯の歯並びのページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "Frontteeth-dentition" -->
            <div class="implant-fv__bg-text">Frontteeth-dentition</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "前歯の歯並び" -->
                <h1 class="implant-fv__title">前歯の歯並び</h1>
                
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
                                <span class="breadcrumb__text">前歯の歯並び</span>
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
                <!-- 歯を大きくしたいセクション -->
                <section class="pulpectomy-content__section">
                    <!-- 前歯の歯並びが気になる方へセクション -->
                    <div class="pulpectomy-subsection">
                        <h3 class="h3-gray-bg">前歯の歯並びが気になる方へ</h3>
                        
                        <div class="pulpectomy-subsection__content">
                            <div class="pulpectomy-subsection__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/trouble7.svg" alt="前歯の歯並びが気になる方へのイラスト">
                            </div>
                            
                            <div class="pulpectomy-subsection__text">
                                <p>歯並びが悪いと汚れが溜まりやすい、虫歯になりやすい、審美的にキレイに見えないなど、お悩みを抱えている方が多くいらっしゃいます。歯並びを治す方法として矯正治療が一般的です。</p>
                                
                                <p>最近では取り外し可能で目立たないマウスピース矯正がお薦めできます。</p>
                                
                                <p>矯正治療で歯並びを治すことはできますが、歯の色や歯の形を変えることはできません。歯の色や形の改善が希望で矯正治療を考えていない方にはセラミック審美治療をおススメします。セラミッククラウンは歯の形を大きく変えることができます。歯並びのガタガタが少しであれば、削らないラミネートベニアで歯の色や形を改善することができます。</p>
                            </div>
                        </div>
                    </div>
                    <!-- 施術症例紹介セクション -->
                    <div class="pulpectomy-content__section">
                        <h3 class="h3-gray-bg">施術症例紹介</h3>
                        
                        <!-- Case1 -->
                        <div class="gum-shaping-content__section">
                            <h4 class="h4-left-line">Case1. 上前歯6本 ラミネートベニア</h4>
                            
                            <!-- 画像ペア1 -->
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_01.webp" alt="Case1施術前" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術前</span>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_03.webp" alt="Case1施術後" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術後</span>
                                </div>
                            </div>
                            
                            <!-- 画像ペア2 -->
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_02.webp" alt="Case1施術前" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術前</span>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_04.webp" alt="Case1施術後" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術後</span>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>削らないラミネートベニアで歯の形、すきっ歯の歯並びを改善した症例です。すきっ歯で前歯の軸が右に曲がっていました。</p>
                                <p>全体的にホワイトニングをしてから、削らないラミネートベニア6本を行いました。</p>
                                <p>＊ラミネートベニアはすきっ歯を埋めることはできますが、出っ歯や歯の出っ張りを引っ込めることはできません。出っ歯や歯の出っ張り部分を削れば、歯の形を修正することもできます。</p>
                            </div>
                        </div>
                        
                        <!-- Case2 -->
                        <div class="gum-shaping-content__section">
                            <h4 class="h4-left-line">Case2. 上前歯6本 ラミネートベニア</h4>
                            
                            <!-- 画像ペア1 -->
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_05.webp" alt="Case2施術前" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術前</span>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_07.webp" alt="Case2施術後" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術後</span>
                                </div>
                            </div>
                            
                            <!-- 画像ペア2 -->
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_06.webp" alt="Case2施術前" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術前</span>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_08.webp" alt="Case2施術後" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術後</span>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>削らないラミネートベニアと歯肉整形で、歯の大きさ・すきっ歯の歯並びを改善した症例です。歯肉整形と削らないラミネートベニアを行い、曲がっていた歯列が左右対称に見えるように改善しました。</p>
                                <p>＊ラミネートベニアはすきっ歯を埋めることはできますが、出っ歯や歯の出っ張りを引っ込めることはできません。出っ歯や出っ張り部分の歯を削れば、歯の形を修正することもできます。</p>
                            </div>
                        </div>
                        
                        <!-- Case3 -->
                        <div class="gum-shaping-content__section">
                            <h4 class="h4-left-line">Case3. 上前歯8本 歯肉整形</h4>
                            
                            <!-- 単一画像ペア -->
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/projecting-teeth_1102.webp" alt="Case3施術前" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術前</span>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/projecting-teeth_1202.webp" alt="Case3施術後" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術後</span>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>骨格性のガミースマイルで矯正治療や外科治療を検討しているとのことでした。矯正治療や外科治療をしなければ骨格のゆがみや咬み合わせは改善しませんが、一旦は簡単な治療でガミースマイルの見た目を改善したいとのことでした。</p>
                                <p>当院にて歯肉整形を行い歯肉の左右差を整えてガミースマイルを改善しました。</p>
                            </div>
                        </div>
                        
                        <!-- Case4 -->
                        <div class="gum-shaping-content__section">
                            <h4 class="h4-left-line">Case4. 上前歯8本 ラミネートベニア + 歯肉整形</h4>
                            
                            <!-- 単一画像ペア -->
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/projecting-teeth_1103.webp" alt="Case4施術前" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術前</span>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/projecting-teeth_1204.webp" alt="Case4施術後" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術後</span>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>削らないラミネートベニアと歯肉整形ですきっ歯・歯並び改善した症例です。</p>
                                <p>全体的にホワイトニングをしてから、歯肉整形と削らないラミネートベニア8本を行いました。</p>
                                <p>＊ラミネートベニアは削って被せるセラミッククラウンに比べると強度や耐久性は劣ります。この症例でもラミネートベニアは支台の歯を削っていません。</p>
                                <p>＊削らないラミネートベニアは削らないで接着するため、元の歯よりも厚く大きくなります。</p>
                            </div>
                        </div>
                        
                        <!-- Case5 -->
                        <div class="gum-shaping-content__section">
                            <h4 class="h4-left-line">Case5. 上前歯８本　ラミネートべニア ＋ セラミッククラウン + 歯肉整形</h4>
                            
                            <!-- 画像ペア1 -->
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_11.webp" alt="Case5施術前" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術前</span>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_13.webp" alt="Case5施術後" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術後</span>
                                </div>
                            </div>
                            
                            <!-- 画像ペア2 -->
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_12.webp" alt="Case5施術前" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術前</span>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_14.webp" alt="Case5施術後" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術後</span>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>テトラサイクリン歯の色と古いクラウンを改善した症例です。下前歯や全体をホワイトニングしました。上前歯中央2本は元々のセラミッククラウンをオールセラミッククラウンにし、周りの4本を削らないラミネートベニアで色調を統一し改善しました。</p>
                                <p>オールセラミッククラウンと削らないラミネートベニアの組み合わせによる治療は当院で数多く行っています。</p>
                                <p>＊下前歯にはラミネートベニアを行えません。ホワイトニングかセラミッククラウンの選択肢になります。</p>
                            </div>
                        </div>
                        
                        <!-- Case6 -->
                        <div class="gum-shaping-content__section">
                            <h4 class="h4-left-line">Case6. 上前歯6本 ラミネートベニア＋セラミッククラウン + 歯肉整形</h4>
                            
                            <!-- 単一画像ペア -->
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_11.webp" alt="Case6施術前" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術前</span>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projecting-teeth02/frontteeth_dentition_13.webp" alt="Case6施術後" class="gum-shaping-case__image">
                                    <span class="gum-shaping-case__label">施術後</span>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>歯肉整形を行った上で、削らないラミネートべニアとセラミッククラウンで歯並びを改善した症例です。</p>
                                <p>上中央前歯２本と左上３番目の歯はセラミッククラウンで、その他3本は削らないラミネートべニアで治しました。</p>
                                <p>＊削らないラミネートべニアでは出ている歯を引っ込めることはできないので、セラミッククラウンで治しました。</p>
                                <p>＊削らないラミネートベニアは審美処置であり虫歯治療ではありません。虫歯治療はセラミッククラウンで行っています。</p>
                                <p>＊削らないラミネートベニアは削らないで接着するため、元の歯よりも厚く大きくなります。</p>
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