<script setup>
import Button from "@/Components/Button.vue";
import Header from "@/Components/dashboard/Header.vue";
import Menu from "@/Components/dashboard/Menu.vue";
import ProjectModal from "@/Components/dashboard/Modal.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({});
const props = defineProps(["project"]);

const onDeleteProject = () => {
  form.delete(route("projects.delete", { project: props.project.id }));
};
</script>

<template>
  <v-layout>
    <Menu />
    <Header title="Project details" />
    <v-main>
      <div class="flex items-center flex-wrap m-4">
        <div class="w-96 h-96 rounded shadow m-2 overflow-hidden">
          <img :src="project?.image" class="object-cover w-full h-full" />
        </div>
      </div>
      <p class="px-2 text-lg">
        <span class="text-xs">Title: </span> {{ project?.title }}
      </p>
      <p class="px-2 text-lg">
        <span class="text-xs">Framework: </span> {{ project?.framework }}
      </p>
      <p class="px-2 text-lg">
        <span class="text-xs">screens: </span> {{ project?.screens }}
      </p>
      <p class="px-2 text-lg">
        <span class="text-xs">version: </span> {{ project?.version }}
      </p>
      <p class="px-2 text-lg"><span class="text-xs">note: </span> {{ project?.note }}</p>
      <div class="flex items-center flex-wrap">
        <div
          v-for="image in project.images"
          class="w-40 h-40 rounded shadow m-2 overflow-hidden"
        >
          <img :src="image?.path" class="object-cover w-full h-full" />
        </div>
      </div>
      <Button
        @click="onDeleteProject"
        title="Delete Project"
        class="bg-red-800 mt-5 text-white h-10 mb-5"
        icon="mdi-trash"
      />
    </v-main>
    <ProjectModal />
  </v-layout>
</template>
