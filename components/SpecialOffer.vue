<template>
  <section class="special-offer">
    <div class="special-offer__wrapper">
      <div class="special-offer__text-wrapper">
        <h1 class="special-offer__heading">Майнеры – наша страсть!</h1>
        <p class="special-offer__description">Официальные поставки майнеров по дилерским ценам</p>
        <p class="special-offer__detail">
          Доставка и растаможка Асиков из Китая сложный процесс.
          Их ввоз осуществляется по особой схеме и требует подготовки большой сопроводительной документации.
          Мы снимем головную боль и избавим Вас от лишних расходов на таможне.
          Привезем Вам оборудование в кратчайшие сроки с полным пакетом документов
        </p>
      </div>
      <div class="special-offer__image-wrapper">
        <VueSlickCarousel v-bind="settings">
          <div v-for="(imageTitle, index) in carouselPhotos" :key="index">
            <img
              class="special-offer__image"
              :src="require(`~/assets/images/${imageTitle}.jpg`)"
              alt="Доставки из Гонкконга"
              :width="isDesktopLayout ? 450 : 200"
              :height="isDesktopLayout ? 500 : 200"
            >
          </div>
        </VueSlickCarousel>
        <p class="special-offer__image-description">
          Прямые поставки из Гонконга
        </p>
      </div>
    </div>

    <p class="special-offer__offer-question">
      Хотите получить лучшие условия по доставке майнинг оборудования из Китая?
    </p>

    <button class="special-offer__offer-button" @click="$emit('open-form-modal')">
      Узнать цену
    </button>
  </section>
</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'
// optional style for arrows & dots
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'

export default {
  components: { VueSlickCarousel },
  props: {
    isDesktopLayout: {
      type: Boolean,
      required: true
    }
  },
  emits: ['open-form-modal'],
  data: () => ({
    carouselPhotos: [
      'carousel-1',
      'carousel-2',
      'carousel-3',
      'carousel-4',
      'carousel-5',
      'carousel-6',
      'carousel-7'
    ],
    settings: {
      dots: false,
      dotsClass: 'slick-dots custom-dot-class',
      edgeFriction: 0.35,
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  })
}
</script>

<style>
  .special-offer {
    font-family: 'Montserrat';
    padding: 60px 10px 50px;
    background-color: #252827;
  }

  .special-offer__wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 50px;
    margin-bottom: 50px;
  }

  .special-offer__text-wrapper {
    max-width: 360px;
  }

  .special-offer__heading {
    font-family: 'Inter';
    font-size: 32px;
    line-height: 38px;
    font-weight: 700;
    color: white;
    margin-bottom: 50px;
  }

  .special-offer__description {
    font-size: 14px;
    line-height: 24px;
    font-weight: 700;
    letter-spacing: -0.25px;
    color: white;
    margin-bottom: 23px;
  }

  .special-offer__detail {
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
    color: white;
  }

  .special-offer__image-wrapper {
    width: 300px;
  }

  .special-offer__image {
    object-fit: cover;
    width: 300px;
    height: 400px;
    user-select: none;
  }

  .special-offer__image-description {
    font-family: 'Inter';
    position: relative;
    top: -9px;
    font-size: 24px;
    line-height: 30px;
    font-weight: 700;
    text-transform: uppercase;
    color: #4b4e4d;
  }

  .special-offer__offer-question {
    font-size: 14px;
    line-height: 22px;
    font-weight: 700;
    letter-spacing: -0.25px;
    color: white;
    text-align: center;
    max-width: 400px;
    margin: 0 auto 20px;
  }

  .special-offer__offer-button {
    font-family: 'Inter';
    display: block;
    width: 160px;
    height: 53px;
    margin: 0 auto;
    background-color: white;
    opacity: 0.8;
    border-radius: 80px;
    font-size: 13px;
    line-height: 16px;
    font-weight: 700;
    color: #252827;
  }

  .special-offer__offer-button:hover {
    opacity: 0.5;
  }

  @media (min-width: 1218px) and (min-height: 750px) {
    .special-offer {
      padding: 30px 0 0 130px;
    }

    .special-offer__wrapper {
      flex-direction: row;
      column-gap: 140px;
      margin-bottom: 0px;
    }

    .special-offer__heading {
      font-size: 40px;
      line-height: 48px;
      margin-bottom: 26px;
    }

    .special-offer__description {
      font-size: 18px;
      line-height: 27px;
    }

    .special-offer__detail {
      font-size: 13px;
      line-height: 22px;
    }

    .special-offer__image-wrapper {
      width: 450px;
    }

    .special-offer__image {
      width: 450px;
      height: 500px;
    }

    .special-offer__image-description {
      top: -10px;
      font-size: 41px;
      line-height: 50px;
    }

    .special-offer__offer-question {
      font-size: 16px;
      line-height: 24px;
      margin: 0 auto 6px;
      max-width: 100%;
      max-width: 400px;
    }

    .special-offer__offer-button {
      width: 200px;
      height: 66px;
      border-radius: 100px;
      font-size: 16px;
      line-height: 20px;
    }
  }

@media (min-width: 1218px) and (min-height: 900px)  {
  .special-offer {
    padding-top: 110px;
  }

  .special-offer__wrapper {
    margin-bottom: 40px;
  }

  .special-offer__offer-question {
    margin-bottom: 30px;
  }
}
</style>
