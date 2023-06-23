<script setup>
import { Link, router } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    platforms: Array,
});

const deletePlatform = (id) => {
    router.delete(`/dashboard/platforms/${id}`);
};
</script>

<template>
    <AppLayout title="Dashboard">
        <div
            class="flex items-center justify-between pb-7 border-b border-gray-200"
        >
            <div>
                <h1
                    class="text-2xl font-semibold leading-relaxed text-gray-800"
                >
                    Platforms
                </h1>
            </div>
            <Link
                :href="route('platforms.create')"
                class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1"
            >
                <img src="/icons/plus.svg" class="w-6 h-6 fill-current" />
                <span class="text-sm font-semibold tracking-wide"
                    >Create Item</span
                >
            </Link>
        </div>

        <table class="w-full border border-gray-200">
            <thead>
                <tr
                    class="text-sm font-medium text-gray-700 border-b border-gray-200"
                >
                    <td class="py-4 px-4 pl-10">
                        <div class="flex items-center gap-x-4">
                            <span>№</span>
                            <!-- <input
                                type="checkbox"
                                class="w-6 h-6 text-indigo-600 rounded-md border-gray-300"
                                indeterminate="indeterminate"
                            /> -->
                            <span>Platform Name</span>
                        </div>
                    </td>
                    <td class="text-center">Pricing</td>
                    <td class="text-center">Downloaded</td>
                    <td class="text-center">Rating</td>
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
                    v-for="(platform, index) in platforms"
                    :key="platform.id"
                    class="hover:bg-gray-100 transition-colors group"
                >
                    <td class="flex gap-x-4 items-center py-4 pl-10">
                        <span>{{ index }}</span>
                        <!-- <input
                            type="checkbox"
                            class="w-6 h-6 text-indigo-600 rounded-md border-gray-300"
                        /> -->
                        <div>
                            <div class="text-lg font-semibold text-gray-700">
                                {{ platform.name }}
                            </div>
                            <!-- <div class="font-medium text-gray-400">
                                Web Design
                            </div> -->
                        </div>
                    </td>
                    <td class="font-medium text-center">$20</td>
                    <td class="font-medium text-center">793</td>
                    <td class="text-center">
                        <span class="font-medium">4.9</span>
                        <span class="text-gray-400">/5</span>
                    </td>
                    <td class="w-[170px] break-words">
                        <div class="flex justify-center items-center">
                            <span
                                class="text-center inline-block w-24 group-hover:hidden"
                            >
                                12/01/22
                            </span>
                            <div
                                class="hidden group-hover:flex group-hover:justify-center group-hover:w-20 group-hover:items-center group-hover:text-gray-500 group-hover:gap-x-2"
                            >
                                <Link
                                    :href="route('platforms.edit', platform.id)"
                                    class="p-2 hover:rounded-md hover:bg-gray-200"
                                >
                                    <img
                                        src="/icons/pencil.svg"
                                        class="w-6 h-6 fill-current"
                                    />
                                </Link>
                                <button
                                    @click="deletePlatform(platform.id)"
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

        <!-- ЕСЛИ НУЖНА ПАГИНАЦИЯ РАСКОММЕНТИРОВАТЬ -->

        <!-- <div class="flex gap-x-2 justify-center pt-8">
            <button class="flex justify-center items-center w-8 h-8">
                <img
                    src="/icons/chevron-left.svg"
                    class="w-6 h-6 to-gray-800 stroke-current hover:text-indigo-600"
                />
            </button>
            <button
                v-for="i in 6"
                :key="i"
                class="flex items-center justify-center w-8 h-8 font-medium rounded-full"
                :class="
                    i === 1
                        ? 'bg-gray-800 text-white'
                        : 'text-gray-400 hover:text-indigo-600'
                "
            >
                {{ i }}
            </button>
            <button class="flex justify-center items-center w-8 h-8">
                <img
                    src="/icons/chevron-right.svg"
                    class="w-6 h-6 to-gray-800 stroke-current hover:text-indigo-600"
                />
            </button>
        </div> -->
    </AppLayout>
</template>
