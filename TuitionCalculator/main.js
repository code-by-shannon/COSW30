document.addEventListener("DOMContentLoaded", function () {
    const unitSelect = document.getElementById("units");
    const preview = document.getElementById("unit-preview");

    unitSelect.addEventListener("change", function () {
        preview.textContent = "You selected " + unitSelect.value + " units.";
    });
});

document.addEventListener("DOMContentLoaded", function(){
    const res_select = document.querySelectorAll("input[name='resident']");
    const resident_preview = document.getElementById('resident_preview');

    res_select.forEach(function(radio) {
        radio.addEventListener('change', function(){
            resident_preview.textContent = `You selected ${this.value} status`;
        });
    });
});