
document.addEventListener('DOMContentLoaded', () => {
  const typed = document.getElementById('typed');
  if (typed) {
    const words = ['Full Stack Developer', 'UI/UX Designer', 'Problem Solver'];
    let wi = 0, ci = 0, del = false;
    setInterval(() => {
      const word = words[wi];
      typed.textContent = word.slice(0, ci);
      if (!del) {
        ci++;
        if (ci > word.length) { del = true; ci = word.length; }
      } else {
        ci--;
        if (ci < 0) { del = false; wi = (wi + 1) % words.length; ci = 0; }
      }
    }, 120);
  }
});
