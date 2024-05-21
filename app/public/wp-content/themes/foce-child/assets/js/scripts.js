//----Script foce child----//

//----Wait for the load content----//
document.addEventListener("DOMContentLoaded", function() {

  //----Declaration----//
  let menuDisplay = document.querySelector(".hide")
  let story = document.querySelector(".histoire")
  let character = document.querySelector(".character")
  let place = document.querySelector(".lieu")
  let studio = document.querySelector(".studio")
  let burger = document.querySelector(".burger")
  //----Declaration----//


  //----Burger menu main logic----//
  burger.addEventListener("click", () => { 
    burger.classList.toggle("burger")
    burger.classList.toggle("cross")
    if (burger.classList.contains("burger")) {
      menuDisplay.classList.remove("display")
      menuDisplay.classList.add("hide")
    } else {
      menuDisplay.classList.remove("hide")
      menuDisplay.classList.add("display")   
    }
  })
  //----Burger menu----//


  //----Burger menu link logic----//
  story.addEventListener("click", () => {
    menuDisplay.classList.toggle("hide")
    burger.classList.remove("cross")
    burger.classList.add("burger")
  })

  character.addEventListener("click", () => {
    menuDisplay.classList.toggle("hide")
    burger.classList.remove("cross")
    burger.classList.add("burger")    
  })

  place.addEventListener("click", () => {
    menuDisplay.classList.toggle("hide")
    burger.classList.remove("cross")
    burger.classList.add("burger")
  })

  studio.addEventListener("click", () => {
    menuDisplay.classList.toggle("hide")
    burger.classList.remove("cross")
    burger.classList.add("burger")
  })
  //----Burger menu link logic----//

  
  //----The scroll bloc----//

  //----The parallax of the logo----//
  window.addEventListener("scroll", function() {
  const distance = window.scrollY;
  document.querySelector(".logo").style.transform = `translateY(${distance * 0.4}px)`
  })
  //----The parallax of the logo----//
  

  //----The parallax of the clouds----//
  //----The big cloud----//
  window.addEventListener("scroll", function() {
    const distance = window.scrollY
    const bigCloud = document.querySelector(".bigCloud")
    const minOffsetBigCloud = 1450
    const maxOffsetBigCloud = 2200
    if (minOffsetBigCloud < distance && distance < maxOffsetBigCloud) {
      bigCloud.style.transform = `translateX(${-1 * ((distance - minOffsetBigCloud) / (maxOffsetBigCloud - minOffsetBigCloud)) * 300}px)`
    }
    console.log(distance)
  })
  //----The big cloud----//

  //----The small cloud----//
  window.addEventListener("scroll", function() {
    const distance = window.scrollY
    const smallCloud = document.querySelector(".smallCloud")
    const minOffsetSmallCloud = 1500
    const maxOffsetSmallCloud = 2220
    if (minOffsetSmallCloud < distance && distance < maxOffsetSmallCloud) {
      smallCloud.style.transform = `translateX(${-1 * ((distance - minOffsetSmallCloud) / (maxOffsetSmallCloud - minOffsetSmallCloud)) * 300}px)`
    }
  })
  //----The small cloud----//
  //----The parallax of the clouds----//

  //----Animation of sections----//
  //----Story section----//
  const storysection = document.querySelector(".story__article")
  window.addEventListener("scroll", function(){
    const distance = window.scrollY
    const offstetTitle = 300
    if (distance >= offstetTitle){   
      storysection.style.display = "block"    
      storysection.classList.add('simpleAnimationTitle')  
    }
  })
  //----Story section----//

  //----Characters section----//
  const characters = document.querySelector("#animSection")
  window.addEventListener("scroll", function(){
    const distance = window.scrollY
    const offstetTitle = 577
    if (distance >= offstetTitle){   
      characters.style.display = "block"    
      characters.classList.add('simpleAnimationTitle')  
    }
  })
  //----Characters section----//

  //----Place section----//
  const placesection = document.querySelector("#place")
  window.addEventListener("scroll", function(){
    const distance = window.scrollY
    const offstetTitle = 1305
    if (distance >= offstetTitle){   
      placesection.style.display = "flex"    
      placesection.classList.add('simpleAnimationTitle')  
    }
  })
  //----Place section----//
  
  //----Studio section----//
  const studiosection = document.querySelector("#studio")
  window.addEventListener("scroll", function(){
    const distance = window.scrollY
    const offstetTitle = 2004
    if (distance >= offstetTitle){   
      studiosection.style.display = "block"    
      studiosection.classList.add('simpleAnimationTitle')  
    }
  })
  //----Studio section----//

  //----festival section----//
  const festivalsection = document.querySelector(".festival")
  window.addEventListener("scroll", function(){
    const distance = window.scrollY
    const offstetTitle = 2400
    if (distance >= offstetTitle){   
      festivalsection.style.display = "flex"    
      festivalsection.classList.add('simpleAnimationTitle')  
    }
  })
  //----festival section----//

  //----footer section----//
  const footersection = document.querySelector("#colophon")
  window.addEventListener("scroll", function(){
    const distance = window.scrollY
    const offstetTitle = 3000
    if (distance >= offstetTitle){   
      footersection.style.display = "block"    
      footersection.classList.add('simpleAnimationTitle')  
    }
  })
  //----footer section----//
  //----Animation of sections----//

  //----Animation of titles----//
  //----Story----//
  const storyTitle = document.querySelector(".titre")
  window.addEventListener("scroll", function(){
    const distance = window.scrollY
    const offstetTitle = 300
    if (distance >= offstetTitle){   
      storyTitle.style.display = "block"    
      storyTitle.classList.add('simpleAnimationTitle')  
    }
    console.log(distance)
  })
  //----Story----//

  //----Character----//
  const characterTitle = document.querySelector("#character")
  window.addEventListener("scroll", function(){
    const distance = window.scrollY
    const offstetTitle = 800
    if (distance >= offstetTitle){   
      characterTitle.style.display = "flex"    
      characterTitle.classList.add('simpleAnimationTitle')  
    }
    console.log(distance)
  })
  //----Character----//

  //----Place----//
  const placeTitle = document.querySelector(".place")
  window.addEventListener("scroll", function(){
    const distance = window.scrollY
    const offstetTitle = 1600
    if (distance >= offstetTitle){   
      placeTitle.style.display = "inline-block"    
      placeTitle.classList.add('simpleAnimationTitle')  
    }
    console.log(distance)
  })
  //----Place----//

  //----Studio Koukaki----//
  const animFirstWordTitle = document.querySelector(".animFirstWord")
  window.addEventListener("scroll", function(){
    const distance = window.scrollY
    const offstetTitle = 2200
    if (distance >= offstetTitle){   
      animFirstWordTitle.style.display = "inline-block"    
      animFirstWordTitle.classList.add('simpleAnimationTitle')  
    }
    console.log(distance)
  })
  
  const animSecondWordTitle = document.querySelector(".animSecondWord")
  window.addEventListener("scroll", function(){
    const distance = window.scrollY
    const offstetTitle = 2200
    if (distance >= offstetTitle){   
      animSecondWordTitle.style.display = "inline-block"    
      animSecondWordTitle.classList.add('simpleAnimationTitle')  
    }
    console.log(distance)
  })
  //----Studio Koukaki----//
  
  //----Animation of titles----//

  //----The scroll bloc----//
    
  //----The swiper of the characters----//  
  var swipper = new Swiper(".swiper", {   
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    slidesPerView: 3,
    coverflowEffect: {
      rotate: 60,
      depth: 100,
      slideShadows: false,
      },
    })
  })
  //----The swiper of the characters----//

//----Wait for the load content----//

//----Script foce child----//