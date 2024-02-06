(function ($, root, undefined) {
  $(function () {
    "use strict";

    var $window = $(window);
    var $body = $("body");
    var $document = $(document);

    // $('.menu-item-has-children').on('hover', function(){
    // 	$(this).children('ul.sub-menu').toogle();
    // })

    // DOM ready, take it away
    $("p:empty").remove();
    $(".gallery-item").featherlightGallery();

    $("#show_nav_button").on("click", function (e) {
      $("header nav ul").toggle();
    });

    $(".foldies .foldies_content").hide();
    $(".foldies:eq(0) .foldies_content").show();
    $(".foldies").on("click", function () {
      var $foldieschild = $(this).children(".foldies_content");
      $(".foldies .foldies_content").slideUp();
      $(".foldies h6").removeClass("turned");
      if ($foldieschild.is(":visible")) {
      } else {
        $(this).children($(".foldies_content")).slideDown();
        $(this).children($("h6")).addClass("turned");
      }
    });

    $(".bxslider").each(function () {
      var $this = $(this);
      var slider_has_many_children =
        $this.children("li").length > 1 ? true : false;
      console.log(slider_has_many_children);
      var slider = $this.bxSlider({
        auto: slider_has_many_children,
        pager: slider_has_many_children,
        mode: "fade",
        autoHover: true,
      });
      // var $bxcount = $(".bx-pager").children().length;
      // 	if ($bxcount == 1) {$('.bx-pager-item').hide();};
    });

    // TO DO FIX THIS :

    // POP UP MESSAGE ON HOME PAGE
    var $home_page_message = $("#home_page_message");

    $(".cancel_message").on("click", function (e) {
      e.preventDefault();
      closeHomePageMessage();
    });

    function closeHomePageMessage() {
      $home_page_message.hide();
      var d = new Date();
      d.setTime(d.getTime() + 24 * 60 * 60 * 1000);
      var expires = "expires=" + d.toUTCString();
      document.cookie = "home_page_message_hide=true;" + expires + "; path=/";

      var d = new Date();
      d.setTime(d.getTime() + 24 * 60 * 60 * 1000);
      var expires = "expires=" + d.toUTCString();
      document.cookie = "home_page_message_hide=true;" + expires + "; path=/";
    }

    // if press escape key,
    $document.on("keydown", function (e) {
      if (e.keyCode == 27) {
        closeHomePageMessage();
      }
    });

    $("#submitbutton").on("click", function (e) {
      closeHomePageMessage();
    });

    var home_page_message_cookie = getCookie("home_page_message_hide");
    if (home_page_message_cookie != "") {
    } else {
      $home_page_message.show();
    }

    $(".album_titles").each(function () {
      var $this = $(this);
      var $count = $this.children("li").length;
      console.log($count);
      if ($count == 1) {
        $this.children("li").hide();
      }
    });

    $(".album_titles li").on("click", function () {
      $(".album_titles li").removeClass("current_title");
      var $classname = $(this).attr("class");
      $(this).addClass("current_title");
      $(".current_album").removeClass("current_album");
      var $class_to_change = ".album.";
      $class_to_change += $classname;
      // console.log($class_to_change);
      $($class_to_change).addClass("current_album");
    });

    // function footer_height(){
    // 	if ($(window).width() > 901) {
    // 		var $footerheight = $('footer').height();
    // 		$('#main').css({'margin-bottom' : $footerheight});
    // 	}
    // }

    // //Do the functions
    // footer_height();

    // $(window).on('resize', function(){
    // 	footer_height();
    // })
  });
})(jQuery, this); // Everything after this loads before the page

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

var myMapOptions = {
  zoom: 13,
  mapTypeControl: true,
  scrollwheel: false,
  navigationControlOptions: { style: google.maps.NavigationControlStyle.SMALL },
  mapTypeId: google.maps.MapTypeId.ROADMAP,
};

function get_map($location, $element) {
  var mapcontainer = $element;
  mapcontainer.css({
    width: "100%",
    height: 309,
  });

  // geocoder = new google.maps.Geocoder();
  var address = $location;
  var latng = { lat: 46.1881052, lng: 6.1370051 };

  var map = new google.maps.Map(mapcontainer.get(0), myMapOptions);

  // geocoder.geocode({ 'address': address }, function (results, status) {
  // 	if (status == google.maps.GeocoderStatus.OK) {
  map.setCenter(latng);
  var marker = new google.maps.Marker({
    map: map,
    position: latng,
    title: "Cryolife",
  });
  // 	} else {
  // 		alert('Geocode was not successful for the following reason: ' + status);
  // 	}
  // });
}
