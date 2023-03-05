<script setup>
import Header from "@/Components/Header.vue";
import BaseLayout from "@/Layouts/BaseLayout.vue";
</script>
<template>
  <BaseLayout>
    <div class="h-screen w-full bgImg">
      <div class="h-screen w-full bg-black opacity-90">
        <Header />
      </div>
    </div>
  </BaseLayout>
</template>

<style scoped>
.bgImg {
  background: url("../../../public/images/hero.jpg") center center no-repeat;
}
</style>
