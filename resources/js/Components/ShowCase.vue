<script setup>
const data = [
  {
    image: "https://storage.googleapis.com/byprogrammers/image/e-commerce-app.png",
    title: "e-commerce-app",
  },
  {
    image: "https://storage.googleapis.com/byprogrammers/image/online-learning-app.png",
    title: "online-learning-app",
  },
  {
    image: "https://storage.googleapis.com/byprogrammers/image/food-delivery-app-1.png",
    title: "food-delivery-app",
  },
  {
    image: "https://storage.googleapis.com/byprogrammers/image/food-recipe-app.png",
    title: "food-recipe-app",
  },
  {
    image: "https://storage.googleapis.com/byprogrammers/image/crypto-wallet-app.png",
    title: "crypto-wallet-app",
  },
  {
    image: "https://storage.googleapis.com/byprogrammers/image/travel-app.png",
    title: "travel-app",
  },
];
</script>

<template>
  <div
    class="flex flex-wrap justify-evenly items-baseline w-[90%] bg-white z-40 absolute top-[80%] border rounded p-3"
  >
    <div v-for="app in data" :key="app.title" class="w-[30%]">
      <div
        class="w-full h-48 rounded-lg overflow-hidden drop-shadow-md bg-white m-3 hover:opacity-90 transition-opacity cursor-pointer"
      >
        <img :src="app.image" class="object-cover" />
      </div>
      <div class="mx-2">
        <p class="font-serif text-lg capitalize">{{ app.title }}</p>
      </div>
    </div>
  </div>
</template>
