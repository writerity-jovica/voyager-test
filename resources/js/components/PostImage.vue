<template>
    <div>
        <img :src="params.value">
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                params: this.params,
            }
        }
    }
</script>