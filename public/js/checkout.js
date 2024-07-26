document.addEventListener('DOMContentLoaded', () => {
    function formatCurrency(value, currency = 'IDR', locale = 'id-ID') {
        const formatter = new Intl.NumberFormat(locale, {
            style: 'currency',
            currency: currency,
            minimumFractionDigits: 0,  
            maximumFractionDigits: 0   
        });
        return formatter.format(value);
    }

    function updateButtonState(card) {
        const countSpan = card.querySelector('.count');
        if (countSpan) {
            const count = parseInt(countSpan.getAttribute('data-count'), 10);
            if (isNaN(count)) {
                console.error('Invalid count value:', countSpan.getAttribute('data-count'));
                return;
            }
            const decrementBtn = card.querySelector('.decrement');
            if (decrementBtn) {
                decrementBtn.disabled = count <= 0;
            }
        } else {
            console.error('Count span not found in card:', card);
        }
    }

    function updateTotalPrice() {
        const totalPriceElement = document.querySelector('.checkout-total .total-price');
        if (totalPriceElement) {
            const overallTotalPrice = calculateOverallTotalPrice();
            totalPriceElement.textContent = formatCurrency(overallTotalPrice); // Format mata uang
        } else {
            console.error('Total price element not found.');
        }
    }

    function calculateOverallTotalPrice() {
        const cardDetailsElements = document.querySelectorAll('.card-details');
        let overallTotalPrice = 0;

        cardDetailsElements.forEach(card => {
            const countSpan = card.querySelector('.count');
            const priceElement = card.querySelector('.card-price');

            if (countSpan && priceElement) {
                const count = parseInt(countSpan.getAttribute('data-count'), 10);
                const price = parseFloat(priceElement.getAttribute('data-price'));

                if (isNaN(count)) {
                    console.error('Invalid count value:', countSpan.getAttribute('data-count'));
                }
                if (isNaN(price)) {
                    console.error('Invalid price value:', priceElement.getAttribute('data-price'));
                }

                if (!isNaN(count) && !isNaN(price)) {
                    overallTotalPrice += count * price;
                }
            } else {
                console.error('One or more elements not found in card-details:', card);
            }
        });

        return overallTotalPrice;
    }

    function removeEmptyCards() {
        document.querySelectorAll('.card').forEach(card => {
            const countSpan = card.querySelector('.count');
            if (countSpan) {
                const count = parseInt(countSpan.getAttribute('data-count'), 10);
                if (!isNaN(count) && count === 0) {
                    card.remove(); 
                }
            }
        });
    }

    document.querySelectorAll('.decrement, .increment').forEach(button => {
        button.addEventListener('click', (event) => {
            const card = event.target.closest('.card-details');
            if (card) {
                const countSpan = card.querySelector('.count');
                let count = parseInt(countSpan.getAttribute('data-count'), 10);
                if (isNaN(count)) {
                    console.error('Invalid count value before update:', countSpan.getAttribute('data-count'));
                    return;
                }

                if (event.target.classList.contains('decrement')) {
                    if (count > 0) {
                        count--;
                    }
                } else if (event.target.classList.contains('increment')) {
                    count++;
                }

                countSpan.setAttribute('data-count', count);
                countSpan.textContent = count;

                updateButtonState(card);
                updateTotalPrice();
                removeEmptyCards(); 
            }
        });
    });

    // Inisialisasi pengecekan card kosong dan status tombol pada load awal
    document.querySelectorAll('.card-details').forEach(card => {
        updateButtonState(card);
    });

    updateTotalPrice();
    removeEmptyCards(); // Panggil fungsi pada load awal untuk menghapus card yang kosong
});
