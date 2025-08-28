<?php
/**
 * 診療メニュー用サイドバーテンプレート
 *
 * @package 5DENTAL
 */

// 現在のページスラッグを取得
global $post;
$current_slug = '';
if ( $post ) {
    $current_slug = $post->post_name;
}

// URLからもスラッグを取得（念のため）
$current_url = $_SERVER['REQUEST_URI'];
$current_path = trim(parse_url($current_url, PHP_URL_PATH), '/');

// 現在のページ判定完了
?>

<!-- カテゴリーサイドバーコンポーネント -->
<aside class="content__sidebar">
    <div class="category-menu">
        <h3 class="category-menu__title">Category</h3>
        
        <!-- 審美歯科カテゴリ -->
        <div class="category-menu__group">
            <h4 class="category-menu__group-title">審美歯科</h4>
            <ul class="category-menu__list">
                <li class="category-menu__item<?php echo ($current_slug == 'laminate-veneer' || $current_path == 'laminate-veneer') ? ' category-menu__item--current' : ''; ?>" data-page="laminate-veneer">
                    <a href="<?php echo esc_url( home_url( '/laminate-veneer' ) ); ?>" class="category-menu__link">削らないラミネートベニア</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'orthodontics' || $current_path == 'orthodontics') ? ' category-menu__item--current' : ''; ?>" data-page="orthodontics">
                    <a href="<?php echo esc_url( home_url( '/orthodontics' ) ); ?>" class="category-menu__link">3Dデジタルマウスピース矯正<br>(歯列矯正)</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'invisalign' || $current_path == 'invisalign') ? ' category-menu__item--current' : ''; ?>" data-page="invisalign">
                    <a href="<?php echo esc_url( home_url( '/invisalign' ) ); ?>" class="category-menu__link">インビザライン</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'invisalign-go' || $current_path == 'invisalign-go') ? ' category-menu__item--current' : ''; ?>" data-page="invisalign-go">
                    <a href="<?php echo esc_url( home_url( '/invisalign-go' ) ); ?>" class="category-menu__link">インビザラインGO</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'ceramic' || $current_path == 'ceramic') ? ' category-menu__item--current' : ''; ?>" data-page="ceramic">
                    <a href="<?php echo esc_url( home_url( '/ceramic' ) ); ?>" class="category-menu__link">オールセラミック治療/ジルコニア治療</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'whitening' || $current_path == 'whitening') ? ' category-menu__item--current' : ''; ?>" data-page="whitening">
                    <a href="<?php echo esc_url( home_url( '/whitening' ) ); ?>" class="category-menu__link">ホワイトニング</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'gum-shaping' || $current_path == 'gum-shaping') ? ' category-menu__item--current' : ''; ?>" data-page="gum-shaping">
                    <a href="<?php echo esc_url( home_url( '/gum-shaping' ) ); ?>" class="category-menu__link">歯肉形成/ガミースマイル改善</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'nail-art' || $current_path == 'nail-art') ? ' category-menu__item--current' : ''; ?>" data-page="nail-art">
                    <a href="<?php echo esc_url( home_url( '/nail-art' ) ); ?>" class="category-menu__link">歯のマニキュア</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'direct-bonding' || $current_path == 'direct-bonding') ? ' category-menu__item--current' : ''; ?>" data-page="direct-bonding">
                    <a href="<?php echo esc_url( home_url( '/direct-bonding' ) ); ?>" class="category-menu__link">ダイレクトボンディング</a>
                </li>
            </ul>
        </div>

        <!-- 一般歯科・予防歯科・その他カテゴリ -->
        <div class="category-menu__group">
            <h4 class="category-menu__group-title">一般歯科・予防歯科・その他</h4>
            <ul class="category-menu__list">
                <li class="category-menu__item<?php echo ($current_slug == 'cavity' || $current_slug == 'decayed' || $current_path == 'cavity' || $current_path == 'decayed') ? ' category-menu__item--current' : ''; ?>" data-page="cavity">
                    <a href="<?php echo esc_url( home_url( '/decayed' ) ); ?>" class="category-menu__link">虫歯治療</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'gum-disease' || $current_path == 'gum-disease') ? ' category-menu__item--current' : ''; ?>" data-page="gum-disease">
                    <a href="<?php echo esc_url( home_url( '/gum-disease' ) ); ?>" class="category-menu__link">歯周病治療</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'prevention' || $current_slug == 'cleaning' || $current_path == 'prevention' || $current_path == 'cleaning') ? ' category-menu__item--current' : ''; ?>" data-page="prevention">
                    <a href="<?php echo esc_url( home_url( '/cleaning' ) ); ?>" class="category-menu__link">予防歯科/クリーニング</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'emergency' || $current_slug == 'urgent' || $current_path == 'emergency' || $current_path == 'urgent') ? ' category-menu__item--current' : ''; ?>" data-page="emergency">
                    <a href="<?php echo esc_url( home_url( '/urgent' ) ); ?>" class="category-menu__link">緊急治療・主訴治療</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'bite' || $current_slug == 'occlusion' || $current_path == 'bite' || $current_path == 'occlusion') ? ' category-menu__item--current' : ''; ?>" data-page="bite">
                    <a href="<?php echo esc_url( home_url( '/occlusion' ) ); ?>" class="category-menu__link">嚙み合わせ・顎関節症</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'implant' || $current_path == 'implant') ? ' category-menu__item--current' : ''; ?>" data-page="implant">
                    <a href="<?php echo esc_url( home_url( '/implant' ) ); ?>" class="category-menu__link">インプラント</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'denture' || $current_path == 'denture') ? ' category-menu__item--current' : ''; ?>" data-page="denture">
                    <a href="<?php echo esc_url( home_url( '/denture' ) ); ?>" class="category-menu__link">入れ歯/ブリッジ</a>
                </li>
                <li class="category-menu__item<?php echo ($current_slug == 'lip-artmake' || $current_path == 'lip-artmake') ? ' category-menu__item--current' : ''; ?>" data-page="lip-artmake">
                    <a href="<?php echo esc_url( home_url( '/lip-artmake' ) ); ?>" class="category-menu__link">リップアートメイク@DENTAL</a>
                </li>
            </ul>
        </div>
    </div>
</aside>