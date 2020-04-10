<?php 

function dbConnect() {
    try { $bdd = new PDO('mysql:host=localhost; dbname=charrette;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception  $e) {
    die('Error : ' .  $e->getMessage());
    }
    return $bdd;
}

function checkEmail($email){
    $bdd = dbConnect();
    $select = $bdd->query("SELECT * FROM member");
    while($data = $select->fetch()){
        if ($email == $data['email']){
            return true;
        }
    }
    return false;
}

function insertUser($firstname, $lastname, $email) {
    $bdd = dbConnect();
    $pass_hache =  password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $req = $bdd->prepare("INSERT INTO member(firstname , lastname, email, pass) VALUES(:firstname, :lastname,  :email,  :pass)");
    
    $user = $req->execute(array(
        "firstname" => $firstname,
        "lastname" => $lastname,
        "email" => $email,
        "pass" => $pass_hache
    ));
    return $user;
}

function checkAccount($email, $pass){
    $bdd = dbConnect();
    $member = $bdd->prepare("SELECT id, email, pass, firstname FROM member WHERE email = :email");
    $member->execute([
        'email' => $email,
    ]);
    $member_data = $member->fetch();
    if (!$member_data){
        return false;
    }
    $ispasscorrect = password_verify($pass, $member_data['pass']);

    if ($ispasscorrect) {
        return true;
    } else {
        return false;
    }

}
