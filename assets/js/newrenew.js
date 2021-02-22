/*  stack
------------------------------------------------------------------------------------------------------------------------*/
$(function() {
    modal();
    tabSwitch();
    imgSlider();
    //newSlider();

});

/*  shoplist
------------------------------------------------------------------------------------------------------------------------*/
// JSON読み込み
axios
  .get(list)
  .then(function(res){
    shop(res.data);
  })
  .catch(function(err){
    console.log(err);
  })

function shop(shopList){
  var app = new Vue(
  {
    el: '#shoplist',
    data: {
      list: shopList, //type01で使用
      listPickup: [], //type02、type03で使用
      list01: [], //type02、type03で使用
      list02: [], //type02、type03で使用
      list03: [], //type02、type03で使用
      list04: [] //type02、type03で使用
    },
    mounted:function(){
      // list01〜03の整形。カテゴリー数に応じて増減する。
      let arrPickup = new Array(),
          arr01 = new Array(),
          arr02 = new Array(),
          arr03 = new Array(),
          arr04 = new Array();

      for (var i = 0; i < shopList.length; i++) {
        if(shopList[i].category.indexOf('pickup') >= 0) {
          arrPickup.push(shopList[i]);
        }
        if(shopList[i].category.indexOf('ctg01') >= 0) {
          arr01.push(shopList[i]);
        }
        if(shopList[i].category.indexOf('ctg02') >= 0) {
          arr02.push(shopList[i]);
        }
        if(shopList[i].category.indexOf('ctg03') >= 0) {
          arr03.push(shopList[i]);
        }
        if(shopList[i].category.indexOf('ctg04') >= 0) {
          arr04.push(shopList[i]);
        };
      }

      this.listPickup = arrPickup;
      this.list01 = arr01;
      this.list02 = arr02;
      this.list03 = arr03;
      this.list04 = arr04;

      return;
    },
    methods: {
      // <br>タグ対応
      brTxt: function(txt) {
        return txt.replace(/\r?\n/g,' <br>');
      },
      // 前のアイテムボタン
      modalPrev:function(i) {
        if(i - 1 >= 0) {
          return true;
        } else {
          return false;
        }
      },
      // 次のアイテムボタン
      modalNext:function(i,arr) {

        switch(arr){
          case 'listPickup':
            itemCont = this.listPickup.length;
            break;
          case 'list01':
            itemCont = this.list01.length;
            break;
          case 'list02':
            itemCont = this.list02.length;
            break;
          case 'list03':
            itemCont = this.list03.length;
            break;
          case 'list04':
            itemCont = this.list04.length;
            break;
          default:
            itemCont = this.list.length;
            break;
        }

        if(i + 1 < itemCont) {
          return true;
        } else {
          return false;
        }
      },
    }
  })
}


/*  modal モーダル
------------------------------------------------------------------------------------------------------------------------*/
function modal() {

    const modal = '.js-modal', //モーダル
          modalOpen = '.js-modalopen', //モーダルを開く
          modalClose = '.js-modalclose';  //モーダルを閉じる

    $(document).on('click', modalOpen, function() {
        $(document).find(modal).hide(); //モーダルリセット

      let target = $(this).attr('data-modal');
      $('.' + target).fadeIn(400);
      imgSlider('.' + target); //モーダル内スライダー発火
      $('body').css('overflow', 'hidden'); //スクロール止め（※iphoneでは効かない）
    });


    $(document).on('click', modalClose, function() {
      $('body').removeAttr('style');
      $(document).find('.slick-initialized').slick('unslick'); //モーダル内スライダーストップ
      $(document).find(modal).hide();
    });
};


  /*  imgSlider スライダー（主にモーダル内の画像用）
------------------------------------------------------------------------------------------------------------------------*/
function imgSlider(target) {
    const slider = $(document).find(target + ' .js-imgslider');
    let sliderCont = slider.children('*').length;

    // スライダーの枚数が1より多い場合に発火
    if (sliderCont > 1) {
        slider.slick({
            slidesToShow: 1,
            speed: 500,
            dots: true,
            infinite: true,
            prevArrow: '<div class="slick-arrow prev"><button class="slick-prev opacity-link"></button></div>',
            nextArrow: '<div class="slick-arrow next"><button class="slick-next opacity-link"></button></div>'
        });
    }
}

  /*  tabSwitch //タブ切り替え（type01で使用）
------------------------------------------------------------------------------------------------------------------------*/
function tabSwitch() {
  const btn = $('.js-tabbtn'), //タブボタン
        tabItem = $(document).find('.js-tabarea > *'); //タブ切り替えエリア

  btn.on('click',function(){
    let target = $(this).attr('data-target');

    if(target == 'all') {
      $(document).find('.js-tabarea > *').show();
    } else {
      $(document).find('.js-tabarea > *').hide();
      $(document).find('.' + target).show();
    }
  });
}

/*function newSlider() {
    var slider2 = document.getElementsByClassName('js-fixNewJs');
    var itemSlider = $(slider2).find('.img')
    console.log(itemSlider)
    if($(itemSlider).length > 1){
     $(slider2).slick({
          slidesToShow: 1,
          speed: 500,
          dots: true,
          infinite: true,
          prevArrow: '<div class="slick-arrow prev"><button class="slick-prev opacity-link"></button></div>',
          nextArrow: '<div class="slick-arrow next"><button class="slick-next opacity-link"></button></div>'
     });
      $(slider2).slick('setPosition');
      itemSlider.slick('setPosition');
    }

}

*/