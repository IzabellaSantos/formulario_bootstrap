<?php
include_once('db_connection.php'); //require_once gives an fatal error
include_once('assests.php');
?>

<div class="container">
    <div class="card col-md-6 mb-3">
        <h5 class="card-header">Formulário</h5>
        <div class="card-body">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome" required autofocus>
                        <div class="invalid-feedback">
                            Por favor, complete o campo.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" required>
                        <div class="invalid-feedback">
                            Por favor, complete o campo.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep" placeholder="CEP" required>
                        <div class="invalid-feedback">
                            Por favor, insira um cep válido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" placeholder="Rua" required disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" placeholder="Bairro" required disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Cidade" required disabled>
                    </div>
                </div>
                <br><br>

                <div class="text-center">
                    <button class="btn" type="submit">Enviar</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script src="assets.js"></script>