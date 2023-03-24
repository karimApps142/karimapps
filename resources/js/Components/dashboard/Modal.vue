<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import { useDrawerStore } from "../../store/drawer.js";
import InputError from "../base/InputError.vue";
import TextInput from "../base/TextInput.vue";
import InputLabel from "../base/InputLabel.vue";

const store = useDrawerStore();

const image = ref();
const showImage = ref();

const form = useForm({
  title: "",
  framework: "",
  image: null,
});

const onPickImage = () => {
  image.value?.click();
};
const onChangeImage = (e) => {
  const file = e.target.files[0];
  form.image = file;

  var reader = new FileReader();
  reader.onloadend = function () {
    showImage.value.src = reader.result;
  };
  reader.readAsDataURL(file);
};
</script>

<template>
  <v-dialog v-model="store.dialog" persistent width="1024">
    <v-card>
      <v-card-title>
        <span class="text-h5">User Profile</span>
      </v-card-title>
      <v-card-text>
        <v-container>
          <div
            class="w-96 my-4 rounded-lg h-40 bg-gray-400 hover:opacity-80 cursor-pointer"
            @click="onPickImage"
          >
            <img ref="showImage" class="w-full h-full object-contain" />
            <input type="file" hidden ref="image" @change="onChangeImage" />
          </div>
          <div class="flex items-center justify-between">
            <div class="flex-1 mx-2">
              <InputLabel for="title" value="Project Title(required)" />

              <TextInput
                id="title"
                type="text"
                class="mt-1 block w-full border"
                v-model="form.title"
                required
                autofocus
              />
              <InputError class="mt-2" :message="form.errors.title" />
            </div>
            <div class="flex-1 mx-2">
              <InputLabel for="framework" value="Project Framework(required)" />

              <TextInput
                id="framework"
                type="text"
                class="mt-1 block w-full border"
                v-model="form.framework"
                required
              />
              <InputError class="mt-2" :message="form.errors.framework" />
            </div>
          </div>
          <div class="flex items-center justify-between mt-5">
            <div class="flex-1 mx-2">
              <InputLabel for="screens" value="Project Screens(required)" />

              <TextInput
                id="screens"
                type="text"
                class="mt-1 block w-full border"
                v-model="form.screens"
                required
              />
              <InputError class="mt-2" :message="form.errors.screens" />
            </div>
            <div class="flex-1 mx-2">
              <InputLabel for="version" value="Project Version(required)" />

              <TextInput
                id="version"
                type="text"
                class="mt-1 block w-full border"
                v-model="form.version"
                required
              />
              <InputError class="mt-2" :message="form.errors.version" />
            </div>
          </div>

          <div class="flex items-center justify-between mt-5">
            <div class="flex-1 mx-2">
              <InputLabel for="note" value="Project Note(required)" />
              <TextInput
                id="note"
                type="text"
                class="mt-1 block w-full border"
                v-model="form.note"
                required
              />
              <InputError class="mt-2" :message="form.errors.note" />
            </div>
          </div>
        </v-container>
      </v-card-text>
      <v-card-actions>
        <v-spacer></v-spacer>
        <v-btn color="blue-darken-1" variant="text" @click="store.toggleDialog">
          Close
        </v-btn>
        <v-btn color="blue-darken-1" variant="text" @click="dialog = false"> Save </v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>
