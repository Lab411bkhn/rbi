/*$(document).ready(function() { 
    $(function() {
        document.getElementById("deleteItem").style.display = "none";
    }
}*/

function searchFunction() {
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("listTable");
    tr = table.getElementsByTagName("tr");
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      } 
    }
}

function checkBoxChangeHandler(){
    var x = document.getElementById('deleteItem');
    x.style.display = 'block';
}
function deleteItem(){
    var x = document.getElementById('deleteItem');
    x.style.display = 'none';
}
