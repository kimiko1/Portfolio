<?php

namespace Model;

class user
{
    private $id;
    private $email;
    private $username;
    private $password;
    private $role;
    private $image;

    public function __construct($id, $email, $username, $password, $role, $image)
    {
        $this->id = $id;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->image = $image;
    }

    /**
     * Accesseur de id qui retourne l'id de la personne
     * @param mixed $id
     * @return void
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Accesseur de email qui retourne l'email de la personne
     * @param mixed $email
     * @return void
     */
    public function getEmail()
    {
        return $this->email;
    }
        /**
     * Accesseur de username qui retourne l'identifiant de la personne
     * @param mixed $username
     * @return void
     */
    public function getUsername()
    {
        return $this->username;
    }   
    /**
     * Accesseur de password qui retourne de mot de passe de la personne
     * @param mixed $password
     * @return void
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Accesseur de role qui retourne le role de la personne
     * @param mixed $role
     * @return void
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Accesseur de image qui retourne l'image de la personne
     * @param mixed $image
     * @return void
     */
    public function getImage()
    {
        return $this->image;
    }
}

?>