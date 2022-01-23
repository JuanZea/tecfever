<template>
    <div>
        <label v-if="label" :for="id" :class="`block text-sm font-medium ${labelColor}`">{{ label }}</label>
        <div :class="{ 'relative': true, 'mt-1': label }">
            <ExclamationCircleIcon v-if="error" class="absolute h-5 text-red-500 right-2 top-2"/>
            <input :type="type" :value="old" :name="id" :id="id" :class="{input: true, 'error pr-7': error}" :placeholder=placeholder>
        </div>
        <span class="text-red-900">{{ error }}</span>
    </div>
</template>

<script>
import { ExclamationCircleIcon } from '@heroicons/vue/outline'

export default {
    components: { ExclamationCircleIcon },
    props: {
        label: { type: String },
        labelColor: { type: String, default: 'text-gray-700' },
        id: { type: String, required: true },
        type: { type: String, required: true },
        placeholder: { type: String },
        error: { type: String },
        old: { type: String }
    }
}
</script>
