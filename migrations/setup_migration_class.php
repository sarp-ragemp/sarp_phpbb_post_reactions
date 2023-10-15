<?php

namespace sarp\reactions\migrations;

class setup_migration_class extends \phpbb\db\migration\migration
{
    static public function depends_on()
    {
        return array('\phpbb\db\migration\data\v33x\v3310');
    }

    public function update_schema()
    {
        error_log("setup_migration_class update_schema called");
        return array(
            'add_tables' => array(
                $this->table_prefix . 'sarp_reactions' => array(
                    'COLUMNS' => array(
                        'id' => array('UINT', NULL, 'auto_increment'),
                        'reaction_name' => array('VCHAR:50', ''),
                        'reaction_image_path' => array('TEXT', ''),
                        'reaction_score' => array('INT:5', 0),
                    ),
                    'PRIMARY_KEY' => 'id',
                    'KEYS' => array(
                        'reactions_nm' => array('UNIQUE', 'reaction_name'),
                    ),
                ),
                $this->table_prefix . 'sarp_post_reactions' => array(
                    'COLUMNS' => array(
                        'id' => array('UINT', NULL, 'auto_increment'),
                        'reaction_id' => array('UINT', 0),
                        'post_id' => array('UINT', 0),
                        'user_id' => array('UINT', 0),
                    ),
                    'PRIMARY_KEY' => 'id',
                    'KEYS' => array(
                        'post_reactions_post_id' => array('INDEX', 'post_id'),
                        'post_reactions_user_id' => array('INDEX', 'user_id'),
                    )
                ),
            ),
            'add_columns' => array(
                $this->table_prefix . 'posts' => array(
                    'sarp_reaction_id' => array('UINT', 0),
                ),
            ),
            'add_index' => array(
                $this->table_prefix . 'posts' => array(
                    'sarp_reaction_id' => array('sarp_reaction_id'),
                ),
            )
        );
    }

    public function revert_schema()
    {
        error_log("setup_migration_class revert_schema called");
        return array(
            'drop_tables' => array(
                $this->table_prefix . 'sarp_reactions',
                $this->table_prefix . 'sarp_post_reactions',
            ),
            'drop_columns' => array(
                $this->table_prefix . 'posts' => array(
                    'sarp_reaction_id',
                ),
            ),
            'drop_keys' => array(
                $this->table_prefix . 'posts' => array(
                    'sarp_reaction_id',
                ),
            ),
        );
    }
}

?>