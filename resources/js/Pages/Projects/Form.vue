<script setup>
import { computed } from "vue";
import { router, useForm } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";

const props = defineProps({
    project: Object,
});

const form = useForm({
    name: props.project.name || "",
});

const formReady = computed(() => {
    return Object.values(form).every((val) => val !== "");
});

const saveProject = () => {
    if (props.project.id) {
        let routeName = route("projects.update", props.project.id);
        form.put(routeName, {
            onSuccess: () => {
                form.reset();
            },
        });
    } else {
        let routeName = route("projects.store");
        form.post(routeName, {
            onSuccess: () => {
                form.reset();
            },
        });
    }
};
</script>

<template>
    <AppLayout>
        <div>
            <div
                class="flex items-center justify-between pb-7 border-b border-gray-200"
            >
                <div>
                    <h1
                        class="text-2xl font-semibold leading-relaxed text-gray-800"
                    >
                        Project
                    </h1>
                </div>
                <button
                    @click="router.visit('/dashboard/projects')"
                    class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1"
                >
                    View all
                </button>
            </div>

            <form action="" class="flex flex-col mx-auto max-w-lg pt-7">
                <div class="mb-6">
                    <InputLabel :value="'Name'" class="mb-2" />
                    <TextInput
                        v-model:modelValue="form.name"
                        placeholder="Input Name"
                    />
                </div>
                <div class="flex justify-end gap-2">
                    <button
                        @click="router.visit('/dashboard/projects')"
                        class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1"
                    >
                        <span class="text-sm font-semibold tracking-wide"
                            >Cancel</span
                        >
                    </button>
                    <button
                        @click.prevent="saveProject"
                        :disabled="!formReady"
                        class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1 disabled:opacity-25 disabled:cursor-not-allowed"
                    >
                        <span class="text-sm font-semibold tracking-wide"
                            >Submit</span
                        >
                    </button>
                </div>
            </form>
        </div>
    </AppLayout>
</template>
