const content = document.getElementById("onas_content");
const form = document.getElementById("onas_edit_form");
const textarea = document.getElementById("onas_content_edit");

function enableEdit_onas() {
    textarea.value = content.innerHTML;
    form.style.display = "block";
    content.style.display = "none";
}