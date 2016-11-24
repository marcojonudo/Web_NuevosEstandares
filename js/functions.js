/**
 * Main function to be executed at the start
 */
function loadFunctions(){
    loadMenuResponsive();
}

/**
 * Load responsive menu click on burguer button
 */
function loadMenuResponsive() {
    $("header .menu-button").click(
        function(){
            $(this).closest("header").toggleClass("active");
        }
    );
}
