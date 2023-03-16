<script setup>
import { ref } from "vue";
import Header from "@/Components/dashboard/Header.vue";
import Menu from "@/Components/dashboard/Menu.vue";
const drawer = ref(false);
</script>

<template>
  <v-layout>
    <Menu />
    <Header />
    <v-main style="height: 500px">
      <v-card-text>
        The navigation drawer will appear from the bottom on smaller size screens.
      </v-card-text>
    </v-main>
  </v-layout>
  <!-- <Link
    :href="route('logout')"
    method="post"
    as="button"
    class="underline text-blue-400 font-bold font-serifhover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
  >
    Logout
  </Link> -->
</template>
