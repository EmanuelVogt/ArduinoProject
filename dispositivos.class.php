<?php

Class Dispositivos{

	private $nome;
	private $id;
	private $idDisp;
	private $nivel;

	public function getNome(){
		return $this-> nome;
	}

	public function setNome($nome){
		$this-> nome = $nome;
	}

	public function getId(){
		return $this-> id;
	}

	public function setId($id){
		$this-> id = $id;
	}

	public function getIdDisp(){
		return $this-> idDisp;
	}

	public function setIdDisp($idDisp){
		$this-> idDisp = $idDisp;
	}

	public function getNivel(){
		return $this-> nivel;
	}

	public function setNivel($nivel){
		$this-> nivel = $nivel;
	}

	public function cadastrar(){
		include "Acessa.class.php";
		$nome = $this-> nome;
		$idDisp =  $this-> idDisp;
		$nivel = $this-> nivel;
		$stmt = $conn -> prepare("INSERT INTO dispositivos (nome, idDisp, nivel) VALUES (?,?,?)");
		$stmt -> bind_param("sii", $nome, $idDisp, $nivel);
		//$stmt -> bind_param(":s, :i, :i", $nome, $idDisp, $nivel);
		if($stmt->execute()){
			$this-> id = $stmt-> insert_id;
			return 0;
		}
		else{
			return 1;
		}

		$stmt -> close();
		$conn -> close();
	}

	public function alterar(){
		include "Acessa.class.php";
		$nome = $this -> nome;
		$idDisp = $this -> idDisp;
		$nivel = $this -> nivel;
		$id = $this -> id;
		$stmt = $conn -> prepare("Update dispositivos set nome=?, idDisp=?, nivel=? where id = ?");
		$stmt -> bind_param("siii", $nome, $idDisp, $nivel, $id);
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
		$sql = "Select * from dispositivos order by $ordem limit $qt";
		$resultado = $conn -> query($sql);

		if($resultado -> num_rows > 0){
			while($linha = $resultado -> fetch_assoc()){
	 $dados[] = array ("id" => $linha["id"], "nome" => $linha["nome"], "idDisp" => $linha["idDisp"], "nivel" => $linha ["nivel"]);
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

		$sql = "Delete from dispositivos where id= ". id;

		if($conn -> query($sql)){
			return 0;
		}

		else{
			return 1;
		}
		$conn -> close();
}

 	public function buscar($idClient){
		include "Acessa.class.php";
		$sql = "Select * from dispositivos";
		$sql = " where id = ". $id;

		$resultado = $conn -> query($sql);

		while($linha = $resultado -> fetch_assoc()){
			self::setId($linha["id"]);
			self::setNome($linha["nome"]);
			self::setIdDisp($linha["idDisp"]);
			self::setNivel($linha["nivel"]);


		}

		$conn -> close();
	}






}