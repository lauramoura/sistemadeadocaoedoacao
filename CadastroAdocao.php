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
                <center><h2><p>Cadastro para Adoção</p><h2></center>
                <fieldset class ="primeiro">
                    <legend>Dados Pessoais</legend>
                    Nome:<input type="text" nome="nome"></br>
                    Sobrenome:<input tuype="text" nome="sobrenome"></br>
                    RG:<input type="text" nome="rg"></br>
                    Telefone para contato:<input type="text" neme="contato"></br>
                    E-mail:<input type="text" neme="email"></br>
                    <input type="checkbox" name="receberemail">Desejo receber outras informações por email.
                </fieldset> 
                <fieldset>
                    <legend>Dados do Animal</legend>
                     Preferência<select name=""> 
                        <option>Filhote</option> 
                        <option>Adulto</option>   
                        </select> <br>
                    Comentários Adicionais<textarea rols ="3" cols ="50"> </textarea>
                </fieldset>
                