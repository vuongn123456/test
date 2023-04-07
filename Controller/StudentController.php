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
                default:
                    echo "404";
                    break;
            }

        }


        public function index()
        {
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";

            include_once './pages/students/list_student.php';
        }
    }

