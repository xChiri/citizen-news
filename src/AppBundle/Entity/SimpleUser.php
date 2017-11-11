<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SimpleUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     * 
     * @Assert\Length(
     *          min = 2,
     *          max = 20,
     *          minMessage = "Your user name must be at least 2 characters long",
     *          maxMessage = "Your user name cannot be longer than 20 characters"
     *)
     */
    private $username;
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     * @Assert\Length(
     *          min = 6,
     *          max = 20,
     *          minMessage = "Your password must be at least 6 characters long",
     *          maxMessage = "Your password cannot be longer than 20 characters"
     *)
     */
    private $password;
    
    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}