<template>
    <form :action="action" method="POST">
        <slot/>
        <button :class="buttonClass" type="submit">Logout</button>
    </form>
</template>

<script>
export default {
    name: 'LogoutButton',
    props: { action: { type: String, required: true }, buttonClass: { type: String, default: '' } }
}
</script>
