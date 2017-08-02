/**
 * Created by User on 8/2/2017.
 */

$(document).ready(function () {
    $(document).on('change', 'select', function () {
        $('.needed_skills').append(
            '<span class="tag"><span>' + $(this).val() + '</span><a title="حذف" href="#"></a></span>'
        );
        if($('#skills').val() !== ''){
            $('#skills').val($('#skills').val()+","+$(this).val());
        }
        else{
            $('#skills').val($(this).val());
        }

    });
});