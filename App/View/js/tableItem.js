/*$(document).ready(function() { 
    $(function() {
        document.getElementById("deleteItem").style.display = "none";
    }
}*/

$(document).ready(function() { 
    $(function() {
        var x = document.getElementById('deleteItem'); 
        x.style.display = 'none';
    });
});

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

/*function checkBoxChangeHandler(){
    var x = document.getElementById('deleteItem');    
    if(x.style.display == 'none'){
        x.style.display = 'block';
    }
}*/
function checkBoxChangeHandler(){
    var x = document.getElementsByClassName("checkBoxClass");
    var y = document.getElementById('deleteItem');     
    for (var i = 0; i < x.length; i++) {
        if(x[i].checked) {  
            if(y.style.display === 'none'){
                y.style.display = 'block';
            }
            return;
        }   
        if(y.style.display === 'block'){
            y.style.display = 'none';
        }
    }
}

function checkBoxChangeHandlerEq(){
    var x = document.getElementsByClassName("checkBoxEquipment");
    var y = document.getElementById('deleteItem');     
    for (var i = 0; i < x.length; i++) {
        if(x[i].checked) {  
            if(y.style.display === 'none'){
                y.style.display = 'block';
            }
            return;
        }   
        if(y.style.display === 'block'){
            y.style.display = 'none';
        }
    }
}

function deleteItem(){
    var x = document.getElementsByClassName("checkBoxClass");
    table = document.getElementById("listTable");
    tr = table.getElementsByTagName("tr");
    var items = [];
    for (var i = 0; i < x.length; i++) {
        if(x[i].checked) {
            //Lay Id bat dau tu dong thu 2, bo qua ten cot
            td = tr[i+1].getElementsByTagName("td")[0];
            if (td) {
                items.push(td.innerHTML);
            }             
        }
    }
    
    var dataq = JSON.stringify(items);
    
    $.ajax({
        url: "../../Controller/home/equipmentUnitController.php",
        data: 'act=delete&equUnitCode=' + dataq,
        success: function(req){
            alert("Delete Unit Code" + dataq + " successfully! ");
            $(location).attr('href', '../../View/home/index.php?data=home&action=listEquipmentUnit&left=home_left');
        }
    });
}

function deleteEquipment(){
    var x = document.getElementsByClassName("checkBoxEquipment");
    table = document.getElementById("listTable");
    tr = table.getElementsByTagName("tr");
    var items = [];
    for (var i = 0; i < x.length; i++) {
        if(x[i].checked) {
            //Lay Id bat dau tu dong thu 2, bo qua ten cot
            td = tr[i+1].getElementsByTagName("td")[0];
            if (td) {
                items.push(td.innerHTML);
            }             
        }
    }
    
    var dataq = JSON.stringify(items);
    
    $.ajax({
        url: "../../Controller/home/equipmentController.php",
        data: 'act=delete&eqItemNo=' + dataq,
        success: function(){
            alert("Delete Equipment " + dataq + " successfully! ");
            $(location).attr('href', '../../View/home/index.php?data=home&action=listEquipment&left=home_left');
        }
    });
}




