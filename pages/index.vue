<template>
  <div class="application">
    <header class="application__header">
      <NavBar
        :active-component="currentContent"
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
      'StartSection',
      'ServicesSection',
      'ProfileOffer',
      'SpecialOffer',
      'CompanyDescription'
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
