<?php include("cabecalho.php");?>
                <h1>Formulário de Produto</h1>
               
            <form action="adicionaProduto.php">
                 <table class="table">
                     <tr>
                         <td> Nome:</td>
                         <td ><input class="form-control" type ="text" name="produto"></td>
                     </tr>
                     <tr>
                         <td>Preço:</td>
                         <td ><input class="form-control" type ="number" name="preco"></td>
                     </tr>
                     <tr>
                         <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>                   
                     </tr>
                 </table>
            </form>
               
<?php include("rodape.php");?>



