$(document).ready(function () {

    $('.filter-element').on('change', function () {
        $('#filter-form').submit();
    });
    
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

    $(document).on('click', '.btn-ajax-status', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var tdTag = $(this).parent();
        $.ajax({
            type: "GET",
            url: url,
            success: function (response) {
                tdTag.html(response);
                tdTag.find('a.btn-ajax-status').notify("Success", { className: 'success', position: 'top-center' });
            }
        });
    });

    $(document).on('click', '.btn-ajax-special', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var tdTag = $(this).parent();
        $.ajax({
            type: "GET",
            url: url,
            success: function (response) {
                tdTag.html(response);
                tdTag.find('a.btn-ajax-special').notify("Success", { className: 'success', position: 'top-center' });
            }
        });
    });

    $(document).on('change', '.btn-ajax-ordering', function (e) {
        e.preventDefault();
        let ele = $(this);
        var ordering = ele.val();
        var url = ele.data('url') + '/' + ordering;
        $.ajax({
            type: "GET",
            url: url,
            success: function () {
                ele.notify("Success", { className: 'success', position: 'top-center' });
            }
        });
    });

    $(document).on('change', '.btn-ajax-cate-id', function (e) {
        e.preventDefault();
        var cate_id = $(this).val();
        var url = $(this).data('url') + '/' + cate_id;
        var tdTag = $(this).parent();
        $.ajax({
            type: "GET",
            url: url,
            success: function (response) {
                tdTag.find('select.btn-ajax-cate-id').notify("Success", { className: 'success', position: 'top-center' });
            }
        });
    });

    $(document).on('change', '.btn-ajax-group-id', function (e) {
        e.preventDefault();
        var group_id = $(this).val();
        var url = $(this).data('url') + '/' + group_id;
        var tdTag = $(this).parent();
        $.ajax({
            type: "GET",
            url: url,
            success: function (response) {
                tdTag.find('select.btn-ajax-group-id').notify("Success", { className: 'success', position: 'top-center' });
            }
        });
    });
});