<script setup>
const footerItems = [
  {
    text: "about us",
    url: "#",
  },
  {
    text: "blog",
    url: "#",
  },
  {
    text: "term and conditions",
    url: "#",
  },
  {
    text: "contact us",
    url: "#",
  },
];
</script>

<template>
  <div class="h-16 w-full bg-gray-800 text-white mt-5">
    <div class="flex justify-between items-center h-full px-10">
      <ul class="flex items-center justify-center list-none">
        <li v-for="item in footerItems" :key="item.text" class="p-3 uppercase text-sm">
          <a :href="item.url">{{ item.text }}</a>
        </li>
      </ul>

      <div class="flex items-center uppercase text-sm">
        <span>@2023 </span>
        <p class="ml-2">karimapps</p>
      </div>
    </div>
  </div>
</template>
