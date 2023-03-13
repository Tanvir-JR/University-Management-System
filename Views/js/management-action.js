function isValid(){
    var M_pname = document.forms['MForm']['M_pname'].value;
    var M_id = document.forms['MForm']['M_id'].value;
    var M_position = document.forms['MForm']['M_position'].value;
    var M_address = document.forms['MForm']['M_address'].value;
    var M_phone = document.forms['MForm']['M_phone'].value;
    var M_email = document.forms['MForm']['M_email'].value;
   
    if(M_pname === ""){
    document.getElementById('M_pnameV').innerHTML = "Name empty";
    
    }
    if(M_id === ""){
    document.getElementById('M_idV').innerHTML = "Management ID empty";
    
    }
     if(M_position === ""){
    document.getElementById('M_positionV').innerHTML = "Position empty";

    }
    if(M_address === ""){
    document.getElementById('M_addressV').innerHTML = "Address empty";
    
    }
    if(M_phone === ""){
    document.getElementById('M_phoneV').innerHTML = "Phone no empty";
    
    }
    if(M_email === ""){
    document.getElementById('M_emailV').innerHTML = "Email empty";
    return false;
    }
    else{
        return true;
    }
    
    }
