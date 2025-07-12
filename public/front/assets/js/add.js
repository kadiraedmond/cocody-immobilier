const choiceArray = document.querySelectorAll(".choice")

choiceArray.forEach((card) => {
    card.addEventListener("click", () => {
        choiceArray.forEach((element) => {
            element.classList.remove("expand", "unset")
            element.classList.add('small')
        })
        card.classList.remove("small")
        card.classList.add('expand')
    });
});

const horizontalAccordions = $(".accordion.width");

horizontalAccordions.each((index, element) => {
	const accordion = $(element);
  const collapse = accordion.find(".collapse");
  const bodies = collapse.find("> *");
  accordion.height(accordion.height());  
  bodies.width(bodies.eq(0).width());
  collapse.not(".show").each((index, element) => {
  	$(element).parent().find("[data-toggle='collapse']").addClass("collapsed");
  });
});

 // Fonction pour rendre un bouton invisible et rétablir les autres boutons
function cacherBouton(bouton) {
    bouton.style.display = "none";
    
    var autresBoutons = document.querySelectorAll(".card-header");
    for (var i = 0; i < autresBoutons.length; i++) {
      if (autresBoutons[i] !== bouton) {
        autresBoutons[i].style.display = "inline-block";
      }
    }
  }
  
  // Sélection du premier bouton
  var bouton1 = document.getElementById("icon_card");
  bouton1.addEventListener("click", function() {
    cacherBouton(icon_card);
  });
  
  // Sélection du deuxième bouton
  var bouton2 = document.getElementById("icon_card2");
  bouton2.addEventListener("click", function() {
    cacherBouton(icon_card2);
  });

  // Sélection du deuxième bouton
  var bouton2 = document.getElementById("icon_card3");
  bouton2.addEventListener("click", function() {
    cacherBouton(icon_card3);
  });


   // Sélection du deuxième bouton
   var bouton2 = document.getElementById("card-header");
   bouton2.addEventListener("click", function() {
     cacherBouton(icon_card);
   });

   // Sélection du deuxième bouton
   var bouton2 = document.getElementById("card-header1");
   bouton2.addEventListener("click", function() {
     cacherBouton(icon_card3);
   });

   // Sélection du deuxième bouton
   var bouton2 = document.getElementById("card-header2");
   bouton2.addEventListener("click", function() {
     cacherBouton(icon_card2);
   });




  // Fonction pour cacher les autres boutons
function cacherAutresBoutons(boutonActif) {
    var tousLesBoutons = document.querySelectorAll(".card-header");
    tousLesBoutons.forEach(function(bouton) {
      if (bouton === boutonActif) {
        bouton.style.display = "none";
      } else {
        bouton.style.display = "block";
      }
    });
  }
  
   // Sélection de l'icône à afficher
var iconeAffiche = document.getElementById("icon_card");

// Sélection de l'icône spécifique qui déclenche l'affichage
var iconeSpecifique = document.getElementById("h2_card3");
iconeSpecifique.addEventListener("click", function() {
  iconeAffiche.style.display = "block";
});

  // Sélection de l'icône à afficher
  var iconeAffiche = document.getElementById("icon_card");

  // Sélection de l'icône spécifique qui déclenche l'affichage
  var iconeSpecifique = document.getElementById("card-header1");
  iconeSpecifique.addEventListener("click", function() {
    iconeAffiche.style.display = "block";
  });

   // Sélection de l'icône à afficher
   var iconeAffiche = document.getElementById("icon_card");

   // Sélection de l'icône spécifique qui déclenche l'affichage
   var iconeSpecifique = document.getElementById("h2_card2");
   iconeSpecifique.addEventListener("click", function() {
     iconeAffiche.style.display = "block";
   });

   // Sélection de l'icône à afficher
   var iconeAffiche = document.getElementById("icon_card");

   // Sélection de l'icône spécifique qui déclenche l'affichage
   var iconeSpecifique = document.getElementById("h2_card2");
   iconeSpecifique.addEventListener("click", function() {
     iconeAffiche.style.display = "block";
   });

   

   

   
  
  