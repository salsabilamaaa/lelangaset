<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="../dropify/dist/js/dropify.js">
    <link rel="stylesheet" type="text/css" href="../dist/css/dropify.css">
    <link rel="stylesheet" href="../dist/fonts/*"> -->

    <style>
        body,
        nav,
        footer {
            font-family: 'Poppins', sans-serif;
        }

        .txt-bold {
            font-weight: 600;
        }

        .txt-md {
            font-weight: 500;
        }

        p {
            font-weight: 400;
        }

        .status-box-green {
            width: auto;
            height: 40px;
            background-color: #479F76;
        }

        .status-box-yellow {
            width: auto;
            height: 40px;
            background-color: #FFC107;
        }

        .status-box-red {
            width: auto;
            height: 40px;
            background-color: #E35D6A;
        }

        .status-box-blue {
            width: auto;
            height: 40px;
            background-color: #3D8BFD;
        }

        .status-box-grey {
            width: auto;
            height: 40px;
            background-color: #ADB5BD;
        }

        .card:hover {
            transform: scale(1.005);
            box-shadow: rgba(0, 0, 0, 0.10) 0px 10px 15px -3px
        }

        .img-4 {
            object-fit: cover;
            width: auto;
            height: 250px;
        }

        label.error {
            color: red;
            font-size: 1rem;
            display: block;
            margin-top: 5px;
        }

        input.error {
            border: 1px dashed red;
            font-weight: 300;
            color: red;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #F9F9F9;">
    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layout/footer'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="../asset/js/form-validation.js"></script> -->
</body>

</html>