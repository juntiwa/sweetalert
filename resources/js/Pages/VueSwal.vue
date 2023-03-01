<template>
    <Head>
        <title>Vue</title>
    </Head>
    <div class="m-3">
        <p class="text-base">Vue</p>
        <button
            @click="mySwal"
            class="bg-sky-500 px-3 py-2 mr-4 no-underline rounded text-white hover:bg-sky-600 hover:scale-110"
        >show swal v1
        </button>
        <button
            @click="toast"
            class="bg-sky-500 px-3 py-2 mr-4 no-underline rounded text-white hover:bg-sky-600 hover:scale-110"
        >show toast
        </button>
    </div>

</template>

<script setup>
import {Head} from "@inertiajs/vue3";
import Swal from 'sweetalert2'
const mySwal = () => {
    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
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
