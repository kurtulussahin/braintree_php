<?php
require_once "braintree/lib/Braintree.php";
Braintree\Configuration::environment('sandbox');
Braintree\Configuration::merchantId('vfx46t4cscr28z5j');
Braintree\Configuration::publicKey('zkwcd839994wzsr7');
Braintree\Configuration::privateKey('10e4850f739a9bbe2744f2a5cfb36c69');

$nonceFromTheClient = print_r($_POST);

$result = Braintree_Transaction::sale([
  'amount' => '100.00',
  'paymentMethodNonce' => "fake-valid-nonce"
]);
echo "<pre>";
print_r($result);
echo "</pre>";

$refundResult = Braintree_Transaction::void($result->transaction->id);
echo "<pre>";
print_r($refundResult);
echo "</pre>";

?>