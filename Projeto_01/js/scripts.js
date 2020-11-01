$(function(){
	//Aqui vai todo o código em Java Script
	$('nav.mobile').click(function(){
		//O que vai acontecer quando clicarmos no nav.movile
		var listaMenu = $('nav.mobile ul');
		//Abrir pelo fadeIn
		/*
		if(listaMenu.is(':hidden') == true){
			listaMenu.fadeIn();
		}
		else{
			listaMenu.fadeOut();
		}
		*/

		if(listaMenu.is(':hidden') == true){
			//var icone = $('.botao-menu-mobile i'); 
			var icone = $('.botao-menu-mobile').find('i');
			var barraMenu = $("header");
			icone.removeClass('fas fa-bars');
			icone.addClass('fas fa-times');
			listaMenu.slideToggle();	
			//torna a barraMenu fixa
			barraMenu.css({"position": "fixed","top": "0","width": "100%", "z-index": "999"});

		}
		else{
			var icone = $('.botao-menu-mobile').find('i');
			var barraMenu = $("header");
			icone.removeClass('fas fa-times');
			icone.addClass('fas fa-bars');
			listaMenu.slideToggle();
			//Retira a BarraMenu fixada anteriormente
			barraMenu.css("position","static");

		}
		
	})
})

