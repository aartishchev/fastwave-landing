<template>
  <section class="company-team">
    <h1 class="company-team__header">
      Люди - наша ценность.
      <br>
      <span class="company-team__header-highlight">Мы работаем вместе</span>
    </h1>

    <ul class="company-team__list">
      <li v-for="(member, index) in team" :key="index">
        <img
          class="company-team__image"
          width="260"
          height="230"
          :src="require(`~/assets/images/${member.image}.jpg`)"
          alt="Фото участника команды"
        >
        <p class="company-team__name">{{ member.name }}</p>
      </li>
    </ul>

    <div class="company-team__social">
      <p class="company-team__offer">Свяжитесь с нами по телефону</p>
      <a class="company-team__telnumber" href="tel:84957951326">+7(495)7951326</a>
      <p class="company-team__working-time">С 9 до 18 МСК</p>
      <p class="company-team__or-phrase">или</p>
      <button class="company-team__offer-button">Оставить заявку</button>
    </div>

    <div class="company-team__contacts">
      <p>
        Почта:<a class="company-team__email" href="mailto:hello@fastwave.ru">hello@fastwave.ru</a>
      </p>
      <p class="company-team__messengers-wrapper">
        <span>Мессенджеры:</span>
        <a>
          <span class="sr-only">Ссылка на канал в Telegram</span>
          <img src="@/assets/images/telegram-link.svg" width="20" height="20" alt="Иконка Telegram">
        </a>
        <a>
          <span class="sr-only">Ссылка на канал в WhatsApp</span>
          <img src="@/assets/images/whatsapp-link.svg" width="20" height="20" alt="Иконка WhatsApp">
        </a>
      </p>
    </div>

    <p class="company-team__condition">
      Для обсуждения проектов мы предпочитаем личное общение,
      поэтому готовы приехать к вам или пригласить в наш офис по адресу:
      Москва Город,ул. Малая Семёновская, д. 30, офис 213а
    </p>
  </section>
</template>

<script>
export default {
  data: () => ({
    team: [
      {
        name: 'Влад Паршин',
        image: 'team-1'
      },
      {
        name: 'Алексей Артищев',
        image: 'team-2'
      },
      {
        name: 'Мурад Саидов',
        image: 'team-3'
      },
      {
        name: 'Татьяна Зефирова',
        image: 'team-4'
      }
    ]
  })
}
</script>

<style>
.company-team {
  padding: 60px 10px 50px;
  color: #252827;
}

.company-team__header {
  font-size: 26px;
  line-height: 30px;
  font-weight: 700;
  margin-bottom: 50px;
}

.company-team__header-highlight {
  color: #67b2dd;
}

.company-team__list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 40px;
  margin-bottom: 60px;
}

.company-team__image {
  width: 260px;
  height: 230px;
  margin-bottom: 16px;
}

.company-team__name {
  font-size: 16px;
  line-height: 24px;
  font-weight: 700;
  letter-spacing: -0.5px;
  text-align: center;
}

.company-team__social {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  text-align: center;
  row-gap: 10px;
  margin-bottom: 50px;
}

.company-team__offer {
  font-size: 14px;
  line-height: 20px;
  text-transform: uppercase;
}

.company-team__telnumber {
  font-size: 32px;
  line-height: 46px;
}

.company-team__working-time {
  font-size: 16px;
  line-height: 23px;
  font-weight: 600;
  color: #67b2dd;
  text-transform: uppercase;
}

.company-team__or-phrase {
  font-size: 14px;
  line-height: 20px;
  text-transform: uppercase;
}

.company-team__offer-button {
  width: 160px;
  height: 53px;
  display: block;
  margin: 0 auto;
  border: 1px solid #252827;
  border-radius: 80px;
  font-size: 13px;
  line-height: 16px;
  font-weight: 600;
  cursor: pointer;
}

.company-team__contacts {
  display: grid;
  row-gap: 5px;
  font-size: 12px;
  line-height: 20px;
  letter-spacing: -0.5px;
  color: #696969;
  margin-bottom: 30px;
}

.company-team__email {
  font-weight: 600;
  color: #252827;
  padding-left: 6px;
}

.company-team__messengers-wrapper {
  display: flex;
  align-items: center;
  column-gap: 8px;
}

.company-team__condition {
  font-size: 14px;
  line-height: 23px;
  letter-spacing: -0.5px;
}
</style>
