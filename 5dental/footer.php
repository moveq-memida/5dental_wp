<?php
/**
 * フッターテンプレート
 *
 * @package 5DENTAL
 */
?>

    <footer class="footer">
        <section class="footer__cta">
            <div class="footer__cta-bg-text">5DENTAL TOKYO GINZA</div>
            
            <div class="footer__cta-content">
                <div class="footer__cta-text">
                    <h2 class="footer__cta-text-title">
                        歯をできるだけ削らない方法・<br>
                        健康的な審美歯科
                    </h2>
                    <p class="footer__cta-text-description">
                        歯並びや形・バランス、唇の色など、<br>
                        審美的なお悩みを解決に導きます。<br>
                        お気軽に5DENTAL東京銀座までご相談ください。
                    </p>
                </div>
                
                <div class="footer__cta-buttons">
                    <a href="<?php echo esc_url( home_url( '/appointment' ) ); ?>" class="cta-button cta-button--web">
                        <div class="cta-button__content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar-icon.svg" alt="予約" class="cta-button__icon">
                            <span class="cta-button__text">24時間Web予約</span>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-white.svg" alt="矢印" class="cta-button__arrow">
                    </a>
                    
                    <a href="tel:03-5220-2511" class="cta-button cta-button--tel">
                        <div class="cta-button__content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.svg" alt="電話" class="cta-button__icon">
                            <span class="cta-button__text">03-5220-2511</span>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-white.svg" alt="矢印" class="cta-button__arrow">
                    </a>
                </div>
            </div>
        </section>

        <section class="footer__menu">
            <div class="footer__menu-container">
                <div class="footer__menu-grid">

                    <div class="footer__menu-about">
                        <div class="footer__menu-category__header">
                            <h3 class="footer__menu-category__title">About us</h3>
                        </div>
                        
                        <div class="footer__menu-about-content">
                            <div class="footer__menu-about-left">
                                <a href="<?php echo esc_url( home_url( '/features' ) ); ?>" class="footer__menu-category__link">当院の特徴</a>
                                
                                <div class="footer__menu-category__child">
                                    <a href="<?php echo esc_url( home_url( '/first-visit' ) ); ?>" class="footer__menu-category__child-link">初めての方へ</a>
                                </div>
                                
                                <div class="footer__menu-category__child">
                                    <a href="<?php echo esc_url( home_url( '/features' ) ); ?>" class="footer__menu-category__child-link">特徴紹介</a>
                                </div>
                                
                                <div class="footer__menu-category__child">
                                    <a href="<?php echo esc_url( home_url( '/concept' ) ); ?>" class="footer__menu-category__child-link">当院のコンセプト</a>
                                </div>
                            </div>
                            
                            <div class="footer__menu-about-right">
                                <a href="<?php echo esc_url( home_url( '/tour' ) ); ?>" class="footer__menu-category__link">院内ツアー</a>
                                <a href="<?php echo esc_url( home_url( '/media' ) ); ?>" class="footer__menu-category__link">メディア掲載</a>
                                <a href="<?php echo esc_url( home_url( '/access' ) ); ?>" class="footer__menu-category__link">アクセス・診療時間</a>
                            </div>
                        </div>
                    </div>

                    <div class="footer__menu-doctor-staff">
                        <div class="footer__menu-category__header">
                            <h3 class="footer__menu-category__title">Doctor/Staff</h3>
                        </div>
                        
                        <a href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="footer__menu-category__link">スタッフ紹介</a>
                        <a href="<?php echo esc_url( home_url( '/doctor' ) ); ?>" class="footer__menu-category__link">ドクター紹介</a>
                    </div>

                    <div class="footer__menu-news-updates">
                        <div class="footer__menu-category__header">
                            <h3 class="footer__menu-category__title">News/Updates</h3>
                        </div>
                        
                        <a href="<?php echo esc_url( home_url( '/column' ) ); ?>" class="footer__menu-category__link">コラム</a>
                        <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="footer__menu-category__link">お知らせ</a>
                    </div>

                    <div class="footer__menu-others">
                        <div class="footer__menu-category__header">
                            <h3 class="footer__menu-category__title">Others</h3>
                        </div>
                        
                        <a href="<?php echo esc_url( home_url( '/price' ) ); ?>" class="footer__menu-category__link">料金表</a>
                        <a href="<?php echo esc_url( home_url( '/facility-standards' ) ); ?>" class="footer__menu-category__link">施設基準等に基づく掲示事項</a>
                        <a href="<?php echo esc_url( home_url( '/sitemap' ) ); ?>" class="footer__menu-category__link">サイトマップ</a>
                    </div>

                    <div class="footer__menu-menu-header">
                        <div class="footer__menu-category__header">
                            <h3 class="footer__menu-category__title">Menu</h3>
                        </div>
                    </div>

                    <div class="footer__menu-menu-laminate">
                        <a href="<?php echo esc_url( home_url( '/laminate-veneer' ) ); ?>" class="footer__menu-category__link">削らないラミネートべニア</a>
                        
                        <div class="footer__menu-category__child">
                            <a href="<?php echo esc_url( home_url( '/laminate-veneer-special' ) ); ?>" class="footer__menu-category__child-link">ラミネートべニア特設ページ</a>
                        </div>
                        
                        <div class="footer__menu-category__child">
                            <a href="<?php echo esc_url( home_url( '/cases' ) ); ?>" class="footer__menu-category__child-link">施術症例紹介</a>
                        </div>
                    </div>

                    <div class="footer__menu-aesthetic">
                        <a href="<?php echo esc_url( home_url( '/services/aesthetic' ) ); ?>" class="footer__menu-category__link">審美歯科</a>
                        
                        <div class="footer__menu-category__child">
                            <a href="<?php echo esc_url( home_url( '/orthodontics' ) ); ?>" class="footer__menu-category__child-link">3Dデジタルマウスピース矯正<br>(審美矯正)</a>
                        </div>
                        
                        <div class="footer__menu-category__child">
                            <a href="<?php echo esc_url( home_url( '/ceramic' ) ); ?>" class="footer__menu-category__child-link">オールセラミック治療/<br>ジルコニア治療</a>
                        </div>
                        
                        <div class="footer__menu-category__child">
                            <a href="<?php echo esc_url( home_url( '/whitening' ) ); ?>" class="footer__menu-category__child-link">ホワイトニング</a>
                        </div>
                        
                        <div class="footer__menu-category__child">
                            <a href="<?php echo esc_url( home_url( '/gum-shaping' ) ); ?>" class="footer__menu-category__child-link">歯肉整形/ガミースマイル改善</a>
                        </div>
                        
                        <div class="footer__menu-category__child">
                            <a href="<?php echo esc_url( home_url( '/services/nail-art' ) ); ?>" class="footer__menu-category__child-link">歯のマニキュア</a>
                        </div>
                        
                        <div class="footer__menu-category__child">
                            <a href="<?php echo esc_url( home_url( '/direct-bonding' ) ); ?>" class="footer__menu-category__child-link">ダイレクトボンディング</a>
                        </div>
                    </div>

                    <div class="footer__menu-general">
                        <a href="<?php echo esc_url( home_url( '/services/general' ) ); ?>" class="footer__menu-category__link">総合歯科/その他</a>
                        
                        <div class="footer__menu-general-content">
                            <div class="footer__menu-general-left">
                                <div class="footer__menu-category__child">
                                    <a href="<?php echo esc_url( home_url( '/decayed' ) ); ?>" class="footer__menu-category__child-link">虫歯治療</a>
                                </div>
                                
                                <div class="footer__menu-category__child">
                                    <a href="<?php echo esc_url( home_url( '/services/gum-disease' ) ); ?>" class="footer__menu-category__child-link">歯周病治療</a>
                                </div>
                                
                                <div class="footer__menu-category__child">
                                    <a href="<?php echo esc_url( home_url( '/cleaning' ) ); ?>" class="footer__menu-category__child-link">予防歯科/クリーニング</a>
                                </div>
                                
                                <div class="footer__menu-category__child">
                                    <a href="<?php echo esc_url( home_url( '/urgent' ) ); ?>" class="footer__menu-category__child-link">緊急治療・主訴治療</a>
                                </div>
                                
                                <div class="footer__menu-category__child">
                                    <a href="<?php echo esc_url( home_url( '/implant' ) ); ?>" class="footer__menu-category__child-link">インプラント</a>
                                </div>
                                
                                <div class="footer__menu-category__child">
                                    <a href="<?php echo esc_url( home_url( '/occlusion' ) ); ?>" class="footer__menu-category__child-link">噛み合わせ・顎関節症</a>
                                </div>
                            </div>
                            
                            <div class="footer__menu-general-right">
                                <div class="footer__menu-category__child">
                                    <a href="<?php echo esc_url( home_url( '/denture' ) ); ?>" class="footer__menu-category__child-link">入れ歯/ブリッジ</a>
                                </div>
                                
                                <div class="footer__menu-category__child">
                                    <a href="<?php echo esc_url( home_url( '/services/lip-artmake' ) ); ?>" class="footer__menu-category__child-link">リップアートメイク@DENTAL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer__info">
            <div class="footer__info-container">
                <div class="footer__info-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.svg" alt="5DENTAL東京銀座">
                </div>
                
                <div class="footer__info-details">
                    <div class="footer__info-details-name">
                        <span class="footer__info-details-name-company">医療法人社団ever</span>
                        <span class="footer__info-details-name-clinic">5DENTAL東京銀座</span>
                    </div>
                    <div class="footer__info-details-address">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-icon.svg" alt="住所" class="footer__info-details-address-icon">
                        <span>〒104-0061 東京都中央区銀座5丁目1番 GINZA5 2F</span>
                    </div>
                </div>
                
                <div class="footer__info-social">
                    <a href="https://www.instagram.com/5dental/" target="_blank" rel="noopener noreferrer" class="footer__info-social-link">
                        <span class="footer__info-social-text">Instagram</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tab-filled.svg" alt="タブアイコン" class="footer__info-social-icon">
                    </a>
                    <a href="https://www.youtube.com/@5dental" target="_blank" rel="noopener noreferrer" class="footer__info-social-link">
                        <span class="footer__info-social-text">YouTube</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tab-filled.svg" alt="タブアイコン" class="footer__info-social-icon">
                    </a>
                </div>
            </div>
        </section>

        <section class="footer__copyright">
            <p class="footer__copyright-text">© 5DENTAL TOKYO GINZA</p>
        </section>
    </footer>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- FV Slideshow Initialization -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const fvSwiper = new Swiper('.fv-swiper', {
            // Basic parameters
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            speed: 1000,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            
            
            // Responsive breakpoints
            breakpoints: {
                768: {
                    autoplay: {
                        delay: 6000,
                    },
                }
            },
            
            // Events
            on: {
                slideChange: function() {
                    // Add animation classes to slide content
                    const activeSlide = this.slides[this.activeIndex];
                    const content = activeSlide.querySelector('.fv-slide__content');
                    if (content) {
                        content.classList.add('animate-in');
                        setTimeout(() => {
                            content.classList.remove('animate-in');
                        }, 1000);
                    }
                }
            }
        });
        
        // Pause autoplay on hover
        const swiperContainer = document.querySelector('.fv-swiper');
        if (swiperContainer) {
            swiperContainer.addEventListener('mouseenter', () => {
                fvSwiper.autoplay.stop();
            });
            
            swiperContainer.addEventListener('mouseleave', () => {
                fvSwiper.autoplay.start();
            });
        }
    });
    </script>
    
    <?php wp_footer(); ?>
</body>
</html>