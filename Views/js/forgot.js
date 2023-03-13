function isValid(){
    var p_email = document.forms['PForm']['p_email'].value;
    var n_pass = document.forms['PForm']['n_pass'].value;
 
   
    if(p_email === ""){
    document.getElementById('pemailjsE').innerHTML = "* Email empty";
    
    }
    if(n_pass === ""){
    document.getElementById('npassjsE').innerHTML = "*New password empty";
    
    }
   
    else{
        return true;
    }
    
    }