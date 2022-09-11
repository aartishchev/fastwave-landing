<template>
  <section class="index-page">
    <header class="index-page__header">
      <img
        class="index-page__logo"
        src="@/assets/images/mobile-logo.jpg"
        width="80"
        height="20"
        alt="Логотип"
      >
      <div class="index-page__social">
        <a class="index-page__social-link">
          <span class="sr-only">Ссылка на группу в VK</span>
          <img src="@/assets/images/vk-link.svg" width="20" height="20" alt="Иконка VK">
        </a>
        <a class="index-page__social-link">
          <span class="sr-only">Ссылка на канал в Telegram</span>
          <img src="@/assets/images/telegram-link.svg" width="20" height="20" alt="Иконка Telegram">
        </a>
        <a class="index-page__social-telnumber" href="tel:84957951326">+7(495)7951326</a>
      </div>
    </header>

    <main>
      <h1 class="index-page__heading">Безопасная доставка любых грузов из Китая за 7-30 дней</h1>
      <!-- <p>Ответственность. Надежность. Оперативность</p> -->
      <p class="index-page__description">Организуем весь спектр логистических услуг с полной страховкой</p>
      <button class="index-page__contact-button">Перезвоните мне</button>
    </main>
  </section>
</template>

<script>
export default {
  name: 'StartSection',
  layout: 'DefaultLayout'
}
</script>

<style>
.index-page {
  background: linear-gradient(180deg, #77B7E3 0%, #4098CA 100%);
  padding: 20px 10px;
  color: white;
  min-height: 705px;
  box-sizing: border-box;
}

.index-page__header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 30px;
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

.index-page__social-link {
  width: 20px;
  height: 20px;
}

.index-page__social-telnumber {
  grid-column: 1 / 3;
  font-size: 16px;
  line-height: 23px;
  font-weight: 600;
}

.index-page__heading {
  font-size: 32px;
  line-height: 38px;
  font-weight: 700px;
  margin-bottom: 30px;
}

.index-page__description {
  font-size: 16px;
  line-height: 23px;
  margin-bottom: 30px;
}

.index-page__contact-button {
  width: 160px;
  height: 58px;
  background-color: #a7cfe8;
  border-radius: 80px;
  font-size: 13px;
  line-height: 16px;
  font-weight: 700;
}
</style>
