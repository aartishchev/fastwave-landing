<template>
  <section class="special-offer">
    <h1 class="special-offer__heading">Майнеры – наша страсть!</h1>
    <p class="special-offer__description">Официальные поставки майнеров по дилерским ценам</p>
    <p class="special-offer__detail">
      Доставка и растаможка Асиков из Китая сложный процесс.
      Их ввоз осуществляется по особой схеме и требует подготовки большой сопроводительной документации.
      Мы снимем головную боль и избавим Вас от лишних расходов на таможне.
      Привезем Вам оборудование в кратчайшие сроки с полным пакетом документов
    </p>
    <div class="special-offer__image-wrapper">
      <img
        class="special-offer__image"
        src="~/assets/images/mining.jpg"
        alt="Картинка оборудования для майнинга"
        width="200"
        height="200"
      >
      <p class="special-offer__image-description">
        Популярные модели
      </p>
    </div>
    <p class="special-offer__offer-question">
      Хотите получить лучшие условия по доставке майнинг оборудования из Китая?
    </p>
    <button class="special-offer__offer-button">
      Узнать цену
    </button>
  </section>
</template>

<style>
  .special-offer {
    padding: 60px 10px 50px;
    background-color: #252827;
  }

  .special-offer__heading {
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
    margin-bottom: 50px;
  }

  .special-offer__image-wrapper {
    text-align: center;
    margin-bottom: 50px;
  }

  .special-offer__image {
    width: 200px;
    height: 200px;
  }

  .special-offer__image-description {
    position: relative;
    top: -10px;
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
    display: block;
    width: 160px;
    height: 53px;
    margin: 0 auto;
    background-color: white;
    opacity: 80%;
    border-radius: 80px;
    font-size: 13px;
    line-height: 16px;
    font-weight: 700;
    color: #252827;
    cursor: pointer;
  }
</style>
