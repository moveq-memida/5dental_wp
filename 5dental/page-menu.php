<?php
/**
 * Template Name: 診療メニュー
 * Description: 診療メニューのページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="menu-fv">
        <div class="menu-fv__container">
            <!-- 背景テキスト "Services" -->
            <div class="menu-fv__bg-text">Services</div>
            
            <!-- コンテンツエリア -->
            <div class="menu-fv__content">
                <!-- メインタイトル "診療メニュー" -->
                <h1 class="menu-fv__title">診療メニュー</h1>
                
                <!-- パンくずリスト -->
                <nav class="menu-fv__breadcrumb">
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
                                <span class="breadcrumb__text">診療メニュー</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <!-- 診療科目選択セクション -->
    <section class="menu-selector">
        <div class="menu-selector__container">
            <!-- 説明テキスト -->
            <p class="menu-selector__description">該当の診療科目をお選びください。</p>
            
            <!-- 科目選択ボタン -->
            <div class="menu-selector__buttons">
                <button class="menu-selector__button" type="button">
                    <span class="menu-selector__button-text">審美歯科</span>
                    <div class="menu-selector__button-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-white.svg" alt="矢印" class="menu-selector__button-arrow">
                    </div>
                </button>
                
                <button class="menu-selector__button" type="button">
                    <span class="menu-selector__button-text">総合歯科/その他</span>
                    <div class="menu-selector__button-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-white.svg" alt="矢印" class="menu-selector__button-arrow">
                    </div>
                </button>
            </div>
        </div>
    </section>

    <!-- 審美歯科一覧セクション -->
    <section class="menu-content">
        <div class="menu-content__container">
            <!-- セクションタイトル -->
            <div class="menu-intro">
                <h2 class="menu-intro__title">審美歯科一覧</h2>
                <div class="menu-intro__bg-text">Esthetic</div>
            </div>

            <!-- 審美歯科説明テキスト -->
            <div class="aesthetic-description">
                <h3 class="aesthetic-description__title">歯をできるだけ削らない、体に優しい審美歯科</h3>
                
                <div class="aesthetic-description__content">
                    <p class="aesthetic-description__text">
                        当院の削らないラミネートベニアの審美歯科症例です。
                    </p>
                    <p class="aesthetic-description__text">
                        当院ではより低侵襲で体に優しい、健康を犠牲にしないような審美歯科治療が望ましいと考えています。
                    </p>
                    <p class="aesthetic-description__text">
                        審美歯科とは歯や口元の美しさにフォーカスした歯科治療です。歯の色、歯並び、歯の形などを改善し、歯や口元をより美しくするための治療です。
                    </p>
                    <p class="aesthetic-description__text">
                        あらためて言うまでもなく歯は顔の一部です。歯並びの整った白い歯は、その人の清潔感や誠実さ、そして若々しさを表現すると言われています。
                    </p>
                    <p class="aesthetic-description__text">
                        審美歯科は歯並びの改善、歯の色の改善、歯の形の改善など、様々な目的に応じて治療を計画しなくてはなりません。
                    </p>
                    <p class="aesthetic-description__text">
                        咬み合わせ治療、矯正治療、虫歯治療、歯周病治療、インプラント、ホワイトニング、セラミック治療など総合的に治療計画をする必要があります。
                    </p>
                    <p class="aesthetic-description__text">
                        それは決して大規模な治療を行うべきというのではなくて、適切に診断すべきであるということです。
                    </p>
                    <p class="aesthetic-description__text">
                        以前に比べて、近年はオールセラミック治療がかなり進化し良いものになっています。ジルコニアも以前よりもかなり改良され進化しています。
                    </p>
                    <p class="aesthetic-description__text">
                        以前の金属を含むセラミックよりも、生体親和性に優れ、歯の切削量が少なくて済みます。そのため以前の差し歯のように神経をとらないでもセラミッククラウンが可能なケースも多いです。
                    </p>
                    <p class="aesthetic-description__text">
                        しかしながら逆に、ドンドンと歯を削ってセラミッククラウンやラミネートベニアを被せてしまう審美歯科や美容歯科が目立ってしまっているように感じます。
                    </p>
                    <p class="aesthetic-description__text">
                        オールセラミック治療は以前よりもかなり良いものになっていますし、歯を削って被せてキレイにすることを否定することはしませんが、適切な切削であるべきです。
                    </p>
                    <p class="aesthetic-description__text">
                        最近では、歯並びを治すセラミック治療でセラミック矯正との表現が使われることがあります。歯並び治療は削ってセラミッククラウンで被せなくても、ワイヤーやマウスピースによるいわゆる矯正治療が行えます。状況に応じては矯正治療とオールセラミックの治療と組み合わせることもできます。いずれにしても適切な切削でもしくは削らないでキレイにできる方法を優先すべきだと思います。
                    </p>
                    <p class="aesthetic-description__text">
                        歯科治療は全てが永久に（30年も40年も）保つものではありません。（治療もですが、人間の体が変化するので。）行き過ぎた歯の切削は将来的に非常に大きなリスクを背負うことになりかねません。
                    </p>
                    <p class="aesthetic-description__text">
                        当院では審美歯科に力を入れて取り組んでいますが「できるだけ削らない」「健康的な審美歯科」を提案したいと考えています。
                    </p>
                </div>
            </div>

            <!-- 削らないラミネートベニアセクション -->
            <div class="laminate-veneer-section">
                <div class="laminate-veneer-section__container">
                    <!-- 左側コンテンツ -->
                    <div class="laminate-veneer-section__content">
                        <!-- タイトル -->
                        <div class="laminate-veneer-section__header">
                            <h3 class="laminate-veneer-section__title">削らないラミネートベニア</h3>
                            <p class="laminate-veneer-section__subtitle">Non-prep veneer</p>
                        </div>

                        <!-- 区切り線と説明 -->
                        <div class="laminate-veneer-section__description">
                            <div class="laminate-veneer-section__divider"></div>
                            <p class="laminate-veneer-section__lead">
                                天然歯を削らずにダメージなく審美的な治療を。歯の表面に接着する薄いべニアを貼ることで、美しい歯並びを実現します。
                            </p>
                            <div class="laminate-veneer-section__divider"></div>
                        </div>

                        <!-- 詳細テキスト -->
                        <div class="laminate-veneer-section__texts">
                            <p class="laminate-veneer-section__text">
                                前歯のセラミック審美は通常は歯を削って行います。従来法のラミネートベニアやセラミッククラウンでは歯を削ってセラミックを被せる方法でした。当院では従来法の削って行う治療も行っていますが、削らないで接着するセラミック審美も取り扱っています。
                            </p>
                            <p class="laminate-veneer-section__text">
                                削らないラミネートベニアは極薄高強度のセラミックベニアをエナメル質の上に接着する方法です。支台となる歯を削らないで、もしくはエナメル質の厚みの範囲内で最小限に削って、極力にご自身の歯を削らないで残して行うセラミック審美です。
                            </p>
                            <p class="laminate-veneer-section__text">
                                従来法のラミネートベニアやセラミッククラウンと比較すると強度耐久性に劣ります。セラミッククラウンよりは適応症例も限られてしまいますが、支台の歯をダメージしない方法なのでとても低侵襲で健康的な審美歯科です。
                            </p>
                        </div>

                        <!-- CTAボタン -->
                        <a href="<?php echo esc_url( home_url( '/laminate-veneer' ) ); ?>" class="laminate-veneer-section__button">
                            <span class="laminate-veneer-section__button-text">詳しくはこちら</span>
                        </a>
                    </div>

                    <!-- 右側画像 -->
                    <div class="laminate-veneer-section__images">
                        <!-- メイン画像 -->
                        <div class="laminate-veneer-section__main-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/esthetic1-1.webp" alt="ラミネートベニア治療" class="laminate-veneer-section__main-img">
                        </div>

                        <!-- ビフォーアフター画像 -->
                        <div class="laminate-veneer-section__before-after">
                            <div class="laminate-veneer-section__before">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/esthetic1-2.webp" alt="術前" class="laminate-veneer-section__before-img">
                            </div>
                            <div class="laminate-veneer-section__after">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/esthetic1-3.webp" alt="術後" class="laminate-veneer-section__after-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 二列審美治療セクション -->
            <div class="aesthetic-treatments-section">
                <div class="aesthetic-treatments-section__container">
                    <!-- 左側: オールセラミック治療 -->
                    <div class="aesthetic-treatments-section__item">
                        <div class="aesthetic-treatments-section__bg"></div>
                        <div class="aesthetic-treatments-section__content">
                            <!-- 左側テキストセクション -->
                            <div class="aesthetic-treatments-section__text-section">
                                <!-- タイトル -->
                                <div class="aesthetic-treatments-section__header">
                                    <h3 class="aesthetic-treatments-section__title">オールセラミック治療/ジルコニア治療</h3>
                                    <p class="aesthetic-treatments-section__subtitle">All-ceramic / Zirconia</p>
                                </div>

                                <!-- 区切り線と説明 -->
                                <div class="aesthetic-treatments-section__description">
                                    <div class="aesthetic-treatments-section__divider"></div>
                                    <p class="aesthetic-treatments-section__lead">
                                        強度が高く、衛生的で生体親和性（人体との調和）が良い素材で治療ができます。
                                    </p>
                                    <div class="aesthetic-treatments-section__divider"></div>
                                </div>

                                <!-- 詳細テキスト -->
                                <div class="aesthetic-treatments-section__texts">
                                    <p class="aesthetic-treatments-section__text">
                                        近年では金属を使わないオールセラミック材料の治療が進化しています。（金属の材料やメタルボンド、ハイブリッドレジンなども当院では扱っています。）。高強度で審美的な高級材料のジルコニア。審美性と機能性を兼ね備えた2ケイ酸リチウムセラミック(e.maxなど)。
                                    </p>
                                    <p class="aesthetic-treatments-section__text">
                                        レジンや金属の材料と比べると、清潔で抗菌性に優れていて、生体親和性(人体との馴染みが良い)に優れています。歯肉(歯周組織やその他全身)とのなじみが良く、歯周病や虫歯の原因になりにくいです。
                                    </p>
                                </div>

                                <!-- CTAボタン -->
                                <a href="<?php echo esc_url( home_url( '/ceramic' ) ); ?>" class="aesthetic-treatments-section__button">
                                    <span class="aesthetic-treatments-section__button-text">詳しくはこちら</span>
                                </a>
                            </div>

                            <!-- 右側画像 -->
                            <div class="aesthetic-treatments-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/esthetic2.webp" alt="オールセラミック治療" class="aesthetic-treatments-section__img">
                            </div>
                        </div>
                    </div>

                    <!-- 右側: 3Dデジタルマウスピース矯正 -->
                    <div class="aesthetic-treatments-section__item">
                        <div class="aesthetic-treatments-section__bg"></div>
                        <div class="aesthetic-treatments-section__content">
                            <!-- タイトル -->
                            <div class="aesthetic-treatments-section__header">
                                <h3 class="aesthetic-treatments-section__title">3Dデジタルマウスピース矯正(矯正歯科)</h3>
                                <p class="aesthetic-treatments-section__subtitle">Orthodontics</p>
                            </div>

                            <!-- 画像 -->
                            <div class="aesthetic-treatments-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/esthetic3.webp" alt="マウスピース矯正" class="aesthetic-treatments-section__img">
                            </div>

                            <!-- 区切り線と説明 -->
                            <div class="aesthetic-treatments-section__description">
                                <div class="aesthetic-treatments-section__divider"></div>
                                <p class="aesthetic-treatments-section__lead">
                                    3Dデジタルスキャナーによる診断で患者様に合った矯正治療が可能です。
                                </p>
                                <div class="aesthetic-treatments-section__divider"></div>
                            </div>

                            <!-- 詳細テキスト -->
                            <div class="aesthetic-treatments-section__texts">
                                <p class="aesthetic-treatments-section__text">
                                    歯並びや咬み合わせに問題がある場合に矯正治療が選択肢になります。当院ではデジタル診断によって、マウスピース矯正や裏側矯正、表側矯正を行っています。
                                </p>
                                <p class="aesthetic-treatments-section__text">
                                    見えない目立たない、治療期間の早い矯正治療を提供できます。(最先端技術による裏側からの見えない矯正・透明なマウスピース矯正・前歯だけのプチ強制など)
                                </p>
                                <p class="aesthetic-treatments-section__text">
                                    矯正治療はその他の歯科治療や削らないラミネートベニアなどの審美歯科との組み合わせ治療を計画していくことも出来ます。
                                </p>
                            </div>

                            <!-- CTAボタン -->
                            <a href="<?php echo esc_url( home_url( '/orthodontics' ) ); ?>" class="aesthetic-treatments-section__button">
                                <span class="aesthetic-treatments-section__button-text">詳しくはこちら</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ホワイトニングセクション -->
            <div class="whitening-section">
                <div class="whitening-section__container">
                    <!-- 左側コンテンツ -->
                    <div class="whitening-section__content">
                        <!-- タイトル -->
                        <div class="whitening-section__header">
                            <h3 class="whitening-section__title">ホワイトニング</h3>
                            <p class="whitening-section__subtitle">Whitening</p>
                        </div>

                        <!-- 区切り線と説明 -->
                        <div class="whitening-section__description">
                            <div class="whitening-section__divider"></div>
                            <p class="whitening-section__lead">
                                国内で行われている様々な方法の中から、厳選したシステムをピックアップ。
                            </p>
                            <div class="whitening-section__divider"></div>
                        </div>

                        <!-- 詳細テキスト -->
                        <div class="whitening-section__texts">
                            <p class="whitening-section__text">
                                歯を白くキレイにする方法（審美歯科）で、第一選択になるのがホワイトニングです。エステやセルフホワイトニングサロンのホワイトニングと違い、歯科医院では特別な薬剤（過酸化水素、過酸化尿素）を扱うことができるので、エナメル質内部の色素タンパクを分解し確実なホワイトニング効果が出せます。
                            </p>
                            <p class="whitening-section__text">
                                失活歯（神経のない歯）やテトラサイクリン歯には確実な効果は出しにくいとされていますが、生活歯（神経のある歯）に対しては削ることなく歯を白くすることができます。ホワイトニングは黄色茶色の色素は脱色できますが、黒やグレーの色素は改善が難しいのです。
                            </p>
                            <p class="whitening-section__text">
                                当院のホワイトニングは失活歯やテトラサイクリン歯ある程度のホワイトニング効果が期待できます。
                            </p>
                            <p class="whitening-section__text">
                                矯正治療後のホワイトニングも人気です。矯正専門医院で矯正治療後に当院でホワイトニングのみ行いたい患者様も多くいます。
                            </p>
                        </div>

                        <!-- CTAボタン -->
                        <a href="<?php echo esc_url( home_url( '/whitening' ) ); ?>" class="whitening-section__button">
                            <span class="whitening-section__button-text">詳しくはこちら</span>
                            <div class="whitening-section__button-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line.svg" alt="矢印" class="whitening-section__button-arrow">
                            </div>
                        </a>
                    </div>

                    <!-- 右側コンテンツ -->
                    <div class="whitening-section__side-content">
                        <!-- メイン画像 -->
                        <div class="whitening-section__main-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/esthetic11-1.webp" alt="ホワイトニング治療" class="whitening-section__main-img">
                        </div>

                        <!-- 失活歯のブリーチセクション -->
                        <div class="whitening-section__side-box">
                            <div class="whitening-section__side-box-bg"></div>
                            <div class="whitening-section__side-box-content">
                                <h4 class="whitening-section__side-box-title">失活歯のブリーチ</h4>
                                <div class="whitening-section__side-box-texts">
                                    <p class="whitening-section__side-box-text">
                                        失活歯（神経のない歯）のホワイトニングや審美歯科も行っています。また、失活歯を含めての全体的なホワイトニングも行っています。全体的にはホワイトニングを行い失活歯にはセラミッククラウンで被せる計画や、失活歯にはセラミッククラウンで周りの歯には削らないラミネートベニアを行うケースも多いです。
                                    </p>
                                    <p class="whitening-section__side-box-text">
                                        ケースによっては失活歯だけの裏側に穴を開けて直接に薬剤を入れて漂白するインターナルブリーチ（ウォーキングブリーチ）も行っています。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 歯肉整形・ガミースマイル改善セクション -->
            <div class="gingival-contouring-section">
                <div class="gingival-contouring-section__container">
                    <!-- 左側コンテンツ -->
                    <div class="gingival-contouring-section__content">
                        <!-- タイトル -->
                        <div class="gingival-contouring-section__header">
                            <h3 class="gingival-contouring-section__title">歯肉整形・ガミースマイル改善</h3>
                            <p class="gingival-contouring-section__subtitle">Gingival contouring / Gummy smile</p>
                        </div>

                        <!-- 区切り線と説明 -->
                        <div class="gingival-contouring-section__description">
                            <div class="gingival-contouring-section__divider"></div>
                            <p class="gingival-contouring-section__lead">
                                歯と歯肉のバランスを整えて、美しい口元へ。
                            </p>
                            <div class="gingival-contouring-section__divider"></div>
                        </div>

                        <!-- 詳細テキスト -->
                        <div class="gingival-contouring-section__texts">
                            <p class="gingival-contouring-section__text">
                                口元の美しさはもちろんキレイな白い歯が重要ですが、歯肉の見え方やバランスも重要な要素の1つです。
                            </p>
                            <p class="gingival-contouring-section__text">
                                ガミースマイルとは、笑った時に歯肉（歯ぐき）が見えすぎてしまう口元のことを表します。<br>
                                歯肉が見えすぎたりバランスが悪いと、歯が見える時や笑った時に口元が美しくなりません。
                            </p>
                            <p class="gingival-contouring-section__text">
                                歯肉整形とはガミースマイルや歯が小さい短いケースで、余分な歯肉を除去して歯と歯肉の形のバランスを整える方法です。
                            </p>
                        </div>

                        <!-- CTAボタン -->
                        <a href="<?php echo esc_url( home_url( '/gum-shaping' ) ); ?>" class="gingival-contouring-section__button">
                            <span class="gingival-contouring-section__button-text">詳しくはこちら</span>
                        </a>
                    </div>

                    <!-- 右側画像 -->
                    <div class="gingival-contouring-section__images">
                        <!-- メイン画像 -->
                        <div class="gingival-contouring-section__main-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/esthetic4-1.webp" alt="歯肉整形・ガミースマイル改善治療" class="gingival-contouring-section__main-img">
                        </div>

                        <!-- ビフォーアフター画像 -->
                        <div class="gingival-contouring-section__before-after">
                            <div class="gingival-contouring-section__before">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/esthetic4-2.webp" alt="術前" class="gingival-contouring-section__before-img">
                            </div>
                            <div class="gingival-contouring-section__after">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/esthetic4-3.webp" alt="術後" class="gingival-contouring-section__after-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 審美治療追加セクション（二列） -->
            <div class="additional-treatments-section">
                <div class="additional-treatments-section__container">
                    <!-- 左側: 歯のマニキュア -->
                    <div class="additional-treatments-section__item">
                        <div class="additional-treatments-section__bg"></div>
                        <div class="additional-treatments-section__content">
                            <!-- タイトル -->
                            <div class="additional-treatments-section__header">
                                <h3 class="additional-treatments-section__title">歯のマニキュア</h3>
                                <p class="additional-treatments-section__subtitle">Dental cosmetic coating</p>
                            </div>

                            <!-- 画像 -->
                            <div class="additional-treatments-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/esthetic5.webp" alt="歯のマニキュア" class="additional-treatments-section__img">
                            </div>

                            <!-- 区切り線と説明 -->
                            <div class="additional-treatments-section__description">
                                <div class="additional-treatments-section__divider"></div>
                                <p class="additional-treatments-section__lead">
                                    削らずに歯の表面にコーティングを施し、自然で美しい仕上がりを実現します。
                                </p>
                                <div class="additional-treatments-section__divider"></div>
                            </div>

                            <!-- 詳細テキスト -->
                            <div class="additional-treatments-section__texts">
                                <p class="additional-treatments-section__text">
                                    歯のマニキュアは、歯を削ることなく表面に特殊な樹脂コーティングを施す治療法です。短時間で自然な白さと美しい形を実現できます。
                                </p>
                                <p class="additional-treatments-section__text">
                                    従来の治療と異なり、歯へのダメージが最小限で済むため、健康な歯質を保ちながら審美的な改善が可能です。
                                </p>
                            </div>

                            <!-- CTAボタン -->
                            <a href="<?php echo esc_url( home_url( '/services/nail-art' ) ); ?>" class="additional-treatments-section__button">
                                <span class="additional-treatments-section__button-text">詳しくはこちら</span>
                            </a>
                        </div>
                    </div>

                    <!-- 右側: ダイレクトボンディング -->
                    <div class="additional-treatments-section__item">
                        <div class="additional-treatments-section__bg"></div>
                        <div class="additional-treatments-section__content">
                            <!-- タイトル -->
                            <div class="additional-treatments-section__header">
                                <h3 class="additional-treatments-section__title">ダイレクトボンディング</h3>
                                <p class="additional-treatments-section__subtitle">Direct bonding</p>
                            </div>

                            <!-- 画像 -->
                            <div class="additional-treatments-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/esthetic6.webp" alt="ダイレクトボンディング" class="additional-treatments-section__img">
                            </div>

                            <!-- 区切り線と説明 -->
                            <div class="additional-treatments-section__description">
                                <div class="additional-treatments-section__divider"></div>
                                <p class="additional-treatments-section__lead">
                                    歯に直接レジンを盛り付けて形を整え、自然な美しさを取り戻します。
                                </p>
                                <div class="additional-treatments-section__divider"></div>
                            </div>

                            <!-- 詳細テキスト -->
                            <div class="additional-treatments-section__texts">
                                <p class="additional-treatments-section__text">
                                    ダイレクトボンディングは、歯の欠けた部分や形の不備を高品質なレジン（樹脂）で直接修復する治療法です。
                                </p>
                                <p class="additional-treatments-section__text">
                                    一回の治療で完了し、天然歯との境界が分からないほど自然な仕上がりを実現できます。歯を削る量を最小限に抑えた低侵襲な治療です。
                                </p>
                            </div>

                            <!-- CTAボタン -->
                            <a href="<?php echo esc_url( home_url( '/direct-bonding' ) ); ?>" class="additional-treatments-section__button">
                                <span class="additional-treatments-section__button-text">詳しくはこちら</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 被せ物による治療セクション -->
            <div class="crown-treatments-intro">
                <h2 class="crown-treatments-intro__title">被せ物による治療</h2>
                <p class="crown-treatments-intro__description">インプラント・入れ歯等、かぶせ物の治療にも対応いたします。</p>
            </div>

            <!-- 被せ物治療セクション（二列） -->
            <div class="crown-treatments-section">
                <div class="crown-treatments-section__container">
                    <!-- 左側: インプラント -->
                    <div class="crown-treatments-section__item crown-treatments-section__item--implant">
                        <div class="crown-treatments-section__bg"></div>
                        <div class="crown-treatments-section__content">
                            <!-- 左側テキストセクション -->
                            <div class="crown-treatments-section__text-section">
                                <!-- タイトル -->
                                <div class="crown-treatments-section__header">
                                    <h3 class="crown-treatments-section__title">インプラント</h3>
                                    <p class="crown-treatments-section__subtitle">Implant</p>
                                </div>

                                <!-- 区切り線と説明 -->
                                <div class="crown-treatments-section__description">
                                    <div class="crown-treatments-section__divider"></div>
                                    <p class="crown-treatments-section__lead">
                                        第一線での経験から安心できる治療を。適切な治療のためによく話し合いましょう。
                                    </p>
                                    <div class="crown-treatments-section__divider"></div>
                                </div>

                                <!-- 詳細テキスト -->
                                <div class="crown-treatments-section__texts">
                                    <p class="crown-treatments-section__text">
                                        近年、インプラントの需要はより高まってきています。ブリッジや入れ歯の治療よりもインプラント治療を希望なさる患者様は多くなっています。
                                    </p>
                                    <p class="crown-treatments-section__text">
                                        インプラントのメリットは強度や機能性でありますが、高いレベルで考えると審美的には難しい問題もあります。当院のシステムでは、従来よりもより審美的に行うことができる様になってきます。
                                    </p>
                                </div>

                                <!-- CTAボタン -->
                                <a href="<?php echo esc_url( home_url( '/implant' ) ); ?>" class="crown-treatments-section__button">
                                    <span class="crown-treatments-section__button-text">詳細ページへ</span>
                                </a>
                            </div>

                            <!-- 右側画像 -->
                            <div class="crown-treatments-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/cap1.webp" alt="インプラント" class="crown-treatments-section__img">
                                <div class="crown-treatments-section__image-overlay"></div>
                            </div>
                        </div>
                    </div>

                    <!-- 右側: 入れ歯/ブリッジ -->
                    <div class="crown-treatments-section__item crown-treatments-section__item--denture">
                        <div class="crown-treatments-section__bg"></div>
                        <div class="crown-treatments-section__content">
                            <!-- タイトル -->
                            <div class="crown-treatments-section__header">
                                <h3 class="crown-treatments-section__title">入れ歯/ブリッジ</h3>
                                <p class="crown-treatments-section__subtitle">Dentures/Bridge</p>
                            </div>

                            <!-- 画像 -->
                            <div class="crown-treatments-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/cap2.webp" alt="入れ歯/ブリッジ" class="crown-treatments-section__img">
                            </div>

                            <!-- 説明テキスト -->
                            <div class="crown-treatments-section__simple-text">
                                <p class="crown-treatments-section__simple-description">
                                    歯科材料も日々進化しています。機能だけでなく、審美的に、快適に、清潔に。
                                </p>
                            </div>

                            <!-- CTAボタン -->
                            <a href="<?php echo esc_url( home_url( '/denture' ) ); ?>" class="crown-treatments-section__button">
                                <span class="crown-treatments-section__button-text">詳しくはこちら</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- その他の治療セクションタイトル -->
            <div class="other-treatments-intro">
                <h2 class="other-treatments-intro__title">その他の治療</h2>
                <p class="other-treatments-intro__description">歯並びや歯肉だけでなく、唇の色の改善にも対応いたします。</p>
            </div>

            <!-- リップアートメイク@DENTALセクション -->
            <div class="lip-artmake-section">
                <div class="lip-artmake-section__container">
                    <!-- 左側コンテンツ -->
                    <div class="lip-artmake-section__content">
                        <!-- タイトル -->
                        <div class="lip-artmake-section__header">
                            <h3 class="lip-artmake-section__title">リップアートメイク@DENTAL</h3>
                            <p class="lip-artmake-section__subtitle">Non-Prep Veneer</p>
                        </div>

                        <!-- 区切り線と説明 -->
                        <div class="lip-artmake-section__description">
                            <div class="lip-artmake-section__divider"></div>
                            <p class="lip-artmake-section__lead">
                                歯科麻酔で痛み無いキレイな発色で長持ち「リップアートメイク@DENTAL」（LipArtMake@DENLAL）とは？
                            </p>
                            <div class="lip-artmake-section__divider"></div>
                        </div>

                        <!-- 詳細テキスト -->
                        <div class="lip-artmake-section__texts">
                            <p class="lip-artmake-section__text">
                                リップアートメイク@DENTALとは、唇の表皮深層に色素を注入し、唇の発色や形を改善する施術です。
                            </p>
                            <p class="lip-artmake-section__text">
                                従来のアートメイク施術が表面麻酔による施術になるのに対し、リップアートメイク@DENTALは有資格者(臨床歯科口唇技術資格者)による注射麻酔→施術となるため、痛みを限りなく0に近づけて施術することが可能となります。
                            </p>
                            <p class="lip-artmake-section__text">
                                従来であればかなりの痛みと3時間ほどの施術時間に耐える必要がありますが、リップアートメイク@DENTALであれば痛みほぼ0、1.5時間ほどの施術時間となります。
                            </p>
                            <p class="lip-artmake-section__text">
                                また歯科麻酔のおかげで唇表皮深部に色素が入るため、発色や色の持続期間も良く、グラデーションリップ(韓国リップ)などの難しい施術も無痛で施術可能です。
                            </p>
                        </div>

                        <!-- CTAボタン -->
                        <a href="https://www.teigeki-dental.com/service/esthetic/lipartmake.html" class="lip-artmake-section__button">
                            <span class="lip-artmake-section__button-text">詳しくはこちら</span>
                        </a>
                    </div>

                    <!-- 右側画像 -->
                    <div class="lip-artmake-section__images">
                        <!-- メイン画像 -->
                        <div class="lip-artmake-section__main-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/lam1-1.webp" alt="リップアートメイク@DENTAL治療" class="lip-artmake-section__main-img">
                        </div>

                        <!-- ビフォーアフター画像 -->
                        <div class="lip-artmake-section__before-after">
                            <div class="lip-artmake-section__before">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/lam1-2.webp" alt="術前" class="lip-artmake-section__before-img">
                            </div>
                            <div class="lip-artmake-section__after">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/lam1-3.webp" alt="術後" class="lip-artmake-section__after-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>