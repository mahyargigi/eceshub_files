/**
 * Created by User on 8/2/2017.
 */

$(document).ready(function () {
    $(document).on('change', 'select#select_skills', function () {
        $('.needed_skills').append(
            '<span class="tag"><span>' + $(this).val() + '</span><a title="حذف" href="#"></a></span>'
        );
        if($('input[name=chosen_skills]').val() !== ''){
            $('input[name=chosen_skills]').val($('input[name=chosen_skills]').val()+","+$(this).val());
        }
        else{
            $('input[name=chosen_skills]').val($(this).val());
        }

    });
});