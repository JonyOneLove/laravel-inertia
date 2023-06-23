<script setup>
import { computed } from "vue";
import { router, useForm } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";

const props = defineProps({
    contractor: Object,
    platforms: Array,
});

const form = useForm({
    name: props.contractor.name || "",
    platform_id: props.contractor.platform_id || "",
});

const formReady = computed(() => {
    return Object.values(form).every((val) => val !== "");
});

const saveContractor = () => {
    if (props.contractor.id) {
        let routeName = route("contractors.update", props.contractor.id);
        form.put(routeName, {
            onSuccess: () => {
                form.reset();
            },
        });
    } else {
        let routeName = route("contractors.store");
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
                        Contractor
                    </h1>
                </div>
                <button
                    @click="router.visit('/dashboard/contractors')"
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
                <div class="mb-6">
                    <InputLabel :value="'Platforms'" class="mb-2" />
                    <select
                        v-model="form.platform_id"
                        class="appearance-none p-3 w-full border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm outline-none focus:ring-transparent"
                    >
                        <option
                            v-if="!contractor.id"
                            value=""
                            selected
                            disabled
                        >
                            Please choose&hellip;
                        </option>
                        <option
                            v-for="platform in platforms"
                            :value="platform.id"
                            :key="platform.id"
                        >
                            {{ platform.name }}
                        </option>
                    </select>
                </div>
                <div class="flex justify-end gap-2">
                    <button
                        @click.prevent="router.visit('/dashboard/contractors')"
                        class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1"
                    >
                        <span class="text-sm font-semibold tracking-wide"
                            >Cancel</span
                        >
                    </button>
                    <button
                        @click.prevent="saveContractor"
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
