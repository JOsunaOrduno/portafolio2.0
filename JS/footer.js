var conta = document.getElementById('concta2'); 
var cntar = document.getElementById('cntar');
var fot_map = document.getElementById('map-fot');
var cntar_m = document.getElementById('map2');
var uldsad = document.getElementById('pagls');
var pag2 = document.getElementById('pag2');

cntar.addEventListener('click',()=>{
    fot_map.classList.remove('showfot');
    uldsad.classList.remove('showfot');
  })

cntar_m.addEventListener('click',()=>{
    fot_map.classList.add('showfot');
    uldsad.classList.remove('showfot');
})

pag2.addEventListener('click',()=>{
    uldsad.classList.add('showfot');
   
})
