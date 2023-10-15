<?php

namespace sarp\reactions\acp;

class manage_reactions_module
{
    public $u_action;
    public $tpl_name;
    public $page_title;

    public function main ($id, $mode)
    {
        global $language;

        $this->tpl_name = 'acp_sarp_manage_reactions_body';
        $this->page_title = $language->lang('ACP_SARP_REACTIONS_MANAGE_TITLE');

        // add_form_key('sarp_reactions_manage_reactions');
    }
}

?>