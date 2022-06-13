const stripe = Stripe('pk_test_51K1WOQDm7AvXHILKuryQBYtRpecxjXB7GtWrX5fjGRQ2Gq3tlZLfIPrczJ1jazwfARsroGWmBsHceD2L3NS4tAgJ00U2p9jM5V');
let checkoutButton = document.getElementById('checkout-button');
console.log(checkoutButton.dataset);

checkoutButton.addEventListener('click', function() {    
    fetch(`/checkout/${checkoutButton.dataset.type}/${checkoutButton.dataset.id}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'url': `/checkout/${checkoutButton.dataset.type}/${checkoutButton.dataset.id}`,
            "X-CSRF-Token": document.querySelector('input[name=_token]').value
        },
    })
    .then(function(response) {
        return response.json();
    })
    .then(function(session) {
        return stripe.redirectToCheckout({ sessionId: session.id });
    })
    .then(function(result) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, you should display the localized error message to your
        // customer using `error.message`.
        if (result.error) {
            alert(result.error.message);
        }
    })
    .catch(function(error) {
        console.error('Error:', error);
    });
});