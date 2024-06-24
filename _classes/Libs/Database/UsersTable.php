<?php

namespace Libs\Database;

use dbException;

class UsersTable
{
    private $db = null;
    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }
    // admin authorization and admin controller

    public function registerUser($email, $password)
    {
        $query = "INSERT INTO user (email, password) VALUES (:email, :password)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            return $this->db->lastInsertId(); // Return the ID of the inserted record
        } else {
            return false;
        }
    }

    public function getUserByEmail($email)
    {
        $query = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getUserById($id)
    {
        $query = "SELECT * FROM user WHERE user_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // 

    public function updateUserProfileImage($userId, $imageName)
    {
        $query = "UPDATE user SET user_profile = :profile_image WHERE user_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':profile_image', $imageName);
        $stmt->bindParam(':id', $userId);
        return $stmt->execute();
    }

    public function updateUserInfo($userId, $name, $phone, $address)
    {
        $query = "UPDATE user SET user_name = :name, phone_number = :phone, address = :address WHERE user_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':id', $userId);
        return $stmt->execute();
    }
}
