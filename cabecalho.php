<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./bootstrap.min.css" rel="stylesheet"/>
    <style>
        a.nav-link{ 
	        color:whitesmoke;	
        }
        h1{
            text-align: center;
        }
        button{
            margin-right:-40px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.png" width="85" height="45">
            </a>
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./professores.php">Professores</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastro
                    </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Alunos</a></li>
                        <li><a class="dropdown-item" href="#">Funcionários</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./salas.php">Salas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./disciplinas.php">Disciplinas</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">

