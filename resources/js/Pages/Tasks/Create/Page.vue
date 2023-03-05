<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useForm } from "@inertiajs/vue3";
import FormSection from "@/Components/FormSection.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

const form = useForm({
    name: null,
    description: null
});

const createTask = () => {
    form.post(route("tasks.store"));
};
</script>

<template>
    <AppLayout title="Create Task">
        <template #header>
            <div class="md:flex md:items-center md:justify-between">
                <div class="min-w-0 flex-1">
                    <h2 class="text-xl font-semibold leading-tight text-gray-800 sm:truncate sm:tracking-tight">Create Task</h2>
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <FormSection @submitted="createTask">
                    <template #title>
                        Task Information
                    </template>

                    <template #form>
                        <div class="col-span-6 sm:col-span-4">
                            <InputLabel for="name" value="Name" />
                            <TextInput
                                id="name"
                                type="text"
                                v-model="form.name"
                                class="mt-1 block w-full"
                            />
                            <InputError :message="form.errors.name" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <InputLabel for="description" value="Description" />
                            <TextInput
                                id="description"
                                type="text"
                                v-model="form.description"
                                class="mt-1 block w-full"
                            />
                            <InputError :message="form.errors.description" class="mt-2" />
                        </div>
                    </template>

                    <template #actions>
                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Create
                        </PrimaryButton>
                    </template>
                </FormSection>
            </div>
        </div>
    </AppLayout>
</template>
