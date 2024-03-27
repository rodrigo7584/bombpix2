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
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-bombers .button-next',
    prevEl: '.swiper-bombers .button-prev'
  },
  breakpoints: {
    768: {
      slidesPerView: 2
    },
    1200: {
      slidesPerView: 3
    }
  }
})
const swiperChests = new Swiper('.swiper-chests .swiper', {
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-chests .button-next',
    prevEl: '.swiper-chests .button-prev'
  },
  breakpoints: {
    576: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 3
    },
    1200: {
      slidesPerView: 4
    }
  }
})

/*SWIPER */

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

AOS.init()
