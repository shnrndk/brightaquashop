<?php
$number = (float) filter_var($total, FILTER_SANITIZE_NUMBER_INT);
$total = $number/100;
?>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="shnrndk-facilitator@gmail.com">
<input type="hidden" name="item_name_1" value="Total">
<input type="hidden" name="amount_1" value="<?php echo $total; ?>"">
<input type="hidden" name="shipping_1" value="1.75">
<input type="submit" value="PayPal">
</form>





