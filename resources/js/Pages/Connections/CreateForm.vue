<template>
    <AppLayout title="Create">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form class='border-2 p-4 flex-col space-y-5'>
                        <fieldset>Add new connection</fieldset>
                        Label: <Input name="label" v-model="form.label"/> <br>
                        Api Key: <Input name="label" v-model="form.api_key"/>
                        <div class="flex space-x-2">
                            <button class="bg-blue-500 rounded p-2" @click="saveConnection">Save</button>
                            <button type="reset" class="bg-yellow-400 rounded p-2">Clean</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Inertia} from "@inertiajs/inertia";

let form = {
    label: '',
    api_key: ''
};

const saveConnection = () => {
    Inertia.post('connections.store', {
        connection: {...form}
    })
}

</script>
