$(document).ready(function(){
   $("#username").change(function(){ 
		// tampilkan animasi loading saat pengecekan ke database
    $('#pesan').html("<img src='loader.gif' /> checking ...");	
    var username  = $("#username").val(); 
    
    $.ajax({
     type:"POST",
     url:"<?php echo base_url()?>controller_name/check_email_availablity ?>",    
     data: "username=" + username,
     success: function(data){                 
       if(data==0){
          $("#pesan").html('<img src="tick.png"> Username belum digunakan');
 	        //$('#username').css('border', '3px #090 solid');	
       }  
       else{
          $("#pesan").html('<img src="cross.png"> Username sudah digunakan');       
 	        //$('#username').css('border', '3px #C33 solid');	
       }
     }
    }); 
	})
});