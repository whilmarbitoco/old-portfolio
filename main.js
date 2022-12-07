const popupContainer = document.querySelector(".popup");
const  popupButton = document.querySelector(".popup-btn");
const  popupButton2 = document.querySelector(".popup-lrm");

popupButton.addEventListener("click", () => {
    popupContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
})

setTimeout( () => {
    if(!localStorage.getItem("cookieBannerDisplayed"))
    popupContainer.classList.add("active");
}, 1000)

popupButton2.addEventListener("click", () => {
    popupContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
})

setTimeout( () => {
    if(!localStorage.getItem("cookieBannerDisplayed"))
    popupContainer.classList.add("active");
}, 1000)
