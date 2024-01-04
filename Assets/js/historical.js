const items = document.querySelectorAll('.date');

const colors = [
  "#E57373", "#81C784", "#7986CB", "#FFD54F", "#64B5F6",
  "#F06292", "#81C784", "#64B5F6", "#BA68C8", "#FF8A65",
  "#81C784", "#7986CB", "#FFD54F", "#64B5F6", "#F06292",
  "#81C784", "#64B5F6", "#BA68C8", "#FF8A65", "#E57373"
];


items.forEach((item, index) => {
    item.style.backgroundColor = colors[index];
    // on touche le psuedo élément after
    item.style.setProperty('--accent-color', colors[index]); 
});
