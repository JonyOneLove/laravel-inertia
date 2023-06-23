<script setup>
import { computed, reactive, ref } from "vue";
import { router, useForm } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Pagination from "@/Components/Pagination.vue";

const props = defineProps({
    order: Object,
    projects: Array,
    platforms: Array,
    contractors: Array,
});

const currentPage = ref(1);
const itemsPerPage = ref(9);

const displayedLinks = computed(() => {
    const startIndex = (currentPage.value - 1) * itemsPerPage.value;
    const endIndex = startIndex + itemsPerPage.value;
    if (!Array.isArray(props.order.links)) return [];
    return props.order.links.slice(startIndex, endIndex);
});

const form = useForm({
    project_id: props.order.project_id || "",
    platform_id: props.order.platform_id || "",
    contractor_id: props.order.contractor_id || "",
    price: props.order.price || "",
    file: props.order.file || null,
});

const formReady = computed(() => {
    return Object.values(form).every((val) => val !== "");
});

const saveOrder = () => {
    if (props.order.id) {
        let routeName = route("orders.update", props.order.id);
        form.put(routeName, {
            onSuccess: () => {
                form.reset();
            },
        });
    } else {
        let routeName = route("orders.store");
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
                        Order
                    </h1>
                </div>
                <button
                    @click="router.visit('/dashboard/orders')"
                    class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1"
                >
                    View all
                </button>
            </div>

            <form action="" class="flex flex-col mx-auto max-w-lg pt-7 mb-14">
                <div class="mb-6">
                    <InputLabel :value="'Projects'" class="mb-2" />
                    <select
                        v-model="form.project_id"
                        class="appearance-none p-3 w-full border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm outline-none focus:ring-transparent"
                    >
                        <option v-if="!order.id" value="" selected disabled>
                            Please choose&hellip;
                        </option>
                        <option
                            v-for="project in projects"
                            :value="project.id"
                            :key="project.id"
                        >
                            {{ project.name }}
                        </option>
                    </select>
                </div>
                <div class="mb-6">
                    <InputLabel :value="'Platforms'" class="mb-2" />
                    <select
                        v-model="form.platform_id"
                        class="appearance-none p-3 w-full border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm outline-none focus:ring-transparent"
                    >
                        <option v-if="!order.id" value="" selected disabled>
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
                <div class="mb-6">
                    <InputLabel :value="'Contractors'" class="mb-2" />
                    <select
                        v-model="form.contractor_id"
                        class="appearance-none p-3 w-full border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm outline-none focus:ring-transparent"
                    >
                        <option v-if="!order.id" value="" selected disabled>
                            Please choose&hellip;
                        </option>
                        <option
                            v-for="contractor in contractors"
                            :value="contractor.id"
                            :key="contractor.id"
                        >
                            {{ contractor.name }}
                        </option>
                    </select>
                </div>
                <div class="mb-6">
                    <InputLabel :value="'Price'" class="mb-2" />
                    <TextInput
                        v-model:modelValue="form.price"
                        placeholder="Input price"
                        type="number"
                    />
                </div>
                <div class="mb-6">
                    <InputLabel :value="'Select CSV FILE'" class="mb-2" />
                    <TextInput
                        @input="form.file = $event.target.files[0]"
                        placeholder="Input price"
                        type="file"
                        accept="text/plain, .csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                    />
                </div>
                <div class="flex justify-end gap-2">
                    <button
                        @click.prevent="router.visit('/dashboard/orders')"
                        class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1"
                    >
                        <span class="text-sm font-semibold tracking-wide"
                            >Cancel</span
                        >
                    </button>
                    <button
                        @click.prevent="saveOrder"
                        :disabled="!formReady"
                        class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1 disabled:opacity-25 disabled:cursor-not-allowed"
                    >
                        <span class="text-sm font-semibold tracking-wide"
                            >Submit</span
                        >
                    </button>
                </div>
            </form>

            <template v-if="order.id">
                <table class="w-full border border-gray-200 mb-14">
                    <thead>
                        <tr
                            class="text-sm font-medium text-gray-700 border-b border-gray-200"
                        >
                            <td class="py-4 px-4 pl-10">
                                <div class="flex items-center gap-x-4">
                                    <span>№</span>
                                    <span>Order links</span>
                                </div>
                            </td>

                            <!-- ЕСЛИ НУЖНЫ ДОП ПОЛЯ В HEADER ТАБЛИЦЕ РАСКОМЕНТИРОВАТЬ -->

                            <!-- <td class="text-center">Pricing</td> -->
                            <!-- <td class="text-center">Downloaded</td> -->
                            <!-- <td class="text-center">Rating</td> -->
                            <!-- <td class="text-center">Platforms</td> -->
                            <td class="w-[170px] text-center">
                                <img
                                    src="/icons/filter.svg"
                                    class="inline-block w-6 h-6 fill-current"
                                />
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="(link, index) in displayedLinks"
                            :key="link"
                            class="hover:bg-gray-100 transition-colors group"
                        >
                            <td class="flex gap-x-4 items-center py-4 pl-10">
                                <span>{{ index+1 }}</span>
                                <!-- <input
                            type="checkbox"
                            class="w-6 h-6 text-indigo-600 rounded-md border-gray-300"
                        /> -->
                                <div>
                                    <Link
                                        :href="'#'"
                                        class="text-lg font-semibold text-gray-700 hover:text-indigo-600"
                                    >
                                        {{ link }}
                                    </Link>
                                    <!-- <div class="font-medium text-gray-400">
                                Web Design
                            </div> -->
                                </div>
                            </td>

                            <!-- ЕСЛИ НУЖНО ОТОБРАЗИТЬ НОВЫЕ ЗНАЧЕНИЯ ПОЛЕЙ РАСКОМЕНТИРОВАТЬ -->

                             <td class="font-medium text-center"> {{ link.source_url }}</td>
                             <td class="font-medium text-center">{{ link.target_url }}</td>
                            <!-- <td class="text-center">
                            <span class="font-medium">4.9</span>
                            <span class="text-gray-400">/5</span>
                        </td> -->
                            <td>
                                  <span
                                      class="text-center inline-block w-24 group-hover:hidden"
                                  >
                                        {{ link.created_at }}
                                    </span>
                            </td>
                            <td class="w-[170px] break-words">
                                <div class="flex justify-center items-center">

                                    <div
                                        class="hidden group-hover:flex group-hover:justify-center group-hover:w-20 group-hover:items-center group-hover:text-gray-500 group-hover:gap-x-2"
                                    >
                                        <button
                                            @click="() => {}"
                                            class="p-2 hover:rounded-md hover:bg-gray-200"
                                        >
                                            <img
                                                src="/icons/trash.svg"
                                                class="w-6 h-6 fill-current"
                                            />
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <Pagination
                    :currentPage="currentPage"
                    :itemsPerPage="itemsPerPage"
                    :totalItems="order.links !== null ? order.links.length : 1"
                    @gotToPage="(pageNumber) => (currentPage = pageNumber)"
                    @previousPage="currentPage--"
                    @nextPage="currentPage++"
                />
            </template>
        </div>
    </AppLayout>
</template>
