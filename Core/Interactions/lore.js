"use strict";
let assassinName = "Ezio Auditore";
let weapon = "Lame secrète";
let weapon2 = "épée";
let weapon3 = "Arbalète";
let faction = "Assassins";
let city = "Rome";
let year = 1499;
let isHidden = "Botte de foin";
let skills = ["Parkour", "Furtivité", "Combat"];
let VisionAigle = "Analyse de l'environnement...";
let allies = ["Leonardo da Vinci"];
let enemies = ["Rodrigo Borgia", "Cesare Borgia", "Templiers"];

console.log("Nom de l'assassin:", assassinName);
console.log("Arme:", weapon);
console.log("Faction:", faction);
console.log("Ville:", city);
console.log("Année:", year);
console.log("Cachette:", isHidden);
console.log("Skills:", skills.join);
console.log("Vision d'aigle:", VisionAigle);
console.log("Alliés:", allies.join);
console.log("Ennemis:", enemies.join);
  
const Assassin = {
    name: "Ezio Auditore",
    weapon: "Lame secrète",
    faction: 'Assassins',
    city: 'Florence',
    year: 1476,
    isHidden: "Dans la foule",
    skills: ['Parkour', 'Furtivité', 'Combat'],
    VisionAigle: "Analyse de l'environnement...",
    allies: "Leonardo da Vinci",
    enemies: ['Rodrigo Borgia', 'Cesare Borgia', 'Templiers'],
  }

const Templier = {
    name: 'Cesare Borgia',
    weapon: 'Epée',
    faction: 'Templiers',
    city: 'Roma',
    year: 1476,
    isHidden: false,
    skills: ['Stealth', 'Combat'],
    VisionAigle: false,
    allies: ['Rodrigo Borgia', 'Templars'],
    enemies: ['Leonardo da Vinci', 'Assassins'],
  }

document.write("Le nom de l'assassin est " + Assassin.name + "<br>");
document.write(Assassin.name + " attaque " + Templier.name + "<br>");
document.write(Assassin.name + " a utilisé " + Assassin.weapon + " et " + Assassin.VisionAigle + " pour détecter " + Templier.name + "<br>");