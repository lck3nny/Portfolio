errs = 0;
nameErrs = getParameter("nErr");
emailErrs = getParameter("eErr");
subjectErrs = getParameter("sErr");
msgErrs = getParameter("mErr");

if(nameErrs != null){
    document.querySelector('.name').style.borderColor = "#FE5F55";
    document.querySelector('.name').style.borderWidth = "thick";
    errs += 1;  
}

if(emailErrs != null){
    document.querySelector('.email').style.borderColor = "#FE5F55";
    document.querySelector('.email').style.borderWidth = "thick";    
    errs += 1;  
}

if(subjectErrs != null){
    document.querySelector('.subject').style.borderColor = "#FE5F55";
    document.querySelector('.subject').style.borderWidth = "thick";    
    errs += 1;  
}

if(msgErrs != null){
    document.querySelector('.msg_body').style.borderColor = "#FE5F55";
    document.querySelector('.msg_body').style.borderWidth = "thick";    
    errs += 1;  
}

if(errs > 0){
    window.alert("There was a problem with some of your fields.")
}