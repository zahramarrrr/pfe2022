<html>

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MaCommande</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!--===============================================================================================-->
    <link href="assetswelcome/img/favicon.png" rel="icon">
    <!--===============================================================================================-->
    <link href="assetswelcome/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="assetswelcome/vendor/aos/aos.css" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="assetswelcome/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="assetswelcome/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="assetswelcome/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="assetswelcome/vendor/remixicon/remixicon.css" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="assetswelcome/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="assetswelcome/css/style.css" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--===============================================================================================-->

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/login/css/style.css">
    <style>
        @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css";

        .form-horizontal {

            padding-top: 100px;
        }


        .shop-tracking-status .order-status {
            margin-top: 150px;
            position: relative;
            margin-bottom: 150px
        }

        .shop-tracking-status .order-status-timeline {
            height: 12px;
            border: 1px solid #aaa;
            border-radius: 7px;
            background: #ddd;
            box-shadow: 0px 0px 5px 0px #C2C2C2 inset
        }

        .shop-tracking-status .order-status-timeline .order-status-timeline-completion {
            height: 8px;
            margin: 1px;
            border-radius: 7px;
            background: #5e17eb;
            width: 0px
        }

        .shop-tracking-status .order-status-timeline .order-status-timeline-completion.c1 {
            width: 22%
        }

        .shop-tracking-status .order-status-timeline .order-status-timeline-completion.c2 {
            width: 46%
        }

        .shop-tracking-status .order-status-timeline .order-status-timeline-completion.c3 {
            width: 70%
        }

        .shop-tracking-status .order-status-timeline .order-status-timeline-completion.c4 {
            width: 100%
        }

        .shop-tracking-status .image-order-status {
            border: 1px solid #ddd;
            padding: 7px;
            box-shadow: 0px 0px 10px 0px #999;
            background-color: #fdfdfd;
            position: absolute;
            margin-top: -35px
        }

        .le1 {
            border: 1px solid #ddd;
            padding: 7px;
            box-shadow: 0px 0px 10px 0px #999;
            background-color: #32CD32 !important;
            position: absolute;
            margin-top: -35px
        }


        .shop-tracking-status .image-order-status.disabled {
            filter: url("data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'><filter%20id='grayscale'><feColorMatrix%20type='matrix'%20values='0.3333%200.3333%200.3333%200%200%200.3333%200.3333%200.3333%200%200%200.3333%200.3333%200.3333%200%200%200%200%200%201%200'/></filter></svg>#grayscale");
            filter: grayscale(100%);
            -webkit-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            filter: gray;
        }

        .shop-tracking-status .image-order-status.active {
            box-shadow: 0px 0px 10px 0px #9F2B68
        }

        .shop-tracking-status .image-order-status.active .status {
            color: #4306bd;
            text-shadow: 0px 0px 1px #777
        }

        .shop-tracking-status .image-order-status .icon {
            height: 40px;
            width: 40px;
            background-size: contain;
            background-position: no-repeat
        }

        .shop-tracking-status .image-order-status .status {
            position: absolute;
            text-shadow: 1px 1px #eee;
            color: #333;
            transform: rotate(-30deg);
            -webkit-transform: rotate(-30deg);
            width: 180px;
            top: -50px;
            left: 50px
        }

        .shop-tracking-status .image-order-status .status:before {
            font-family: FontAwesome;
            content: "\f053";
            padding-right: 5px
        }

        .shop-tracking-status .image-order-status-new {
            left: 0
        }

        .shop-tracking-status .image-order-status-new .icon {
            background-image: url(assetswelcome/img/validée.png);
        }

        .shop-tracking-status .image-order-status-active {
            left: 22%
        }

        .shop-tracking-status .image-order-status-active .icon {
            background-image: url(assetswelcome/img/agent.png);
        }

        .shop-tracking-status .image-order-status-intransit {
            left: 45%
        }

        .shop-tracking-status .image-order-status-intransit .icon {
            background-image: url(assetswelcome/img/préparée.png);
        }

        .shop-tracking-status .image-order-status-delivered {
            left: 70%
        }

        .shop-tracking-status .image-order-status-delivered .icon {
            background-image: url(assetswelcome/img/livreur.png)
        }

        .shop-tracking-status .image-order-status-delivered .status {
            top: 85px;
            left: -180px;
            transform: rotate(-30deg);
            -webkit-transform: rotate(-30deg);
            text-align: right
        }

        .shop-tracking-status .image-order-status-delivered .status:before {
            display: none
        }

        .shop-tracking-status .image-order-status-delivered .status:after {
            font-family: FontAwesome;
            content: "\f054";
            padding-left: 5px;
            vertical-align: middle
        }

        .shop-tracking-status .image-order-status-completed {
            right: 0px
        }

        .shop-tracking-status .image-order-status-completed .icon {
            background-image: url(assetswelcome/img/livrée.png);
        }

        .shop-tracking-status .image-order-status-completed .status {
            top: 85px;
            left: -180px;
            transform: rotate(-30deg);
            -webkit-transform: rotate(-30deg);
            text-align: right
        }

        .shop-tracking-status .image-order-status-completed .status:before {
            display: none
        }

        .shop-tracking-status .image-order-status-completed .status:after {
            font-family: FontAwesome;
            content: "\f054";
            padding-left: 5px;
            vertical-align: middle
        }

        .btn-get-started {
            margin-top: 30px !important;
            line-height: 0;
            padding: 15px 40px !important;
            border-radius: 4px;
            transition: 0.5s;
            color: #fff;
            background: #B15FC8;
            box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
        }

        .header .logo {
            line-height: 0;
            padding-right: 1000 !important;
        }

        .labelsearch {
            color: #004AAD;
            font-size: 25px;
        }

        .le1 {
            border: 1px solid #ddd;
            padding: 7px;
            box-shadow: 0px 0px 10px 0px #999;
            background-color: #32CD32 !important;
            position: absolute;
            margin-top: -35px;
        }
        #erreur {
            padding-right : 60px !important;
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script language="JavaScript" type="text/javascript">
        $(document).ready(function() {
            $("button").click(function() {

                var ID_cmd = $("input:text").val();
     
                console.log(JSON.stringify(ID_cmd));
                if (ID_cmd) {
                    $.ajax({
                        type: 'post',
                        url: "{{route('chercher')}}",
                        data: {

                            'ID': ID_cmd,
                            "_token": "{{csrf_token()}}",
                        },
    
                        success: function(response) {
                           
                            $("#res").show();
                            console.log(response.etat);

                            marker = JSON.stringify(response.etat);
                
                            if (marker == '"validée"') {
                                $('#etat')
                                    .removeClass('order-status-timeline-completion')
                                    .addClass('order-status-timeline-completion c0')
                                    .html();
                                    
                                $("#valider").css({
                                    "background-color": "#8c52ff"
                                });
                                $("#validee").css({
                                    "filter": "brightness(20)"
                                });

                            } else if (marker == '"affecter a un agent"') {
                                $('#etat')
                                    .removeClass('order-status-timeline-completion')
                                    .addClass('order-status-timeline-completion c1')
                                    .html();
                                $("#valider").css("background-color", "#8c52ff");
                                $("#affecterAgent").css("background-color", "#8c52ff");
                                $("#validee").css({
                                    "filter": "brightness(20)"
                                });
                                $("#affecteeagent").css({
                                    "filter": "brightness(20)"
                                });


                            } else if (marker == '"préparée"') {
                                $('#etat')
                                    .removeClass('order-status-timeline-completion')
                                    .addClass('order-status-timeline-completion c2')
                                    .html();
                                $("#valider").css("background-color", "#8c52ff");
                                $("#affecterAgent").css("background-color", "#8c52ff");
                                $("#preparer").css("background-color", "#8c52ff");
                                $("#validee").css({
                                    "filter": "brightness(20)"
                                });
                                $("#affecteeagent").css({
                                    "filter": "brightness(20)"
                                });
                                $("#preparee").css({
                                    "filter": "brightness(20)"
                                });

                            } else if (marker == '"affecter a un livreur"') {
                                $('#etat')
                                    .removeClass('order-status-timeline-completion')
                                    .addClass('order-status-timeline-completion c3')
                                    .html();
                                $("#valider").css("background-color", "#8c52ff");
                                $("#affecterAgent").css("background-color", "#8c52ff");
                                $("#preparer").css("background-color", "#8c52ff");
                                $("#affecterLivreur").css("background-color", "#8c52ff");
                                $("#validee").css({
                                    "filter": "brightness(20)"
                                });
                                $("#affecteeagent").css({
                                    "filter": "brightness(20)"
                                });
                                $("#preparee").css({
                                    "filter": "brightness(20)"
                                });
                                $("#affecteelivreur").css({
                                    "filter": "brightness(20)"
                                });

                            } else if (marker == '"livrée"') {
                                $('#etat')
                                    .removeClass('order-status-timeline-completion')
                                    .addClass('order-status-timeline-completion c4')
                                    .html();
                                $("#valider").css("background-color", "#8c52ff");
                                $("#affecterAgent").css("background-color", "#8c52ff");
                                $("#preparer").css("background-color", "#8c52ff");
                                $("#affecterLivreur").css("background-color", "#8c52ff", );
                                $('#liv').css("background-color", "#8c52ff");
                                $('#dd').text('Livrée');
                                $("#validee").css({
                                    "filter": "brightness(20)"
                                });
                                $("#affecteeagent").css({
                                    "filter": "brightness(20)"
                                });
                                $("#preparee").css({
                                    "filter": "brightness(20)"
                                });
                                $("#affecteelivreur").css({
                                    "filter": "brightness(20)"
                                });
                                $("#livree").css({
                                    "filter": "brightness(20)"
                                });

                            } else if (marker == '"retournée"') {
                                $('#etat')
                                    .removeClass('order-status-timeline-completion')
                                    .addClass('order-status-timeline-completion c4')
                                    .html();
                                    $("#valider").css("background-color", "#8c52ff");
                                $("#affecterAgent").css("background-color", "#8c52ff");
                                $("#preparer").css("background-color", "#8c52ff");
                                $("#affecterLivreur").css("background-color", "#8c52ff", );
                                $('#liv').css("background-color", "#8c52ff");
                                $("#validee").css({
                                    "filter": "brightness(20)"
                                });
                                $("#affecteeagent").css({
                                    "filter": "brightness(20)"
                                });
                                $("#preparee").css({
                                    "filter": "brightness(20)"
                                });
                                $("#affecteelivreur").css({
                                    "filter": "brightness(20)"
                                });
                                $("#livree").css({
                                    "filter": "brightness(20)"
                                });
                                $('#liv')
                                $('#dd').text('Retournée')

                            }

                        },
                        error: function(error) {

                            $("#erreur").show();

                        }
                    });
                }
            })
        })
    </script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>

    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index" class="logo d-flex align-items-center">
                <img src="assetswelcome/img/logo.png" alt="">
                <span>MaCommande</span>
            </a>



            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <section id="Macommande" class="Macommande d-flex align-items-center">

        <div class="col-lg-10 ">
            <img src="assetswelcome/img/search2.png" class="img-fluid col-lg-6" alt="">


            
            <div class="form-horizontal">
            <div id="erreur" class="alert alert-danger" role="alert" style="display:none">
    la commande n'existe pas !</div>

                <label class="labelsearch"><i class="bi bi-arrow-down-right"></i> Suivre votre commande par ici :</label>
                     


                <input class=" search" type="text">
                <button class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" type="submit"><i class="bi bi-search"></i></button>
   
                </form>


                <div class="row shop-tracking-status">

                    <div id="res" class="order-status" style="display:none">

                        <div class="order-status-timeline">
                            <!-- class names: c0 c1 c2 c3 and c4 -->
                            <div id="etat" class="order-status-timeline-completion"></div>
                        </div>

                        <div id="valider" class="image-order-status image-order-status-new active img-circle">
                            <span class="status">Validée</span>
                            <div id="validee" class="icon"></div>
                         
                        </div>
                        <div id="affecterAgent" class="image-order-status image-order-status-active active img-circle">
                            <span class="status">En préparation</span>
                            <div id="affecteeagent" class="icon"></div>
                        </div>
                        <div id="preparer" class="image-order-status image-order-status-intransit active img-circle">
                            <span class="status">Préparée</span>
                            <div id="preparee" class="icon"></div>
                        </div>
                        <div id="affecterLivreur" class="image-order-status image-order-status-delivered active img-circle">
                            <span class="status">En livraison</span>
                            <div id="affecteelivreur" class="icon"></div>
                        </div>
                        <div id="liv" class="image-order-status image-order-status-completed active img-circle">
                            <span id="dd" class="status"></span>
                           

                           
                            <div id="livree" class="icon"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>