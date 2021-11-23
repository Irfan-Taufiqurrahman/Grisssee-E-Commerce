<!-- tampilan index atau tampilan setelah login -->
<!-- Login -->
<title><?= $title; ?></title>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('') ?>admin_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('') ?>admin_assets/https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="<?= base_url('') ?>admin_assets/https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="<?= base_url('') ?>admin_assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'nunito';
        }

        .header h1 {
            font-size: 70px;
            color: black;
        }

        #pembuka {
            font-family: 'Noto Sans';
            color: black;
            font-size: 20px;
        }

        #pembuka span {
            color: red;
            font-size: 30px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {

            .leftcolumn,
            .rightcolumn {
                width: 100%;
            }
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">