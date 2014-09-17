$(function(){
    //custom select
    $('select.language, select.pais, select.ciudad, select.day, select.month, select.year, select.categorias, select.subcategorias, select.generic').customSelect();
    $('select.language').change(function(){
        //alert($(this).val());
    });
    
    //filtro
    $('.filtro select').customSelect();
    
    //scroll top
    $('a[href=#top]').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
    });
    
    //custom tyoe=file
    $(".custom-file-upload").find('input[type=file]').customFile();
    
    //datepicker
    $("input.calendar" ).datepicker();
    
    //slider
    $(".slider" ).slider({
        range: true,
        min: 0,
        max: 150,
        values: [ 20, 100 ],
        slide: function( event, ui ) {
            $(".ranges .minus").html(ui.values[ 0 ]);
            $(".ranges .maximum").html(ui.values[ 1 ]);
        }
    });
    $(".ranges .minus").html($(".slider").slider( "values", 0 ));
    $(".ranges .maximum").html($(".slider").slider( "values", 1 ));
    
    //carrousel comments
    $("#owl-carousel-comments").owlCarousel({
        pagination : true,
        items : 1,
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false
    });

    //carrousel videos
    $("#owl-carousel-videos").owlCarousel({
        navigation : true,
        pagination : false,
        items : 4,
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false
    });
    
    //menu hallazgos
    $(".timeline .options, .know .options").find("a").click(function(){
        $(this).parent().siblings().removeClass("selected");
        $(this).parent().addClass("selected");
        $(this).parent().parent().next(".list").find("#"+$(this).attr("lang")).addClass("selected").siblings().removeClass("selected");
    });
    
    //faqs
    $(".widget .selections, .widget .options").find("a").click(function(){
        $(this).parent().parent().find("a").removeClass("selected");
        $(this).addClass("selected");
        $(".list_faqs, .list_popular").find("#"+$(this).attr("lang")).addClass("selected").siblings().removeClass("selected");
    });
    
    //categorias
    $(".widget .categories").find("a").click(function(){
        if($(this).attr("lang") == "c_all"){
            var element = $(this).parent().parent().find("li > a");
            if($(this).hasClass("selected")){
                element.removeClass("selected");
            }else{
                element.addClass("selected");
            }
        }else{
            if($(this).hasClass("selected")){
                $(this).removeClass("selected");
            }else{
                $(this).addClass("selected");
            }
        }
    });
    
    //advanced_search
    $(".widget .advanced_search").find("a").click(function(){
        if($(this).attr("lang") == "ad_all"){
            var element = $(this).parent().parent().find("li");
            if($(this).parent().hasClass("selected")){
                element.removeClass("selected");
            }else{
                element.addClass("selected");
            }
        }else{
            if($(this).parent().hasClass("selected")){
                $(this).parent().removeClass("selected");
            }else{
                $(this).parent().addClass("selected");
            }
        }
    });    
    
    //toogle
    $(".toogle").find("a").click(function(){
        var elem = $(this);
        var element = $(this).next(".text");
        if(elem.hasClass("selected")){
            element.slideUp('slow',function(){
                elem.removeClass("selected");
            });
        }else{
            elem.addClass("selected");
            element.slideDown('slow');
        }
    });
    
    //acomodation
    $(".acomodation").find("h4").click(function(){
        var elem = $(this);
        var element = $(this).next();
        if(elem.hasClass("selected")){
            element.slideDown('slow',function(){
                elem.removeClass("selected");
            });
        }else{
            elem.addClass("selected");
            element.slideUp('slow');
        }
    });    
    
    //blogs slider
    $(".slider1").owlCarousel({
        navigation : true,
        pagination : false,
        items : 1,
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false
    });
    
    //blogs slider
    $(".slider2").owlCarousel({
        navigation : false,
        pagination : true,
        items : 1,
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false
    });
    
    //gallery1 y gallery2
    var sync1 = $(".gallery1 ul");
    var sync2 = $(".gallery2 ul");
    
    sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: true,
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
    });
    
    sync2.owlCarousel({
        items : 10,
        itemsDesktop      : [1199,10],
        itemsDesktopSmall     : [979,10],
        itemsTablet       : [768,8],
        itemsMobile       : [479,4],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
            el.find(".owl-item").eq(0).addClass("synced");
        }
    });
    
    function syncPosition(el){
        var current = this.currentItem;
        $(".gallery2 ul")
        .find(".owl-item")
        .removeClass("synced")
        .eq(current)
        .addClass("synced")
        if($(".gallery2 ul").data("owlCarousel") !== undefined){
            center(current)
        }
    
    }
    
    $(".gallery2 ul").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
    });
    
    function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for(var i in sync2visible){
            if(num === sync2visible[i]){
                var found = true;
            }
        }
    
        if(found===false){
            if(num>sync2visible[sync2visible.length-1]){
                sync2.trigger("owl.goTo", num - sync2visible.length+2)
            }else{
                if(num - 1 === -1){
                    num = 0;
                }
                sync2.trigger("owl.goTo", num);
            }
        } else if(num === sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
            sync2.trigger("owl.goTo", num-1)
        }
    }
    
    //
    //list post
    $(".list_posts").owlCarousel({
        navigation : false,
        pagination : false,
        items : 1,
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false
    });
    
    //prev y next -> list post
    $(".load_more_post").find("a").click(function(){
        var owl = $(".list_posts");
        if($(this).hasClass("next")){
            owl.trigger('owl.next');
        }else{
            owl.trigger('owl.prev');
        }
    });
    
    //carrousel videos
    $(".also_like_this").owlCarousel({
        navigation : true,
        pagination : false,
        items : 5,
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false
    });
    
    //carrousel academies
    $(".owl-carousel-academies").owlCarousel({
        navigation : false,
        pagination : false,
        items : 6,
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false
    });
    
    //prev y next -> academies
    $(".academies .carousel .previous, .academies .carousel .next").find("a").click(function(){
        var owl = $(".owl-carousel-academies");
        if($(this).hasClass("next")){
            owl.trigger('owl.next');
        }else{
            owl.trigger('owl.prev');
        }
    });
    
    //perfil options
    $(".perfil.options").find("a").click(function(){
        $(this).parent().addClass("selected").siblings().removeClass("selected");
        $("#"+$(this).attr("lang")).fadeIn("fast").siblings().css("display","none");
    });
    
    //close
    $("a.close").click(function(){
        $(this).parent().slideUp('slow',function(){
           $(this).remove();
        });
    });
    
    //popup
	$('.popup').magnificPopup({
		type:'inline',
		midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});
    
    //initAjaxPopup
    function initAjaxPopup(){
    	$('.ajax_popup').magnificPopup({
          type: 'ajax',
          callbacks: {
            open: function() {
            },
            close: function() {
            }
          }
        });
    }
    
    initAjaxPopup();
    
});