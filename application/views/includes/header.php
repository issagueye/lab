<?php require('../application/views/includes/inc/table_fetch.php');?>

<?php require ('../application/views/includes/inc/password_edit.php');?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>LAB+</title>

        <!-- Switchery css -->
        <link href="../application/views/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
            <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../application/views/assets/plugins/morris/morris.css">
        

        <link href="../application/views/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!-- Custom box css -->
        <link href="../application/views/assets/plugins/custombox/css/custombox.min.css" rel="stylesheet">
         <!-- DataTables -->
        <link href="../application/views/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../application/views/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="../application/views/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="../application/views/assets/css/style.css" rel="stylesheet" type="text/css" />
          <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Modernizr js -->
        <script src="../application/views/assets/js/modernizr.min.js"></script>

        <!-- Custom box css -->
        <link href="../application/views/assets/plugins/custombox/css/custombox.min.css" rel="stylesheet">

        <!-- App CSS -->
        <link href="../application/views/assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Modernizr js -->
        <script src="../application/views/assets/js/modernizr.min.js"></script>

    </head>


    <body>

     <?php require ('../application/views/includes/includes/header_bar.php');?>
     <?php include('header_end.php');
            if ($_SESSION['type'] == 1) 
            require '../application/views/includes/topbar-navigation.php'; ?>
    
            <?php require '../application/views/includes/menu-navigation.php'; ?>
     
     
     <?php require ('../application/views/includes/includes/password_modal.php');?>