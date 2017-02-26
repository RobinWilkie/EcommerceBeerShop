/* $('img').hide().one("load",function(){
    $(this).fadeIn(1000);
}).each(function(){
    if(this.complete) $(this).trigger("load");
}); */

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}