const inputCheck = document.getElementById('submitBtn');
const labelCheck = document.getElementById('gridCheck');

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