function isValid(){
    var S_pname = document.forms['SForm']['S_pname'].value;
    var S_id = document.forms['SForm']['S_id'].value;
    var S_batch = document.forms['SForm']['S_batch'].value;
    var S_address = document.forms['SForm']['S_address'].value;
    var S_phone = document.forms['SForm']['S_phone'].value;
    var S_email = document.forms['SForm']['S_email'].value;
   
    if(S_pname === ""){
    document.getElementById('S_pnameV').innerHTML = "Name empty";
    
    }
    if(S_id === ""){
    document.getElementById('S_idV').innerHTML = "Student ID empty";
    
    }
     if(S_batch === ""){
    document.getElementById('S_batchV').innerHTML = "Batch empty";

    }
    if(S_address === ""){
    document.getElementById('S_addressV').innerHTML = "Address empty";
    
    }
    if(S_phone === ""){
    document.getElementById('S_phoneV').innerHTML = "Phone no empty";
    
    }
    if(S_email === ""){
    document.getElementById('S_emailV').innerHTML = "Email empty";
    return false;
    }
    else{
        return true;
    }
    
    }
