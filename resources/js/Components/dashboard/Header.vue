<script setup>
import { useDrawerStore } from "@/store/drawer";

const store = useDrawerStore();

const props = defineProps({
  title: {
    type: String,
    default: "Karimapps",
  },
});
</script>
<template>
  <v-app-bar color="background" prominent>
    <v-app-bar-nav-icon
      variant="text"
      @click.stop="store.toggleDrawer"
    ></v-app-bar-nav-icon>

    <v-toolbar-title>{{ props.title }}</v-toolbar-title>

    <v-spacer></v-spacer>

    <div class="mr-4">
      <v-btn elevation="5" icon="mdi-plus" @click="store.toggleDialog"></v-btn>
    </div>
  </v-app-bar>
</template>
