const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
const orgImg = document.getElementById('org');
const orgBtn = document.getElementById('organigrama');
const orgDiv = document.getElementById('organiImagen');
const valo = document.getElementById('valor');
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];


signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
  document.body.classList.add("stop-scrolling");
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  document.body.classList.remove("stop-scrolling");
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.body.classList.remove("stop-scrolling");
  }
}

orgBtn.onclick = function(event) {
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





