function toggle(){
    "use strict";

    var x=document.querySelector(".menu");

    if (x.className === "menu") {
        x.className += " affiche"; /* passe de classe="menu" à classe="menu afiche" */
    } else {
        x.className = "menu"; /* passe de class="menu affiche" à class="menu" */
    }
}