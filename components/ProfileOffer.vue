<template>
  <section class="profile-offer">
    <h1 class="profile-offer__heading">
      От<span class="profile-offer__highlight">к</span>рой
      свой м<span class="profile-offer__highlight">ар</span>кет в
      <span class="profile-offer__highlight">го</span>роде
    </h1>

    <p class="profile-offer__text">
      Предлагаем комплекс услуг для предпринимателей, которые только начинают или уже активно сотрудничают c основными отечественными маркетплейсами
    </p>

    <hr class="profile-offer__divider">

    <p class="profile-offer__description">
      Мы не предлагаем что-то уникальное. Мы объединили необходимые услуги, которые действительно работают и оптимизировали их под Ваши задачи
    </p>

    <ul class="profile-offer__list">
      <li
        v-for="(item, index) in offerItems"
        :key="index"
        :style="{ backgroundImage: `url(${item.image})` }"
        class="profile-offer__item"
      >
        <p class="profile-offer__definition">{{ item.text }}</p>
        <p v-if="item.detail" class="profile-offer__detail">{{ item.detail }}</p>
      </li>
    </ul>

    <h2 class="profile-offer__partners-heading">Партнёры</h2>
    <ul class="profile-offer__partners-list">
      <li
        v-for="(partner, index) in partnerItems"
        :key="index"
        class="profile-offer__partners-item"
      >
        <span class="sr-only">partner.name</span>
        <img
          class="profile-offer__partners-item"
          width="86"
          height="86"
          :src="require(`~/assets/images/${partner.image}.jpg`)"
          :alt="partner.name"
        >
      </li>
    </ul>
  </section>
</template>

<script>
export default {
  data: () => ({
    offerItems: [
      {
        text: 'Производство товаров под вашим брендом',
        image: require('~/assets/images/offer-bg1.jpg')
      },
      {
        text: 'Оплата товара',
        detail: 'Переведем деньги поставщику в течении суток. Предоставляем все необходимые документы',
        image: require('~/assets/images/offer-bg2.jpg')
      },
      {
        text: 'Привезем по земле, воздуху или морю',
        image: require('~/assets/images/offer-bg3.jpg')
      },
      {
        text: 'Личный менеджер',
        image: require('~/assets/images/offer-bg4.jpg')

      },
      {
        text: 'Проверка товара',
        image: require('~/assets/images/offer-bg5.jpg')
      },
      {
        text: 'Страхование',
        image: require('~/assets/images/offer-bg6.jpg')
      }
    ],
    partnerItems: [
      {
        name: 'Wildberries',
        image: 'wb'
      },
      {
        name: 'Ozon',
        image: 'ozon'
      },
      {
        name: 'Yandex market',
        image: 'yandex'
      },
      {
        name: 'Sberbank market',
        image: 'sber'
      },
      {
        name: 'Aliexpress',
        image: 'ali'
      },
      {
        name: 'Avito',
        image: 'avito'
      }
    ]
  })
}
</script>

<style>
.profile-offer {
  padding: 60px 10px 50px;
}

.profile-offer__heading {
  font-size: 24px;
  line-height: 29px;
  font-weight: 700;
  text-transform: uppercase;
  color: #252827;
  margin-bottom: 50px;
}

.profile-offer__highlight {
  color: #67b2dd;
}

.profile-offer__text {
  color: #252827;
  font-size: 14px;
  line-height: 23px;
  font-weight: 700;
  letter-spacing: -0.25px;
  margin-bottom: 30px;
}

.profile-offer__divider {
  border: 2px solid #67b2dd;
  margin-bottom: 30px;
}

.profile-offer__description {
  color: #252827;
  font-size: 14px;
  line-height: 23px;
  letter-spacing: -0.25px;
  margin-bottom: 30px;
}

.profile-offer__list {
  display: flex;
  flex-direction: column;
  row-gap: 20px;
  align-items: center;
  margin-bottom: 80px;
}

.profile-offer__item {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 252px;
  height: 252px;
  font-size: 16px;
  line-height: 21px;
  font-weight: 700;
  letter-spacing: -0.25px;
  color: white;
  text-align: center;
}

.profile-offer__item::before {
  content: '';
  position: absolute;
  background-color: #67b2dd;
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
  opacity: 80%;
}

.profile-offer__item:nth-child(2):before {
  background-color: #2b739a;
}

.profile-offer__definition {
  z-index: 10;
}

.profile-offer__detail {
  margin-top: 30px;
  font-size: 16px;
  line-height: 21px;
  font-weight: 500;
  letter-spacing: -0.25px;
  z-index: 10;
}

.profile-offer__partners-heading {
  font-size: 24px;
  line-height: 29px;
  font-weight: 700;
  text-align: center;
  margin-bottom: 50px;
}

.profile-offer__partners-list {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
}

.profile-offer__partners-item {
  width: 86px;
  height: 86px;
}
</style>
