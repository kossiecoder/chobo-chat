<template>
    <div class="flex-1 overflow-y-scroll" v-chat-scroll>
        <ChatMessage
            v-for="message in messages"
            :key="message.id"
            :message="message"
        />
    </div>
</template>

<script>
    import ChatMessage from "./ChatMessage";

    export default {
        components: {
            ChatMessage
        },

        props: {
            chatId: {
                type: Number,
                required: true
            },

            messages: {
                type: Array,
                required: true
            }
        }
    }
</script>
