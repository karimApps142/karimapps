<script setup>
import { useDrawerStore } from "@/store/drawer";
import { router } from "@inertiajs/vue3";

const store = useDrawerStore();

const MenuItems = [
  {
    name: "Dashboard",
    route: "dashboard",
    icon: "mdi-view-dashboard",
  },
  {
    name: "Projects",
    route: "projects",
    icon: "mdi-apps",
  },
  {
    name: "Settings",
    route: "settings",
    icon: "mdi-cog",
  },
];

const navigate = (routeName) => {
  router.get(route(routeName));
};
</script>

<template>
  <v-navigation-drawer v-model="store.drawer" permanent>
    <div class="h-24 flex items-center">
      <v-list-item
        prepend-avatar="https://randomuser.me/api/portraits/men/78.jpg"
        title="John Leider"
      ></v-list-item>
    </div>

    <v-divider></v-divider>

    <v-list density="compact" nav>
      <v-list-item
        v-for="menu in MenuItems"
        :key="menu.name"
        :prepend-icon="menu.icon"
        :title="menu.name"
        :value="menu.name"
        @click="() => navigate(menu.route)"
      ></v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>
