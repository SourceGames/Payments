<!DOCTYPE html>
<html lang="en">
   <head>
     <meta charset="UFT-8">
	 <title>Pay</title>
    </head>
	<body>
	<div id="paypal-button"></div>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>
    paypal.Button.render({

        env: 'production', // Or 'sandbox'

        client: {
            sandbox:    'xxxxxxxxx',
            production: 'xxxxxxxxx'
        },

        commit: true, // Show a 'Pay Now' button

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '1.00', currency: 'USD' }
                        }
                    ]
                }
            });
        },

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(payment) {

                // The payment is complete!
                // You can now show a confirmation message to the customer
            });
        }

    }, '#paypal-button');
</script>
	  </body>
	 </html>
