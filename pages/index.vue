<template>
  <section class="index-page">
    <header class="index-page__header">
      <img
        class="index-page__logo"
        src="@/assets/images/mobile_logo.jpg"
        width="80"
        height="20"
        alt="Логотип"
      >
      <div class="index-page__social">
        <a>
          <span class="sr-only">Ссылка на группу в VK</span>
          <img src="@/assets/images/vk-link.svg" width="20" height="20" alt="Иконка VK">
        </a>
        <a>
          <span class="sr-only">Ссылка на канал в Telegram</span>
          <img src="@/assets/images/telegram-link.svg" width="20" height="20" alt="Иконка Telegram">
        </a>
        <a class="index-page__social-telnumber" href="tel:84957951326">+7(495)7951326</a>
      </div>
    </header>
    <main>
      <h1 class="index-page__heading">Безопасная доставка любых грузов из Китая за 7-30 дней</h1>
      <!-- <p class="index-page__top-text">Ответственность. Надежность. Оперативность</p> -->
      <p class="index-page__description">Организуем весь спектр логистических услуг с полной страховкой</p>
    </main>
    <!-- <section>
      <h1>Не просто доставка. Экспертная логистика и снабжение</h1>
      <ul>
        <li>
          <h2>Доставка товаров из Китая</h2>
          <p>Осуществляем все виды перевозок от поставщика до вашего склада «под ключ»: авто, ж/д, морские и авиа. Исходя из Ваших задач предложим оптимальное решение по логистике. Забираем груз из любой точки в Китае. Заключаем договор и прописываем гарантии для обеспечения целостности груза в ходе поставки.</p>
        </li>
        <li>
          <h2>Таможенное оформление</h2>
          <p>Помогаем с оформлением таможенной декларации. Наши специалисты своевременно проконтролируют все этапы процесса и проинформируют о возможных нюансах для беспроблемного прохождениятаможенной очистки.</p>
        </li>
        <li>
          <h2>Снабжение</h2>
          <p>Проведем все этапы закупки и проверки товара. Разговариваем на английском и китайских языках и знаем насколько детально нужно обсуждать тех.задание c поставщиком. При необходимости проверим и упакуем товар перед отгрузкой. Для соблюдения гарантийных обязательств поддерживаем необходимые контакты.</p>
        </li>
        <li>
          <h2>Поиск и аудит поставщика</h2>
          <p>Сэкономим Ваше время на поиски поставщика. За долгое время работы с рынком Китая мы наладили надежные связи с производителями из разных производственных отраслей. Накопленный опыт поможет исключить посредников и сократить риски получения некачественной продукции от недобросовестных партнеров.</p>
        </li>
      </ul>
    </section>
    <section>
      <h1>Открой свой маркет в городе</h1>
      <p>Предлагаем комплекс услуг для предпринимателей, которые только начинают или уже активно сотрудничают c основными отечественными маркетплейсами</p>
      <p>Мы не предлагаем что-то уникальное. Мы объединили необходимые услуги, которые действительно работают и оптимизировали их под Ваши задачи</p>
      <ul>
        <li>Производство товаров под вашим брендом</li>
        <li>
          <p>Оплата товара</p>
          <p>Переведем деньги поставщику в течении суток. Предоставляем все необходимые документы</p>
        </li>
        <li>Привезем по земле, воздуху или морю</li>
        <li>Личный менеджер</li>
        <li>Проверка товара</li>
        <li>Страхование</li>
      </ul>
      <h2>Партнёры</h2>
      <ul>
        <li>wb</li>
        <li>ozon</li>
        <li>yandex</li>
        <li>sber</li>
        <li>ali</li>
        <li>avito</li>
      </ul>
    </section> -->
  </section>
</template>

<script>
export default {
  name: 'IndexPage',
  layout: 'DefaultLayout'
}
</script>

<style>
.index-page {
  background: linear-gradient(180deg, #77B7E3 0%, #4098CA 100%);
  padding: 20px 10px;
  color: white;
}

.index-page__header {
  display: flex;
  justify-content: space-between;
}

.index-page__logo {
  width: 80px;
  height: 20px;
}

.index-page__social {
  display: grid;
  grid-template-columns: 1fr auto;
  gap: 10px;
  justify-items: end;
}

.index-page__social-telnumber {
  grid-column: 1 / 3;
  color: inherit;
  font-size: 16px;
  line-height: 23px;
  font-weight: 600;
}

.index-page__heading {
  font-size: 32px;
  line-height: 38px;
  font-weight: 700px;
}

.index-page__top-text {
  font-size: 12px;
  line-height: 15px;
  font-weight: 500px;
}

.index-page__description {
  font-size: 20px;
  line-height: 29px;
}
</style>
