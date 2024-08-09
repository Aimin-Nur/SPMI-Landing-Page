document.addEventListener('DOMContentLoaded', () => {
  let tl = gsap.timeline();

  // Hero image
  tl.to('.hero-image', {
    scale: 0.7,
    duration: 2.5, 
    ease: "slow(0.7, 0.7, false)",
    scrollTrigger: {
      trigger: '.hero-image',
      scrub: true,
      start: 'top center'
    }
  });

  // Number Counter
  if (document.querySelector(".number-counter")) {
    var numberDoms = document.querySelectorAll(".number-counter");
  
    numberDoms.forEach(function(numberDom) {
      var number = parseInt(numberDom.innerHTML);
  
      if (!isNaN(number)) {
        var counter = { number: 0 };
        gsap.to(counter, {
          duration: 3,
          number: number,
          onUpdate() {
            numberDom.innerHTML = counter.number.toFixed(0) + '+';
          }
        });
      }
    });
  }
  

  // Our Products
  if (document.querySelector('.our-products')) {
    const animationObject = document.querySelector('.our-products');
    gsap.from(animationObject.querySelectorAll('div'), {
      scrollTrigger: {
        trigger: animationObject,
        start: 'top 80%',
        toggleActions: "play none none none",
      },
      autoAlpha: 0,
      opacity: 0,
      y: -50,
      duration: 0.7,
      stagger: 0.075,
    });
  }


});
