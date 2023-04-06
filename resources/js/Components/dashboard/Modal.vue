<script setup>
import { ref } from "vue";
import { useDrawerStore } from "../../store/drawer.js";
import InputError from "../base/InputError.vue";
import TextInput from "../base/TextInput.vue";
import InputLabel from "../base/InputLabel.vue";
import Button from "../Button.vue";

const store = useDrawerStore();

const props = defineProps({
  editMode: {
    type: Number,
    default: 0,
  },
});

const image = ref();
const images = ref();

const showImage = ref();

const showImages = ref([]);

const setRef = (index) => (el) => {
  showImages.value[index] = el;
};

const onPickImage = () => {
  image.value?.click();
};

const onSubmit = () => {
  const projectRoute = props.editMode
    ? route("project.update", { project: props.editMode })
    : route("project.submit");

  if (props.editMode) {
    store.modifyImages();
  }

  setTimeout(() => {
    store.form.post(projectRoute, {
      preserveScroll: true,
      onSuccess: () => {
        store.toggleDialog();
      },
    });
  }, 200);
};

const onPickMultipleImages = () => {
  images.value?.click();
};
const onChangeImage = (e) => {
  const file = e.target.files[0];
  store.form.image = file;

  var reader = new FileReader();
  reader.onloadend = function () {
    showImage.value.src = reader.result;
  };
  reader.readAsDataURL(file);
};

const onChangeImages = (e) => {
  const file = e.target.files[0];
  store.form.images.push(file);

  var reader = new FileReader();
  reader.onloadend = function () {
    showImages.value[showImages.value.length - 1].src = reader.result;
  };
  reader.readAsDataURL(file);
};
</script>

<template>
  <v-dialog v-model="store.dialog" persistent width="1024">
    <v-card>
      <v-card-title>
        <span class="text-h5"> {{ editMode ? "Edit" : "Add" }} Project</span>
      </v-card-title>
      <v-card-text>
        <v-container>
          <div
            class="w-96 mt-4 rounded-lg h-40 bg-gray-400 hover:opacity-80 cursor-pointer"
            @click="onPickImage"
          >
            <img
              ref="showImage"
              :src="editMode ? store.form.image : ''"
              class="w-full h-full object-contain"
            />
            <input type="file" hidden ref="image" @change="onChangeImage" />
          </div>
          <InputError class="my-2" :message="store.form.errors.image" />
          <div class="flex items-center justify-between">
            <div class="flex-1 mx-2">
              <InputLabel for="title" value="Project Title(required)" />

              <TextInput
                id="title"
                type="text"
                class="mt-1 block w-full border"
                v-model="store.form.title"
                required
                autofocus
              />
              <InputError class="mt-2" :message="store.form.errors.title" />
            </div>
            <div class="flex-1 mx-2">
              <InputLabel for="framework" value="Project Framework(required)" />

              <TextInput
                id="framework"
                type="text"
                class="mt-1 block w-full border"
                v-model="store.form.framework"
                required
              />
              <InputError class="mt-2" :message="store.form.errors.framework" />
            </div>
          </div>
          <div class="flex items-center justify-between mt-5">
            <div class="flex-1 mx-2">
              <InputLabel for="screens" value="Project Screens(required)" />

              <TextInput
                id="screens"
                type="text"
                class="mt-1 block w-full border"
                v-model="store.form.screens"
                required
              />
              <InputError class="mt-2" :message="store.form.errors.screens" />
            </div>
            <div class="flex-1 mx-2">
              <InputLabel for="version" value="Project Version(required)" />

              <TextInput
                id="version"
                type="text"
                class="mt-1 block w-full border"
                v-model="store.form.version"
                required
              />
              <InputError class="mt-2" :message="store.form.errors.version" />
            </div>
          </div>

          <div class="flex items-center justify-between mt-5">
            <div class="flex-1 mx-2">
              <InputLabel for="note" value="Project Note(required)" />
              <TextInput
                id="note"
                type="text"
                class="mt-1 block w-full border"
                v-model="store.form.note"
                required
              />
              <InputError class="mt-2" :message="store.form.errors.note" />
            </div>
          </div>
          <Button
            @click="onPickMultipleImages"
            title="Add Images"
            class="bg-cyan-800 mt-5 text-white h-10"
            icon="mdi-pencil"
          />
          <input type="file" hidden ref="images" @change="onChangeImages" />
          <div class="flex items-center flex-wrap">
            <img
              v-for="(image, index) in store.form.images"
              :key="image"
              :src="editMode ? image?.path : ''"
              :ref="setRef(index)"
              class="bg-gray-200 object-cover h-40 w-24 mr-5 my-3 rounded"
            />
          </div>
        </v-container>
      </v-card-text>
      <v-card-actions>
        <v-spacer></v-spacer>
        <v-btn color="blue-darken-1" variant="text" @click="store.toggleDialog">
          Close
        </v-btn>
        <v-btn color="blue-darken-1" variant="text" @click="onSubmit"> Save </v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>
