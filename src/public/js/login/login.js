$(function () {
    console.log("hi");

    $("#loginButton").on("click", function () {
        console.log("login");
        $("#loginFormArea").submit();
    });
})