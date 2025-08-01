<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL); 

require_once(__DIR__. "/../../model/Aluno.php");
require_once(__DIR__. "/../../controller/AlunoController.php");



//RECEBER OS DADOS DO FORM

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $idade= $_POST['idade'];
    $estrangeiro = $_POST['estrang'];
    $idCurso = $_POST['curso'];
    
    $aluno = new Aluno;
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrangeiro);
    
    $curso = new Curso;
    $curso->setId($idCurso);
    $aluno->setCurso($curso);

    $alunoCont = new AlunoController($aluno);
    $alunoCont->inserir($aluno);
    
}




include_once(__DIR__."/form.php");

?>

<a href="listar.php">Voltar</a>