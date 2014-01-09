$(document).ready(function(){
	colaEfectosMarcas();
	linkSolicitudFacturas();
});

//FUNCION EFECTO MARCAS
function colaEfectosMarcas(){		
	$("#imagen_1").fadeOut(2000, function(){
		$(this).fadeIn(2000);
		$("#imagen_2").fadeOut(2000,function(){
			$(this).fadeIn(2000);
			$('#imagen_3').fadeOut(2000,function(){
				$(this).fadeIn(2000);
			});
		});
	});
	$("#marca_1").fadeOut(2000, function(){
		$(this).fadeIn(2000);
		$("#marca_2").fadeOut(2000,function(){
			$(this).fadeIn(2000);
			$('#marca_3').fadeOut(2000,function(){
				$(this).fadeIn(2000, colaEfectosMarcas);
			});
		});
	});
}

//FUNCION  LINK SOLICITAR FACTURA	
function linkSolicitudFacturas(){		
	linkMouseEnter = true;
	linkMouseLeave = true;
	$("#linkFactura").mouseenter(function(){
		if (linkMouseEnter){
			linkMouseEnter = false;
			$(this).animate({width: "250"}, 500, 'easeOutBounce');
			linkMouseLeave = true;
		}
	});
	$("#linkFactura").mouseleave(function(){
		if (linkMouseLeave){
			linkMouseLeave = false;
			$(this).animate({width: "150"}, 500, 'easeOutBounce');
			$("#linkFactura").promise().done(function() {
				linkMouseEnter = true;				
			});
		}
	});
}