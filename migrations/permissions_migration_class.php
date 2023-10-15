<?php

namespace sarp\reactions\migrations;

class permissions_migration_class extends \phpbb\db\migration\migration
{
    static public function depends_on()
    {
        return array('\sarp\reactions\migrations\setup_migration_class');
    }

    public function update_data()
    {
        error_log('update_data of permissions migration');
        return array(
            array('permission.add', array('a_sarp_reactions_create_and_delete'))
        );
    }

    public function revert_data()
    {
        return array(
            array('permission.remove', array('a_sarp_reactions_create_and_delete')),
        );
    }
}

?>