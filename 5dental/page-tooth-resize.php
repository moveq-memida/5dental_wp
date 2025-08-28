<?php
/**
 * Template Name: 歯を大きくしたい
 * Description: 歯を大きくしたいのページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "Tooth-resize" -->
            <div class="implant-fv__bg-text">Tooth-resize</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "歯を大きくしたい" -->
                <h1 class="implant-fv__title">歯を大きくしたい</h1>
                
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
                                <span class="breadcrumb__text">歯を大きくしたい</span>
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
                <div class="pulpectomy-section">
                    <!-- メインタイトル -->
                    <div class="pulpectomy-section__main-title">
                        <h2 class="pulpectomy-section__title">歯を大きくしたい</h2>
                        <div class="pulpectomy-section__title-line"></div>
                    </div>
                    
                    <!-- サブセクション -->
                    <div class="pulpectomy-subsection">
                        <h3 class="h3-gray-bg">歯を大きくしたい方へ</h3>
                        
                        <div class="pulpectomy-subsection__content">
                            <div class="pulpectomy-subsection__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/trouble9.svg" alt="歯を大きくしたい方へのイラスト">
                            </div>
                            
                            <div class="pulpectomy-subsection__text">
                                <p>白くて大きな歯は、笑ったときに華やかで魅力的な印象を与えます。小さい歯は幼い・可愛らしい印象を与えるので、歯の大きさひとつで印象が大きく異なります。歯を大きくしたいケースでは「歯肉整形」と「削らないラミネートベニア」を組み合わせることで改善が期待できます。</p>
                                
                                <p>歯が小さく見える原因の1つがガミースマイルです。ガミースマイルとは笑ったときに歯肉が過剰に見える口元のことを表し、余分な歯肉が歯の根元を覆って歯の縦幅が短く見えてしまいます。</p>
                            </div>
                        </div>
                        
                        <div class="pulpectomy-subsection__bottom-text">
                            <p>歯の縦幅・横幅には黄金比があり、ガミースマイルの方で歯の縦長さが短い場合には歯肉整形で余分な歯肉を除去し、口元からの歯肉の見える範囲を少なくすることで、ガミースマイルと歯の形のバランスを改善します。</p>
                            <p>一般的に前歯の審美歯科で、歯の大きさや長さを下方向（先端方向）に伸ばしてしまうと、鼻の下が長くなってしまい口元や顔のバランスがキレイになりません。審美歯科では歯の形だけでなく顔に対しての前歯のバランスを考えて治療を計画していきます。</p>
                            <p>※骨格性のガミースマイルの場合、歯肉整形処置だけで改善が難しいケースもあります。</p>
                            <p>当院で行っている歯肉整形は比較的軽度なガミースマイルのケースで、口腔外科や美容外科で行っているような骨切りや口唇粘膜を切開縫合する処置は行っていません。</p>
                            <p>歯肉整形は術後に少し痛みますが腫れはほとんどありませんので、お仕事や外出を控える必要はありません。希望であれば当日にお気軽に受けられる処置です。通院は一回、麻酔下で行うため術中の痛みは伴いません。術後出血などのリスクはありますが、当日～3日程度で収まります。</p>
                            <p>歯肉整形を行っても歯並びや歯の形が変わらなければ、歯肉は数年の経過で後戻りを生じます。</p>
                            <p>ラミネートベニアやセラミッククラウンを行うと歯肉の後戻りを防ぐことができるので歯肉整形処置にラミネートベニアを併用すると審美的にキレイにできます。ラミネートベニアは生体親和性に優れたセラミックなので、歯肉と馴染み、自然で美しい仕上がりになります。</p>
                            <p>＊下前歯にはラミネートベニアを行えません。ラミネートベニア前に下前歯や全体的なホワイトニングを行うようにしています。</p>
                            <p>＊当院の削らないラミネートベニアは、スーパーエナメルやルミネアーズではありません。</p>
                        </div>
                    </div>
                </div>
                    
                <!-- 施術症例紹介セクション -->
                <div class="pulpectomy-content__section">
                    <h3 class="h3-gray-bg">施術症例紹介</h3>
                
                <!-- Case1 -->
                <div class="gum-shaping-content__section">
                    <h4 class="h4-left-line">Case1. 上前歯8本 ラミネートベニア + 歯肉整形</h4>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/tooth-resize_01.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/tooth-resize_02.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>削らないラミネートベニアと歯肉整形で歯の色・歯の大きさ・ガミースマイル（歯肉が見える）を改善した症例です。歯肉整形を行うことで歯肉が見える範囲を少なくし、口元の印象が大きくに変わりました。</p>
                                <p>＊削らないラミネートベニアは元の歯よりも少し厚く大きくなります。この症例のように歯を大きくすることはできますが、歯を小さくしたり出っ歯を治すことはできません。</p>
                                <p>＊当院で行える歯肉整形は比較的に軽度なガミースマイルが対象です。口腔外科や美容外科で行っているような骨切り手術（Le Fort手術）や口唇粘膜を切開縫合する手術などは対応していません。</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Case2 -->
                <div class="gum-shaping-content__section">
                    <h4 class="h4-left-line">Case2. 上前歯8本 ラミネートベニア + 歯肉整形</h4>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/tooth-resize_03.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/tooth-resize_04.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>削らないラミネートベニアでガミースマイル（歯肉が見える）と歯の色・歯の大きさを改善した症例です。歯肉整形とラミネートベニアで歯肉と歯の大きさを改善しました。口元からの印象が大きく変わりました。</p>
                                <p>＊ラミネートベニアは歯を大きくすることはできますが、出っ歯を引っ込めたり歯を小さくすることはできません。</p>
                                <p>＊当院で行える歯肉整形は比較的に軽度なガミースマイルが対象です。口腔外科や美容外科で行っているような骨切り手術（Le Fort手術）や口唇粘膜を切開縫合する手術などは対応していません。</p>
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/projecting-teeth_05.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/projecting-teeth_06.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>歯肉整形と削らないラミネートベニアで歯並び・歯の大きさを改善した症例です。 歯肉整形と削らないラミネートベニアを行い、曲がっていた歯列が左右対称に見えるように改善しました。</p>
                            </div>
                            
                            <!-- テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                    <div class="gum-shaping-case__table-content">当院で行える歯肉整形は比較的に軽度なガミースマイルが対象です。口腔外科や美容外科で行っているような骨切り手術（Le Fort手術）や口唇粘膜を切開縫合する手術などは対応していません。</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費</div>
                                    <div class="gum-shaping-case__table-content">632,500</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">2ヶ月</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Case4 -->
                <div class="gum-shaping-content__section">
                    <h4 class="h4-left-line">Case4. 上前歯8本 歯肉整形</h4>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/projecting-teeth_11.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/projecting-teeth_12.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>骨格性のガミースマイルで矯正治療や外科治療を検討しているとのことでした。矯正治療や外科治療をしなければ骨格のゆがみや咬み合わせは改善しませんが、一旦は簡単な治療でガミースマイルの見た目を改善したいとのことでした。</p>
                                <p>当院にて歯肉整形を行い歯肉の左右差を整えてガミースマイルを改善しました。</p>
                            </div>
                            
                            <!-- テーブル -->
                            <div class="gum-shaping-case__table">
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">リスクと副作用</div>
                                    <div class="gum-shaping-case__table-content">当院で行える歯肉整形は比較的に軽度なガミースマイルが対象です。口腔外科や美容外科で行っているような骨切り手術（Le Fort手術）や口唇粘膜を切開縫合する手術などは対応していません。歯肉整形は５年～10年を経過するとある程度の後戻りがあります。</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療費</div>
                                    <div class="gum-shaping-case__table-content">88,000円（税込）</div>
                                </div>
                                <div class="gum-shaping-case__table-row">
                                    <div class="gum-shaping-case__table-header">治療期間</div>
                                    <div class="gum-shaping-case__table-content">1ヶ月</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Case5 -->
                <div class="gum-shaping-content__section">
                    <h4 class="h4-left-line">Case5. 上前歯7本　ラミネートベニアと1本オールセラミッククラウン+ 歯肉整形</h4>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/tooth-resize_05.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/tooth-resize_06.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>削らないラミネートベニアで歯の大きさ・歯の色を改善した症例です。全体的なホワイトニングを行い、上前歯の歯肉整形をしています。オールセラミッククラウン1本と削らないラミネートベニア7本で歯の形を整えて大きくし審美的に仕上げました。</p>
                                <p>削らないラミネートベニアとオールセラミッククラウンの組み合わせは当院で数多く行っています。</p>
                                <p>＊下前歯にはラミネートベニアを行えません。ラミネートベニア前に下前歯や全体的なホワイトニングを行うようにしています。</p>
                                <p>＊当院の削らないラミネートベニアは、スーパーエナメルやルミネアーズではありません。</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Case6 -->
                <div class="gum-shaping-content__section">
                    <h4 class="h4-left-line">Case6. 上前歯8本 ラミネートベニア + 歯肉整形</h4>
                    <div class="gum-shaping-content__section-content">
                        <!-- Before/After画像 -->
                        <div class="gum-shaping-case">
                            <div class="gum-shaping-case__images">
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/tooth-resize_07.webp" alt="施術前" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術前</div>
                                </div>
                                <div class="gum-shaping-case__image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tooth-resize/tooth-resize_08.webp" alt="施術後" class="gum-shaping-case__image">
                                    <div class="gum-shaping-case__label">施術後</div>
                                </div>
                            </div>
                            
                            <div class="gum-shaping-case__text">
                                <p>削らないラミネートベニアで歯の色・歯並び・ガミースマイル（歯肉が見える）を改善した症例です。歯肉整形を行うことで歯肉が見える範囲を少なくし、口元の印象が変わりました。</p>
                                <p>＊ラミネートベニアは歯を大きくすることはできますが、出っ歯を引っ込めたり歯を小さくすることはできません。</p>
                                <p>＊当院で行える歯肉整形は比較的に軽度なガミースマイルが対象です。口腔外科や美容外科で行っているような骨切り手術（Le Fort手術）や口唇粘膜を切開縫合する手術などは対応していません。</p>
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