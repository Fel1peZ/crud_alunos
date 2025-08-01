<?php
    require_once(__DIR__."/../../controller/CursoController.php");
    $cursoCont = new CursoController();
    $cursos = $cursoCont->listar();
    include_once(__DIR__."/../include/header.php");
    

?>
    <h3>Inserir alunos</h3>

    <form method="POST" action="">

        <div>
            <label for="txtNome">Nome:</label>
            <input type="text" id="txtNome" name="nome"
                placeholder="Informe o nome">

        </div>
        <div>
            <label for="txtIdade">Idade:</label>
            <input type="text" id="txtIdade" name="idade"
                placeholder="Informe a idade">
                
        </div>
        <div>
            <label for="selEstrang">Estrangeiro:</label>
            <select name="estrang" id="selEstrang">
                <option value="">---Selecione---</option>
                <option value="S">Sim</option>
                <option value="N">Não</option>
            </select>
                
        </div>
        <div>
            <label for="selCurso">Curso:</label>
            <select name="curso" id="selCurso">
                <option value="">---Selecione---</option>
                <?php               
                    foreach ($cursos as $c) {
                        echo "<option value='".$c->getId()."'>".$c."</option>";
                    }
                ?>
            </select>
                
        </div>

        <div>
            <button type="submit">Gravar</button>
        </div>




    </form>


<?php
    include_once(__DIR__."/../include/footer.php");

?>