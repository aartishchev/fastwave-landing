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
  margin-bottom: 50px;
}

.services-page__highlight {
  color: #67b2dd;
}

.services-page__list {
  display: flex;
  min-width: 300px;
  flex-wrap: wrap;
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
</style>
