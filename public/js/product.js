document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById("popup");
    const closeBtn = document.querySelector(".close-btn");

    document.querySelectorAll(".view-details").forEach(button => {
        button.addEventListener("click", function() {
            popup.style.display = "flex";
        });
    });

    closeBtn.addEventListener("click", function() {
        popup.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    });
});
