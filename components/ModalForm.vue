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
      <button class="modal-form__submit-button" type="submit">Отправить</button>
    </form>
  </section>
</template>

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

.modal-form__label {
  font-size: 12px;
  line-height: 17px;
  font-weight: 500;
  display: block;
  position: relative;
  max-width: 180px;
  padding-left: 40px;
  cursor: pointer;
}

.modal-form__label::before {
  content: '';
  position: absolute;
  width: 22px;
  height: 22px;
  top: 0px;
  left: 0px;
  border: 1px solid #67b2dd;
  box-sizing: border-box;
  border-radius: 5px;
}

.modal-form__checkbox:checked + .modal-form__label::before {
  background-color: #67b2dd;
}

.modal-form__checkbox:checked + .modal-form__label::after {
  content: '';
  position: absolute;
  left: 5px;
  top: 6px;
  width: 13px;
  height: 11px;
  background-image: url('~assets/icons/check.svg');
}

.modal-form__submit-button {
  width: 200px;
  height: 66px;
  color: white;
  background-color: #67b2dd;
  font-size: 16px;
  line-height: 20px;
  font-weight: 700;
  border-radius: 100px;
  margin-top: 10px;
}
</style>
