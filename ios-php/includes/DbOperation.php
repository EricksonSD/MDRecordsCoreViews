<?php

class DbOperation
{
    private $conn;
 
    //Constructor
    function __construct()
    {
        require_once dirname(__FILE__) . '/Constants.php';
        require_once dirname(__FILE__) . '/DbConnect.php';
        // opening db connection
        $db = new DbConnect();
        $this->conn = $db->connect();
    }
 
    //Function to create a new user
    public function createUser($firstname, $lastname, $email, $middlename)
    {
        if (!$this->isUserExist($firstname, $email)) {
           // $lastname = md5($lastname);
            $stmt = $this->conn->prepare("INSERT INTO patient_info (firstname, lastname, email, middlename) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $firstname, $lastname, $email, $middlename);
            if ($stmt->execute()) {
                return USER_CREATED;
            } else {
                return USER_NOT_CREATED;
            }
        } else {
            return USER_ALREADY_EXIST;
        }
    }
 
 
    private function isUserExist($firstname, $email)
    {
        $stmt = $this->conn->prepare("SELECT id FROM patient_info WHERE firstname = ? OR email = ?");
        $stmt->bind_param("ss", $firstname, $email);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }
}