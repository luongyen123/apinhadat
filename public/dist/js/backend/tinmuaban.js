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
        $.ajax({
            type: 'POST',
            CrossDomain:true,
            url: '/api/getTinhThanh'// getting filed value in serialize form
        })
        .done(function(data){
            // console.log(data.status);
            if(data.status === 200){
                // console.log(data.data.token);
                var tinhthanh = data.data.datas;
                for(let c in tinhthanh){
                    $('#tinhthanh').append($('<option>',{value: tinhthanh[c].id,text: tinhthanh[c].tinh}));
                }
            }    
        });// if getting done then ca
    });
    $("input[type='radio'].check").click(function() {
        if($(this).is(':checked')) {
            if ($(this).val() == 1) {
                $("#diachi").css('display','block');
                $("#loaitin").css('display','none');
            }else{
                $("#diachi").css('display','none');
                $("#loaitin").css('display','block');
            }
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

$("#tinhthanh").change(function(){
    var value = $('#tinhthanh option:selected').val();
        $.ajax({
            type: 'POST',
            CrossDomain:true,
            url: '/api/getQuanHuyen',
            data: {matinh:value}// getting filed value in serialize form
        })
        .done(function(data){
            // console.log(data.status);
            if(data.status === 200){
                // console.log(data.data.token);
                var quanhuyen = data.data.datas;
                var html="";
                if(length(quanhuyen) == 0){
                    html= html + "<option value= 0>Chọn tỉnh thành trước</option>";
                }else{
                    for(let c in quanhuyen){
                        html= html + "<option value="+quanhuyen[c].id+">"+quanhuyen[c].tenqh+"</option>";                   
                   }
                }                
                $("#quanhuyenTP").html(html);
            }else{
                alert("Có lỗi xảy ra");
            }  
        });
    
});