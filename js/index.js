const navToggle = document.querySelector('.nav_toggle');
const navLinks = document.querySelectorAll('.nav_link');

navToggle.addEventListener('click', () => {
    document.body.classList.toggle('nav-open');
});

navLinks.forEach(link =>{
    link.addEventListener('click', () =>{
        document.body.classList.remove('nav-open');
    });
})

function getParameter(paramName){
    let myParams = new URLSearchParams(window.location.search);
    return myParams.get(paramName)
}

mailsent = getParameter("mailsent");
if(mailsent != null){
    window.alert("Mail Sent! We will get back to you shortly.")
}

