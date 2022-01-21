<template>
    <div>
        <label v-if="label" :for="id" class="block text-sm font-medium text-gray-700">{{label}}</label>
        <div class="mt-1">
            <input :type="type" :name="id" :id="id" class="shadow-sm focus:ring-gray-700 focus:border-gray-700 block w-full sm:text-sm border-gray-300 rounded-md" :placeholder=placeholder>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            label: { type: String },
            id: { type: String, required: true },
            type: { type: String, required: true },
            placeholder: { type: String }
        }
    }
</script>
