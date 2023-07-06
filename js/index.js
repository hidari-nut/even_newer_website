$(".btnAdd").click(function () {
    // alert(a)
    $(this).attr("disabled", true);
    var card = $(this).attr("card");
    var cardContent = $(card).html();
    $("#cartcontain").text(cardContent);
});