<script setup>
import { ref } from "@vue/reactivity";
import { onMounted } from "vue";

const props = defineProps({
    items: Array,
    active: Number,
});

const emit = defineEmits(["getSelected", "setAll"]);

onMounted(() => {
    const scrollContainer = document.querySelector("#categoires-container");

    scrollContainer.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
    });
});

const handleActiveItem = (i) => {
    emit("getSelected", i);
};
const handleSetNull = () => {
    emit("setAll");
};
</script>

<template>
    <div class="w-full border border-gray-200">
        <ul
            id="categoires-container"
            class="flex flex-row gap-4 py-3 px-1 overflow-x-hidden scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-300"
        >
            <li
                @click="handleSetNull"
                :class="{ 'categories-active': active === null }"
                class="bg-gray-800 text-white rounded-full py-3 px-7 font-bold cursor-pointer transition"
            >
                Все
            </li>
            <li
                :class="{ 'categories-active': i === active }"
                class="bg-gray-800 text-white rounded-full py-3 px-7 font-bold cursor-pointer transition"
                v-for="(item, i) in items"
                :key="item"
                @click="handleActiveItem(i)"
            >
                {{ item }}
            </li>
        </ul>
    </div>
</template>

<style scoped>
::-webkit-scrollbar {
    width: 6px;
}

::-webkit-scrollbar-thumb {
    /* background-color: #1f2937; */
    /* background-color: #6b7280; */
    background-color: #e5e7eb;
    border-radius: 27px;
}

::-webkit-scrollbar-track {
    background-color: transparent;
}

li:hover {
    background-color: darken(#f9f9f9, 2%);
}

.categories-active {
    @apply bg-indigo-600;
}
</style>
