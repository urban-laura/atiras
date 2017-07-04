$(document).ready(function(){
	
	$('#power').keydown(function(e){
		if ( e.keyCode == 46 || e.keyCode == 8 ) 
		{
            // let it happen, don't do anything
		}

        else 
		{
            // Ensure that it is a number and stop the keypress

            if ((e.keyCode < 48 || e.keyCode > 57) || (e.keyCode >= 96 && e.keyCode <= 105)) 
			{

                e.preventDefault(); 

            }   

        }
	})
	
	
})//ready