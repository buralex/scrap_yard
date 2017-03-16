 "use strict";


/*---------------------------------------------------------------

						attach
						
----------------------------------------------------------------*/
 console.log('kdjfk');
(function() {
  console.log('kdjfk');
  var a = document.querySelector('.attach');
  var num = 0;

  a.addEventListener("change", function() {
  
    for (var i = 0; i < this.files.length; i++) num++;
  
    document.querySelector('.val').innerHTML = num;
  
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
            alert('aaaaaaa');
    },
    error: function(jqXHR, textStatus, errorThrown) {
       
    }          
  });
      return false;
      e.preventDefault(); //Prevent Default action. 
  }); 

})();

