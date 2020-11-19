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
					<li class="nav-item active">
						<a class="nav-link" href="retrieve.php">CRUD <span class="sr-only">(current)</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container-fluid text-center">
            <br/>
			<br/>
			<br/>
			<div class="row content">
				<div class="col-sm-12 text-center">
                    <?php
                        // define('createIcon', '<i class="fa fa-plus-square"aria-hidden="true"></i>');
                        // define('updateIcon', '<i class="fa fa-pencil" aria-hidden="true"></i>');
                        // define('deleteIcon', '<i class="fa fa-trash" aria-hidden="true"></i>');

                        $options = array(
                            'uri' => 'http://127.0.0.1/ocean_CRUD/server.php',
                            'location' => 'http://127.0.0.1/ocean_CRUD/server.php'
                        );

                        $client = new SoapClient(null, $options);
						$dados = ($client->retrieve());
						// print($dados);
                    ?>
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">SubTitulo</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Resumo</th>
                                <th scope="col">Ações</th>
                            </tr>
						</thead>
						<?php if (!empty($dados)){ ?>
                        <tbody>
                            <?php foreach($dados as $livros){?>
                            <tr>
                                <th scope="row"><?php echo $livros->id; ?></th>
                                <td><?php echo $livros->titulo; ?></td>
                                <td><?php echo $livros->subTitulo; ?></td>
                                <td><?php echo $livros->autor; ?></td>
                                <td><?php echo $livros->categoria; ?></td>
                                <td><?php echo $livros->resumo; ?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $livros->id; ?>" class="btn btn-warning" role="button">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </a> 
                                    <a href="delete.php?id=<?php echo $livros->id; ?>" class="btn btn-danger" role="button">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <?php }} ?>
                        </tbody>
                    </table>

                    <br/>
			        <br/>

                    <a class="btn btn-primary" href="create.php" role="button">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                        </svg>
                        Adicionar Livro
                    </a>

				</div>
			</div>
		</div>
	</body>
</html>
