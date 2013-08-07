<html>
    <head> <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Cadastro de Usuário</title>
        <style type ="text/css">
            body{
                background-image: url("patinha.jpg");
                
                
            }
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
            
            label,  input {
            display: block;
            float: left;   
            }

            label {	
            text-align: left;
            width: 45px;
            padding-right: 30px;
            padding-bottom: 20px;
            } 
            br {
            clear: left;
            
            }
            
        </style>
    </head>
    
        <body>
            <form>
                <center><h2><p>Cadastro para Adoção</p><h2></center>
                <fieldset class ="primeiro">
                   
                    <legend>Dados Pessoais</legend>
                    
                    <label for="nome">Nome:</label><input type="text" name="nome" size=40><br/>
                    <label for="sobrenome">Sobrenome:</label><input type="text" name="sobrenome" size=40><br/>
                    <label for="rg">RG:</label><input type="text" name="rg" size=40><br/>
                    <label for="tel">Telefone:</label><input type="text" name="contato" size=40><br/>
                    <label for="email">E-mail:</label><input type="text" name="email" size=40><br/>
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
       </body>
       
 </html>
             