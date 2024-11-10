import "./bootstrap";

const inputFile = document.querySelector("#image_profile");
const customInputFile = document.querySelector(".custom__profile-image-input");

customInputFile.addEventListener("click", () => {
    inputFile.click();
});
