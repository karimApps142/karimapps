<script setup>
import Button from "@/Components/Button.vue";
import { Icon } from "@iconify/vue";
</script>

<template>
  <section
    class="flex items-center justify-evenly h-[calc(90vh-80px)] bg-transparent w-full px-10"
  >
    <div
      class="flex-1 max-w-[550px] h-[300px] shadow-[0px_2px_15px_2px_rgba(0,0,0,0.56)] bg-white rounded-2xl overflow-hidden mx-10"
    >
      <img
        src="https://storage.googleapis.com/byprogrammers/image/e-commerce-app.png"
        class="h-full w-full object-fill"
      />
    </div>
    <div
      class="flex-1 max-w-[550px] mx-10 text-white flex flex-col items-center justify-center"
    >
      <h4 class="text-4xl">E-Commerce App</h4>
      <p class="text-2xl font-bold my-2">REACT NATIVE</p>
      <span class="text-base">( 41 screens ) </span>
      <div class="mt-5 text-lg flex items-center">
        <Icon class="mr-1" icon="mdi-scale-balance" :height="20" color="white" />
        <span> License (EULA)</span>
      </div>
      <div class="my-2 flex items-center my-3">
        <Button icon="mdi-facebook" title="Buy (USD 4.00$)" styles="bg-black" />
        <Button icon="mdi-twitter" title="Buy (USD 4.00$)" styles="bg-red-500" />
      </div>
      <p class="p-4 bg-black text-white text-base rounded-xl">
        Note: By purchasing this source code, you'll be invited to a Discord private
        channel via an email within 24 hours where you can ask us any questions related to
        this particular project.
      </p>
    </div>
  </section>
</template>
