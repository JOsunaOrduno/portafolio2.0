var player, playing = false;
var tag = document.createElement('script');

//Carga de la api de youtube para asegurar que los videos carguen correctamente
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

//Llamado a videos, definicion de las claves de videos
function onYouTubeIframeAPIReady() {
    player = new YT.Player('Interface', {
        //Id del video que va a cargar el div del html
        videoId: 'KOrperYgVSA',
        events: {
          //Definicion de funcion cuando cambia de estado
            'onStateChange': onPlayerStateChange,
        }
    });

    player = new YT.Player('Inventario', {
        videoId: 'laFhP3i_nvo',
        events: {
            'onStateChange': onPlayerStateChange
        }
    });


    player = new YT.Player('GPS', {
        videoId: 'PaL29FClOEw',
        events: {
            'onStateChange': onPlayerStateChange
        }
    });

    player = new YT.Player('Etiquetado', {
      videoId: 'CLhDVYxpYiA',
      events: {
          'onStateChange': onPlayerStateChange
      }
  });
    
    
}

//Conteo del video actual
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

//Movimiento del slider cuando se presiona una flecha o un boton
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "flex";  
  dots[slideIndex-1].className += " active";

}

//Funcion que se activa cuando cambia de estado el video, aqui se muestra la descripcion del video
function onPlayerStateChange(event) {
    let text = document.getElementsByClassName("desc");
    let vid = document.getElementsByClassName("video");

    if (event.data == YT.PlayerState.PLAYING) {
        //alert('video started');
        //text[slideIndex-1].style.display = "block";  
        text[slideIndex-1].className += " other";
        vid[slideIndex-1].className += " activeVid";
        //dot[slideIndex-1].className += " activeDot";
    }
    if (event.data == YT.PlayerState.PAUSED) {
      //alert('video started');
      //text[slideIndex-1].style.display = "block";  
      text[slideIndex-1].className += " other";
      vid[slideIndex-1].className += " activeVid";
      //dot[slideIndex-1].className += " activeDot";
  }
}

//Definicion de las flechas
var next = document.getElementById("next");
var prev = document.getElementById("prev");


//Pausador de videos cuando se cambia de video con la flecha
next.addEventListener('click', () => {
	let vid = document.getElementsByClassName("video");
  if(slideIndex==1)
    vid[3].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
  else
    vid[slideIndex-2].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
});


prev.addEventListener('click', () => {
	let vid = document.getElementsByClassName("video");
  if(slideIndex==4)
    vid[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
  else
    vid[slideIndex].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
  console.log(slideIndex)
});

const boxes = document.querySelectorAll('.dot');
//Pausador de videos cuando se cambia de videos con los puntos
boxes.forEach(dot => {
  dot.addEventListener('click', function handleClick(event) {
    for(let i=0; i<=3; i++)
      document.getElementsByClassName("video")[i].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
  });
});

const closeDesc = document.querySelectorAll('.closeD');
//Span de X cerrado de la descripcion de los videos, solo cierra la descripcion actual
closeDesc.forEach(closeDesc => {
  closeDesc.addEventListener('click', function handleClick(event) {
    document.getElementsByClassName("desc")[slideIndex-1].classList.remove("other");
    document.getElementsByClassName("video")[slideIndex-1].classList.remove("activeVid");
    
  });
});


