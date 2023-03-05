<script setup>
import { Icon } from "@iconify/vue";

const rightMenu = [
  {
    name: "youtube",
    icon: "mdi-youtube",
    url: "https://www.youtube.com/",
  },
  {
    name: "facebook",
    icon: "mdi-facebook",
    url: "https://www.facebook.com/",
  },
  {
    name: "instagram",
    icon: "mdi-instagram",
    url: "https://www.instagram.com/",
  },
  {
    name: "twitter",
    icon: "mdi-twitter",
    url: "https://www.twitter.com/",
  },
  {
    name: "github",
    icon: "mdi-github",
    url: "https://www.github.com/",
  },
];
</script>

<template>
  <div class="h-20 flex justify-between items-center px-10">
    <!-- logo  -->
    <div>
      <h2 class="text-white text-xl uppercase">Karimapps</h2>
    </div>

    <!-- right menu  -->
    <div class="flex justify-between items-center">
      <a
        v-for="menu in rightMenu"
        :key="menu.name"
        :href="menu.url"
        target="_blank"
        class="mx-2 p-1 rounded hover:bg-gray-600 cursor-pointer no-underline"
      >
        <Icon :icon="menu.icon" :height="30" color="white" />
      </a>
    </div>
  </div>
</template>
