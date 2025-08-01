<?php
require_once(__DIR__."/../model/Aluno.php");
require_once(__DIR__."/../model/Curso.php");

$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
//RECEBER OS DADOS DO FORM


if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $idade= $_POST['idade']
    $estrangeiro = $_POST['estrang']
    $idCurso = $_POST['curso'];

    $aluno = new Aluno;
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrangeiro);
    $curso = new Curso;
    $aluno->setCurso($curso);


}







include_once(__DIR__."/form.php");

?>