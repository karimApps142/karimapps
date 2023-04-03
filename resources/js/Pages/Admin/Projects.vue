<script setup>
import { ref } from "vue";
import Header from "@/Components/dashboard/Header.vue";
import Menu from "@/Components/dashboard/Menu.vue";
import ProjectModal from "@/Components/dashboard/Modal.vue";
import { Link } from "@inertiajs/vue3";

defineProps(["projects"]);

const drawer = ref(false);
</script>

<template>
  <v-layout>
    <Menu />
    <Header title="Projects" />
    <v-main>
      <div class="flex items-center flex-wrap m-4">
        <Link
          as="div"
          v-for="project in projects"
          :key="project.id"
          :href="route('projects.details', { project: project.id })"
        >
          <p class="px-2 font-bold text-lg italic uppercase">{{ project?.title }}</p>
          <div class="w-40 h-60 rounded shadow m-2 overflow-hidden">
            <img :src="project?.image" class="object-cover w-full h-full" />
          </div>
        </Link>
      </div>
    </v-main>
    <ProjectModal />
  </v-layout>
  <!-- <Link
    :href="route('logout')"
    method="post"
    as="button"
    class="underline text-blue-400 font-bold font-serifhover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
  >
    Logout
  </Link> -->
</template>
