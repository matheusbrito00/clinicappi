var Toggle = null;
var Especialidade = null;
var CRM = null;

window.addEventListener('load', () => {
    Toggle = document.querySelector("#flexSwitchCheckDefault");
    Especialidade = document.querySelector(".especialidadeMed");
    CRM = document.querySelector(".crmMed");

    Toggle.addEventListener('change', showInput);
})

function showInput () {
    if(!Toggle.checked) {
        Especialidade.style.display = "none";
        CRM.style.display = "none";
    } else {
        Especialidade.style.display = "flex";
        CRM.style.display = "flex";
    }
}
