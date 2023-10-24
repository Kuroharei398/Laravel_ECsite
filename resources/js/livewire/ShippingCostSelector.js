<script>
    document.addEventListener('livewire:load', function () {
        window.livewire.on('shippingCostUpdated', shippingCost => {
            const shippingCostElement = document.getElementById('shipping-cost');
            if (shippingCostElement) {
                if (shippingCost) {
                    shippingCostElement.innerText = '送料: ¥' + shippingCost;
                }
            }
        })
    })
</script>