<template>
  <section class="profile-offer">
    <h1 class="profile-offer__heading">
      От<span class="profile-offer__highlight">к</span>рой
      свой м<span class="profile-offer__highlight">ар</span>кет в
      <span class="profile-offer__highlight">го</span>роде
    </h1>

    <div class="profile-offer__content-wrapper">
      <div class="profile-offer__text-wrapper">
        <p class="profile-offer__text">
          Предлагаем комплекс услуг для предпринимателей,
          которые только начинают или уже активно сотрудничают
          c основными отечественными маркетплейсами
        </p>

        <div class="profile-offer__divider" />

        <p class="profile-offer__description">
          Мы не предлагаем что-то уникальное. Мы объединили необходимые услуги,
          которые действительно работают и оптимизировали их под Ваши задачи
        </p>
      </div>
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
    </div>

    <h2 class="profile-offer__partners-heading">Партнёры</h2>

    <ul class="profile-offer__partners-list">
      <li v-for="(partner, index) in partnerItems" :key="index">
        <span class="sr-only">partner.name</span>
        <img
          class="profile-offer__partners-logo"
          :width="isDesktopLayout ? 124 : 86"
          :height="isDesktopLayout ? 124 : 86"
          :src="require(`~/assets/images/${partner.image}.jpg`)"
          :alt="partner.name"
        >
      </li>
    </ul>
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
    offerItems: [
      {
        text: 'Производство товаров под вашим брендом',
        detail: 'Найдем поставщика под производственные задачи и запустим OEM-производство под Вашей торговой маркой. Исключим посредников для сокращения расходов',
        image: require('~/assets/images/offer-bg1.jpg')
      },
      {
        text: 'Оплата товара',
        detail: 'Переведем деньги поставщику в течении суток. Предоставляем все необходимые документы',
        image: require('~/assets/images/offer-bg2.jpg')
      },
      {
        text: 'Привезем по земле, воздуху или морю',
        detail: 'Фиксируем ставку с момента заявки до получения на Вашем складе. Консолидируем Ваш груз с другими клиентами, чтобы Вы платили за товар, а не воздух',
        image: require('~/assets/images/offer-bg3.jpg')
      },
      {
        text: 'Личный менеджер',
        detail: 'Мы всегда на связи и общаемся на трех языках. Проконсультируем и поможем в переговорном процессе с поставщиком',
        image: require('~/assets/images/offer-bg4.jpg')

      },
      {
        text: 'Проверка товара',
        detail: 'Проверим продукцию на наличие брака, присвоим уникальный штрих-номер партии и упакуем товар согласно Вашим пожеланиям. Имеем складские комплексы в Китае и России',
        image: require('~/assets/images/offer-bg5.jpg')
      },
      {
        text: 'Страхование',
        detail: 'Несем ответственность за товар и отвечаем не только своей репутацией, но и деньгами',
        image: require('~/assets/images/offer-bg6.jpg')
      }
    ],
    partnerItems: [
      {
        name: 'Wildberries',
        image: 'partner-wb'
      },
      {
        name: 'Ozon',
        image: 'partner-ozon'
      },
      {
        name: 'Yandex market',
        image: 'partner-yandex'
      },
      {
        name: 'Sberbank market',
        image: 'partner-sber'
      },
      {
        name: 'Aliexpress',
        image: 'partner-ali'
      },
      {
        name: 'Avito',
        image: 'partner-avito'
      }
    ]
  })
}
</script>

<style>
.profile-offer {
  font-family: 'Montserrat';
  padding: 60px 10px 50px;
  max-width: 700px;
  margin: 0 auto;
}

.profile-offer__heading {
  font-family: 'Inter';
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

.profile-offer__content-wrapper {
  display: flex;
  justify-content: space-between;
  flex-direction: column;
  row-gap: 50px;
  margin-bottom: 80px;
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
}

.profile-offer__list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
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
  user-select: none;
}

.profile-offer__item::before {
  content: '';
  position: absolute;
  background-color: #67b2dd;
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
  opacity: 0.8;
}

.profile-offer__item:hover::before,
.profile-offer__item:focus::before,
.profile-offer__item:active::before {
  content: '';
  position: absolute;
  background-color: #2b739a;
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
  opacity: 0.8;
}

.profile-offer__definition {
  padding: 0 20px;
  z-index: 10;
}

.profile-offer__item:hover .profile-offer__definition,
.profile-offer__item:focus .profile-offer__definition,
.profile-offer__item:active .profile-offer__definition {
  display: none;
}

.profile-offer__detail {
  display: none;
  font-size: 16px;
  line-height: 21px;
  font-weight: 500;
  letter-spacing: -0.25px;
  padding: 0 10px;
  z-index: 10;
}

.profile-offer__item:hover .profile-offer__detail,
.profile-offer__item:focus .profile-offer__detail,
.profile-offer__item:active .profile-offer__detail {
  display: block;
}

.profile-offer__partners-heading {
  font-family: 'Inter';
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

.profile-offer__partners-logo {
  width: 86px;
  height: 86px;
}

@media (min-width: 1218px) and (min-height: 750px) {
  .profile-offer {
    padding: 30px 80px 0 130px;
    max-width: 100%;
  }

  .profile-offer__heading {
    font-size: 40px;
    line-height: 48px;
    margin-bottom: 35px;
  }

  .profile-offer__content-wrapper {
    flex-direction: row;
    column-gap: 60px;
    margin-bottom: 35px;
  }

  .profile-offer__text-wrapper {
    flex-grow: 1;
  }

  .profile-offer__text {
    font-size: 16px;
    line-height: 24px;
  }

  .profile-offer__description {
    font-size: 16px;
    line-height: 20px;
  }

  .profile-offer__list {
    flex: none;
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 0;
  }

  .profile-offer__item {
    width: 180px;
    height: 180px;
    font-size: 11px;
    line-height: 15px;
  }

  .profile-offer__detail {
    font-size: 11px;
    line-height: 15px;
  }

  .profile-offer__partners-list {
    gap: 30px;
  }

  .profile-offer__partners-heading {
    font-size: 40px;
    line-height: 48px;
    margin-bottom: 30px;
  }

  .profile-offer__partners-logo {
    width: 112px;
    height: 112px;
  }
}

@media (min-width: 1218px) and (min-height: 900px)  {
  .profile-offer {
    padding: 60px 80px 0 130px;
    max-width: 1200px;
  }

  .profile-offer__heading {
    margin-bottom: 70px;
  }

  .profile-offer__content-wrapper {
    margin-bottom: 100px;
  }

  .profile-offer__partners-heading {
    margin-bottom: 60px;
  }

  .profile-offer__partners-logo {
    width: 124px;
    height: 124px;
  }
}
</style>
