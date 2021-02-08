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
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbName};";
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo '<p class="btn-success mx-auto fixed-top text-center db-ok py-2">Connexion à la base de données <strong>test_technique</strong> réalisée avec succès</p>';
            return $pdo;
        } catch (PDOException $e) {
            echo '<p class="btn-danger mx-auto fixed-top text-center py-2">'.$e->getMessage().'</p>';
        }
    }
}