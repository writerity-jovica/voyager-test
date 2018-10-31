<template>
    <div>
        <a :href="params.value" class="btn btn-sm btn-warning pr-1">
            <i class="voyager-eye"></i> View <span class="hidden-xs hidden-sm"></span>
        </a>
        <a href="#" class="btn btn-sm btn-primary">
            <i class="voyager-eye"></i> Share <span class="hidden-xs hidden-sm"></span>
        </a>
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