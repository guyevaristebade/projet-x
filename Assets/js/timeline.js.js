// Récupère toutes les divs avec les classes r1 à r20
const rounds = Array.from({ length: 20 }, (_, index) => document.querySelector(`.r${index + 1}`));

// Exemple de positionnement sur la timeline (à adapter selon vos besoins)
rounds.forEach((round, index) => {
    // Positionne chaque div à une position spécifique sur la timeline (exemple : espacement de 50 pixels entre chaque div)
    const position = index * 50;
    round.style.left = `${position}px`;
});

// Affiche le tableau rounds dans la console
console.log(rounds);
