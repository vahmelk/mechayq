<?php
class registration {
    public function render(){
        require_once "./view/layout/header.php";
        require_once "./view/content/registration.php";
        require_once "./view/layout/footer.php";
    }
    public function regist(){
        $data=array("u_id"=>1,"Name"=>"Elen","Age"=>16,"Username"=>"fgsdfs_fdsdfsdf4", "Email" => "dfghj.asgoeasdfn@gmail.com", "Password" => "Elen.1234", "ConfirmPassword" => "Elen.1234", "gender"=> "female");
      // parent::setUser($data);
    }

}
$regist=new registration;
$regist->render();
// $regist->regist();






// require_once '../models/model.php';
// class registration extends model{
//     public function render(){
//         require_once "../view/layout/header.php";
//         require_once "../view/content/registration.php";
//         require_once "../view/layout/footer.php";
//     }
//     public function regist(){
//         $data=array("u_id"=>1,"Name"=>"Elen","Age"=>16,"Username"=>"fgsdfs_fdsdfsdf4", "Email" => "dfghj.asgoeasdfn@gmail.com", "Password" => "Elen.1234", "ConfirmPassword" => "Elen.1234", "gender"=> "female");
//         parent::setUser($data);
//     }

<<<<<<< HEAD
// }
// $regist=new registration;
// $regist->render();
// $regist->regist();

=======
>>>>>>> f32cd7a30d4762be3f9c8f95a2cc9d0305b86a30
?>