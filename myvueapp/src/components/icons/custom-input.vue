<template>
 <label>
  {{ label }} <br>
   <input :type="type" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)">
    </label> <br>
</template>