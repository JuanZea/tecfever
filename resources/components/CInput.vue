<template>
    <div>
        <label v-if="label" for="email" class="block text-sm font-medium text-gray-700">{{label}}</label>
        <div class="mt-1">
            <input type="email" name="email" id="email" class="shadow-sm focus:ring-gray-700 focus:border-gray-700 block w-full sm:text-sm border-gray-300 rounded-md" :placeholder=placeholder>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            label: { type: String },
            placeholder: { type: String }
        }
    }
</script>