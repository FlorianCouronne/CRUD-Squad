$(document).ready(function () {
    function updateGrandTotal() {
        let basePrice = 0;
        let addOnsTotal = 0;

        const selectedPackage = $('input[name="service_package"]:checked');
        if (selectedPackage.length > 0) {
            basePrice = parseFloat(selectedPackage.data('price')) || 0;
        }

        $('.addon-checkbox:checked').each(function () {
            addOnsTotal += parseFloat($(this).data('price')) || 0;
        });

        const grandTotal = basePrice + addOnsTotal;

        $('#base-price-display').text('$' + basePrice.toFixed(2));
        $('#addons-price-display').text('$' + addOnsTotal.toFixed(2));
        $('#grand-total-display').text('$' + grandTotal.toFixed(2));
        
        $('#total_amount_input').val(grandTotal.toFixed(2));
    }

    $(document).on('change', 'input[name="service_package"], .addon-checkbox', function () {
        updateGrandTotal();
    });

    updateGrandTotal();
});
