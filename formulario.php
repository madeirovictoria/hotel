<?php
   if(isset($_POST['submit'])){
    //  print_r($_POST['nome']);
    //  print_r('<br>');
    //  print_r($_POST['Sobrenome']);
    //  print_r('<br>');
    //  print_r($_POST['Cpf']);
    //  print_r('<br>');
    //  print_r($_POST['telefone']);
    //  print_r('<br>');
    //  print_r($_POST['email']);
    //  print_r('<br>');
    //  print_r($_POST['genero']);
    //  print_r('<br>');
    //  print_r('Data de nascimento:' . $_POST['data_nascimento']);
    //  print_r('<br>');
    //  print_r($_POST['nometitular']);
    //  print_r('<br>');
    //  print_r($_POST['numcartao']);
    //  print_r('<br>');
    //  print_r('Data de validade' . $_POST['datavalidade']);
   
    include_once('confg.php');

     $Cpf = $_POST['Cpf'];
     $nome = $_POST['nome'];
     $sobrenome = $_POST['Sobrenome'];
     $telefone = $_POST['telefone'];
     $email = $_POST['email'];
     $genero= $_POST['genero'];
     $data_nascimento = $_POST['data_nascimento'];
     $nometitular = $_POST['nometitular'];
     $numcartao = $_POST['numcartao'];
     $datavalidade = $_POST['datavalidade'];

     $data_entrada= $_POST['data_entrada'];
     $data_saida= $_POST['data_saida'];
     $tipo=$_POST['tipo'];
     $numquarto=$_POST['numquarto'];


     $result = mysqli_query($conexao, "INSERT INTO reserva(cpf,nome,sobrenome,data_nascimento,email,nometitular,numcartao,datavalidade,
     data_entrada,data_saida,tipoquarto,n_quarto) VALUES 
     ('$Cpf','$nome','$sobrenome','$data_nascimento','$email','$nometitular','$numcartao','$datavalidade','$data_entrada','$data_saida','$tipo','$numquarto') ");
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family:Georgia, 'Times New Roman', Times, serif;

             background-image: url(cadastro\ \(2\).jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: ; 

        }
        .box{
            position: absolute;
            color: rgb(0, 0, 0);
            top: 50%;
            left: 50%;
            transform:translate(-50%,-50%) ;
            background-color:rgba(255, 255, 255, 0.8) ;
            padding: 15px;
            border-radius: 15px ;
            width: 35%;
        }
        fieldset{
            border: 3px solid rgb(76, 116, 72);
            padding: 10px;
         }
        legend{
            border:1px solid rgb(60, 145, 82) ;
            padding: 10px;
            text-align: center;
            background-color: rgb(248, 248, 248);
            border-radius: 8px;
            font-family:initial;
            font-weight: bold; 
            font-size: 20px;
           
        }
        .inputBox{
            position: relative;
        }
        .InputUser{
            background:none;
            border: none;
            border-bottom: 1px solid rgb(0, 0, 0);
            outline:none;
            color: rgb(0, 0, 0);
            font-size: 12px;
            width: 100%;
            letter-spacing: 2px;
            font-family:Georgia, 'Times New Roman', Times, serif;
           
        }
        .labelInput{
         position: absolute;
         top: 0px;
         left: 0px;
         pointer-events: none;
         transition: .5s ;
        }
        .InputUser:focus ~ .labelInput,
        .InputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 15px;
            color:rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <!-- <div class="imagem">
        <img src="cadastro.jpeg" alt="cadastro" srcset="">
    </div> -->
     <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><b></b>Cadastre-se</legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="InputUser" required>
                    <label for="name" class="labelInput">Nome:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Sobrenome" id="Sobrenome" class="InputUser" required>
                    <label for="Sobrenome" class="labelInput">Sobrenome:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Cpf" id="Cpf" class="InputUser" required>
                    <label for="Cpf" class="labelInput">Cpf:</label>
                </div>
                <br>
                
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="InputUser" required>
                    <label for="telefone" class="labelInput">Telefone:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="InputUser" required>
                    <label for="email"  class="labelInput">Email:</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <br>
                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="InputUser" required>
                    
                </div>
                <br>
                <h3>Forma de Pagamento:</h3>
                <br>
                <div class="inputBox">
                    <input type="text" name="nometitular" id="nometitular" class="InputUser" required>
                    <label for="nametitular" class="labelInput">Nome do Titular:</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="number" name="numcartao" id="numcartao" class="InputUser" required>
                    <label for="numcartao" class="labelInput">Número do cartão:</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <label for="datavalidade"><b>Data de Validade:</b></label>
                    <input type="date" name="datavalidade" id="datavalidade" class="InputUser" required>
                </div>
                <br>
                <h3>Reserva:</h3>
                 <br>
                <div class="inputBox">
                <label for="data_entrada"><b>Data de Entrada:</b></label>
                <input type="date" name="data_entrada" id="data_entrada" class="InputUser" required>
                </div>
                <br>
                <div class="inputBox">
                <label for="data_saida"><b>Data de Saída:</b></label>
                <input type="date" name="data_saida" id="data_saida" class="InputUser" required>
                </div>
                <br>
                <div class="inputBox">
                <label for="tipo">Tipo do quarto:</label>
                <select name="tipo" id="tipo" class="InputUser">
                    <option value="Premium plus.">Premium plus.</option>
                    <option value="Premium.">Premium.</option>
                    <option value="Master.">Master.</option>
                    <option value="Simples.">Simples.</option>
                    </select>
                </div>
                <br>
                <div class="inputBox">
                    <input type="number" name="numquarto" id="numquarto" class="InputUser" required>
                    <label for="numquarto" class="labelInput">Número do quarto:</label>
                </div>

                <input type="submit" name="submit" id="submit" href="">
            </fieldset>
        </form>
     </div>
</body>
</html>