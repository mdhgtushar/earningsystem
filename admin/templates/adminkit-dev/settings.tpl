{config_load file="test.conf" section="setup"}
{include file="adminkit-dev/header.tpl" title='SCMS'}

<h1>Site Settings</h1>
<form action="?updateClientTemp" method="post">
<p>select a frontend template</p>
<select>
{foreach $forntedTemp as $value}
  <option>{$value.moduleName}</option>
  <hr>
{/foreach}
</select>
<input type="submit">
</form>

<hr/>

<form action="?updateAdminTemp" method="post">
<p>select a admin template</p>
<select name="set_value">
{foreach $adminTemp as $value}
  <option>{$value.moduleName}</option>
  <hr>
{/foreach}
</select>
<input type="submit">
</form>
{include file="adminkit-dev/footer.tpl"}
