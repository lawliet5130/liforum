
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

$(document).ready(function(){
      tcount=$('.list_page_scientists table .results_search_scientist tr').length;
      if($('.list_page_scientists table .results_search_scientist tr').length>5){
          current=5;
          for (var i = 5; i < tcount; i++) {
            $('.list_page_scientists table .results_search_scientist tr').eq(i).fadeOut();
          }
          $('.more').fadeIn();
        }

$('.more').click(function(){

          if(tcount-current>=5){

            for (var i = current; i < current+5; i++) {
              $('.list_page_scientists table .results_search_scientist tr').eq(i).fadeIn();
            }
            current+=5;
            console.log(current);
            if(current==tcount)$('.more').fadeOut();
          }else{
            for (var i = current; i < tcount; i++) {
            console.log(i);
              $('.list_page_scientists table .results_search_scientist tr').eq(i).fadeIn();
            }
            $('.more').fadeOut();
          }
        });

    
    $("#filter").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;

        
        // Loop through the comment list
        $(".list_page_scientists table .results_search_scientist tr") .each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
            // Show the list item if the phrase matches and increase the count by 1
            } 
            
            else {
                $(this).show();
                count++;
                tcount=count;
            };

 

       

        });

        if(count>5){
          console.log($('.list_page_scientists table .results_search_scientist tr').eq(7))
          current=5;
          for (var i = 5; i < count; i++) {
            $('.list_page_scientists table .results_search_scientist tr').eq(i).fadeOut();
          }
          $('.more').fadeIn();
        }

        

                   if(!count){
              $(".no_scientist").fadeIn();
              $(".top_list_display_scientist").fadeOut();
            }else{
               $(".no_scientist").fadeOut();
               $(".top_list_display_scientist").fadeIn();
            }
            count=0;

        // Loop through the comment list
        $(".works_personal table .results_search_work tr") .each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }


        });
         if(!count){
          $(".no_work").fadeIn();
          $(".top_list_display_work").fadeOut();
        }else{
           $(".no_work").fadeOut();
           $(".top_list_display_work").fadeIn();
        }

        count=0;
                // Loop through the comment list
        $(".list_page_startups ul li") .each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        }); 


         if(!count){
          $(".no_startup").fadeIn();
        
        }else{
           $(".no_startup").fadeOut();
           
        }
        
        count=0;




                       // Loop through the comment list
        $(".video_list .col-md-3") .each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
                 if(!count){
          $(".no_video").fadeIn();
        
        }else{
           $(".no_video").fadeOut();
           
        }
        
        count=0;
  
        // Update the count
        var numberItems = count;
        $("#filter-count").text("Number of Filter = "+count);
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


    