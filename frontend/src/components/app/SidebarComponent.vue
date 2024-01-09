<template>
  <ul class="sidenav app-sidenav open">
    <router-link
      v-for="link in links"
      :key="link.url"
      :to="{ path: link.path }"
      active-class="active"
    >
      <li>
        <a href="#" class="waves-effect waves-orange pointer">{{
          link.title
        }}</a>
      </li>
    </router-link>
  </ul>
</template>

<script>
export default {
  data: () => ({
    links: [
      { url: "home", path: "/", title: "Главная" },
      { url: "register", path: "/register", title: "Регистрация" },
    ],
  }),
};
</script>
