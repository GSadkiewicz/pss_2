const findButton = document.getElementById("findButton");
const backButton = document.getElementById("backButton");
const selectTime = document.getElementById("selectTime");
const Data = document.getElementById("Data");
const collectDateInput = document.getElementById("collectDate");
const returnDateInput = document.getElementById("returnDate");
const priceInput = document.getElementById("Item_price");
const totalPriceDisplay = document.getElementById("totalPrice");
const days = document.getElementById("days");


findButton.addEventListener("click", function() {
  if (!firstStepValidation()) {
    selectTime.style.display = "none";

    let diffrence = new Date(returnDateInput.value).getTime() - new Date(collectDateInput.value).getTime();
    let dni = Math.ceil(diffrence / (1000 * 3600 * 24));
    let cena = dni * parseInt(priceInput.value);
    
    priceInput.value = cena;
    days.innerHTML = dni;
    totalPriceDisplay.innerHTML = cena;
    Data.style.display = "block";
  }
});


backButton.addEventListener("click", function() {
  selectTime.style.display = "block";
  Data.style.display = "none";
});


collectDateInput.setAttribute("min", getFormattedDate(new Date()));
returnDateInput.setAttribute("min", getFormattedDate(new Date()));

function getFormattedDate(dateInput) {
  const d = new Date(dateInput);
  return (
    d.getFullYear() +
    "-" +
    ("0" + (d.getMonth() + 1)).slice(-2) +
    "-" +
    ("0" + d.getDate()).slice(-2)
  );
}

function firstStepValidation() {
  const city = document.getElementById("city");
  const collectDate = document.getElementById("collectDate");
  const returnDate = document.getElementById("returnDate");
  let error = false;

  if (collectDate.value == "" || new Date(collectDate.value) < new Date()) {
    error = true;
    collectDate.classList.add("error");
  } else {
    collectDate.classList.remove("error");
  }

  if (
    returnDate.value == "" ||
    new Date(returnDate.value) < new Date() ||
    new Date(returnDate.value) <= new Date(collectDate.value)
  ) {
    error = true;
    returnDate.classList.add("error");
  } else {
    returnDate.classList.remove("error");
  }

  return error;
}

function secondStepValidation() {
  const name = document.getElementById("name");
  const surname = document.getElementById("surname");
  const phone = document.getElementById("phone");
  const email = document.getElementById("email");
  let error = false;

  if (name.value == "" || name.value.length < 3) {
    name.classList.add("error");
    error = true;
  } else {
    name.classList.remove("error");
  }
  if (surname.value == "" || surname.value.length < 3) {
    surname.classList.add("error");
    error = true;
  } else {
    surname.classList.remove("error");
  }
  if (phone.value == "" || phone.value.length !== 9) {
    phone.classList.add("error");
    error = true;
  } else {
    phone.classList.remove("error");
  }

  return error;
}

function validate() {
  if (secondStepValidation()) {
    return false;
  } else {
    document.getElementById("reservationForm").submit();
    return true;
  }
}
