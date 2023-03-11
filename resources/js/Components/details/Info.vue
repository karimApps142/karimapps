<script setup>
import { Icon } from "@iconify/vue";
defineProps({
  icon: String,
  title: String,
  subtitle: String,
});
</script>

<template>
  <div class="border-b flex items-center justify-between py-3 border-gray-600">
    <div class="flex items-center justify-center">
      <Icon class="mr-2" :icon="icon" :height="25" color="black" />
      <p class="text-black text-base uppercase font-bold">{{ title }}</p>
    </div>
    <span>{{ subtitle }}</span>
  </div>
</template>
