<?php
/**
 * Template Name: アクセス・診療時間
 * Description: アクセス・診療時間のページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<main class="main">
    <section class="orthodontics-fv">
        <div class="orthodontics-fv__container">
            <div class="orthodontics-fv__bg-text">Access</div>

            <div class="orthodontics-fv__content">
                <h1 class="orthodontics-fv__title">アクセス・診療時間</h1>

                <nav class="orthodontics-fv__breadcrumb">
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
                                <span class="breadcrumb__text">アクセス・診療時間</span>
                            </li>
                        </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </section>

    <!-- アクセス情報セクション -->
    <section class="access-info">
        <div class="access-info__container">
            <h2 class="section-title-with-subtitle">
                <span class="section-title-with-subtitle__subtitle">Access</span>
                <span class="section-title-with-subtitle__title">アクセス</span>
            </h2>

            <div class="access-info__details">
                <!-- 住所 -->
                <div class="access-info__address">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/map-filled.svg" alt="住所" class="access-info__address-icon">
                    <span class="access-info__address-text">〒104-0061 東京都中央区銀座5-1 GINZA5 2F</span>
                </div>

                <!-- 交通機関情報 -->
                <div class="access-info__transport">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/train-filled.svg" alt="交通機関" class="access-info__transport-icon">
                    <div class="access-info__transport-list">
                        <div class="access-info__transport-item">東京メトロ銀座駅 C-1出口直結</div>
                        <div class="access-info__transport-item">東京メトロ日比谷駅 A1出口より徒歩2分</div>
                        <div class="access-info__transport-item">JR有楽町駅 銀座口より徒歩4分</div>
                    </div>
                </div>

                <!-- 新幹線アクセス -->
                <div class="access-info__method">
                    <h3 class="access-info__method-title">新幹線(東京駅着)</h3>
                    <ol class="access-info__method-list">
                        <li class="access-info__method-item">東京駅で下車（東海道・東北・上越・北陸新幹線など）</li>
                        <li class="access-info__method-item">東京メトロ丸ノ内線「東京駅」から「銀座駅」へ（約2分）</li>
                        <li class="access-info__method-item">銀座駅「C1出口」から直結でGINZA5の2Fへ</li>
                    </ol>
                </div>

                <!-- 羽田空港からのアクセス -->
                <div class="access-info__method">
                    <h3 class="access-info__method-title">羽田空港からのアクセス（約40〜50分）</h3>
                    <ol class="access-info__method-list">
                        <li class="access-info__method-item">京急線で「品川駅」へ（約15分）</li>
                        <li class="access-info__method-item">JR山手線で「有楽町駅」へ（約10分）</li>
                        <li class="access-info__method-item">有楽町駅「銀座口」から徒歩約4分</li>
                    </ol>
                    <p class="access-info__method-note">または、東京モノレールで「浜松町駅」→JR山手線で「有楽町駅」→徒歩4分</p>
                </div>

                <!-- 成田空港からのアクセス -->
                <div class="access-info__method">
                    <h3 class="access-info__method-title">成田空港からのアクセス（約70〜90分）</h3>
                    <ol class="access-info__method-list">
                        <li class="access-info__method-item">成田エクスプレスで「東京駅」へ（約60分）</li>
                        <li class="access-info__method-item">東京メトロ丸ノ内線で「銀座駅」へ（約2分）</li>
                        <li class="access-info__method-item">銀座駅「C1出口」から直結でGINZA5の2Fへ</li>
                    </ol>
                    <p class="access-info__method-note">または、リムジンバスで「銀座駅周辺」下車 → 徒歩数分</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 地図セクション -->
    <section class="access-map">
        <div class="access-map__container">
            <h2 class="section-title-with-subtitle">
                <span class="section-title-with-subtitle__subtitle">Map</span>
                <span class="section-title-with-subtitle__title">地図</span>
            </h2>

            <div class="access-map__wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.197836784858!2d139.7605564756659!3d35.672130372590146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ba6c71b7dbb%3A0x85ed5d3645509f25!2sGinza%20Sony%20Park!5e0!3m2!1sja!2sjp!4v1754967413268!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- 銀座駅からのアクセス -->
    <section class="access-steps">
        <div class="access-steps__container">
            <h2 class="section-title-with-subtitle">
                <span class="section-title-with-subtitle__subtitle">Access from Ginza Station</span>
                <span class="section-title-with-subtitle__title">銀座駅からのアクセス</span>
            </h2>

            <div class="access-steps__list">
                <!-- ステップ1 -->
                <div class="access-steps__item">
                    <div class="access-steps__number">01. 東京メトロ銀座駅 C-1出口</div>
                    <div class="access-steps__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/access1.jpg" alt="東京メトロ銀座駅 C-1出口">
                    </div>
                    <p class="access-steps__text">
                        東京メトロ銀座駅C-1出口の後ろ側、TOKYO PLAZA の方面に通られます。（JR有楽町駅 銀座口で降りた方は、まず東京メトロ銀座駅C-1出口を目指してください）
                    </p>
                </div>

                <!-- ステップ2 -->
                <div class="access-steps__item">
                    <div class="access-steps__number">02. GINZAファイブ</div>
                    <div class="access-steps__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/access2.jpg" alt="GINZAファイブ">
                    </div>
                    <p class="access-steps__text">
                        横断歩道を渡る目の前にGINZAファイブの建物が見えてきます。当院はこの建物内にあります。
                    </p>
                </div>

                <!-- ステップ3 -->
                <div class="access-steps__item">
                    <div class="access-steps__number">03. GINZAファイブエントランス</div>
                    <div class="access-steps__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/access3.jpg" alt="GINZAファイブエントランス">
                    </div>
                    <p class="access-steps__text">
                        建物内に入ると柱が見えます。柱を超えて奥の左手にある階段に向かいます。
                    </p>
                </div>

                <!-- ステップ4 -->
                <div class="access-steps__item">
                    <div class="access-steps__number">04. GINZAファイブ階段</div>
                    <div class="access-steps__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/access4.jpg" alt="GINZAファイブ階段">
                    </div>
                    <p class="access-steps__text">
                        階段を使い、2階(アート&ホビー&ビューティーフロア)に上がります。
                    </p>
                </div>

                <!-- ステップ5 -->
                <div class="access-steps__item access-steps__item--full">
                    <div class="access-steps__number">05. 当院へ到着</div>
                    <div class="access-steps__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/first-time.jpg" alt="5DENTAL東京銀座">
                    </div>
                    <p class="access-steps__text">
                        階段を上がってすぐに、当院の入り口があります。お気をつけてお越しください。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 診療時間セクション -->
    <section class="office-hours">
        <div class="office-hours__container">
            <h2 class="section-title-with-subtitle">
                <span class="section-title-with-subtitle__subtitle">Office Hours</span>
                <span class="section-title-with-subtitle__title">診療時間</span>
            </h2>

            <div class="office-hours__description">
                <p><span class="highlight">保険外診療や長時間診療を予約制</span>にて行っています。必ず事前に予約して来院ください。</p>
                <p>※予約状況などによって診療時間や診療日が異なる場合があります。</p>
            </div>

            <div class="office-hours__table-wrapper">
                <table class="office-hours__table">
                    <thead>
                        <tr>
                            <th>診療時間</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th>土</th>
                            <th>日/祝</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10:00 ~ 14:00</td>
                            <td class="office-hours__open">●</td>
                            <td class="office-hours__open">●</td>
                            <td class="office-hours__open">●</td>
                            <td class="office-hours__open">●</td>
                            <td class="office-hours__open">●</td>
                            <td class="office-hours__dash">-</td>
                            <td class="office-hours__closed">×</td>
                        </tr>
                        <tr>
                            <td>15:00 ~ 20:00</td>
                            <td class="office-hours__open">●</td>
                            <td class="office-hours__open">●</td>
                            <td class="office-hours__open">●</td>
                            <td class="office-hours__open">●</td>
                            <td class="office-hours__open">●</td>
                            <td class="office-hours__dash">-</td>
                            <td class="office-hours__closed">×</td>
                        </tr>
                        <tr>
                            <td>10:00 ~ 14:30</td>
                            <td class="office-hours__dash">-</td>
                            <td class="office-hours__dash">-</td>
                            <td class="office-hours__dash">-</td>
                            <td class="office-hours__dash">-</td>
                            <td class="office-hours__dash">-</td>
                            <td class="office-hours__open">●</td>
                            <td class="office-hours__closed">×</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="office-hours__notes">
                <div class="office-hours__notes-item">保険外診療や長時間診療を予約制にて行っています。必ず事前に予約して来院ください。</div>
                <div class="office-hours__notes-item">予約状況などによって診療時間や診療日が異なる場合があります。</div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>