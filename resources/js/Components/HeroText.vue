<script setup>
import Typed from "typed.js";
import { onMounted, ref } from "vue";

const typing = ref(null);

onMounted(() => {
  new Typed(typing.value, {
    strings: [
      "Mobile Apps",
      "Websites",
      "Web Apps",
      "Software",
      "E-commerce",
      "Cloud Solutions",
      "UX/UI",
      "Prototypes",
      "Games",
      "Integrations",
      "API",
      "Databases",
      "Platforms",
      "Automation",
      "AI",
    ],
    typeSpeed: 20,
    backSpeed: 10,
    backDelay: 1500,
    loop: true,
  });
});
</script>

<template>
  <div class="flex flex-col items-center justify-center h-[calc(80vh-80px)]">
    <h1 class="text-gray-300 font-serif font-bold text-[65px] text-center leading-[80px]">
      Creating Impactful <br />
      Technology Solution
    </h1>

    <h3
      ref="typing"
      class="h-24 mt-2 bg-red-600 p-2 rounded text-white capitalize font-serif font-bold text-[70px] text-center leading-[80px] word"
    ></h3>
  </div>
</template>
