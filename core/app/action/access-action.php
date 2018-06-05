<?php
// access-action.php
// este archivo sirve para procesar las opciones de login y logout

if(isset($_GET["opt"]) && $_GET["opt"]=="login"){
//print_r($_SESSION);
if(!isset($_SESSION["user_id"])) {
$user = $_POST['email'];
$pass = sha1(md5($_POST['password']));
$base = new Database();
$con = $base->connect();
 $sql = "select * from user where username= \"".$user."\" and password= \"".$pass."\" and status=1";
//print $sql;
$query = $con->query($sql);
$found = false;
$userid = null;
while($r = $query->fetch_array()){
	$found = true ;
	$userid = $r['id'];
}

if($found==true) {
	$_SESSION['user_id']=$userid ;
	print "Cargando ... $user";
	Core::redir("./?view=home");
}else {
	Core::redir("./?view=login");
}
}else{
	Core::redir("./?view=home");	
}

}
if(isset($_GET["opt"]) && $_GET["opt"]=="register"){

	$userx = UserData::getBy("email",$_POST["email"]);
	if($userx==null){
		$u  = new UserData();
		$u->name = $_POST["name"];
		$u->lastname = $_POST["lastname"];
		$u->email = $_POST["email"];
		$u->password = sha1(md5($_POST["password"]));
		$u->register();
		Core::alert("Registrado exitosamente!");

	}else{
		Core::alert("Ya existe un email registrado con este correo.");
	}
	Core::redir("./");

}
if(isset($_GET["opt"]) && $_GET["opt"]=="logout"){
	unset($_SESSION);
	session_destroy();
	Core::redir("./?view=home");
}

?>