$(document).ready(function() {

  // Show Posts with Ajax
  $("#formSearch").submit(function(e) {	
    e.preventDefault();

    var action = $("#formSearch").attr('action');
    var method = $("#formSearch").attr('method');
    
    var params = {
      "title" : $("#title").val(),
      "date": $("#date").val(),
      "state": $("#state").val()
    };
        
    $.ajax({
      data: params,
      url: action,
      dataType: 'html',
      type: method,
      success: function(response) {
        $("#tablePosts").html(response);
      },
      error: function(error) {
        console.log('Error', error);
      }
    });
  });
});

// Show Preview Modal
function showPostPreview() {
  var titlePost = $('#titleNewPost').val();
  var contentPost = tinymce.activeEditor.getContent();

  $('#previewTitle').html(titlePost);
  $('#previewContent').html(contentPost);
}