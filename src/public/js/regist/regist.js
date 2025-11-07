$(function () {
    console.log("hello");
    $("#registButton").on("click", function () {
        console.log("button click");
        $("#registForm").submit();
    });
})