<?php

require_once "braintree/lib/Braintree.php";
Braintree\Configuration::environment('sandbox');
Braintree\Configuration::merchantId('vfx46t4cscr28z5j');
Braintree\Configuration::publicKey('zkwcd839994wzsr7');
Braintree\Configuration::privateKey('10e4850f739a9bbe2744f2a5cfb36c69');


$clientToken = Braintree_ClientToken::generate();
echo $clientToken;
?>

<form id="checkout" method="post" action="result.php">
  <div id="payment-form"></div>
  <input type="submit" value="Pay $10">
</form>

<script src="https://js.braintreegateway.com/v2/braintree.js"></script>
<script>
var clientToken = "<?php echo $clientToken ?>";
braintree.setup(clientToken, "dropin", {
  container: "payment-form"
});
</script>