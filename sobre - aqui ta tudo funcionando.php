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
        width: 25%;
        height:80vh;
        background-image: linear-gradient(to top, #007adf 0%, #00ecbc 100%);
        } 
    

        .verde{
          color:#00d0c5;
        }
    
    /*.inicio {
        width:50%;
    } */
         
    
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

           }
            
    
}  
</style>
 