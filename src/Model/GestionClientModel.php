<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gestionClientModel
 *
 * @author vedrenne.alexis
 */
namespace APP\Modele;

use \PDO;
use APP\Entity\Client;
use Tools\Connexion;
class GestionClientModel {
    
    public function find(int $id):Client{
        $unObjetPdo= Connection::getConnexion();
        $sql="select * from CLIENT where id=:id";
        $ligne=$unObjetPdo->prepare($sql);
        $ligne->bindValue('')
    }
}
