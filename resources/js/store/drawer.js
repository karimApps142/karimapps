import { defineStore } from "pinia";

export const useDrawerStore = defineStore("drawer", {
    state: () => ({
        drawer: false,
        dialog: false,
    }),

    actions: {
        toggleDrawer() {
            this.drawer = !this.drawer;
        },

        toggleDialog() {
            this.dialog = !this.dialog;
        },
    },
});
