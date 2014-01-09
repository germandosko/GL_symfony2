$(document).ready(function(){	
	// LISTA TRABAJOS
	$("#trabajos").mouseover(function(){
	$("#firstList").css('visibility', 'visible');
	});
	$("#trabajos").mouseout(function(){
		$("#firstList").css('visibility', 'hidden');
	});
	$("#firstList").mouseover(function(){
		$(this).css('visibility', 'visible');
	});
	$("#firstList").mouseout(function(){
		$(this).css('visibility', 'hidden');
	});
	// LISTA TARJETAS
	$("#card").mouseover(function(){
		$("#cardList").css('visibility', 'visible');
	});
	$("#card").mouseout(function(){
		$("#cardList").css('visibility', 'hidden');
	});
	$("#cardList").mouseover(function(){
		$(this).css('visibility', 'visible');
	});
	$("#cardList").mouseout(function(){
		$(this).css('visibility', 'hidden');
	});
	// LISTA FOLLETOS
	$("#brochure").mouseover(function(){
	$("#brochureList").css('visibility', 'visible');
	});
	$("#brochure").mouseout(function(){
		$("#brochureList").css('visibility', 'hidden');
	});
	$("#brochureList").mouseover(function(){
		$(this).css('visibility', 'visible');
	});
	$("#brochureList").mouseout(function(){
		$(this).css('visibility', 'hidden');
	});
});
