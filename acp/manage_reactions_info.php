<?php

namespace sarp\reactions\acp;

class manage_reactions_info
{
    public function module()
    {
        return array(
            'filename' => '\sarp\reactions\acp\manage_reactions_module',
            'title' => 'ACP_SARP_REACTIONS_MANAGE_TITLE',
            'modes' => array(
                'reactions' => array(
                    'title' => 'ACP_SARP_REACTIONS_MANAGE_TITLE_Master',
                    'auth' => 'ext_sarp/reactions',
                    'cat' => array('ACP_SARP_REACTIONS_MANAGE_TITLE'),
                )
            ),
        );
    }
}

?>