<?php

    require_once(__DIR__ . "/../../model/Aluno.php");
    require_once(__DIR__ . "/../../controller/AlunoController.php");


    $msgErro = "";
    $aluno = null;

    if(isset($_POST['nome'])) {
    //Usuário já clicou no gravar
        $id          = $_POST['id'];
        $nome        = trim($_POST['nome']) ? trim($_POST['nome']) : NULL;
        $idade       = is_numeric($_POST['idade']) ? $_POST['idade'] : NULL;
        $estrangeiro = trim($_POST['estrang']) ? trim($_POST['estrang']) : NULL;
        $idCurso     = is_numeric($_POST['curso']) ? $_POST['curso'] : NULL;


        $aluno = new Aluno();
        $aluno->setId($id);
        $aluno->setNome($nome);
        $aluno->setIdade($idade);
        $aluno->setEstrangeiro($estrangeiro);

        $curso = new Curso();
        $curso->setId($idCurso);
        $aluno->setCurso($curso);

        //chamar o controller
        $alunoCont = new AlunoController();
        $erros = $alunoCont->alterar($aluno);

        if(! $erros){
            header("location: listar.php");
        } else{

            $msgErro = implode("<br>",$erros);
        }


        //$alunoCont->atualizarRegistro($aluno);
    }else{

    

    $id = 0;
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }

    $alunoCont = new AlunoController;
    $aluno = $alunoCont->buscarPorId($id);

    if(! $aluno){
        echo"Id do aluno é inválido<br>";
        echo"<a href='listar.php'>Voltar</a>";
        exit;
    }
    }

    include_once(__DIR__ . "/form.php");