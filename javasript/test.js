// Containers from HTML file 
const container1 = document.getElementById('container1');
const container2 = document.getElementById('container2');

const anderEten = ["Kaas", "Soep"];
const anderEten2 = ["Risotto", "Morieltjes en kipfilet",
"gewokte kipfilet", "Jachtschotel", "Papillot", "Snelle vol-au-vent",
"Pita met oosterse kip", "Kip met erwtjes", "Kipschnitzel"
];

for(eten  in anderEten){
  container1.insertAdjacentText('beforeend', anderEten[eten]+'\n');
}

for(eten  in anderEten2){
  container2.insertAdjacentText('beforeend', anderEten2[eten]+'\n');  
}