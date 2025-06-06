import gsap from 'gsap';

export function initVideoLinks() {
  const links = document.querySelectorAll('.links-list li span');
  const video = document.querySelector('#mainVideo');
  const videoWrapper = document.querySelector('.video-wrapper');
  
  if (!links.length || !video) return;

  let isMuted = true;
  let currentVideoSrc = video.src;

  links.forEach(link => {
    link.addEventListener('mouseenter', () => {
      const videoSrc = link.parentElement.dataset.video;
      if (videoSrc && videoSrc !== currentVideoSrc) {
        const newSrc = videoSrc;
        
        // Reset muted state
        isMuted = true;
        video.muted = true;
        videoWrapper.classList.add('is-muted');
        videoWrapper.classList.remove('is-unmuted');
        
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
      isMuted = !isMuted;
      video.muted = isMuted;
      videoWrapper.classList.toggle('is-muted', isMuted);
      videoWrapper.classList.toggle('is-unmuted', !isMuted);

      links.forEach(link => {
        link.parentElement.classList.remove('active');
      });

      link.parentElement.classList.add('active');
    });
  });

  videoWrapper.classList.add('is-muted');
}
