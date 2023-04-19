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

btn5.addEventListener('click',()=>{
    menuDe.classList.add('showNav');
  })

cerar1.addEventListener('click',()=>{
    menuDe.classList.remove('showNav');
})