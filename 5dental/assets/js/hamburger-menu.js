/**
 * ハンバーガーメニュー機能
 * 全画面オーバーレイメニューの開閉処理
 */

(function() {
    'use strict';

    // DOM要素の取得
    const hamburgerButton = document.querySelector('.header__hamburger');
    const hamburgerMenu = document.querySelector('#hamburger-menu');
    const closeButton = document.querySelector('.hamburger-menu__close-btn');
    const body = document.body;
    
    // メニューが存在しない場合は処理を終了
    if (!hamburgerButton || !hamburgerMenu || !closeButton) {
        return;
    }

    // メニューの状態管理
    let isMenuOpen = false;

    /**
     * メニューを開く
     */
    function openMenu() {
        if (isMenuOpen) return;
        
        isMenuOpen = true;
        hamburgerMenu.classList.add('is-open');
        body.classList.add('menu-open');
        
        // スクロールを無効化
        body.style.overflow = 'hidden';
        
        // アクセシビリティのためのaria属性を更新
        hamburgerButton.setAttribute('aria-expanded', 'true');
        hamburgerButton.setAttribute('aria-label', 'メニューを閉じる');
        
        // ESCキーでメニューを閉じるイベントリスナーを追加
        document.addEventListener('keydown', handleEscKey);
        
        // フォーカス管理: 閉じるボタンにフォーカス
        closeButton.focus();
    }

    /**
     * メニューを閉じる
     */
    function closeMenu() {
        if (!isMenuOpen) return;
        
        isMenuOpen = false;
        hamburgerMenu.classList.remove('is-open');
        body.classList.remove('menu-open');
        
        // スクロールを有効化
        body.style.overflow = '';
        
        // アクセシビリティのためのaria属性を更新
        hamburgerButton.setAttribute('aria-expanded', 'false');
        hamburgerButton.setAttribute('aria-label', 'メニューを開く');
        
        // ESCキーイベントリスナーを削除
        document.removeEventListener('keydown', handleEscKey);
        
        // フォーカス管理: ハンバーガーボタンにフォーカスを戻す
        hamburgerButton.focus();
    }

    /**
     * メニューの開閉を切り替える
     */
    function toggleMenu() {
        if (isMenuOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    }

    /**
     * ESCキーでメニューを閉じる
     */
    function handleEscKey(event) {
        if (event.key === 'Escape' || event.keyCode === 27) {
            closeMenu();
        }
    }

    /**
     * オーバーレイクリックでメニューを閉じる
     */
    function handleOverlayClick(event) {
        // クリックされた要素がオーバーレイ本体の場合のみ閉じる
        if (event.target === hamburgerMenu) {
            closeMenu();
        }
    }

    /**
     * フォーカストラップ機能
     * メニューが開いている間、フォーカスをメニュー内に制限
     */
    function handleFocusTrap(event) {
        if (!isMenuOpen) return;

        const focusableElements = hamburgerMenu.querySelectorAll(
            'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
        );
        const firstFocusable = focusableElements[0];
        const lastFocusable = focusableElements[focusableElements.length - 1];

        if (event.key === 'Tab') {
            if (event.shiftKey) {
                // Shift + Tab の場合
                if (document.activeElement === firstFocusable) {
                    event.preventDefault();
                    lastFocusable.focus();
                }
            } else {
                // Tab の場合
                if (document.activeElement === lastFocusable) {
                    event.preventDefault();
                    firstFocusable.focus();
                }
            }
        }
    }

    /**
     * タッチ/マウスイベントハンドラー
     */
    function handleTouchStart(event) {
        // タッチイベントの開始位置を記録
        const touch = event.touches[0];
        hamburgerMenu.startX = touch.clientX;
        hamburgerMenu.startY = touch.clientY;
    }

    function handleTouchMove(event) {
        if (!hamburgerMenu.startX || !hamburgerMenu.startY) return;

        const touch = event.touches[0];
        const diffX = hamburgerMenu.startX - touch.clientX;
        const diffY = hamburgerMenu.startY - touch.clientY;

        // 右スワイプでメニューを閉じる（水平方向の移動が垂直方向より大きい場合）
        if (Math.abs(diffX) > Math.abs(diffY) && diffX > 50) {
            closeMenu();
        }
    }

    function handleTouchEnd() {
        hamburgerMenu.startX = null;
        hamburgerMenu.startY = null;
    }

    /**
     * イベントリスナーの設定
     */
    function initEventListeners() {
        // ハンバーガーボタンのクリック
        hamburgerButton.addEventListener('click', toggleMenu);
        
        // 閉じるボタンのクリック
        closeButton.addEventListener('click', closeMenu);
        
        // オーバーレイクリック
        hamburgerMenu.addEventListener('click', handleOverlayClick);
        
        // フォーカストラップ
        document.addEventListener('keydown', handleFocusTrap);
        
        // タッチイベント（スワイプでの閉じる操作）
        hamburgerMenu.addEventListener('touchstart', handleTouchStart, { passive: true });
        hamburgerMenu.addEventListener('touchmove', handleTouchMove, { passive: true });
        hamburgerMenu.addEventListener('touchend', handleTouchEnd, { passive: true });

        // ナビゲーションリンクのクリックでメニューを閉じる
        const navLinks = hamburgerMenu.querySelectorAll('.hamburger-menu__nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                // 少し遅延させてページ遷移を優先
                setTimeout(closeMenu, 100);
            });
        });

        // ウィンドウリサイズ時の処理
        window.addEventListener('resize', () => {
            // デスクトップサイズでメニューが開いている場合は閉じる
            if (window.innerWidth >= 768 && isMenuOpen) {
                closeMenu();
            }
        });
    }

    /**
     * 初期化処理
     */
    function init() {
        // 初期状態のaria属性を設定
        hamburgerButton.setAttribute('aria-expanded', 'false');
        hamburgerButton.setAttribute('aria-label', 'メニューを開く');
        
        // イベントリスナーを設定
        initEventListeners();
        
        console.log('ハンバーガーメニューが初期化されました');
    }

    // DOM読み込み完了後に初期化
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();