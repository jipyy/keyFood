document.querySelectorAll('.category-box').forEach(box => {
    box.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        document.querySelectorAll('.category-box').forEach(item => item.classList.remove('active'));
        this.classList.add('active');
    });
});