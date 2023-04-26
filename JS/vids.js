var player, playing = false;
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


function onYouTubeIframeAPIReady() {
    player = new YT.Player('Interface', {
        videoId: 'KOrperYgVSA',
        events: {
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

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

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

function onPlayerStateChange(event) {
    let text = document.getElementsByClassName("desc");
    let vid = document.getElementsByClassName("video");
    let a1 = document.getElementById("");
    let a2 = document.getElementsByClassName("video");

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


var next = document.getElementById("next");
var prev = document.getElementById("prev");



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

boxes.forEach(dot => {
  dot.addEventListener('click', function handleClick(event) {
    for(let i=0; i<=3; i++)
      document.getElementsByClassName("video")[i].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
  });
});

const closeDesc = document.querySelectorAll('.closeD');

closeDesc.forEach(closeDesc => {
  closeDesc.addEventListener('click', function handleClick(event) {
    document.getElementsByClassName("desc")[slideIndex-1].classList.remove("other");
    document.getElementsByClassName("video")[slideIndex-1].classList.remove("activeVid");
    
  });
});


