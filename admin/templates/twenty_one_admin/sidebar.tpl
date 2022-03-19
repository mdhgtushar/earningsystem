<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="index.php" class="w3-bar-item w3-button">Dashbord</a>
  <a href="modules.php" class="w3-bar-item w3-button">Modules</a>
  <hr style="border: 1px solid #ddd">
{foreach $sidebar as $contact}
  {foreach $contact as $value}
  <a href="getmodule.php?moduleName={$value@key}" class="w3-bar-item w3-button"> {$value}</a>
  {/foreach}
  <hr style="border: 1px solid #ddd">
{/foreach}
  <a href="settings.php" class="w3-bar-item w3-button">Settings</a>

</div>