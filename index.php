<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO SEBRAE</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/css/img/images.png" type="jpg">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="application/javascript" src="jquery321.min.js"></script>
    <script type="application/javascript" src="jquery.mask.min.js"></script>
</head>

<body>
      <!--script language="javascript" src="../../funcoes.js" type="text/javascript"></script-->
  <script type="text/javascript">
    function Formatadata(Campo, teclapres) {
      var tecla = teclapres.keyCode;
      var vr = new String(Campo.value);
      vr = vr.replace("-", "");
      tam = vr.length + 1;
      if (tecla != 8) {
        if (tam == 6)
          Campo.value = vr.substr(0, 5) + '-' + vr.substr(5, 5);
      }
    }
  </script>

  <script language="javascript">
    function exibeDiv(pDiv) {

      var divs = Array("opc1", "opc2", "opc3", "opc4"); //coloque aqui o nome de todas as divs que são ocutáveis, separado por virgula



      for (i = 0; i < divs.length; i++) { //esse for faz com que todas as divs voltem a ser ocultadas

        document.getElementById(divs[i]).style.display = 'none';

      }



      document.getElementById(pDiv).style.display = '';
      switch (pDiv) {
        case "opc1":
          outputJson.tipoOpcao = 1;
          console.log(outputJson);
          break
        case "opc2":
          outputJson.tipoOpcao = 2;
          break
        case "opc3":
          outputJson.tipoOpcao = 3;
          break
        case "opc4":
          outputJson.tipoOpcao = 4;
          break
      }

    }

    function exibeData(param) {
      if (param == 'Sim') {
        document.getElementById('trSaida').style.display = '';
      } else {
        document.getElementById('trSaida').style.display = 'none';
      }
    }



    function hab() {

      document.getElementById("box1").style.display = "";

    }



    function hab2() {

      document.getElementById("box1").style.display = "none";

    }
  </script>

  <script language="javascript">
    function divOptInves(opt) { // função para ocultar ou mostrar a div de opção de investimento
      if (opt == "resg_1") {
        document.getElementById('opcinvest').style.display = 'none';
        document.getElementById('24parcelas').disabled = true;
      } else if (opt == "resg_2") {
        document.getElementById('24parcelas').disabled = false;
        document.getElementById('opcinvest').style.display = '';
      }
    }

    function noConta(opt) { // função para ocultar ou mostrar a div de opção de investimento
      if (opt == "cc") {
        document.getElementById('n_bancon_b2').disabled = true;
        document.getElementById('n_banco_b2').disabled = true;
        document.getElementById('ag_banco2').disabled = true;
        document.getElementById('cc_banco2').disabled = true;
        document.getElementById('pp').disabled = true;
        document.getElementById('cc').disabled = true;
      } else if (opt == "cc2") {
        document.getElementById('n_bancon_b2').disabled = false;
        document.getElementById('n_banco_b2').disabled = false;
        document.getElementById('ag_banco2').disabled = false;
        document.getElementById('cc_banco2').disabled = false;
        document.getElementById('pp').disabled = false;
        document.getElementById('cc').disabled = false;
      }
    }

    function excetoNumeros(evt) {
      var numbers = /^([\d])+$/;
      var str = evt.value;
      var last = str.substr(-1);

      if (last.match(numbers)) {
        evt.value = str.slice(0, -1);
        //return false;
      }
      //return true;
    }
  </script>

    <form action="impresso.php" name="form" method="POST" onsubmit="return validaFormF4();">
        <header class="container-cabecalho">
            <img src="assets/css/img/logotopo.png" alt="logo do sebrae">
        </header>
        <div class="container-log">
            <h3>TERMO DE OPÇÃO</h3>
        </div>
        <br>
        <div class="container-group">
            <div class="container-box1">
                <label for="patrocinadora">Empresa Patrocinadora:</label>
                <select name="patrocinadora" id="patrocinadora">
                    <option value="" selected="selected">--</option>
                    <option value="Abase">Abase</option>
                    <option value="Sebrae nacional">Sebrae/NA</option>
                    <option value="SEBRAEPREV">SB SEBRAEPREV</option>
                    <option value="SEBRAE Amapá">AP</option>
                    <option value="SEBRAE Acre">AC</option>
                    <option value="SEBRAE Amazonas">AM</option>
                    <option value="SEBRAE Alagoas">AL</option>
                    <option value="SEBRAE Bahia">BA</option>
                    <option value="SEBRAE Ceára">CE</option>
                    <option value="SEBRAE Distrito-Federal">DF</option>
                    <option value="SEBRAE Espirito-Santo">ES</option>
                    <option value="SEBRAE Goiás">GO</option>
                    <option value="SEBRAE Maranhão">MA</option>
                    <option value="SEBRAE Minas-Gerais">MG</option>
                    <option value="SEBRAE Mato-Grosso">MT</option>
                    <option value="SEBRAE Mato-Grosso-do-Sul">MS</option>
                    <option value="SEBRAE Piauí">PI</option>
                    <option value="SEBRAE Pernambuco">PE</option>
                    <option value="SEBRAE Paraiba">PB</option>
                    <option value="SEBRAE Paraná">PR</option>
                    <option value="SEBRAE Rio-Grande-do-Norte">RN</option>
                    <option value="SEBRAE Rio-Grande-do-Sul">RS</option>
                    <option value="SEBRAE Rondônia">RO</option>
                    <option value="SEBRAE Roraima">RR</option>
                    <option value="SEBRAE Rio-de-Janeiro">RJ</option>
                    <option value="SEBRAE São-Paulo">SP</option>
                    <option value="SEBRAE Santa-Catarina">SC</option>
                    <option value="SEBRAE Sergipe">SE</option>
                    <option value="SEBRAE Tocantins">TO</option>
                </select>
            </div><br>
            <div class="container-box">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">
            </div>
            <br>
            <div class="container-box1">
                <label for="data_nasc">Data de Nascimento:</label>
                <input type="date" id="data_nasc" name="data_nasc">
            </div>
            <br>
            <div class="container-box1">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf">
            </div>
            <br>
            <div class="container-box">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="container-box">
                <div class="cep">
                    <label for="txtCep">Cep:</label>
                    <input type="text" name="txtCep" autocomplete="off" id="txtCep">
                </div>
                <div class="container-box">
                    <div class="cep">
                        <label for="txtRua">Rua:</label>
                        <input type="text" name="txtRua" id="txtRua">
                    </div>
                    <div class="container-box">
                        <div class="cep">
                            <label for="txtBairro">Bairro:</label>
                            <input type="text" name="txtBairro" id="txtBairro">
                        </div>
                        <div class="container-box">
                            <div class="cep">
                                <label for="txtCidade">Cidade:</label>
                                <input type="text" name="txtCidade" id="txtCidade">
                            </div>
                            <div class="boxtelefone">
                                <h3>Telefones: (com DDD)</h3>
                            </div>
                            <div class="boxtel">
                                <label for="residencial">Residencial:</label>
                                <input type="text" name="residencial" id="residencial">
                            </div>
                            <div class="boxtel">
                                <label for="celular">Celular:</label>
                                <input type="text" name="celular" id="celular">
                            </div>
                            <div class="boxtel">
                                <label for="comercial">Comercial:</label>
                                <input type="text" name="comercial" id="comercial">
                            </div>
                            <div class="boxtel">
                                <label for="outros">Outros:</label>
                                <input type="text" name="outros" id="outros">
                            </div>
                            <br>
                        <div class="radio-container">
                            <tr>
                                <td colspan="5" bgcolor="#ECFBFF" style="padding-left:30px;">
                                  <p class="opcao"><span class="style20"></span><b>Tendo em vista a perda do vínculo empregatício com o SEBRAE, em relação ao plano SEBRAEPREV solicito:</b></p>
                                </td>
                      
                              </tr>
                              <br>

                              <tr>
                      
                                <td colspan="5" bgcolor="#ECFBFF" style="padding-left:30px; padding-right:30px;">
                      
                                  <p class="opcao" align="justify"><span class="style20">
                      
                                  <input name="opc" type="radio" value="opc1" onclick="exibeDiv('opc1');" /></span><strong>AUTOPATROCINADO</strong> - A manutenção de minha inscrição na condição de Participante Autopatrocinado, assumindo as contribuições pessoais e patronais (risco e básica patronal) para o plano. Sendo assim, opto por:</p>
                                  
                                          <div id="opc1" style="display:none;">

                                            </p>

                                            <span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                              <input type="radio" name="opca" value="opc1_1" id="opc1_1" onclick="hab2()" />

                                            </span><span class="opcao">Manter o percentual de contribuição.</span><br />

                                            <span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                              <input type="radio" name="opca" value="opc1_2" id="opc1_2" onclick="hab()" />

                                            </span><span class="opcao">Alteração do percentual de contribuição pessoal conforme informado abaixo: </span>

                                            <div id="box1" style="display:none;">

                                              <table width="619" height="60" border="0" align="center" cellpadding="0" cellspacing="0">

                                                <tr>

                                                  <td width="254" valign="middle"><span class="opcao">  <span class="style20">

                                                        <input name="opcz1" type="checkbox" id="opcz1" value="opc1_2_1" />

                                                      </span>Contribuição Básica</span></td>

                                                  <td width="365" valign="middle"><span class="opcao">Percentual (%): <select name="porcentual1" id="porcentual1">

                                                        <option value="0" selected="selected">0</option>

                                                        <option value="1">1</option>

                                                        <option value="2">2</option>

                                                        <option value="3">3</option>

                                                        <option value="4">4</option>

                                                        <option value="5">5</option>

                                                        <option value="6">6</option>

                                                        <option value="7">7</option>

                                                      </select></span></td>

                                                </tr>

                                                <tr>

                                                  <td width="254" valign="middle"><span class="opcao">  <span class="style20">

                                                        <input name="opcz2" type="checkbox" id="opcz2" value="opc1_2_2" />

                                                      </span>Contribuição de Serviço Passado </span></td>

                                                  <td width="365" valign="middle"><span class="opcao">Percentual (%):

                                                      <input type="text" name="porcentual2" id="porcentual2" size="5" onkeypress="return somenteNumeros(event,',');"> por cento

                                                    </span></td>

                                                </tr>

                                                <tr>

                                                  <td width="254" valign="middle"><span class="opcao">  <span class="style20">

                                                        <input name="opcz3" type="checkbox" id="opcz3" value="opc1_2_3" />

                                                      </span>Contribuição Voluntária Mensal</span></td>

                                                  <td width="365" valign="middle"><span class="opcao">Percentual (%):

                                                      <select name="porcentual3" id="porcentual3">

                                                        <option value="0" selected="selected">0</option>

                                                        <option value="1">1</option>

                                                        <option value="2">2</option>

                                                        <option value="3">3</option>

                                                        <option value="4">4</option>

                                                        <option value="5">5</option>

                                                        <option value="6">6</option>

                                                        <option value="7">7</option>

                                                        <option value="8">8</option>

                                                        <option value="9">9</option>

                                                        <option value="10">10</option>

                                                        <option value="11">11</option>

                                                        <option value="12">12</option>

                                                        <option value="13">13</option>

                                                        <option value="14">14</option>

                                                        <option value="15">15</option>

                                                        <option value="16">16</option>

                                                        <option value="17">17</option>

                                                        <option value="18">18</option>

                                                        <option value="19">19</option>

                                                        <option value="20">20</option>

                                                        <option value="21">21</option>

                                                        <option value="22">22</option>

                                                        <option value="23">23</option>

                                                        <option value="24">24</option>

                                                        <option value="25">25</option>

                                                        <option value="26">26</option>

                                                        <option value="27">27</option>

                                                        <option value="28">28</option>

                                                        <option value="29">29</option>

                                                        <option value="30">30</option>

                                                      </select>

                                                    </span></td>

                                                </tr>

                                              </table>

                                            </div>

                                            <p class="opcao"><span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;Forma de recolhimento:<br />

                                              <span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                <input type="radio" name="form_re" value="form_re_1" id="form_re1" />

                                              </span>Autorizo a emissão de boleto bancário em meu nome.<br />

                                              <span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                <input type="radio" name="form_re" value="form_re_2" id="form_re2" />

                                              </span>Autorizo o desconto direto na minha conta corrente abaixo designada <b>(apenas para Banco do Brasil e Itaú)</b>.
                                            </p>

                                            <table width="308" border="0" align="center">

                                              <tr>

                                                <td width="154"><span class="opcao">Banco:</span></td>

                                                <td width="144"><span class="opcao">

                                                    <input type="text" name="nm_banco" />

                                                  </span></td>

                                              </tr>

                                              <tr>

                                                <td><span class="opcao">Agência Nº:<span class="style20">&nbsp;&nbsp;&nbsp;</span></span></td>

                                                <td><span class="opcao">

                                                    <input type="text" name="ag_banco" id="ag_banco" maxlength="6" />

                                                  </span></td>

                                              </tr>

                                              <tr>

                                                <td><span class="opcao">Conta Corrente nº:<span class="style20">&nbsp;&nbsp;</span></span></td>

                                                <td><span class="opcao">

                                                    <input type="text" name="cc_banco" id="cc_banco" maxlength="10" />

                                                  </span></td>

                                              </tr>
                                              <tr>
                                                <td>
                                                  <label style="font-size: 14px;" for="">Cópia da identidade</label>
                                                  <div style="display: flex;">
                                                    <input style=" margin-bottom: 16px;" type="file" name="identidade_patrocinio" id="identidade_patrocinio" onchange="convertToBase64('identidade_patrocinio')">
                                                  </div>

                                                </td>
                                                <td>
                                                  <button type="button" onclick="limparInputFile('identidade_patrocinio')">Limpar</button>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <label style="font-size: 14px;" for="">Cópia da recisão contratual</label>
                                                  <div style="display: flex;">
                                                    <input type="file" name="recisao_patrocinio" id="recisao_patrocinio" onchange="convertToBase64('recisao_patrocinio')">
                                                  </div>
                                                </td>
                                                <td>
                                                  <button type="button" onclick="limparInputFile('recisao_patrocinio')">Limpar</button>
                                                </td>
                                              </tr>

                                            </table>
                                          </div>
                                  <br>
                      
                      
                      
                      
                      
                                  <p class="opcao" align="justify">
                                    <span class="style20">
                                      <input type="radio" value="opc2" name="opc" onclick="exibeDiv('opc2');" />
                                    </span>
                                    <strong>BENEFÍCIO PROPORCIONAL DIFERIDO (BPD)</strong> - A manutenção de minha inscrição, na condição de Participante Vinculado, com a suspensão do pagamento das contribuições para recebimento de Benefício Proporcional Diferido, quando forem cumpridas as condições de elegibilidade ao benefício de Aposentadoria Normal.
                                  </p>
                                  <div id="opc2" style="display:none;">
                                    <table>
                                      <tr>
                                        <td>
                                          <label style="font-size: 14px;" for="">Cópia da identidade</label>
                                          <div style="display: flex;">
                                            <input type="file" name="identidade_beneficio" id="identidade_beneficio" onchange="convertToBase64('identidade_beneficio')">
                                          </div>
                                        </td>
                                        <td>
                                          <button type="button" onclick="limparInputFile('identidade_beneficio')">Limpar</button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label style="font-size: 14px;" for="">Cópia da recisão contratual</label>
                                          <div style="display: flex;">
                                            <input type="file" name="recisao_beneficio" id="recisao_beneficio" onchange="convertToBase64('recisao_beneficio')">
                                          </div>
                                        </td>
                                        <td>
                                          <button type="button" onclick="limparInputFile('recisao_beneficio')">Limpar</button>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                  <br>
                                  <p class="opcao" align="justify"><span class="style20">
                      
                      
                                      <input type="radio" name="opc" value="opc3" onclick="exibeDiv('opc3');" />
                      
                                    </span><strong>RESGATE</strong> - O cancelamento de minha inscrição e o Resgate da reserva de poupança, na forma de recebimento abaixo:</p>
                      
                      
                      
                                  <div id="opc3" style="display:none;">
                      
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                                    <input type="radio" value="resg_1" name="resg" id="resg" onclick="divOptInves('resg_1');" />
                      
                                    </span><span class="style20"><strong>Parcela única</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                                      <input type="radio" value="resg_2" name="resg" id="resg" onclick="divOptInves('resg_2');" />
                      
                                      <strong>Parcela mensais em número de</strong></span><strong>
                      
                                      <input title="24parcelas" name="24parcelas" id="24parcelas" type="number" min="2" max="24" step="1">
                      
                                      <span class="style20">parcelas</span></strong> <span class="obrigatorio">(até 24 parcelas máximo) </span></p>
                      
                      
                      
                      
                      
                                    <div id="opcinvest" style="display:none;" class="style20">
                      
                                      <div align="center">
                      
                                        <samp style="font-size:16px; text-align:center;" class="style20"> TERMO DE OPÇÃO POR PERFIL DE INVESTIMENTOS</samp>
                      
                                      </div><br />
                      
                      
                      
                                      <label>
                      
                                        <input name="perfilInvestimento" id="perfilInvestimento" type="radio" value="conservador">&nbsp;CONSERVADOR</label><br>
                      
                      
                      
                                      <label>
                      
                                        <input name="perfilInvestimento" id="perfilInvestimento" type="radio" value="moderado">&nbsp;SEBRAEPREV (MODERADO)</label> <br>
                      
                      
                      
                      
                      
                                      <br><br>
                      
                      
                      
                                      <div align="justify" class="style20"><br>
                      
                      
                      
                                        DECLARAÇÃO DE RESPONSABILIDADE:
                      
                                        <br />
                      
                                        <br />
                      
                                        Declaro que minha opção foi feita de forma livre, isenta e consciente, tendo sido precedida da disponibilização de todas as informações sobre o Perfil de Investimentos escolhido, bem como do esclarecimento de todas as dúvidas por mim apresentadas perante o SEBRAE PREVIDÊNCIA – Instituto SEBRAE de Seguridade Social, de forma que assumo integral e exclusiva responsabilidade pelos riscos envolvidos na aplicação dos recursos referentes às parcelas vincendas do valor decorrente da minha opção pelo instituto do Resgate, calculado de acordo com o disposto no artigo 109 do Regulamento do Plano SEBRAEPREV , de acordo com o Perfil de Investimento ora escolhido.
                      
                                        <br />
                      
                                        <br />
                      
                                        ADVERTÊNCIAS:
                      
                                        <!--Caso o Participante tenha optado pelo pagamento do Resgate de forma parcelada, após o pagamento da primeira prestação o saldo referente às parcelas vincendas será alocado integralmente no Perfil CONSERVADOR, exceto se o Participante, quando do requerimento do Resgate, tenha feito opção pelo Perfil MODERADO.--> É vedada a adoção do Perfil Arrojado.
                      
                                        <br />
                      
                                        <br />
                      
                                        Não há garantia de rentabilidade em qualquer dos Perfis de Investimento oferecidos, sendo possível a verificação de rentabilidade negativa em determinado período, havendo maior probabilidade de perdas financeiras nos Perfis de Investimento com maior alocação no segmento de renda variável.
                      
                                        <br />
                      
                                        <br />
                      
                                        A maior rentabilidade obtida por determinado Perfil de Investimento em período anterior à esta opção não leva à certeza de boa rentabilidade futura.
                      
                                        <br />
                      
                                        <br />
                      
                                        A escolha de determinado Perfil de Investimento resultará em rentabilidade diversa daquela decorrente da opção por outro Perfil de Investimento, terá consequência direta na atualização do valor das parcelas vincendas do Resgate.
                      
                                        <div align="center">
                      
                                          ------------------------------------------------------------------------------------------------------------------------------------------------------------
                      
                                        </div>
                      
                                      </div><br />
                      
                                      <br />
                      
                      
                      
                                    </div>
                      
                      
                                    <span>Crédito do pagamento&nbsp;</span><br />
                      
                                    <p class="opcao" align="justify"><span class="style20">
                      
                                        <span class="style20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                                          <input type="radio" name="n_cc" value="cc2" id="n_cc" onclick="noConta('cc2');" />
                      
                                        </span>Crédito em conta, abaixo informada, da qual sou titular.</p>
                      
                                    <table width="542" border="0" align="center">
                      
                                      <tr>
                      
                                        <td width="175" class="opcao">Número do Banco:</td>
                      
                                        <td width="357" class="opcao">
                      
                                          <input name="n_bancon_b2" id="n_bancon_b2" type="text" size="5" maxlength="3" />
                      
                                        </td>
                      
                                      </tr>
                      
                                      <tr>
                      
                                        <td width="175" class="opcao">Nome do Banco:</td>
                      
                                        <td width="357" class="opcao">
                      
                                          <input name="n_banco_b2" id="n_banco_b2" type="text" size="50" onkeyUp="excetoNumeros(this)" />
                      
                                        </td>
                      
                                      </tr>
                      
                                      <tr>
                      
                                        <td class="opcao">Agência Número:</td>
                      
                                        <td class="opcao">
                      
                                          <input type="text" name="ag_banco2" id="ag_banco2" maxlength="6" size="5" />
                      
                                        </td>
                      
                                      </tr>
                      
                                      <tr>
                      
                                        <td class="opcao">Conta Número:</td>
                      
                                        <td class="opcao">
                      
                                          <input type="text" name="cc_banco2" id="cc_banco2" maxlength="10" />
                      
                                        </td>
                      
                                      </tr>
                      
                                      <tr>
                      
                                        <td class="opcao">Tipo de conta:<span class="style20">&nbsp;&nbsp;</span></td>
                      
                                        <td class="opcao">
                      
                      
                                          <span class="style20">
                      
                                            <input type="radio" name="tipoC" value="Poupança" id="pp" />
                      
                                          </span> Poupança <span class="style20">
                      
                                            <input type="radio" name="tipoC" value="Conta corrente" id="cc" />
                      
                                          </span> Conta corrente <span class="style20">
                                        </td>
                      
                                      </tr>
                      
                      
                                      <tr>
                      
                                        <td class="opcao">Além do desligamento da sua patrocinadora, qual o motivo da solicitação do resgate?<span class="style20">&nbsp;&nbsp;</span></td>
                      
                                        <td class="opcao">
                      
                      
                                          <span class="style20">
                      
                                            <textarea name="motivo" cols="53" rows="5" class="style20" id="motivo" onKeyUp="return Contador('motivo',1000);"></textarea>
                                            <input name="contador" type="text" disabled="disabled" id="contador" size="7" maxlength="7">
                      
                                        </td>
                      
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                      
                                      <tr>
                      
                                        <td class="opcao">Você é uma pessoa Politicamente Exposta?<span class="style20">&nbsp;&nbsp;</span></td>
                      
                                        <td class="opcao">
                      
                      
                                          <span class="style20">
                      
                                            <input type="radio" name="politica" value="Sim" id="politica" /> Sim | <input type="radio" name="politica" value="Não" id="politica" checked="checked" /> Não
                      
                                        </td>
                      
                                      </tr>
                                      <tr>
                      
                                        <td class="opcao">Você é reportável a FATCA?<span class="style20">&nbsp;&nbsp;</span></td>
                      
                                        <td class="opcao">
                      
                      
                                          <span class="style20">
                      
                                            <input type="radio" name="fatca" value="Sim" id="fatca" /> Sim | <input type="radio" name="fatca" value="Não" id="fatca" checked="checked" /> Não
                      
                                        </td>
                      
                                      </tr>
                                      <tr>
                      
                                        <td class="opcao">NIF (Número de identificação Fiscal no Exterior)<span class="style20">&nbsp;&nbsp;</span></td>
                      
                                        <td class="opcao">
                      
                      
                                          <span class="style20">
                      
                                            <input type="text" name="nif" value="" id="nif" /> (somente números)
                      
                                        </td>
                      
                                      </tr>
                                      <tr>
                      
                                        <td class="opcao">Você é residente no exterior?<span class="style20">&nbsp;&nbsp;</span></td>
                      
                                        <td class="opcao">
                      
                      
                                          <span class="style20">
                      
                                            <input type="radio" name="resE" value="Sim" id="resE" onclick="exibeData('Sim')" /> Sim | <input type="radio" name="resE" value="Não" id="resE" onclick="exibeData('Não')" checked="checked" /> Não
                      
                      
                      
                                      </tr>
                                      <tr style="display: none;" id="trSaida">
                      
                                </td>
                      
                                <td class="opcao" id="dataSaida">Data de Saída<span>&nbsp;&nbsp;</span></td>
                      
                                <td>
                                  <input type="date" name="dataSaida" id="dataSaida" />
                                </td>
                      
                              </tr>
                              <tr>
                                <td>
                                  <label style = "" for="">Cópia da identidade</label>
                                  <div style="display: flex;">
                                    <input style=" margin-bottom: 16px;" type="file" name="identidade_resgate" id="identidade_resgate" onchange="convertToBase64('identidade_resgate')">
                                  </div>
                                  <br>
                      
                      
                                </td>
                                <td>
                      
                                  <button type="button" style=" margin-bottom: 16px;" onclick="limparInputFile('identidade_resgate')">Limpar</button><br>
                      
                      
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label style="" for="">Comprovante bancário com conta corrente e agência</label>
                                  <div style="display: flex;">
                                    <input type="file" name="comprovante_resgate" id="comprovante_resgate" onchange="convertToBase64('comprovante_resgate')">
                      
                                  </div>
                                </td>
                                <td>
                                  <button type="button" onclick="limparInputFile('comprovante_resgate')">Limpar</button>
                                </td>
                              </tr>
                      
                      
                      
                            </table>
                            <font color="#CC0000" style="font-size: 13px;margin-top: 20px;display: block;" class="opcao">PRAZO PARA PAGAMENTO: O resgate será pago até o último dia útil do mês subsequente ao do protocolo do Termo de Opção no SEBRAE PREVIDÊNCIA (Art. 107, I - Regulamento do Plano SEBRAEPREV). O demonstrativo de pagamento de resgate será enviado para o seu e-mail.</font>
                      
                            </div>

                            <br>
                      
                            <p class="opcao" align="justify"><span class="style20">
                      
                                <input type="radio" name="opc" value="opc4" onclick="exibeDiv('opc4');" />
                      
                              </span><strong>PORTABILIDADE</strong> - O cancelamento de minha inscrição e a Portabilidade do saldo referente ao meu direito acumulado para o seguinte plano de previdência complementar. Obs: As informações abaixo subsidiarão o SEBRAE Previdência para o preenchimento do Termo de Portabilidade que será encaminhado para o endereço informado nos campos 7 a 11 (endereço, bairro, cidade, cep e uf). Caso o campo 6 (e-mail) esteja preenchido, o termo de portabilidade será encaminhado via e-mail.</p>
                      
                            <div id="opc4" style="display:none;">
                      
                              <table width="619" border="0" align="center">
                      
                                <tr>
                      
                                  <td width="230"><span class="opcao">Entidade Administradora:&nbsp;</span></td>
                      
                                  <td colspan="2"><span class="opcao">
                      
                                      <input type="text" name="p_entidade" id="p_entidade" />
                      
                                    </span></td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">Endereço:&nbsp;</td>
                      
                                  <td colspan="2"><span class="opcao">
                      
                                      <input type="text" name="p_endereco" id="p_endereco" />
                      
                                    </span></td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">Cidade:&nbsp;</td>
                      
                                  <td colspan="2"><span class="opcao">
                      
                                      <input type="text" name="p_cidade" id="p_cidade" />
                      
                                    </span></td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">UF:&nbsp;</td>
                      
                                  <td colspan="2"><span class="style20">
                      
                                      <select name='p_uf' id="p_uf">
                      
                                        <option value="--" selected="selected"> --</option>
                      
                                        <option value="Amapá"> AP</option>
                      
                                        <option value="Acre"> AC</option>
                      
                                        <option value="Amazonas"> AM</option>
                      
                                        <option value="Alagoas"> AL</option>
                      
                                        <option value="Bahia"> BA</option>
                      
                                        <option value="Ceára"> CE</option>
                      
                                        <option value="Distrito-Federal"> DF</option>
                      
                                        <option value="Espirito-Santo"> ES</option>
                      
                                        <option value="Goiás"> GO</option>
                      
                                        <option value="Maranhão"> MA</option>
                      
                                        <option value="Minas-Gerais"> MG</option>
                      
                                        <option value="Mato-Grosso"> MT</option>
                      
                                        <option value="Mato-Grosso-do-Sul"> MS</option>
                      
                                        <option value="Piauí"> PI</option>
                      
                                        <option value="Pernambuco"> PE</option>
                      
                                        <option value="Paraiba"> PB</option>
                      
                                        <option value="Pará"> PA</option>
                      
                                        <option value="Pernambuco"> PR</option>
                      
                                        <option value="Rio-Grande-do-Norte"> RN</option>
                      
                                        <option value="Rio-Grande-do-Sul"> RS</option>
                      
                                        <option value="Rondônia"> RO</option>
                      
                                        <option value="Roraima"> RR</option>
                      
                                        <option value="Rio-de-Janeiro"> RJ</option>
                      
                                        <option value="São-Paulo"> SP</option>
                      
                                        <option value="Santa-Catarina"> SC</option>
                      
                                        <option value="Sergipe"> SE</option>
                      
                                        <option value="Tocantins"> TO</option>
                      
                                      </select>
                      
                                    </span></td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">CEP:&nbsp;</td>
                      
                                  <td colspan="2"><span class="opcao">
                      
                                      <input type="text" name="p_cep" onkeyup="mascara(this, '#####-###')" maxlength="9" id="p_cep" />
                      
                                    </span></td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">CNPJ:&nbsp;</td>
                      
                                  <td colspan="2"><span class="opcao">
                      
                                      <input type="text" name="p_cnpj" id="p_cnpj" />
                      
                                    </span></td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">Nome do Plano:&nbsp;</td>
                      
                                  <td colspan="2"><span class="opcao">
                      
                                      <input type="text" name="p_n_plano" id="p_n_plano" />
                      
                                    </span></td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">CNPJ do fundo:&nbsp;</td>
                      
                                  <td colspan="2"><span class="opcao">
                      
                                      <input type="text" name="p_cnpj_fundo" id="p_cnpj_fundo" />
                      
                                    </span></td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">Tipo do plano:&nbsp;</td>
                      
                                  <td colspan="2">&nbsp;</td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td colspan="3" class="opcao"> <span class="style20">
                      
                                      <input type="radio" value="t_plano1" name="t_plano" id="t_plano" />
                      
                                    </span>- PGBL        <span class="style20">
                      
                                      <input type="radio" value="t_plano2" name="t_plano" id="t_plano" />
                      
                                    </span> - PRGP         <span class="style20">
                      
                                      <input type="radio" value="t_plano3" name="t_plano" id="t_plano" />
                      
                                    </span>- PAGP         <span class="style20">
                      
                                      <input type="radio" value="t_plano4" name="t_plano" id="t_plano" />
                      
                                    </span>- FGB         <span class="style20">
                      
                                      <input type="radio" value="t_plano5" name="t_plano" id="t_plano" />
                      
                                    </span>- Plano Fechado – EFPC</td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao"><br /></td>
                      
                                  <td colspan="2" class="opcao">&nbsp;</td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">Regime de tributação:&nbsp;</td>
                      
                                  <td width="212" class="opcao">Data de adesão ao plano:&nbsp;</td>
                      
                                  <td width="163" class="opcao">Matrícula no plano:&nbsp;</td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao"><span class="style20">
                      
                                      <input type="radio" value="regi1" name="regi" id="regi" />
                      
                                    </span>Progressiva <span class="style20">
                      
                                      <input type="radio" name="regi" value="regi2" id="regi" />
                      
                                    </span>Regressiva</td>
                      
                                  <td class="opcao"><input type="text" name="data_ad" id="data_ad" maxlength="10" onkeyup="mascara(this, '##/##/####')" /></td>
                      
                                  <td class="opcao"><input type="text" name="matr_plano" id="matr_plano" /></td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">Nº do processo na SUSEP (Aberta) ou SPC (Fechada):<br />
                      
                                    <input type="text" name="n_susep" id="n_susep" />
                      
                                    <br />
                                  </td>
                      
                                  <td colspan="2" class="opcao">&nbsp;</td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td colspan="3" class="opcao">
                                    <table width="608" border="0" align="center">
                      
                                      <tr>
                      
                                        <td width="256">Banco da entidade: (nome e nº) </td>
                      
                                        <td width="342"><input name="n_banco_b3" type="text" size="50" /></td>
                      
                                      </tr>
                      
                                      <tr>
                      
                                        <td>Agência Número:<span class="style20">&nbsp;&nbsp;&nbsp;</span></td>
                      
                                        <td><input type="text" name="ag_banco3" id="ag_banco3" maxlength="6" /></td>
                      
                                      </tr>
                      
                                      <tr>
                      
                                        <td>Número da Conta:<span class="style20">&nbsp;</span></td>
                      
                                        <td><input type="text" name="cc_banco3" id="cc_banco3" maxlength="10" /></td>
                      
                                      </tr>
                                      <tr>
                      
                                        <td class="opcao">Além do desligamento da sua patrocinadora, qual o motivo da solicitação do resgate?<span class="style20">&nbsp;&nbsp;</span></td>
                      
                                        <td class="opcao">
                      
                      
                                          <span class="style20">
                      
                                            <textarea name="motivo2" cols="53" rows="5" class="style20" id="motivo2" onKeyUp="return Contador2('motivo2',1000);"></textarea>
                                            <input name="contador2" type="text" disabled="disabled" id="contador2" size="7" maxlength="7">
                      
                                        </td>
                      
                                      <tr>
                                        <td>
                                          <label style="font-size: 14px;" for="">Cópia da identidade</label>
                                          <div style="display: flex;">
                                            <input type="file" name="identidade_portabilidade" id="identidade_portabilidade" onchange="convertToBase64('identidade_portabilidade')">
                                          </div>
                                        </td>
                                        <td>
                                          <button type="button" onclick="limparInputFile('identidade_portabilidade')">Limpar</button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label style="font-size: 14px;" for="">Cópia da recisão contratual</label>
                                          <div style="display: flex;">
                                            <input type="file" name="recisao_portabilidade" id="recisao_portabilidade" onchange="convertToBase64('recisao_portabilidade')">
                                          </div>
                                        </td>
                                        <td>
                                          <button type="button" onclick="limparInputFile('recisao_portabilidade')">Limpar</button>
                                        </td>
                                      </tr>
                      
                                    </table>
                                  </td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">&nbsp;</td>
                      
                                  <td colspan="2" class="opcao">&nbsp;</td>
                      
                                </tr>
                      
                                <tr>
                      
                                  <td class="opcao">&nbsp;</td>
                      
                                  <td colspan="2" class="opcao">&nbsp;</td>
                      
                                </tr>
                      
                              </table>
                      
                            </div>
                            </fieldset>
                      
                            </td>
                      
                            </tr>
                      
                            <tr>
                      
                      
                      
                            </tr>
                      
                            <tr>
                      
                              <td colspan="5" class="style20">&nbsp;</td>
                      
                            </tr>
                        </div>
                        <br>
                        <div class="input-button">
                            <input type="submit" id="submit" name="ok">
                        </div>
                    </div>
</body>
</html>
                    <br>
                    <footer class="rodape">
                        &nbsp;Após a validação dos dados, iremos entrar em contato com você! &copy; 2023 | &reg; Todos os
                        direitos reservados.
                    </footer>
                    
                    <script src="assets/js/validaForm.js"></script>
                    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"8061491a4fcf36c9","version":"2023.8.0","r":1,"token":"cbfa9ca0dc1942a2a558ae8225356c52","si":100}' crossorigin="anonymous"></script>
                    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
                    <script src="assets/js/cep.js"></script>
                    <script src="assets/js/code.jquery.com_jquery-3.7.0.min.js"></script>
                    <script src="assets/js/jquery.mask.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#residencial').mask('(00)00000-0000')
                            $('#celular').mask('(00)00000-0000')
                            $('#comercial').mask('(00)00000-0000')
                            $('#outros').mask('(00)00000-0000')
                            $('#txtCep').mask('00000-000')
                        });
                    </script>
                    <script type="text/javascript">
                        $('#dados_conta').hide();

                            // Adiciona um evento de clique aos rádios
                            $('input[name="solicito"]').click(function () {
                                if ($(this).val() === 'debito_conta') {
                                    $('#dados_conta').show();
                                } else {
                                    $('#dados_conta').hide();
                                    // Limpa os campos de dados bancários quando o rádio "boleto_bancario" for clicado
                                    $('#banco, #agencia, #codigo_agencia, #conta_corrente, #codigo_conta').val('');
                                }
                            });

                            // Restringe a entrada de números nos campos de dados bancários
                            $("#agencia, #codigo_agencia, #conta_corrente, #codigo_conta").keyup(function () {
                                var valor = $(this).val().replace(/[^0-9]+/g, '');
                                $(this).val(valor);
                            });

                    </script>
    </form>
</body>
</html>