<template>
  <section class="services-page">
    <h1 class="services-page__heading">
      Не просто доставка.
      <span class="services-page__highlight">Экспертная</span>
      логистика и снабжение
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
  data: () => ({
    items: [
      {
        heading: 'Доставка товаров из Китая',
        text: 'Осуществляем все виды перевозок от поставщика до вашего склада «под ключ»: авто, ж/д, морские и авиа. Исходя из Ваших задач предложим оптимальное решение по логистике. Забираем груз из любой точки в Китае. Заключаем договор и прописываем гарантии для обеспечения целостности груза в ходе поставки.'
      },
      {
        heading: 'Таможенное оформление',
        text: 'Помогаем с оформлением таможенной декларации. Наши специалисты своевременно проконтролируют все этапы процесса и проинформируют о возможных нюансах для беспроблемного прохождениятаможенной очистки.'
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
  padding: 60px 10px 50px;
  color: #252827;
}

.services-page__heading {
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

.services-page__secret-cube {
  display: none;
}

@media (min-width: 768px) {
  .services-page {
    padding: 60px 40px 60px 130px;
  }

  .services-page__heading {
    font-size: 40px;
    line-height: 48px;
    max-width: 580px;
  }

  .services-page__list {
    grid-template-columns: repeat(2, minmax(0, 400px));
    row-gap: 40px;
    column-gap: 60px
  }

  .services-page__item-heading {
    font-size: 18px;
    line-height: 24px;
    letter-spacing: -1.5px;
  }

  .services-page__item-text {
    font-size: 14px;
    letter-spacing: -1.5px;
  }

  .services-page__cubes {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .services-page__secret-cube {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    row-gap: 10px;
    width: 190px;
    height: 248px;
    background-image: url('~assets/images/cyan-cube.png');
  }

  .services-page__secret-title {
    font-size: 15px;
    line-height: 16px;
    font-weight: 700;
    text-align: center;
    letter-spacing: -1.5px;
    text-transform: lowercase;
    max-width: 70px
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
</style>
