<script>
import custom-input from './components/icons/custom-input.vue'
</script>
<template>
 <form @submit.prevent="login">
            <custom-input
                v-model="username"
                label="Username"
                type="text"
            ></custom-input>
            <custom-input
                v-model="password"
                label="Password"
                type="password"
            ></custom-input>
            <button type="submit">Login</button>
        </form>
</template>