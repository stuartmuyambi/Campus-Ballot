
// Toggle password visibility
function togglePassword() {
    let x = document.getElementById("password");
    if (x.type === "password") {
    x.type = "text";
    } else {
    x.type = "password";
    }
    }

// Accordion
let acc = document.getElementsByClassName("accordion");
let i;
for (i = 0; i < acc.length; i++) {  
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.maxHeight){panel.style.maxHeight = null;
        } else {      
            panel.style.maxHeight = panel.scrollHeight + "px";    
        }   });
    }