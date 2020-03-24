function Login() {
var done=0;
var usuario = document.getElementsByName('usuario')[0].value;
usuario=usuario.toLowerCase();
var senha= document.getElementsByName('senha')[0].value;
senha=senha.toLowerCase();
if (usuario=="admin" && senha=="admin") {
window.location="mainAdmin.php";
done=1;
}
if (usuario=="user" && senha=="user") {
window.location="mainUsertickets.php";
done=1;
}
if (done==0) { alert("Usuário e/ou senha invalidos!"); }
}