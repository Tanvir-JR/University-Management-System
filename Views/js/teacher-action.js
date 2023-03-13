function isValid(){
    var T_pname = document.forms['TForm']['T_pname'].value;
    var T_id = document.forms['TForm']['T_id'].value;
    var T_position = document.forms['TForm']['T_position'].value;
    var T_address = document.forms['TForm']['T_address'].value;
    var T_phone = document.forms['TForm']['T_phone'].value;
    var T_email = document.forms['TForm']['T_email'].value;
   
    if(T_pname === ""){
    document.getElementById('T_pnameV').innerHTML = "Name empty";
    
    }
    if(T_id === ""){
    document.getElementById('T_idV').innerHTML = "Teacher ID empty";
    
    }
     if(T_position === ""){
    document.getElementById('T_positionV').innerHTML = "Position empty";

    }
    if(T_address === ""){
    document.getElementById('T_addressV').innerHTML = "Address empty";
    
    }
    if(T_phone === ""){
    document.getElementById('T_phoneV').innerHTML = "Phone no empty";
    
    }
    if(T_email === ""){
    document.getElementById('T_emailV').innerHTML = "Email empty";
    return false;
    }
    else{
        return true;
    }
    
    }
