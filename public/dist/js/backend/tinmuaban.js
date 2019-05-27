CKEDITOR.replace( 'description', {
    filebrowserBrowseUrl: '../ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl: '../ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
} );
$(document).ready(function(){
$("#vietbai").click(function(){
    if($("#post").css('display') === "none"){
        $("#post").css('display',"flex");
    }else{
        $("#post").css('display',"none")
    }
});
});
function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#imagePreview').css('background-image', 'url('+e.target.result +')');
        $('#imagePreview').hide();
        $('#imagePreview').fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
}
}
$("#imageUpload").change(function() {
    readURL(this);
});