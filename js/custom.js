// jQuery
$(document).ready(function(){

  $('.post-featured-images, .post-template .kg-card-markdown').imagesLoaded().done( onloadimg );
  $('.post-template .kg-card-markdown p').addClass('col-lg-4');
function onloadimg(){
  $('.loading').hide();
  console.log('DONE  - all images have been successfully loaded');
  $('.post-featured-image, .post-template .kg-card-markdown').show();
  $('.post-featured-image, .post-template .kg-card-markdown').addClass('animated fadeInUp');
  $('.pagination').show();
  $('.post-template .kg-card-markdown').masonry({
  // options
     itemSelector: 'p'
    });

  $('.post-single-featured').masonry({
  // options
  itemSelector: 'p'
});

} //onloadimg

  // Magnific Popup
  $('.kg-card-markdown').magnificPopup({
    delegate: 'p.col-lg-4 > a',
  type: 'image',
  gallery:{
    enabled:true
  },
  image: { titleSrc: function(item) {
     return item.el.attr('title');
   }, tError: '<a href="%url%">The image</a> could not be loaded.'  },
  mainClass: 'mfp-with-zoom', // this class is for CSS animation below

  zoom: {
    enabled: true, // By default it's false, so don't forget to enable it

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    // The "opener" function should return the element from which popup will be zoomed in
    // and to which popup will be scaled down
    // By defailt it looks for an image tag:
    opener: function(openerElement) {
      // openerElement is the element on which popup was initialized, in this case its <a> tag
      // you don't need to add "opener" option if this code matches your needs, it's defailt one.
      return openerElement.is('img') ? openerElement : openerElement.find('img');
    }
  }
});

}); //jQuery ready