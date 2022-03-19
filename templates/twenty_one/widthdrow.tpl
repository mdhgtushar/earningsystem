{config_load file="test.conf" section="setup"}
{include file="twenty_one/header.tpl" title=foo}
<h4>Widthdrow Tasks</h4>

{if isset($widhdrowAblity)}
    {if $widhdrowAblity == 1}
	You can Widthdrow 2 Taka <a href='?submit'> Widthdrow Now</a>
	{/if}
    {if $widhdrowAblity == 0}
	You can't Widthdrow . Min widthdrow ammount is 2 taka
	{/if}
   
{/if}

{include file="twenty_one/footer.tpl"}