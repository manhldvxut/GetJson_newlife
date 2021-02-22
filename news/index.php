<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'] . '/page/newlife/assets/inc/config.php';

$nowURL = $_SERVER['HTTP_HOST'];
$pageURL = STORE_NAME . '.parco.jp';
$devURL = 'dev-' . STORE_NAME . '-parco.sc-concierge.jp';

//ドメインの判定
if ($nowURL === $pageURL || $devURL === $pageURL) {
  $productionFlag = true; //本番とdev
} else {
  $productionFlag = false; //上記以外
}

if ($productionFlag === true) {
  //basic include
  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/page_include.php';
}

//ページ用の変数
$pege_title = '#おうち時間 #新生活 | おすすめ情報 |浦和PARCO';
$pege_description = '#おうち時間 #新生活 ショップからの情報をご紹介しています';
$pege_keywords = 'PARCO,浦和,パルコ,おうち時間,新生活,家具,インテリア,ファッション,コスメ,雑貨,スイーツ';
$page_shareurl = 'https://' . STORE_NAME . '.parco.jp/page/newlife/news/'; //必ずディレクトリ名を変更する

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/tagmanager1.php'; ?>

  <!-- meta -->
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/page/assets/inc/meta.php'; ?>
  <!-- /meta -->
  <!-- GoogleFont -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;600&display=swap" rel="stylesheet">
  <!-- CSS -->
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/css.php'; ?>
  <!-- /CSS -->
</head>

<body class="<?php echo STORE_NAME; ?> page-tag" id="top">
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/tagmanager2.php'; ?>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/page/assets/inc/svgs.php'; ?>

  <div class="wrapper">

    <?php
    /**
     * Header
     */
    ?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/header.php'; ?>


    <?php
    /**
     * Main contents
     */
    ?>
    <div class="container-fluid tagPage">
      <?php /* ==========================================================
    このナビゲーションは必ず公開時のURLを設定してください。
    ============================================================== */ ?>
    <nav class="localnav">
      <ul class="localnav-list">
        <li class="localnav-item"><a href="/page/newlife/news/">
          <span class="pc-only"><img src="/<?php echo DIRNAME; ?>/assets/images/check.svg" alt="check"></span>
          <span><img class="pc-only" src="/<?php echo DIRNAME; ?>/assets/images/recommends-tag-cp.svg" alt="shoprecoment"></span>
          <span><img class="sp-only" src="/<?php echo DIRNAME; ?>/assets/images/recommends-tag-sp.svg" alt="shoprecoment"></span>
        </a></li>
        <li class="localnav-item"><a href="/page/newlife/">
          <span>
            <img class="pc-only" src="/<?php echo DIRNAME; ?>/assets/images/item-tag-pc.svg" alt="item">
            <img class="sp-only" src="/<?php echo DIRNAME; ?>/assets/images/item-sp.svg" alt="item">
          </span></a></li>
        
      </ul>
    <!-- /.localnav --></nav>

    </div>
    <main class="main-contents">

      

      <div class="contents-wrap">

        <?php /* OWNLY */ ?>

        <!-- tag 02 -->
          <?php /* SHOP NEWS */ ?>
              <div class="contents-block contents-blog shopblog">
                <!-- <h2 class="contents-ttl">SHOP NEWS</h2> -->
                <?php
                if ($productionFlag === true) {

                  // 本番用
                  $disp_data = array(); //初期化
                  $tagname = "newlife"; //対象するタグの文字列をセット
                  $data_target = "shopnews";
                    //pnews:パルコニュースのみ
                    //shopnews:ショップニュースのみ
                    //all:すべて
                    //popupnews: POPUPSHOP（名古屋のみ使用可）
                    //entnews: エンタテインメントニュース（名古屋のみ使用可）
                  echo "<!-- タグ 「".$tagname."」-->\n"; //確認用
                  echo "<!-- カテゴリ 「".$data_target."」-->\n\n"; //確認用
                  include $_SERVER['DOCUMENT_ROOT'] . '/inc/tagsum_include.php';
                  include $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/item-list.php';

                } else {

                  // 静的デモ レイアウト調整用
                  include $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/item-list-demo.php';
                }

                ?>
              <!-- /.contents-block --></div>

              <!-- tag 03 -->
          <?php /* SHOP NEWS */ ?>

        

    </main>

    


    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/page/assets/inc/footer.php'; ?>

  </div>

  <!-- Javascript -->
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/js.php'; ?>
  <!-- /Javascript -->
</body>

</html>