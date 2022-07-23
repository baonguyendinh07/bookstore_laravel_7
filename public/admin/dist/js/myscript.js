$('div.alert').delay(5000).slideUp();

$('.btn-delete').click(function (e) {
    e.preventDefault();
    let url = $(this).attr('href');
    Swal.fire({
        title: 'Xác nhận?',
        icon: 'error',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xóa'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url;
        }
    })
});