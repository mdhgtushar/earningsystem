{config_load file="test.conf" section="setup"}
{include file="twenty_one_admin/header.tpl" title='foo'}


<table>
  <tr>
    <th>Name</th>
    <th>Status</th>
  </tr>


  </table>
  <ul>
{* key always available as a property *}
{foreach $contacts as $contact}
  {foreach $contact as $value}
    {$value@key}: {$value}
    <br>
  {/foreach}
  <hr>
{/foreach}
</ul>

{include file="twenty_one_admin/footer.tpl"}
