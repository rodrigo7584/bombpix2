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

const slidesBombers = document.querySelectorAll('.swiper-bombers .swiper-slide')
slidesBombers.forEach(slide => {
  const slidesTipos = slide.querySelectorAll('.swiper-conteudo')
  slidesTipos.forEach((tipo, tipoIndex) => {
    const btnNext = tipo.querySelector('.next')
    const btnPrev = tipo.querySelector('.prev')
    const title = tipo.querySelectorAll('h3')
    const text = tipo.querySelectorAll('p')
    const image = tipo.querySelectorAll('.img-bomber')
    title[0].classList.add('active')
    text[0].classList.add('active')
    image[0].classList.add('active')
    let pag = 0
    btnNext.addEventListener('click', () => {
      title.forEach(item => {
        item.classList.remove('active')
      })
      if (pag < slidesTipos.length) {
        pag = pag + 1
        title[pag].classList.add('active')
      } else if ((pag = slidesTipos.length)) {
        pag = pag + 1
        title[pag].classList.add('active')
        btnNext.classList.remove('enable')
      }
    })
  })
})
AOS.init()
