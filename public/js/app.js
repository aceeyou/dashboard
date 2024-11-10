let eyeBtnOpen = false;
const eyeBtn = document.querySelector("#showPassword");
const pwInput = document.querySelector("#password");
// eyeBtn.addEventListener("click", () => {
//     console.log("hi");
//     eyeBtnOpen = !eyeBtnOpen;
//     pwInput.setAttribute("type", eyeBtnOpen ? "text" : "password");
//     eyeBtn.innerHTML = eyeBtnOpen
//         ? "<x-pepicon-eye class='eye-icon eye-btn' tabindex='1' />"
//         : "<x-pepicon-eye-closed-off class='eye-icon eye-btn' tabindex='1' />";
// });

const inputFile = document.querySelector("#image");
const customInputFile = document.querySelector(".custom__profile-image-input");
const preview = document.querySelector("#uploaded_image");

customInputFile.addEventListener("click", () => {
    inputFile.click();
});

inputFile.addEventListener("change", () => {
    const [img] = inputFile.files;
    console.log(img);
    preview.src = URL.createObjectURL(img);
});
