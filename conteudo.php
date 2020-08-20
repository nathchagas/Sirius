<!-- script de rolagem -->

<script type="text/javascript">
 jQuery(document).ready(function($) { 
     $("#scroll").click(function(event){        
         event.preventDefault();
         $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
    });
 });</script>

 <!-- os codigos abaixo são todos copias do script acima com uma variavel do scroll diferente (variando de 1-5).
  meu plano é criar uma variavel que mude esses numeros no scroll acima para reduzir a quantidade necessaria de scripts
  (por exemplo, transformar o $("scroll") em $("scroll1") no script acima ao clicar em serviços no menu).-->

<script type="text/javascript">
 jQuery(document).ready(function($) { 
     $("#scroll1").click(function(event){        
         event.preventDefault();
         $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
    });
 });</script>

<script type="text/javascript">
 jQuery(document).ready(function($) { 
     $("#scroll2").click(function(event){        
         event.preventDefault();
         $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
    });
 });</script>

<script type="text/javascript">
 jQuery(document).ready(function($) { 
     $("#scroll3").click(function(event){        
         event.preventDefault();
         $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
    });
 });</script>

<script type="text/javascript">
 jQuery(document).ready(function($) { 
     $("#scroll4").click(function(event){        
         event.preventDefault();
         $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
    });
 });</script>

 <!-- fim do script de rolagem -->

<section id="home">
<div class="home">
        <div class="centralizador">
            <img class="centromeio" src="imagens/onglogo.png">
        </div>
            <p class="titulo1" >Dê um start no seu negócio</p>
            <center>
</br><a href="#sobre" class="scroll" id="buttonp">CONHEÇA</a></center>
        </div>
    </section>
    
    <section id="sobre">
         
            <div class="espaco">
              
                 <div class="inicio">
            <p class="titulo">Sobre nós</p>
     <hr class="barra">
            
                    </div>
                
    
 <div class="conteudo">          
<div class="img_sobre">
</br></br></br></br> <img class="pnglogo" src="imagens/pnglogo.png">
    </div>
                
        <div class="textosobre">
            <div class="curto">
                <br />
                <br />
                <br />
                <br />
            <p class="paragrafo">A Sirius Web Design é uma empresa criada para fins didáticos de prestação de serviços para a elaboração e manutenção de sites e páginas web. Criada com o intuito de atender as necessidades do Trabalho de Conclusão  de Curso dos alunos do curso ténico de Informática para Internet Integrado ao Ensino Médio do <b class="verde">Intituto Federal de São Paulo - Campus Guarulhos</b>, estamos abertos a comunidade externa afim de oferecer um trabalho de qualidade. </p>
            <p class="paragrafo">A respeito da origem do nome de nossa empresa, Sirius é a estrela mais brilhante visível a olho nu no céu noturno e pode ser vista a partir de qualquer ponto na Terra. 
            Sendo a principal de sua constelação, é muitas vezes apelidada de <b class="verde">Estrela do Cão (Dog-Star)</b>, mas o seu termo Sirius deriva do grego seirios <b class="verde"><i>("brilhante, ou a escaldante")</i></b>. Possui registros remanescentes do Egito Antigo, os quais acreditavam que a mesma possuia grande influência nas estações do ano, homens e mulheres.</p>
            <p class="paragrafo">Em nossa identidade visual, buscamos representar de maneira simplificada e clara a letra -S de <b class="verde">Sirius</b>. Tendo sobreposta uma estrela acompanhada de um campo gravitacional, a ideia era a de transmitir de maneira rápida a conexão entre nossa empresa e o logo.</p>
            <p><a href="#desenvolvedores" class="scroll" id="buttonp">Conheça os desenvolvedores</a></p>

        </div>

            </div> 

       <div class="divisor"></div> 
        </div>
                </div>     

      <div id="desenvolvedores">
          <center>
             
              <div class="titulo_dsv">
              <p class="titulo1" ><br/><br/>Conheça nossos Desenvolvedores</p>
              </div>
              <div id="contatos">
                <div class="row">
        <!-- div desenvolvedor (João) -->
                  <div class="column">
                    <div class="card">
                      <img src="imagens/joaoquadro.png" alt="João" style="width:100%">
                      <div class="container">
                        <p class="title">Programador</p>
                        <p class="cont">Gerente da empresa e desenvolvedor back-end.</p>
                      </div>
                    </div>
                  </div>
                    
        <!-- div desenvolvedor (Nathalia) -->
                  <div class="column">
                    <div class="card">
                      <img src="imagens/nathaliaquadro.png" alt="Nathalia" style="width:100%">
                      <div class="containern">
                        <p class="title">Programadora</p>
                        <p class="cont">Desenvolvedora de back-end e demais estruturas.</p>
                      </div>
                    </div>
                  </div>

        <!-- div desenvolvedor (Mariana) -->
                  <div class="column">
                    <div class="card">
                      <img src="imagens/marianaquadro.png" alt="Mariana" style="width:100%">
                      <div class="container">
                        <p class="title">Web Designer</p>
                        <p class="cont">Responsável pela identidade visual da empresa e front-end.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- fecha a div "id contatos" -->
            </center>
      </div>
</section>
    
<section class="home">
    <center>
      <div id="servicos">
        <div class="titulo1" ><br/><br/>Nossos Serviços</div>
        <br/><br/>
       <div class="servicos">
        <div class="row">
          <div class="column">
            <div class="card">
                <div class="containeservicos">
                  <img src="imagens/web.png" width="50px" height="50px">
                  <p class="title">Criação de Sistemas Web</p>
                  <p class="cont">Sistemas web são soluções que podem ser desenvolvidas para tornar processos manuais mais simples, rápidos e eficazes. Nesse caso, falamos de atividades como cadastro de clientes, gestão de documentos ou de estoque, por exemplo.</p>
                </div>
             </div>
          </div>

          <div class="column">
            <div class="card">
                <div class="containeservicos1">
                  <img src="imagens/servidor.png" width="50px" height="50px">
                  <p class="title">Admnistração de Servidores</p>
                  <p class="cont">O objetivo da administração de servidores é instalar e manter serviços de rede aos usuários de uma instituição de forma transparente. Exemplos de serviços de rede que podem ser providos aos usuários: controle de login na rede e mais.</p>
                </div>
            </div>
          </div>
            
        <div class="column">
          <div class="card">
            <div class="containeservicos">
             <img src="imagens/manutencao.png" width="50px" height="50px">
             <p class="title">Manutenção de Sites</p>
             <p class="cont">Sistemas web são soluções que podem ser desenvolvidas para tornar processos manuais mais simples, rápidos e eficazes. Nesse caso, falamos de atividades como cadastro de clientes, gestão de documentos ou de estoque, por exemplo.      </p>
            </div>
          </div>
        </div>
     </div> <!-- fecha a div "row" -->
    </div>
    </div> <!-- fecha a div "id serviços" -->
  </center>
</section>

    

<section class="espaco">
 
    <div id="conceitos">
        <div class="sobrepor">
      
          <p class="tituloconceito">Nossos<br/>Conceitos

          <p class="tituloconceitoabaixo">Aquilo que acreditamos e desejamos a nossa empresa está aqui.

            <br/>
            <br/>
            <a href="#contato" class="scroll" id="buttonp">Contato</a>
         </p>     
      
            <br/>
            <br/>
            <br/>
            <br/>

    
            <div class="box">
              <img src="imagens/missao.png" style="width: 60px; height:60px;">
              <p class="conceitostitulo">Missão</p>
              <p class="conceitosbox">A nossa missão consiste em desenvolver web sites de extrema qualidade e segurança, afim de proporcionar a nossos clientes um alcance maior em seu negócio.</p>
            </div>

              <div class="box">
                <img src="imagens/visao.png" style="width: 60px; height:60px;">
                <p class="conceitostitulo">Visão</p>
                <p class="conceitosbox">Ser referência na área de desenvolvimento de web sites e serviços web, sempre buscando inovações e soluções tecnologicas, reconhecida pela qualidade na prestação de serviços.</p>
            </div>

            <div class="box">
              <img src="imagens/valores.png" style="width: 60px; height:60px;">
              <p class="conceitostitulo">Valores</p>
              <p class="conceitosbox">Ética, respeito e transparência.</p>
            </div>

        </div> <!-- fecha a div sobrepor -->

        <div class="divisor1"></div>
    </div> <!-- fecha a div conceitos -->

        <div id="contato">

          <div class="titulo1"><br/><br/>Contato</div>


          <div id="uniao_contato">

        <div class ="formulario">
        <form action="action_page.php">

            <label class="titulo_form" for="fname">Nome completo</label>
            <input type="text" id="fname" name="nome">

            <label class="titulo_form" for="lname">Email</label>
            <input type="text" id="lname" name="email" >

            <label class="titulo_form" for="lname">Assunto</label>
            <input type="text" id="lname" name="assunto">

            <label class="titulo_form" for="subject">Mensagem</label>
            <textarea id="subject" name="subject" style="height:60px"></textarea>

            <input type="submit" value="Submit">

          </form></div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.5785476321253!2d-46.53908158538711!3d-23.43958686299075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef51fbe5f8681%3A0x1f8cf929993dc97!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%20IFSP%20Guarulhos!5e0!3m2!1spt-BR!2sbr!4v1584387797174!5m2!1spt-BR!2sbr" width="50%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div></div>
    </section>

 <div id ="footer"> 

     <footer class="fixarrodape"><br/>
       <img src="imagens/pnglogo.png" width="50px" height="50px"><br/>
Todos os direitos reservados.
<br/>
Created by © Sirius Web Design
<div class="w3-xlarge w3-section">
 <a href="https://www.facebook.com/siriusdesignweb/" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
 <a href="https://www.instagram.com/siriuswebdesign/?hl=pt-br" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
 <a href="https://twitter.com/siriusdesignweb" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
</div>
</footer>


</div>
