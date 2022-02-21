const cookieContainer = document.querySelector('.cookie-container');
const cookieButtonAcc = document.querySelector('.btn-success');

/* Cookies */
cookieButtonAcc.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplay", "true");
})

setTimeout( () => {
    if(!localStorage.getItem("cookieBannerDisplay"))
    cookieContainer.classList.add("active");
}, 2000);

/* Successful message form button to close*/
$().alert('close')