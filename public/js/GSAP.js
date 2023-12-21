/* GSAP EXAMPLE CODE


let tl = gsap.timeline({
    defaults: {
      ease: "power4.inOut",
      duration: 0
    }
  })
  //let flagPoles = CSSRulePlugin.getRule(".card:before");
  
  tl.to('#brand-text', {
    opacity: 1,
    duration: .6,
    top: "-200%"
  })
  tl.to('#brand-text-wrapper', {
    duration: .9,
    top: "-130%",
    display: "none"
  })
  tl.to('#header-content', {
    'clip-path': 'polygon(1% 0, 100% 0, 100% 100%, 0 100%)',
    duration: 2,
    stagger: .2
  }, "-=1")
  tl.to('.header-icon', {
    opacity: 1,
    duration: 1
  }, "-=.8")
  tl.to('#main', {
    "display": "block",
    duration: 1
  }, "-=.3")
  tl.to('#footer', {
    "display": "block",
    duration: 1
  }, "-=.3")
  
  tl.to('#toTop', {
    opacity: 1,
    duration: .2
  }, "-=1")
*/