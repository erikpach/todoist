<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Tasks from "@/Pages/Tasks/Index/Partials/Tasks.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    todo: {
        type: Array,
        required: true
    },
    complete: {
        type: Array,
        required: true
    }
});
</script>

<template>
    <AppLayout title="Tasks">
        <template #header>
            <div class="md:flex md:items-center md:justify-between">
                <div class="min-w-0 flex-1">
                    <h2 class="text-xl font-semibold leading-tight text-gray-800 sm:truncate sm:tracking-tight">Tasks</h2>
                </div>
                <div class="mt-4 flex md:mt-0 md:ml-4">
                    <Link :href="route('tasks.create')" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Task</Link>
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <Tasks heading="Todo" :tasks="todo" />
                <Tasks heading="Complete" :tasks="complete" />
            </div>
        </div>
    </AppLayout>
</template>
