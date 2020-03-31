jQuery(document).ready(function(){
    
    "use strict";
    $('#slider-carousel').carouFredSel({
        responsive:true,
        width:'100%',
        circular:true,
        scroll:{
            iteams:1,
            duration:500,
            pauseOnHover:true
        },
        auto:true,
        iteams:{
            visible:{
                min:1,
                max:1
            },
            height:"variable"
        },
        pagination:{
            container:".sliderpager",
            pageAnchorBuilder:false
        }
    });
    
    $(window).scroll(function(){
        var top=$(window).scrollTop();
        if(top>=60){
            $("header").addClass('secondary');
        }
        else
            if($("header").hasClass('secondary')){
                $("header").removeClass('secondary');
            }
    });
});
      
    $(document).ready(function(){
        $('.flip').click(function(){
           $('.cont-flip').toggleClass('.flipped');
                    return false;
                     });                 
        
    });

    
	

	// Mobile Toggle Btn
	$('.navbar-toggle').on('click',function(){
		$('#header').toggleClass('nav-collapse')
	});
	                
                     
                     
                     