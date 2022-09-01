<template>
  <section class="services-page">
    <h1 class="services-page__heading">
      Не просто доставка.
      <span class="services-page__highlight">Экспертная</span>
      логистика и снабжение.
    </h1>

    <ul class="services-page__list">
      <li v-for="(item, index) in items" :key="index">
        <h2 class="services-page__item-heading">{{ item.heading }}</h2>
        <p class="services-page__item-text">{{ item.text }}</p>
      </li>
    </ul>

    <ul class="services-page__cubes">
      <li class="services-page__secret-cube">
        <img
          class="services-page__cube-icon"
          src="@/assets/icons/coin-dollar.svg"
          alt="Иконка доллара"
        >
        <p class="services-page__secret-title">Без <br> предоплаты</p>
      </li>

      <li class="services-page__secret-cube">
        <img
          class="services-page__cube-icon"
          src="@/assets/icons/cargo.svg"
          alt="Иконка груза"
          width="62"
          height="62"
        >
        <p class="services-page__secret-title">Грузы <br> от 30кг</p>
      </li>

      <li class="services-page__secret-cube">
        <img
          class="services-page__cube-icon"
          src="@/assets/icons/calendar.svg"
          alt="Иконка календаря"
          width="62"
          height="62"
        >
        <p class="services-page__secret-title">Гарантия сроков поставки</p>
      </li>

      <li class="services-page__secret-cube">
        <img
          class="services-page__cube-icon"
          src="@/assets/icons/wallet.svg"
          alt="Иконка кошелька"
          width="62"
          height="62"
        >
        <p class="services-page__secret-title">Без скрытых платежей</p>
      </li>

      <li class="services-page__secret-cube">
        <img
          class="services-page__cube-icon-logo"
          src="@/assets/images/logo.png"
          alt="Логотип компании"
          width="130"
          height="32"
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
    items: [
      {
        heading: 'Доставка товаров из Китая',
        text: 'Осуществляем все виды перевозок от поставщика до вашего склада «под ключ»: авто, ж/д, морские и авиа. Исходя из Ваших задач предложим оптимальное решение по логистике. Забираем груз из любой точки в Китае. Заключаем договор и прописываем гарантии для обеспечения целостности груза в ходе поставки.'
      },
      {
        heading: 'Таможенное оформление',
        text: 'Помогаем с оформлением таможенной декларации. Наши специалисты своевременно проконтролируют все этапы процесса и проинформируют о возможных нюансах для беспроблемного прохождения таможенной очистки.'
      },
      {
        heading: 'Снабжение',
        text: 'Проведем все этапы закупки и проверки товара. Разговариваем на английском и китайских языках и знаем насколько детально нужно обсуждать тех.задание c поставщиком. При необходимости проверим и упакуем товар перед отгрузкой. Для соблюдения гарантийных обязательств поддерживаем необходимые контакты.'
      },
      {
        heading: 'Поиск и аудит поставщика',
        text: 'Сэкономим Ваше время на поиски поставщика. За долгое время работы с рынком Китая мы наладили надежные связи с производителями из разных производственных отраслей. Накопленный опыт поможет исключить посредников и сократить риски получения некачественной продукции от недобросовестных партнеров.'
      }
    ]
  })
}
</script>

<style>
.services-page {
  font-family: 'Montserrat';
  padding: 60px 10px 50px;
  color: #252827;
  max-width: 700px;
  margin: 0 auto;
}

.services-page__heading {
  font-family: 'Inter';
  font-size: 21px;
  line-height: 25px;
  font-weight: 700;
  text-transform: uppercase;
  max-width: 300px;
  margin-bottom: 50px;
}

.services-page__highlight {
  color: #67b2dd;
}

.services-page__list {
  display: grid;
  row-gap: 50px;
}

.services-page__item-heading {
  font-size: 14px;
  line-height: 18px;
  font-weight: 700;
  margin-bottom: 20px;
}

.services-page__item-text {
  font-size: 12px;
  line-height: 20px;
}

.services-page__cubes {
  display: none;
}

@media (min-width: 1218px) and (min-height: 750px) {
  .services-page {
    padding: 30px 40px 0 130px;
    max-width: 100%;
  }

  .services-page__heading {
    font-size: 40px;
    line-height: 48px;
    max-width: 580px;
    margin-bottom: 20px;
  }

  .services-page__list {
    grid-template-columns: repeat(2, minmax(0, 600px));
    row-gap: 10px;
    column-gap: 20px;
  }

  .services-page__item-heading {
    font-size: 18px;
    line-height: 24px;
    letter-spacing: -0.25px;
  }

  .services-page__item-text {
    font-size: 14px;
    letter-spacing: -0.25px;
  }

  .services-page__cubes {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .services-page__secret-cube {
    display: flex;
    flex-direction: column;
    padding-top: 75px;
    box-sizing: border-box;
    align-items: center;
    row-gap: 10px;
    width: 190px;
    height: 248px;
    background-image: url('~assets/images/cyan-cube.png');
  }

  .services-page__secret-cube:last-child {
    padding: 0;
    justify-content: center;
  }

  .services-page__secret-title {
    font-size: 15px;
    line-height: 16px;
    font-weight: 700;
    text-align: center;
    letter-spacing: -0.25px;
    text-transform: lowercase;
    max-width: 100px
  }

  .services-page__cube-icon {
    width: 62px;
    height: 62px;
  }

  .services-page__cube-icon-logo {
    width: 130px;
    height: 32px;
  }
}

@media (min-width: 1218px) and (min-height: 900px)  {
  .services-page {
    padding: 60px 40px 0 130px;
    max-width: 1200px;
  }

  .services-page__heading {
    margin-bottom: 50px;
  }

  .services-page__list {
    row-gap: 20px;
    column-gap: 40px;
  }
}
</style>
