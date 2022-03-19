{config_load file="test.conf" section="setup"}
{include file="twenty_one/header.tpl" title=foo}
<h4>Account Info</h4>
<p>Carrent Balance: {$carrentBal}</p>
<p>Today's Income: {$todayEarn}</p>
<p>Total Earning: {$totalBal}</p>
<p>Total Widthrow: {$totalPayment}</p>
<p>Total Reffer: {$totalRef}</p>

{include file="twenty_one/footer.tpl"}
