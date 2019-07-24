<?php

namespace SuusApi\Client;

class Auth
{

    /**
     * @var string $session
     */
    protected $session = null;

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var string $password
     */
    protected $password = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSession()
    {
      return $this->session;
    }

    /**
     * @param string $session
     * @return \SuusApi\Client\Auth
     */
    public function setSession($session)
    {
      $this->session = $session;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->login;
    }

    /**
     * @param string $login
     * @return \SuusApi\Client\Auth
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \SuusApi\Client\Auth
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
