<template>
  <section class="contact-bar">
    <h1 class="contact-bar__heading">Контакты</h1>

    <div class="contact-bar__social">
      <a
        class="contact-bar__social-link"
        href="https://vk.com/fastwave_logistics"
        target="_blank"
        @click.stop
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
        class="contact-bar__social-link"
        href="https://t.me/s/fastwave_logistics"
        target="_blank"
        @click.stop
      >
        <span class="sr-only">Ссылка на канал в Telegram</span>
        <img
          src="@/assets/icons/telegram-link.svg"
          width="20"
          height="20"
          alt="Иконка Telegram"
        >
      </a>
    </div>
  </section>
</template>

<style>
  .contact-bar {
    font-family: 'Inter';
    position: relative;
    height: 100%;
    box-shadow: 2px 0px 29px rgba(14, 74, 106, 0.21);
    display: grid;
    align-items: center;
    grid-template-rows: repeat(3, 1fr);
  }

  .contact-bar__heading {
    position: absolute;
    top: 55%;
    left: 15px;
    font-size: 20px;
    line-height: 29px;
    color: #252827;
    font-weight: 400;
    text-transform: uppercase;
    transform-origin: top left;
    transform: rotate(270deg);
  }

  .contact-bar:hover .contact-bar__heading {
    font-weight: 700;
    top: 55.3%;
  }

  .contact-bar__social {
    display: grid;
    row-gap: 12px;
    margin-left: 20px;
    grid-row-start: 3;

  }

  .contact-bar__social-link {
    width: 20px;
    height: 20px;
  }

  .contact-bar__social-link:hover {
    opacity: 0.5;
  }
</style>
