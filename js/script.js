let btn = $("#btn-process");

btn.on("click", (e) => {
    let frm = $("#frm-process");
    let data = frm.serialize();
    e.preventDefault();
    $.ajax({
        method: 'POST',
        data: data,
        url: 'process.php',
        success: function (response) {
            $("#convert").html(response);
        },

    });

});