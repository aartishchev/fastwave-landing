<template>
  <section class="company-description">
    <div class="company-description__centering-wrapper">
      <h1 class="company-description__heading">
        Компания FASTWA<span class="company-description__heading-highlight">V</span>E сегодня
      </h1>

      <p class="company-description__definition">
        FASTWAVE – логистическая компания,
        которая предлагает комплексные решения по работе с поставщикамии доставке грузов из Китая
      </p>

      <div class="company-description__content-wrapper">
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
          <a
            class="company-description__about"
            href="https://vk.com/fastwave_logistics"
            target="_blank"
          >
            хотим быть полезными
          </a>
          <div class="company-description__divider" />
        </div>
        <ul class="company-description__images-list">
          <li v-for="(image, index) in descriptionImages" :key="index">
            <div class="company-description__images-item">
              <a
                class="company-description__link"
                href="https://vk.com/fastwave_logistics"
                target="_blank"
              >
                Подробнее
              </a>
              <img
                class="company-description__image"
                :width="isDesktopLayout ? 205 : 300"
                :height="isDesktopLayout ? 158 : 232"
                :src="require(`~/assets/images/${image}.jpg`)"
                alt="фото команды"
              >
            </div>
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
    margin: 0 auto;
    max-width: 934px;
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

  .company-description__definition {
    font-size: 14px;
    line-height: 24px;
    font-weight: 700;
    letter-spacing: -0.5px;
    max-width: 540px;
    margin-bottom: 40px;
  }

  .company-description__content-wrapper {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 50px;
    row-gap: 40px;
    column-gap: 76px;
  }

  .company-description__story {
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
    max-width: 540px;
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

  .company-description__about:hover {
    opacity: 0.5;
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
    display: flex;
    flex-wrap: wrap;
    gap: 17px;
    justify-content: center;
  }

  .company-description__images-item {
    position: relative;
    width: 300px;
    height: 232px;
    overflow: hidden
  }

  .company-description__images-item:hover .company-description__link {
    display: block;
  }

  .company-description__images-item:hover .company-description__image {
    transform: scale(1.25);
    filter: grayscale(35%);
    transition: transform 0.8s ease-in-out;
  }

  .company-description__link {
    display: none;
    position: absolute;
    z-index: 10;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 3px solid #ffffff;
    padding: 10px 20px;
  }

  .company-description__link:hover {
    background-color: #75b5e1;
  }

  .company-description__image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s;
  }

  @media (min-width: 1218px) and (min-height: 750px) {
    .company-description {
      padding: 60px 40px 0px 130px;
    }

    .company-description__centering-wrapper {
      max-width: 1200px;
    }

    .company-description__heading {
      font-size: 40px;
      line-height: 48px;
      margin-bottom: 40px;
    }

    .company-description__definition {
      font-size: 17px;
      line-height: 26px;
      margin-bottom: 32px;
    }

    .company-description__content-wrapper {
      row-gap: 32px;
      margin-bottom: 80px;
      max-width: 960px;
      justify-content: space-between;
    }

    .company-description__story {
      font-size: 13px;
      line-height: 22px;
      grid-column-start: 1;
      max-width: 680px;
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
      column-gap: 22px;
    }

    .company-description__images-item {
      width: 205px;
      height: 158px;
    }
  }

  @media (min-width: 1218px) and (min-height: 900px)  {
    .company-description__story {
      max-width: 540px;
    }
  }
</style>
