<script setup>
import { Icon } from "@iconify/vue";

defineProps({
  icon: String,
  title: String,
  styles: String,
});
</script>
<template>
  <button
    class="flex items-center px-6 h-12 rounded-full shadow-2xl hover:opacity-90 transition-opacity mr-2"
    :class="[styles]"
  >
    <Icon :icon="icon" :height="20" color="white" class="mr-1" />
    <span class="font-bold">{{ title }}</span>
  </button>
</template>
