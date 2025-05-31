export function videoPlayer() {

  // ===========================================================================
  // Functions
  // ===========================================================================

  // Full-screen button handler
  function toggleFullscreen(target) {
    const targetContainer = target.closest('.video-container')

    if (!document.fullscreenElement) {
      targetContainer.querySelector('video').requestFullscreen()
    } else {
      document.exitFullscreen();
    }
  }

  // ===========================================================================
  // Target
  // ===========================================================================
  const videos = document.querySelectorAll('.video-container')
  
  for (const video of videos) {
    const videoContainer = video
    const videoElem = video.querySelector('video')
    const playButton = video.querySelector('button[data-video-play]')

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

      if (e.target === videoContainer || e.target.closest('.video-container')) {
        playPause()
      } else if (e.target === playButton || e.target.closest('button[data-video-play]') ) {
        playPause()
      }

    })
  }
}