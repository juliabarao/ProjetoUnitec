const modalOverlay = document.querySelector(".modal")
const cards1 = document.querySelectorAll(".card1")

for (const card of cards1) {
    card.addEventListener("click", function() {
        const videoid1 = card.getAttribute("id")
        modalOverlay.classList.add("active")
        modalOverlay.querySelector("iframe").src = `https://www.youtube.com/embed/ol8V8QLNTaA/ ${videoid1}`
    })
}

document.querySelector(".close-modal").addEventListener("click", function() {
    modalOverlay.classList.remove("active")
    modalOverlay.querySelector("iframe").src = ""
})