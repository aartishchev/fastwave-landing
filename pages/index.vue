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
      <template v-if="isDesktopLayout">
        <component
          :is="currentContent"
          class="application__dynamic-content"
          :is-desktop-layout="isDesktopLayout"
          @open-form-modal="openFormModal"
        />
        <CompanyTeam
          v-if="isTeamModalShown"
          class="application__team-modal"
          @close-team-modal="closeTeamModal"
          @open-form-modal="openFormModal"
        />
      </template>

      <template v-else>
        <component
          :is="component.componentName"
          v-for="(component, index) in contentOptions"
          :key="index"
          :is-desktop-layout="isDesktopLayout"
          @open-form-modal="openFormModal"
        />
        <CompanyTeam @open-form-modal="openFormModal" />
      </template>

      <div v-if="isFormModalShown" class="application__form-overlay">
        <ModalForm class="application__form-modal" @close-form-modal="closeFormModal" />
      </div>
    </main>

    <footer
      v-if="isDesktopLayout && !isTeamModalShown"
      class="application__footer"
      @click="openTeamModal"
    >
      <ContactBar />
    </footer>
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
  data: () => ({
    MIN_DESKTOP_VIEWPORT_WIDTH: 1218,
    currentClientWidth: 0,
    currentContent: 'StartSection',
    isTeamModalShown: false,
    isFormModalShown: false,
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
    document.addEventListener('keydown', this.onEscapeButton)
  },
  beforeUnmount () {
    window.removeEventListener('resize', this.setWindowSize)
    document.removeEventListener('keydown', this.onEscapeButton)
  },
  methods: {
    setCurrentContent (componentName) {
      this.currentContent = componentName
    },
    setWindowSize () {
      this.currentClientWidth = window.innerWidth
    },
    openTeamModal () {
      this.isTeamModalShown = true
    },
    closeTeamModal () {
      this.isTeamModalShown = false
    },
    openFormModal () {
      this.isFormModalShown = true
    },
    closeFormModal () {
      this.isFormModalShown = false
    },
    onEscapeButton (event) {
      if (event.key !== 'Escape') {
        return
      }

      if (this.isFormModalShown) {
        this.closeFormModal()
        return
      }

      if (this.isTeamModalShown) {
        this.closeTeamModal()
      }
    }
  }
}
</script>

<style>
.application {
  height: 100vh;
  min-width: 320px;
  display: grid;
}

.application__header {
  position: absolute;
  left: 37px;
  top: 50%;
  transform: translateY(-50%);
}

.application__main {
  position: relative;
}

.application__dynamic-content {
  height: 100%;
  box-sizing: border-box;
}

.application__form-modal {
  position: fixed;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.application__form-overlay {
  content: '';
  background-color: rgba(0, 54, 88, 0.51);
  position: absolute;
  top:0px;
  left:0px;
  width:100%;
  height:100%;
  z-index: 20;
}

@media (min-width: 1218px) {
  .application {
    grid-template-columns: 1fr auto;
    position: relative;
  }

  .application__header {
    z-index: 10;
  }

  .application__footer {
    cursor: pointer;
    width: 70px;
  }

  .application__team-modal {
    position: fixed;
    background-color: white;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 10;
  }

  .application__form-modal {
    position: absolute;
  }
}
</style>
