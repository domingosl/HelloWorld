var App = {
   Config: {
      splashScreenDuration: 3,
      pagesViaAjax: true
   },
   init: function() {
      $("body").css({"scrollTop": 0});
      MBP.hideUrlBarOnLoad();
      App.navInit();
      setTimeout(function() {
         $("#splash").fadeOut();
      }, App.Config.splashScreenDuration);
      App.windowLoaded();
      $(".subpage-menu").css({opacity: 0});
      
   },
   pageInit: function() {
      $("body").scrollTop(0);
      
      $(".menu-trigger").click(function(e) {
         $("body, html").scrollTop(0);
         e.preventDefault();
         $(".subpage-menu").slideToggle();
         return false;
      });
      
      $(".back-button").click(function(e) {
         e.preventDefault();
         history.back();
      });
      
      $('.flexslider:not(.flexslidered,.flexslider-text)').addClass("flexslidered").flexslider({
         animation: "slide",
         controlNav: true,
         directionNav: false
       });
      
      $('.flexslider-text:not(.flexslidered)').addClass("flexslidered").flexslider({
         animation: "slide",
         controlNav: false,
         directionNav: true
       });
      
      //custom checkboxes
      $('.on-off:not(.iphoneStyled)').addClass("iphoneStyled").iphoneStyle();
      
      //initialize photoswipe for portfolio page
      if ($(".portfolio-gallery a:not(.photoSwiped)").length) //dont run if already ran before
         $(".portfolio-gallery a:not(.photoSwiped)").addClass("photoSwiped").photoSwipe({});
      
      //initialize sharethis for new loaded content, if any
      //stButtons.locateElements();
      
      $(".portfolio-gallery li a").click(function() {
         if ($("#nav-close").is(":visible")) {
            $("#nav-close").click();
         }
      })
      
      //enable back button
      $(".back-trigger").click(function(e) {
         e.preventDefault();
         history.back();
      });
      setTimeout(function() {
         $(".back-trigger").fadeIn();
      }, 1);
      
      //bind form validations
      App.Forms.bind();
      
      //other bindings
      App.ajaxLinkify($(".page a.ajaxify"));
      App.addTouchEvents($(".page"));
      
      //maps
      App.refreshMaps();
   },
   navInit: function() {
      //if nav-items are more than default (5), resize width to fit:
      //$(".navigation a").css({width: ((100 / 2) - 1) + "%"});
      //$(".navigation a").css({height: (($(window).height() / 3) - 1)});
      $(".subpage-menu a").click(function(e) {
         e.preventDefault();
         if ($(window).width() < 650)
            $(".subpage-menu").slideUp();
         return false;
      });
      
      $("header").height($(window).height()+100);
      $(".main-menu li").width($("header").width());
      $(".main-menu li").height($("header").height());
      
      $('.flexslider:not(.flexslidered,.flexslider-text)').addClass("flexslidered").flexslider({
         animation: "slide",
         controlNav: true,
         directionNav: false,
         animationLoop: false
       });
      
      if (App.Config.pagesViaAjax) {
         $(".main-menu a.ajaxify, .subpage-menu a.ajaxify").click(function(e) {
            e.preventDefault();
            var me = this;
            if (true) {
               //close menu first
               $("header").fadeOut(function() {
                  setTimeout(function() {
                     App.Util.activateMenu(me);
                     App.Util.showLoading(function() { //once loading graphic is shown, do ajax request to get page
                        $.ajax({
                           url: $(me).attr("href").replace("#", ""),
                           success: function(r) {
                              $(".page").html(r);
                              App.Util.doneLoading(App.pageInit);
                           }
                        })
                     });
                  }, 400);
               });
            }
            $(window).bind("hashchange", App.processHash);
         });
      }
      
      
      
   },
   processHash: function() {
      hash = window.location.hash;
      if ($(hash).length)
         $(hash).click();
      else {
            if (hash == "#home") {
               $(".page").fadeOut(function() {
                  $(".page").html("");
                  $("header").fadeIn();
               });
            }
      }
   },
   ajaxLinkify: function(el) {
      $(el).click(function(e) {
         e.preventDefault();
         var me = this;
         App.Util.showLoading(function() { //once loading graphic is shown, do ajax request to get page
            $.ajax({
               url: $(me).attr("href"),
               success: function(r) {
                  App.Util.silentHashChange($(me).attr("id") ? $(me).attr("id") : "#link");
                  $(".page").html(r);
                  App.Util.doneLoading(function() {
                     App.pageInit();
                  });
               }
            })
         });
      });
   },
   addTouchEvents: function(el) {
      //tap event effects for links
      $(el).find("a:not(.tapInEffected)").addClass("tapInEffected").bind("touchstart mousedown mouseenter", function() {
         $(this).addClass("hover");
      });
      $(el).find("a:not(.tapOutEffected)").addClass("tapOutEffected").bind("touchmove touchend mouseup mouseleave", function() {
         $(this).removeClass("hover");
      });
   },
   windowLoaded: function() {
      App.addTouchEvents($("header"));

      if (window.location.hash && $(window.location.hash).length) {
         setTimeout(function() {
            App.processHash();
         }, 1000);
      } else {
         App.Util.silentHashChange("home");
         setTimeout(function() {
            $("#splash").hide()
         }, App.Config.splashScreenDuration);
      }
   },
   Util: {
      /*
      showLoading: function(callback) {
         $(".page").slideUp(callback);
         $(".page-loader").slideDown();
      },
      doneLoading: function(callback) {
         $(".page-loader").slideUp();
         $(".page").slideDown(callback);
      },
      */
      showLoading: function(callback) {
         //$(".page").slideUp(callback);
         $(".page *").unbind("click");
         $(".page *").unbind("touchmove touchstart touchend mousedown mouseup");
         $("footer").hide();
         $(".page").fadeOut(function() {
            $(".page-loader").fadeIn(function() {
               setTimeout(callback, 1);
            });
         });
         $(".subpage-menu").animate({opacity: 0});
      },
      doneLoading: function(callback) {
         $(".page-loader").fadeOut(function() {
            $(".page").fadeIn(callback);
            $(".subpage-menu").css({opacity: 1});
            $("footer").show();
         });
      },
      activateMenu: function(el) {
         $(document).ready(function() {
            $(".navigation .active").removeClass("active");
            $(el).addClass("active");
            App.Util.silentHashChange($(el).attr("id") != undefined ? $(el).attr("id") : "");
         });
      },
      silentHashChange: function(hash) {
         $(window).unbind("hashchange");
         window.location.hash = hash;
         setTimeout(function() {
            $(window).bind("hashchange", App.processHash);
         }, 100);
      }
   },
   Forms: {
      bind: function() {
         // Add required class to inputs
         $(':input[required]').addClass('required');
         
         // Block submit if there are invalid classes found
         $('form:not(.html5enhanced)').addClass("html5enhanced").submit(function() {
               var formEl = this;
                 $('input,textarea').each(function() {
                         App.Forms.validate(this);
                 });
                 
                 if(($(this).find(".invalid").length) == 0){
                         // Delete all placeholder text
                         $('input,textarea').each(function() {
                                 if($(this).val() == $(this).attr('placeholder')) $(this).val('');
                         });
                         
                         //now submit form via ajax
                         $.ajax({
                           url: $(formEl).attr("action"),
                           type: $(formEl).attr("method"),
                           data: $(formEl).serialize(),
                           success: function(r) {
                              if (r) {
                                 $(".success-message").slideDown().removeClass("hidden");
                              }
                           }
                         })
                         return false;
                 }else{
                         return false;
                 }
         });

      },
      is_email: function(value){
	return (/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/).test(value);
      },
      is_url: function(value){
              return (/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i).test(value);
      },
      is_number: function(value){
              return (typeof(value) === 'number' || typeof(value) === 'string') && value !== '' && !isNaN(value);
      },
      validate: function(element) {
         var $$ = $(element);
         var validator = element.getAttribute('type'); // Using pure javascript because jQuery always returns text in none HTML5 browsers
         var valid = true;
         var apply_class_to = $$;
         
         var required = element.getAttribute('required') == null ? false : true;
         switch(validator){
                 case 'email': valid = App.Forms.is_email($$.val()); break;
                 case 'url': valid = App.Forms.is_url($$.val()); break;
                 case 'number': valid = App.Forms.is_number($$.val()); break;
         }
         
         // Extra required validation
         if(valid && required && $$.val().replace($$.attr('placeholder'), '') == ''){
                 valid = false;
         }
         
         // Set input to valid of invalid
         if(valid || (!required && $$.val() == '')){
                 apply_class_to.removeClass('invalid');
                 apply_class_to.addClass('valid');
                 return true;
         }else{
                 apply_class_to.removeClass('valid');
                 apply_class_to.addClass('invalid');
                 return false;
         }
      }

   },
   refreshMaps: function(){
      if (!$(".map").length)
         return;
      $('.map').each(function(){
           var me = $(this);
           var locationTitle = $(this).attr('data-location');
           var myId = $(me).attr('id');
           var geocoder = new google.maps.Geocoder();
           geocoder.geocode({
                address: locationTitle
            }, function(locResult) {
                var latVal = locResult[0].geometry.location.lat();
                var longVal = locResult[0].geometry.location.lng();
                App.initializeMap(myId, locationTitle, latVal, longVal);
            });
      });
   },
   initializeMap: function(locationVal, titleVal, latVal, longVal) {
      var latlng = new google.maps.LatLng(latVal, longVal);
      var settings = {
              zoom: 13,
              center: latlng,
              mapTypeControl: false,
              mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
              navigationControl: false,
              navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
              streetViewControl: false,
              zoomControl: true,
              mapTypeId: google.maps.MapTypeId.ROADMAP 
      };
      var map = new google.maps.Map(document.getElementById(locationVal), settings);
      
      
      var nibrasPos= new google.maps.LatLng(latVal, longVal);
      var nibrasMarker = new google.maps.Marker({
                position: nibrasPos,
                map: map,
                title:titleVal
      });
   }
   
}

$(document).ready(App.init);
//$(window).load(App.windowLoaded);