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
</style>
