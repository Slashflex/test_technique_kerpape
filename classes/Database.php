<?php

class Database
{
    private string $host = "localhost";
    // TODO Renseigner votre nom d'utilisateur et mot de passe utilisateur MySQL 2/2
    private string $user = "NomUtilisateurMySQLAChanger";
    private string $pwd = "MotDePasseAChanger";
    //
    private string $dbName = "test_technique";

    /**
     * @return PDO
     */
    protected function connect(): PDO
    {
        // Data source name
        $dsn = "mysql:host={$this->host};dbname={$this->dbName};";
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}