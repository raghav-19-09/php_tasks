function formValidation(){
    
    var name = document.getElementById('name').value;
    var mail = document.getElementById('email').value;
    var validMail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var a = /^[A-Za-z]+$/;    
    if (!name.match(a) ) {
        alert("please fill alphabetic characters");
        return false;
    }
    if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;
    }
    if (mail==null || mail==""){  
        alert("email can't be blank");  
        // return false;
    }
    if (!mail.match(validMail))
    {
        alert("InValid email address!");
      return false;
    }
    
    // if(mail!=validMail)
    // {
    //     document.getElementById('message').innerHTML="You have entered an invalid email address!";
    //     return (false)
    
    // } if(name!=a) {
    //     document.getElementById('msg').innerHTML="**please enter alphabetic characters";
    //     return false;
    // }
     
     
   
    }
