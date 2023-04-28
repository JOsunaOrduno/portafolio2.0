const toggleSearch = (search,button) =>{
        const searchBar= document.getElementById(search),
            searchButton= document.getElementById(button);

            searchButton.addEventListener('click',()=>{
            searchBar.classList.toggle('show-search');
        })
}

toggleSearch('buscar_bar','buscar_boton');

var menuDe = document.getElementById("nav");
var btn5 = document.getElementById("display");
var cerar1= document.getElementById("cerar1");
var cont= document.getElementById("cont");
var  modal2= document.getElementById("modal2");
var formContac= document.getElementById("formContac");
var closes1= document.getElementById("closes1");

closes1.addEventListener('click',()=>{
    formContac.classList.remove("formContacshow");
    modal2.classList.remove("modal2move"); 
})

cont.addEventListener('click',()=>{
    formContac.classList.add("formContacshow");
    modal2.classList.add("modal2move"); 
})

btn5.addEventListener('click',()=>{
    menuDe.classList.add('showNav');
  })

cerar1.addEventListener('click',()=>{
    menuDe.classList.remove('showNav');
})

window.onscroll = function() {
    var y = window.scrollY;
    if(y>0){
        menuDe.classList.remove('showNav');
    }
  };