<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}


$lang = array_merge($lang, [
    'ACP_SARP_REACTIONS_MANAGE_TITLE' => 'Manage reactions',
    'ACP_SARP_REACTIONS_MANAGE_TITLE_Master' => 'Reactions',
]);

?>