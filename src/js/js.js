AOS.init();

//Icons Font-awesome for Social Media
/*
*
* Add custom social Media icos in a Object
*
*
*/
const socialMediaIcos = {
  'twitter.com': 'fa-twitter-square',
  'facebook.com': 'fa-facebook',
  'youtube.com': 'fa-youtube-square',
  'pinterest.com': 'fa-pinterest-square',
  'instagram.com': 'fa-instagram',
  'linkedin.com': 'fa-linkedin',
  'wordpress.com': 'fa-wordpress',
  'tumblr.com': 'fa-tumblr-square',
  'plus.google.com': 'fa-google-plus-square',

} 

  const addIconsSocial = (socialMedia, icoClass) => {
    const elemento = document.querySelectorAll(`a[href*="${socialMedia}"]`);
    for (let i = 0; i < elemento.length; i++) {
      elemento[i].previousElementSibling.classList.add(`${icoClass}`)
    }
  }

  const iterarIcosSocialMedia = (socialMediasObj) => {
    for (var value in socialMediasObj) {
      addIconsSocial(value, socialMediasObj[value]);
    }
  }

  iterarIcosSocialMedia(socialMediaIcos);

//END Icons Font-awesome for Social Media
  

