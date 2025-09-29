document.addEventListener('DOMContentLoaded', function() {
  const visual = document.getElementById('visual');
  if (visual) {
    document.addEventListener('mousemove', function(e) {
      const x = e.clientX;
      const y = e.clientY;
      const moveX = (x - window.innerWidth / 2) / (window.innerWidth / 2) * 10;
      const moveY = (y - window.innerHeight / 2) / (window.innerHeight / 2) * 10;
      visual.style.transform = `translate(${moveX}px, ${moveY}px)`;
    });
  }
});
