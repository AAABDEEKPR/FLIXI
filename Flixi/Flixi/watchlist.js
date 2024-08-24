 $(document).ready(function() {
    $('#autoWidth,#autoWidth2').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
        } 
    });  
  });

  let next = document.querySelector('.next');
  let prev = document.querySelector('.prev');
  let slider = document.querySelector('.image-slider');

  next.addEventListener('click',function(){
    let slides = document.querySelectorAll('.image-slides');
    slider.appendChild(slides[0]);
  })

  prev.addEventListener('click',function(){
    let slides = document.querySelectorAll('.image-slides');
    slider.prepend(slides[slides.length - 1]);
  })
 