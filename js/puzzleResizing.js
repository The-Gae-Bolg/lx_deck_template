$(document).ready(function () {

  const puzzleVideo = document.getElementById("puzzleVideo");
  let domRectVideo = puzzleVideo.getBoundingClientRect();

  const getSize = () => {
    domRectVideo = puzzleVideo.getBoundingClientRect();
    const videoWidth = domRectVideo.width;
    return { videoWidth };
  };

  const resize = () => {
    const { videoWidth } = getSize();
    
    if (videoWidth < 817 && videoWidth > 767) {
      puzzleVideo.style.height = (videoWidth/1.4)+'px';
    }else if(videoWidth <= 767 && videoWidth > 567){
      puzzleVideo.style.height = (videoWidth/1.3)+'px';
    }else if(videoWidth < 567){
      puzzleVideo.style.height = (videoWidth/1.1)+'px';
    }else{
      puzzleVideo.style.height = (videoWidth/1.6)+'px';
    }

  };

  $(window).resize(() => {
    resize();
  });

  resize();

});