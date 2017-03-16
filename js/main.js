 "use strict";


$(function(){
	/* placeholder*/	   
	$('input, textarea').each(function(){
 		var placeholder = $(this).attr('placeholder');
 		$(this).focus(function(){ $(this).attr('placeholder', '');});
 		$(this).focusout(function(){			 
 			$(this).attr('placeholder', placeholder);  			
 		});
 	});
	/* placeholder*/

});



/*---------------------------------------------------------------

						attach
						
----------------------------------------------------------------*/

(function() {

  var a = document.querySelector('.attach__button');
  var num = 0;

  a.addEventListener("change", function() {
  
    for (var i = 0; i < this.files.length; i++) num++;
  
    document.querySelector('.attach__val').innerHTML = num;
  
  });
  
})();

/*---------------------------------------------------------------

						SEND REQUEST
						
----------------------------------------------------------------*/

(function() {
  
  $("#myform").on('submit' , function(e) {
   
    var formObj = $(this);
    //var formURL = formObj.attr("action");
    var formData = new FormData(this);
    $.ajax({
    url: "send.php",
    type: 'POST',
    data:  formData,
    mimeType:"multipart/form-data",
    contentType: false,
    cache: false,
    processData:false,
    success: function(data, textStatus, jqXHR) {
       $('#myModal').modal('show');
    },
    error: function(jqXHR, textStatus, errorThrown) {
       
    }          
  });
      return false;
      e.preventDefault(); //Prevent Default action. 
  }); 

})();

