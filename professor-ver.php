<?php
require_once("principal.php");
$q=$_GET['q'];
$rs=$professor->pegar_dados_professores($q);

$idade_min=Date("Y")-65;
$idade_min=$idade_min."-01-01";
$idade_max=Date('Y')-20;
$idade_max=$idade_max."-12-31";
$validade_min=Date("Y")-4;
$validade_min=$validade_min."-01-01";
$validade_max=Date('Y')+4;
$validade_max=$validade_max."-12-31";
?>
<style type="text/css">
    .in{
        
    }
</style>
<div class="container-fluid">

    <div id='mensagem'></div>

    <div class="row-fluid">

        <div class="card shadow mb-4">
            <div class='card-header  d-flex flex-row align-items-center justify-content-between'>
                <h6 class='m-0 font-weight-bold text-primary'>Visualizando dados do Professor</h6><span id="editar" class='col p-0 m-0 font-weight-bold text-primary py-1 text-right'><a class='text-warning' title='Editar'><i class='fas fa-pen fa-fw'></i></a></span>
            </div> 

            <div class="panel-body">

                <div class="col-12">

                    <form  class="form-horizontal" method="POST" id="actualizar_professor" enctype="multipart/form-data">

                        <div class="row" style="">

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                                <div class="row">

                                    <div class="col-12">

                                        <img id="output" src="<?=$rs['url_foto']; ?>" class="img-responsive col-12" ></img>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-12">

                                        <div class="col-12">

                                            <label for="url_foto" class="custom-file-label">Selecione a Foto</label>

                                            <input type="file" accept="image/*" value="" class="form-control custom-file-input in" id="url_foto" name="url_foto" onchange="loadFile(event)">

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 " >

                                <div class="row">

                                    <div class="col-12">
                                        <label style="margin-bottom: 0px;">Dados Pessoais</label>
                                        <hr style="width: 100% !important; height: 1px; background-color: #880f0f">
                                    </div>

                                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                        <label># Professor</label>
                                        <input type="text" autofocus="" readonly="" class="input-xs form-control in " name="nr_professor" id="nr_professor" maxlength="20" data-validate="Este campo é obrigatório" value="<?=$rs['nr_professor']; ?>" placeholder="Nº do Professor" required="" >

                                    </div>

                                    <div class="col-xs-12 col-sm-8 col-md-5 col-lg-5">

                                        <label>Nome</label>
                                        <input type="text" autofocus="" class="input-xs form-control in" name="nome_professor" maxlength="70" value="<?=$rs['nome_professor']; ?>" placeholder="Nome" required="" >

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <label>Apelido</label>
                                        <input type="text" class="input-xs form-control in" name="apelido_professor" value="<?=$rs['apelido_professor']; ?>" maxlength="50" placeholder="Apelido" required="" >

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <label>Data de nascimento</label>
                                        <input type="text" onfocus="(this.type = 'date')" min="<?=$idade_min; ?>" max="<?=$idade_max; ?>" class="input-xs form-control in" id="dob" name="data_nascimento_professor" value="<?=$rs['data_nascimento_professor']; ?>" placeholder="Data de nascimento" rnb equired="" max="">

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <label>Tipo de documento</label>
                                        <select class="input-xs form-control in" name="tipo_documento" required="">

                                            <option <?=($rs['tipo_documento'] == "" ? "selected": ''); ?> value="">Tipo de documento</option>

                                            <option <?=($rs['tipo_documento'] == "Bilhete de identidade" ? "selected": ''); ?> value="Bilhete de identidade" >Bilhete de identidade</option> 

                                            <option <?=($rs['tipo_documento'] == "Passaporte" ? "selected": ''); ?> value="Passaporte" >Passaporte</option> 

                                        </select>

                                    </div>


                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <label>Número do documento</label>
                                        <input type="text" class="input-xs form-control in" name="nr_documento" value="<?=$rs['nr_documento']; ?>" maxlength="13" placeholder="Número do documento" required="">

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                                        <label>Local de Emissão</label>
                                        <select class="input-xs form-control in" name="local_de_emissao" required="">

                                            <option >Emitido em</option> 

                                            <option <?=($rs['local_de_emissao'] == "Beira" ? "selected": ''); ?> value="Beira" >DF</option>
                                            <option <?=($rs['local_de_emissao'] == "Chimoio" ? "selected": ''); ?> value="Chimoio" >GO</option> 
                                            <option <?=($rs['local_de_emissao'] == "Maputo" ? "selected": ''); ?> value="Maputo" >MG</option> 
                                            <option <?=($rs['local_de_emissao'] == "Matola" ? "selected": ''); ?> value="Matola" >SP</option> 
                                            <option <?=($rs['local_de_emissao'] == "Gaza" ? "selected": ''); ?> value="Gaza" >RJ</option>
                                            <option <?=($rs['local_de_emissao'] == "Inhambane" ? "selected": ''); ?> value="Inhambane" >AM</option> 
                                            <option <?=($rs['local_de_emissao'] == "Quelimane" ? "selected": ''); ?> value="Quelimane" >AP</option> 
                                            <option <?=($rs['local_de_emissao'] == "Tete" ? "selected": ''); ?> value="Tete" >CE</option> 
                                            <option <?=($rs['local_de_emissao'] == "Nampula" ? "selected": ''); ?> value="Nampula" >ES</option>
                                            <option <?=($rs['local_de_emissao'] == "Lichinga" ? "selected": ''); ?> value="Lichinga" >PR</option> 
                                            <option <?=($rs['local_de_emissao'] == "Pemba" ? "selected": ''); ?> value="Pemba" >BH</option>


                                        </select>

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <label>Validade</label>
                                        <input type="text" class="input-xs form-control in" id="validade" min="<?=$validade_min; ?>" max="<?=$validade_max; ?>" name="validade_documento_inicial_professor" value="<?=$rs['validade_documento_inicial_professor']; ?>" placeholder="Documento Validade " onfocus="(this.type = 'date')" required="">

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <label>Sexo</label>
                                        <select class="input-xs form-control in" name="sexo_professor" required="">

                                            <option <?=($rs['sexo_professor'] == "" ? "selected": ''); ?> value="" >Sexo</option>

                                            <option <?=($rs['sexo_professor'] == "Masculino" ? "selected": ''); ?> value="Masculino" >Masculino</option> 

                                            <option <?=($rs['sexo_professor'] == "Femenino" ? "selected": ''); ?> value="Femenino" >Femenino</option> 

                                        </select>

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <label>Nacionalidade</label>
                                        <select class="input-xs form-control in" name="nacionalidade_professor" required="">

                                            <option <?=($rs['nacionalidade_professor'] == "" ? "selected": ''); ?> value="">Nacionalidade</option>

                                            <option <?=($rs['nacionalidade_professor'] == "Moçambicana" ? "selected": ''); ?> value="Moçambicana">Portuguesa</option>

                                            <option <?=($rs['nacionalidade_professor'] == "Angolana" ? "selected": ''); ?> value="Angolana">Angolana</option>

                                            <option <?=($rs['nacionalidade_professor'] == "Zimbabweana" ? "selected": ''); ?> value="Zimbabweana">North Americana</option>

                                            <option <?=($rs['nacionalidade_professor'] == "Brasileira" ? "selected": ''); ?> value="Brasileira">Brasileira</option>

                                            <option <?=($rs['nacionalidade_professor'] == "Sul Africana" ? "selected": ''); ?> value="Sul Africana">Argentina</option>

                                            <option <?=($rs['nacionalidade_professor'] == "Sul Africana" ? "selected": ''); ?> value="Sul Africana">Sul Africana</option>

                                        </select>

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <label>Naturalidade</label>
                                        <input type="text" class="input-xs form-control in" name="naturalidade_professor" maxlength="50" value="<?=$rs['naturalidade_professor']; ?>" placeholder="Naturalidade" required="">

                                    </div>

                                    <div class="col-12">
                                        <label style="margin-bottom: 0px;">Morada</label>
                                        <hr style="width: 100% !important; height: 1px; background-color: #880f0f">
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <label>Bairro</label>
                                        <input type="text" class="input-xs form-control in" id="bairro" name="bairro" maxlength="100" value="<?=$rs['bairro']; ?>" placeholder="Bairro" required="">

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <label>Quarteirão</label>
                                        <input type="text" class="input-xs form-control in" id="quarteirao" maxlength="5" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="quarteirao" value="<?=$rs['quarteirao']; ?>" placeholder="Quarteirão">

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <label>Casa</label>
                                        <input type="text" class="input-xs form-control in" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="6" id="casa" name="casa" value="<?=$rs['casa']; ?>" placeholder="Casa" >

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                        <label>Rua/Avenida</label>
                                        <input type="text" class="input-xs form-control in" name="rua_avenida" maxlength="100" value="<?=$rs['rua_avenida']; ?>" placeholder="Rua/Avenida" required="">

                                    </div>

                                    <div class="col-12">
                                        <label style="margin-bottom: 0px;">Contactos</label>
                                        <hr style="width: 100% !important; height: 1px; background-color: #880f0f">
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <label>Email</label>
                                        <input type="email" class="input-xs form-control in" id="email" name="email" value="<?=$rs['email']; ?>" placeholder="Email" maxlength="100">

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <label>Celular</label>
                                        <input type="text" class="input-xs form-control in" id="telefone" name="telefone" value="<?=$rs['telefone']; ?>" placeholder="Celular" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required="" maxlength="9">

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <label>Celular alternativo</label>
                                        <input type="text" class="input-xs form-control in" id="telefone_alternativo" name="telefone_alternativo" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?=$rs['telefone_alternativo']; ?>" placeholder="Celular alternativo" maxlength="9">

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                                        <button class="btn btn-success btn-icon-split" type="submit" id="editar_professor" name="editar_professor">
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

        $('.form-control').attr('disabled', true);
        $('#editar_professor').hide();
        
    })

    $('#editar').click(function(event) {
        $(this).hide();
        $('.form-control').attr('disabled', false);

        $('#editar_professor').show();

    });

</script>

