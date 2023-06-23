<script setup>
import { computed, ref } from "vue";

const props = defineProps({
    itemsPerPage: Number,
    currentPage: Number,
    totalItems: Number,
});

const emit = defineEmits(["gotToPage", "previousPage", "nextPage"]);

const totalPages = computed(() => {
    return Math.ceil(props.totalItems / props.itemsPerPage);
});

const displayedPages = computed(() => {
    const startPage = Math.max(1, props.currentPage - 2);
    const endPage = Math.min(startPage + 4, totalPages.value);
    return Array(endPage - startPage + 1)
        .fill()
        .map((_, index) => startPage + index);
});

const goToPage = (pageNumber) => {
    emit("gotToPage", pageNumber);
};

const previousPage = () => {
    if (props.currentPage > 1) {
        emit("previousPage");
    }
};

const nextPage = () => {
    console.log("here1");
    if (props.currentPage < totalPages.value) {
        console.log("here2");
        emit("nextPage");
    }
};
</script>

<template>
    <div>
        <div class="flex gap-x-2 justify-center pt-8">
            <button
                class="flex justify-center items-center w-8 h-8"
                @click="previousPage"
                :disabled="currentPage === 1"
            >
                <img
                    src="/icons/chevron-left.svg"
                    class="w-6 h-6 to-gray-800 stroke-current hover:text-indigo-600"
                />
            </button>
            <button
                v-for="pageNumber in displayedPages"
                :key="pageNumber"
                class="flex items-center justify-center w-8 h-8 font-medium rounded-full"
                :class="
                    pageNumber === currentPage
                        ? 'bg-gray-800 text-white'
                        : 'text-gray-400 hover:text-indigo-600'
                "
                @click="goToPage(pageNumber)"
            >
                {{ pageNumber }}
            </button>
            <button
                class="flex justify-center items-center w-8 h-8 disabled:opacity-30 disabled:cursor-not-allowed"
                @click="nextPage"
                :disabled="currentPage === totalPages"
            >
                <img
                    src="/icons/chevron-right.svg"
                    class="w-6 h-6 to-gray-800 stroke-current hover:text-indigo-600"
                />
            </button>
        </div>
    </div>
</template>
