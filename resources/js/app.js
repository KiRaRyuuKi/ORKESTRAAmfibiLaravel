import './bootstrap';
import 'flowbite';
import 'flowbite-datepicker';
import 'flowbite/dist/datepicker.turbo.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function handleFileChange(event, previewId, containerId) {
    const file = event.target.files[0];
    if (!file) {
        console.error("Tidak ada file yang dipilih.");
        return;
    }

    const reader = new FileReader();
    reader.onload = function (e) {
        const previewContainer = document.getElementById(containerId);
        const img = document.getElementById(previewId);
        if (!img) {
            console.error("Elemen gambar pratinjau tidak ditemukan.");
            return;
        }
        img.setAttribute('src', e.target.result);
        img.classList.remove('hidden');
        previewContainer.style.display = 'none';
    };
    reader.onerror = function (e) {
        console.error("Kesalahan saat membaca file:", e);
    };
    reader.readAsDataURL(file);
}

function addImageChangeListener(dropzoneId, imagePreviewId, containerId) {
    const dropzone = document.getElementById(dropzoneId);
    if (!dropzone) {
        console.error("Elemen dropzone tidak ditemukan.");
        return;
    }
    dropzone.addEventListener('change', function (event) {
        handleFileChange(event, imagePreviewId, containerId);
    });
}

function updateHiddenInput() {
    const checkboxes = document.querySelectorAll('.accessory-checkbox:checked');
    const hiddenInput = document.getElementById('accessories');
    if (!hiddenInput) {
        console.error("Elemen input tersembunyi tidak ditemukan.");
        return;
    }
    const selectedValues = Array.from(checkboxes).map(checkbox => checkbox.value);
    hiddenInput.value = selectedValues.join(',');
}

function formatPriceInput(event) {
    const input = event.target;
    let value = parseFloat(input.value).toFixed(2);
    if (!isNaN(value)) {
        input.value = value;
    }
}

document.addEventListener('DOMContentLoaded', (event) => {
    const checkboxes = document.querySelectorAll('.accessory-checkbox');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateHiddenInput);
    });

    const priceInput = document.getElementById('price');
    if (priceInput) {
        priceInput.addEventListener('input', formatPriceInput);
        priceInput.addEventListener('blur', formatPriceInput);
    } else {
        console.error("Elemen input harga tidak ditemukan.");
    }

    addImageChangeListener('dropzone-image-1', 'image-1-preview', 'dropzone-image-1-container');
    addImageChangeListener('dropzone-image-2', 'image-2-preview', 'dropzone-image-2-container');
    addImageChangeListener('dropzone-image-3', 'image-3-preview', 'dropzone-image-3-container');
    addImageChangeListener('dropzone-image-4', 'image-4-preview', 'dropzone-image-4-container');
    addImageChangeListener('dropzone-image-5', 'image-5-preview', 'dropzone-image-5-container');
});



document.addEventListener('DOMContentLoaded', function () {
    const proceedToPaymentButton = document.getElementById('proceed-to-payment');

    if (proceedToPaymentButton) {
        proceedToPaymentButton.addEventListener('click', function (e) {
            e.preventDefault();

            const selectedOption = document.querySelector('input[name="delivery-option"]:checked')?.value;
            if (selectedOption) {
                localStorage.setItem('deliveryOption', selectedOption);
                localStorage.setItem('pickupPrice', selectedOption === 'pickup' ? '0.00' : '9.00');
            }

            const selectedTaxInput = document.querySelector('input[name="warranty"]:checked');
            if (selectedTaxInput) {
                const selectedTax = selectedTaxInput.value;
                localStorage.setItem('selectedTax', selectedTax);
            }

            const startDate = document.getElementById('start-date')?.value;
            const endDate = document.getElementById('end-date')?.value;

            if (startDate && endDate) {
                localStorage.setItem('startDate', startDate);
                localStorage.setItem('endDate', endDate);
            }

            window.location.href = this.href;
        });
    }

    const paymentPageContent = document.getElementById('payment-page-content');
    const paymentPageDates = document.getElementById('payment-page-date');
    const paymentPageDatesInput = document.getElementById('payment-page-date-input');
    const pickupPriceElement = document.getElementById('pickup-price');
    const taxPriceElement = document.getElementById('tax-price');
    const totalPriceElement = document.getElementById('total-price');
    const totalPriceInputElement = document.getElementById('total-price-input');

    if (paymentPageContent) {
        const deliveryOption = localStorage.getItem('deliveryOption');
        if (deliveryOption === 'pickup') {
            paymentPageContent.innerText = 'Jalan kaki ke toko';
        } else if (deliveryOption === 'delivery') {
            paymentPageContent.innerText = 'Manja minta di anterin';
        } else {
            paymentPageContent.innerText = 'No delivery option selected.';
        }
    }

    if (paymentPageDates) {
        const startDate = localStorage.getItem('startDate');
        const endDate = localStorage.getItem('endDate');

        if (startDate && endDate) {
            if (paymentPageDates) {
                paymentPageDates.innerText = `${startDate} to ${endDate}`;
            }
            if (paymentPageDatesInput) {
                paymentPageDatesInput.value = `${startDate} to ${endDate}`;
            }
        }
    }

    if (pickupPriceElement) {
        const pickupPrice = localStorage.getItem('pickupPrice');
        if (pickupPrice !== null) {
            pickupPriceElement.innerText = `$${pickupPrice}`;
        } else {
            pickupPriceElement.innerText = '$0.00';
        }
    }

    if (taxPriceElement || totalPriceElement || totalPriceInputElement) {
        const selectedTax = localStorage.getItem('selectedTax') || '0';
        const originalPrice = parseFloat(document.getElementById('original-price').innerText.replace('$', '').replace(',', ''));
        const pickupPrice = parseFloat(localStorage.getItem('pickupPrice') || '0');
        const taxPrice = parseFloat(document.getElementById('tax-price').innerText.replace('$', '').replace(',', ''));
        const TaxPrice = parseFloat(selectedTax);

        if (taxPriceElement) {
            taxPriceElement.innerText = `$${TaxPrice.toFixed(2)}`;
        }

        if (totalPriceElement) {
            const totalPrice = originalPrice + pickupPrice + taxPrice + TaxPrice;
            totalPriceElement.innerText = `$${totalPrice.toFixed(2)}`;
        }
    }

    function calculateTotal() {
        const originalPriceElement = document.getElementById('original-price');
        const savingsElement = document.getElementById('savings');
        const pickupPriceElement = document.getElementById('pickup-price');
        const taxPriceElement = document.getElementById('tax-price');
        const totalPriceElement = document.getElementById('total-price');
        const totalPriceInputElement = document.getElementById('total-price-input');

        if (originalPriceElement && savingsElement && pickupPriceElement && taxPriceElement && totalPriceElement) {
            const originalPrice = parseFloat(originalPriceElement.innerText.replace('$', '').replace(',', ''));
            const savings = parseFloat(savingsElement.innerText.replace('-$', '').replace(',', ''));
            const pickupPrice = parseFloat(pickupPriceElement.innerText.replace('$', '').replace(',', ''));
            const taxPrice = parseFloat(taxPriceElement.innerText.replace('$', '').replace(',', ''));

            const totalPrice = originalPrice - savings + pickupPrice + taxPrice;

            totalPriceElement.innerText = `$${totalPrice.toFixed(2)}`;
            totalPriceInputElement.value = `${totalPrice.toFixed(2)}`;
        }
    }

    calculateTotal();
});




document.addEventListener('DOMContentLoaded', function () {
    const checkboxAll = document.getElementById('checkbox-all-search');
    const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');

    checkboxAll.addEventListener('change', function () {
        checkboxes.forEach(checkbox => {
            checkbox.checked = checkboxAll.checked;
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('deleteButton').addEventListener('click', function () {
        const checkboxes = document.querySelectorAll('[id^="checkbox-car-data-to-"]');
        let selectedValues = [];

        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                selectedValues.push(checkbox.value);
            }
        });

        const modalMessage = document.getElementById('modal-message');
        const modalButtons = document.getElementById('modal-buttons');

        if (selectedValues.length === 0) {
            console.log('Tidak ada yang dipilih.');
            modalMessage.innerText = 'Tidak ada yang dipilih.';
            modalButtons.innerHTML = `
                <button type="button"
                    class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-gray-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    Ok, cancel
                </button>`;
        } else {
            console.log('Nilai checkbox yang dipilih:', selectedValues);
            modalMessage.innerText = 'Are you sure you want to delete the selected items? This action cannot be undone.';
            modalButtons.innerHTML = `
                <button type="button"
                    class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-gray-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    No, cancel
                </button>
                <button id="confirm-button" type="submit"
                    class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-2 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    Yes, I'm sure
                </button>`;

            const deleteForm = document.getElementById('deleteForm');
            const route = document.getElementById('deleteButton').getAttribute('data-route');
            deleteForm.action = route;
            deleteForm.innerHTML += `<input type="hidden" name="selected-ids" value="${selectedValues.join(',')}" />`;
        }
    });
});
