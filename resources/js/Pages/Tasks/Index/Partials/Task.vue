<script setup>
import TaskMenu from "@/Pages/Tasks/Index/Partials/TaskMenu.vue";
import { router } from "@inertiajs/vue3";

const props = defineProps({
    task: {
        type: Object,
        required: true
    }
});

const toggleTask = () => {
    router.put(route("tasks.toggle", props.task.id));
};
</script>

<template>
    <div class="min-w-0 flex-1 text-sm leading-6" :class="task.complete ? 'line-through' : ''">
        <label :for="task.id" class="select-none font-medium text-gray-900">{{ task.name }}</label>
        <p v-if="task.description" class="text-sm text-gray-500">{{ task.description }}</p>
    </div>
    <div class="ml-4 flex h-6 items-center space-x-2">
        <input :id="task.id" type="checkbox" :checked="task.complete" @change="toggleTask" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
        <TaskMenu :task="task" />
    </div>
</template>
