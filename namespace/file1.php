<?php
namespace User\Member\Profile;
class userData{
    private $user_id;
    private $user_name;
    public function __construct($id , $name) {
        $this->user_id = $id;
        $this->user_name = $name;
    }
    public function get_user(){
        return array('id'=>$this->user_id,'name'=> $this->user_name);
    }
}
 
function normalMethod(){
    echo "Yes I'm From Normal Method";
}
 
?>