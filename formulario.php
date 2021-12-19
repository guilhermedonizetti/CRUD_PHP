<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forms</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<center>
	<h1>Formulário</h1>

	<label>Registrar Cliente:</label>
	<form method="POST" action="controller/functionsCliente.php?acao=cadastrar">
		<input type="text" id="nome" placeholder="Nome..." required="">
		<input type="email" id="email" placeholder="email@email.com", required="">
		<input type="number" id="idade" required="">
		<select id="sexo" required="">
			<option value="M">Masculino</option>
			<option value="F">Feminino</option>
		</select>
		<input type="button" id="cadastrar" value="Cadastrar">
	</form>
	</center>

	<script type="text/javascript">
		$("#cadastrar").on("click", function(){
			var valor_nome = $("#nome").val();
			var valor_email = $("#email").val();
			var valor_idade = $("#idade").val();
			var valor_sexo = $("#sexo").val();

			var url_controller = "controller/functionsCliente.php?acao=cadastrar";
			url_controller += "&nome="+valor_nome+"&email="+valor_email+"&idade="+valor_idade+"&sexo="+valor_sexo;

			$.ajax({
				type: "GET",
				url: url_controller
			}).done(function(resul){
				if (resul == true) {
					alert("Cliente cadastrado com sucesso!");

					var valor_nome = $("#nome").val("");
					var valor_email = $("#email").val("");
					var valor_idade = $("#idade").val("");
					var valor_sexo = $("#sexo").val("");
				}
				else {
					alert("Erro ao tentar cadastrar cliente!");
				}
			});
		});
	</script>

</body>
</html>