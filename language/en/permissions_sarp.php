<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

error_log('loading permissions language');

$lang = array_merge($lang, [
    'ACL_A_SARP_REACTIONS_CREATE_AND_DELETE' => 'Can create and delete reactions',
    'ACL_SARP_REACTIONS_PERMS_CATEGORY' => 'Reactions',
]);

?>