<?php $title = 'Mon espace'; ?>
<?php include 'header.php';?>
<header class="profil-header">
<div class="bg-rotate">
<div class="waveWrapper waveAnimation">
  <div class="waveWrapperInner bgTop">
    <div class="wave waveTop" style="background-image: url('img/wave-top.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="background-image: url('img/wave-mid.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('img/wave-bot.png')"></div>
  </div>
</div>
        </div>
        <div class="container">
            <div class="logo">
                <img src="img/logo.png"/>
            </div>
            <div id="compte" class="btn-login">Mon compte</div>
                <div class="bloc-home">
                    <div class="accroche width50 cagnotte">
                        <div class="profil-img" style="background-image:url(img/profil.jpg);"></div>
                        <h1>Bonjour<br><span class="color-white">Jonathan !</span></h1>
                    </div>
                    <div class="width50 suscribe-right">
                    <div id="show-dialogue-cagnotte" class="bloc-cagnotte bloc-white">
                    <div class="cagnotte-title">
                    <h3 class="text-orange">Ma cagnotte !</h3>
                    </div>
                        <p class="tarif-final cagnotte-total"><span data-value="19.50" id="compteur">0</span><sup>€</sup></p>
                        <p class="description-spliiit commission">Gains après commissions <a class="green" href="cgu.php#commissions">en savoir plus</a></p>
                        <div id="gains" class="btn-orange">Récupérer mes gains</div>
                    </div>
                </div>
            </div>
        </div>
</header>
<div class="infos-myspliiit">
<h2>Vous partagez actuellement <strong class="green">1</strong> Spliiit avec <strong class="green">3</strong> personnes.</h2>
</div>
<section class="myspliiit">
        <div class="bg-rotate grey-background"></div>
        <div class="container">
            <div class="bloc-spliiit bloc-white">
            <div class="title-spliiit">
                <input placeholder="Titre de votre Spliiit"/>
                <img src="img/modify.png"/>
            </div>
            <p class="title-spliiiter">Mes Spliiiter's</p>
            <div class="center-spliiiter">
                <ul class="list-spliiiter">
                    <li><div class="spliiiter-img" style="background-image:url(img/profil1.jpg);"></div><p>Coralie</p></li>
                    <li><div class="spliiiter-img" style="background-image:url(img/profil2.jpg);"></div><p>Damien</p></li>
                    <li><div class="spliiiter-img" style="background-image:url(img/profil3.jpg);"></div><p>Gabriel</p></li>
                    <li id="show-dialogue-share"><div class="spliiiter-img add-spliiiter" id="share"></div><p class="green text-add">Ajouter</p></li>
                </ul>
            </div>
            <div class="line-options">
                <a id="paiement" class="bloc-white btn-option"><img src="img/portefeuille.png"/><p>Paiements</p></a>
                <a id="infos" class="bloc-white btn-option"><img src="img/info.png"/><p>Informations</p></a>
                <a id="perso" class="bloc-white btn-option"><img src="img/perso.png"/><p>Personnaliser</p></a>
                <a href="spliiit.php" target="_blank" class="bloc-white btn-option"><img src="img/share.png"/><p>Mon Spliiit</p></a>
                <a id="delete" class="bloc-white btn-option"><img src="img/delete.png"/><p>Supprimer</p></a>
            </div>
        </div>
    </div>
</section>
<section class="create-myspliiit grey-background">
    <div class="container">
        <a href="#" class="btn-orange">Ajouter un Spliiit</a>
    </div>
</section>
<?php include 'popup-cagnotte.php';?>
<?php include 'popup-share.php';?>
<?php include 'popup-paiement.php';?>
<?php include 'popup-infos.php';?>
<?php include 'popup-perso.php';?>
<?php include 'popup-delete.php';?>
<?php include 'popup-compte.php';?>
<?php include 'footer.php';?>