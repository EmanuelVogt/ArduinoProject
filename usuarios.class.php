<?php 

Class Usuarios{

	private $nome;
	private $tag;
	private $nivel;
	private $id;

	public function getNome(){
		return $this-> nome;
	}

	public function setNome($nome){
		$this-> nome = $nome;
	}

	public function getTag(){
		return $this-> tag;
	}

	public function setTag($tag){
		$this-> tag = $tag;
	}

	public function getNivel(){
		return $this-> nivel;
	}

	public function setNivel($nivel){
		$this-> nivel = $nivel;
	}

	public function getId(){
		return $this-> id;
	}

	public function setId($id){
		$this-> id = $id;
	}

	public function alterar(){
		include "Acessa.class.php";
		$nome = $this -> nome;
		$tag = $this -> tag;
		$nivel = $this -> nivel;
		$id = $this -> id;
		$stmt = $conn -> prepare("Update usuarios set nome=?, tag=?, nivel=? where id = ?");
		$stmt -> bind_param("siii", $nome, $tag, $nivel, $id);
		$stmt -> execute();

		if(!$stmt -> errno){
			return 0;
		}

		else{
			return 1;
		}

		$stmt -> close();
		$conn -> close();
	}

	public function listar($ordem = "id", $qt = 10){
		include "Acessa.class.php";
		$sql = "Select * from usuarios order by $ordem limit $qt";
		$resultado = $conn -> query($sql);

		if($resultado -> num_rows > 0){
			while($linha = $resultado -> fetch_assoc()){
		$dados[] = array ("id" => $linha["id"], "nome" => $linha["nome"], "tag" => $linha["tag"], "nivel" => $linha["nivel"]);
	}
			return $dados;
		}
		else{
			return 1;
		}
		$conn -> close();
	}
	public function excluir(){
		include "Acessa.class.php";
		$id = $this -> id;

		$sql = "Delete from usuarios where id= ". id;

		if($conn -> query($sql)){
			return 0;
		}

		else{
			return 1;
		}
		$conn -> close();
}

	public function buscar($id){
		include "Acessa.class.php";
		$sql = "Select * from usuarios";
		$sql = " where id = ". $id;

		$resultado = $conn -> query($sql);

		while($linha = $resultado -> fetch_assoc()){
			self::setId($linha["id"]);
			self::setNome($linha["nome"]);
			self::setTag($linha["tag"]);
			self::setNivel($linha["nivel"]);
		}

		$conn -> close();
	}

	public function cadastrar(){
		include "Acessa.class.php";
		$nome = $this -> nome;
		$tag =  $this -> tag;
		$nivel = $this -> nivel;
		$stmt = $conn -> prepare("INSERT INTO usuarios (nome, tag, nivel) VALUES (?,?,?)");
		$stmt -> bind_param("sii", $nome, $tag, $nivel);
		if($stmt -> execute()){
			$this -> id = $stmt -> insert_id;
			return 0;
		}
		else{
			return 1;
		}

		$stmt -> close();
		$conn -> close();
	}





}