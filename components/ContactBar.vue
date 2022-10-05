<template>
  <section class="contact-bar">
    <h1 class="contact-bar__heading">Контакты</h1>

    <div class="contact-bar__social">
      <a class="contact-bar__social-link">
        <span class="sr-only">Ссылка на группу в VK</span>
        <img
          src="@/assets/icons/vk-link.svg"
          width="20"
          height="20"
          alt="Иконка VK"
        >
      </a>
      <a class="contact-bar__social-link">
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
    height: 100%;
    box-shadow: 2px 0px 29px rgba(14, 74, 106, 0.21);
    padding-top: 300px;
    padding-left: 15px;
    box-sizing: border-box;
  }

  .contact-bar__heading {
    font-size: 20px;
    line-height: 29px;
    color: #252827;
    font-weight: 400;
    text-transform: uppercase;
    transform-origin: top left;
    transform: rotate(270deg);
  }

  .contact-bar__social {
    display: grid;
    row-gap: 12px;
    margin-left: 5px;
    margin-top: 180px;
  }

  .contact-bar__social-link {
    width: 20px;
    height: 20px;
  }
</style>
