const orgBtn = document.getElementById('organigrama');
orgBtn.onclick = function(event) {
  const orgImg = document.getElementById('org');
  const orgDiv = document.getElementById('organiImagen');
  const valo = document.getElementById('valor');
  if (!orgDiv.classList.contains("oActive")) {
    orgDiv.className += " oActive";
    valo.className += " valActive";
    orgImg.className += " oScale";
  }
  else{
    orgDiv.classList.remove("oActive");
    valo.classList.remove("valActive");
    orgImg.classList.remove("oScale");
  }
    
}