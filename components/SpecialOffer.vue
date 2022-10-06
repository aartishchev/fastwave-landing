<template>
  <section class="special-offer">
    <div class="special-offer__wrapper">
      <div>
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
        <img
          class="special-offer__image"
          src="~/assets/images/mining.jpg"
          alt="Картинка оборудования для майнинга"
          :width="isDesktopLayout ? 338 : 200"
          :height="isDesktopLayout ? 335 : 200"
        >
        <p class="special-offer__image-description">
          Популярные модели
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
export default {
  props: {
    isDesktopLayout: {
      type: Boolean,
      required: true
    }
  },
  emits: ['open-form-modal']
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
    flex-direction: column;
    row-gap: 50px;
    margin-bottom: 50px;
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
    margin-bottom: 20px;
  }

  .special-offer__detail {
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
    color: white;
  }

  .special-offer__image-wrapper {
    text-align: center;
  }

  .special-offer__image {
    width: 200px;
    height: 200px;
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
    margin-bottom: 20px;
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

  @media (min-width: 1218px) {
    .special-offer {
      padding: 110px 0px 70px 130px;
    }

    .special-offer__wrapper {
      flex-direction: row;
      column-gap: 100px;
      margin-bottom: 60px;
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
      flex: none;
    }

    .special-offer__image {
      width: 338px;
      height: 335px;
    }

    .special-offer__image-description {
      top: -10px;
      font-size: 41px;
      line-height: 50px;
    }

    .special-offer__offer-question {
      font-size: 16px;
      line-height: 24px;
      margin-bottom: 30px;
    }

    .special-offer__offer-button {
      width: 200px;
      height: 66px;
      border-radius: 100px;
      font-size: 16px;
      line-height: 20px;
    }
  }
</style>
