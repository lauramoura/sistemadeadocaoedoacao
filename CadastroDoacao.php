<html>
    <head> <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Cadastro de Usuário</title>
        <style type ="text/css">
            form{
                    border-style: solid;
                    border-width: 5px;
                    width: 520px;
                    position: absolute;
                    left: 50%;
                    margin-left: -260px;
                    background-color: FF9966;
                }
            
            input.submit{
                    width: 100px;
                    position: absolute;
                    left: 50%;
                    margin-left: -50px;
                    margin-top: -30px;
            }
        </style>
    </head>
        <body>
             
            
            <form>
                <center><h2><p>Cadastro para Doação</p><h2></center>
                <fieldset class ="primeiro">
                    <legend>Dados Pessoais</legend>
                    Nome:<input type="text" name="nome"></br>
                    Sobrenome:<input type="text" name="sobrenome"></br>
                    RG:<input type="text" nome="rg"></br>
                    Telefone para contato:<input type="text" name="contato"></br>
                    E-mail:<input type="text" name="email"></br>
                    <input type="checkbox" name="receberemail">Desejo receber outras informações por email.
                </fieldset> 
                <fieldset>
                    <legend>Dados do Animal</legend>
                     O animal é filhote ou Adulto?<select name=""> 
                        <option>Filhote</option> 
                        <option>Adulto</option>   
                        </select> <br>
                     Qual o estado de Saúde do Animal?<select name=""> 
                        <option>Bom</option> 
                        <option>Regular</option>
                        <option>Péssimo</option> 
                        </select> <br>
                     Sexo do Animal?<select name=""> 
                        <option>Macho</option> 
                        <option>Femea</option>   
                        </select> <br>
                     Raça do Animal:<input type="text" name="raça"></br>
                     Cor do Animal:<input type="text" name="cor"></br>
                     Comentários Adicionais<textarea rols ="3" cols ="50"> </textarea>
                </fieldset>