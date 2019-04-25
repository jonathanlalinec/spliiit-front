<?php $title = 'Notre Box ADSL ! Par Coralie'; ?>
<?php include 'header.php';?>
    <header class="profil-header">
        
        <div class="reduction"><p class="theme-rose-txt">-70%</p></div>
        <div class="bg-rotate header-theme">
        <div class="waveWrapper waveAnimation">
          <div class="waveWrapperInner bg-rose bgTop">
            <div class="wave waveTop" style="background-image: url('img/wave-top.png')"></div>
          </div>
          <div class="waveWrapperInner bg-rose bgMiddle">
            <div class="wave waveMiddle" style="background-image: url('img/wave-mid.png')"></div>
          </div>
          <div class="waveWrapperInner bg-rose bgBottom">
            <div class="wave waveBottom" style="background-image: url('img/wave-bot.png')"></div>
          </div>
        </div>
        </div>
        <div class="bg-rotate height-header">
            <div class="theme-img musique theme-rose">
            </div>
        </div>
        <div class="container">
            <div class="logo">
                <img src="img/logo-white.png"/>
            </div>
            <div class="btn-login btn-theme-rose">Se connecter</div>
                <div class="bloc-home">
                    <div class="accroche width50 public">
                        <div class="profil-img big-profil" style="background-image:url(img/profil1.jpg);"></div>
                        <h1>Notre Box ADSL !</h1>
                        <h2>Coralie te propose de partager le prix de son abonnement, il ne reste que 2 places ne perd pas de temps ! :-)</h2>
                    </div>
                    <div class="width50 suscribe-right">
                    <div class="bloc-white bloc-cagnotte theme-rose-txt">
                        <div class="suscribe-title">
                    <h3>Rejoindre Notre Box adsl !</h3>
                    </div>
                        <p class="description-spliiit">Un prélèvement de <strong>3€</strong> sera débité sur votre carte bleu chaque mois sans aucun engagement et reversé automatiquement à <strong>Coralie</strong>.</p>
                        <p class="tarif-final">3€<sup>/mois</sup></p>
                        <p class="tarif-reel">Au lieu de 10€<sup>/mois</sup></p>
                        <div id="paiementcb" class="btn-orange theme-rose btn">S'abonner</div>
                        <p class="description-spliiit place-dispo">Il ne reste que <strong>2</strong> places !</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
<section class="infos-spliiiter container">
    <h3 class="theme-rose-txt">Informations de Netflix de Coco !</h3>
    <div class="quote">
        <p>Bonjour les copines ! Bon je partage mon compte Netflix, et puis ça permettra de se payer un coups avec ma cagnotte ! :-)</p>
    </div>
</section>
  <section class="fonctionnement-autopromo">
      <div class="bg-rotate grey-background">
</div>
      <div class="container">
        <h1>Comment fonctionne Spliiit ?</h1>
        <div class="line-fonctionnement autopromo">
            <ul>
                <li><img src="img/creer.png"/><p>Créez votre Spliiit en 3 clics gratuitement.</p></li>
                <li><img src="img/partage.png"/><p></p>Partagez l'adresse de votre Spliiit à vos amis.</li>
                <li><img src="img/inscription.png"/><p>Vos amis rejoignent votre Spliiit.</p></li>
                <li><img src="img/creditcard.png"/><p>Chaque mois votre ami est débité par CB.</p></li>
                <li><img src="img/recuperer.png"/><p>Demandez à tout moment votre cagnotte.</p></li>
            </ul>
        </div>
        <a href="index.php" class="btn-orange theme-rose btn create-spliiit">Créer mon Spliiit !</a>
          </div>
    </section>
<section class="paiements">
    <div class="mode-paiements">
        <img src="img/visa.png" alt="Logo Visa png"/>
        <img src="img/mastercard.png" alt="Logo Mastercard png"/>
        <img src="img/3dsecure.png" alt="Logo 3Dsecure png"/>
    </div>
</section>
<?php include 'footer.php';?>
<?php include 'popup-paiementcb.php';?>