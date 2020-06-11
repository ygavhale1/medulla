$(document).ready(function(){
	/* Multi Accordain */
	
	$("#realizeFaq dt").each(function(index) {		
        $(this).click(function(e){
			e.preventDefault();	
			if($(this).next().css("display") == "none"){				
				$("#realizeFaq dd").slideUp("slow");
				$("#realizeFaq dd .subFaq li .faqCont").slideUp("slow");
				$("#realizeFaq dd .subFaq li a").removeClass("selected");	
				$("#realizeFaq dt a").removeClass("selected");
				$("a",this).addClass("selected");	
				$(this).next().slideDown("slow");
				$('.faqCont').tinyscrollbar();										
				
			}
			else{
				$("a",this).removeClass("selected");	
				$(this).next().slideUp("slow");	
				$("#realizeFaq dd .subFaq li .faqCont").slideUp("slow");
				$("#realizeFaq dd .subFaq li a").removeClass("selected");					
			}			
		});
    });
	$(".subFaq li a").each(function(){		 
		  $(this).click(function(e){
			  $(".subFaq li a").removeClass("selected");
			  $(".subFaq li .faqCont").slideUp("slow");
			  if($(this).next().css("display") == "none"){				    				   
				  $(this).next().slideDown("slow");
				  $(this).addClass("selected");	
				  $('.faqCont').tinyscrollbar();
			  }else{ 
			  	 $(this).next().slideUp("slow");
				 $(this).removeClass("selected"); 	
			  }
		  });	
	  });
	/* End Multi Accordain */
})


