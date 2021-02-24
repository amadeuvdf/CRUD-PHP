<?php
class DbConfig 
{    
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = 'password';
    private $_database = 'teste';
    
    protected $connection;
    
    public function __construct()
    {
        if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->connection) {
                echo 'Não conseguiu conectar ao servidor de Banco de dados';
                exit;
            }
            //echo 'Conexão com banco de dados feita com sucesso';
        }    
        
        return $this->connection;
    }
}
?>