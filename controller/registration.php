<?php
class registration extends model{
    public function render(){
        require_once "view/layout/header.php";
        require_once "view/content/registration.php";
        require_once "view/layout/footer.php";
    }
    public function regist(){
        $data=array("u_id"=>1,"Name"=>"Elen","Age"=>16,"Username"=>"fgsdfsfdsdfsdf4", "Email" => "asd.asgoeasdfn@gmail.com", "Password" => "Elen.1234", "ConfirmPassword" => "Elen.1234", "gender"=> "female");
        parent::setUser($data);
    }

}
$regist=new registration;
$regist->render();
$regist->regist();



?>