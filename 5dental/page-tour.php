<?php
/**
 * Template Name: 院内ツアー
 * Description: 院内ツアーのページテンプレート
 *
 * @package 5DENTAL
 */

get_header(); ?>

<style>
.tour-section__image {
    margin-bottom: 24px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.tour-section__text-full {
    margin-bottom: 60px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.new-approach-section {
    margin-top: 48px;
    margin-bottom: 40px;
}

.tour-section__image img {
    width: 100%;
    height: auto;
    display: block;
}
</style>

    <div class="bg-decoration">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-gray.png" alt="" class="bg-decoration__img">
    </div>

    <main class="main">
        <section class="orthodontics-fv">
            <div class="orthodontics-fv__container">
                <div class="orthodontics-fv__bg-text">Tour</div>

                <div class="orthodontics-fv__content">
                    <h1 class="orthodontics-fv__title">院内ツアー</h1>

                    <nav class="orthodontics-fv__breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb__link">
                                    <span class="breadcrumb__text">HOME</span>
                                </a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--current">
                                <span class="breadcrumb__text">院内ツアー</span>
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
                    <span class="section-title-with-subtitle__subtitle">Tour</span>
                    <span class="section-title-with-subtitle__title">院内ツアー</span>
                </h2>

                <div class="access-info__details">
                    <!-- クリニック入口セクション -->
                    <h3 class="no-pain-section-title">クリニック入口</h3>
                    <div class="new-approach-section">
                        <div class="new-approach-section__content">
                            <div class="tour-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour/first-time01.webp" alt="クリニック入口">
                            </div>
                            <div class="tour-section__text-full">
                                <p>東京メトロ銀座駅 C-1出口直結、東京メトロ日比谷駅 A1出口より徒歩2分、JR有楽町駅 銀座口より徒歩4分です。<br>
                                GINZA5の2階にあります。</p>
                            </div>
                        </div>
                    </div>

                    <!-- 受付セクション -->
                    <h3 class="no-pain-section-title">受付</h3>
                    <div class="new-approach-section">
                        <div class="new-approach-section__content">
                            <div class="tour-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour/first-time02.webp" alt="受付">
                            </div>
                            <div class="tour-section__text-full">
                                <p>ご予約を確認しますので、お名前を申し出てください。<br>
                                初診時は保険証を、2回目以降は診察券と保険証をご提示下さい。<br>
                                初診時には患者登録をし、問診票をご記入頂きます。</p>
                            </div>
                        </div>
                    </div>

                    <!-- 待合室セクション -->
                    <h3 class="no-pain-section-title">待合室</h3>
                    <div class="new-approach-section">
                        <div class="new-approach-section__content">
                            <div class="tour-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour/first-time03.webp" alt="待合室">
                            </div>
                            <div class="tour-section__text-full">
                                <p>できるだけお待たせしないように心がけております。<br>
                                患者様にも遅刻やキャンセルがないようにお願いしています。</p>
                            </div>
                        </div>
                    </div>

                    <!-- 診療室セクション -->
                    <h3 class="no-pain-section-title">診療室</h3>
                    <div class="new-approach-section">
                        <div class="new-approach-section__content">
                            <div class="tour-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour/first-time04.webp" alt="診療室">
                            </div>
                            <div class="tour-section__text-full">
                                <p>診療チェアーは全部で5台です。<br>
                                チェアーごとにご説明のためのモニター画面があります。</p>
                            </div>
                        </div>
                    </div>

                    <!-- 個室セクション -->
                    <h3 class="no-pain-section-title">個室</h3>
                    <div class="new-approach-section">
                        <div class="new-approach-section__content">
                            <div class="tour-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour/first-time05.webp" alt="個室">
                            </div>
                            <div class="tour-section__text-full">
                                <p>一番奥は個室になっています。<br>
                                主にインプラントのオペなどで使用しています。</p>
                            </div>
                        </div>
                    </div>

                    <!-- デジタルX線撮影装置セクション -->
                    <h3 class="no-pain-section-title">デジタルX線撮影装置</h3>
                    <div class="new-approach-section">
                        <div class="new-approach-section__content">
                            <div class="tour-section__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour/first-time06.webp" alt="デジタルX線撮影装置">
                            </div>
                            <div class="tour-section__text-full">
                                <p>2種類のデジタルX線の撮影装置があります。</p>
                            </div>
                        </div>
                    </div>

                    <!-- 院内ビューセクション -->
                    <h3 class="no-pain-section-title">院内ビュー</h3>
                    <div class="new-approach-section">
                        <div class="new-approach-section__content">
                            <div class="tour-section__image tour-section__image--full">
                                <iframe src="https://www.google.com/maps/embed?pb=!4v1756344627437!6m8!1m7!1sCAoSLEFGMVFpcE54eXJhNnVDSWNDOXBHUEpDRnpxYUZqUW9MQkFEcEJKdGVIN2pP!2m2!1d35.67654801655556!2d139.7608872312956!3f167.68!4f-0.18000000000000682!5f0.5970117501821992" width="800" height="450" style="border:0; width: 100%; max-width: 800px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>