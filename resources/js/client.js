const axios = require('axios');
const moment = require('moment');

function submitBooking(e) {
    e.preventDefault();

    let first_name = document.getElementsByName("first_name")[0].value;
    let last_name = document.getElementsByName("last_name")[0].value;
    let email_address = document.getElementsByName("email_address")[0].value;
    let phone_number = document.getElementsByName("phone_number")[0].value;
    let table_size = document.getElementsByName("table_size")[0].value;
    let date = document.getElementsByName("date")[0].value;
    let time = document.getElementsByName("time")[0].value;
    let date_time = moment(date + ' ' + time).format("YYYY-MM-DD HH:SS:mm");
    let notes = document.getElementsByName("notes")[0].value;

    axios.post('/api/booking', {
        first_name: first_name,
        last_name: last_name,
        email_address: email_address,
        phone_number: phone_number,
        table_size: table_size,
        date_time: date_time,
        notes: notes
    }).then(function (response) {
        // Update UI and display response message
    });
}

let btnSubmitBooking = document.getElementById('submit-booking');
btnSubmitBooking.addEventListener("click", submitBooking);

const galleryItem = document.getElementsByClassName("gallery-item");
const lightBoxContainer = document.createElement("div");
const lightBoxContent = document.createElement("div");
const lightBoxImg = document.createElement("img");
const lightBoxPrev = document.createElement("div");
const lightBoxNext = document.createElement("div");

lightBoxContainer.classList.add("lightbox");
lightBoxContent.classList.add("lightbox-content");
lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

lightBoxContainer.appendChild(lightBoxContent);
lightBoxContent.appendChild(lightBoxImg);
lightBoxContent.appendChild(lightBoxPrev);
lightBoxContent.appendChild(lightBoxNext);

document.body.appendChild(lightBoxContainer);

let index = 1;

function showLightBox(n) {
    if (n > galleryItem.length) {
        index = 1;
    } else if (n < 1) {
        index = galleryItem.length;
    }
    let imageLocation = galleryItem[index - 1].children[0].getAttribute("src");
    lightBoxImg.setAttribute("src", imageLocation);
}

function currentImage() {
    lightBoxContainer.style.display = "block";

    let imageIndex = parseInt(this.getAttribute("data-index"));
    showLightBox((index = imageIndex));
}

for (let i = 0; i < galleryItem.length; i++) {
    galleryItem[i].addEventListener("click", currentImage);
}

function slideImage(n) {
    showLightBox((index += n));
}

function prevImage() {
    slideImage(-1);
}

function nextImage() {
    slideImage(1);
}

lightBoxPrev.addEventListener("click", prevImage);
lightBoxNext.addEventListener("click", nextImage);

function closeLightBox() {
    if (this === event.target) {
        lightBoxContainer.style.display = "none";
    }
}

lightBoxContainer.addEventListener("click", closeLightBox);
