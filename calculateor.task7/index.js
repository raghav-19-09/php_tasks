
function add(){
 first=parseInt(myform.first.value);
 second=parseInt(myform.second.value);
 result=first+second;
 myform.result.value=result;
 alert ('adding two value = ' +result);
}

function subtract() {
    first=parseInt(myform.first.value);
    second=parseInt(myform.second.value);
    result=first-second;
    myform.result.value=result;
    alert ('sub of two value = ' +result);
}

function multiply(){
    first=parseInt(myform.first.value);
    second=parseInt(myform.second.value);
    result=first*second;
    myform.result.value=result;
    alert ('mul of two value  = ' +result);
}
function divide(){
    first=parseInt(myform.first.value);
    second=parseInt(myform.second.value);
    result=first/second;
    myform.result.value=result;
    alert ('div of two value  = ' +result);
}
function reset() {
    document.getElementById("form").reset();
  }

        