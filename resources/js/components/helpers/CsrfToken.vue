<template>
    <input type="hidden" name="_token" :value="token" />
</template>

<script>
import { token } from '../../use';

export default {
    name: 'CsrfToken',
    setup() {
        return { token };
    },
};
</script>
