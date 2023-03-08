<script setup>
import Header from "@/Components/Header.vue";
import HeroText from "@/Components/HeroText.vue";
import ShowCase from "@/Components/ShowCase.vue";
import BaseLayout from "@/Layouts/BaseLayout.vue";
</script>
<template>
  <BaseLayout>
    <div class="h-screen w-full bgImg">
      <div class="h-screen w-full overlay">
        <Header />
        <HeroText />
      </div>
    </div>
    <ShowCase />
  </BaseLayout>
</template>

<style scoped>
.bgImg {
  background: url("../../../public/images/hero.jpg") center center no-repeat;
}
.overlay {
  background-color: rgba(0, 0, 0, 0.8);
}
</style>
