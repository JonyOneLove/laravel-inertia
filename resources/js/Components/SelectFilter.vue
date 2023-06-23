<script setup>
import { ref } from "vue";

const props = defineProps({
    items: Array,
    active: Number,
});

const emit = defineEmits(["getSelected", "setAll"]);

const show = ref(false);
const textAll = "Все";

const handleActiveItem = (index) => {
    emit("getSelected", index);
    show.value = false;
};

const handleSetNull = () => {
    emit("setAll");
};
</script>

<template>
    <div class="dropdown w-80 relative break-words">
        <button
            @click="show = !show"
            class="bg-gray-200 w-full text-gray-800 font-semibold py-2 px-4 rounded inline-flex justify-between items-center"
        >
            <span class="overflow-hidden mr-1 text-left">{{
                active === null ? textAll : items[active]
            }}</span>
            <svg
                class="fill-current h-4 w-8 rotate-[-90deg] transition-transform"
                :class="{ 'rotate-0': show }"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
            >
                <path
                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                />
            </svg>
        </button>
        <ul
            v-if="show"
            class="dropdown-menu absolute z-10 w-full text-gray-800 pt-2"
        >
            <li
                @click="handleSetNull"
                class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap cursor-pointer"
            >
                {{ textAll }}
            </li>
            <li
                v-for="(item, index) in items"
                :key="item"
                @click="handleActiveItem(index)"
                class="last:rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap cursor-pointer"
            >
                {{ item }}
            </li>
        </ul>
    </div>
</template>

<style></style>
