<template>
  <section class="company-description">
    <h1 class="company-description__heading">
      Компания FASTWA<span class="company-description__heading-highlight">V</span>E сегодня
    </h1>

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

    <p class="company-description__offer">Читайте нас в VK</p>
    <span class="company-description__about">работаем более 5 лет</span>
    <hr class="company-description__divider">

    <ul class="company-description__images-list">
      <li v-for="(image, index) in descriptionImages" :key="index">
        <img
          class="company-description__image-item"
          width="300"
          height="232"
          :src="require(`~/assets/images/${image}.jpg`)"
          alt="фото команды"
        >
      </li>
    </ul>
  </section>
</template>

<script>
export default {
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
    padding: 60px 10px;
    background-color: #75b5e1;
    color: white;
  }

  .company-description__heading {
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
    margin-bottom: 40px;
  }

  .company-description__story {
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
    margin-bottom: 40px;
  }

  .company-description__features-list {
    display: grid;
    row-gap: 34px;
    margin-bottom: 50px;
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

  .company-description__offer {
    font-size: 40px;
    line-height: 48px;
    font-weight: 700;
    margin-bottom: 35px;
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
    background-image: url('~assets/images/vk-white.svg');;
  }

  .company-description__divider {
    width: 260px;
    height: 1px;
    background-color: white;
    border: none;
    margin-top: 15px;
    margin-bottom: 30px;
  }

  .company-description__images-list {
    display: flex;
    flex-wrap: wrap;
    gap: 17px;
  }

  .company-description__image-item {
    width: 300px;
    height: 232px;
  }
</style>
