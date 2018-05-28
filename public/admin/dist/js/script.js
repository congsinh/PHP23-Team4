$.ajaxSetup({//add this when call ajax
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//Modal delete
$(document).on('click', '.del', function () {
    $form = $(this).find("form");
    $("#btnDel").on("click", function () {
        $form.submit();
    });
});

$(document).ready(function(){
    $(".notify.success").delay(6000).slideUp();
});