<template>
    <div class="w-1/5 border-r-2 border-solid border-gray-600">
        <div
            v-for="user in usersWithoutSignedInUser"
            :key="user.id"
            class="p-2 border-b-2 border-gray-600 hover:bg-gray-300 cursor-pointer"
            :class="{ 'text-pink-500': chatWith === user.id }"
            @click="updateChatWith(user.id)"
        >
            {{ user.name }}
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            currentUser: {
                type: Number,
                required: true
            },

            chatWith: {
                type: Number,
                required: false
            }
        },

        computed: {
            usersWithoutSignedInUser() {
                return this.users.filter(user => {
                    return user.id !== this.currentUser
                });
            }
        },

        data() {
            return {
                users: []
            }
        },

        created() {
            axios.get('/api/users').then(res => {
                this.users = res.data.users;
            }).catch(error => {
                console.log(error)
            });
        },

        methods: {
            updateChatWith(userId) {
                this.$emit('updatedChatWith', userId);
            }
        }
    }
</script>
