<?php


class DBConnect {
    private $servername = "127.0.0.1";
    private $username = "root";
    private $password = "123mudar";
    private $dbname = "portaria";
    private $conn = NULL;

    public function __construct() {         
        try {
            $dsn = "mysql:host=$this->servername;dbname=$this->dbname";
            $this->conn = new PDO($dsn, $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Erro ao conectar: " . $e->getMessage();
        }
	} 

    public function select_veiculos(){
        try {
            $sql = "SELECT * FROM veiculos";
            $stmt = $this->conn->query($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
            return;
        }
        return $stmt;
    }

    public function select_registros($placa){
        try {
            $sql = "SELECT * FROM registro WHERE veiculos_id = ". $placa ;
            $stmt = $this->conn->query($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
            return;
        }
        return $stmt;
    }

    public function inserir_veiculo($aluno, $placa) {
        try {
            $sql = "INSERT INTO `veiculos` (`id`, `aluno`, `placa`) VALUES (NULL, '" .$aluno. "','" .$placa. "')";
            $stmt = $this->conn->query($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
            return;
        }
        return $stmt;
    
    }

    public function __destruct() { 
        $this->conn = NULL;
	} 
}
?>
