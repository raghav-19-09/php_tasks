<!DOCTYPE html>
<html>
<head>
    <script>
        function testVariable() {
            var strText = document.getElementById("textone").value;          
            var strText1 = document.getElementById("textTWO").value;
            var result = strText + ' ' + strText1;
            document.getElementById('spanResult').textContent = result;
             
        }
    </script>
</head>
<body> 
    <input type="text" id="textone" />
    <input type="text" id="textTWO" />
    <button  onclick="testVariable()">Submit</button> <br />
    <span id="spanResult">

    </span>
   
     
</body>
</html>












function validateform() {
    var form = document.getElementById('form')
    var name = document.getElementById('name').value;
    var age = document.getElementById('age').value;
    var weight = document.getElementById('weight').value;   
    if (name == null || name == "") {
        alert("Please enter your name!");
    } else if (age == null || age == " " || age <= "4") {
        // alert('!!Please enter your valid age!');
    } else if (age >= "5" || age <= "7") {
        if (weight == "20") { 
            // document.write("hello" +name + "!!weight is perfect .");
            // document.write(" weight is perfect") ;         
            // document.getElementById("spanResult").innerHTML= " weight is perfect";
        } else if (weight <= "19") {
            document.getElementById("spanResult").innerHTML="!Your weight less than recommended value of 20kg  at an age 7!";
        } else if (weight >= 21) {
            document.getElementById("spanResult").innerHTML="!Your weight greater than recommended value of 20kg  at an age 7!";
        }
    } else if (age >= "8" || age <= "10") {
        if (weight == "25") {
            document.getElementById("spanResult").innerHTML="!!weight is perfect!!";
        } else if (weight <= "24") {
            document.getElementById("spanResult").innerHTML="!Your weight less than recommended value of 25kg  at an age 10!";
        } else if (weight >= 26) {
            document.getElementById("spanResult").innerHTML="!Your weight greater than recommended value of 25kg  at an age 10!";
        }
    } else if (age >= "11" || age <= "15") {
        if (weight == "30") {
            document.getElementById("spanResult").innerHTML="!!weight is perfect!!";
        }else if (weight <= "29") {
            document.getElementById("spanResult").innerHTML="!Your weight less than recommended value of 30kg  at an age 15!"; 
        } else if (weight >= "31") {
            document.getElementById("spanResult").innerHTML='!Your weight greater than recommended value of 30kg  at an age 15!';
        }
    } else if (age >= "16" || age <= "20") {
        if (weight == "40") {
            document.getElementById("spanResult").innerHTML="!!weight is perfect!!";  
        }else if (weight <= "39") {
            document.getElementById("spanResult").innerHTML="!Your weight less than recommended value of 40kg  at an age 40!"; 
        } else if (weight >= 41) {
            document.getElementById("spanResult").innerHTML="!Your weight greater than recommended value of 40kg  at an age 40!";  
        }
    }
}  
