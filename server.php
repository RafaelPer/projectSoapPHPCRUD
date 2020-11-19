<?php

	$options = array(
		'uri' => 'http://127.0.0.1/ocean_CRUD/server.php'
	);

	$server = new SoapServer(null, $options);

	class crud{


		public function retrieve(){
			require ('db_con.php');
			$query = $dbh->prepare('SELECT * FROM livros');
			$query->execute();
			$dados = $query->fetchAll(PDO::FETCH_OBJ);
			// print($dados);
			return $dados;
		}

		public function create($titulo, $subTitulo, $autor, $categoria, $resumo){
			require ('db_con.php');
			$query = $dbh->prepare(' INSERT INTO livros (titulo, subTitulo, autor, categoria, resumo ) VALUES(?,?,?,?,?) ');
			try{ 
				$query->execute(Array(
					$titulo,
					$subTitulo,
					$autor,
					$categoria,
					$resumo
				));
				$result = "Dados Inseridos com sucesso!";
			}

			catch(PDOException $e){
				$result = $e->getMessage();
			}
			return $result;
		}

		public function selectByID($id){
			require ('db_con.php');
			$query = $dbh->prepare('SELECT * FROM livros WHERE id = ?');
			$query->execute(Array(
				$id
			));
			$dados = $query->fetchAll(PDO::FETCH_OBJ);
			return $dados;
		}

		public function update($id,$titulo, $subTitulo, $autor, $categoria, $resumo){
			require 'db_con.php';
			// $query = $dbh->prepare(' UPDATE livros SET titulo = "' . $titulo . '", subTitulo = "' . $subTitulo . '", autor = ' . $autor . ', categoria = "' . $categoria . '", resumo = "'.$resumo.'" WHERE id = "' . $id . '" ');
			$query = $dbh->prepare('UPDATE livros SET titulo =?, subTitulo =?, autor =?, categoria =?, resumo =? WHERE id =?');
			try{
				$query->execute(Array(
					$titulo,
					$subTitulo,
					$autor,
					$categoria,
					$resumo,
					$id
				));
				$result = $titulo . "&nbsp;" . $subTitulo . "&nbsp;" . $autor . "&nbsp;" . $categoria. "&nbsp;" . $resumo;
			}

			catch(PDOException $e){
				$result = $e->getMessage();
			}
			return $result;
		}

		public function delete($id){
			require 'db_con.php';
			$query = $dbh->prepare('DELETE FROM livros WHERE id = ? ');
			$query->execute(Array($id));
			return "Dados apagados com sucesso!";
		}
	}
	$server->setObject(new crud());
	$server->handle();
?>