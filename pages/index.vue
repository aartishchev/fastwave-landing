<template>
  <div class="application">
    <header class="application__header">
      <NavBar
        :active-component="currentContent"
        :nav-items="contentOptions"
        @set-content="setCurrentContent"
      />
    </header>

    <main class="application__main">
      <component
        :is="currentContent"
        class="application__dynamic-content"
      />
    </main>

  <footer class="application__footer" />
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
  data: () => ({
    currentContent: 'StartSection',
    contentOptions: [
      {
        componentName: 'StartSection',
        description: 'Главная страница',
        navItemsColor: '#9ecbe7'
      },
      {
        componentName: 'ServicesSection',
        description: 'Описания услуг',
        navItemsColor: '#f0f0f0'
      },
      {
        componentName: 'ProfileOffer',
        description: 'Профильное предложение',
        navItemsColor: '#f0f0f0'
      },
      {
        componentName: 'SpecialOffer',
        description: 'Специальное предложение',
        navItemsColor: '#6d6f6e'
      },
      {
        componentName: 'CompanyDescription',
        description: 'О компании',
        navItemsColor: '#9dc3de'
      }
    ]
  }),
  methods: {
    setCurrentContent (componentName) {
      this.currentContent = componentName
    }
  }
}
</script>

<style>
.application {
  height: 100vh;
  min-width: 320px;
  display: grid;
  grid-template-columns: 1fr 86px;
  position: relative;
}

.application__header {
  position: absolute;
  left: 37px;
  top: 50%;
  transform: translateY(-50%);
}

.application__dynamic-content {
  height: 100vh;
}
</style>
