<?php
require_once("principal.php");

?>

<div class="container-fluid">

    <div id='mensagem'></div>

    <div class="row-fluid">

        <div class="card shadow mb-4">

            <div class="card-header py-3">

                <div class="divH m-0 font-weight-bold text-primary"><label>Formulário de Cadastro de Alunos</label></div>

            </div>

            <div class="panel-body">

                <div class="col-12">

                    <form class="form-horizontal" method="POST" id="cadastrarAluno" enctype="multipart/form-data">

                        <div class="row" style="">

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                                <div class="row">

                                    <div class="col-12">

                                        <img id="output" src="img/user.webp" class="img-responsive col-12" ></img>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-12">

                                        <div class="col-12">

                                            <label for="url_foto" class="custom-file-label">Selecione a Foto</label>

                                            <input type="file" accept="image/*" class="form-control custom-file-input in" id="url_foto" name="url_foto" onchange="loadFile(event)">

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 " >

                                <div class="row">

                                    <label class="modal-title" style="margin-bottom: -20px;">Dados Pessoais</label>
                                    <hr style="width: 100% !important; height: 0px; background-color: #880f0f">

                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                                        <input type="text" autofocus="" readonly="" class="input-xs form-control in " name="nr_aluno" maxlength="20" data-validate="Este campo é obrigatório" value="<?=$aluno->ultimo_id(); ?>" placeholder="Nº do Aluno" required="" >

                                    </div>

                                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">

                                        <input type="text" autofocus="" class="input-xs form-control in" name="nome_aluno" maxlength="70" value="" placeholder="Nome" required="" >

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                                        <input type="text" class="input-xs form-control in" name="apelido_aluno" value="" maxlength="50" placeholder="Apelido" required="" >

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <input type="text" onfocus="(this.type = 'date')" class="input-xs form-control in" id="dob" name="data_nascimento_aluno" value="" placeholder="Data de nascimento" rnb equired="" max="">

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <input type="text" class="input-xs form-control in" name="nr_documento" value="" maxlength="13" placeholder="Número do documento" required="">

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <select class="input-xs form-control in" name="tipo_documento" required="">

                                            <option readonly="">Tipo de documento</option>

                                            <option value="Bilhete de identidade" > Identidade</option> 

                                            <option value="Passaporte" >Passaporte</option> 

                                        </select>

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">


                                        <select class="input-xs form-control in" name="local_de_emissao" required="">

                                            <option >Emitido em</option> 


                                            <option value="DF" >DF</option>
                                            <option value="GO" >GO</option> 
                                            <option value="MG" >MG</option> 
                                            <option value="SP" >SP</option> 
                                            <option value="RJ" >RJ</option>
                                            <option value="AM" >AM</option> 
                                            <option value="AP" >AP</option> 
                                            <option value="CE" >CE</option> 
                                            <option value="ES" >ES</option>
                                            <option value="PR" >PR</option> 
                                            <option value="BH" >BH</option>

                                        </select>

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <input type="text" class="input-xs form-control in" id="validade" name="validade_documento_inicial_aluno" value="" placeholder="Documento Validade " onfocus="(this.type = 'date')" required="">

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <select class="input-xs form-control in" name="sexo_aluno" required="">

                                            <option >Sexo</option>

                                            <option value="Masculino" >Masculino</option> 

                                            <option value="Femenino" >Femenino</option> 

                                        </select>

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <select class="input-xs form-control in" name="nacionalidade_aluno" required="">

                                            <option >Nacionalidade</option>

                                            <option value="estadunidense">estadunidense</option>

                                            <option value="Espanhola">Espanhola</option>

                                            <option value="Portuguesa">Portuguesa</option>

                                            <option value="Brasileira">Brasileira</option>

                                        </select>

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <input type="text" class="input-xs form-control in" name="naturalidade_aluno" maxlength="20" value="" placeholder="Naturalidade">

                                    </div>

                                    <label class="modal-title" style="margin-bottom: -20px;">Pais</label>
                                    <hr style="width: 100% !important; height: 0px; background-color: #880f0f">

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> 

                                        <input type="text" class="input-xs form-control in" name="nome_do_pai" maxlength="70" value="" placeholder="Nome do pai" >

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> 

                                        <input type="text" class="input-xs form-control in" maxlength="70" name="nome_da_mae" value="" placeholder="Nome da Mãe" >

                                    </div>
                                    <label style="margin-bottom: -20px;">Endereço</label>
                                    <hr style="width: 100% !important; height: 0px; background-color: #880f0f">
                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <input type="text" class="input-xs form-control in" id="bairro" name="bairro" maxlength="25" value="" placeholder="Bairro">

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <input type="text" class="input-xs form-control in" id="cidade" maxlength="10" name="cidade" value="" placeholder="cidade">

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <input type="text" class="input-xs form-control in" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="6" id="casa" name="casa" value="" placeholder="Casa" >

                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

                                        <input type="text" class="input-xs form-control in" name="rua_avenida" maxlength="50" value="" placeholder="Rua/Avenida">

                                    </div>

                                    <label style="margin-bottom: -20px;">Contactos</label>
                                    <hr style="width: 100% !important; height: 0px; background-color: #880f0f">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                                        <input type="email" class="input-xs form-control in" id="email" name="email" value="" placeholder="Email" maxlength="60">

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                                        <input type="text" class="input-xs form-control in" id="telefone" name="telefone" value="" placeholder="Celular" onkeypress='return event.charCode >= 48 && event.charCode <= 57' riquired='' maxlength="9">

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                                        <input type="text" class="input-xs form-control in" id="telefone_alternativo" name="telefone_alternativo" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="" placeholder="Celular alternativo" maxlength="9">

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                                        <button  class="btn btn-success btn-icon-split" type="submit" name="cadastrarAluno">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Gravar</span>
                                        </button>

                                    </div>

                                </div>



                            </div>



                        </div>	

                        <br>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>









<?php
include_once("rodape.php");
?>

<script type="text/javascript">

    var loadFile = function (event) {

        var output = document.getElementById('output');

        output.src = URL.createObjectURL(event.target.files[0]);

    };



    $(document).ready(function () {

        $('input[id="total_mensalidade"]').attr('readonly', true)

        $('input[id="descontos"]').on('keyup', function () {

            $('input[id="total_mensalidade"]').attr('value', $('input[id="mensalidade"]').val() - $('input[id="descontos"]').val())

        })

    })

</script>

