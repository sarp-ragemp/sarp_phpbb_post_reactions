<?php

namespace sarp\reactions\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
    static public function getSubscribedEvents()
    {
        return [
            'core.user_setup' => 'load_language_on_setup',
            'core.permissions' => 'on_core_permissions',
        ];
    }

    public function load_language_on_setup($event)
    {
        error_log("load_language_on_setup called");
        $lang_set_ext = $event['lang_set_ext'];
        $lang_set_ext[] = [
            'ext_name' => 'sarp/reactions',
            'lang_set' => 'permissions_sarp',
        ];
        $lang_set_ext[] = [
            'ext_name' => 'sarp/reactions',
            'lang_set' => 'info_acp_sarp',
        ];
        $event['lang_set_ext'] = $lang_set_ext;
    }

    public function on_core_permissions($event)
    {
        error_log("on_core_permissions called");
        $event->update_subarray('categories', 'sarp_reactions', 'ACL_SARP_REACTIONS_PERMS_CATEGORY');
        $event->update_subarray('permissions', 'a_sarp_reactions_create_and_delete', array('lang' => 'ACL_A_SARP_REACTIONS_CREATE_AND_DELETE', 'cat' => 'sarp_reactions'));
    }
}

?>