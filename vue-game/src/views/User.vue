<template>
<h1> hllo user :{{userId}}</h1>

</template>

<script>
import {useRoute} from 'vue-router'
export default {
setup(){
const route = useRoute();
const userId = route.params.userId
return {userId}
},
};
</script>