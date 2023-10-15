<?php

namespace sarp\reactions\migrations;

class build_acp_modules extends \phpbb\db\migration\migration
{

    static public function depends_on()
    {
        return array('\sarp\reactions\migrations\permissions_migration_class');
    }

    public function update_data()
    {
        return array(
            array(
                'module.add', array(
                    'acp',
                    'ACP_CAT_DOT_MODS',
                    'ACP_SARP_REACTIONS_MANAGE_TITLE',
                )
            ),

            array(
                'module.add', array(
                    'acp',
                    'ACP_SARP_REACTIONS_MANAGE_TITLE',
                    array(
                        'module_basename' => '\sarp\reactions\acp\manage_reactions_module',
                        'modes' => array('reactions'),
                    )
                )
            )
        );
    }

}

?>