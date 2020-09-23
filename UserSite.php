<?php

include_once ("Utilisateur.php");


class UserSite extends Utilisateur
{

    protected $groupe;
    protected $cours = [];
    protected $resultats = [];
    protected $productions = [];

}