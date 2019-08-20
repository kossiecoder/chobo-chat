<template>
    <div>
        <div>
            <strong>{{ message.from.name }} {{ message.created_at }}</strong>
        </div>
        <div>
            {{ message.text }}
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            message: {
                type: Object,
                required: true
            }
        }
    }
</script>
