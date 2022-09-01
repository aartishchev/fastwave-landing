<template>
  <section class="company-team">
    <div class="company-team__centering-wrapper">
      <h1 class="company-team__header">
        Люди - наша ценность.
        <br>
        <span class="company-team__header-highlight">Мы работаем вместе.</span>
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

      <div class="company-team__wrapper">
        <div class="company-team__social">
          <p class="company-team__offer">Свяжитесь с нами по телефону</p>

          <div class="company-team__inside-wrapper">
            <a class="company-team__telnumber" href="tel:84951289659">+7(495)1289659</a>
            <p class="company-team__working-time">С 9 до 18 МСК</p>
          </div>

          <p class="company-team__or-phrase">или</p>

          <button class="company-team__offer-button" @click="$emit('open-form-modal')">
            Оставьте заявку
          </button>
        </div>
        <div>
          <div class="company-team__contacts">
            <p>
              Почта:<a class="company-team__email" href="mailto:hello@fastwave.ru">hello@fastwave.ru</a>
            </p>

            <p class="company-team__messengers-wrapper">
              <span>Мессенджеры:</span>
              <a
                class="company-team__social-link"
                href="https://vk.com/fastwave_logistics"
                target="_blank"
              >
                <span class="sr-only">Ссылка на группу в VK</span>
                <img
                  src="@/assets/icons/vk-link.svg"
                  width="20"
                  height="20"
                  alt="Иконка VK"
                >
              </a>
              <a
                class="company-team__social-link"
                href="https://t.me/s/fastwave_logistics"
                target="_blank"
              >
                <span class="sr-only">Ссылка на канал в Telegram</span>
                <img
                  src="@/assets/icons/telegram-link.svg"
                  width="20"
                  height="20"
                  alt="Иконка Telegram"
                >
              </a>
            </p>
          </div>
          <p class="company-team__condition">
            Для обсуждения проектов мы предпочитаем личное общение,
            поэтому готовы приехать к вам или пригласить в наш офис по адресу:
            <b>Москва, Семеновский переулок дом 6, офис 42</b>
          </p>
        </div>
      </div>

      <button
        class="company-team__close-button"
        @click="$emit('close-team-modal')"
        @keydown.esc="alert('close')"
      >
        <span class="sr-only">Закрыть окно с командой</span>
      </button>
    </div>
  </section>
</template>

<script>
export default {
  emits: ['close-team-modal', 'open-form-modal'],
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
  font-family: 'Inter';
  padding: 60px 10px 50px;
  color: #252827;
  box-shadow: 2px 0px 29px rgba(14, 74, 106, 0.21);
}

.company-team__centering-wrapper {
  max-width: 1200px;
  margin: 0 auto;
  position: relative;
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
  gap: 38px;
  margin-bottom: 60px;
}

.company-team__image {
  width: 260px;
  height: 230px;
  margin-bottom: 16px;
}

.company-team__name {
  font-family: 'Montserrat';
  font-size: 16px;
  line-height: 24px;
  font-weight: 700;
  letter-spacing: -0.5px;
  text-align: center;
}

.company-team__wrapper {
  display: flex;
  flex-direction: column;
}

.company-team__inside-wrapper {
  display: flex;
  flex-direction: column;
  row-gap: 10px;
}

.company-team__social {
  display: grid;
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

.company-team__telnumber:hover {
  opacity: 0.5;
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
  padding: 20px 25px;
  margin: 0 auto;
  border: 1px solid #252827;
  border-radius: 80px;
  font-size: 13px;
  line-height: 16px;
  font-weight: 600;
}

.company-team__offer-button:hover {
  background-color: rgba(103, 178, 221, 0.5);
}

.company-team__contacts {
  font-family: 'Montserrat';
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

.company-team__email:hover {
  opacity: 0.5;
}

.company-team__messengers-wrapper {
  display: flex;
  align-items: center;
  column-gap: 8px;
}

.company-team__social-link {
  width: 20px;
  height: 20px;
}

.company-team__social-link:hover {
  opacity: 0.5;
}

.company-team__condition {
  font-family: 'Montserrat';
  font-size: 14px;
  line-height: 23px;
  letter-spacing: -0.5px;
}

@media (min-width: 1218px) and (min-height: 750px) {
  .company-team {
    padding: 60px 30px 0px;
  }

  .company-team__header {
    font-size: 40px;
    line-height: 48px;
    margin-bottom: 50px;
  }

  .company-team__list {
    margin-bottom: 50px;
    justify-content: space-between;
  }

  .company-team__image {
    width: 260px;
    height: 230px;
    margin-bottom: 16px;
  }

  .company-team__wrapper {
    flex-direction: row;
    column-gap: 190px;
  }

  .company-team__inside-wrapper {
    display: flex;
    flex-direction: row;
    align-items: baseline;
    column-gap: 18px;
    margin-bottom: 10px;
  }

  .company-team__social {
    flex: none;
    text-align: left;
    margin-bottom: 0;
  }

  .company-team__offer-button {
    padding: 24px 30px;
    margin: 0;
    margin-right: auto;
    border-radius: 100px;
    font-size: 16px;
    line-height: 19px;
  }

  .company-team__contacts {
    margin: 40px 0;
  }

  .company-team__condition {
    font-size: 12px;
    line-height: 20px;
    letter-spacing: -0.5px;
    max-width: 480px;
  }

  .company-team__close-button {
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    transform: rotate(45deg);
  }

  .company-team__close-button:hover {
    opacity: 0.5;
  }

  .company-team__close-button::before, .company-team__close-button::after {
    content: '';
    position: absolute;
    top: 0;
    width: 2px;
    height: 100%;
    background-color: #252827;
  }

  .company-team__close-button::after {
    transform: rotate(90deg);
  }
}

@media (min-width: 1218px) and (min-height: 900px)  {
  .company-team__list {
    margin-bottom: 100px;
  }
}
</style>
