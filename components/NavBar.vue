<template>
  <nav class="nav-wrapper">
    <a
      v-for="(item, index) in navItems"
      :key="index"
      class="nav-item"
      :title="item.description"
    >
      <span class="sr-only">{{ item.description }}</span>
    </a>
  </nav>
</template>

<script>
export default {
  data: () => ({
    navItems: [
      {
        description: 'Главная страница',
        componentName: 'StartSection'
      },
      {
        description: 'Описания услуг',
        componentName: 'ServicesSection'
      },
      {
        description: 'Профильное предложение',
        componentName: 'ProfileOffer'
      },
      {
        description: 'Специальное предложение',
        componentName: 'SpecialOffer'
      },
      {
        description: 'О компании',
        componentName: 'CompanyDescription'
      }
    ]
  })
}
</script>

<style>
.nav-wrapper {
  display: grid;
  justify-items: center;
  row-gap: 15px;
}

.nav-item {
  width: 0;
  height: 0;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-top: 12px solid #01f1fe;
  border-bottom: 0;
}
</style>
