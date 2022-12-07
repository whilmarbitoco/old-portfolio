function checkscope() {
    const popupContainer = document.querySelector(".msg-ctt");
    const  popupButton = document.querySelector(".popup-ctt");
    popupContainer.classList.add("active");
    popupButton.addEventListener("click", () => {
    popupContainer.classList.remove("active");
    })
    }