<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment Now</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<link rel="stylesheet" href="payment.css">

</head>
<body>
	


<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p>p</p>
    </div>
    
    
    <h2>Payment Now</h2>
    <form action="payment-1.php" method="POST">
    <div class="form">
      <div class="card space icon-relative">
        <label class="label">Card holder:</label>
        <input type="text" class="input" placeholder="Coding Market" name="card_holder">
        <i class="fas fa-user"></i>
      </div>
      <div class="card space icon-relative">
        <label class="label">Card number:</label>
        <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number" name="card_number">
        <i class="far fa-credit-card"></i>
      </div>
      <div class="card-grp space">
        <div class="card-item icon-relative">
          <label class="label">Expiry date:</label>
          <input type="text" class="input" data-mask="00 / 00"  placeholder="00 / 00" name="expiry_date">
          <i class="far fa-calendar-alt"></i>
        </div>
        <div class="card-item icon-relative">
          <label class="label">CVC:</label>
          <input type="text" class="input" data-mask="000" placeholder="000" name="cvc">
          <i class="fas fa-lock"></i>
        </div>
      </div>
      <button class="btn transparent" id="sign-in-btn">
              Payment Now
            </button>
      </form>
      
    </div>
  </div>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>
</html>