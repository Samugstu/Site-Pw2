
<body>
    <div class="safa container-fluid" style="width: 100%; height:100%">
    <div class="background-image1"></div>
        <div class="container-fluid vh-100 d-flex flex-column p-5 bg-transparent" style="width:75%">
            <div class="row m-2 d-flex align-items-center vh-10 fw-bold" >
                <p class="texto"style="color: red">"SALVE O</p>
            </div>
            <div class="row mx-3 d-flex align-items-center vh-10 fw-bold" >
                <p class="texto" style="color: white">TRICOLOR PAULISTA..."</p>
            </div>
            <section class="palavras ">O <span class="fw-bold" style="color: red">São Paulo Futebol Clube</span>, também conhecido como <span class="fw-bold" style="color: red">Tricolor Paulista</span> foi fundado em 25 de janeiro de 1930. O clube nasceu da união de dissidentes do <span class="fw-bold" style="color: red">Club Athlético Paulistano</span> e da <span class="fw-bold" style="color: red">Associação Athlética das Palmeiras</span>, tendo sua ata de fundação assinada na madrugada do dia 26 daquele mês devido ao tardar da reunião e à confecção dos estatutos.<br> 
            <section>No seu segundo ano de existência, o clube se consagrou campeão paulista. O São Paulo já era um gigante do futebol local, só que nem mesmo o clube imaginava onde iria chegar.
                Em 1935, o clube teve uma nova refundação. Isso ocorreu devido a uma crise política dentro da instituição. Surge então um gigante no futebol, com a tradição de colecionar títulos. É, essa camisa pesa, amigos, e como diz o próprio hino:<span style="color: gold"> "Dentre os grandes és o primeiro!"</span>
            </section>
        </div>  
    </div>                
    <style>

    section:first-letter {
    margin-left: 2em;
    }
    .background-image1 {
        position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 100%; /* Ajuste esse valor para definir a largura da imagem de fundo */
    background-image: url('../visual/imgs/1930.jpg'); /* Substitua pelo caminho da sua imagem */
    background-size: cover;
    background-position: center;
    filter: brightness(0.1);
    z-index: -1;
    }

  

    .texto {
      font-size: 70px;
      filter: drop-shadow(5px 5px 15px black)
    }

    .palavras {
      color: white; 
      padding-top: 4em; 
      margin-right: 1em;
      font-size:21px;
    }
    @media (max-width: 1350px) {
        .palavras {
          font-size:20px;
          margin: 0px;
          padding: 0px;
        }
        .texto {
          font-size: 55px;
        }
    }

    @media (max-width: 1100px) {
      .palavras {
        font-size:20px;
      }
      .texto {
        font-size: 50px;
      }
    }

    @media (max-width: 1000px) {
      .palavras {
        font-size:20px;
      }
      .texto {
        font-size: 40px;
      }
    }
    @media (max-width: 900px) {
      .palavras {
        font-size:20px;
      }
      .texto {
        font-size: 35px;
      }
    }
    @media (max-width: 850px) {
      .palavras {
        display: none;
      }
      .texto {
        display: none;
      }
      .safa {
        display: none;
      }
    }
  
  </style>
  
</body>