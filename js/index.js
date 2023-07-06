$(".btnAdd").click(function () {
    // alert(a)
    $(this).attr("disabled", true);

    var card = $(this).attr("card");
    alert($(card).html());

    var kode = $(this).attr("kode");
    alert($(kode).html());
});