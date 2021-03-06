<?php

namespace CMS\Libraries\Tables;

class Sectionname {

    protected $db;
	protected $container;
	protected $system_validation;
	protected $v;
	protected $type;

    public function __construct($container, $type) {
        $this->container = $container;
        $this->db = $container->system_connexion->database();
        $this->system_validation = $container->system_validation;
        $this->v = $container->variables;
		$this->type = $type;
    }
	
	public function do_functions($field, $functions) {
		if(!empty($functions)){
			$functions = explode(',', $functions);
			foreach($functions as $validation){
				$field = $this->system_validation->$validation($field, 'sectionname', $this->type);
			}
		}
		
		return $field;
	}
	
	public function id($value, $functions) {
		return $this->do_functions($value, $functions);
	}
	
	public function section($value, $functions) {
		return $this->do_functions($value, $functions);
	}
	
	public function id_module($value, $functions) {
		return $this->do_functions($value, $functions);
	}
	
	public function username($value, $functions) {
		return $this->do_functions($this->v->_s('pseudom'), $functions);		
	}
}

?>