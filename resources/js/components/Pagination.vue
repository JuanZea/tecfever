<template>
    <nav class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0">
        <div class="-mt-px flex w-0 flex-1">
            <a
                href="#"
                class="inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"
            >
                <ArrowNarrowLeftIcon class="mr-3 h-5 w-5 text-gray-400" aria-hidden="true" />
                Previous
            </a>
        </div>
        <div class="hidden md:-mt-px md:flex">
            <a
                :href="page.link"
                v-for="page in pages"
                :class="
                    page.current
                        ? 'border-indigo-500 text-indigo-600'
                        : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'
                "
                class="inline-flex items-center border-t-2 px-4 pt-4 text-sm font-medium"
            >
                {{ page.label }}
            </a>
        </div>
        <div class="-mt-px flex w-0 flex-1 justify-end">
            <a
                href="#"
                class="inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"
            >
                Next
                <ArrowNarrowRightIcon class="ml-3 h-5 w-5 text-gray-400" aria-hidden="true" />
            </a>
        </div>
    </nav>
</template>

<script>
import { ArrowNarrowLeftIcon, ArrowNarrowRightIcon } from '@heroicons/vue/solid';

export default {
    components: {
        ArrowNarrowLeftIcon,
        ArrowNarrowRightIcon,
    },
    props: { pages: { type: Array, required: true } },
};
</script>
