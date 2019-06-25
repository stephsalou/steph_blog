/**
 * Dynamically add/remove table row using jquery
 *
 * @author Risul Islam risul321@gmail.com
 **/

/*Add row event*/
$(document).on('click', '.rowfy-addrow', function () {
    let el = $(this);
    $('#modalConfirmCreation').modal('show');
    $('#YesCreation').on('click', function (e) {
        e.preventDefault();
        let rowfyable = $(el).closest('table');
        let last = $('tbody tr:last', rowfyable);
        let inputs = $('td .form-control', last);
        let prevForm = $('form#actualForm', last);
        let data=$(prevForm).serializeArray();
        console.dir(data);
        $.ajax({
            url: 'post',
            data: data,
            dataType: 'json',
            type: 'POST',
            success: function (json) {
                console.log('success');
                console.dir(json);
            },
            error: function (err) {
                console.log('error');
                console.dir(err);
            }
        });
        $(prevForm).removeAttr('id', 'actualForm');
        $(inputs).removeAttr('form', 'actualForm');
        $(inputs).attr('readonly', 'readonly').attr('disable', 'disable').addClass('success');
        let lastRow = `<tr>
        <form id="actualForm" class="Posts">
                            <td><input form="actualForm" class="form-control" name="title"  type="text"></td>
                            <td><input form="actualForm" class="form-control" name="sentence"  type="text"></td>
                            <td ><textarea form="actualForm" name="content" class="form-control text-area"  rows="1"></textarea></td>
                            <td><i class="fas fa-times fa-3x"></i></td>
                            <td><select name="media"  class="form-control" style="box-sizing: border-box!important;display: block !important;" form="actualForm">
                                    <option value="0">image</option>
                                    <option value="1">videos</option>
                                </select></td>
                            <td><input form="actualForm" class="form-control" name="link"  type="text"></td>
                            <td><i class="fas fa-times fa-3x"></i></td>
                            <td><select name="category" class="form-control" style="box-sizing: border-box!important;display: block !important;" form="actualForm">
                                    <option value="divers">divers</option>
                                    <option value="science">science</option>
                                    <option value="informatique">informatique</option>
                                    <option value="magie">informatique</option>
                                </select></td>
                                <td><td><button type="button" class="btn btn-sm rowfy-addrow btn-success">+</button></td></td>
                        </form>
</tr>`;
        $('input', lastRow).val('');
        $('tbody', rowfyable).append(lastRow);
        $(el).removeClass('rowfy-addrow btn-success').addClass('rowfy-deleterow btn-danger').text('-');
        $('#modalConfirmCreation').modal('hide');
    });

});

/*Delete row event*/
$(document).on('click', '.rowfy-deleterow', function () {
    var el = $(this);
    $('#modalConfirmDelete').modal('show');
    $('#YesConfirm').on('click', function () {
        $(el).closest('tr').remove();
        $('#modalConfirmDelete').modal('hide')
    });
    // $(this).closest('tr').remove();
});


/*Initialize all rowfy tables*/
$('.rowfy').each(function () {
    $('tbody', this).find('tr').each(function () {
        $(this).append('<td><button type="button" class="btn btn-sm '
            + ($(this).is(":last-child") ?
                'rowfy-addrow btn-success">+' :
                'rowfy-deleterow btn-danger">-')
            + '</button></td>');
    });
});
