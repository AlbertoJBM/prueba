
<!-- llamar a la plantilla patron -->
@extends('layouts.plantilla')
<!-- cambiar el titulo que llamas title  -->
@section('title','CAD -CadastrarOlimpo')
<!-- cambiar el contido para mas de una linea -->
@section('content')
    <h1>CadastrarOlimpo Usuário</h1>
    <!--
     ?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
-->

<form method="POST" action="cadastro.php">
     <!-- nombre -->
    <label>Foto: </label>
    <input type="text" name="foto" placeholder="Digite url da imagen"><br><br>
     <!-- email -->
    <label>Nome: </label>
    <input type="text" name="nome" placeholder="Digite o seu nome"><br><br>
    <!-- idade -->
    <label>idade: </label>
    <input type="int" name="idade" placeholder="Digite a Idade"><br><br>
    <!-- profissao -->
    <label>profissao: </label>
    <input type="text" name="profissao" placeholder="Digite a profesao"><br><br>
    <!-- resumen -->
    <label>resumen: </label>
    <input type="text" name="resumen" placeholder="Digite o resumo"><br><br>



    <!-- la forma de hacer un botton  -->
    <input type="submit" value="Cadastrar">
    <input type="submit" value="Lista">
</form>
@endsection
