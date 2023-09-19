<!DOCTYPE html>
<html>
  <head>
    <title> ||||| </title>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <div id="eholder"></div>
    <script type="text/javascript">
      var stripe = Stripe('<?php echo $stripe_pk; ?>');

      
      stripe.redirectToCheckout({  
        sessionId: '<?php echo $session_id; ?>'
      }).then(function (result) {
        if(result.error.message)
        {
          document.getElementById('eholder').innerHtml = result.error.message; 
        }
      });
    </script>
  </body>
</html>