$(function(){
    $(document).on('click', '.btn-add', function(e){
        e.preventDefault();

        var controlForm  = $('.controls form:first .exercises'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry     = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .removeClass('positive').addClass('negative')
            .html('<i class="minus icon"></i>');
    }).on('click', '.btn-remove', function(e){
        $(this).parents('.entry:first').remove();

        e.preventDefault();
        return false;
    });
});
