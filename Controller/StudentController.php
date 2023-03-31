<?php
    include_once './Models/Students.php';

    class StudentController extends Students
    {
        public function __construct()
        {
            parent::__construct();

            $method = 'list';
            if(isset($_REQUEST['method'])){
                $method = $_REQUEST['method'];
            }

            switch ($method){
                case 'list':
                    $this->index();
                    break;
                case 'create':
                    $this->create();
                    break;
                default:
                    echo "404";
                    break;
            }

        }


        public function index()
        {
            include_once './pages/students/list_student.php';
        }

        public function create()
        {

           if(isset($_POST['name'])){
               $name = $_POST['name'];
               $email = $_POST['email'];
               $phone = $_POST['phone'];
               parent::store($name,$email,$phone);
           }

            include_once './pages/students/add_student.php';

        }
    }

