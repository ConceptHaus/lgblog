(function ($) {
  modalSearch();
  $(document).ready(function () {
    let arrowLeft = '<i class="fa fa-chevron-left"></i>';
    let arrowRight = '<i class="fa fa-chevron-right"></i>';
    let menuRight = $('#test-menu-right').slideMenu({
      submenuLinkAfter: arrowRight,
      backLinkBefore: arrowLeft
    });
    // menuRight.open(true);
  });
})(jQuery);

function modalSearch() {
  var $idSearch = $('#searchField');
  $('[data-search-open]').click(function (e) {
    e.preventDefault();
    $idSearch.addClass('isShow');
    $('.overlaySearch').fadeIn(800);
    $('#buscar').focus();
  });
  $('[data-label="Cerrar"]').click(function (e) {
    e.preventDefault();
    $idSearch.removeClass('isShow');
    $('.overlaySearch').fadeOut(800);
  });
}