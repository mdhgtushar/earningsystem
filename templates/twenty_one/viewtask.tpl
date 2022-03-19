{config_load file="test.conf" section="setup"}
{include file="twenty_one/header.tpl" title=foo}
<h4>vew Tasks</h4>

{if isset($viewExist)}
    {if $viewExist == 1}
	Already Exist <a href='tasks.php'> go back</a>
	{/if}
   
{/if}


{if isset($taskId)}
    {if $taskId != 0}
	Task ID = {$taskId}
    <br>
     {if $viewExist == 0}
	<a href='?taskid={$taskId}&submit=true'> Submit View </a>
	{/if}
	{/if}
    {if $taskId == 0}
	 Task Not found
	{/if}
{/if}


{include file="twenty_one/footer.tpl"}