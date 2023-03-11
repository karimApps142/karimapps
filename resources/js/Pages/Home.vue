<script setup>
import Header from "@/Components/Header.vue";
import HeroText from "@/Components/HeroText.vue";
import ShowCase from "@/Components/ShowCase.vue";
import BaseLayout from "@/Layouts/BaseLayout.vue";
import Footer from "@/Components/Footer.vue";
import { Head } from "@inertiajs/vue3";
</script>
<template>
  <BaseLayout>
    <Head title="Home" />
    <div class="h-screen w-full bgImg flex flex-col items-center justify-center relative">
      <div class="h-screen w-full overlay">
        <Header />
        <HeroText />
      </div>
    </div>
    <ShowCase />
    <Footer />
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
