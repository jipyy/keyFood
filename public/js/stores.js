document.querySelectorAll('.user-description-s').forEach(element => {
    const text = element.textContent.trim();
    const words = text.split(' ');

    if (words.length > 7) {
        const truncatedText = words.slice(0, 7).join(' ') + '...';
        element.textContent = truncatedText;
    }
});