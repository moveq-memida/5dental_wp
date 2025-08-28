<?php
/**
 * Template Name: 予防歯科・クリーニング
 * Description: 予防歯科・クリーニングのページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <section class="implant-fv">
        <div class="implant-fv__container">
            <div class="implant-fv__bg-text">Preventive/Cleaning</div>
            
            <div class="implant-fv__content">
                <h1 class="implant-fv__title">予防歯科/クリーニング</h1>
                
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
                                <span class="breadcrumb__text">予防歯科/クリーニング</span>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cleaning/preventive-cleaning.webp" alt="予防歯科/クリーニング" class="">
                </div>

                <h1 class="implant-content__main-title">予防歯科/クリーニング</h1>

                <div class="implant-content__section">
                    <h2 class="implant-content__section-title">はじめに</h2>
                    <div class="implant-content__section-content">
                        <div class="implant-content__text">
                            <p>むし歯や歯周病にならないようにすること。これができれば生涯おいしい食事や素敵な笑顔でいられます。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>ご家庭の中でケアするのはもちろんですが、定期的に歯科医院でクリーニングするのはさらに効果的です。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>当院は「<span class="cleaning-highlight">ジェットクリーニング</span>」と「<span class="cleaning-highlight">EPIOS殺菌水</span>」という独自の組み合わせで、皆様のお口の健康をお守りいたします。</p>
                        </div>
                        
                        <div class="cleaning-buttons">
                            <a href="#jet-cleaning" class="cleaning-button">
                                <span class="cleaning-button__text">ジェットクリーニングについて</span>
                                <div class="cleaning-button__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cleaning/arw-circle-line.svg" alt="">
                                </div>
                            </a>
                            
                            <a href="#epios" class="cleaning-button">
                                <span class="cleaning-button__text">EPIOS殺菌水について</span>
                                <div class="cleaning-button__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cleaning/arw-circle-line.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="implant-content__section">
                    <h2 class="implant-content__section-title">歯科における予防の重要性</h2>
                    <div class="implant-content__section-content">
                        <div class="implant-content__hero">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cleaning/preventive-cleaning-brush.webp" alt="歯ブラシ" class="">
                        </div>
                        
                        <div class="implant-content__text">
                            <p><span class="cleaning-highlight">むし歯になってしまった歯は治ることはありません</span>。削って詰めれば形は戻るかもしれませんが、それは本来の自分の歯ではなく、脆くなったり、境目からむし歯になりやすくなってしまいます。</p>
                        </div>
                        
                        <div class="implant-content__text">
                            <p>歯周病により破壊された歯を支える骨は戻ることはありません。治療を行うことで進行を止めることはできますが、骨が回復することはないのです。しかし、むし歯にはC0と呼ばれる時期があり、<span class="cleaning-highlight">この段階で正しいプラークコントロールを行うことができれば歯質が戻ることもあります</span>。</p>
                        </div>
                        
                        <div class="implant-content__text">
                            <p>歯周病も歯肉炎の状態で進行を食い止めることができれば骨が溶けることはありません。常日頃のブラッシングなどによるプラークコントロールはもちろんですが、歯科医院で定期健診を受けることにより、これらの早期発見を行い、予防処置をしていくことがとても重要です。</p>
                        </div>
                    </div>
                </div>
                
                <div class="implant-content__section">
                    <h2 class="implant-content__section-title">予防のために歯科医院を活かしましょう</h2>
                    <div class="implant-content__section-content">
                        <div class="implant-content__hero">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cleaning/preventive-cleaning-hospital.webp" alt="歯科医院での治療" class="">
                        </div>
                        
                        <div class="implant-content__text">
                            <p>どんなに歯科医院で歯石の除去を行ったりフッ素を塗布しても、<span class="cleaning-highlight">常日頃のプラークコントロールが十分でなければむし歯や歯周病になってしまいます</span>。</p>
                        </div>
                        
                        <div class="implant-content__text">
                            <p>一度むし歯になってしまった部位や、ブラッシングをすると出血する部位はプラークコントロールが不十分な可能性があります。歯ブラシの毛先を正しい角度で当てることや動かし方、また<span class="cleaning-highlight">フロスなどの補助用具を</span>用いるなどして、<span class="cleaning-highlight">正しいプラークコントロールの仕方を身につけることが重要です</span>。</p>
                        </div>
                        
                        <div class="implant-content__text">
                            <p>加えて、<span class="cleaning-highlight">必要な補助用具や磨き方は一人一人異なってくる</span>ので、歯科医院で一度相談してみると良いでしょう。大人になってから歯磨きの仕方を学ぶのは恥ずかしいと感じる方もいるかもしれませんが、それは大きな間違いです。なぜなら年齢と共にお口の中も変化していくので、磨き方や補助用具も必要に応じて年齢と共に変化させていく必要があるからです。</p>
                        </div>
                        
                        <div class="implant-content__text">
                            <p>一度失ってしまった歯は二度と生えてきません。いつまでも自分の歯で食事していくために大いに歯科医院を活用していってください。</p>
                        </div>
                    </div>
                </div>
                
                <div class="implant-content__section">
                    <h2 class="implant-content__section-title">予防ですること</h2>
                    <div class="implant-content__section-content">
                        <div class="implant-content__text">
                            <p>むし歯も歯周病の予防として毎日のプラークコントロールが一番重要ですが、歯科医院では薬物や機械を用いて、専門的な予防処置を行うことができます。</p>
                        </div>
                        
                        <div class="prevention-subsection">
                            <h3 class="prevention-subsection__title">
                                <span class="prevention-subsection__title-line"></span>
                                <span class="prevention-subsection__title-text">むし歯予防</span>
                            </h3>
                            
                            <div class="prevention-items-container">
                                <div class="prevention-item">
                                    <div class="prevention-item__header">
                                        <span class="prevention-item__bullet">•</span>
                                        <h4 class="prevention-item__title">フッ素塗布</h4>
                                    </div>
                                    <div class="prevention-item__content">
                                        <p>フッ化物は、歯の表面のエナメル質の再石灰化を促しむし歯予防として有効です。多くの歯磨き粉にも含まれていますが、歯科医院ではより高濃度のフッ化物を塗布することができ、バラツキがあるものの3～5割のむし歯を抑制するといわれています。</p>
                                    </div>
                                </div>
                                
                                <div class="prevention-item">
                                    <div class="prevention-item__header">
                                        <span class="prevention-item__bullet">•</span>
                                        <h4 class="prevention-item__title">シーラント処置</h4>
                                    </div>
                                    <div class="prevention-item__content">
                                        <p>深く、複雑な溝を持つ永久歯にフッ化物を徐放する材料を用いて、溝を埋めていく処置方法です。特に、生えたての歯は歯質が弱く溝も複雑なため、６歳臼歯によく使用されます。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="prevention-subsection">
                    <div class="prevention-subsection__title">
                        <div class="prevention-subsection__title-line"></div>
                        <h3 class="prevention-subsection__title-text">歯周病予防</h3>
                    </div>
                    
                    <div class="prevention-items-container">
                        <div class="prevention-item">
                            <div class="prevention-item__header">
                                <span class="prevention-item__bullet">•</span>
                                <h4 class="prevention-item__title">歯石除去</h4>
                            </div>
                            <div class="prevention-item__content">
                                <p>歯石は歯周病の直接的な原因ではありませんが、歯石の表面はザラザラしているため、歯周病の原因となるプラークを付着させやすくしてしまいます。</p>
                                <p>また、プラークと違い、歯石は石のように固いため歯科医院にて機械的な操作をしなければ除去することはできません。<br>歯石除去は目に見える歯の面と直接的には見えない歯周ポケットに付着している付着物や沈着物を取り除いていきます。</p>
                                <p>深い歯周ポケットがある部位では麻酔をかけ処置を行っていくこともあります。</p>
                            </div>
                        </div>
                        
                        <div class="prevention-item">
                            <div class="prevention-item__header">
                                <span class="prevention-item__bullet">•</span>
                                <h4 class="prevention-item__title">ルートプレーニング</h4>
                            </div>
                            <div class="prevention-item__content">
                                <p>歯石除去後に残った細かい付着物や沈着物を除去し、歯面を滑らかにして歯石が再び沈着するのを防ぎます。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="prevention-subsection">
                    <div class="prevention-subsection__title">
                        <div class="prevention-subsection__title-line"></div>
                        <h3 class="prevention-subsection__title-text">エナメルトリ－トメント</h3>
                    </div>
                    
                    <div class="prevention-items-container">
                        <div class="prevention-item">
                            <div class="prevention-item__content" style="padding-left: 0;">
                                <p>歯の表面のエナメル質は約96％がリン酸カルシウム構成されています。<br>このエナメル質には、毎日の食事や歯磨きによって、ミクロの傷や擦り減りなどのダメージが蓄積していきます。<br>その傷に付着したプラークや着色などが、歯の白さや透明感を低下させてしまうのです。</p>
                                
                                <p style="margin-top: 1.5rem;">当院では、そのような歯のダメージのためにエナメルトリートメントをご用意しております。</p>
                                
                                <p style="margin-top: 1.5rem;">歯の汚れを落とし磨き上げるだけでなく、歯の主成分のハイドロキシアパタイト、その他ミネラルやフッ素を作用させることで、ミクロの傷やエナメル質結晶を修復し、歯をトリートメントすることができます。</p>
                                
                                <p style="margin-top: 1.5rem;">またホワイトニング後のトリートメントとしてもとても効果がありますので是非お試しください。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new-approach-section">
                    <h3 class="h3-gray-bg">新しい考え方の予防歯科・クリーニング</h3>
                    
                    <div class="new-approach-section__content">
                        <div class="new-approach-section__image-text">
                            <div class="new-approach-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cleaning/cleaning_03.webp" alt="ジェットクリーニングの様子">
                            </div>
                            
                            <div class="new-approach-section__right-text">
                                <p>予防歯科で最も基本的なことは、バイオフィルムの除去です。<br>バイオフィルムとはプラークや歯石などの細菌のかたまりのことで、このバイオフィルムの除去がむし歯や歯周病の予防にとって重要です。</p>
                                
                                <p>歯石はスケーリングという歯の汚れを専用の器具を使って削る方法によって除去します。<br>しかしこのスケーリングだけでは、デコボコしている歯の表面の汚れを完全に取りきることができません。<br>また、ガリガリと歯の汚れを除去するため、歯や歯肉にダメージを与えてしまうこともあります。</p>
                            </div>
                        </div>
                        
                        <div class="new-approach-section__bottom-text">
                            <p>そこで当院ではジェットクリーニングを予防歯科のメニューとしてご用意しております。</p>
                        </div>
                    </div>
                </div>

                <div class="prevention-subsection" id="jet-cleaning">
                    <div class="prevention-subsection__title">
                        <div class="prevention-subsection__title-line"></div>
                        <h3 class="prevention-subsection__title-text"><span class="cleaning-highlight">ジェットクリーニング</span></h3>
                    </div>
                    
                    <div class="jet-cleaning-content">
                        <p>ジェットクリーニングでは、高圧ジェットでアミノ酸パウダーと水を歯に吹き付け、歯の隙間や裏側の凹凸部にこびり着いた汚れやバイオフィルムを除去します。</p>
                        
                        <p>その際に使う水は<span class="cleaning-highlight">EPIOS殺菌水</span>を利用しています。<br>この水は、次亜塩素酸という殺菌成分が含まれており、汚れと反応して汚れを分解し洗浄することができます。<br>この水の働きは、体内の白血球が細菌を殺すのと同じメカニズムのため、<span class="cleaning-highlight">高い殺菌能力を持ちながら非常に安全</span>です。</p>
                        
                        <p>当院ではジェットクリーニングだけでなく、<span class="cleaning-highlight">むし歯治療をはじめとするすべての治療にこのEPIOS殺菌水を利用</span>しています。</p>
                        
                        <p>このEPIOS殺菌水を利用したジェットクリーニングにより、<span class="cleaning-highlight">大切な歯にダメージを与えることなく、歯のすみずみまでをキレイに、清潔にすることができます</span>。<br>ご自身の歯をむし歯や歯周病から守るためにぜひ新しい予防歯科を試してみてはいかがでしょうか。</p>
                        
                        <div class="cleaning-buttons">
                            <a href="#epios" class="cleaning-button">
                                <span class="cleaning-button__text">EPIOS殺菌水について</span>
                                <div class="cleaning-button__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cleaning/arw-circle-line.svg" alt="矢印">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </main>

            <?php get_template_part( 'template-parts/sidebar', 'service' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>