<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- LIBRARIES -->

    <!-- BOOTSTRAP -->        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--// BOOTSTRAP //-->  
        
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!--// GOOGLE FONTS //-->
    <style>


        body {
            font-family: 'Almarai', sans-serif;
        }

    
 

    .bg-primary {
        background: #811538 !important;
        color: white;
    }

    .bg-secondary {
        background: #5b0d25 !important;
        color: white;
    }

    #header-background {
        background-image: url("pattern.png");
    }

    
    #header {
        clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 80%);
        border-bottom: solid 20px #5b0d25;
    }

    #logo-header {
        position: absolute;
        z-index: 999;
        left: 100px;
        top: 60px;
    }

    #logo-img {
        height: 300px;
        -webkit-filter: drop-shadow(5px 5px 30px #222);
        filter: drop-shadow(5px 5px 30px #222);
    }
    </style>

</head>
<body>
    <div class="container" style="margin-top: 50px">
     <div class="row" style="direction: rtl;">
                <h1>
                    <b>
                    المباريات
                    </b>
                </h1>
                <hr>
            </div>
            <!--// TITLE ROW //-->


            <!-- MATCHES ROW -->
            <div class="row " id="matches">
            <!-- MATCH COL -->
            <form action="" method="POST">
                <div class="col-sm-12">
                    <div class="card shadow rounded-pill" style="overflow: hidden;">
                        <div class="card-body p-0">
                            <div class="row row-card" style="height: 320px;">
                                <!-- FIRST TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-right: solid 5px #5b0d25; "
                                >

                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="https://image.winudf.com/v2/image/Y29tLmZsYWd3YWxscGFwZXIubW9yb2Njb19zY3JlZW5fMF8xNTMzNjQ0OTY4XzA1OA/screen-0.jpg?fakeurl=1&type=.webp" alt=""
                                                >
                                            </div>
                                            <h5 style="margin: auto 4px">
                                                <b>MCR</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// FIRST TEAM COL //-->

                                <!-- MATCH INFO COL -->
                                <div class="col-sm-6" style="text-align: center;">
                                    <div class="row">
                                        <div class="col-sm-4" style="margin: auto 0px;">
                                            <h3>
                                                <input style="width: 25%; border: none;  outline: none;"  value="0" type="text" name="marruecos-1" id="">
                                            </h3>
                                        </div>
                                        <div class="col-sm-4" style="margin: auto 0px; ">
                                            <h6>Group (A)</h6>
                                            <h1>X</h1>
                                            <h6>18:30</h6>
                                        </div>
                                        <div class="col-sm-4" style="margin: auto 0px;">
                                            <h3>
                                                <input style="width: 25%; border: none;  outline: none;" type="text" name="croacia-1" id="" value="0">
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                                <!--// MATCH INFO COL //-->


                                <!-- SECOND TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-left: solid 5px #5b0d25; "
                                >
                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="https://cdn.britannica.com/06/6206-004-14730C28/Flag-Croatia.jpg" alt=""
                                                >
                                            </div>

                                            <h5 style="margin: auto 4px">
                                                <b>CRT</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// SECOND TEAM COL //-->
                            </div>
                        </div>
                    </div>
                </div>


                <!--// MATCH COL //-->

 <!-- MATCH COL -->
 <div class="col-sm-12 mt-5">

<div class="card shadow rounded-pill" style="overflow: hidden;">
    <div class="card-body p-0">
        <div class="row row-card" style="height: 320px;">

            <!-- FIRST TEAM COL -->
            <div 
                class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                style="border-right: solid 5px #5b0d25; "
            >

                <div class="d-flex align-items-center justify-content-center" >
                    <!-- IMAGE AND TEAM NAME DIV -->
                    <div>
                        <div class="flag">
                            <img 
                                style="width: 40px; height: 40px"
                                class="rounded-circle"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/1182px-Flag_of_Belgium.svg.png" alt=""
                            >
                        </div>

                        <h5 style="margin: auto 4px">
                            <b>BLG</b>
                        </h5>
                    </div>
                    <!--// IMAGE AND TEAM NAME DIV// -->
                </div>
            </div>
            <!--// FIRST TEAM COL //-->

            <!-- MATCH INFO COL -->
            <div class="col-sm-6" style="text-align: center;">
                <div class="row">
                    <div class="col-sm-4" style="margin: auto 0px;">
                        <h3>
                            <input style="width: 25%; border: none;  outline: none;"  value="0" type="text" name="belgiga-1" id="">
                        </h3>
                    </div>
                    <div class="col-sm-4" style="margin: auto 0px; ">
                        <h6>Group (A)</h6>
                        <h1>X</h1>
                        <h6>18:30</h6>
                    </div>
                    <div class="col-sm-4" style="margin: auto 0px;">
                        <h3>
                            <input style="width: 25%; border: none;  outline: none;" type="text" name="canada-1" id="" value="0">
                        </h3>
                    </div>
                </div>

            </div>
            <!--// MATCH INFO COL //-->


            <!-- SECOND TEAM COL -->
            <div 
                class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                style="border-left: solid 5px #5b0d25; "
            >

                <div class="d-flex align-items-center justify-content-center" >
                    <!-- IMAGE AND TEAM NAME DIV -->
                    <div>
                        <div class="flag">
                            <img 
                                style="width: 40px; height: 40px"
                                class="rounded-circle"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/255px-Flag_of_Canada_%28Pantone%29.svg.png" alt=""
                            >
                        </div>

                        <h5 style="margin: auto 4px">
                            <b>CND</b>
                        </h5>
                    </div>
                    <!--// IMAGE AND TEAM NAME DIV// -->
                </div>
            </div>
            <!--// SECOND TEAM COL //-->
        </div>
    </div>
</div>
</div>
<!--// MATCH COL //-->
</div>
<!--// MATCHES ROW //-->
 <!--// MATCHES ROW //-->
                <!-- MATCH COL -->
                <div class="col-sm-12 mt-5">

                    <div class="card shadow rounded-pill" style="overflow: hidden;">
                        <div class="card-body p-0">
                            <div class="row" style="height: 350px;">

                                <!-- FIRST TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-right: solid 5px #5b0d25; "
                                >

                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/1182px-Flag_of_Belgium.svg.png" alt=""
                                                >
                                            </div>

                                            <h5 style="margin: auto 4px">
                                                <b>BLG</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// FIRST TEAM COL //-->

                                <!-- MATCH INFO COL -->
                                <div class="col-sm-6" style="text-align: center;">
                                    <div class="row">
                                        <div class="col-sm-4" style="margin: auto 0px;">
                                            <h3>
                                                <input style="width: 25%; border: none;  outline: none;"  value="0" type="text" name="belgiga-2" id="">
                                            </h3>
                                        </div>
                                        <div class="col-sm-4" style="margin: auto 0px; ">
                                            <h6>Group (A)</h6>
                                            <h1>X</h1>
                                            <h6>18:30</h6>
                                        </div>
                                        <div class="col-sm-4" style="margin: auto 0px;">
                                            <h3>
                                                <input style="width: 25%; border: none;  outline: none;" type="text" name="marruecos-2" id="" value="0">
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                                <!--// MATCH INFO COL //-->


                                <!-- SECOND TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-left: solid 5px #5b0d25; "
                                >

                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="https://image.winudf.com/v2/image/Y29tLmZsYWd3YWxscGFwZXIubW9yb2Njb19zY3JlZW5fMF8xNTMzNjQ0OTY4XzA1OA/screen-0.jpg?fakeurl=1&type=.webp" alt=""
                                                >
                                            </div>

                                            <h5 style="margin: auto 4px">
                                                <b>MCR</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// SECOND TEAM COL //-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--// MATCH COL //-->
<!--// MATCHES ROW //-->
       <!--// MATCHES ROW //-->
                <!-- MATCH COL -->
                <div class="col-sm-12 mt-5">

                    <div class="card shadow rounded-pill" style="overflow: hidden;">
                        <div class="card-body p-0">
                            <div class="row" style="height: 320px;">

                                <!-- FIRST TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-right: solid 5px #5b0d25; "
                                >

                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="https://cdn.britannica.com/06/6206-004-14730C28/Flag-Croatia.jpg" alt=""
                                                >
                                            </div>

                                            <h5 style="margin: auto 4px">
                                                <b>CRT</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// FIRST TEAM COL //-->

                                <!-- MATCH INFO COL -->
                                <div class="col-sm-6" style="text-align: center;">
                                    <div class="row">
                                        <div class="col-sm-4" style="margin: auto 0px;">
                                            <h3>
                                                <input style="width: 25%; border: none;  outline: none;"  value="0" type="text" name="croacia-2" id="">
                                            </h3>
                                        </div>
                                        <div class="col-sm-4" style="margin: auto 0px; ">
                                            <h6>Group (A)</h6>
                                            <h1>X</h1>
                                            <h6>18:30</h6>
                                        </div>
                                        <div class="col-sm-4" style="margin: auto 0px;">
                                            <h3>
                                                <input style="width: 25%; border: none;  outline: none;" type="text" name="canada-2" id="" value="0">
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                                <!--// MATCH INFO COL //-->


                                <!-- SECOND TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-left: solid 5px #5b0d25; "
                                >

                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/255px-Flag_of_Canada_%28Pantone%29.svg.png" alt=""
                                                >
                                            </div>

                                            <h5 style="margin: auto 4px">
                                                <b>CND</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// SECOND TEAM COL //-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--// MATCH COL //-->
  <!-- MATCH COL -->
  <div class="col-sm-12 mt-5">

<div class="card shadow rounded-pill" style="overflow: hidden;">
    <div class="card-body p-0">
        <div class="row" style="height: 320px;">

            <!-- FIRST TEAM COL -->
            <div 
                class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                style="border-right: solid 5px #5b0d25; "
            >

                <div class="d-flex align-items-center justify-content-center" >
                    <!-- IMAGE AND TEAM NAME DIV -->
                    <div>
                        <div class="flag">
                            <img 
                                style="width: 40px; height: 40px"
                                class="rounded-circle"
                                src="https://cdn.britannica.com/06/6206-004-14730C28/Flag-Croatia.jpg" alt=""
                            >
                        </div>

                        <h5 style="margin: auto 4px">
                            <b>CRT</b>
                        </h5>
                    </div>
                    <!--// IMAGE AND TEAM NAME DIV// -->
                </div>
            </div>
            <!--// FIRST TEAM COL //-->

            <!-- MATCH INFO COL -->
            <div class="col-sm-6" style="text-align: center;">
                <div class="row">
                    <div class="col-sm-4" style="margin: auto 0px;">
                        <h3>
                            <input style="width: 25%; border: none;  outline: none;"  value="0" type="text" name="croacia-3" id="">
                        </h3>
                    </div>
                    <div class="col-sm-4" style="margin: auto 0px; ">
                        <h6>Group (A)</h6>
                        <h1>X</h1>
                        <h6>18:30</h6>
                    </div>
                    <div class="col-sm-4" style="margin: auto 0px;">
                        <h3>
                            <input style="width: 25%; border: none;  outline: none;" type="text" name="belgiga-3" id="" value="0">
                        </h3>
                    </div>
                </div>

            </div>
            <!--// MATCH INFO COL //-->


            <!-- SECOND TEAM COL -->
            <div 
                class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                style="border-left: solid 5px #5b0d25; "
            >

                <div class="d-flex align-items-center justify-content-center" >
                    <!-- IMAGE AND TEAM NAME DIV -->
                    <div>
                        <div class="flag">
                            <img 
                                style="width: 40px; height: 40px"
                                class="rounded-circle"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/1182px-Flag_of_Belgium.svg.png" alt=""
                            >
                        </div>

                        <h5 style="margin: auto 4px">
                            <b>BLG</b>
                        </h5>
                    </div>
                    <!--// IMAGE AND TEAM NAME DIV// -->
                </div>
            </div>
            <!--// SECOND TEAM COL //-->
        </div>
    </div>
</div>
</div>
<!--// MATCH COL //-->
       <!--// MATCHES ROW //-->
                <!-- MATCH COL -->
                <div class="col-sm-12 mt-5">

                    <div class="card shadow rounded-pill" style="overflow: hidden;">
                        <div class="card-body p-0">
                            <div class="row" style="height: 320px;">

                                <!-- FIRST TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-right: solid 5px #5b0d25; "
                                >

                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/255px-Flag_of_Canada_%28Pantone%29.svg.png" alt=""
                                                >
                                            </div>

                                            <h5 style="margin: auto 4px">
                                                <b>CND</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// FIRST TEAM COL //-->

                                <!-- MATCH INFO COL -->
                                <div class="col-sm-6" style="text-align: center;">
                                    <div class="row">
                                        <div class="col-sm-4" style="margin: auto 0px;">
                                            <h3>
                                                <input style="width: 25%; border: none;  outline: none;"  value="0" type="text" name="canada-3" id="">
                                            </h3>
                                        </div>
                                        <div class="col-sm-4" style="margin: auto 0px; ">
                                            <h6>Group (A)</h6>
                                            <h1>X</h1>
                                            <h6>18:30</h6>
                                        </div>
                                        <div class="col-sm-4" style="margin: auto 0px;">
                                            <h3>
                                                <input style="width: 25%; border: none;  outline: none;" type="text" name="marruecos-3" id="" value="0">
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                                <!--// MATCH INFO COL //-->


                                <!-- SECOND TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-left: solid 5px #5b0d25; "
                                >

                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="https://image.winudf.com/v2/image/Y29tLmZsYWd3YWxscGFwZXIubW9yb2Njb19zY3JlZW5fMF8xNTMzNjQ0OTY4XzA1OA/screen-0.jpg?fakeurl=1&type=.webp" alt=""
                                                >
                                            </div>

                                            <h5 style="margin: auto 4px">
                                                <b>MRC</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// SECOND TEAM COL //-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--// MATCH COL //-->
            </div>
            <!--// MATCHES ROW //-->



            </div>
            <input type="submit" value="submit" id="submit" name="submit">
          </form>

<?php

if ( isset( $_POST['submit'])) {

    $marruecos_1 = $_POST['marruecos-1'];
    $croacia_1 = $_POST['croacia-1'];
    $belgiga_1 = $_POST['belgiga-1'];
    $canada_1 = $_POST['canada-1'];


    $marruecos_2 = $_POST['marruecos-2'];
    $belgiga_2 = $_POST['belgiga-2'];
    $croacia_2 = $_POST['croacia-2'];
    $canada_2 = $_POST['canada-2'];


    $croacia_3 = $_POST['croacia-3'];
    $belgiga_3 = $_POST['belgiga-3'];
    $canada_3 = $_POST['canada-3'];
    $marruecos_3 = $_POST['marruecos-3'];

    $point = array("MARRUECOS" => 0 , "CROATIE" => 0 ,  "CANADA" => 0, "BELQIQUE" => 0);
    $matches = array("MARRUECOS" => 0, "CROATIE" => 0 ,  "CANADA" => 0, "BELQIQUE" => 0);
    $GaGnant = array('MARRUECOS' => 0, 'CROATIE' => 0 , 'CANADA' => 0 , 'BELQIQUE' => 0);
    $EMP = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $PER = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $goal = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $goal_C = array("MARRUECOS" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);



    // point_EQUIPE_1
    if ($marruecos_1 != "" && $croacia_1 != "") {
        $matches['MARRUECOS'] += 1;
        $matches['CROATIE'] += 1;
        $goal["MARRUECOS"] += $marruecos_1;
        $goal["CROATIE"] += $croacia_1;
        $goal_C["CROATIE"] += $marruecos_1;
        $goal_C["MARRUECOS"] += $croacia_1;
    }
    if ($marruecos_1 > $croacia_1) {
        $point['MARRUECOS'] += 3 ;
        $GaGnant['MARRUECOS'] += 1 ;
        $PER['CROATIE'] += 1 ;
    }
    elseif ($marruecos_1 < $croacia_1) {
        $point['CROATIE'] += 3 ;
        $GaGnant['CROATIE'] += 1 ;
        $PER['MARRUECOS'] += 1 ;
    }else {
        $point['MARRUECOS'] += 1 ;
        $point['CROATIE'] += 1 ;
        $EMP['MARRUECOS'] += 1 ;
        $EMP['CROATIE'] += 1 ;
    }

    // point_EQUIPE_2
    if ($belgiga_1 != "" && $canada_1 != "") {
        $matches['BELQIQUE'] += 1;
        $matches['CANADA'] += 1;
        $goal["BELQIQUE"] += $belgiga_1;
        $goal["CANADA"] += $canada_1;
        $goal_C["CANADA"] += $belgiga_1;
        $goal_C["BELQIQUE"] += $canada_1;
    }
    if($belgiga_1 > $canada_1 ){
        $point["BELQIQUE"] += 3;
        $GaGnant['BELQIQUE'] += 1 ;
        $PER['CANADA'] += 1 ;
    }
    elseif ($belgiga_1  < $canada_1 ){
        $point["CANADA"] += 3;
        $GaGnant['CANADA'] += 1 ;
        $PER['BELQIQUE'] += 1 ;
    }
    else {
        $point["BELQIQUE"] += 1;
        $point["CANADA"] += 1;
        $EMP['BELQIQUE'] += 1 ;
        $EMP['CANADA'] += 1 ;
    }
    

    // point_EQUIPE_3
    if ($marruecos_2 != "" && $belgiga_2 != "") {
        $matches['MARRUECOS'] += 1;
        $matches['BELQIQUE'] += 1;
        $goal["BELQIQUE"] +=  $belgiga_2;
        $goal["MARRUECOS"] += $marruecos_2;
        $goal_C["MARRUECOS"] +=  $belgiga_2;
        $goal_C["BELQIQUE"] += $marruecos_2;
    }
    if($belgiga_2 > $marruecos_2 ){
        $point["BELQIQUE"] += 3;
        $GaGnant['BELQIQUE'] += 1 ;
        $PER['MARRUECOS'] += 1 ;
    }
    elseif ($belgiga_2  < $marruecos_2 ){
        $point["MARRUECOS"] += 3;
        $GaGnant['MARRUECOS'] += 1 ;
        $PER['BELQIQUE'] += 1 ;
    }
    else {
        $point["BELQIQUE"] += 1;
        $point["MARRUECOS"] += 1;
        $EMP['MARRUECOS'] += 1 ;
        $EMP['BELQIQUE'] += 1 ;
    }


    // point_EQUIPE_4
    if ($croacia_2 != "" &&  $canada_2 != "") {
        $matches['CROATIE'] += 1;
        $matches['CANADA'] += 1;
        $goal["CANADA"] +=  $canada_2 ;
        $goal["CROATIE"] += $croacia_2 ;
        $goal_C["CROATIE"] +=  $canada_2 ;
        $goal_C["CANADA"] += $croacia_2 ;
    }
    if($croacia_2 > $canada_2 ){
        $point["CROATIE"] += 3;
        $GaGnant['CROATIE'] += 1 ;
        $PER['CANADA'] += 1 ;

    }
    elseif ($croacia_2  < $canada_2 ){
        $point["CANADA"] += 3;
        $GaGnant['CANADA'] += 1 ;
        $PER['CROATIE'] += 1 ;

    }
    else {
        $point["CROATIE"] += 1;
        $point["CANADA"] += 1;
        $EMP['CANADA'] += 1 ;
        $EMP['CROATIE'] += 1 ;
    }


    // point_EQUIPE_5
    if ($croacia_3 != "" &&  $belgiga_3 != "") {
        $matches['CROATIE'] += 1;
        $matches['BELQIQUE'] += 1;
        $goal["BELQIQUE"] +=  $belgiga_3 ;
        $goal["CROATIE"] += $croacia_3 ;
        $goal_C["CROATIE"] +=  $belgiga_3 ;
        $goal_C["BELQIQUE"] += $croacia_3 ;
    }
    if($croacia_3 > $belgiga_3 ){
        $point["CROATIE"] += 3;
        $GaGnant['CROATIE'] += 1 ;
        $PER['BELQIQUE'] += 1 ;


    }
    elseif ($croacia_3  < $belgiga_3 ){
        $point["BELQIQUE"] += 3;
        $GaGnant['BELQIQUE'] += 1 ;
        $PER['CROATIE'] += 1 ;


    }
    else {
        $point["CROATIE"] += 1;
        $point["BELQIQUE"] += 1;
        $EMP['BELQIQUE'] += 1 ;
        $EMP['CROATIE'] += 1 ;
    }

    // point_EQUIPE_6
    if ($marruecos_3 != "" && $canada_3 != "") {
        $matches['MARRUECOS'] += 1;
        $matches['CANADA'] += 1;
        $goal["CANADA"] +=  $canada_3 ;
        $goal["MARRUECOS"] += $marruecos_3 ;
        $goal_C["MARRUECOS"] +=  $canada_3 ;
        $goal_C["CANADA"] += $marruecos_3 ;
    }
    if($canada_3 > $marruecos_3 ){
        $point["CANADA"] += 3;
        $GaGnant['CANADA'] += 1 ;
        $PER['MARRUECOS'] += 1 ;


    }
    elseif ($canada_3  < $marruecos_3 ){
        $point["MARRUECOS"] += 3;
        $GaGnant['MARRUECOS'] += 1 ;
        $PER['CANADA'] += 1 ;


    }
    else {
        $point["CANADA"] += 1;
        $point["MARRUECOS"] += 1;
        $EMP['MARRUECOS'] += 1 ;
        $EMP['CANADA'] += 1 ;
    }
  


    $MRpts =  $point["MARRUECOS"];
    $CRpts =  $point["CROATIE"];
    $BGpts =  $point["BELQIQUE"];
    $CNpts =  $point["CANADA"];


    $MRpar = $matches["MARRUECOS"];
    $CRpar = $matches["CROATIE"];
    $BGpar = $matches['BELQIQUE'];
    $CNpar =  $matches['CANADA'] ;

    $MRGan = $GaGnant["MARRUECOS"];
    $CRGan = $GaGnant["CROATIE"];
    $BGGan = $GaGnant['BELQIQUE'];
    $CNGan =  $GaGnant['CANADA'] ;

    $MR_EMP = $EMP["MARRUECOS"];
    $CR_EMP = $EMP["CROATIE"];
    $BG_EMP = $EMP['BELQIQUE'];
    $CN_EMP =  $EMP['CANADA'] ;

    $MR_PER = $PER["MARRUECOS"];
    $CR_PER = $PER["CROATIE"];
    $BG_PER = $PER['BELQIQUE'];
    $CN_PER =  $PER['CANADA'] ;

    $MR_GF = $goal["MARRUECOS"];
    $CR_GF = $goal["CROATIE"];
    $BG_GF = $goal['BELQIQUE'];
    $CN_GF =  $goal['CANADA'] ;

    $MR_GC = $goal_C["MARRUECOS"];
    $CR_GC = $goal_C["CROATIE"];
    $BG_GC = $goal_C['BELQIQUE'];
    $CN_GC =  $goal_C['CANADA'] ;

    
    $_DIFFERENCE_EQUIPE_1 = $MR_GF - $MR_GC ;
    $_DIFFERENCE_EQUIPE_2 = $CR_GF - $CR_GC ;
    $_DIFFERENCE_EQUIPE_3 = $BG_GF  -  $BG_GC ;
    $_DIFFERENCE_EQUIPE_4 = $CN_GF  -  $CN_GC ;

// Multidimensional array to be sorted
$Equipe = [
    [ "Equipe" => "MARRUECOS", "point" => $MRpts , "matches" =>  $MRpar , "GaGnant" =>  $MRGan , "EMP" =>  $MR_EMP , "PER" =>  $MR_PER , "G.F." =>  $MR_GF , "G.C." =>  $MR_GC , "DIFFERENCE" =>  $_DIFFERENCE_EQUIPE_1],
    [ "Equipe" => "CROATIE", "point" => $CRpts , "matches" => $CRpar , "GaGnant" =>  $CRGan , "EMP" =>  $CR_EMP , "PER" =>  $CR_PER , "G.F." =>  $CR_GF , "G.C." =>  $CR_GC , "DIFFERENCE" =>  $_DIFFERENCE_EQUIPE_2],
    [ "Equipe" => "BELQIQUE", "point" => $BGpts , "matches" => $BGpar, "GaGnant" =>  $BGGan , "EMP" =>  $BG_EMP , "PER" =>  $BG_PER , "G.F." =>  $BG_GF , "G.C." =>  $BG_GC , "DIFFERENCE" =>  $_DIFFERENCE_EQUIPE_3],
    [ "Equipe" => "CANADA", "point" => $CNpts , "matches" => $CNpar, "GaGnant" =>  $CNGan , "EMP" =>  $CN_EMP , "PER" =>  $CN_PER , "G.F." =>  $CN_GF , "G.C." =>  $CN_GC , "DIFFERENCE" =>  $_DIFFERENCE_EQUIPE_4],
];

// Sort the array by the "age" column in ascending order
usort($Equipe, function($a, $b) {
    return $a['point'] < $b['point'];
});
?>
<div class="row" style="direction: rtl;">
                <h1>
                    <b>
                    المباريات
                    </b>
                </h1>
                <hr>
            </div>
<div class="table-responsive-xl">
<table class="table  table-striped col-sm-12 mb-5 "  >
<?php

echo "<tr><th>Equipe</th><th>PT</th><th>PAR</th><th>GAN</th><th>EMP</th><th>PER</th><th>G.F.</th><th>G.C.</th><th>+/-</th></tr>";
foreach ($Equipe as $row) {
    echo "<tr>";
    
    echo "<td>" . $row['Equipe'] . "</td>";
    echo "<td>" . $row['point'] . "</td>";
    echo "<td>" . $row['matches'] . "</td>";
    echo "<td>" . $row['GaGnant'] . "</td>";
    echo "<td>" . $row['EMP'] . "</td>";
    echo "<td>" . $row['PER'] . "</td>";
    echo "<td>" . $row['G.F.'] . "</td>";
    echo "<td>" . $row['G.C.'] . "</td>";
    echo "<td>" . $row['DIFFERENCE'] . "</td>";
    echo "</tr>";
}
}
?>
</table>
</div>
</body>
</html>