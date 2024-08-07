document.addEventListener('DOMContentLoaded', function () {
    const dropdownButtons = document.querySelectorAll('.profile-button');
    const dropdownMenus = document.querySelectorAll('.profile-menu');

    dropdownButtons.forEach((button, index) => {
        button.addEventListener('click', function () {
            const dropdownMenu = dropdownMenus[index];
            dropdownMenu.style.top = `${button.offsetTop + button.offsetHeight}px`;
            dropdownMenu.style.left = 1300+`px`; // Adjust position to the left
            dropdownMenu.classList.toggle('show');
        });
    });

    document.addEventListener('click', function (e) {
        dropdownButtons.forEach((button, index) => {
            const dropdownMenu = dropdownMenus[index];
            if (!button.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    });
});