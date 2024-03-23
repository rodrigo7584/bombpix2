/*MENU MOBILE */
const btnMobile = document.querySelector('button.btn-mobile-menu')
function toggleMenu() {
  const navMobile = document.querySelector('header.menu nav')
  btnMobile.classList.toggle('active')
  navMobile.classList.toggle('active')
}
btnMobile.addEventListener('click', toggleMenu)

/*MENU MOBILE */
/*ACCORDION */
const accordion = document.querySelectorAll('.accordion')

accordion.forEach(item => {
  const question = item.querySelector('.question')
  const answer = item.querySelector('.answer')

  answer.style.maxHeight = 0

  question.addEventListener('click', () => {
    if (item.classList.contains('open')) {
      answer.style.maxHeight = 0
      item.classList.remove('open')
    } else {
      answer.style.maxHeight =
        answer.querySelector('.content').scrollHeight + 'px'
      item.classList.add('open')
    }
  })
})
/*END ACCORDION */
/*LOADER */
document.onreadystatechange = function () {
  if (document.readyState === 'complete') {
    // Quando a página estiver totalmente carregada, esconde o loader
    document.querySelector('.loader-wrapper').style.display = 'none'
  }
}
/*END LOADER */

/*MODAL DIALOG */
function initModalDialog() {
  const modalButtons = document.querySelectorAll('[data-button-modal]')

  if (modalButtons.length) {
    modalButtons.forEach(button => {
      const modal = document.querySelector(
        `[data-dialog-modal="${button.dataset.buttonModal}"]`
      )

      button.addEventListener('click', () => {
        modal.classList.add('fade-in')
        modal.showModal()
      })

      function fadeOut() {
        modal.classList.add('fade-out')
        setTimeout(() => {
          modal.close()
          modal.classList.remove('fade-out')
        }, 1000 * 0.3)
      }

      const buttonsClose = modal.querySelectorAll(
        '[data-dialog-modal="modal-close"]'
      )
      buttonsClose.forEach(buttonClose => {
        buttonClose.addEventListener('click', () => {
          fadeOut()
        })
      })

      modal.addEventListener('click', e => {
        const modalDimensions = modal.getBoundingClientRect()
        if (
          e.clientX < modalDimensions.left ||
          e.clientX > modalDimensions.right ||
          e.clientY < modalDimensions.top ||
          e.clientY > modalDimensions.bottom
        ) {
          fadeOut()
        }
      })
    })
  }
}
initModalDialog()
/*END MODAL DIALOG */
/*SWIPER */
const swiperBombers = new Swiper('.swiper-bombers .swiper', {
  loop: true,
  slidesPerView: 3,
  navigation: {
    nextEl: '.swiper-bombers .button-next',
    prevEl: '.swiper-bombers .button-prev'
  }
})
const swiperChests = new Swiper('.swiper-chests .swiper', {
  slidesPerView: 4,
  navigation: {
    nextEl: '.swiper-chests .button-next',
    prevEl: '.swiper-chests .button-prev'
  }
})

/*SWIPER */
// const slidesBombers = document.querySelectorAll('.swiper-bombers .swiper-slide')
// slidesBombers.forEach(slide => {
//   const slidesTipos = slide.querySelectorAll('.swiper-conteudo')
//   slidesTipos.forEach((tipo, tipoIndex) => {
//     const btnNext = tipo.querySelector('.next')
//     const btnPrev = tipo.querySelector('.prev')
//     btnNext.addEventListener('click', () => {
//       btnPrev.classList.toggle('enable')
//       btnNext.classList.toggle('enable')
//       slidesTipos.forEach(item => {
//         item.classList.remove('active')
//       })
//       slidesTipos[tipoIndex].classList.add('active')
//     })
//     btnPrev.addEventListener('click', () => {
//       btnPrev.classList.toggle('enable')
//       btnNext.classList.toggle('enable')
//       slidesTipos.forEach(item => {
//         item.classList.remove('active')
//       })
//       slidesTipos[tipoIndex].classList.add('active')
//     })
//   })
//   slidesTipos[0].classList.add('active')
// })
document.addEventListener('DOMContentLoaded', function () {
  const slidesBombers = document.querySelectorAll(
    '.swiper-bombers .swiper-slide'
  )
  slidesBombers.forEach(slide => {
    const slidesTipos = slide.querySelectorAll('.swiper-conteudo')

    slidesTipos.forEach((tipo, tipoIndex) => {
      const btnNext = tipo.querySelector('.next')
      const btnPrev = tipo.querySelector('.prev')
      const title = tipo.querySelectorAll('h3')
      const text = tipo.querySelectorAll('p')
      const image = tipo.querySelectorAll('.img-bomber')
      let currentIndex = 0

      title[0].classList.add('active')
      text[0].classList.add('active')
      image[0].classList.add('active')
      btnPrev.disabled = true
      btnNext.disabled = false

      btnNext.addEventListener('click', () => {
        console.log(currentIndex)
        console.log(title.length)

        if (currentIndex < title.length - 1) {
          title[currentIndex].classList.remove('active')
          text[currentIndex].classList.remove('active')
          image[currentIndex].classList.remove('active')
          currentIndex++
          title[currentIndex].classList.add('active')
          text[currentIndex].classList.add('active')
          image[currentIndex].classList.add('active')
          btnPrev.disabled = false

          if (currentIndex === title.length - 1) {
            btnNext.disabled = true
          }
        }
      })
      btnPrev.addEventListener('click', () => {
        console.log(currentIndex)
        console.log(title.length)

        if (currentIndex > 0) {
          title[currentIndex].classList.remove('active')
          text[currentIndex].classList.remove('active')
          image[currentIndex].classList.remove('active')
          currentIndex--
          title[currentIndex].classList.add('active')
          text[currentIndex].classList.add('active')
          image[currentIndex].classList.add('active')
          btnNext.disabled = false

          if (currentIndex === 0) {
            btnPrev.disabled = true
          }
        }
      })
    })
  })
})
// document.addEventListener('DOMContentLoaded', function () {
//   var sliderContainers = document.querySelectorAll('.slider-container')

//   sliderContainers.forEach(function (sliderContainer) {
//     var slides = sliderContainer.querySelectorAll('.slide')
//     var slider = sliderContainer.querySelector('.slider')
//     var prevButton = sliderContainer.querySelector('.prev')
//     var nextButton = sliderContainer.querySelector('.next')
//     var currentIndex = 0

//     nextButton.addEventListener('click', function () {
//       if (currentIndex < slides.length - 1) {
//         currentIndex++
//         slider.style.transform = 'translateX(' + -100 * currentIndex + '%)'
//         prevButton.disabled = false
//         if (currentIndex === slides.length - 1) {
//           nextButton.disabled = true
//         }
//         nextButton.classList.remove('ativo')
//         prevButton.classList.add('ativo')
//       }
//     })

//     prevButton.addEventListener('click', function () {
//       if (currentIndex > 0) {
//         currentIndex--
//         slider.style.transform = 'translateX(' + -100 * currentIndex + '%)'
//         nextButton.disabled = false
//         if (currentIndex === 0) {
//           prevButton.classList.remove('ativo')
//           nextButton.classList.add('ativo')
//         }
//       }
//     })
//   })
// })

AOS.init()
