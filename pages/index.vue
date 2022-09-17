<template>
  <div class="application">
    <header class="application__header">
      <NavBar />
    </header>

    <main class="application__main">
      <component :is="currentContent" />
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
  })
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

.application__main {
  height: 100vh;
}
</style>
