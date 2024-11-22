<?php

require_once __DIR__. "\..\config\database.php";

// Clase que representa a tabela filme no projeto

class Filme{
    private $tabela = 'filme';

    protected $conn;

    private $pdo;

    //colunas da tabela
    public $id;
    public $nome;
    public $ano;
    public $descricao;

    public function __construct(){
        global $pdo;
 
        $this->pdo = $pdo;
    
    }

    // Método de busca todos os filmes
    public function buscartodos(): array{
        $query = "SELECT * FROM $this->tabela";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__ );

        return $stmt->fetchall();

    }

    // Método para buscar filme por id
    public function findById($id): mixed{
        $query = "SELECT * FROM $this->tabela WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__ );

        // echo $stmt->fetch();

        return $stmt->fetch();
    }
    public function excluir($id): mixed{
        $query = "DELETE FROM $this->tabela WHERE id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->rowCount() > 0;

    }
    
}

//     //
//     public function findById($id): void{
//         $query = "SELECT * FROM filme WHERE = id = :id";

//         $stmt = $this->pdo->prepare($query);

//     }
// }