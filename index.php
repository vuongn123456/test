<!DOCTYPE html>
<html>

<head>
	<?php include_once './includes/head.php'; ?>
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<?php include_once './layout/header.php'; ?>
		</div>

		<div class="sidebar">
			<?php include_once './layout/sidebar.php'; ?>
		</div>

		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
                    <?php
                        $page = 'student';
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        }

                        switch ($page) {
                            case 'student':
                                include_once './Controller/StudentController.php';
                                $student = new StudentController;
                                break;
                            default:
                                echo "Page 404 not found";
                                break;
                        }
                    ?>
				</div>
			</div>

			<?php include_once './layout/footer.php'; ?>
		</div>
	</div>

	<?php include_once './includes/script.php'; ?>
</body>

</html>