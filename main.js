console.log("Hello World");
document.addEventListener("DOMContentLoaded", function () {
    $(".cross").hide();
    $(".menu").hide();
    $(".hamburger").click(() => {
        $(".menu").slideToggle("slow", function () {
            $(".hamburger").hide();
            $(".cross").show();
        });
    });

    $(".cross").click(() => {
        $(".menu").slideToggle("slow", function () {
            $(".cross").hide();
            $(".hamburger").show();
        });
    });
});