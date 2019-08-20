<template>
    <div class="flex-1">
        <p>chatting with user {{ chatId }}</p>
        <div>message</div>
        <div>message</div>
        <div>message</div>
        <div>message</div>
        <div>message</div>
    </div>
</template>

<script>
    export default {
        props: {
            chatId: {
                type: Number,
                required: true
            }
        }
    }
</script>
