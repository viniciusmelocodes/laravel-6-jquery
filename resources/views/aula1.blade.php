<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 6 - jQuery 3.4.1 - Aula 1</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <style>
        #panelSlideUp,
        #panelSlideDown,
        #flipSlideUp,
        #flipSlideDown {
            padding: 5px;
            text-align: center;
            background-color: #e5eecc;
            border: solid 1px #c3c3c3;
        }

        #panelSlideUp,
        #panelSlideDown {
            padding: 50px;
            display: none;
        }

        #panel,
        #flip {
            padding: 5px;
            font-size: 18px;
            text-align: center;
            background-color: #555;
            color: white;
            border: solid 1px #666;
            border-radius: 3px;
        }

        #panel {
            padding: 50px;
            display: none;
        }
    </style>

    <script src="/assets/js/jquery.min.js"></script>

    <script src="/assets/js/bootstrap.min.js"></script>

    <script>
        $(function(){
            $("#panelSlideUp").slideDown();

            $("#buttonHideShowToggle").click(function(){
                $("#paragrafo1").hide();               
                $("#paragrafo2").show();               
                $("#paragrafo3").toggle();               
                $("#paragrafo4").hide(1000);               
                $("#paragrafo5").show(1000);               
                $("#paragrafo6").toggle(1000);               
            });

            
            $("#buttonFadeIn").click(function(){
                $("#div1").fadeIn();
                $("#div2").fadeIn("slow");
                $("#div3").fadeIn(3000);    
            });
            
            $("#buttonFadeOut").click(function(){
                $("#div4").fadeOut();
                $("#div5").fadeOut("slow");
                $("#div6").fadeOut(3000);         
            });

            $("#buttonFadeToggle").click(function(){
                $("#div7").fadeToggle();
                $("#div8").fadeToggle("slow");
                $("#div9").fadeToggle(3000);
            });
            
            $("#buttonFadeTo").click(function(){
                $("#div10").fadeTo("slow", 0.15);
                $("#div11").fadeTo("slow", 0.4);
                $("#div12").fadeTo("slow", 0.7);
                
            });

            $("#buttonAnimate").click(function(){
                $("#div13").animate({
                    left: '650px',
                    opacity: '0.5',
                    height: '150px',
                    width: '150px'
                })
            });

            $("#flipSlideDown").click(function(){
                $("#panelSlideDown").slideDown();
            });
            
            $("#flipSlideUp").click(function(){
                $("#panelSlideUp").slideUp();
            });
            
            $("#flip").click(function(){
                $("#panel").slideDown(5000);
            });
            
            $("#sliding").click(function(){
                $("#panel").stop();
            });

            $("#button5").click(function(){
                $("#paragrafo4").hide("slow", function(){
                    alert("The paragraph is now hidden");
                });
            })

            $("#button6").click(function(){                
                $("#paragrafo5").hide(1000);
                alert("The paragraph is now hidden");
            })

            $("#button7").click(function(){
                $("#paragrafo6").css("color", "red").slideUp(2000).slideDown(2000);
            });

            /* animate() */
            $("#start").click(function(){
                $("#divAnimate").animate({left: '100px'}, 5000);
                $("#divAnimate").animate({fontSize: '3em'}, 5000);
            });
            
            $("#stop").click(function(){
                $("#divAnimate").stop();
            });
            
            $("#stop2").click(function(){
                $("#divAnimate").stop(true);
            });
            
            $("#stop3").click(function(){
                $("#divAnimate").stop(true, true);
            });
            /* fim animate() */
           
            $('#recarregarPagina').click(function () {
                location.reload(true);
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <ul class="nav nav-tabs" id="tabsJquery" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="aba1-tab" data-toggle="tab" href="#aba1" role="tab" aria-controls="aba1"
                    aria-selected="true">jQuery Effects 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="aba2-tab" data-toggle="tab" href="#aba2" role="tab" aria-controls="aba2"
                    aria-selected="false">Aba 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="aba3-tab" data-toggle="tab" href="#aba3" role="tab" aria-controls="aba3"
                    aria-selected="false">Aba 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="aba4-tab" data-toggle="tab" href="#aba4" role="tab" aria-controls="aba4"
                    aria-selected="false">Aba 4</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="aba1" role="tabpanel" aria-labelledby="aba1-tab">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            Hide, Show, Toggle, Fade, Animate and Slide
                        </div>
                        <div class="card-body">
                            <p id="paragrafo1">1º parágrafo</p>
                            <p id="paragrafo2">2º parágrafo</p>
                            <p id="paragrafo3">3º parágrafo</p>
                            <p id="paragrafo4">4º parágrafo</p>
                            <p id="paragrafo5">5º parágrafo</p>
                            <p id="paragrafo6">6º parágrafo</p>
                            <hr>
                            <button type="button" class="btn btn-primary" id="buttonHideShowToggle">hide(), show(),
                                toggle()</button>
                            <hr>
                            <div class="row">
                                <div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div>
                                <div id="div2" style="width:80px;height:80px;display:none;background-color:green;">
                                </div>
                                <div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-primary" id="buttonFadeIn">fadeIn()</button>
                            <hr>
                            <div class="row">
                                <div id="div4" style="width:80px;height:80px;background-color:red;"></div>
                                <div id="div5" style="width:80px;height:80px;background-color:green;"></div>
                                <div id="div6" style="width:80px;height:80px;background-color:blue;"></div>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-primary" id="buttonFadeOut">fadeOut()</button>
                            <hr>
                            <div class="row">
                                <div id="div7" style="width:80px;height:80px;display:none;background-color:red;"></div>
                                <div id="div8" style="width:80px;height:80px;display:none;background-color:green;">
                                </div>
                                <div id="div9" style="width:80px;height:80px;display:none;background-color:blue;"></div>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-primary" id="buttonFadeToggle">fadeToggle()</button>
                            <hr>
                            <div class="row">
                                <div id="div10" style="width:80px;height:80px;background-color:red;"></div>
                                <div id="div11" style="width:80px;height:80px;background-color:green;"></div>
                                <div id="div12" style="width:80px;height:80px;background-color:blue;"></div>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-primary" id="buttonFadeTo">fadeTo()</button>
                            <hr>
                            <div id="div13" style="background:#98bf21;height:20px;width:20px;left:650px;"></div>
                            <hr>
                            <button type="button" class="btn btn-primary" id="buttonAnimate">animate()</button>
                            <hr>
                            {{-- animate() --}}
                            <div class="container">
                                <h4>animate()</h4>
                                <div style="background:#98bf21;height:100px;width:200px;position:absolute;" id="divAnimate">HELLO</div>
                                <br><br><br><br><br>
                                <button type="button" class="btn btn-primary" id="start">Start</button>
                                <button type="button" class="btn btn-primary" id="stop">Stop</button>
                                <button type="button" class="btn btn-primary" id="stop2">Stop all</button>
                                <button type="button" class="btn btn-primary" id="stop3">Stop but finish</button>
                            </div>
                            {{--  --}}
                            <hr>
                            <div class="container">
                                <button type="button" class="btn btn-primary" id="sliding">sliding</button>
                                <div id="flip">Click to slide down panel</div>
                                <div id="panel">Hello world!</div>
                            </div>
                            <hr>
                            <div id="flipSlideDown">Click to slide down panel</div>
                            <div id="panelSlideDown">Hello world!</div>
                            <hr>
                            <div id="flipSlideUp">Click to slide up panel</div>
                            <div id="panelSlideUp">Hello world!</div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="aba2" role="tabpanel" aria-labelledby="aba2-tab">
                <h3>Example with Callback</h3>
                <p id="paragrafo4">This is a paragraph with little content.</p>
                <hr>
                <button type="button" class="btn btn-primary" id="button4">Clique aqui</button>
                <hr>
                <h3>Example without Callback</h3>
                <p id="paragrafo5">This is a paragraph with little content.</p>
                <hr>
                <button type="button" class="btn btn-primary" id="button5">Clique aqui</button>
                <hr>
                <h3>jQuery - Chaining</h3>
                <p id="paragrafo6">jQuery is fun!!</p>
                <hr>
                <button type="button" class="btn btn-primary" id="button6">Clique aqui</button>
            </div>
            <div class="tab-pane fade" id="aba3" role="tabpanel" aria-labelledby="aba3-tab">
                <p>3</p>
            </div>
            <div class="tab-pane fade" id="aba4" role="tabpanel" aria-labelledby="aba4-tab">
                <p>4</p>
            </div>
            <hr>
            <button type="button" class="btn btn-info btn-lg btn-block" id="recarregarPagina">Recarregar página</button>
        </div>
    </div>
</body>

</html>