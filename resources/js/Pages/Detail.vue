<script setup>
import Header from "@/Components/Header.vue";
import BaseLayout from "@/Layouts/BaseLayout.vue";
import Footer from "@/Components/Footer.vue";
import ProjectInfo from "@/Components/details/ProjectInfo.vue";
import ProjectGallery from "@/Components/details/ProjectGallery.vue";
import { Head } from "@inertiajs/vue3";
</script>
<template>
  <BaseLayout>
    <Head title="Details" />
    <div class="w-full bg-green-700">
      <Header />
      <ProjectInfo />
      <ProjectGallery />
      <Footer />
    </div>
  </BaseLayout>
</template>
