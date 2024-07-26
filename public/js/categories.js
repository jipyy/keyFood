document.querySelectorAll('.category-box').forEach(box => {
    box.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        document.querySelectorAll('.category-box').forEach(item => item.classList.remove('active'));
        document.querySelectorAll('.showall').forEach(item => item.classList.remove('active'));
        this.classList.add('active');
    });
});

document.querySelectorAll('.showall').forEach(box => {
    box.addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelectorAll('.category-box').forEach(item => item.classList.remove('active'));
        this.classList.add('active');
    });
});