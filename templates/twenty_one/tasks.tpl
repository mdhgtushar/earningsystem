{config_load file="test.conf" section="setup"}
{include file="twenty_one/header.tpl" title=foo}
<h4>All Tasks</h4>

<table>
<tr>
<th>Titel</th>
<th>Points</th>
<th>action</th>
<tr>
{foreach $tasks as $task}
<tr>
<td>{$task.taskTitle}</td>
<td>{$task.taskPrice}</td>
<td><a href="viewtask.php?taskid={$task.taskId}">View</a></td>
<tr>
{/foreach}

</table>
{include file="twenty_one/footer.tpl"}
