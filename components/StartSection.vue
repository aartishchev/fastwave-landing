<template>
  <section class="start-page">
    <div class="start-page__wrapper">
      <header class="start-page__header">
        <img
          class="start-page__logo"
          src="@/assets/images/logo-transparent.png"
          :width="isDesktopLayout ? 240 : 60"
          :height="isDesktopLayout ? 40 : 20"
          alt="Логотип"
        >
        <p v-if="isDesktopLayout" class="start-page__motto">
          Ответственность. Надежность. Оперативность.
        </p>
        <div v-else class="start-page__social">
          <a class="start-page__social-link" href="https://vk.com/fastwave_logistics">
            <span class="sr-only">Ссылка на группу в VK</span>
            <img
              src="@/assets/icons/vk-link.svg"
              width="20"
              height="20"
              alt="Иконка VK"
            >
          </a>
          <a class="start-page__social-link" href="https://t.me/s/fastwave_logistics">
            <span class="sr-only">Ссылка на канал в Telegram</span>
            <img
              src="@/assets/icons/telegram-link.svg"
              width="20"
              height="20"
              alt="Иконка Telegram"
            >
          </a>
          <a class="start-page__social-telnumber" href="tel:84957951326">
            +7(495)7951326
          </a>
        </div>
      </header>
      <main class="start-page__main">
        <h1 class="start-page__heading">
          Безопасная доставка любых грузов из Китая за 7-30 дней
        </h1>
        <p class="start-page__description">
          Организуем весь спектр логистических услуг с полной страховкой
        </p>
        <button
          class="start-page__contact-button"
          @click="$emit('open-form-modal')"
        >
          Перезвоните мне
        </button>
      </main>
    </div>
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
  emits: ['open-form-modal']
}
</script>

<style>
.start-page {
  font-family: 'Inter';
  padding: 20px 10px;
  color: white;
  background: linear-gradient(180deg, #77b7e3 0%, #4098ca 100%);
  position: relative;
}

.start-page__wrapper {
  min-height: 705px;
  background-image: url('~assets/images/bg-image.png');
  background-repeat: no-repeat;
  background-position: center bottom;
  background-size: 70%;
}

.start-page__header {
  display: flex;
  align-items: center;
  column-gap: 16px;
  margin-bottom: 30px;
}

.start-page__logo {
  width: 80px;
  height: 20px;
}

.start-page__social {
  display: grid;
  grid-template-columns: 1fr auto;
  gap: 10px;
  justify-items: end;
  margin-left: auto;
}

.start-page__social-link {
  width: 20px;
  height: 20px;
}

.start-page__social-link:hover {
  opacity: 0.5;
}

.start-page__social-telnumber {
  grid-column: 1 / 3;
  font-size: 16px;
  line-height: 23px;
  font-weight: 600;
}

.start-page__social-telnumber:hover {
  opacity: 0.5;
}

.start-page__heading {
  font-size: 32px;
  line-height: 38px;
  font-weight: 700;
  margin-bottom: 30px;
  max-width: 660px;
}

.start-page__description {
  font-size: 16px;
  line-height: 23px;
  margin-bottom: 30px;
  max-width: 460px;
}

.start-page__contact-button {
  width: 160px;
  height: 53px;
  background-color: #a7cfe8;
  border-radius: 80px;
  font-size: 13px;
  line-height: 16px;
  font-weight: 700;
}

.start-page__contact-button:hover {
    opacity: 0.5;
  }

@media (min-width: 1218px) {
  .start-page {
    padding: 40px 30px;
  }

  .start-page__wrapper {
    background-position: center right;
    background-size: 50%;
    min-height: 100%;
  }

  .start-page__header {
    margin-bottom: 80px;
  }

  .start-page__logo {
    width: 240px;
    height: 60px;
  }

  .start-page__motto {
    font-size: 12px;
    line-height: 16px;
    font-weight: 500;
  }

  .start-page__main {
    margin-left: 100px;
  }

  .start-page__heading {
    font-size: 48px;
    line-height: 58px;
    margin-bottom: 40px;
  }

  .start-page__description {
    font-size: 20px;
    line-height: 29px;
    margin-bottom: 46px;
  }

  .start-page__contact-button {
    width: 200px;
    height: 66px;
    border-radius: 100px;
    font-size: 16px;
    line-height: 19px;
  }
}
</style>
