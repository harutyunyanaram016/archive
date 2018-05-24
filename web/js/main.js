$(document).ready(function () {
    $("#checkbox").change(function () {
        if($(this).is(':checked')){
            $(".tr").hide()
            $(".red").show()
        }else{
            $(".tr").show()
        }
    })
})