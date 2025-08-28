<?php
/**
 * Template Name: インプラント
 * Description: インプラント治療のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <!-- ヘッダービジュアル -->
    <section class="implant-fv">
        <div class="implant-fv__container">
            <!-- 背景テキスト "Implant" -->
            <div class="implant-fv__bg-text">Implant</div>
            
            <!-- コンテンツエリア -->
            <div class="implant-fv__content">
                <!-- メインタイトル "インプラント" -->
                <h1 class="implant-fv__title">インプラント</h1>
                
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
                            <li class="breadcrumb__item">
                                <a href="<?php echo esc_url( home_url( '/menu' ) ); ?>" class="breadcrumb__link">
                                    <span class="breadcrumb__text">診療メニュー</span>
                                </a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--current">
                                <span class="breadcrumb__text">インプラント</span>
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
                <!-- インプラント治療画像 -->
                <div class="implant-content__hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/implant/cap1.webp" alt="インプラント治療" class="implant-content__hero-img">
                </div>

                <!-- メインタイトル -->
                <h1 class="implant-content__main-title">インプラント治療</h1>

                <!-- インプラント治療とは セクション -->
                <div class="implant-content__section">
                    <h2 class="implant-content__section-title">インプラント治療とは</h2>
                    <div class="implant-content__section-content">
                        <!-- インプラント説明画像 -->
                        <div class="implant-detail__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/implant/adult-orthodontics.webp" alt="インプラント治療の説明" class="implant-detail__img">
                        </div>

                        <!-- 説明テキスト -->
                        <div class="implant-content__text">
                            <p>インプラントとは、失われた歯の部分の顎骨にインプラントと呼ばれる人工の根っこを埋め込み、その上から被せ物を装着することで歯の欠損を補う治療法です。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>しかし、すべての方にインプラントが適用できるわけではありません。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>口腔外科処置を含むため、全身状態の状態や服用している薬なども影響してきます。<br>また、骨の高さや幅が十分でなければ骨を造成したり、移植するなどの処置も必要となります。処置を行う前に骨の状態や上顎洞、神経までの距離を検査していくことも非常に大切です。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>しかし、適切な処置を行い、十分なケアを行っていけばインプラントの5年間の生存率は95％を超え、自分の歯よりも長く口の中にとどまる可能性もあるという報告もあります。<br>また、審美面で優れていることはもちろん、違和感も少なく、物を噛む力は他の欠損治療よりも高いため、現在では最も機能的に高い補綴治療だといえます。</p>
                        </div>
                    </div>
                </div>

                <!-- インプラント、入れ歯、ブリッジの比較 セクション -->
                <div class="implant-content__section">
                    <h2 class="implant-content__section-title">インプラント、入れ歯、ブリッジの比較</h2>
                    <div class="implant-content__section-content">
                        <!-- 説明テキスト -->
                        <div class="implant-content__text">
                            <p>なんらかの原因で歯を失ってしまった場合、インプラント、入れ歯、ブリッジの3つの治療方法が主となります。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>ブリッジや入れ歯は保険適用となり比較的安い金額で処置をすることができます。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>ブリッジの場合、入れ歯と比べ見た目も良く、違和感も少ない治療となります。しかし健康な歯を多く削らなければなりません。また、支えとなる歯が欠損歯の負荷も補うために大きな負担がかかり、歯の寿命も短くなります。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>入れ歯の場合は、健康な歯を削る必要がなく、取り外しが可能なため、清掃性も優れています。しかし、他の治療に比べ違和感が多いことや噛む力が低いこと、また部位によってはバネが前歯にかかる場合もあるので審美面に欠けるともいえます。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>インプラント治療ではこれらの欠点はありませんが、治療費が高額なことや、治療期間が長いことなど、それぞれの治療方法にメリット・デメリットが存在します。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>歯を失ってしまった場合は担当の歯科医師とよく相談し、それぞれの特徴を考慮しながら、治療方法を決定していくと良いでしょう。</p>
                        </div>

                        <!-- 比較表 -->
                        <div class="implant-comparison-table">
                            <div class="implant-comparison-table__row implant-comparison-table__header-row">
                                <div class="implant-comparison-table__header"></div>
                                <div class="implant-comparison-table__content">インプラント</div>
                                <div class="implant-comparison-table__content">入れ歯</div>
                                <div class="implant-comparison-table__content">ブリッジ</div>
                            </div>
                            <div class="implant-comparison-table__row">
                                <div class="implant-comparison-table__header">治療費</div>
                                <div class="implant-comparison-table__content">高い</div>
                                <div class="implant-comparison-table__content">安い</div>
                                <div class="implant-comparison-table__content">安い</div>
                            </div>
                            <div class="implant-comparison-table__row">
                                <div class="implant-comparison-table__header">審美性</div>
                                <div class="implant-comparison-table__content">◎</div>
                                <div class="implant-comparison-table__content">〇</div>
                                <div class="implant-comparison-table__content">△</div>
                            </div>
                            <div class="implant-comparison-table__row">
                                <div class="implant-comparison-table__header">違和感</div>
                                <div class="implant-comparison-table__content">◎</div>
                                <div class="implant-comparison-table__content">△</div>
                                <div class="implant-comparison-table__content">◎</div>
                            </div>
                            <div class="implant-comparison-table__row">
                                <div class="implant-comparison-table__header">咬合力</div>
                                <div class="implant-comparison-table__content">◎</div>
                                <div class="implant-comparison-table__content">△</div>
                                <div class="implant-comparison-table__content">〇</div>
                            </div>
                            <div class="implant-comparison-table__row">
                                <div class="implant-comparison-table__header">歯を削る必要</div>
                                <div class="implant-comparison-table__content">なし</div>
                                <div class="implant-comparison-table__content">なし</div>
                                <div class="implant-comparison-table__content">あり</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- インプラント埋入後のメインテナンス セクション -->
                <div class="implant-content__section">
                    <h2 class="implant-content__section-title">インプラント埋入後のメインテナンス</h2>
                    <div class="implant-content__section-content">
                        <div class="implant-content__text">
                            <p>インプラント埋入後も適切なプラークコントロールが行われなければ、歯茎からの出血やインプラントを支えている骨が溶けてしまい、しまいにはグラグラとしはじめ、抜かなければいけない状態となってしまいます。</p>
                        </div>
                        <div class="implant-content__text">
                            <p>歯科医師や歯科衛生士による清掃指導を実践し、定期的に健診を受け、現在の診断や専門器具での清掃を行っていくことでインプラントの寿命を延ばすことができます。</p>
                        </div>
                    </div>
                </div>

                <!-- 治療費 セクション -->
                <div class="implant-content__section">
                    <h2 class="implant-content__section-title">治療費</h2>
                    <div class="implant-content__section-content">
                        <!-- 料金表 -->
                        <div class="implant-price-table">
                            <div class="implant-price-table__row">
                                <div class="implant-price-table__item">インプラント診断</div>
                                <div class="implant-price-table__cost">33,000円（税込）</div>
                            </div>
                            <div class="implant-price-table__row">
                                <div class="implant-price-table__item">インプラント奥歯</div>
                                <div class="implant-price-table__cost">374,000円（税込）</div>
                            </div>
                            <div class="implant-price-table__row">
                                <div class="implant-price-table__item">インプラント前歯</div>
                                <div class="implant-price-table__cost">418,000円（税込）</div>
                            </div>
                        </div>

                        <!-- 注意事項 -->
                        <div class="implant-content__notes">
                            <p class="implant-content__text implant-content__text--highlight">治療期間は2.5ヶ月～半年程度です。</p>
                            <p class="implant-content__text">インプラント診断料は当院側から治療を断りするケースに関して料金はかかりませんもしくは返金します。</p>
                            <p class="implant-content__text">インプラントから上部構造セラミックまでを含めた料金です。</p>
                            <p class="implant-content__text">当院では<span class="highlight">ストローマン社の高品質なインプラント</span>を用いています。</p>
                            <p class="implant-content__text">当院の歯科医師はインプラント専門医院での勤務経験があり症例実績もありますが、現在は専門で行ってはいません。</p>
                            <p class="implant-content__text">骨の移植やサイナスリフトを伴うケースなどは、大学病院のインプラント診療科をお薦めします。</p>
                        </div>
                    </div>
                </div>

            </main>

            <!-- サイドバー -->
            <?php get_template_part( 'template-parts/sidebar', 'service' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>