<style lang='scss'>

</style>

<template>
    <p>{{ volunteer }}</p>
</template>
<script>
    const moment = require('moment');

    import api from '../api';

    export default {
        data() {
            return {
                volunteer: 'volunteer'
            }
        }
    }
</script>