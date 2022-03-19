<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require_once "./header.php";
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);


$smarty->assign('contacts', [
    ['phone' => '555-555-1234',
          'fax' => '555-555-5678',
          'cell' => '555-555-0357'],
    ['phone' => '800-555-4444',
          'fax' => '800-555-3333',
          'cell' => '800-555-2222']
    ]);




if (file_exists('templates/'.$adminTemplateName.'/index.tpl')) {
    $smarty->display($adminTemplateName.'/index.tpl');
} else {
    $smarty->display('twenty_one_admin/index.tpl');
}

