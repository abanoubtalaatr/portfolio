$(function () {
    // Multiple images preview in browser
    var imagesPreview = function (input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (let i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    $($.parseHTML(`<img class='col-md-3 float-left mb-4 ' style='height: 250px;'>`)).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };
    $('#gallery-photo-add').on('change', function () {
        imagesPreview(this, 'div.preview');
    });
});
// functon remove element from html 

$(".remove").click(function () {
    let idUser = $(this).parent().attr('id');
    let idImage =$(this).parent().attr('class');
    console.log($(`#image${idImage}`).val());
    let Image = $(`#image${idImage}`).val();
    $(this).parent().remove();
    deleteImage(Image, idUser);
});
//function to delete image from databasae
function deleteImage(image, idUser) {

    let url = '/dashboard/works/project/delete/image';
    var request = $.ajax({
        type: "POST",
        url: url,
        data: { Image: image, Id: idUser },
        dataType: "html",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    request.done(function (msg) {
      
    });

    // request.fail(function (jqXHR, textStatus) {
    //     alert("Request failed: " + textStatus);
    // });
}
function getDetailsImage() {

}
