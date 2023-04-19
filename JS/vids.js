var player, playing = false;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('video1', {
        videoId: 'RWeFOe2Cs4k',
        events: {
            'onStateChange': onPlayerStateChange
        }
    });

    player = new YT.Player('video2', {
        videoId: 'RWeFOe2Cs4k',
        events: {
            'onStateChange': onPlayerStateChange
        }
    });


    player = new YT.Player('video3', {
        videoId: 'RWeFOe2Cs4k',
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
    let dot = document.getElementsByClassName("dot");
    if (event.data == YT.PlayerState.PLAYING) {
        //alert('video started');
        //text[slideIndex-1].style.display = "block";  
        text[slideIndex-1].className += " other";
        vid[slideIndex-1].className += " activeVid";
        //dot[slideIndex-1].className += " activeDot";
        playing = true;
    }

    else if(event.data == YT.PlayerState.PAUSED){
        //alert('video paused');
        playing = false;
        
    }
}
