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
		
	});

	if ($('target').length > 0){
		//O elemento existe, portanto precisamos dar o scroll em algum elemento.
		var elemento = '#' + $('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({'scrollTop':divScroll} , 2000);
	}

	carregarDinamico();

	function carregarDinamico(){
		$('[realtime]').click(function(){
			var pagina = $(this).attr('realtime');
			$('.container-principal').hide();
			$('.container-principal').load(include_path+'pages/'+pagina+'.php');

			setTimeout(function(){
				initialize();
				addMarker(-27.609959,-48.576585,'',"Minha Casa", undefined,false);
			},1000);

			$('.container-principal').fadeIn(1000);

			return false;
			
		})
	}

})

