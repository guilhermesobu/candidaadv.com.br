<?php

if (!isset($_POST["eMail"])) {
?>
    <div class="row mb-4 justify-content-center">
        <div class="col-lg-6 col-10">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row justify-content-center">

                    <div class="col-lg-6 col-12 mt-3">
                        <label>Nome:</label>
                        <input class="form-control" type="text" name="realname" id="mailname" placeholder="Digite aqui seu nome." />
                    </div>

                    <div class="col-lg-6 col-12 mt-3">
                        <label>E-mail:</label>
                        <input class="form-control" type="text" name="eMail" id="mailemail" placeholder="Digite aqui seu e-mail." />
                    </div>

                    <div class="col-12 mt-3">
                        <label>Mensagem:</label>
                        <textarea class="form-control" name="texto" id="mailtext"> </textarea>
                    </div>

                    <div class="col-12 text-center mt-3">
                        <button class="btn btn-light text-wine align-self-center" type="submit" value="Enviar" id="mailbtn">ENVIAR MENSAGEM</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    


<?php } else {
    function checaDados($vet)
    {
        foreach ($vet as $val) {
            if (preg_match("/(%0A|%0D|\n+|\r+)/i", $val) != 0) {
                echo "Tentativa de injeção de dados.";
                return 1;
            }
        }
        return 0;
    }

    //Const
    define("TO", "naiara@candidaadv.com.br");
    define("ASS", "Contato via p&Aacute;gina WEB.");
    //if (checaDados($_POST)){ exit(1); }
    // send mail :
    $_POST['message'] = "Mensagem de " . $_POST['realname'] . "\nEmail: " . $_POST['eMail'];
    $_POST['message'] .= "\n\n" . $_POST['texto'];
    $_POST['eMail'] = "From: " . $_POST['eMail'];
    if (mail(TO, ASS, $_POST['message'], $_POST['eMail'])) {
        // display confirmation message if mail sent successfully
        //header("Location: obrigado.html");
        //Para utilizar a funcao header nao pode haver nenhum dado enviado antes do header
        //Redirecionamento por META tag:
        echo "<script>
            var mailModalJs = document.querySelector('#mailModalBtn');

            function clickModal() {
                mailModalJs.click();
            }
            setTimeout(clickModal, 1);
        </script>";

        echo '<meta http-equiv="refresh" content="0;url=https://www.candidaadv.com.br/" />';
        //Redirecionamento por JavaScript: 
        //echo " <script> location='http://www.seudominio.com.br/' </script> "; 
    } else {
        // sending failed, display error message
        echo "<p>Seu e-mail nao p&ocirc;de ser enviado.</p>";
    }
} //else
?>