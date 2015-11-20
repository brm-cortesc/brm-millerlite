   function scrollWin(){
            $("html, body").animate({ scrollTop: $('.display_info').offset().top }, 1200);
          }

          $(document).ready(function() {
              $(".triggerMenuBtn").click(function(){$(".nav-pillsWrap").slideToggle();});
          });