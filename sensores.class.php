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

		$sql = "Delete from bdarduino where id= ". id;

		if($conn -> query($sql)){
			return 0;
		}

		else{
			return 1;
		}
		$conn -> close();
}



}