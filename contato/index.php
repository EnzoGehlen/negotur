
<?php
$active = 6;
include('../header.php');
?>
<body>
    <!--header start here-->
  
    <!--header end here-->
    <!--message start here-->
    <div class="message">
        <div class="container">
            <div class="message-main">
                <div class="message-bottom">
                    <div class="col-md-6 message-left">
                        <div class="con-info">
                            <h3>Informação de Contato</h3>
                            <p> Maiores informações siga-nos nas redes sociais, responderemos dentro de 24 horas apos o envio</p>
                        </div>
                        <div class= "con-addr">
                            <h4>Endereço</h4>
                            <p>Endereço: Rodovia SC 416 - São João do Oeste</p>
                            <p>Cep: 89897-000 </p>
                            <p>E-mail : <a href="@negoturvigenseturismo">@negoturvigenseturismo</a></p>
                            <p>Telefone :  (49) 99134-6769</p>
                        </div>
                        <div class="col-sm-5 col-sm-offset-1 footer-right">

                            <div class="footer-social">
                                <a href="https://www.facebook.com/faiesc/?ref=br_rs" target="blank "><i class="fa fa-facebook"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 message-right">
                        <form>
                            <input type="text" value="Nome" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Name';
                                                    }"/>
                            <input type="text" value="Telefone" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Name';}"/>
                            <input type="text" value="Cidade" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Name';
                                                        }"/>
                            <input type="text" class="mar-last" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Email';
                                                        }"/>
                            <textarea onfocus="this.value = '';" onblur="if (this.value == '') {
                                                            this.value = 'Message';
                                                        }"/>Mensagem</textarea>
                            <input type="submit" value="Enviar"/>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113670.1539402203!2d-53.66093212550226!3d-27.087231544591912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fbb18cf914e9d5%3A0xc51df48dc72adc86!2sS%C3%A3o+Jo%C3%A3o+do+Oeste+-+SC!5e0!3m2!1spt-BR!2sbr!4v1529462558181" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--message end here-->
    <!--footer start here-->
    <?php
    include('../footer.php');
    ?>
    <!--footer end here-->
</body>
</html>