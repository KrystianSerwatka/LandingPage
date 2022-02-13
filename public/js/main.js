const inputCheck = document.getElementById('submitBtn');
const labelCheck = document.getElementById('gridCheck');
const cookieContainer = document.querySelector('.cookie-container');
const cookieButtonAcc = document.querySelector('.btn-success');

inputCheck.disabled = true;

labelCheck.addEventListener("click", function(){
    if(!labelCheck.checked){
        inputCheck.disabled = true;
        alert("Musisz wyrazić zgodę na przetwarzanie danych!");
    }
    else {
        inputCheck.disabled = false;
    }
});

/* Cookies */
cookieButtonAcc.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplay", "true");
})

setTimeout( () => {
    if(!localStorage.getItem("cookieBannerDisplay"))
    cookieContainer.classList.add("active");
}, 2000);