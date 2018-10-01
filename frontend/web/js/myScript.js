$(document).ready(function () {

  /*НИЖНИЙ СЛАЙДЕР ИЗДЕЛИЙ НА ГЛАВНОЙ СТРАНИЦЕ*/
  $(window).load(function () {
    $('.flexslider').flexslider({
      animation: "slide",
      animationLoop: true,
      itemWidth: 186,
      itemMargin: 1,
      minItems: 2,
      maxItems: 6
    });
  });
//КОНЕЦ НИЖНИЙ СЛАЙДЕР ИЗДЕЛИЙ НА ГЛАВНОЙ СТРАНИЦЕ


//АКТИВНАЯ ВКЛАДКА "ПРОДУКЦИЯ"
  //dropdown = $('#myDropdown');

  /**
   * Код взят из документации Bootstrap
   * Описание:
   * При отображении выпадающего меню
   * родителю присваивается класс 'active'
   */
  /*dropdown.on('show.bs.dropdown', function () {
    $(this).addClass('active');
  });*/

  /**
   * Если использовать только предыдущй код,
   * то при клике на другой вкладке по вкладке ПРОДУКЦИЯ,
   * она остается постоянно активной, т.е. с классом 'active',
   * поэтому его нужно удалить
   */
  /*dropdown.on('hide.bs.dropdown', function () {
    $(ul > li.dropdown).removeClass('active');
  });*/

  /**
   * Условие:
   * если активен элемент выпадающего списка, меню,
   * то родителю выпадающего списка, меню
   * присваивается также класс 'active'
   */
  if ($('.dropdown-menu li').hasClass('active')) {
    $('ul > li.dropdown').addClass('active');
  }
//КОНЕЦ АКТИВНАЯ ВКЛАДКА "ПРОДУКЦИЯ"

//ДЛЯ ВКЛАДКИ КОНТАКТЫ
  /**
   * в зависимости от того кому мы отправляем сообщение
   * выбирается адрес
   * (документация bootstrap https://v4-alpha.getbootstrap.com/components/modal/)
   */
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var recipient = button.data('whatever'); // Extract info from data-* attributes
    var department = button.data('department');
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find('.modal-title').text(department);
    modal.find('.modal-body .hidden_field input').val(recipient);
  });
//КОНЕЦ ДЛЯ ВКЛАДКИ КОНТАКТЫ


});//конец ready



