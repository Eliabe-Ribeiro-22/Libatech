function validaFormulario(){
	var email = document.querySelector("#emailLogin").value;
	var senha = document.querySelector("#senhaLogin").value;

	if(email == ""){
		alert("Digite seu email:");
		return false;
	}
	if(senha == ""){
		alert("Digite sua senha:");
		return false;
	}
	alert("dados preenchidos com sucesso");
	return true;
}