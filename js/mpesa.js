  function confirmPaymentOption() {
    var paymentOption = document.querySelector('input[name="paymentOption"]:checked').value;
  
    if (paymentOption === "mpesa") {
      window.location.href = "mpesa.php";
    } else {
      // Handle other payment options
      // ...
    }
  
    // Hide the pop-up
    document.getElementById("paymentPopup").style.display = "none";
  }
  
  