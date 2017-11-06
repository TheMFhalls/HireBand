$(document).ready(function(){
    $("input,select,textarea").addClass("form-control");
    $("input[type='submit'],button[type='submit']")
        .addClass("btn btn-sucess")
        .text("ENVIAR")
        .css({
            "margin-top": "10px",
            "background-color": "rgba(112, 12, 136, 0.7)",
            "color": "white",
            "font-weight": "bolder"
        });
});