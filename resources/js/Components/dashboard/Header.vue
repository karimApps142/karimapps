<script setup>
import { useDrawerStore } from "@/store/drawer";

const store = useDrawerStore();
</script>
<template>
  <v-app-bar color="primary" prominent>
    <v-app-bar-nav-icon
      variant="text"
      @click.stop="store.toggleDrawer"
    ></v-app-bar-nav-icon>

    <v-toolbar-title>My files</v-toolbar-title>

    <v-spacer></v-spacer>
  </v-app-bar>
</template>
