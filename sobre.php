 <!-- script de rolagem -->

<script type="text/javascript">
 jQuery(document).ready(function($) { 
     $(".scroll").click(function(event){        
         event.preventDefault();
         $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
    });
 });</script>
 <!-- fim do script de rolagem -->


<section id="sobre">
            <div class="espaco">
                <div class="inicio">
            <p class="titulo">Sobre nós</p>
     <hr class="barra">
                    
                    </div>
                
                <br />
                <br />
                <br />
                <br />
                <br />
    
 <div class="conteudo">          
<div class="img_sobre">
            <img class="pnglogo" src="imagens/pnglogo.png">
    </div>
                
        <div class="textosobre">
            <div class="curto">
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

   
<style type="text/css">
 /* CONFIGURAÇÃO CSS DA SESSAÕ 2 - "SOBRE NÓS" */  
    .titulo{
  position:absolute;  
  font-family: 'Lato', sans-serif;
  font-weight: bold;
  color:#00d0c5;
  margin-left: 80vh;
  margin-top: 15vh;
  font-size:5vh;
    }

   .barra{      
  background-color:#00bacb;
  height:8px;
  width:10vh;
  position: absolute;
  margin-left: 80vh;
  margin-top: 23vh;
}
      
    .paragrafo{
        text-align: justify;
          }
      
    img.pnglogo{
        width:80vh;
        height:80vh;
          }

/* div que deixa a imagem responsiva */
    .img_sobre{
        border-width:2px;
        width:45%;
        height: 80vh;
        float: left; /*esse comando permite que as divs - da imagem e do texto - fiquem uma do lado da outra */

    }
/* div que deixa o texto responsiva */
    .textosobre{
        border-width:2px;
        width:55%;
        height: 80vh;
        float:right;  /*esse comando permite que as divs - da imagem e do texto - fiquem uma do lado da outra */


    }
/* Essa div mexe com a disposição do texto para que ele não fique muito colado à margem */
    .curto{
        width: 80%;
        margin-left: 5%;
        margin-top: 10%;
          }
      
    .divisor{
        float: none;
        width: 30%;
        height:80vh;
        background-image: linear-gradient(to top, #007adf 0%, #00ecbc 100%);
        } 
    

        .verde{
          color:#00d0c5;
        }
    
    /*.inicio {
        width:50%;
    } */
       
        
 /* CONFIGURAÇÃO CSS DA SESSÃO 3 - "DESENVOLVEDORES" */    
    #desenvolvedores{
      background: url(imagens/Untitled-1.jpg) no-repeat center center; 
      background-size: cover;

    }   
    
      /* Three columns side by side */
    .column {
      float: left;
      width: 30%;
      margin-bottom: 16px;
      padding: 0 8px;
    }
      
      /* Add some shadows to create a card effect */
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    
      /* Clear floats */
      
      .container {
  padding: 16px;
  background-color: #00e4bf;
}
.containern{ /* container que deixa a caixa da nathalia diferente */
  padding: 16px;
  background-color: #00acd0;
      }

    .title {
      color: rgb(255, 255, 255);
      font-family: 'Lato', sans-serif;
    }

    .cont{
      color: rgb(255, 255, 255);
      font-family: 'Lato', sans-serif;
    }
      
      
      
      
.titulo1{
  font-family: 'Lato', sans-serif;
  font-weight: bold;
  color:#00d0c5;
  font-size:5vh;
  text-align:center;
  
}
    
    .row{
        
        width: 80%;
        margin-left: 10%;
        margin-right: 10%;
        
    }
      

  

    
    
    
      
       @media screen and (max-width: 600px) {
   
    .img_sobre {
        width: 100%;
    }   
         .textosobre{
             width: 100%;
         }
     
          img.pnglogo{
           
           width: 100%;
            height: 90%;
           align-items: center;
          }
           
           .curto{
             width:90%;
            margin-left: 5%;
            margin-right: 5%;
            height: 100%;
           }
           
           .column{
               width: 90%;
               margin-left: 5%;
            margin-right: 5%;
           }
            
    
}  
</style>
 