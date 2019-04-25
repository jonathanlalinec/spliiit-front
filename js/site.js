$(document).ready(function() {

    /*
     * Popup cagnotte
     */
    $("#dialog-cagnotte").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        draggable: false,
        dialogClass: 'dialog-cagnotte',
        show: {
            effect: "fade",
            duration: 200
        },
        hide: {
            effect: "fade",
            duration: 0
        },
        clickOutside: true,
        clickOutsideTrigger: "#show-dialogue-cagnotte #gains",
        open: function() {
            $('.ui-widget-overlay').addClass('custom-overlay');
        }
    });

    $('#show-dialogue-cagnotte #gains').on('click', function () {
        $('#dialog-cagnotte').dialog('open');
    });

});

$(document).ready(function() {

    /*
     * Popup Share
     */
    $("#dialog-share").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        draggable: false,
        dialogClass: 'dialog-share',
        show: {
            effect: "fade",
            duration: 200
        },
        hide: {
            effect: "fade",
            duration: 0
        },
        clickOutside: true,
        clickOutsideTrigger: "#show-dialogue-share #share",
        open: function() {
            $('.ui-widget-overlay').addClass('custom-overlay');
        }
    });

    $('#show-dialogue-share #share').on('click', function () {
        $('#dialog-share').dialog('open');
    });

});

$(document).ready(function() {

    /*
     * Popup paiements
     */
    $("#dialog-paiement").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        draggable: false,
        dialogClass: 'dialog-paiement',
        show: {
            effect: "fade",
            duration: 200
        },
        hide: {
            effect: "fade",
            duration: 0
        },
        clickOutside: true,
        clickOutsideTrigger: "#paiement",
        open: function() {
            $('.ui-widget-overlay').addClass('custom-overlay');
        }
    });

    $('#paiement').on('click', function () {
        $('#dialog-paiement').dialog('open');
    });

});

$(document).ready(function() {

    /*
     * Popup infos
     */
    $("#dialog-infos").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        draggable: false,
        dialogClass: 'dialog-infos',
        show: {
            effect: "fade",
            duration: 200
        },
        hide: {
            effect: "fade",
            duration: 0
        },
        clickOutside: true,
        clickOutsideTrigger: "#infos",
        open: function() {
            $('.ui-widget-overlay').addClass('custom-overlay');
        }
    });

    $('#infos').on('click', function () {
        $('#dialog-infos').dialog('open');
    });

});

$(document).ready(function() {

    /*
     * Popup perso
     */
    $("#dialog-perso").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        draggable: false,
        dialogClass: 'dialog-perso',
        show: {
            effect: "fade",
            duration: 200
        },
        hide: {
            effect: "fade",
            duration: 0
        },
        clickOutside: true,
        clickOutsideTrigger: "#perso",
        open: function() {
            $('.ui-widget-overlay').addClass('custom-overlay');
        }
    });

    $('#perso').on('click', function () {
        $('#dialog-perso').dialog('open');
    });

});

$(document).ready(function() {

    /*
     * Popup delete
     */
    $("#dialog-delete").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        draggable: false,
        dialogClass: 'dialog-delete',
        show: {
            effect: "fade",
            duration: 200
        },
        hide: {
            effect: "fade",
            duration: 0
        },
        clickOutside: true,
        clickOutsideTrigger: "#delete",
        open: function() {
            $('.ui-widget-overlay').addClass('custom-overlay');
        }
    });

    $('#delete').on('click', function () {
        $('#dialog-delete').dialog('open');
    });

});

$(document).ready(function() {

    /*
     * Popup compte
     */
    $("#dialog-compte").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        draggable: false,
        dialogClass: 'dialog-compte',
        show: {
            effect: "fade",
            duration: 200
        },
        hide: {
            effect: "fade",
            duration: 0
        },
        clickOutside: true,
        clickOutsideTrigger: "#compte",
        open: function() {
            $('.ui-widget-overlay').addClass('custom-overlay');
        }
    });

    $('#compte').on('click', function () {
        $('#dialog-compte').dialog('open');
    });

});

$(document).ready(function() {

    /*
     * Popup paiementCB
     */
    $("#dialog-paiementcb").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        draggable: false,
        dialogClass: 'paiementcb',
        show: {
            effect: "fade",
            duration: 200
        },
        hide: {
            effect: "fade",
            duration: 0
        },
        clickOutside: true,
        clickOutsideTrigger: "#paiementcb",
        open: function() {
            $('.ui-widget-overlay').addClass('custom-overlay');
        }
    });

    $('#paiementcb').on('click', function () {
        $('#dialog-paiementcb').dialog('open');
    });

});
$(document).ready(function() {

    /*
     * Popup paiementCB
     */
    $("#dialog-social").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        draggable: false,
        dialogClass: 'social',
        show: {
            effect: "fade",
            duration: 200
        },
        hide: {
            effect: "fade",
            duration: 0
        },
        clickOutside: true,
        clickOutsideTrigger: "#social",
        open: function() {
            $('.ui-widget-overlay').addClass('custom-overlay');
        }
    });

    $('#social').on('click', function () {
        $('#dialog-social').dialog('open');
    });

});


$(function() {
    /**
    * Smooth scrolling to page anchor on click
    **/
    $("a[href*='#']:not([href='#'])").click(function() {
        if (
            location.hostname == this.hostname
            && this.pathname.replace(/^\//,"") == location.pathname.replace(/^\//,"")
        ) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) +"]");
            if ( anchor.length ) {
                $("html, body").animate( { scrollTop: anchor.offset().top }, 1000);
            }
        }
    });
});


$(window).scroll(function(){
    if ($(window).scrollTop() >= 650) {
        $('nav').addClass('fixed-header');
    }
    else {
        $('nav').removeClass('fixed-header');
    }
});


$(document).ready(function(){
    $(window).on('scroll', function () {
    
    var elmt   = $('.from-left, .from-right');
    var topImg = $('.from-left, .from-right').offset().top;
    var scroll = $(window).scrollTop();
    
        $(elmt).each(function() {
            
            var topImg = $(this).offset().top - 600;
            
                if ( topImg < scroll ) {
                
                $(this).css("transform", "translate(0,0)");
                $(this).css("opacity", "1");
                
                };
        });
    });
});

var n = 19.50; // Nombre final du compteur
var cpt = 0; // Initialisation du compteur
var duree = 3; // Durée en seconde pendant laquel le compteur ira de 0 à 15
var delta = Math.ceil((duree * 500) / n); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
var node =  document.getElementById("compteur"); // On récupère notre noeud où sera rafraîchi la valeur du compteur
 
function countdown() {
  node.innerHTML = ++cpt;
  if( cpt < n ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     setTimeout(countdown, delta);
  }
}
 
setTimeout(countdown, delta);
