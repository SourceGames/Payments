<!DOCTYPE html>
<html lang="en">
   <head>
     <meta charset="UFT-8">
	 <title>Pay</title>
	 
	 <link rel="stylesheet" href="css/app.css">
    </head>
	<body>
	   <div class="payment-container">
	     <h2 class="header">Pay for copy</h2>
		 
		 <form action="checkout.php" method="post" autocomplete="off">
		   <label for="item">
		     Product
			  <input type="text" name="product">
		   </label>
		   <label for="amount">
		     Price
			 <input type="text" name="price">
		   </label>
		   
		   <input type="submit" value="Pay">
		 </form>
		 
		 <p>You will be taken to the download when u are finsh</p>
	   </div>
	  </body>
	 </html>
