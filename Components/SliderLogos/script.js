import Swiper, { Navigation, A11y, Autoplay, Pagination } from 'swiper'
import 'swiper/css/bundle'
import { buildRefs, getJSON } from '@/assets/scripts/helpers.js'

Swiper.use([Navigation, A11y, Autoplay, Pagination])

export default function (sliderImages) {
  const refs = buildRefs(sliderImages)
  const data = getJSON(sliderImages)
  const swiper = initSlider(refs, data)
  return () => swiper.destroy()
}

function initSlider (refs, data) {
  const { options } = data
  const config = {
    modules: [Navigation, A11y, Autoplay],
    a11y: options.a11y,
    slidesPerView: 'auto',
    spaceBetween: 40,
    pagination: {
      el: refs.pagination,
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      1181: {
        slidesPerView: 4,
        spaceBetween: 40
      }
    }
  }
  if (options.autoplay && options.autoplaySpeed) {
    config.autoplay = {
      delay: options.autoplaySpeed
    }
  }

  return new Swiper(refs.slider, config)
}
