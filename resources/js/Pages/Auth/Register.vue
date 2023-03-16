<script setup>
import BaseLayout from "@/Layouts/BaseLayout.vue";
import InputError from "@/Components/base/InputError.vue";
import InputLabel from "@/Components/base/InputLabel.vue";
import PrimaryButton from "@/Components/base/PrimaryButton.vue";
import TextInput from "@/Components/base/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { Vue3Lottie } from "vue3-lottie";
import AstronautJSON from "../../animations/registerAnimation.json";

const form = useForm({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
  terms: false,
});

const submit = () => {
  form.post(route("register"), {
    onFinish: () => form.reset("password", "password_confirmation"),
  });
};
</script>

<template>
  <BaseLayout>
    <Head title="Register" />
    <div
      class="flex items-center justify-center h-screen w-full bg-gradient-to-tr from-neutral-300 via-slate-300 to-gray-300"
    >
      <section
        class="flex items-center justify-center w-[800px] h-[90vh] rounded-lg bg-gradient-to-tl from-slate-100 via-gray-100 to-gray-100 shadow-2xl overflow-hidden"
      >
        <form
          @submit.prevent="submit"
          class="flex-1 p-5 h-full flex flex-col justify-center relative border-r"
        >
          <p class="text-xs text-gray-700 capitalize absolute top-12">
            have an account ?
            <Link
              :href="route('login')"
              class="underline text-blue-400 font-bold font-serifhover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
              Sing in
            </Link>
          </p>

          <h1 class="text-2xl font-serif font-bold mb-5">Sign up</h1>

          <div class="flex items-center justify-center">
            <div class="mr-2">
              <InputLabel for="name" value="Name" />

              <TextInput
                id="name"
                type="text"
                class="mt-1 block w-full"
                v-model="form.name"
                required
                autofocus
                autocomplete="name"
              />

              <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="ml-2">
              <InputLabel for="email" value="Email" />

              <TextInput
                id="email"
                type="email"
                class="mt-1 block w-full"
                v-model="form.email"
                required
                autocomplete="username"
              />

              <InputError class="mt-2" :message="form.errors.email" />
            </div>
          </div>

          <div class="mt-4">
            <InputLabel for="password" value="Password" />

            <TextInput
              id="password"
              type="password"
              class="mt-1 block w-full"
              v-model="form.password"
              required
              autocomplete="new-password"
            />

            <InputError class="mt-2" :message="form.errors.password" />
          </div>

          <div class="mt-4">
            <InputLabel for="password_confirmation" value="Confirm Password" />

            <TextInput
              id="password_confirmation"
              type="password"
              class="mt-1 block w-full"
              v-model="form.password_confirmation"
              required
              autocomplete="new-password"
            />

            <InputError class="mt-2" :message="form.errors.password_confirmation" />
          </div>

          <div class="mt-4">
            <PrimaryButton
              class="w-full flex items-center justify-center"
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            >
              Sign up
            </PrimaryButton>
          </div>
        </form>
        <div class="flex-1 h-full w-full border-l p-5 bg-white">
          <Vue3Lottie :animationData="AstronautJSON" />
        </div>
      </section>
    </div>
  </BaseLayout>
</template>
