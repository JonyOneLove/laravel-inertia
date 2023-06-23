<script setup>
import { ref } from "@vue/reactivity";

const props = defineProps({
    items: Array,
    active: Number,
});

const emit = defineEmits(["getSelected", "reset"]);

const showPopup = ref(false);

const handleActiveItem = (index) => {
    emit("getSelected", index);
    showPopup.value = false;
};
</script>

<template>
    <div class="sort">
        <div @click="showPopup = !showPopup" class="sort__label">
            <svg
                :class="{ active: showPopup }"
                width="10"
                height="6"
                viewBox="0 0 10 6"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M10 5C10 5.16927 9.93815 5.31576 9.81445 5.43945C9.69075 5.56315 9.54427 5.625 9.375 5.625H0.625C0.455729 5.625 0.309245 5.56315 0.185547 5.43945C0.061849 5.31576 0 5.16927 0 5C0 4.83073 0.061849 4.68424 0.185547 4.56055L4.56055 0.185547C4.68424 0.061849 4.83073 0 5 0C5.16927 0 5.31576 0.061849 5.43945 0.185547L9.81445 4.56055C9.93815 4.68424 10 4.83073 10 5Z"
                    fill="#2C2C2C"
                />
            </svg>
            <b>Сортировка по:</b>
            <span>{{ items[active.id].name }}</span>
        </div>
        <div v-if="showPopup" class="sort__popup">
            <ul>
                <li
                    @click="handleActiveItem(index)"
                    :class="{ active: active.id === index }"
                    v-for="(item, index) in items"
                    :key="item.id"
                >
                    {{ item.name }}
                </li>
            </ul>
        </div>
    </div>
</template>

<style>
.sort {
    position: relative;
    width: 250px;
    /* padding: 20px 10px;
    border: 1px solid #e5e7eb; */
}

.sort__label {
    display: flex;
    align-items: center;
}

.sort__label svg {
    margin-right: 8px;
    transform: rotate(180deg);
}

.sort__label.active {
    transform: rotate(0);
}

.sort__label b {
    margin-right: 8px;
}

.sort__label span {
    color: #4f46e5;
    border-bottom: 1px dashed #4f46e5;
    cursor: pointer;
}

.sort__popup {
    position: absolute;
    right: 0;
    margin-top: 15px;
    background: #ffffff;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.09);
    border-radius: 10px;
    overflow: hidden;
    padding: 10px 0;
    width: 160px;
    z-index: 10;
}

.sort__popup ul {
    overflow: hidden;
}

.sort__popup ul li {
    padding: 12px 20px;
    cursor: pointer;
}

.sort__popup ul li.active {
    font-weight: bold;
    color: #4f46e5;
    background: rgba(79, 77, 229, 0.05);
}

.sort__popup ul li:hover {
    background: rgba(79, 77, 229, 0.05);
}

@media (max-width: 1188px) {
    .sort__ {
        left: 118px;
    }
}
</style>
