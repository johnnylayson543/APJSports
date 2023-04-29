<?php

class User
{
    //creating all the variables
    private int $userID = 0;
    private String $email = "null";
    private String $password = "null";
    private String $firstName = "GUEST";
    private String $surname = "null";
    private String $address = "null";

    /**
     * @param int $userID
     * @param string $email
     * @param string $password
     * @param string $firstName
     * @param string $surname
     * @param string $address
     */
    public function __construct(int $userID, string $email, string $password, string $firstName, string $surname, string $address)//constructor
    {
        $this->userID = $userID;
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->address = $address;
    }
    //all the getters and setters
    /**
     * @return int
     */
    public function getUserID(): int
    {
        return $this->userID;
    }

    /**
     * @param int $userID
     */
    public function setUserID(int $userID): void
    {
        $this->userID = $userID;
    }

    /**
     * @return String
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param String $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return String
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param String $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return String
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param String $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return String
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param String $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return String
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param String $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

}