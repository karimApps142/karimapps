import { useForm } from "@inertiajs/vue3";
import { defineStore } from "pinia";

export const useDrawerStore = defineStore("drawer", {
    state: () => ({
        drawer: false,
        dialog: false,

        form: useForm({
            title: "",
            framework: "",
            image: null,
            screens: "",
            version: "",
            note: "",
            images: [],
        }),
    }),

    actions: {
        toggleDrawer() {
            this.drawer = !this.drawer;
        },

        toggleDialog(project) {
            if (project) {
                this.form.title = project.title;
                this.form.framework = project.framework;
                this.form.image = project.image;
                this.form.screens = project.screens;
                this.form.version = project.version;
                this.form.note = project.note;
                this.form.images = project.images ?? [];
            } else {
                this.form.title = "";
                this.form.framework = "";
                this.form.image = null;
                this.form.screens = "";
                this.form.version = "";
                this.form.note = "";
                this.form.images = [];
            }
            setTimeout(() => {
                this.dialog = !this.dialog;
            }, 300);
        },
        modifyImages() {
            this.form.images = this.form.images.filter(
                (img) => img?.path === undefined
            );
        },
    },
});
