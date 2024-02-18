   <style>
        body {
            margin: auto;
            padding: auto;
            background-color: black;
        }

        

        .star, .starr {
            cursor: pointer;
            transition: 0.5s;
        }

        .star:hover {
            transform: scale(1.1);
            filter: drop-shadow(0px 0px 10px gold);
            content:url('../visual/imgs/stara.png')
        }

        .starr:hover {
            transform: scale(1.1);
            filter: drop-shadow(0px 0px 10px red);
            content:url('../visual/imgs/starr.png')
        }

        .background-image2 {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            background-image: url('../visual/imgs/2005.jpg');
            background-size: cover;
            background-position: center;
            filter: brightness(0.1);
            z-index: -1;
        }
        @media (max-width: 850px) {
            .afaz {
                display: none;
            }
        }
    </style>


    <div class="afaz container-fluid" style="width: 100%; height: 100%">
        <div class="background-image2"></div>
        <div class="container-fluid vh-100 d-flex flex-column p-5 bg-transparent" style="width:75%">
            <div class="row m-2 d-flex align-items-center vh-10 fw-bold">
                <p style="font-size: 70px; color: gold; filter: drop-shadow(5px 5px 15px black)">"AS TUAS GLÓRIAS</p>
            </div>
            <div class="row mx-2 d-flex align-items-center vh-10 fw-bold">
                <p style="font-size: 70px; color: gold; filter: drop-shadow(5px 5px 15px black)">VEM DO PASSADO..."</p>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center"><img src="../visual/imgs/star.png" width=150 height=150 class="starr"></div>
            </div>
            <div class="row">
                <div class="col-sm d-flex justify-content-center"><img src="../visual/imgs/star.png" width=150 height=150 class="star"></div>
                <div class="col-sm d-flex justify-content-center"><img src="../visual/imgs/star.png" width=150 height=150 class="starr"></div>
                <div class="col-sm d-flex justify-content-center"><img src="../visual/imgs/star.png" width=150 height=150 class="starr"></div>
                <div class="col-sm d-flex justify-content-center"><img src="../visual/imgs/star.png" width=150 height=150 class="star"></div>
            </div>
            <section class="d-flex justify-content-center mt-5" style="color: #757575"></section>
        </div>
    </div>

