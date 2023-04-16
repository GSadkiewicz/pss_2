const content = document.getElementById("kontakt_content");
const form = document.getElementById("kontakt_edit_form");
const textarea = document.getElementById("kontakt_content_edit");

function enableEdit_kontakt() {
    textarea.value = content.innerHTML;
    form.style.display = "block";
    content.style.display = "none";
}