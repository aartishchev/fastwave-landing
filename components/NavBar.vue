<template>
  <nav class="nav-wrapper">
    <a
      v-for="(item, index) in navItems"
      :key="index"
      :class="['nav-item', { 'nav-item--active': activeComponent === item.componentName }]"
      :title="item.description"
      @click="setContent(item.componentName)"
    >
      <span class="sr-only">{{ item.description }}</span>
    </a>
  </nav>
</template>

<script>
export default {
  props: {
    activeComponent: {
      type: String,
      required: true
    }
  },
  emits: ['setContent'],
  data: () => ({
    navItems: [
      {
        componentName: 'StartSection',
        description: 'Главная страница'
      },
      {
        componentName: 'ServicesSection',
        description: 'Описания услуг'
      },
      {
        componentName: 'ProfileOffer',
        description: 'Профильное предложение'
      },
      {
        componentName: 'SpecialOffer',
        description: 'Специальное предложение'
      },
      {
        componentName: 'CompanyDescription',
        description: 'О компании'
      }
    ]
  }),
  methods: {
    setContent (componentName) {
      this.$emit('setContent', componentName)
    }
  }
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
  border-top: 12px solid #9dcbe7;
  border-bottom: 0;
}

.nav-item--active {
  border-color: #01f1fe;
}
</style>
