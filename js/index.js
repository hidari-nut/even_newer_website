var newPrice = 0;
$(".btnAdd").click(function () {
    // alert(a)
    $(this).attr("disabled", true);
    
    var name= $(this).attr("name");
    var price =parseInt($(this).attr("price"));

    var existingText = $("#cartcontain").text();
    var newText = name + " (Rp." + price + ")";
    $("#cartcontain").text(existingText + "\n" + newText);

    newPrice += price
    $("#carttotal").text("TOTAL (Rp." +newPrice+")");

});