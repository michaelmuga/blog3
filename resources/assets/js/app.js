
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });



 //mouseochildren



        $(".slide").mouseover(function (){

$(this).children(".campaignurgentp").show();
$(this).children("fa").show();
$(this).find('.imgg').fadeTo( "slow", 0.1 );
    });




//mouseout
$(".slide").mouseout(function (){

    $(this).children(".campaignurgentp").hide();
    $(this).children("fa").hide();
    $(this).find('.imgg').fadeTo( "slow", 1 );
    });




});



  $(function() {
  $('.itemxyz').matchHeight('options');
});




  