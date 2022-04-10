function scrollFunction () {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById ('navbar').style.background = 'black';
  } else {
    document.getElementById ('navbar').style.background = 'none';
  }
}
window.addEventListener ('scroll', scrollFunction);
