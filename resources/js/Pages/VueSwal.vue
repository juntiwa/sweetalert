<template>
    <div class="m-3">
        <p class="text-base">Vue</p>
        <button
            @click="mySwal"
            class="bg-sky-600 px-3 py-2 mr-4 no-underline rounded text-white hover:scale-125"
        >show swal v1
        </button>
        <button
            @click="toast"
            class="bg-sky-600 px-3 py-2 mr-4 no-underline rounded text-white hover:scale-125"
        >show toast
        </button>
    </div>

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

const toast = () => {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    })

    Toast.fire({
        icon: 'success',
        title: 'Signed in successfully'
    })
}
</script>
