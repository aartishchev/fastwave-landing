<template>
  <section class="modal-form">
    <h1 class="modal-form__heading">Написать нам</h1>

    <form action="#" class="modal-form__form" @submit.prevent="submitForm">
      <input
        v-model="formData.name"
        class="modal-form__text-input"
        type="text"
        placeholder="Ваше имя"
        maxlenth="50"
      >
      <input
        v-model="formData.phone"
        class="modal-form__text-input"
        type="text"
        placeholder="Ваш телефон"
        maxlenth="50"
      >
      <input
        v-model="formData.email"
        class="modal-form__text-input"
        type="text"
        placeholder="Ваш E-mail"
        maxlenth="50"
      >

      <div>
        <input
          id="checkbox-accepted"
          v-model="acceptance"
          class="modal-form__checkbox sr-only"
          type="checkbox"
          name="checkbox-accepted"
          value="accepted"
        >
        <label class="modal-form__label" for="checkbox-accepted">
          Я соглашаюсь с политикой конфиденциальности
        </label>
      </div>

      <button
        class="modal-form__submit-button"
        type="submit"
        :disabled="!isValid"
      >
        Отправить
      </button>
    </form>

    <button class="modal-form__close-button" @click="$emit('close-form-modal')">
      <span class="sr-only">Закрыть модальное окно</span>
    </button>
  </section>
</template>

<script>
export default {
  emits: ['close-form-modal'],
  data () {
    return {
      formData: {
        name: '',
        phone: '',
        email: ''
      },
      acceptance: false
    }
  },
  computed: {
    isValid () {
      const areInputsFilled =
        this.formData.name.length ||
        this.formData.length ||
        this.formData.length

      return areInputsFilled && this.acceptance
    }
  },
  methods: {
    async submitForm () {
      const formData = new FormData()

      for (const [key, value] of Object.entries(this.formData)) {
        formData.append(key, value)
      }

      const response = await fetch('sendmail.php', {
        method: 'POST',
        body: formData
      })

      if (response.ok) {
        const result = await response.json()
        console.log(result)
      } else {
        const result = await response.json()
        console.log(result)
      }

      this.$emit('close-form-modal')
    }
  }
}
</script>

<style>
.modal-form {
  font-family: 'Montserrat';
  width: 320px;
  padding: 60px 30px 40px;
  box-sizing: border-box;
  background-color: white;
  border-radius: 10px;
  color: #252827;
  position: relative;
}

.modal-form__heading {
  font-family: 'Inter';
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
  font-family: 'Inter';
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

.modal-form__submit-button:hover {
  opacity: 0.5;
}

.modal-form__submit-button:disabled {
  opacity: 0.5;
  cursor: not-allowed;
}

.modal-form__close-button {
  position: absolute;
  width: 20px;
  height: 20px;
  top: 20px;
  right: 20px;
  transform: rotate(45deg);
}

.modal-form__close-button:hover {
  opacity: 0.5;
}

.modal-form__close-button::before, .modal-form__close-button::after {
  content: '';
  position: absolute;
  top: 0;
  width: 2px;
  height: 100%;
  background-color: #174c6b;
}

.modal-form__close-button::after {
  transform: rotate(90deg);
}

@media (min-width: 1218px) {
  .modal-form {
    width: 360px;
  }
}
</style>
