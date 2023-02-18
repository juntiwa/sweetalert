<template>
    <p class="text-base">Hello</p>
    <button @click="mySwal">show swal v1</button>

</template>

<script setup>
import Swal from 'sweetalert2'
const mySwal = () => {
    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
    })
}
</script>
