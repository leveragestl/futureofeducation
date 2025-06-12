import gsap from 'gsap';

export function initVideoLinks() {
  const links = document.querySelectorAll('.links-list li span');
  const video = document.querySelector('#mainVideo');
  const videoContainer = document.querySelector('.video-container');
  const videoWrapper = document.querySelector('.video-wrapper');
  const muteButton = document.querySelector('.video-wrapper .mute-button');
  
  if (!links.length || !video) return;

  let currentVideoSrc = video.src;

  // Handle mute button click
  if (muteButton) {
    muteButton.addEventListener('click', () => {
      if (video.muted) {
        video.play();
        video.muted = false;
        videoContainer.classList.add('is-unmuted');
        muteButton.querySelector('i').classList.remove('mute');
        muteButton.querySelector('i').classList.add('volume');
      } else {
        video.muted = true;
        videoContainer.classList.remove('is-unmuted');
        muteButton.querySelector('i').classList.remove('volume');
        muteButton.querySelector('i').classList.add('mute');
      }
    });
  }

  links.forEach(link => {
    link.addEventListener('mouseenter', () => {
      const videoSrc = link.parentElement.dataset.video;
      if (videoSrc && videoSrc !== currentVideoSrc) {
        const newSrc = videoSrc;
        
        // Reset muted state
        video.muted = true;
        videoContainer.classList.remove('is-unmuted');
        if (muteButton) {
          muteButton.querySelector('i').classList.remove('volume');
          muteButton.querySelector('i').classList.add('mute');
        }
        
        // Fade out current video
        gsap.to(videoWrapper, {
          opacity: 0,
          y: 5,
          duration: 0.3,
          onComplete: () => {
            // Change video source
            video.src = newSrc;
            video.play();
            currentVideoSrc = newSrc;
            
            // Fade in new video
            gsap.to(videoWrapper, {
              opacity: 1,
              y: 0,
              duration: 0.3
            });
          }
        });
      }
    });

    link.addEventListener('click', (e) => {
      // Toggle mute state
      if (video.muted) {
        video.play();
        video.muted = false;
        videoContainer.classList.add('is-unmuted');
        if (muteButton) {
          muteButton.querySelector('i').classList.remove('mute');
          muteButton.querySelector('i').classList.add('volume');
        }
      } else {
        video.muted = true;
        videoContainer.classList.remove('is-unmuted');
        if (muteButton) {
          muteButton.querySelector('i').classList.remove('volume');
          muteButton.querySelector('i').classList.add('mute');
        }
      }

      links.forEach(link => {
        link.parentElement.classList.remove('active');
      });

      link.parentElement.classList.add('active');
    });
  });
}
