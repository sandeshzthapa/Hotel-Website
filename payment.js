document.getElementById("payment-form").addEventListener("submit", function(event) {
    event.preventDefault();

    var methodName = document.getElementById("method-name").value;
    var cardNumber = document.getElementById("card-number").value;
    var expirationDate = document.getElementById("expiration-date").value;
    var cvv = document.getElementById("cvv").value;
    var nameOnCard = document.getElementById("name-on-card").value;
    var billingAddress = document.getElementById("billing-address").value;
    var email = document.getElementById("email").value;
    // Validate the form inputs
    var isValid = validateForm(methodName, cardNumber, expirationDate, cvv, nameOnCard, billingAddress, email);
    if (isValid) {
    // Process the payment
    processPayment(methodName, cardNumber, expirationDate, cvv ,nameOnCard, billingAddress, email);
    }
});
function validateForm(methodName, cardNumber, expirationDate, cvv, nameOnCard, billingAddress, email) {
    var isValid = true;

    // Clear previous error messages
    var errorMessages = document.getElementsByClassName("error-message");
    for (var i = 0; i < errorMessages.length; i++) {
        errorMessages[i].textContent = "";
    }

    // Validate payment method
    if (methodName === "") {
        isValid = false;
        var methodErrorMessage = document.getElementById("method-error");
        methodErrorMessage.textContent = "Please select a payment method";
    }

    // Validate card number
    if (cardNumber === "") {
        isValid = false;
        var cardNumberErrorMessage = document.getElementById("card-number-error");
        cardNumberErrorMessage.textContent = "Please enter a card number";
    }

    // Validate expiration date
    if (expirationDate === "") {
        isValid = false;
        var expirationDateErrorMessage = document.getElementById("expiration-date-error");
        expirationDateErrorMessage.textContent = "Please enter the expiration date";
    }

    // Validate CVV
    if (cvv === "") {
        isValid = false;
        var cvvErrorMessage = document.getElementById("cvv-error");
        cvvErrorMessage.textContent = "Please enter the CVV";
    }

    // Validate name on card
    if (nameOnCard === "") {
        isValid = false;
        var nameOnCardErrorMessage = document.getElementById("name-on-card-error");
        nameOnCardErrorMessage.textContent = "Please enter the name on card";
    }

    // Validate billing address
    if (billingAddress === "") {
        isValid = false;
        var billingAddressErrorMessage = document.getElementById("billing-address-error");
        billingAddressErrorMessage.textContent = "Please enter the billing address";
    }

    // Validate email
    if (email === "") {
        isValid = false;
        var emailErrorMessage = document.getElementById("email-error");
        emailErrorMessage.textContent = "Please enter a valid email address";
    }

    return isValid;
}

function processPayment(methodName, cardNumber, expirationDate, cvv, nameOnCard, billingAddress, email) {
    // Placeholder code to process the payment
    console.log("Processing payment using " + methodName + "...");
    // You can make an AJAX request here to send the payment information to your server

    // Display success message
    var successMessage = document.getElementById("success-message");
    successMessage.textContent = "Payment processed successfully!";
}
