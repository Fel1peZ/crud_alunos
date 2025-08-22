<?php
    require_once(__DIR__ . "/../../model/Aluno.php");
    require_once(__DIR__ . "/../../controller/AlunoController.php");

    $msgErro = "";
    $aluno = null;

//Recber o id do aluno get
if(isset($_GET['id']))
    $id =$_GET['id'];

//Chamar o controler para excluir

$alunoCont = new AlunoController;
$alunoCont->buscarPorId($id);






$erros = $alunoCont->excluir($id);




 //Verifica se deu erro
    // Se deu erro exibe o erro na prorpia pagina
     if(! $erros){
            header("location: listar.php");
            exit;
        } else{

            $msgErro = implode("<br>",$erros);
        }
/*else{
    echo "Aluno não encontrado! <br>";
    echo "<a href='listar.php'>Voltar</a>";

}*/

    //Se nao deu erro sucesso volta pro listar