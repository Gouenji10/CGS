<?php 

class Config_loader{
    var $ci;
    function __construct()
    {
        $this->ci=&get_instance();
    }

    public function load(){
        $dirs = array_filter(glob(APPPATH . 'modules/*'), 'is_dir');
        foreach ($dirs as $dir) {
            $dir_name = explode('/', $dir);
            $dir_name = $dir_name[count($dir_name) - 1];
            $this->ci->config->load($dir_name . '/table');
            
        }
    }

    /**
     * function to add modules list to db with version
     */

    public function moduleConfig(){
        $this->ci->load->dbforge();

        //create table 
        $var_table=array(
            'name'=>'tbl_modules',
            'fields'=>array(
                'id'=>array(
                    'type'=>'INT',
                    'constraint'=>10,
                    'auto_increment'=>TRUE
                ),
                'name'=>array(
                    'type'=>'VARCHAR',
                    'constraint'=>50,
                    'null'=>FALSE
                ),
                'ver'=>array(
                    'type'=>'VARCHAR',
                    'constraint'=>50,
                    'default'=>0
                )
            )
        );

    }

    
}