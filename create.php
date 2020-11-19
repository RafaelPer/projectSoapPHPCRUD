<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>CRUD SOAP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
		</script>
		<style>
			/* Remove the navbar's default margin-bottom and rounded borders */
			.navbar {
				margin-bottom: 0;
				border-radius: 0;
			}

			/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
			.row.content {
				height: 450px
			}

			/* Set gray background color and 100% height */
			.sidenav {
				padding-top: 20px;
				background-color: #f1f1f1;
				height: 100%;
			}

			/* Set black background color, white text and some padding */
			footer {
				background-color: #555;
				color: white;
				padding: 15px;
			}

			/* On small screens, set height to 'auto' for sidenav and grid */
			@media screen and (max-width: 767px) {
				.sidenav {
					height: auto;
					padding: 15px;
				}

				.row.content {
					height: auto;
				}
			}
		</style>
	</head>

	<body>
		<nav class="navbar navbar-dark bg-dark">
			<a class="navbar-brand" href="#">ISoap CRUD</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">INICIO</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="crudPrincipal.php">CRUD</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container-fluid text-center">
			<br/>
			<br/>
			<br/>
			<div class="row content">
				<div class="col-sm-12">
                    <form action="sendCreation.php" method="post">
                        <div class="form-group">
                            <label for="idInputTitulo">Titulo</label>
                            <input type="text" class="form-control" id="idInputTitulo" name="nameInputTitulo" aria-describedby="tituloHelp" required>
                            <small id="tituloHelp" class="form-text text-muted">Titulo do Livro</small>
                        </div>
                        <div class="form-group">
                            <label for="idInputSubTitulo">Sub Titulo</label>
                            <input type="text" class="form-control" id="idInputSubTitulo" name="nameInputSubTitulo" aria-describedby="subTituloHelp" required>
                            <small id="subTituloHelp" class="form-text text-muted">Sub Titulo do Livro</small>
                        </div>
                        <div class="form-group">
                            <label for="idInputAutor">Autor</label>
                            <input type="text" class="form-control" id="idInputAutor" name="nameInputAutor" aria-describedby="autorHelp">
                            <small id="autorHelp" class="form-text text-muted">Categoria do Livro</small>
                        </div>
                        <div class="form-group">
                            <label for="idInputCategoria">Categoria</label>
                            <input type="text" class="form-control" id="idInputCategoria" name="nameInputCategoria" aria-describedby="categoriaHelp">
                            <small id="categoriaHelp" class="form-text text-muted">Autor do Livro</small>
                        </div>
                        <div class="form-group">
                            <label for="idInputResumo">Resumo</label>
                            <input type="text" class="form-control" id="idInputResumo" name="nameInputResumo" aria-describedby="resumoHelp">
                            <small id="resumoHelp" class="form-text text-muted">Resumo do Livro</small>
                        </div>
                        <button type="submit" class="btn btn-success">Criar</button>
                    </form>
                    <br/>
                    <a href="crudPrincipal.php" class="btn btn-primary">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
						</svg>
						Voltar
					</a>
				</div>
			</div>
		</div>
	</body>
</html>