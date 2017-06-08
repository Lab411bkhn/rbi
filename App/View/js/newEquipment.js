/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function addDesignCode(){
    var retVal = prompt("Enter Design code: ", "Design code here");
//    window.location("http://www.google.com");
       
}

$(document).ready(function() {
//    $("#btnAddDesignCode").on("click", function() {
//        var retVal = prompt("Enter Design code: ", "Design code here");; 
//    });
    $("#btnAddDesignCode").click(function() {
        var retVal = prompt("Enter Design code: ", "Design code here");; 
    });
}); 


function addSite(){
    var retVal = prompt("Enter Site : ", "here");
    window.location("index.php?data=home&action=newEquipment&left=equipment_left"); 
}

function addManufacturer(){
    var retVal = prompt("Enter Manufacturer : ", "here");
    window.location.replace("index.php?data=home&action=newEquipment&left=equipment_left");
    //document.write("You have entered : " + retVal); 
}

function addFacility(){
    var retVal = prompt("Enter Facility : ", "here");
    window.location.replace("index.php?data=home&action=newEquipment&left=equipment_left"); 
}
