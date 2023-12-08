function addProduct() {
    var from = document.getElementById('form')
    var productId = document.getElementById('productId').value;
    var productName = document.getElementById('productName').value;
    var productPrice = document.getElementById('productPrice').value;
    var table = document.getElementById("table1");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var a= /^[A-Za-z]+$/;       
    if (productId == null || productId == "" ) {
        alert("Please enter your productId!");
    }else if (productPrice == null || productPrice == "") {
        alert("Please enter your productPrice!");
     } else if (productName.match(a)) {
        cell1.innerHTML = productId;
        cell2.innerHTML = productName;
        cell3.innerHTML = "$"+ productPrice ;
    return false;
     }else{
       document.getElementById('test').innerHTML="**pls enter only alphabetic characters'";
       return false;
     } 
}
