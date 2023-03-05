<script setup>
import Task from "@/Pages/Tasks/Index/Partials/Task.vue";

defineProps({
    heading: {
        type: String,
        required: true
    },
    tasks: {
        type: Array,
        required: true
    }
});
</script>

<template>
    <fieldset>
        <legend class="text-base font-semibold leading-6 text-gray-900">
            {{ heading }} ({{ tasks.length }})
        </legend>

        <div class="mt-4 divide-y divide-gray-200 border-t border-b border-gray-200">
            <div v-for="task in tasks" :key="task.id" class="relative flex items-center py-4">
                <Task :task="task" />
            </div>
        </div>
    </fieldset>
</template>
