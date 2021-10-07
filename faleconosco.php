<?php 
    include "include/header.php"; 
?>


<section class="container">

    <div class="col">
    <h1>Oque Esperamos</h1>
    <p>A <strong>Martins Imóveis</strong> deseja sempre contar com a sua participação para melhorar ainda mais nosso atendimento. Sempre que precisar, entre em contato conosco para tirar suas mais diversas dúvidas, dar sugestões, fazer reclamações,
                críticas, e até mesmo elogios aos nossos serviços e atendimentos. </p>
                <p>Desejamos com isso poder estar sempre aprimorando nosso atendimento. Nossa equipe terá imensa satisfação em atendê-los.</p>
        </p>
        <img src="imagens/caixa.png" class="w-30">
        <p>A Martins Imóveis em parceria com a caixa econômica federal.</p>
    </div>
    <div class="col">
        <p id="text-mail"><strong> Mande-nos um e-mail:</strong></p>
            <a href="mailto:martinsimoveis@martinsimoveis.com">martinsimoveis@martinsimoveis.com</a>
            </p>
            <p id="voz"><strong>Canais de Voz:</strong> </p> 
            <p> 2401-2142 | 3462-8101 | 8899-2142 | 8755-2142 </p>

        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.7422794039717!2d-43.467249685034666!3d-22.885976885022384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bdfc005466bd1%3A0x864ac2c396423286!2sR.%20Rio%20da%20Prata%2C%20245%20-%20Bangu%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2021820-096!5e0!3m2!1spt-BR!2sbr!4v1632855790028!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="col">
    <form method="POST" action="scripts/send_mail.php">
                <h1>Fale Conosco!</h1>
                    <label>Nome:</label>
                    <input type="text" name="name">
                <br>
                <label>E-mail:</label>
                <input type="email" name="email">
                <br> Mensagem:
                <br>
                <textarea style="resize:none" name="msg"></textarea>
                <br>
                <input type="submit" value="Enviar">
            </form>
    </div>

</section>

<?php include "include/footer.php"; ?>