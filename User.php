<?php

class User
{

    public $name, $lastname, $Age;
    public $message;

    public function setAge($Age)
    {
        if ($Age > 20)
        {
            $this->aAge = $Age;
        } else
        {
            $this->Age = 'you have need more times';
        }
    }

    /**
     * This Function Get the Users Fav Message
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function getAge()
    {
        return $this->Age;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

}