<?php
    include_once './config/Connect.php';

    class Students extends Connect {
        public function __construct()
        {
            parent::__construct();
        }
        public function store($name,$email,$phone)
        {
            $sql = "INSERT INTO `student`(`name`, `email`, `phone`) VALUES ('$name','$email','$phone')";
            $pre = $this->conn->prepare($sql);
            $pre->bindParam(':name', $name);
            $pre->bindParam(':email', $email);
            $pre->bindParam(':phone', $phone);

            $create = $pre->execute();
        }

    }