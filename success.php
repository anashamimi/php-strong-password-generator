<?php
session_start();
$password = $_SESSION['password'];
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>esercizio</title>
</head>



<body>
    <div  class="d-flex justify-content-center align-items-center flex-column gap-4">
        <h1 class=" text-center p-5 text-white">PASSWORD GENERATOR MOLTO SICURA MA DIFFICILE DA RICORDARE</h1>
        <div  class="bg-form w-75 d-flex justify-content-center align-items-center flex-column p-5 rounded-4">
            <p class="text-white p-0">Questa è la tua password:</p>
            <p class=" text-warning fs-3"><?php echo $_SESSION['password']; ?></p>
            <form action="index.php" method="GET" class=" d-flex flex-column justify-content-center align-items-center ">                
                <button type="subtim" class="btn btn-success text-uppercase">Torna alla home</button>
            </form>
        </div>
        
    </div>

</body>

</html>