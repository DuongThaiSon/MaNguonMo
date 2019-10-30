$(document).ready(function () {
    $('.btn-delete').click(function () {
        alert( "Bạn có chắc chắn muốn xóa ?" );
    });
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );
});
