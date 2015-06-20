$(document).ready(function() {
    //set initial state.
   // $('#textbox1').val($(this).is(':checked'));
   	$(document).on("change", "[id^=checkPerspectivas]", function() {
        if($(this).is(":checked")) {
        	var idPerspectiva = $(this).val();
            //$('#perspectivas'+ idPerspectiva).html("teste");
            $.ajax({
            	type: 'post',
            	url: '/PF/index.php/Grupos/getGrupos',
            	data: ({
            		perspectiva: idPerspectiva
            	}),
            	success: function(data) {
            		$('#perspectivas'+ idPerspectiva).html(data);
            	}
        	});
        }else{        	
        	$('#perspectivas'+ $(this).attr('id').replace(/checkPerspectivas/, '')).html("");
        }
              
    });


    $(document).on("change", "[id^=checkGrupos]", function() {
        if($(this).is(":checked")) {
        	var idGrupo = $(this).val();
            
            $.ajax({
            	type: 'post',
            	url: '/PF/index.php/Objetivos/getObjetivos',
            	data: ({
            		grupo: idGrupo
            	}),
            	success: function(data) {
            		$('#grupos'+ idGrupo).html(data);
            	}
        	});
        }else{        	
        	$('#grupos'+ $(this).attr('id').replace(/checkGrupos/, '')).html("");
        }      
    });


    $(document).on("change", "#selectMap", function() {
            var idME = $(this).val();            
        if(idME != -1){
            $.ajax({
                type: 'post',
                url: '/PF/index.php/Mapas/get_map',
                data: ({
                    mapa: idME
                }),
                success: function(data) {
                    $('#fullMap').html(data);
                }
            });
        }
        else {         
            $('#fullMap').html("");
        }      
    });
});