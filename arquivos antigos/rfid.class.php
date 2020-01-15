<?
Class RFID(){

	private $nome;
	private $rfid;
	private $id;

	public function getNome(){
		return $this-> nome;
	}

	public function setNome($nome){
		$this-> nome = $nome;
	}

	public function getRfid(){
		return $this-> rfid;
	}

	public function setRfid($rfid){
		$this-> rfid = $rfid;
	}

	public function getId(){
		return $this-> id;
	}

	public function setId($id){
		$this-> id = $id;
	}

	public function excluir(){
		include "Acessa.class.php";
		$id = $this -> id;

		$sql = "Delete from tbsensores where id= ". id;

		if($conn -> query($sql)){
			return 0;
		}

		else{
			return 1;
		}
		$conn -> close();
}

	public function listar($ordem = "id", $qt = 20){
		include "Acessa.class.php";
		$sql = "Select * from tbsensores order by $ordem limit $qt";
		$resultado = $conn -> query($sql);

		if($resultado -> num_rows > 0){
			while($linha = $resultado -> fetch_assoc()){
				 $dados[] = array ("id" => $linha["id"], "nome" => $linha["nome"], "rfid" => $linha["rfid"]);
			}
			return $dados;
		}
		else{
			return 1;
		}
		$conn -> close();
	}

	public function alterar(){
		include "Acessa.class.php";
		$nome = $this -> nome;
		$id = $this -> id;
		$stmt = $conn -> prepare("Update calcado set calcado=? where id = ?");
		$stmt -> bind_param("si", $nome, $id);
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



}