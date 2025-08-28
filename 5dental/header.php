<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- FV Slideshow CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fv-slideshow.css" />
    
    <!-- Hamburger Menu CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hamburger-menu.css" />
    
    <!-- Hamburger Menu JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hamburger-menu.js" defer></script>
    
    <?php wp_head(); ?>
    
    <style>
    /* 全ページ共通のスタイル調整 */
    .orthodontics-stage__image {
        background-color: initial !important;
        min-height: initial !important;
    }
    
    /* ハイライトの位置調整 - グラデーションで下半分に背景 */
    .highlight {
        background: linear-gradient(transparent 50%, #fffad7 50%) !important;
        padding: 0 0.125rem !important;
    }
    
    /* サイドバーメニューの現在ページ表示 - 最終版 */
    .category-menu__item--current .category-menu__link {
        position: relative !important;
        padding-left: 1rem !important;
    }
    
    .content__sidebar .category-menu .category-menu__item--current .category-menu__link::before {
        content: "" !important;
        position: absolute !important;
        left: 0 !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        width: 6px !important;
        height: 6px !important;
        background-color: #d6d6e5 !important;
        border-radius: 50% !important;
        display: block !important;
        z-index: 999 !important;
    }
    
    @media (max-width: 768px) {
        .breadcrumb {
            flex-direction: row !important;
            align-items: center !important;
            gap: 0.5rem !important;
        }
        
        .breadcrumb__item:not(:last-child)::after {
            display: block !important;
            content: "" !important;
            position: absolute !important;
            right: -1.75rem !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            width: .875rem !important;
            height: .6875rem !important;
            background-image: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11" fill="none"><mask id="mask0_136_17462" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="14" height="11"><rect width="14" height="11" fill="%23D9D9D9"/></mask><g mask="url(%23mask0_136_17462)"><path d="M0.5 10.5L13.5 0.5" stroke="%23787B83"/></g></svg>') !important;
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
            opacity: .6 !important;
        }
    }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="header__container">
        <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        
        if ( has_custom_logo() ) {
            echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="header__logo" id="header-logo">';
            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            echo '</a>';
        } else {
            echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="header__logo" id="header-logo">';
            ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="145" height="48" viewBox="0 0 145 48" fill="none" class="header__logo-svg">
                <path d="M119.153 47.7114H108.689C108.594 47.7114 108.541 47.6023 108.597 47.5283L116.165 37.437C116.263 37.3067 116.168 37.1202 116.006 37.1202H109.403V35.8354H118.541C118.738 35.8354 118.85 36.0572 118.734 36.2156L111.585 45.9198C111.526 46.0007 111.585 46.1098 111.684 46.1098H119.153V47.7114Z" fill="currentColor"/>
                <path d="M53.8001 6.39911H68.147V8.52509C68.147 8.67644 68.0238 8.79964 67.8724 8.79964H56.3626V14.9171H66.556C66.6757 14.9171 66.7707 15.0121 66.7707 15.1318V17.1346C66.7707 17.2543 66.6757 17.3493 66.556 17.3493H56.3626V24.0757H68.3898C68.7383 24.0757 69.0234 24.3608 69.0234 24.7093V26.529H53.8036V6.39911H53.8001Z" fill="currentColor"/>
                <path d="M72.5013 26.1875V5.75488L87.274 20.9043V6.68412C87.274 6.52573 87.4007 6.39901 87.5591 6.39901H89.3718C89.5302 6.39901 89.6569 6.52573 89.6569 6.68412V26.9548L75.0602 12.0835V26.1875C75.0602 26.3952 74.8912 26.5677 74.6801 26.5677H72.8779C72.6702 26.5677 72.4978 26.3987 72.4978 26.1875H72.5013Z" fill="currentColor"/>
                <path d="M92.9938 8.52503V6.64192C92.9938 6.49057 93.117 6.36737 93.2684 6.36737H109.006C109.157 6.36737 109.28 6.49057 109.28 6.64192V8.52503C109.28 8.67638 109.157 8.79958 109.006 8.79958H102.466V25.9552C102.466 26.2826 102.202 26.5501 101.871 26.5501H100.28C100.093 26.5501 99.942 26.3987 99.942 26.2122V8.79958H93.2684C93.117 8.79958 92.9938 8.67638 92.9938 8.52503Z" fill="currentColor"/>
                <path d="M129.448 6.40607H131.515C131.659 6.40607 131.775 6.52222 131.775 6.66653V23.8257C131.775 23.9771 131.898 24.0968 132.046 24.0968H143.359C143.616 24.0968 143.82 24.3044 143.82 24.5578V26.0432C143.82 26.3002 143.612 26.5043 143.359 26.5043H129.505C129.329 26.5043 129.188 26.3635 129.188 26.1875V6.66653C129.188 6.52222 129.304 6.40607 129.448 6.40607Z" fill="currentColor"/>
                <path d="M35.9936 37.3982C34.7933 36.2578 33.2798 35.6805 31.5022 35.6805C30.4041 35.6805 29.3657 35.9445 28.4224 36.469C27.4756 36.9934 26.7188 37.7291 26.1732 38.6548C25.6241 39.5805 25.3496 40.5977 25.3496 41.6819C25.3496 43.308 25.9585 44.716 27.1623 45.8599C28.3626 47.0038 29.855 47.5846 31.6008 47.5846C33.3466 47.5846 34.8039 47.0003 36.0041 45.8529C37.2044 44.7019 37.8133 43.2799 37.8133 41.6291C37.8133 39.9783 37.2044 38.5386 36.0006 37.3982H35.9936ZM36.3667 41.6255C36.3667 42.4844 36.1555 43.2799 35.7401 43.9803C35.3248 44.6843 34.737 45.2439 33.9943 45.6522C33.2481 46.057 32.428 46.2647 31.5515 46.2647C30.2421 46.2647 29.1088 45.8177 28.1795 44.9342C27.2538 44.0542 26.7822 42.9596 26.7822 41.6783C26.7822 40.8125 26.9933 40.017 27.4122 39.3165C27.8311 38.6126 28.4224 38.0459 29.1686 37.6305C29.9148 37.2152 30.7173 37.004 31.548 37.004C32.3787 37.004 33.2129 37.2152 33.9697 37.6305C34.7264 38.0459 35.3213 38.6055 35.7366 39.2989C36.1519 39.9888 36.3631 40.7737 36.3631 41.6291L36.3667 41.6255Z" fill="currentColor"/>
                <path d="M40.6572 35.8847H41.15C41.3858 35.8847 41.5724 36.0747 41.5724 36.307V40.7737C41.5724 40.8793 41.6991 40.9321 41.773 40.8547L46.6973 35.8037H48.6508L43.0542 41.1679L49.5976 47.4121C49.6821 47.4931 49.6258 47.6304 49.5096 47.6304H48.2601C47.8412 47.6304 47.4364 47.4649 47.1408 47.1657L41.9772 42.0092C41.868 41.9001 41.685 41.9775 41.685 42.1324V47.6304H40.71C40.446 47.6304 40.2348 47.4156 40.2348 47.1552V36.3106C40.2348 36.0747 40.4249 35.8882 40.6572 35.8882V35.8847Z" fill="currentColor"/>
                <path d="M49.5093 35.8037H51.0616C51.2552 35.8037 51.4382 35.8952 51.5543 36.0501L54.6976 40.207L57.9182 35.9903C58.0097 35.8741 58.147 35.8037 58.2948 35.8037H59.1677C59.386 35.8037 59.5127 36.0571 59.3754 36.2296L55.2748 41.5023V47.2713C55.2748 47.4684 55.1164 47.6268 54.9193 47.6268H54.2329C54.0358 47.6268 53.8774 47.4684 53.8774 47.2713V41.5023L49.5058 35.8037H49.5093Z" fill="currentColor"/>
                <path d="M19.2109 14.1392C17.3912 12.2314 14.7231 11.2248 11.499 11.2248C8.79575 11.2248 6.72961 12.2138 5.28647 13.2803V2.73491H20.3443V0H2.55156V14.6531L5.49414 16.7826C6.31075 15.8217 8.31001 13.9561 11.499 13.9561C13.9558 13.9561 15.941 14.6707 17.2328 16.0258C18.4823 17.3317 19.0842 19.2324 18.9786 21.5203C18.7991 25.4167 14.7935 27.8243 11.1892 27.8243C6.3917 27.8243 3.73071 25.8321 2.81555 21.5519L0.143997 22.1222C0.964118 25.9693 3.54768 30.5557 11.1892 30.5557C16.0501 30.5557 21.4566 27.1485 21.71 21.6435C21.8508 18.5918 20.9885 15.9976 19.2109 14.1357V14.1392Z" fill="currentColor"/>
                <path d="M39.3656 26.6134H32.0303V6.2793H40.1224C43.6915 6.2793 50.3545 9.2606 50.3545 16.4481C50.3545 24.0545 42.8115 26.6169 39.3691 26.6169L39.3656 26.6134ZM34.5364 24.1073H39.3656C41.0481 24.1073 47.8414 22.7451 47.8414 16.4481C47.8414 11.1015 42.727 8.78894 40.1188 8.78894H34.5364V24.1073Z" fill="currentColor"/>
                <path d="M126.872 26.2615L116.851 5.78662L106.957 25.8954C106.848 26.1172 107.01 26.3776 107.26 26.3776H109.044C109.259 26.3776 109.456 26.2545 109.547 26.0609L112.05 20.8973H121.441L124.208 26.5431H126.693C126.84 26.5431 126.935 26.3882 126.872 26.258V26.2615ZM113.138 18.6516L116.717 11.2635L120.336 18.6516H113.138Z" fill="currentColor"/>
                <path d="M25.5786 11.795C25.135 11.612 24.9977 10.8798 24.9977 8.00061V0.894067C24.9977 0.735675 25.0681 0.281616 25.2864 0.281616C25.5046 0.281616 25.5751 0.732155 25.5751 0.894067V11.795H25.5786Z" fill="currentColor"/>
                <path d="M27.2537 5.67748V5.71267C27.2537 5.92034 27.0847 6.08578 26.8806 6.08578H24.0013C23.6986 6.08578 23.4522 5.83939 23.4522 5.53668H27.1129C27.1903 5.53668 27.2537 5.60004 27.2537 5.67748Z" fill="currentColor"/>
                <path d="M24.3994 35.8037H14.8466V37.194H18.6586L18.6726 47.6128H19.6899C19.8764 47.6128 20.0242 47.4614 20.0242 47.2784L20.0102 37.1976H24.3959V35.8072L24.3994 35.8037Z" fill="currentColor"/>
                <path d="M70.3753 37.3982C69.1751 36.2578 67.6616 35.6805 65.884 35.6805C64.7858 35.6805 63.7475 35.9445 62.8042 36.469C61.8573 36.9934 61.1006 37.7291 60.555 38.6548C60.0059 39.5805 59.7314 40.5977 59.7314 41.6819C59.7314 43.308 60.3403 44.716 61.5441 45.8599C62.7443 47.0038 64.2368 47.5846 65.9826 47.5846C67.7284 47.5846 69.1856 47.0003 70.3859 45.8529C71.5862 44.7019 72.1951 43.2799 72.1951 41.6291C72.1951 39.9783 71.5862 38.5386 70.3824 37.3982H70.3753ZM70.7484 41.6255C70.7484 42.4844 70.5373 43.2799 70.1219 43.9803C69.7066 44.6843 69.1188 45.2439 68.3761 45.6522C67.6299 46.057 66.8098 46.2647 65.9333 46.2647C64.6239 46.2647 63.4905 45.8177 62.5613 44.9342C61.6356 44.0542 61.1639 42.9596 61.1639 41.6783C61.1639 40.8125 61.3751 40.017 61.794 39.3165C62.2129 38.6126 62.8042 38.0459 63.5504 37.6305C64.2966 37.2152 65.0991 37.004 65.9298 37.004C66.7605 37.004 67.5947 37.2152 68.3514 37.6305C69.1082 38.0459 69.7031 38.6055 70.1184 39.2989C70.5337 39.9888 70.7449 40.7737 70.7449 41.6291L70.7484 41.6255Z" fill="currentColor"/>
                <path d="M84.5249 47.6656C82.9515 47.6656 81.3148 46.9757 80.1357 45.8141C78.9917 44.6843 78.3828 43.2376 78.3828 41.6326C78.3828 38.0142 81.6844 35.5855 84.7678 35.5855C87.5203 35.5855 88.7487 36.8034 88.8121 36.8562L88.1961 38.074C88.1503 38.0353 86.9571 37.0322 84.7713 37.0322C82.7509 37.0322 79.833 38.6689 79.833 41.6326C79.833 43.1602 80.551 44.188 81.1529 44.7828C82.0645 45.6839 83.3739 46.24 84.5742 46.2189C86.5664 46.1943 87.4745 45.6522 87.8863 45.3073V42.4738L84.7537 42.4597V41.9564C84.7572 41.4355 85.1796 41.0096 85.704 41.0061L89.3365 40.9779V45.9197L89.1253 46.1309C88.1186 47.1376 86.6368 47.6374 84.5953 47.6656C84.5742 47.6656 84.5495 47.6656 84.5284 47.6656H84.5249Z" fill="currentColor"/>
                <path d="M93.3672 35.853H92.6948C92.5062 35.853 92.3533 36.0059 92.3533 36.1945V47.3242C92.3533 47.5127 92.5062 47.6656 92.6948 47.6656H93.3672C93.5559 47.6656 93.7088 47.5127 93.7088 47.3242V36.1945C93.7088 36.0059 93.5559 35.853 93.3672 35.853Z" fill="currentColor"/>
                <path d="M96.7246 47.5424V35.3215L105.559 44.3816V35.8777C105.559 35.7826 105.637 35.7087 105.728 35.7087H106.812C106.908 35.7087 106.981 35.7862 106.981 35.8777V48L98.2522 39.1089V47.5424C98.2522 47.6691 98.1502 47.7677 98.027 47.7677H96.9499C96.8232 47.7677 96.7246 47.6656 96.7246 47.5424Z" fill="currentColor"/>
                <path d="M131.261 47.4367L125.753 35.5361L119.991 47.3522C119.928 47.486 120.023 47.6373 120.167 47.6373H121.409C121.533 47.6373 121.645 47.5634 121.702 47.4508L123.458 43.9556C123.521 43.8289 123.651 43.7479 123.792 43.7479H127.668C127.812 43.7479 127.946 43.8324 128.006 43.9626L129.596 47.3241C129.677 47.4965 129.85 47.6056 130.04 47.6056H131.163C131.247 47.6056 131.304 47.5141 131.265 47.4367H131.261ZM124.003 42.5265L125.619 39.1475L127.361 42.5265H124.003Z" fill="currentColor"/>
                <path d="M144.816 41.4178H131.11V41.9001H144.816V41.4178Z" fill="currentColor"/>
                <path d="M14.0545 41.4178H0.348267V41.9001H14.0545V41.4178Z" fill="currentColor"/>
            </svg>
            <?php
            echo '</a>';
        }
        ?>

        <!-- ナビゲーション -->
        <nav class="header__nav">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'header__nav-list',
                    'container'      => false,
                    'walker'         => new FiveDental_Nav_Walker(),
                ) );
            } else {
                ?>
                <ul class="header__nav-list">
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__nav-link">HOME</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url( home_url( '/features' ) ); ?>" class="header__nav-link">当院の特徴</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="header__nav-link">スタッフ紹介</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url( home_url( '/menu' ) ); ?>" class="header__nav-link">診療メニュー</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url( home_url( '/price' ) ); ?>" class="header__nav-link">料金表</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url( home_url( '/access' ) ); ?>" class="header__nav-link">アクセス</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="header__nav-link">お知らせ</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo esc_url( home_url( '/column' ) ); ?>" class="header__nav-link">コラム</a>
                    </li>
                </ul>
                <?php
            }
            ?>
        </nav>

        <!-- ハンバーガーメニューボタン -->
        <button class="header__hamburger" type="button" aria-label="メニューを開く">
            <div class="header__hamburger-icon">
                <svg viewBox="0 0 24 15" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0" y="0" width="24" height="2" rx="1"/>
                    <rect x="0" y="6.5" width="20" height="2" rx="1"/>
                    <rect x="0" y="13" width="16" height="2" rx="1"/>
                </svg>
            </div>
            <span class="header__hamburger-text">menu</span>
        </button>
        
        <!-- 閉じるボタン（ヘッダー内） -->
        <button class="hamburger-menu__close" id="hamburger-close" type="button" aria-label="メニューを閉じる" style="display: none;">
            <span class="hamburger-menu__close-text">close</span>
        </button>
    </div>
</header>

<!-- ハンバーガーメニュー 全画面オーバーレイ -->
<div class="hamburger-menu" id="hamburger-menu">
    <div class="hamburger-menu__container">
        <!-- 左側: クリニック情報エリア -->
        <div class="hamburger-menu__left">
            <!-- ロゴ -->
            <div class="hamburger-menu__logo">
                <?php
                if ( has_custom_logo() ) {
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                } else {
                    ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="145" height="48" viewBox="0 0 145 48" fill="none">
                        <path d="M119.153 47.7114H108.689C108.594 47.7114 108.541 47.6023 108.597 47.5283L116.165 37.437C116.263 37.3067 116.168 37.1202 116.006 37.1202H109.403V35.8354H118.541C118.738 35.8354 118.85 36.0572 118.734 36.2156L111.585 45.9198C111.526 46.0007 111.585 46.1098 111.684 46.1098H119.153V47.7114Z" fill="currentColor"/>
                        <path d="M53.8001 6.39911H68.147V8.52509C68.147 8.67644 68.0238 8.79964 67.8724 8.79964H56.3626V14.9171H66.556C66.6757 14.9171 66.7707 15.0121 66.7707 15.1318V17.1346C66.7707 17.2543 66.6757 17.3493 66.556 17.3493H56.3626V24.0757H68.3898C68.7383 24.0757 69.0234 24.3608 69.0234 24.7093V26.529H53.8036V6.39911H53.8001Z" fill="currentColor"/>
                        <path d="M72.5013 26.1875V5.75488L87.274 20.9043V6.68412C87.274 6.52573 87.4007 6.39901 87.5591 6.39901H89.3718C89.5302 6.39901 89.6569 6.52573 89.6569 6.68412V26.9548L75.0602 12.0835V26.1875C75.0602 26.3952 74.8912 26.5677 74.6801 26.5677H72.8779C72.6702 26.5677 72.4978 26.3987 72.4978 26.1875H72.5013Z" fill="currentColor"/>
                        <path d="M92.9938 8.52503V6.64192C92.9938 6.49057 93.117 6.36737 93.2684 6.36737H109.006C109.157 6.36737 109.28 6.49057 109.28 6.64192V8.52503C109.28 8.67638 109.157 8.79958 109.006 8.79958H102.466V25.9552C102.466 26.2826 102.202 26.5501 101.871 26.5501H100.28C100.093 26.5501 99.942 26.3987 99.942 26.2122V8.79958H93.2684C93.117 8.79958 92.9938 8.67638 92.9938 8.52503Z" fill="currentColor"/>
                        <path d="M129.448 6.40607H131.515C131.659 6.40607 131.775 6.52222 131.775 6.66653V23.8257C131.775 23.9771 131.898 24.0968 132.046 24.0968H143.359C143.616 24.0968 143.82 24.3044 143.82 24.5578V26.0432C143.82 26.3002 143.612 26.5043 143.359 26.5043H129.505C129.329 26.5043 129.188 26.3635 129.188 26.1875V6.66653C129.188 6.52222 129.304 6.40607 129.448 6.40607Z" fill="currentColor"/>
                        <path d="M35.9936 37.3982C34.7933 36.2578 33.2798 35.6805 31.5022 35.6805C30.4041 35.6805 29.3657 35.9445 28.4224 36.469C27.4756 36.9934 26.7188 37.7291 26.1732 38.6548C25.6241 39.5805 25.3496 40.5977 25.3496 41.6819C25.3496 43.308 25.9585 44.716 27.1623 45.8599C28.3626 47.0038 29.855 47.5846 31.6008 47.5846C33.3466 47.5846 34.8039 47.0003 36.0041 45.8529C37.2044 44.7019 37.8133 43.2799 37.8133 41.6291C37.8133 39.9783 37.2044 38.5386 36.0006 37.3982H35.9936ZM36.3667 41.6255C36.3667 42.4844 36.1555 43.2799 35.7401 43.9803C35.3248 44.6843 34.737 45.2439 33.9943 45.6522C33.2481 46.057 32.428 46.2647 31.5515 46.2647C30.2421 46.2647 29.1088 45.8177 28.1795 44.9342C27.2538 44.0542 26.7822 42.9596 26.7822 41.6783C26.7822 40.8125 26.9933 40.017 27.4122 39.3165C27.8311 38.6126 28.4224 38.0459 29.1686 37.6305C29.9148 37.2152 30.7173 37.004 31.548 37.004C32.3787 37.004 33.2129 37.2152 33.9697 37.6305C34.7264 38.0459 35.3213 38.6055 35.7366 39.2989C36.1519 39.9888 36.3631 40.7737 36.3631 41.6291L36.3667 41.6255Z" fill="currentColor"/>
                        <path d="M40.6572 35.8847H41.15C41.3858 35.8847 41.5724 36.0747 41.5724 36.307V40.7737C41.5724 40.8793 41.6991 40.9321 41.773 40.8547L46.6973 35.8037H48.6508L43.0542 41.1679L49.5976 47.4121C49.6821 47.4931 49.6258 47.6304 49.5096 47.6304H48.2601C47.8412 47.6304 47.4364 47.4649 47.1408 47.1657L41.9772 42.0092C41.868 41.9001 41.685 41.9775 41.685 42.1324V47.6304H40.71C40.446 47.6304 40.2348 47.4156 40.2348 47.1552V36.3106C40.2348 36.0747 40.4249 35.8882 40.6572 35.8882V35.8847Z" fill="currentColor"/>
                        <path d="M49.5093 35.8037H51.0616C51.2552 35.8037 51.4382 35.8952 51.5543 36.0501L54.6976 40.207L57.9182 35.9903C58.0097 35.8741 58.147 35.8037 58.2948 35.8037H59.1677C59.386 35.8037 59.5127 36.0571 59.3754 36.2296L55.2748 41.5023V47.2713C55.2748 47.4684 55.1164 47.6268 54.9193 47.6268H54.2329C54.0358 47.6268 53.8774 47.4684 53.8774 47.2713V41.5023L49.5058 35.8037H49.5093Z" fill="currentColor"/>
                        <path d="M19.2109 14.1392C17.3912 12.2314 14.7231 11.2248 11.499 11.2248C8.79575 11.2248 6.72961 12.2138 5.28647 13.2803V2.73491H20.3443V0H2.55156V14.6531L5.49414 16.7826C6.31075 15.8217 8.31001 13.9561 11.499 13.9561C13.9558 13.9561 15.941 14.6707 17.2328 16.0258C18.4823 17.3317 19.0842 19.2324 18.9786 21.5203C18.7991 25.4167 14.7935 27.8243 11.1892 27.8243C6.3917 27.8243 3.73071 25.8321 2.81555 21.5519L0.143997 22.1222C0.964118 25.9693 3.54768 30.5557 11.1892 30.5557C16.0501 30.5557 21.4566 27.1485 21.71 21.6435C21.8508 18.5918 20.9885 15.9976 19.2109 14.1357V14.1392Z" fill="currentColor"/>
                        <path d="M39.3656 26.6134H32.0303V6.2793H40.1224C43.6915 6.2793 50.3545 9.2606 50.3545 16.4481C50.3545 24.0545 42.8115 26.6169 39.3691 26.6169L39.3656 26.6134ZM34.5364 24.1073H39.3656C41.0481 24.1073 47.8414 22.7451 47.8414 16.4481C47.8414 11.1015 42.727 8.78894 40.1188 8.78894H34.5364V24.1073Z" fill="currentColor"/>
                        <path d="M126.872 26.2615L116.851 5.78662L106.957 25.8954C106.848 26.1172 107.01 26.3776 107.26 26.3776H109.044C109.259 26.3776 109.456 26.2545 109.547 26.0609L112.05 20.8973H121.441L124.208 26.5431H126.693C126.84 26.5431 126.935 26.3882 126.872 26.258V26.2615ZM113.138 18.6516L116.717 11.2635L120.336 18.6516H113.138Z" fill="currentColor"/>
                        <path d="M25.5786 11.795C25.135 11.612 24.9977 10.8798 24.9977 8.00061V0.894067C24.9977 0.735675 25.0681 0.281616 25.2864 0.281616C25.5046 0.281616 25.5751 0.732155 25.5751 0.894067V11.795H25.5786Z" fill="currentColor"/>
                        <path d="M27.2537 5.67748V5.71267C27.2537 5.92034 27.0847 6.08578 26.8806 6.08578H24.0013C23.6986 6.08578 23.4522 5.83939 23.4522 5.53668H27.1129C27.1903 5.53668 27.2537 5.60004 27.2537 5.67748Z" fill="currentColor"/>
                        <path d="M24.3994 35.8037H14.8466V37.194H18.6586L18.6726 47.6128H19.6899C19.8764 47.6128 20.0242 47.4614 20.0242 47.2784L20.0102 37.1976H24.3959V35.8072L24.3994 35.8037Z" fill="currentColor"/>
                        <path d="M70.3753 37.3982C69.1751 36.2578 67.6616 35.6805 65.884 35.6805C64.7858 35.6805 63.7475 35.9445 62.8042 36.469C61.8573 36.9934 61.1006 37.7291 60.555 38.6548C60.0059 39.5805 59.7314 40.5977 59.7314 41.6819C59.7314 43.308 60.3403 44.716 61.5441 45.8599C62.7443 47.0038 64.2368 47.5846 65.9826 47.5846C67.7284 47.5846 69.1856 47.0003 70.3859 45.8529C71.5862 44.7019 72.1951 43.2799 72.1951 41.6291C72.1951 39.9783 71.5862 38.5386 70.3824 37.3982H70.3753ZM70.7484 41.6255C70.7484 42.4844 70.5373 43.2799 70.1219 43.9803C69.7066 44.6843 69.1188 45.2439 68.3761 45.6522C67.6299 46.057 66.8098 46.2647 65.9333 46.2647C64.6239 46.2647 63.4905 45.8177 62.5613 44.9342C61.6356 44.0542 61.1639 42.9596 61.1639 41.6783C61.1639 40.8125 61.3751 40.017 61.794 39.3165C62.2129 38.6126 62.8042 38.0459 63.5504 37.6305C64.2966 37.2152 65.0991 37.004 65.9298 37.004C66.7605 37.004 67.5947 37.2152 68.3514 37.6305C69.1082 38.0459 69.7031 38.6055 70.1184 39.2989C70.5337 39.9888 70.7449 40.7737 70.7449 41.6291L70.7484 41.6255Z" fill="currentColor"/>
                        <path d="M84.5249 47.6656C82.9515 47.6656 81.3148 46.9757 80.1357 45.8141C78.9917 44.6843 78.3828 43.2376 78.3828 41.6326C78.3828 38.0142 81.6844 35.5855 84.7678 35.5855C87.5203 35.5855 88.7487 36.8034 88.8121 36.8562L88.1961 38.074C88.1503 38.0353 86.9571 37.0322 84.7713 37.0322C82.7509 37.0322 79.833 38.6689 79.833 41.6326C79.833 43.1602 80.551 44.188 81.1529 44.7828C82.0645 45.6839 83.3739 46.24 84.5742 46.2189C86.5664 46.1943 87.4745 45.6522 87.8863 45.3073V42.4738L84.7537 42.4597V41.9564C84.7572 41.4355 85.1796 41.0096 85.704 41.0061L89.3365 40.9779V45.9197L89.1253 46.1309C88.1186 47.1376 86.6368 47.6374 84.5953 47.6656C84.5742 47.6656 84.5495 47.6656 84.5284 47.6656H84.5249Z" fill="currentColor"/>
                        <path d="M93.3672 35.853H92.6948C92.5062 35.853 92.3533 36.0059 92.3533 36.1945V47.3242C92.3533 47.5127 92.5062 47.6656 92.6948 47.6656H93.3672C93.5559 47.6656 93.7088 47.5127 93.7088 47.3242V36.1945C93.7088 36.0059 93.5559 35.853 93.3672 35.853Z" fill="currentColor"/>
                        <path d="M96.7246 47.5424V35.3215L105.559 44.3816V35.8777C105.559 35.7826 105.637 35.7087 105.728 35.7087H106.812C106.908 35.7087 106.981 35.7862 106.981 35.8777V48L98.2522 39.1089V47.5424C98.2522 47.6691 98.1502 47.7677 98.027 47.7677H96.9499C96.8232 47.7677 96.7246 47.6656 96.7246 47.5424Z" fill="currentColor"/>
                        <path d="M131.261 47.4367L125.753 35.5361L119.991 47.3522C119.928 47.486 120.023 47.6373 120.167 47.6373H121.409C121.533 47.6373 121.645 47.5634 121.702 47.4508L123.458 43.9556C123.521 43.8289 123.651 43.7479 123.792 43.7479H127.668C127.812 43.7479 127.946 43.8324 128.006 43.9626L129.596 47.3241C129.677 47.4965 129.85 47.6056 130.04 47.6056H131.163C131.247 47.6056 131.304 47.5141 131.265 47.4367H131.261ZM124.003 42.5265L125.619 39.1475L127.361 42.5265H124.003Z" fill="currentColor"/>
                        <path d="M144.816 41.4178H131.11V41.9001H144.816V41.4178Z" fill="currentColor"/>
                        <path d="M14.0545 41.4178H0.348267V41.9001H14.0545V41.4178Z" fill="currentColor"/>
                    </svg>
                    <?php
                }
                ?>
            </div>

            <!-- クリニック情報（横並び） -->
            <div class="hamburger-menu__clinic-info">
                <!-- 左側のテキストコンテンツ -->
                <div class="hamburger-menu__left-content">
                    <div class="hamburger-menu__clinic-type">医療法人社団fever</div>
                    <h2 class="hamburger-menu__clinic-name">5DENTAL東京銀座</h2>

                    <!-- 住所 -->
                    <div class="hamburger-menu__address">
                        <div class="hamburger-menu__address-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-filled-white.svg" alt="Map Icon">
                        </div>
                        <div class="hamburger-menu__address-text">
                            〒104-0061 東京都中央区銀座5-7-1番 GINZA5 2F
                        </div>
                    </div>

                    <!-- 電車アクセス情報 -->
                    <div class="hamburger-menu__address hamburger-menu__train-access">
                        <div class="hamburger-menu__address-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/train-filled-white.svg" alt="Train Icon">
                        </div>
                        <div class="hamburger-menu__address-text">
                            東京メトロ銀座駅 C－1出口 直結<br>
                            東京メトロ日比谷駅　A1口より 徒歩 2分<br>
                            JR有楽町駅　銀座口より徒歩 4分
                        </div>
                    </div>

                    <!-- アクセスリンク -->
                    <a href="#" class="hamburger-menu__access-link">
                        <span>当院へのアクセス方法を確認</span>
                        <div class="hamburger-menu__access-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arw-circle-line-white02.svg" alt="Arrow Icon">
                        </div>
                    </a>
                </div>

                <!-- 右側のCTAボタンエリア -->
                <div class="hamburger-menu__right-content">
                    <div class="hamburger-menu__cta">
                <a href="#" class="hamburger-menu__web-btn">
                    <div class="hamburger-menu__btn-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 18V4C19 2.897 18.103 2 17 2H15V0H13V2H7V0H5V2H3C1.897 2 1 2.897 1 4V18C1 19.103 1.897 20 3 20H17C18.103 20 19 19.103 19 18ZM7 16H5V14H7V16ZM7 12H5V10H7V12ZM11 16H9V14H11V16ZM11 12H9V10H11V12ZM15 16H13V14H15V16ZM15 12H13V10H15V12ZM17 7H3V5H17V7Z" fill="white"/>
                        </svg>
                    </div>
                    <span>24時間Web予約</span>
                    <div class="hamburger-menu__btn-arrow">
                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 8V1H1" stroke="white" stroke-width="1.5"/>
                            <path d="M1 8L8.18181 0.818249" stroke="white" stroke-width="1.5"/>
                        </svg>
                    </div>
                </a>

                <a href="tel:03-5220-2511" class="hamburger-menu__tel-btn">
                    <div class="hamburger-menu__btn-icon">
                        <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.69599 7.0318C4.84799 9.2958 6.70399 11.1438 8.96799 12.3038L10.728 10.5438C10.944 10.3278 11.264 10.2558 11.544 10.3518C12.44 10.6478 13.408 10.8078 14.4 10.8078C14.84 10.8078 15.2 11.1678 15.2 11.6078V14.3998C15.2 14.8398 14.84 15.1998 14.4 15.1998C6.88799 15.1998 0.799988 9.1118 0.799988 1.5998C0.799988 1.1598 1.15999 0.799805 1.59999 0.799805H4.39999C4.83999 0.799805 5.19999 1.1598 5.19999 1.5998C5.19999 2.5998 5.35999 3.5598 5.65599 4.4558C5.74399 4.7358 5.67999 5.0478 5.45599 5.2718L3.69599 7.0318Z" fill="white"/>
                        </svg>
                    </div>
                    <span>03-5220-2511</span>
                    <div class="hamburger-menu__btn-arrow">
                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 8V1H1" stroke="white" stroke-width="1.5"/>
                            <path d="M1 8L8.18181 0.818249" stroke="white" stroke-width="1.5"/>
                        </svg>
                    </div>
                </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 右側: ナビゲーションメニューエリア -->
        <div class="hamburger-menu__right">
            <!-- 閉じるボタン -->
            <button class="hamburger-menu__close-btn" type="button" aria-label="メニューを閉じる">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>close</span>
            </button>

            <!-- About usセクション -->
            <div class="hamburger-menu__section">
                <div class="hamburger-menu__section-header">
                    <span class="hamburger-menu__section-label">About us</span>
                </div>
                <nav class="hamburger-menu__nav">
                    <a href="#" class="hamburger-menu__nav-link">
                        <span>当院について</span>
                        <div class="hamburger-menu__nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle opacity="0.5" cx="12" cy="12" r="12" fill="#34373D"/>
                                <mask id="mask0_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="12" height="12">
                                    <rect x="6" y="6" width="12" height="12" fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_349_3830)">
                                    <mask id="mask1_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="14" height="13">
                                        <rect x="1.06066" width="7.5" height="7.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5.95067 10.7002)" fill="#D9D9D9" stroke="#9EA2AA" stroke-width="1.5"/>
                                    </mask>
                                    <g mask="url(#mask1_349_3830)">
                                        <path d="M16.9538 11.4506L12.004 16.4004L7.05428 11.4506" stroke="white" stroke-width="1.5"/>
                                    </g>
                                    <path d="M12.0039 6.5L12.0039 16.6566" stroke="white" stroke-width="1.5"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                    <a href="#" class="hamburger-menu__nav-link">
                        <span>ドクター/スタッフ</span>
                        <div class="hamburger-menu__nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle opacity="0.5" cx="12" cy="12" r="12" fill="#34373D"/>
                                <mask id="mask0_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="12" height="12">
                                    <rect x="6" y="6" width="12" height="12" fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_349_3830)">
                                    <mask id="mask1_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="14" height="13">
                                        <rect x="1.06066" width="7.5" height="7.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5.95067 10.7002)" fill="#D9D9D9" stroke="#9EA2AA" stroke-width="1.5"/>
                                    </mask>
                                    <g mask="url(#mask1_349_3830)">
                                        <path d="M16.9538 11.4506L12.004 16.4004L7.05428 11.4506" stroke="white" stroke-width="1.5"/>
                                    </g>
                                    <path d="M12.0039 6.5L12.0039 16.6566" stroke="white" stroke-width="1.5"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                    <a href="#" class="hamburger-menu__nav-link">
                        <span>新着情報</span>
                        <div class="hamburger-menu__nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle opacity="0.5" cx="12" cy="12" r="12" fill="#34373D"/>
                                <mask id="mask0_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="12" height="12">
                                    <rect x="6" y="6" width="12" height="12" fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_349_3830)">
                                    <mask id="mask1_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="14" height="13">
                                        <rect x="1.06066" width="7.5" height="7.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5.95067 10.7002)" fill="#D9D9D9" stroke="#9EA2AA" stroke-width="1.5"/>
                                    </mask>
                                    <g mask="url(#mask1_349_3830)">
                                        <path d="M16.9538 11.4506L12.004 16.4004L7.05428 11.4506" stroke="white" stroke-width="1.5"/>
                                    </g>
                                    <path d="M12.0039 6.5L12.0039 16.6566" stroke="white" stroke-width="1.5"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                    <a href="#" class="hamburger-menu__nav-link">
                        <span>その他</span>
                        <div class="hamburger-menu__nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle opacity="0.5" cx="12" cy="12" r="12" fill="#34373D"/>
                                <mask id="mask0_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="12" height="12">
                                    <rect x="6" y="6" width="12" height="12" fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_349_3830)">
                                    <mask id="mask1_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="14" height="13">
                                        <rect x="1.06066" width="7.5" height="7.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5.95067 10.7002)" fill="#D9D9D9" stroke="#9EA2AA" stroke-width="1.5"/>
                                    </mask>
                                    <g mask="url(#mask1_349_3830)">
                                        <path d="M16.9538 11.4506L12.004 16.4004L7.05428 11.4506" stroke="white" stroke-width="1.5"/>
                                    </g>
                                    <path d="M12.0039 6.5L12.0039 16.6566" stroke="white" stroke-width="1.5"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                </nav>
            </div>

            <!-- Menuセクション -->
            <div class="hamburger-menu__section">
                <div class="hamburger-menu__section-header">
                    <span class="hamburger-menu__section-label">Menu</span>
                    <span class="hamburger-menu__section-count">診療メニュー一覧</span>
                    <div class="hamburger-menu__section-number">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="12" fill="#787B83"/>
                            <mask id="mask0_349_3804" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="7" y="8" width="9" height="9">
                                <rect x="7" y="8" width="9" height="9" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_349_3804)">
                                <path d="M15 16V9H8" stroke="white" stroke-width="1.5"/>
                            </g>
                            <path d="M8 16L15.1818 8.81825" stroke="white" stroke-width="1.5"/>
                        </svg>
                    </div>
                </div>
                <nav class="hamburger-menu__nav">
                    <a href="#" class="hamburger-menu__nav-link">
                        <span>削らないラミネートベニア</span>
                        <div class="hamburger-menu__nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle opacity="0.5" cx="12" cy="12" r="12" fill="#34373D"/>
                                <mask id="mask0_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="12" height="12">
                                    <rect x="6" y="6" width="12" height="12" fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_349_3830)">
                                    <mask id="mask1_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="14" height="13">
                                        <rect x="1.06066" width="7.5" height="7.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5.95067 10.7002)" fill="#D9D9D9" stroke="#9EA2AA" stroke-width="1.5"/>
                                    </mask>
                                    <g mask="url(#mask1_349_3830)">
                                        <path d="M16.9538 11.4506L12.004 16.4004L7.05428 11.4506" stroke="white" stroke-width="1.5"/>
                                    </g>
                                    <path d="M12.0039 6.5L12.0039 16.6566" stroke="white" stroke-width="1.5"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                    <a href="#" class="hamburger-menu__nav-link">
                        <span>審美歯科</span>
                        <div class="hamburger-menu__nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle opacity="0.5" cx="12" cy="12" r="12" fill="#34373D"/>
                                <mask id="mask0_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="12" height="12">
                                    <rect x="6" y="6" width="12" height="12" fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_349_3830)">
                                    <mask id="mask1_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="14" height="13">
                                        <rect x="1.06066" width="7.5" height="7.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5.95067 10.7002)" fill="#D9D9D9" stroke="#9EA2AA" stroke-width="1.5"/>
                                    </mask>
                                    <g mask="url(#mask1_349_3830)">
                                        <path d="M16.9538 11.4506L12.004 16.4004L7.05428 11.4506" stroke="white" stroke-width="1.5"/>
                                    </g>
                                    <path d="M12.0039 6.5L12.0039 16.6566" stroke="white" stroke-width="1.5"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                    <a href="#" class="hamburger-menu__nav-link">
                        <span>総合歯科/その他</span>
                        <div class="hamburger-menu__nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle opacity="0.5" cx="12" cy="12" r="12" fill="#34373D"/>
                                <mask id="mask0_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="12" height="12">
                                    <rect x="6" y="6" width="12" height="12" fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_349_3830)">
                                    <mask id="mask1_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="14" height="13">
                                        <rect x="1.06066" width="7.5" height="7.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5.95067 10.7002)" fill="#D9D9D9" stroke="#9EA2AA" stroke-width="1.5"/>
                                    </mask>
                                    <g mask="url(#mask1_349_3830)">
                                        <path d="M16.9538 11.4506L12.004 16.4004L7.05428 11.4506" stroke="white" stroke-width="1.5"/>
                                    </g>
                                    <path d="M12.0039 6.5L12.0039 16.6566" stroke="white" stroke-width="1.5"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                </nav>
            </div>

            <!-- Troubleセクション -->
            <div class="hamburger-menu__section">
                <div class="hamburger-menu__section-header">
                    <span class="hamburger-menu__section-label">Trouble</span>
                </div>
                <nav class="hamburger-menu__nav">
                    <a href="#" class="hamburger-menu__nav-link">
                        <span>お悩み別コンテンツ</span>
                        <div class="hamburger-menu__nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle opacity="0.5" cx="12" cy="12" r="12" fill="#34373D"/>
                                <mask id="mask0_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="12" height="12">
                                    <rect x="6" y="6" width="12" height="12" fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_349_3830)">
                                    <mask id="mask1_349_3830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="14" height="13">
                                        <rect x="1.06066" width="7.5" height="7.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5.95067 10.7002)" fill="#D9D9D9" stroke="#9EA2AA" stroke-width="1.5"/>
                                    </mask>
                                    <g mask="url(#mask1_349_3830)">
                                        <path d="M16.9538 11.4506L12.004 16.4004L7.05428 11.4506" stroke="white" stroke-width="1.5"/>
                                    </g>
                                    <path d="M12.0039 6.5L12.0039 16.6566" stroke="white" stroke-width="1.5"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- 背景装飾画像 -->
<div class="bg-decoration">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-gray.png" alt="" class="bg-decoration__img">
</div>