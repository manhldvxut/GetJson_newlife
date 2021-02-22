<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/page/newlife/assets/inc/config.php';

$nowURL = $_SERVER['HTTP_HOST'];
$pageURL = STORE_NAME.'.parco.jp';
$devURL = 'dev-'.STORE_NAME.'-parco.sc-concierge.jp';

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
$pege_title = '#おうち時間 #新生活 | 浦和PARCO';
$pege_description = '#おうち時間 #新生活 にぴったりの商品をご紹介しています';
$pege_keywords = 'PARCO,浦和,パルコ,おうち時間,新生活,家具,インテリア,ファッション,コスメ,雑貨,スイーツ';
$page_shareurl = 'https://'.STORE_NAME.'.parco.jp/page/newlife/'; //必ずディレクトリ名を変更する

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/meta.php';?>
  <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager1.php';?>
  <?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/css.php';?>
</head>

<body class="<?php echo STORE_NAME; ?> page-tag" id="top">
  <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager2.php';?>
  <?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/svgs.php';?>
  <div class="wrapper">
    <?php
/**
 * Header
 */
?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/header.php'; ?>
    <?php

/**
 * Main contents
 */
?>
  <div class="container-fluid"><?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/localnav.php'; ?></div>
    <main class="main-contents">
      <nav class="localnav">
        <ul class="localnav-list">
          <li class="localnav-item"><a href="#ctg01" class="scroll">
            <img class="pc-only" src="assets/images/tab01.svg" alt="interior">
            <img class="sp-only" src="assets/images/tab-sp01.svg" alt="interior">
          </a></li>
          <li class="localnav-item"><a href="#ctg02" class="scroll">
            <img class="pc-only" src="assets/images/tab02.svg" alt="hobby">
            <img class="sp-only" src="assets/images/tab-sp02.svg" alt="interior">
          </a></li>
          <li class="localnav-item"><a href="#ctg03" class="scroll">
            <img class="pc-only" src="assets/images/tab03.svg" alt="foods">
            <img class="sp-only" src="assets/images/tab-sp03.svg" alt="foods">
          </a></li>
          <li class="localnav-item"><a href="#ctg04" class="scroll">
            <img class="pc-only" src="assets/images/tab04.svg" alt="fashion">
            <img class="sp-only" src="assets/images/tab-sp04.svg" alt="fashion">
          </a></li>
        </ul>
        <!-- /.localnav -->
      </nav>
      <div class="newrenew-block" id="shoplist" v-cloak>　
        <div class="list-block" id="ctg01">
          <h2 class="list-ttl">
            <img class="pc-only" src="assets/images/ttl.svg" alt="interior">
            <img class="sp-only" src="assets/images/ttl-sp.svg" alt="interior">
          </h2>
          <ul class="item-list02 js-tabarea" v-cloak>
            <li class="item" v-for="(list01, index) in list01" v-bind:key="index">
              <div class="item-inner">
                <?php /* 表で表示 */ ?>
                <div class="front-cont">
                  
                  <div class="img-wrap">
                    <div v-if="list01.onlinestore != ''" class="badge-l">
                      <p class="date"><span v-if="list01.date != ''">{{list01.date}}</span><span v-if="list01.weeks != ''">{{list01.weeks}}</span></p>
                      <p class="new-renew">{{list01.new_renew}}</p>
                    </div>
                    <div v-if="list01.badge != ''" class="badge-r" :class="{ 'type2' : index%6 == 1 , 'type3' : index%6 == 2 ,'type4' : index%6 == 3 ,'type5' : index%6 == 4, 'type6' : index%6 == 5}">
                      <!-- <p class="txt">{{list01.badge}}</p> -->
                    </div>
                    <div class="img"><img :src="list01.image01" :alt="list01.name"></div>
                    <div class="logo"><img :src="list01.logo" :alt="list01.name"></div>
                    <!-- /.img-wrap -->
                  </div>
                  <div class="detail">
                    
                    <span class="shop js-shop">{{list01.name}}</span>
                    <p class="floor">{{list01.yakata}} {{list01.floor}}</p>
                    <!-- <p class="ctg">{{list01.category_name}}</p> -->
                    <!-- /.detail -->
                  </div>
                  <div class="more"><button class="js-modalopen" :data-modal="'modal01-'+index"><span><svg xmlns="http://www.w3.org/2000/svg" width="90.96" height="14.5" viewBox="0 0 90.96 14.5">
                        <path id="パス_2640" data-name="パス 2640" d="M-40.87-8.14h-4.08a.521.521,0,0,0-.52.54.521.521,0,0,0,.52.54h4.08v4.08a.521.521,0,0,0,.54.52.521.521,0,0,0,.54-.52V-7.06h4.08a.521.521,0,0,0,.52-.54.521.521,0,0,0-.52-.54h-4.08v-4.08a.534.534,0,0,0-.54-.52.521.521,0,0,0-.54.52Zm23.12-4.6h.1c.36,1.18,1.08,3.36,1.46,4.34l2.38,6.48a.981.981,0,0,0,1.04.72,1,1,0,0,0,1-.72L-9.39-8.4c.4-1.08,1.06-3.04,1.46-4.34h.1l-.02.3c-.12,2.48-.16,3.66-.16,4.62V-1a.787.787,0,0,0,.86.76A.8.8,0,0,0-6.29-1V-12.98a1.345,1.345,0,0,0-1.38-1.46c-.92,0-1.32.36-1.76,1.58l-2.18,5.94c-.48,1.32-.9,2.6-1.14,3.46h-.08c-.28-1-.58-1.94-1.14-3.46l-2.18-5.94c-.44-1.2-.86-1.58-1.74-1.58a1.339,1.339,0,0,0-1.4,1.46V-1a.787.787,0,0,0,.86.76A.787.787,0,0,0-17.57-1V-7.82c0-1-.04-2.12-.16-4.64ZM6.81-14.6C3.13-14.6.77-11.78.77-7.38.77-2.92,3.09-.1,6.79-.1c3.68,0,6.02-2.82,6.02-7.26C12.81-11.74,10.45-14.6,6.81-14.6Zm-.04,1.48c2.52,0,4.12,2.24,4.12,5.74,0,3.44-1.64,5.74-4.1,5.74s-4.1-2.28-4.1-5.74C2.69-10.86,4.29-13.12,6.77-13.12ZM21.69-6.36h1.2c1.96,0,2.7.82,4.8,5.16.38.82.54.96,1.08.96.56,0,.98-.3.98-.7a14.946,14.946,0,0,0-2.28-4.28A4.253,4.253,0,0,0,25.41-6.9v-.06c2.24-.34,3.58-1.66,3.58-3.52a3.542,3.542,0,0,0-1.88-3.16,6.68,6.68,0,0,0-3.2-.66H22.13a1.975,1.975,0,0,0-2.24,2.24V-1.02a.814.814,0,0,0,.9.78.814.814,0,0,0,.9-.78Zm0-1.4V-12.1c0-.52.26-.76.78-.76h1.14c2.24,0,3.52.9,3.52,2.48,0,1.66-1.34,2.62-3.7,2.62Zm16.72.88h5.4a.652.652,0,0,0,.68-.72.656.656,0,0,0-.68-.7h-5.4v-3.92a.553.553,0,0,1,.62-.6h5.58a.685.685,0,0,0,.68-.76.673.673,0,0,0-.68-.72H38.89a2,2,0,0,0-2.26,2.26v9.4A2,2,0,0,0,38.89-.38h5.92a.708.708,0,0,0,.68-.76.7.7,0,0,0-.68-.76H39.17a.677.677,0,0,1-.76-.76Z" transform="translate(45.47 14.6)" fill="#3c3c3c"/>
                      </svg>

                  </span></button></div>
                  <!-- /.front-cont -->
                </div>
                <?php /* モーダル  */ ?>
                <div :class="'modal-block js-modal newrenew-modal modal01-' + index">
                  <div class="modal-bg js-modalclose"></div>
                  <div class="modal-wrap">
                    <button class="modal-close js-modalclose"></button>
                    <div class="box-modal">
                      <div v-if ="list01.onlinestore != ''" class="badge-l">
                        <!-- <p class="date"><span v-if="list01.date != ''">{{list01.date}}</span><span v-if="list01.weeks != ''">{{list01.weeks}}</span></p>
                        <p class="new-renew">{{list01.new_renew}}</p> -->
                      </div>
                      <div class="modal-cont">
                      
                        <div class="cont-wrap front-cont">
                          <div class="img-wrap">
                            <div class="dateWrap">
                              
                              <!-- <p v-if="list01.badge != ''" class="badge-r type2"><span>{{list01.badge}}</span></p> -->
                            </div>
                            <div class="img-slider js-imgslider">
                              <div class="img"><img :src="list01.image01" :alt="list01.name"></div>
                              <div class="img" v-if="list01.image02 != ''"><img :src="list01.image02" :alt="list01.name"></div>
                              <div class="img" v-if="list01.image03 != ''"><img :src="list01.image03" :alt="list01.name"></div>
                              <div class="img" v-if="list01.image04 != ''"><img :src="list01.image04" :alt="list01.name"></div>
                              <div class="img" v-if="list01.image05 != ''"><img :src="list01.image05" :alt="list01.name"></div>
                            </div>
                            <!-- /.img-wrap -->
                          </div>
                          <div class="detail">
                            <div class="logo"><img :src="list01.logo" :alt="list01.name"></div>
                            <div class="boxShopInfo">
                              <p class="shop">{{list01.name}}</p>
                              <p class="floor">{{list01.yakata}} {{list01.floor}}</p>
                              <p class="ctg">{{list01.category_name}}</p>
                            </div>
                            <div class="open-event">
                              <p class="ttl productName" v-html="list01.productName">商品名</p>
                            </div>
                            
                            <!-- <p class="price"> {{list01.price}}</p> -->
                            <p v-if="list01.price != '' " class="txt price" v-html="brTxt(list01.price)">値段</p>
                            <p class="introduction" v-html="list01.text"></p>
                            <div class="open-event" v-if="list01.opening != ''">
                              <p class="ttl">オープニング企画</p>
                              <p class="txt" v-html="brTxt(list01.opening)">企画内容</p>
                            </div>
                            <!-- /.detail -->
                            
                          </div>

                        </div>
                        <ul class="link-list">
                          <li v-if="list01.link_page != ''" class="link-item home"><a :href="list01.link_page" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_home.png" alt="HOME"></a></li>
                          
                          <li v-if="list01.link_twitter != ''" class="link-item tw"><a :href="list01.link_twitter" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_tw.png" alt="Twitter"></a></li>
                          <li v-if="list01.link_facebook != ''" class="link-item fb"><a :href="list01.link_facebook" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_fb.png" alt="Facebook"></a></li>
                          <li v-if="list01.link_instagram != ''" class="link-item ig"><a :href="list01.link_instagram" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_ig.png" alt="Instagram"></a></li>
                          <li v-if="list01.link_recruit != ''" class="link-item recruit"><a :href="list01.link_recruit" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_recruit.png" alt="STAFF RECRUIT"></a></li>
                          <!-- /.link-list -->
                        </ul>
                      </div>
                    </div>
                    <div class="modal-arrow prev" v-if=modalPrev(index)><button class="js-modalopen" :data-modal="'modal01-'+ (index - 1)">前のアイテム</button></div>
                    <div class="modal-arrow next" v-if=modalNext(index,'list01')><button class="js-modalopen" :data-modal="'modal01-'+ (index + 1)">次のアイテム</button></div>
                    <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
                    <!-- /.modal-block -->
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div><!-- /.list-block -->
        <div class="list-block" id="ctg02">
          <h2 class="list-ttl">
            <img class="pc-only" src="assets/images/ttl2.svg" alt="hobby">
            <img class="sp-only" src="assets/images/ttl02-sp.svg" alt="hobby">
            
          </h2>
          <ul class="item-list02 js-tabarea" v-cloak>
            <li class="item" v-for="(list02, index) in list02" v-bind:key="index">
              <div class="item-inner">
                <?php /* 表で表示 */ ?>
                <div class="front-cont">
                  
                  <div class="img-wrap">
                    <div v-if="list02.onlinestore != ''" class="badge-l">
                      <p class="date"><span v-if="list02.date != ''">{{list02.date}}</span><span v-if="list02.weeks != ''">{{list02.weeks}}</span></p>
                      <p class="new-renew">{{list02.new_renew}}</p>
                    </div>
                    <div v-if="list02.badge != ''" class="badge-r" :class="{ 'type2' : index%6 == 1 , 'type3' : index%6 == 2 ,'type4' : index%6 == 3 ,'type5' : index%6 == 4, 'type6' : index%6 == 5}">
                      <p class="txt">{{list02.badge}}</p>
                    </div>
                    <div class="img"><img :src="list02.image01" :alt="list02.name"></div>
                    <div class="logo"><img :src="list02.logo" :alt="list02.name"></div>
                    <!-- /.img-wrap -->
                  </div>
                  <div class="detail">
                    
                    <span class="shop js-shop">{{list02.name}}</span>
                    <p class="floor">{{list02.yakata}} {{list02.floor}}</p>
                    <!-- <p class="ctg">{{list02.category_name}}</p> -->
                    <!-- /.detail -->
                  </div>
                  <div class="more"><button class="js-modalopen" :data-modal="'modal02-'+index"><span><svg xmlns="http://www.w3.org/2000/svg" width="90.96" height="14.5" viewBox="0 0 90.96 14.5">
                    <path id="パス_2640" data-name="パス 2640" d="M-40.87-8.14h-4.08a.521.521,0,0,0-.52.54.521.521,0,0,0,.52.54h4.08v4.08a.521.521,0,0,0,.54.52.521.521,0,0,0,.54-.52V-7.06h4.08a.521.521,0,0,0,.52-.54.521.521,0,0,0-.52-.54h-4.08v-4.08a.534.534,0,0,0-.54-.52.521.521,0,0,0-.54.52Zm23.12-4.6h.1c.36,1.18,1.08,3.36,1.46,4.34l2.38,6.48a.981.981,0,0,0,1.04.72,1,1,0,0,0,1-.72L-9.39-8.4c.4-1.08,1.06-3.04,1.46-4.34h.1l-.02.3c-.12,2.48-.16,3.66-.16,4.62V-1a.787.787,0,0,0,.86.76A.8.8,0,0,0-6.29-1V-12.98a1.345,1.345,0,0,0-1.38-1.46c-.92,0-1.32.36-1.76,1.58l-2.18,5.94c-.48,1.32-.9,2.6-1.14,3.46h-.08c-.28-1-.58-1.94-1.14-3.46l-2.18-5.94c-.44-1.2-.86-1.58-1.74-1.58a1.339,1.339,0,0,0-1.4,1.46V-1a.787.787,0,0,0,.86.76A.787.787,0,0,0-17.57-1V-7.82c0-1-.04-2.12-.16-4.64ZM6.81-14.6C3.13-14.6.77-11.78.77-7.38.77-2.92,3.09-.1,6.79-.1c3.68,0,6.02-2.82,6.02-7.26C12.81-11.74,10.45-14.6,6.81-14.6Zm-.04,1.48c2.52,0,4.12,2.24,4.12,5.74,0,3.44-1.64,5.74-4.1,5.74s-4.1-2.28-4.1-5.74C2.69-10.86,4.29-13.12,6.77-13.12ZM21.69-6.36h1.2c1.96,0,2.7.82,4.8,5.16.38.82.54.96,1.08.96.56,0,.98-.3.98-.7a14.946,14.946,0,0,0-2.28-4.28A4.253,4.253,0,0,0,25.41-6.9v-.06c2.24-.34,3.58-1.66,3.58-3.52a3.542,3.542,0,0,0-1.88-3.16,6.68,6.68,0,0,0-3.2-.66H22.13a1.975,1.975,0,0,0-2.24,2.24V-1.02a.814.814,0,0,0,.9.78.814.814,0,0,0,.9-.78Zm0-1.4V-12.1c0-.52.26-.76.78-.76h1.14c2.24,0,3.52.9,3.52,2.48,0,1.66-1.34,2.62-3.7,2.62Zm16.72.88h5.4a.652.652,0,0,0,.68-.72.656.656,0,0,0-.68-.7h-5.4v-3.92a.553.553,0,0,1,.62-.6h5.58a.685.685,0,0,0,.68-.76.673.673,0,0,0-.68-.72H38.89a2,2,0,0,0-2.26,2.26v9.4A2,2,0,0,0,38.89-.38h5.92a.708.708,0,0,0,.68-.76.7.7,0,0,0-.68-.76H39.17a.677.677,0,0,1-.76-.76Z" transform="translate(45.47 14.6)" fill="#3c3c3c"/>
                  </svg>

                  </span></button></div>
                  <!-- /.front-cont -->
                </div>
                <?php /* モーダル  */ ?>
                <div :class="'modal-block js-modal newrenew-modal modal02-' + index">
                  <div class="modal-bg js-modalclose"></div>
                  <div class="modal-wrap">
                    <button class="modal-close js-modalclose"></button>
                    <div class="box-modal">
                      <div v-if="list02.onlinestore != ''" class="badge-l">
                        <!-- <p class="date"><span v-if="list02.date != ''">{{list02.date}}</span><span v-if="list02.weeks != ''">{{list02.weeks}}</span></p>
                        <p class="new-renew">{{list02.new_renew}}</p> -->
                      </div>
                      <div class="modal-cont">
                      
                        <div class="cont-wrap front-cont">
                          <div class="img-wrap">
                            <div class="dateWrap">
                              
                              <!-- <p v-if="list02.badge != ''" class="badge-r type2"><span>{{list02.badge}}</span></p> -->
                            </div>
                            <div class="img-slider js-imgslider">
                              <div class="img"><img :src="list02.image01" :alt="list02.name"></div>
                              <div class="img" v-if="list02.image02 != ''"><img :src="list02.image02" :alt="list02.name"></div>
                              <div class="img" v-if="list02.image03 != ''"><img :src="list02.image03" :alt="list02.name"></div>
                              <div class="img" v-if="list02.image04 != ''"><img :src="list02.image04" :alt="list02.name"></div>
                              <div class="img" v-if="list02.image05 != ''"><img :src="list02.image05" :alt="list02.name"></div>
                            </div>
                            <!-- /.img-wrap -->
                          </div>
                          <div class="detail">
                            <div class="logo"><img :src="list02.logo" :alt="list02.name"></div>
                            <div class="boxShopInfo">
                              <p class="shop">{{list02.name}}</p>
                              <p class="floor">{{list02.yakata}} {{list02.floor}}</p>
                              <p class="ctg">{{list02.category_name}}</p>
                            </div>
                            <div class="open-event">
                              <p class="ttl productName" v-html="brTxt(list02.productName)">商品名</p>
                            </div>
                            
                            <!-- <p class="price"> {{list02.price}}</p> -->
                            <p class="txt price" v-html="brTxt(list02.price)">値段</p>
                            <p class="introduction" v-html="brTxt(list02.text)"></p>
                            <div class="open-event" v-if="list02.opening != ''">
                              <p class="ttl">オープニング企画</p>
                              <p class="txt" v-html="brTxt(list02.opening)">企画内容</p>
                            </div>
                            <!-- /.detail -->
                            
                          </div>

                        </div>
                        <ul class="link-list">
                          <li v-if="list02.link_page != ''" class="link-item home"><a :href="list02.link_page" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_home.png" alt="HOME"></a></li>
                          
                          <li v-if="list02.link_twitter != ''" class="link-item tw"><a :href="list02.link_twitter" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_tw.png" alt="Twitter"></a></li>
                          <li v-if="list02.link_facebook != ''" class="link-item fb"><a :href="list02.link_facebook" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_fb.png" alt="Facebook"></a></li>
                          <li v-if="list02.link_instagram != ''" class="link-item ig"><a :href="list02.link_instagram" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_ig.png" alt="Instagram"></a></li>
                          <li v-if="list02.link_recruit != ''" class="link-item recruit"><a :href="list02.link_recruit" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_recruit.png" alt="STAFF RECRUIT"></a></li>
                          <!-- /.link-list -->
                        </ul>
                      </div>
                    </div>
                    <div class="modal-arrow prev" v-if=modalPrev(index)><button class="js-modalopen" :data-modal="'modal02-'+ (index - 1)">前のアイテム</button></div>
                    <div class="modal-arrow next" v-if=modalNext(index,'list02')><button class="js-modalopen" :data-modal="'modal02-'+ (index + 1)">次のアイテム</button></div>
                    <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
                    <!-- /.modal-block -->
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="list-block" id="ctg03">
          <h2 class="list-ttl">
            <img class="pc-only" src="assets/images/ttl3.svg" alt="hobby">
            <img class="sp-only" src="assets/images/ttl03-sp.svg" alt="hobby">
            
          </h2>
          <ul class="item-list02 js-tabarea" v-cloak>
            <li class="item" v-for="(list03, index) in list03" v-bind:key="index">
              <div class="item-inner">
                <?php /* 表で表示 */ ?>
                <div class="front-cont">
                  
                  <div class="img-wrap">
                    <div v-if="list03.onlinestore != ''" class="badge-l">
                      <p class="date"><span v-if="list03.date != ''">{{list03.date}}</span><span v-if="list03.weeks != ''">{{list03.weeks}}</span></p>
                      <p class="new-renew">{{list03.new_renew}}</p>
                    </div>
                    <div v-if="list03.badge != ''" class="badge-r" :class="{ 'type2' : index%6 == 1 , 'type3' : index%6 == 2 ,'type4' : index%6 == 3 ,'type5' : index%6 == 4, 'type6' : index%6 == 5}">
                      <p class="txt">{{list03.badge}}</p>
                    </div>
                    <div class="img"><img :src="list03.image01" :alt="list03.name"></div>
                    <div class="logo"><img :src="list03.logo" :alt="list03.name"></div>
                    <!-- /.img-wrap -->
                  </div>
                  <div class="detail">
                    
                    <span class="shop js-shop">{{list03.name}}</span>
                    <p class="floor">{{list03.yakata}} {{list03.floor}}</p>
                    <!-- <p class="ctg">{{list03.category_name}}</p> -->
                    <!-- /.detail -->
                  </div>
                  <div class="more"><button class="js-modalopen" :data-modal="'modal03-'+index"><span><svg xmlns="http://www.w3.org/2000/svg" width="90.96" height="14.5" viewBox="0 0 90.96 14.5">
                  <path id="パス_2640" data-name="パス 2640" d="M-40.87-8.14h-4.08a.521.521,0,0,0-.52.54.521.521,0,0,0,.52.54h4.08v4.08a.521.521,0,0,0,.54.52.521.521,0,0,0,.54-.52V-7.06h4.08a.521.521,0,0,0,.52-.54.521.521,0,0,0-.52-.54h-4.08v-4.08a.534.534,0,0,0-.54-.52.521.521,0,0,0-.54.52Zm23.12-4.6h.1c.36,1.18,1.08,3.36,1.46,4.34l2.38,6.48a.981.981,0,0,0,1.04.72,1,1,0,0,0,1-.72L-9.39-8.4c.4-1.08,1.06-3.04,1.46-4.34h.1l-.02.3c-.12,2.48-.16,3.66-.16,4.62V-1a.787.787,0,0,0,.86.76A.8.8,0,0,0-6.29-1V-12.98a1.345,1.345,0,0,0-1.38-1.46c-.92,0-1.32.36-1.76,1.58l-2.18,5.94c-.48,1.32-.9,2.6-1.14,3.46h-.08c-.28-1-.58-1.94-1.14-3.46l-2.18-5.94c-.44-1.2-.86-1.58-1.74-1.58a1.339,1.339,0,0,0-1.4,1.46V-1a.787.787,0,0,0,.86.76A.787.787,0,0,0-17.57-1V-7.82c0-1-.04-2.12-.16-4.64ZM6.81-14.6C3.13-14.6.77-11.78.77-7.38.77-2.92,3.09-.1,6.79-.1c3.68,0,6.02-2.82,6.02-7.26C12.81-11.74,10.45-14.6,6.81-14.6Zm-.04,1.48c2.52,0,4.12,2.24,4.12,5.74,0,3.44-1.64,5.74-4.1,5.74s-4.1-2.28-4.1-5.74C2.69-10.86,4.29-13.12,6.77-13.12ZM21.69-6.36h1.2c1.96,0,2.7.82,4.8,5.16.38.82.54.96,1.08.96.56,0,.98-.3.98-.7a14.946,14.946,0,0,0-2.28-4.28A4.253,4.253,0,0,0,25.41-6.9v-.06c2.24-.34,3.58-1.66,3.58-3.52a3.542,3.542,0,0,0-1.88-3.16,6.68,6.68,0,0,0-3.2-.66H22.13a1.975,1.975,0,0,0-2.24,2.24V-1.02a.814.814,0,0,0,.9.78.814.814,0,0,0,.9-.78Zm0-1.4V-12.1c0-.52.26-.76.78-.76h1.14c2.24,0,3.52.9,3.52,2.48,0,1.66-1.34,2.62-3.7,2.62Zm16.72.88h5.4a.652.652,0,0,0,.68-.72.656.656,0,0,0-.68-.7h-5.4v-3.92a.553.553,0,0,1,.62-.6h5.58a.685.685,0,0,0,.68-.76.673.673,0,0,0-.68-.72H38.89a2,2,0,0,0-2.26,2.26v9.4A2,2,0,0,0,38.89-.38h5.92a.708.708,0,0,0,.68-.76.7.7,0,0,0-.68-.76H39.17a.677.677,0,0,1-.76-.76Z" transform="translate(45.47 14.6)" fill="#3c3c3c"/>
                </svg>

                  </span></button></div>
                  <!-- /.front-cont -->
                </div>
                <?php /* モーダル  */ ?>
                <div :class="'modal-block js-modal newrenew-modal modal03-' + index">
                  <div class="modal-bg js-modalclose"></div>
                  <div class="modal-wrap">
                    <button class="modal-close js-modalclose"></button>
                    <div class="box-modal">
                      <div v-if ="list03.onlinestore != ''" class="badge-l">
                        <!-- <p class="date"><span v-if="list03.date != ''">{{list03.date}}</span><span v-if="list03.weeks != ''">{{list03.weeks}}</span></p>
                        <p class="new-renew">{{list03.new_renew}}</p> -->
                      </div>
                      <div class="modal-cont">
                      
                        <div class="cont-wrap front-cont">
                          <div class="img-wrap">
                            <div class="dateWrap">
                              
                              <!-- <p v-if="list03.badge != ''" class="badge-r type2"><span>{{list03.badge}}</span></p> -->
                            </div>
                            <div class="img-slider js-imgslider">
                              <div class="img"><img :src="list03.image01" :alt="list03.name"></div>
                              <div class="img" v-if="list03.image02 != ''"><img :src="list03.image02" :alt="list03.name"></div>
                              <div class="img" v-if="list03.image03 != ''"><img :src="list03.image03" :alt="list03.name"></div>
                              <div class="img" v-if="list03.image04 != ''"><img :src="list03.image04" :alt="list03.name"></div>
                              <div class="img" v-if="list03.image05 != ''"><img :src="list03.image05" :alt="list03.name"></div>
                            </div>
                            <!-- /.img-wrap -->
                          </div>
                          <div class="detail">
                            <div class="logo"><img :src="list03.logo" :alt="list03.name"></div>
                            <div class="boxShopInfo">
                              <p class="shop">{{list03.name}}</p>
                              <p class="floor">{{list03.yakata}} {{list03.floor}}</p>
                              <p class="ctg">{{list03.category_name}}</p>
                            </div>
                            <div class="open-event">
                              <p class="ttl productName" v-html="brTxt(list03.productName)">商品名</p>
                            </div>
                            
                            <!-- <p class="price"> {{list03.price}}</p> -->
                            <p class="txt price" v-html="brTxt(list03.price)">値段</p>
                            <p class="introduction" v-html="brTxt(list03.text)"></p>
                            <div class="open-event" v-if="list03.opening != ''">
                              <p class="ttl">オープニング企画</p>
                              <p class="txt" v-html="brTxt(list03.opening)">企画内容</p>
                            </div>
                            <!-- /.detail -->
                            
                          </div>

                        </div>
                        <ul class="link-list">
                          <li v-if="list03.link_page != ''" class="link-item home"><a :href="list03.link_page" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_home.png" alt="HOME"></a></li>
                          
                          <li v-if="list03.link_twitter != ''" class="link-item tw"><a :href="list03.link_twitter" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_tw.png" alt="Twitter"></a></li>
                          <li v-if="list03.link_facebook != ''" class="link-item fb"><a :href="list03.link_facebook" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_fb.png" alt="Facebook"></a></li>
                          <li v-if="list03.link_instagram != ''" class="link-item ig"><a :href="list03.link_instagram" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_ig.png" alt="Instagram"></a></li>
                          <li v-if="list03.link_recruit != ''" class="link-item recruit"><a :href="list03.link_recruit" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_recruit.png" alt="STAFF RECRUIT"></a></li>
                          <!-- /.link-list -->
                        </ul>
                      </div>
                    </div>
                    <div class="modal-arrow prev" v-if=modalPrev(index)><button class="js-modalopen" :data-modal="'modal03-'+ (index - 1)">前のアイテム</button></div>
                    <div class="modal-arrow next" v-if=modalNext(index,'list03')><button class="js-modalopen" :data-modal="'modal03-'+ (index + 1)">次のアイテム</button></div>
                    <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
                    <!-- /.modal-block -->
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="list-block" id="ctg04">
          <h2 class="list-ttl">
            <img class="pc-only" src="assets/images/ttl4.svg" alt="hobby">
            <img class="sp-only" src="assets/images/ttl04-sp.svg" alt="hobby">
          </h2>
          <ul class="item-list02 js-tabarea" v-cloak>
            <li class="item" v-for="(list04, index) in list04" v-bind:key="index">
              <div class="item-inner">
                <?php /* 表で表示 */ ?>
                <div class="front-cont">
                  
                  <div class="img-wrap">
                    <div v-if="list04.onlinestore != ''" class="badge-l">
                      <p class="date"><span v-if="list04.date != ''">{{list04.date}}</span><span v-if="list04.weeks != ''">{{list04.weeks}}</span></p>
                      <p class="new-renew">{{list04.new_renew}}</p>
                    </div>
                    <div v-if="list04.badge != ''" class="badge-r" :class="{ 'type2' : index%6 == 1 , 'type3' : index%6 == 2 ,'type4' : index%6 == 3 ,'type5' : index%6 == 4, 'type6' : index%6 == 5}">
                      <p class="txt">{{list04.badge}}</p>
                    </div>
                    <div class="img"><img :src="list04.image01" :alt="list04.name"></div>
                    <div class="logo"><img :src="list04.logo" :alt="list04.name"></div>
                    <!-- /.img-wrap -->
                  </div>
                  <div class="detail">
                    
                    <span class="shop js-shop">{{list04.name}}</span>
                    <p class="floor">{{list04.yakata}} {{list04.floor}}</p>
                    <!-- <p class="ctg">{{list04.category_name}}</p> -->
                    <!-- /.detail -->
                  </div>
                  <div class="more"><button class="js-modalopen" :data-modal="'modal04-'+index"><span><svg xmlns="http://www.w3.org/2000/svg" width="90.96" height="14.5" viewBox="0 0 90.96 14.5">
                    <path id="パス_2640" data-name="パス 2640" d="M-40.87-8.14h-4.08a.521.521,0,0,0-.52.54.521.521,0,0,0,.52.54h4.08v4.08a.521.521,0,0,0,.54.52.521.521,0,0,0,.54-.52V-7.06h4.08a.521.521,0,0,0,.52-.54.521.521,0,0,0-.52-.54h-4.08v-4.08a.534.534,0,0,0-.54-.52.521.521,0,0,0-.54.52Zm23.12-4.6h.1c.36,1.18,1.08,3.36,1.46,4.34l2.38,6.48a.981.981,0,0,0,1.04.72,1,1,0,0,0,1-.72L-9.39-8.4c.4-1.08,1.06-3.04,1.46-4.34h.1l-.02.3c-.12,2.48-.16,3.66-.16,4.62V-1a.787.787,0,0,0,.86.76A.8.8,0,0,0-6.29-1V-12.98a1.345,1.345,0,0,0-1.38-1.46c-.92,0-1.32.36-1.76,1.58l-2.18,5.94c-.48,1.32-.9,2.6-1.14,3.46h-.08c-.28-1-.58-1.94-1.14-3.46l-2.18-5.94c-.44-1.2-.86-1.58-1.74-1.58a1.339,1.339,0,0,0-1.4,1.46V-1a.787.787,0,0,0,.86.76A.787.787,0,0,0-17.57-1V-7.82c0-1-.04-2.12-.16-4.64ZM6.81-14.6C3.13-14.6.77-11.78.77-7.38.77-2.92,3.09-.1,6.79-.1c3.68,0,6.02-2.82,6.02-7.26C12.81-11.74,10.45-14.6,6.81-14.6Zm-.04,1.48c2.52,0,4.12,2.24,4.12,5.74,0,3.44-1.64,5.74-4.1,5.74s-4.1-2.28-4.1-5.74C2.69-10.86,4.29-13.12,6.77-13.12ZM21.69-6.36h1.2c1.96,0,2.7.82,4.8,5.16.38.82.54.96,1.08.96.56,0,.98-.3.98-.7a14.946,14.946,0,0,0-2.28-4.28A4.253,4.253,0,0,0,25.41-6.9v-.06c2.24-.34,3.58-1.66,3.58-3.52a3.542,3.542,0,0,0-1.88-3.16,6.68,6.68,0,0,0-3.2-.66H22.13a1.975,1.975,0,0,0-2.24,2.24V-1.02a.814.814,0,0,0,.9.78.814.814,0,0,0,.9-.78Zm0-1.4V-12.1c0-.52.26-.76.78-.76h1.14c2.24,0,3.52.9,3.52,2.48,0,1.66-1.34,2.62-3.7,2.62Zm16.72.88h5.4a.652.652,0,0,0,.68-.72.656.656,0,0,0-.68-.7h-5.4v-3.92a.553.553,0,0,1,.62-.6h5.58a.685.685,0,0,0,.68-.76.673.673,0,0,0-.68-.72H38.89a2,2,0,0,0-2.26,2.26v9.4A2,2,0,0,0,38.89-.38h5.92a.708.708,0,0,0,.68-.76.7.7,0,0,0-.68-.76H39.17a.677.677,0,0,1-.76-.76Z" transform="translate(45.47 14.6)" fill="#3c3c3c"/>
                  </svg>

                  </span></button></div>
                  <!-- /.front-cont -->
                </div>
                <?php /* モーダル  */ ?>
                <div :class="'modal-block js-modal newrenew-modal modal04-' + index">
                  <div class="modal-bg js-modalclose"></div>
                  <div class="modal-wrap">
                    <button class="modal-close js-modalclose"></button>
                    <div class="box-modal">
                      <div v-if ="list04.onlinestore != ''" class="badge-l">
                        <!-- <p class="date"><span v-if="list04.date != ''">{{list04.date}}</span><span v-if="list04.weeks != ''">{{list04.weeks}}</span></p>
                        <p class="new-renew">{{list04.new_renew}}</p> -->
                      </div>
                      <div class="modal-cont">
                      
                        <div class="cont-wrap front-cont">
                          <div class="img-wrap">
                            <div class="dateWrap">
                              
                              <!-- <p v-if="list04.badge != ''" class="badge-r type2"><span>{{list04.badge}}</span></p> -->
                            </div>
                            <div class="img-slider js-imgslider">
                              <div class="img"><img :src="list04.image01" :alt="list04.name"></div>
                              <div class="img" v-if="list04.image02 != ''"><img :src="list04.image02" :alt="list04.name"></div>
                              <div class="img" v-if="list04.image03 != ''"><img :src="list04.image03" :alt="list04.name"></div>
                              <div class="img" v-if="list04.image04 != ''"><img :src="list04.image04" :alt="list04.name"></div>
                              <div class="img" v-if="list04.image05 != ''"><img :src="list04.image05" :alt="list04.name"></div>
                            </div>
                            <!-- /.img-wrap -->
                          </div>
                          <div class="detail">
                            <div class="logo"><img :src="list04.logo" :alt="list04.name"></div>
                            <div class="boxShopInfo">
                              <p class="shop">{{list04.name}}</p>
                              <p class="floor">{{list04.yakata}} {{list04.floor}}</p>
                              <p class="ctg">{{list04.category_name}}</p>
                            </div>
                            <div class="open-event">
                              <p class="ttl productName" v-html="brTxt(list04.productName)">商品名</p>
                            </div>
                            
                            <!-- <p class="price"> {{list04.price}}</p> -->
                            <p class="txt price" v-html="brTxt(list04.price)">値段</p>
                            <p class="introduction" v-html="brTxt(list04.text)"></p>
                            <div class="open-event" v-if="list04.opening != ''">
                              <p class="ttl">オープニング企画</p>
                              <p class="txt" v-html="brTxt(list04.opening)">企画内容</p>
                            </div>
                            <!-- /.detail -->
                            
                          </div>

                        </div>
                        <ul class="link-list">
                          <li v-if="list04.link_page != ''" class="link-item home"><a :href="list04.link_page" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_home.png" alt="HOME"></a></li>
                          
                          <li v-if="list04.link_twitter != ''" class="link-item tw"><a :href="list04.link_twitter" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_tw.png" alt="Twitter"></a></li>
                          <li v-if="list04.link_facebook != ''" class="link-item fb"><a :href="list04.link_facebook" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_fb.png" alt="Facebook"></a></li>
                          <li v-if="list04.link_instagram != ''" class="link-item ig"><a :href="list04.link_instagram" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_ig.png" alt="Instagram"></a></li>
                          <li v-if="list04.link_recruit != ''" class="link-item recruit"><a :href="list04.link_recruit" target="_blank"><img src="/<?php echo DIRNAME; ?>/assets/images/ico_recruit.png" alt="STAFF RECRUIT"></a></li>
                          <!-- /.link-list -->
                        </ul>
                      </div>
                    </div>
                    <div class="modal-arrow prev" v-if=modalPrev(index)><button class="js-modalopen" :data-modal="'modal04-'+ (index - 1)">前のアイテム</button></div>
                    <div class="modal-arrow next" v-if=modalNext(index,'list04')><button class="js-modalopen" :data-modal="'modal04-'+ (index + 1)">次のアイテム</button></div>
                    <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
                    <!-- /.modal-block -->
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
       
        
        
      </div>
    </main>
    <?php
/**
 * Footer
 */
?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/footer.php'; ?>
  </div>
  <!-- Javascript -->
  <script>
  const list = '/<?php echo DIRNAME; ?>/assets/data/shoplist.json';
  </script>
  <?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/js.php';?>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
  <script src="https://www.promisejs.org/polyfills/promise-7.0.4.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="/<?php echo DIRNAME; ?>/assets/js/lib/slick.min.js"></script>
  <script src="/<?php echo DIRNAME; ?>/assets/js/newrenew.js"></script>
  <!-- /Javascript -->
</body>

</html>