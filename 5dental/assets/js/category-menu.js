// ========================================
// Category Menu Component JavaScript
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    // 現在のページのパスを取得
    const currentPath = window.location.pathname;
    
    // パスからページ名を抽出（例: "/orthodontics" → "orthodontics"）
    const pageName = currentPath.replace('/', '').split('.')[0] || 'home';
    
    // 該当するメニューアイテムを見つけてcurrentクラスを追加
    const menuItems = document.querySelectorAll('.category-menu__item');
    
    menuItems.forEach(item => {
        const dataPage = item.getAttribute('data-page');
        
        // 現在のページと一致する場合、currentクラスを追加
        if (dataPage === pageName) {
            item.classList.add('category-menu__item--current');
        } else {
            item.classList.remove('category-menu__item--current');
        }
    });
});