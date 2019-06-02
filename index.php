<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>CadastroCoqueteis</title>
        <link rel='stylesheet' href="materialize/css/materialize.min.css">
    </head>
    <body>
        <nav class="blue-grey">
            <div class="nav-wrapper container">
                <div class="brand-logo light">Bar System</div>
                <ul class="right">
                    <li><a href=""><i class="material-icons left">account_circle</i>Cadastro</a></li>
                    <li><a href=""><i class="material-icons left">search</i>Consultas</a></li>
                </ul>          
            </div>
        </nav>
        
        <div class="row.container">
            <p>&nbsp;</p>
            <form action="Banco_de_dados/create.php" method="post" class="col s12">
                <fieldset class="formulario"> 
                    <legend><img src="imagens/c.png" alt="[imagem]" width="100"></legend>
                        <h5 class="light center">Cadastro de Coquetéis</h5>
                        
                    <div class="input-field col s12">
                    <i class="material-icons prefix">local_bar</i>
                    <br>
                   <input type="text" name="NomeCoquetel" id="NomeCoquetel" maxlength="50" required autofocus>
                   <label for="NomeCoquetel">Nome do Coquetel</label>
                    </div>
                   
                   
                   <div class="input-field col s12">
                    <i class="material-icons prefix">attach_money</i>
                   <br>
                   <input type="text" name="PrecoCoquetel" id="PrecoCoquetel" maxlength="50" required>
                   <label for="PrecoCoquetel">Preço do Coquetel</label>
                   </div>
            
                       
                    <div class="input-field col s12">
                        <input type="submit" value="cadastrar" class="btn blue">
                        <input type="reset" value="limpar" class="btn red">
                    </div>
                    
                </fieldset>
                    
            </form>
        </div>  
        
        
        
        
        <script type="text/javascript" src="materialize/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="materialize.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function (){
                
            } );
        
        
       
        </script>
    </body>
</html>
