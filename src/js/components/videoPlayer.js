export function videoPlayer() {

  // ===========================================================================
  // Target
  // ===========================================================================
  const videos = document.querySelectorAll('.video-container')
  
  for (const video of videos) {
    const videoContainer = video
    const videoElem = video.querySelector('video')
    const playButton = video.querySelector('.play-button')
    const muteButton = video.querySelector('.mute-button')

    // ~~~~~~~~~~~~~~ Play/Pause ~~~~~~~~~~~~~ //
    video.addEventListener('click', (e) => {
      function playPause() {
        if (videoContainer.getAttribute('data-video') !== 'is-playing') {
          videoElem.play()
          videoContainer.setAttribute('data-video', 'is-playing')
          playButton.style.cssText = 'opacity: 0; visibility: hidden'
        } else {
          videoElem.pause()
          videoContainer.setAttribute('data-video', '')
          playButton.style.cssText = ''
        }
      }
    })

    if(video.classList.contains('video-autoplays')) {
      video.addEventListener('click', (e) => {
        if (e.target === playButton || e.target === playButton.querySelector('button')) {
          videoElem.pause()
          videoElem.muted = true;
          videoContainer.classList.remove('is-unmuted')
          muteButton.querySelector('i').classList.remove('volume')
          muteButton.querySelector('i').classList.add('mute')
        }
      })
  
      muteButton.addEventListener('click', () => {
        if (videoElem.muted) {
          videoElem.play()
          videoElem.muted = false;
          videoContainer.classList.add('is-unmuted')
          muteButton.querySelector('i').classList.remove('mute')
          muteButton.querySelector('i').classList.add('volume')
        } else {
          videoElem.muted = true;
          videoContainer.classList.remove('is-unmuted')
          muteButton.querySelector('i').classList.remove('volume')
          muteButton.querySelector('i').classList.add('mute')
        }
      }); 
    }
  }
}