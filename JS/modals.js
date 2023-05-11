var btn2 = document.getElementById("hola");
var btn3 = document.getElementById("closes");
var container2 = document.getElementById("modal_container2");


btn2.addEventListener('click',()=>{
    container2.classList.add('show');
  
  })
  
  btn3.addEventListener('click',()=>{
    container2.classList.remove('show');
  })


// Get the modal
var modal = document.getElementById("myModal");



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeO")[0];

// When the user clicks the button, open the modal 
document.getElementById("orgBtn").onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}