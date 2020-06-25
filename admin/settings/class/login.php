<?php 



class Login{

    public function AdminGiris($email,$pass)
    {
        global $CRUD;

        if(!$this->CheckEmail($email)){
            return 0;
        }
        
        $email = $this->Check(strtolower($email));
        $pass = md5($pass);

        $login = $CRUD->Select("admin",0,"where email=:email and sifre=:pass and status=:st",["email"=>$email,"pass"=>$pass,"st"=>1]);

        if(!empty($login)){
            $_SESSION["user_email"] = $email;
            $_SESSION["user_AdSoyad"] = $login["AdSoyad"];
            $_SESSION["user_img"] = $login["sekil"];
            $_SESSION["user_icaze"] = $login["icazeler"];
            return 1;
        }
        else{
            return 0;
        }

    }


    public function CheckEmail($data)
    {
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return 0;
          }

          return 1;
    }

    public function Check($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function CheckSession($data)
    {
        global $CRUD;
        $x = $CRUD->Select("admin",0,"where email=:email and status=:st",["email"=>$data,"st"=>1]);
        if(empty($x)){
            return 1;
        }
    }

}