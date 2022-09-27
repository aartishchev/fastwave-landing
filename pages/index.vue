<template>
  <div class="application">
    <header v-if="isDesktopLayout" class="application__header">
      <NavBar
        :active-component="currentContent"
        :nav-items="contentOptions"
        @set-content="setCurrentContent"
      />
    </header>

    <main class="application__main">
      <component
        :is="currentContent"
        v-if="isDesktopLayout"
        :is-desktop-layout="isDesktopLayout"
        class="application__dynamic-content"
      />
      <component
        :is="component.componentName"
        v-for="(component, index) in contentOptions"
        v-else
        :key="index"
      />
    </main>

    <footer v-if="isDesktopLayout" class="application__footer" />
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
  data: () => ({
    MIN_DESKTOP_VIEWPORT_WIDTH: 1218,
    currentClientWidth: 0,
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
  computed: {
    isDesktopLayout () {
      return this.currentClientWidth >= this.MIN_DESKTOP_VIEWPORT_WIDTH
    }
  },
  mounted () {
    this.setWindowSize()
    window.addEventListener('resize', this.setWindowSize)
  },
  beforeUnmount () {
    window.removeEventListener('resize', this.setWindowSize)
  },
  methods: {
    setCurrentContent (componentName) {
      this.currentContent = componentName
    },
    setWindowSize () {
      this.currentClientWidth = window.innerWidth
    }
  }
}
</script>

<style>
.application {
  height: 100vh;
  min-width: 320px;
  display: grid;
  position: relative;
}

.application__header {
  position: absolute;
  left: 37px;
  top: 50%;
  transform: translateY(-50%);
}

.application__dynamic-content {
  min-height: 100vh;
  box-sizing: border-box;
}

@media (min-width: 1218px) {
  .application {
    grid-template-columns: 1fr 86px;
  }
}
</style>
