PreviewImage = function(uri) {
  
  //Get the HTML Elements
  imageDialog = $("#dialog");
  imageTag = $('#image');
  
  //Split the URI so we can get the file name
  uriParts = uri.split("/");
  
  //Set the image src
  imageTag.attr('src', uri);
  
  //When the image has loaded, display the dialog
  imageTag.load(function(){
    
    $('#dialog').dialog({
      modal: true,
      resizable: false,
      draggable: false,
      width: 'auto',
      title: uriParts[uriParts.length - 1]
    });
    
  }); 
}

$(document).ready(function() {
  
  $('body .imageLink').click(function(event){
    
    event.preventDefault();
    PreviewImage($(this).attr('href'));
    
  }); 
});