(function() {
  $(function() {
    var collapseMyMenu, expandMyMenu, hideMenuTexts, showMenuTexts, moveHamburgerOver, moveHamburgerBack;
    expandMyMenu = function() {
      return $("nav.sidebar").removeClass("sidebar-menu-collapsed").addClass("sidebar-menu-expanded");
    };
    collapseMyMenu = function() {
      return $("nav.sidebar").removeClass("sidebar-menu-expanded").addClass("sidebar-menu-collapsed");
    };
    showMenuTexts = function() {
      return $("nav.sidebar ul a span.expanded-element").show();
    };
    hideMenuTexts = function() {
      return $("nav.sidebar ul a span.expanded-element").hide();
    };
    moveHamburgerOver = function () {
      return $("nav.sidebar a#justify-icon").css({'margin-left':'47%'});
    };
    moveHamburgerBack = function () {
      return $("nav.sidebar a#justify-icon").css({'margin-left':'30%'});
    };
    return $("#justify-icon").click(function() {
      if ($(this).parent("nav.sidebar").hasClass("sidebar-menu-collapsed")) {
        expandMyMenu();
        showMenuTexts();
        moveHamburgerOver();
        $(this).css({
          color: "#fff"
        });
      } else if ($(this).parent("nav.sidebar").hasClass("sidebar-menu-expanded")) {
        collapseMyMenu();
        hideMenuTexts();
        moveHamburgerBack();
        $(this).css({
          color: "#fff"
        });
      }
      return false;
    });
  });

}).call(this);