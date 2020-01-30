
// Toggle password visibility
function togglePassword() {
    let x = document.getElementById("password");
    if (x.type === "password") {
    x.type = "text";
    } else {
    x.type = "password";
    }
    }

// Filter table content on the voting page
function myFunction() {
    // Declare variables 
    let input, filter, table, tr, td, i;  
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                      } else {
                          tr[i].style.display = "none";      
                        }
                    }   
                }
            }

