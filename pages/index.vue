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
        layoutBackground: 'linear-gradient(180deg, #77B7E3 0%, #4098CA 100%)',
        navItemsColor: '#9ecbe7'
      },
      {
        componentName: 'ServicesSection',
        description: 'Описания услуг',
        layoutBackground: 'white',
        navItemsColor: '#f0f0f0'
      },
      {
        componentName: 'ProfileOffer',
        description: 'Профильное предложение',
        layoutBackground: 'white',
        navItemsColor: '#f0f0f0'
      },
      {
        componentName: 'SpecialOffer',
        description: 'Специальное предложение',
        layoutBackground: '#252827',
        navItemsColor: '#6d6f6e'
      },
      {
        componentName: 'CompanyDescription',
        description: 'О компании',
        layoutBackground: '#75b5e1',
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
  grid-template-columns: 86px 1fr 86px;
}

.application__header {
  margin: auto;
}

.application__dynamic-content {
  height: 100vh;
}
</style>
