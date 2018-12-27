
    /*$(document).ready(function() {
      $(".menu").click(function() {
        $("ul").slideToggle().toggleClass('active');    
      });
    });*/
    
$(document).ready(function(){
    $('.navbar-xbootstrap').click(function(){
      $('.nav-xbootstrap').toggleClass('visible');
      $('body').toggleClass('cover-bg');
    });
  });

        function DropDown(el) {
        this.dd = el;
        this.placeholder = this.dd.children('span');
        this.opts = this.dd.find('.dropdown a');
        this.val = '';
        this.index = -1;
        this.initEvents();
      }
      DropDown.prototype = {
        initEvents : function() {
          var obj = this;

          obj.dd.on('click', function(event){
            $(this).toggleClass('active');
            return false;
          });

          obj.opts.on('click',function(){
            var opt = $(this);
            obj.val = opt.text();
            obj.index = opt.index();
            obj.placeholder.text(obj.val);
          });
        },
        getValue : function() {
          return this.val;
        },
        getIndex : function() {
          return this.index;
        }
      }

      $(function() {

        var dd = new DropDown( $('#dd') );



      });


 
      $(document).ready(function(){ 
      
      $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
          $('.scrollup').fadeIn();
        } else {
          $('.scrollup').fadeOut();
        }
      }); 
      
      $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
      });
 
    });

$(document).ready(function() {
  (function() {
    var showChar = 500;
    var ellipsestext = "";

    $(".truncate").each(function() {
      var content = $(this).html();
      if (content.length > showChar) {
        var c = content.substr(0, showChar);
        var h = content;
        var html =
          '<div class="truncate-text" style="display:block">' +
          c +
          '<div class="moreellipses">' +
          ellipsestext +
          '&nbsp;&nbsp;<a href="" class="moreless more btn btn-secondary center">more</a></div></div></div><div class="truncate-text" style="display:none">' +
          h +
          '<a href="" class="moreless less btn btn-secondary center">Less</a></div></div>';

        $(this).html(html);
      }
    });

    $(".moreless").click(function() {
      var thisEl = $(this);
      var cT = thisEl.closest(".truncate-text");
      var tX = ".truncate-text";

      if (thisEl.hasClass("less")) {
        cT.prev(tX).toggle();
        cT.slideToggle();
      } else {
        cT.toggle();
        cT.next(tX).fadeToggle();
      }
      return false;
    });
    /* end iffe */
  })();

  /* end ready */
});

// $(document).ready(function() {
//     var max_fields      = 5;
//     var wrapper         = $(".container1");
//     var add_button      = $(".add_form_field");
 
//     var x = 1;
//     $(add_button).click(function(e){
//         e.preventDefault();
//         if(x < max_fields){
//             x++;
//             $(wrapper).append('<div class="added_input_email"><input type="text" placeholder="E-mail" name="mytext[]"/><a href="#" class="delete">+</a></div>'); //add input box
//         }
//   else
//   {
//   alert('You Reached the limits')
//   }
//     });
 
//     $(wrapper).on("click",".delete", function(e){
//         e.preventDefault(); $(this).parent('div').remove(); x--;
//     })
// });

  $(".scrollto").on('click', function(e) {
     e.preventDefault();
     var target = $(this).attr('href');
     $('html, body').animate({
       scrollTop: ($(target).offset().top)
     }, 300);
  });
   
$(document).ready(function(){
   String.prototype.escapeURI = function () {
    return encodeURIComponent(this).replace(/%20/g, '+');
}
});

$(document).ready(function(){

    
    $("[data-toggle=tooltip]").tooltip();
});

$(window).scroll(function(e) {
  var height = $(this).scrollTop();
  $('.img_logo')[height >= 20 ? 'addClass' : 'removeClass']('logo_scroll')
});


    