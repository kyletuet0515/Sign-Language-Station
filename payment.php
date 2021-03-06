<?php
	session_start();
	if(!isset($_COOKIE["username"]))
		header("Location: login.php");
	
	$planId = $_POST['planId'];
	$price = $_POST['price']
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Language Station</title>
<link rel="stylesheet" type="text/css" href="top_bottom_list.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$(".dropDown").click(function(){
    	$(".dropDownContent").slideToggle("slow");
    });
})
</script>
</head>
<body>
	<?php require('header.php');?>
	
	<div class="mainFrame">
		<?php
		echo "You selected plan " . $planId . ".<br>" . "The price is " . $price . ".<br>"
		?>
		Enter payment information:<br><br>
		Card type:
		<form action="uploadPaymentRecord.php" id="form1" name="form1" method="post">
		    <table width="100%" border="0" cellspacing="5" cellpadding="8">
			    <tr>
				    <td><label for="cardnumber">Card number</label></td>
					<td><input type="text" required name="cardnumber" id="cardnumber" placeholder="0123-4567-8901-2345" maxlength="16"></td>
				</tr>
				
				<tr>
				    <td><label for="nameoncard">Name of card</label></td>
					<td><input type="text" required name="nameoncard" id="nameoncard" placeholder="Chan Tai Man"></td>
				</tr>
				
				<tr>
				    <td><label for="expirydate">Expiry month</label></td>
					<td><input type="month" required name="expirydate" id="expirydate" placeholder="MM" maxlength="2"></td>
				</tr>
				

				
				<tr>
				    <td><label for="secuirtycode">Secuirty code</label></td>
					<td><input type="text" required name="secuirtycode" id="secuirtycode" placeholder="123" maxlength="3"></td>
				</tr>
				
				<tr>
				    
					<input type="radio" name="cardtype" id="cardtype" value="visa"> visa<br>
					<input type="radio" name="cardtype" id="cardtype" value="amex" > amex<br>
					<input type="radio" name="cardtype" id="cardtype" value="mastercard" > mastercard<br>
					<input type="radio" name="cardtype" id="cardtype" value="discover" > discover<br></td>
				</tr>
				
				<tr>
					<td><input type="submit" name="Submit" id="Submit"></td>
				</tr>
				
			</table>
		</form>
	</div>
	
	<?php require('footer.php');?>
</body>
</html>
