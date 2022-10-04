<template>
  <section class="modal-form">
    <h1 class="modal-form__heading">Написать нам</h1>
    <form class="modal-form__form" action="">
      <input class="modal-form__text-input" type="text" placeholder="Ваше имя">
      <input class="modal-form__text-input" type="text" placeholder="Ваш телефон">
      <input class="modal-form__text-input" type="text" placeholder="Ваш E-mail">
      <div>
        <input
          id="checkbox-accepted"
          class="modal-form__checkbox sr-only"
          type="checkbox"
          name="checkbox-accepted"
          value="accepted"
          checked
        >
        <label class="modal-form__label" for="checkbox-accepted">
          Я соглашаюсь с политикой конфиденциальности
        </label>
      </div>
      <button type="submit">Отправить</button>
    </form>
  </section>
</template>

<script>
export default {

}
</script>

<style>
.modal-form {
  max-width: 360px;
  padding: 60px 30px 40px;
  box-sizing: border-box;
  background-color: white;
  border-radius: 10px;
  color: #252827;
}

.modal-form__heading {
  font-size: 32px;
  line-height: 38px;
  font-weight: 700;
  text-align: center;
  margin-bottom: 30px;
}

.modal-form__form {
  display: grid;
  row-gap: 10px;
}

.modal-form__text-input {
  height: 50px;
  padding: 0 15px;
  border: 1px solid #67b2dd;
  color: inherit;
  box-sizing: border-box;
  border-radius: 5px;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  outline: none;
}

.modal-form__text-input::placeholder {
  color: inherit;
}

</style>
