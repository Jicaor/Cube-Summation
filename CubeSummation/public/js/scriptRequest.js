/**
 * Created by JiMMy on 10/09/2016.
 */

function runSummation() {
    $.ajax({
        method: "POST",
        url: $('form[name=formRun]').attr('action'),
        data: {
            _token: $('input[name=_token]').attr('value'),
            input: $('textarea[name=input]').val(),
        }
    }).done(function (msg) {
        $('textarea[name=output]').val(msg.output);
    });
}