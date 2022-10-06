<template>
  <section class="company-description">
    <div class="company-description__centering-wrapper">
      <h1 class="company-description__heading">
        Компания FASTWA<span class="company-description__heading-highlight">V</span>E сегодня
      </h1>
      <div class="company-description__content-wrapper">
        <p class="company-description__definition">
          FASTWAVE – логистическая компания,
          которая предлагает комплексные решения по работе с поставщикамии доставке грузов из Китая
        </p>
        <p class="company-description__story">
          Мы начали бизнес в 2017 году с одной задачи -
          предлагать индивидуальные решения в сфере международной логистики и ВЭД.
          Со временем к нашему проекту присоединились специалисты с богатым опытом работы
          с китайскими поставщиками и понимаем особенностей менталитета этой страны.
          Мы развивались с ними и благодаря их экспертизе в 2021 году решили сфокусироваться
          на доставке грузов из Китая, поиск поставщиков по этому направлению и развитие отношений с ними.
          Работая с нами, Вы получаете поддержку команды профессионалов которые работают
          в единой системе ценностей компании «Ответственность. Надежность. Оперативность»
        </p>
        <ul class="company-description__features-list">
          <li class="company-description__feature-item">работаем более 5 лет</li>
          <li class="company-description__feature-item">2 страны присутствия</li>
          <li class="company-description__feature-item">говорим на 3 языках</li>
          <li class="company-description__feature-item">c нами работать просто</li>
        </ul>
      </div>
      <div class="company-description__info-wrapper">
        <div class="company-description__offer-wrapper">
          <p class="company-description__offer">Читайте нас в VK</p>
          <span class="company-description__about">работаем более 5 лет</span>
          <hr class="company-description__divider">
        </div>
        <ul class="company-description__images-list">
          <li v-for="(image, index) in descriptionImages" :key="index">
            <img
              class="company-description__image-item"
              :width="isDesktopLayout ? 205 : 300"
              :height="isDesktopLayout ? 158 : 232"
              :src="require(`~/assets/images/${image}.jpg`)"
              alt="фото команды"
            >
          </li>
        </ul>
      </div>
    </div>
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
  data: () => ({
    descriptionImages: [
      'description-1',
      'description-2',
      'description-3'
    ]
  })
}
</script>

<style>
  .company-description {
    font-family: 'Montserrat';
    padding: 60px 10px;
    background-color: #75b5e1;
    color: white;
  }

  .company-description__centering-wrapper {
    max-width: 1200px;
    margin: 0 auto;
  }

  .company-description__heading {
    font-family: 'Inter';
    font-size: 24px;
    line-height: 29px;
    font-weight: 700;
    margin-bottom: 40px;
  }

  .company-description__heading-highlight {
    color: #00f2ff;
  }

  .company-description__content-wrapper {
    display: grid;
    row-gap: 32px;
    row-gap: 40px;
    margin-bottom: 50px
  }

  .company-description__definition {
    font-size: 14px;
    line-height: 24px;
    font-weight: 700;
    letter-spacing: -0.5px;
  }

  .company-description__story {
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
  }

  .company-description__features-list {
    display: grid;
    row-gap: 34px;
    margin-left: 25px;
  }

  .company-description__feature-item {
    font-size: 14px;
    line-height: 24px;
    letter-spacing: -0.5px;
    position: relative;
  }

  .company-description__feature-item::before {
    content: '';
    position: absolute;
    left: -24px;
    top: 5px;
    width: 0;
    height: 0;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-top: 12px solid #01f1fe;
    border-bottom: 0;
  }

  .company-description__info-wrapper {
    display: flex;
    flex-direction: column;
    row-gap: 30px;
  }

  .company-description__offer-wrapper {
    max-width: 260px;
  }

  .company-description__offer {
    font-family: 'Inter';
    font-size: 40px;
    line-height: 48px;
    font-weight: 700;
    margin-bottom: 22px;
  }

  .company-description__about {
    font-size: 12px;
    line-height: 20px;
    letter-spacing: -0.5px;
    padding-left: 30px;
    position: relative;
  }

  .company-description__about::before {
    content: '';
    position: absolute;
    left: 0;
    width: 20px;
    height: 20px;
    background-image: url('~assets/icons/vk-white.svg');
  }

  .company-description__divider {
    height: 1px;
    background-color: white;
    border: none;
    margin-top: 15px;
  }

  .company-description__images-list {
    display: grid;
    row-gap: 17px;
  }

  .company-description__image-item {
    width: 300px;
    height: 232px;
  }

  @media (min-width: 1218px) {
    .company-description {
      padding: 60px 40px 0px 130px;
    }

    .company-description__heading {
      font-size: 40px;
      line-height: 48px;
    }

    .company-description__content-wrapper {
      grid-template-columns: 540px auto;
      row-gap: 32px;
      column-gap: 70px;
      margin-bottom: 80px;
    }

    .company-description__definition {
      font-size: 17px;
      line-height: 26px;
      margin-bottom: 30px;
    }

    .company-description__story {
      font-size: 13px;
      line-height: 22px;
      grid-column-start: 1;
    }

    .company-description__features-list {
      row-gap: 34px;
      grid-column-end: -1;
    }

    .company-description__info-wrapper {
      flex-direction: row;
      column-gap: 40px;
    }

    .company-description__images-list {
      display: flex;
      column-gap: 22px;
    }

    .company-description__image-item {
      width: 205px;
      height: 158px;
    }
  }
</style>
