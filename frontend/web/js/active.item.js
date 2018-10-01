/**
 * Created by User on 07.07.2017.
 */
$(document).ready(function () {
  //ФУНКЦИИ ОБРАБОТКИ ПОКАЗА, СКРЫТИЯ ПРОДУКЦИИ
  /**
   * Если на вкладки продукции переходим из главного меню,
   * то первому элементу меню присваиваем класс 'active',
   * забираем его 'class' и выводим по id изображение.
   * На вкладках где присутствуют венчики, выводим изображение венчика.
   * На вкладке АРХИВ ИЗДЕЛИЙ выводим изображение бутылки
   */
  var first_element = $('.for-first-active-li li:first').addClass("active").attr("class");//задает первому элементу класс 'acive',
  //при переходе во вкладку ПРОДУКЦИЯ
  //с основного меню
  $('.menu-bottle-mobil li:first').addClass("active");//присваивание первому элементу класс .active ,
  // определение его id
  /**
   * удаляем из принятого класса, который был принят методом 'attr',
   * лишние символы, в частности слово 'active' и пробел,
   * чтобы получилась строка для передачи ее в id изображения
   */
  var first_elem = first_element.substr(0, first_element.length - 7);//TODO идет конфликт с fancybox на главной
  //alert(first_elem);

  //Для вкладок с венчиками
  $("#" + first_elem + "-venchik-info").fadeIn(1000).css({display: 'flex'});//определяем по id изображение активного элемента
  //показываем этот элемент
  //Для вкладки АРХИВ ИЗДЕЛИЙ
  $("#" + first_elem + "-bottle-info").fadeIn(1000).css({display: 'flex'});


  /**
   * Функция обработки нажатия на меню венчиков и бутылок
   * Принимает параметры кликнутого элемента
   * и присваевает ему класс 'active',
   * а у предыдущего нажатого элемента этот класс удаляет
   * @param bottle_click
   */
  function open_bottle(bottle_click) {
    $('.menu-bottle li.active').removeClass("active");//удаляем у первого элемента класс .active
    $('.product-img-info').hide();//скрываем фото изделий
    bottle_click_li = $('.' + bottle_click);//'.'+bottle_click идентификатор id передающийся параметром в функцию
    //для определения по какому изделию кликнули
    bottle_click_li.addClass("active");//кликнутому элементу,
    //определенному по переданному параметру '.'+bottle_click,
    // добавляем класс .active
    $('#' + bottle_click + '-venchik-info').fadeIn(1000).css({display: 'flex'});//находим идентификатор и показываем его
    $('#' + bottle_click + '-bottle-info').fadeIn(1000).css({display: 'flex'});//находим идентификатор и показываем его,//присваивая стиль
  }

  //Навигация на вкладках ПРОДУКЦИЯ
  $(".menu-bottle li").click(function () {
    open_bottle($(this).attr("class"));//передача функции 'open_bottle' параметра 'bottle_click',
    //т.е. его id
    return false;//при клике экран остается на месте
  });



  /**
   * Условие захода с главной страницы
   * принимаем значение из адресной строки
   * вставляем это значение в id элемента
   */

  //При формировании ссылок а с href="bottle-$bottle[name_2]" см. views/site/index.php
  var pageSearch = window.location.search;//search - забирает из адресной строки например ?q=javascript,
                                          // т.е. все, что стоит после знака ? и вместе с этим знаком
  if (pageSearch !== "") {
    var nameBottle = pageSearch.substr(4);//убираем первых четыре символа из полученной строки
    $('.menu-bottle li.active').removeClass("active");//удаляем у первого элемента класс .active
    $('.product-img-info').hide();//скрываем фото изделий
    bottle_click_li = $('.' + nameBottle);//принимаем 'class' выбранного элемента
    bottle_selected = bottle_click_li.addClass("active")//элементу 'li', на открытой странице задаем класс .active
      .attr('class');//забираем у него 'class'
    bottle_selected = bottle_selected.substring(0, bottle_selected.length - 7);
    $("#" + bottle_selected + '-bottle-info').fadeIn(1000).css({display: 'flex'});//по id находим фото изображения и открываем его

    //Скролинг до элемента на странице
    // сперва получаем позицию элемента относительно документа
    var scrollTop = $('#scroll_to_id').offset().top;
    // скроллим страницу на значение равное позиции элемента
    $(document).scrollTop(scrollTop);
  }


//КОНЕЦ ФУНКЦИИ ОБРАБОТКИ ПОКАЗА, СКРЫТИЯ ПРОДУКЦИИ


  //МОБИЛЬНОЕ МЕНЮ ПРОДУКЦИИ
  /**
   * Скрываем выпадающее меню
   * при клике по ячейке меню изделий
   */
  $("a.menu-mobil-product").click(function () {
    $('.menu-mobil-hide').removeClass('show');
    var scrollTop = $('#scroll_to_id_mbil').offset().top;
    $(document).scrollTop(scrollTop);
  });
  //КОНЕЦ МОБИЛЬНОЕ МЕНЮ ПРОДУКЦИИ
});//конец ready