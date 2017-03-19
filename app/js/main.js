 "use strict";

/*---------------------------------------------------------------

						CUSTOM
						
----------------------------------------------------------------*/

$(window).on("load", function(){
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('body').addClass('ios');
	};
	$('body').removeClass('loaded'); 
});

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

/*------------------------------------------------------------------------------

						DEBOUNCE
						
------------------------------------------------------------------------------*/
Function.prototype.debounce = function (milliseconds) {
    var baseFunction = this,
        timer = null,
        wait = milliseconds;

    return function () {
        var self = this,
            args = arguments;

        function complete() {
            baseFunction.apply(self, args);
            timer = null;
        }

        if (timer) {
            clearTimeout(timer);
        }

        timer = setTimeout(complete, wait);
    };
};
/* -----------------------------------------------------------------------------

                      STICKY FOOTER     
  
----------------------------------------------------------------------------- */

function stickyFooter(footerContainer, wrapCont) {
    
    function stick() {
        var footerHeight = document.querySelector(footerContainer).offsetHeight;
        //document.querySelector(footerContainer).style.cssText = "margin-top: -" + footerHeight + "px;";
        document.querySelector(wrapCont).style.cssText = "padding-bottom: " + footerHeight + "px;";
    }
	
   window.addEventListener("load", function(event) { stick() }.debounce(10));
   window.addEventListener("resize", function(event) { stick() }.debounce(10));
   
}
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
  
  $("#mainform").on('submit' , function(e) {
    //alert('fff');
    $('.icon-load').show();
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
      $('.icon-load').hide();
       $('#contactModal').modal('show');

    },
    error: function(jqXHR, textStatus, errorThrown) {
       
    }          
  });
      return false;
      e.preventDefault(); //Prevent Default action. 
  }); 
  
  
  /*----------------------- callback form -----------------------------*/
  $("#secondFormpinkish-greypinkish-grey").on('submit' , function(e) {
    //alert('fff');
    $('.icon-load').show();
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
      $('.icon-load').hide();
       $('#contactModal').modal('show');

    },
    error: function(jqXHR, textStatus, errorThrown) {
       
    }          
  });
      return false;
      e.preventDefault(); //Prevent Default action. 
  }); 
  /*----------------------- eof callback form -----------------------------*/

})();

