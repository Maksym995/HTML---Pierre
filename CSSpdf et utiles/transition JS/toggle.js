function toggle() {
    "use strict";

    var x=document.querySelectorAll("#course p");

    x.forEach(elem => {
        if (elem.className === "barre") {
            elem.className += " go";
        } else {
            elem.className = "barre";
        }
    });
}