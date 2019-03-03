$("document").ready(function() {
	
	$("#cerrarSesion").click(function() {

		$.ajax({  
			url: '../vistas/loguot.php',
			type: 'GET',
			dataType: 'html',
			data: {},
			success:function(data){
				console.log(data);
			}
		});
		
	});
});