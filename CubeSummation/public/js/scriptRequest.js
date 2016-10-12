/**
 * Created by JiMMy on 10/09/2016.
 */

(function($) {
    $.fn.focusToEnd = function(defaultValue) {
        return this.each(function() {
            var prevValue = $(this).val();
            if (typeof prevValue == undefined || prevValue == "") {
                prevValue = defaultValue;
            }
            $(this).focus().val("").val(prevValue);
        });
    };
})(jQuery);

function runSummation() {
    $("#input").focusToEnd();
    $("#output").val(" ");
    if(validateData()){
        alert("Successful process!");
        run();
    }
}

function validateData() {

    var t = $("#input")[0];

    var cube = t.value.substr(0, t.selectionStart).split("\n");

    var T = cube[0];

    if(! $.isNumeric(T)){ alert("Error line 1:  T="+T+"  and  T must be numeric."); return false;}
    if(T < 1 || T > 50 || ! $.isNumeric(T)){ alert("Error line 1:  T="+T+"  and  1 <= T <= 50"); return false;}

    var lineIndicator = 1;

    for (var i = 0; i < T; i++) {

        var N = cube[lineIndicator].split(" ")[0];
        var M = cube[lineIndicator].split(" ")[1];

        if(! $.isNumeric(N)){ alert("Error line "+ (lineIndicator+1) +":  N="+N+"  and  N must be numeric."); return false;}
        if(! $.isNumeric(M)){ alert("Error line "+ (lineIndicator+1) +":  M="+M+"  and  M must be numeric."); return false;}

        if(N < 1 || N > 100 ){ alert("Error line "+ (lineIndicator+1) +":  N="+N+"  and  1 <= N <= 100 "); return false;}
        if(M < 1 || M > 1000 ){ alert("Error line "+ (lineIndicator+1) +":  M="+M+"  and  1 <= M <= 1000 "); return false;}

        lineIndicator++;

        for(var j = 0; j < M; j++){
            var command = cube[lineIndicator].split(" ")[0];

            if(command.toUpperCase() != "UPDATE" && command.toUpperCase() != "QUERY"){ alert("Command error: " + command + " not found."); return false;}

            if(command.toUpperCase() == "UPDATE") {
                var x = cube[lineIndicator].split(" ")[1];
                var y = cube[lineIndicator].split(" ")[2];
                var z = cube[lineIndicator].split(" ")[3];
                var W = cube[lineIndicator].split(" ")[4];
                if(x < 1 || x > N ){ alert("Error line "+ (lineIndicator+1) +":  x="+x+"  and  1 <= x <= N  where  N="+N); return false;}
                if(y < 1 || y > N ){ alert("Error line "+ (lineIndicator+1) +":  y="+y+"  and  1 <= y <= N  where  N="+N); return false;}
                if(z < 1 || z > N ){ alert("Error line "+ (lineIndicator+1) +":  z="+z+"  and  1 <= z <= N  where  N="+N); return false;}
                if(W < -(Math.pow(10, 9)) || W > Math.pow(10, 9)){ alert("Error line "+ (lineIndicator+1) +":  W="+W+"  and  -10^9 <= W <= 10^9"); return false;}
            }

            if(command.toUpperCase() == "QUERY") {
                var x1 = cube[lineIndicator].split(" ")[1];
                var y1 = cube[lineIndicator].split(" ")[2];
                var z1 = cube[lineIndicator].split(" ")[3];
                var x2 = cube[lineIndicator].split(" ")[4];
                var y2 = cube[lineIndicator].split(" ")[5];
                var z2 = cube[lineIndicator].split(" ")[6];
                if(x1 < 1 || x1 > x2 || x2 > N){ alert("Error line "+ (lineIndicator+1) +";  x1="+x1+"  x2="+x2+"  and  1 <= x1 <= x2 <= N  where  N="+N); return false;}
                if(y1 < 1 || y1 > y2 || y2 > N){ alert("Error line "+ (lineIndicator+1) +":  y1="+y1+"  y2="+y2+"  and  1 <= y1 <= y2 <= N  where  N="+N); return false;}
                if(z1 < 1 || z1 > z2 || z2 > N){ alert("Error line "+ (lineIndicator+1) +":  z1="+z1+"  z2="+z2+"  and  1 <= z1 <= z2 <= N  where  N="+N); return false;}
            }

            lineIndicator++;
        }
    }

    return true;
}

function run() {

    $.ajax({

        method: "POST",
        url: $('form[name=formRun]').attr('action'),
        data: {
            _token: $('input[name=_token]').attr('value'),
            input: $('textarea[name=input]').val(),
        },

        success: function (data) {
            $('textarea[name=output]').val(data.output);
        },

        error: function (data) {
            console.log('Error: ', data);
        }
    });
}