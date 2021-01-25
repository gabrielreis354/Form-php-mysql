<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Formulario Julubi</title>
            <meta name="author" content="Recanto Julubi">
            <meta name="description" content="Formulario Recanto Julubi">
            <meta name="keywords" content="formulario, formulariojulubi,formularioJulubi,formulariodeevento, Recanto Julubi">
            <meta name="viewport"  content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
            <meta charset="utf-8">
            <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/form2.css">
            

    </head>

            <body>
                <form action="php/dataclients.php" method="POST" class="form_recanto"> 
                    <div class="form_wraper">    
                        <h2 style="color: rgba(243, 243, 243, 0.5); margin-bottom: 40px;">Recanto Julubi</h2>  
                        <fieldset class="contato" style="border: 2px solid rgba(140, 126, 100, 1);">
                            <h2>Dados Pessoais</h2>
                            <input type="hidden" name="julubiform" value="Formulario Julubi">
                            <div class="input-wraper w50">
                                <input class="text" type="text" name="nome" placeholder="*Nome: " required><!--nome--> 
                            </div><!--input-wraper w50--> 
                            
                            <div class="input-wraper w50">    
                                <input class="text" type="email" name="email" placeholder="*E-mail: " required="required"><!--email--> 
                            </div><!--input-wraper w50-->   

                            <div class="input-wraper w100">
                                <select class="sexo" id="sexo" name="sexo" required="required" aria-placeholder="*Sexo:">
                                    <option disabled selected >*Sexo: </option>
                                    <option> Masculino </option>
                                    <option> Feminino </option>
                                    <option> Outro </option>
                                </select>  <!--final sexo -->
                            </div><!--input-wraper w100-->

                            <div class="input-wraper w100"> 
                                <p>*Data de Nascimento </p>    
                                <input  class="date" name="nascimento" id="date" type="date" >
                            </div> <!-- input-wraper w100-->

                        </fieldset>
                        <div class="espaço"></div>
                        <fieldset style="border: 2px solid  rgba(140, 126, 100, 1);" class="endereco">
                            <h2>Dados de Contato</h2>
                            <div class="input-wraper w50">
                                <input class="text" type="text" name="cpf" placeholder="*Cpf:" size="11" maxlength="11" required="required"><!--cpf-->
                            </div><!-- input-wraper w50-->
                            
                            <div class="input-wraper w50">                            
                                <input class="text" type="text" name="cep" placeholder="*Cep:" required="required"><!--cep-->
                            </div><!-- input-wraper w50-->

                            <div class="input-wraper w50">
                                <input class="text" type="text" name="cidade" placeholder="*Cidade:" required><!--cidade-->
                            </div><!-- input-wraper w50-->
                            
                            <div class="input-wraper w50">                                      
                                <input class= "text" type="text" name="rua" placeholder="*Rua:" required>  <!--input rua--> 
                            </div><!-- input-wraper w50-->

                            <div class="input-wraper w50">                  
                                <input class="text"type="number" name="numerocasa" size="4" placeholder="*Número da residência:" required>
                            </div><!-- input-wraper w50-->

                            <div class="input-wraper w50">                              
                                <input  class="text"  type="text" name="bairro" placeholder="*Bairro:" required>
                            </div><!-- input-wraper w50-->   
                            
                            <div class="input-wraper w100">
                        
                                <select id="estado" name="estado" required> <!--select estado-->
                                    <option disabled selected required> *Selecione o seu Estado </option>
                                    <option value="ac">AC - Acre</option> 
                                    <option value="al">AL - Alagoas</option> 
                                    <option value="am">AM - Amazonas</option> 
                                    <option value="ap">AP - Amapá</option> 
                                    <option value="ba">BA - Bahia</option> 
                                    <option value="ce">CE - Ceará</option> 
                                    <option value="df">DF - Distrito Federal</option> 
                                    <option value="es">ES - Espírito Santo</option> 
                                    <option value="go">GO - Goiás</option> 
                                    <option value="ma">MA - Maranhão</option> 
                                    <option value="mt">MT - Mato Grosso</option> 
                                    <option value="ms">MS - Mato Grosso do Sul</option> 
                                    <option value="mg">MG - Minas Gerais</option> 
                                    <option value="pa">PA - Pará</option> 
                                    <option value="pb">PB - Paraíba</option> 
                                    <option value="pr">PR - Paraná</option> 
                                    <option value="pe">PE - Pernambuco</option> 
                                    <option value="pi">PI - Piauí</option> 
                                    <option value="rj">RJ - Rio de Janeiro</option> 
                                    <option value="rn">RN - Rio Grande do Norte</option> 
                                    <option value="ro">RO - Rondônia</option> 
                                    <option value="rs">RS - Rio Grande do Sul</option> 
                                    <option value="rr">RR - Roraima</option> 
                                    <option value="sc">SC - Santa Catarina</option> 
                                    <option value="se">SE - Sergipe</option> 
                                    <option value="sp">SP - São Paulo</option> 
                                    <option value="to">TO - Tocantins</option> 
                                </select> <!--fim select estado-->
                            </div><!-- input-wraper w100--> 
                        </fieldset><!--endereco -->

                        <div class="end-message">
                        <p>*Todos os Campos Acima São Obrigatórios</p>
                        </div><!--end-message-->

                        <div class="btn1" style="text-align: center;">
                            <input type="submit" name="acao" value="Enviar Formulario">
                        </div><!--botaoenviar-->
                        <div style="clear: both;" class="clear"></div>
                    </div><!--form_wraper-->
                <div class="container"></div><!--container-->
            </form>   
            <script src="js/jquery.js"></script>
            <script src="js/jquery.mask.js"></script>
            <script>
                $(function(){

                    $('form').submit(function(){

                        if(formularioPreenchido()){
                                var form = $('form');
                                $('form').ajaxSubmit({
                                    beforeSubmit:function(){
                                        form.find('input[type=submit]').attr('disabled','true');
                                        form.find('input[type=submit]').animate({'opacity':'0.4'})
                                        form.find('input[type=submit]').attr('value','Carregando');

                                    },
                                    success:function(data){
                                        //Aqui você pode inserir uma div, por exemplo.
                                        //Qualquer mensagem de sucesso, após o formulario ter sido enviado.
                                        alert('Formulário foi enviado com sucesso!');
                                        form.find('input[type=submit]').removeAttr('disabled');
                                        form.find('input[type=submit]').animate({'opacity':'1'})
                                        form.find('input[type=submit]').attr('value','Enviar');
                                        form[0].reset();
                                    }
                                });
                        }else{
                            alert("Campos Vazios não são permitidos!");
                        }



                        return false;
                    })

                    function formularioPreenchido(){
                        var nome = $('[name=nome]').val();
                        var email = $('[name=email]').val();
                        var sexo = $('[name=sexo]').val();
                        var nascimento = $('[name=nascimento]').val();
                        var cpf = $('[name=cpf]').val();
                        var cep = $('[name=cep]').val();
                        var cidade = $('[name=cidade]').val();
                        var rua = $('[name=rua]').val();
                        var numerocasa = $('[name=numerocasa]').val();
                        var estado = $('[name=estado]').val();
                        if(nome === '' || email === '' || telefone === '' || nascimento === '' || cpf === '' || cep === '' || cidade === '' || rua === '' || numerocasa === ''
                        || estado === ''){
                            return false;
                        }else{
                            return true;
                        }
                    }


                })
            </script>
            <script src="js/functions.js"></script>
        </body>
    </html>
