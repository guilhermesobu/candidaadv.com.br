<div class="container text-white pb-4" id="contact">
    <div class="row d-flex align-items-center">

        <div class="col-12">
            <div>
                <!-- MODAL DE ALERA, EMAIL ENVIADO COM SUCESSO -->
                <button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#mailModal" id="mailModalBtn">
                    Launch demo modal
                </button>

                <div class="modal fade" id="mailModal" tabindex="-1" aria-labelledby="mailModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content border border-white bg-wine">
                            <div class="modal-header border-bottom-0">
                                <h5 class="modal-title text-white" id="mailModalLabel">SUCESSO!</h5>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body bg-white rounded">
                                <p class="font-wine">Seu email foi enviado!</p>
                                <p class="font-wine">Peço que aguarde, logo mais entrarei em contato.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'src/default/mailContact.php'; ?>
        </div>

        <div class="col-12 col-lg-6">
            <div class="row py-2">
                <div class="col-fill p-2 mx-1">
                    <img style="height: 55px;" src="/src/img/icons/Phone-Circle.png">
                </div>
                <div class="col d-flex align-items-center">
                    <div>
                        <p class="m-0 p-0">(19) 3626-8981</p>
                        <p class="m-0 p-0">(19) 99307-2185</p>
                    </div>
                </div>
            </div>

            <div class="row py-2">
                <div class="col-fill p-2 mx-1">
                    <img style="height: 55px;" src="/src/img/icons/Mail-Circle.png">
                </div>
                <div class="col d-flex align-items-center">
                    <p class="m-0 p-0 bold">naiara.candida@adv.oabsp.org.br</p>
                </div>
            </div>

            <div class="row py-2 d-flex align-items-center">
                <div class="col-fill p-2 mx-1">
                    <img style="height: 55px;" src="/src/img/icons/Local-Circle.png">
                </div>
                <div class="col">
                    <p class="m-0 p-0">Av. São Paulo, 1350 - Cidade Nova II</p>
                    <p class="m-0 p-0">Santa Bárbara D'Oeste - SP - CEP: 13454-060</p>
                    <p class="m-0 p-0">Segunda a Sexta - 09h às 17h</p>
                </div>
            </div>
        </div>


        <div class="col-12 col-lg-6">

            <div class="row p-2 justify-content-lg-end justify-content-center">
                <div class="col-fill p-2 bg-wine rounded border border-white" style="height: 198px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5203.882693838823!2d-47.37334998751531!3d-22.73936183762597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c89c76135eab6b%3A0xfeb6f3dc2fec6ac2!2sAv.%20S%C3%A3o%20Paulo%2C%201350%20-%20Cidade%20Nova%202%2C%20Santa%20B%C3%A1rbara%20d&#39;Oeste%20-%20SP%2C%2013454-060!5e0!3m2!1sen!2sbr!4v1601501676625!5m2!1sen!2sbr" width="320" height="180" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

        </div>

    </div>
</div>