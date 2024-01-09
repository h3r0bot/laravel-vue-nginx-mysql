<template>
  <div class="app-main-layout">
    <NavbarComponent />

    <SidebarComponent />

    <main class="app-content">
      <div class="app-page">
        <router-view />
      </div>
    </main>
  </div>
</template>

<script>
import NavbarComponent from "../components/app/NavbarComponent.vue";
import SidebarComponent from "../components/app/SidebarComponent.vue";

export default {
  name: "main-layout",
  components: {
    NavbarComponent,
    SidebarComponent,
  },
};
</script>
