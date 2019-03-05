<template>
    <div>
        <template v-for="technology in technologies">

            <img :src="'/images/featured_techs/' + technology + '.svg'" class="tech_logo_image">
        </template>
    </div>
</template>

<script>
export default {
    data() {
        return {
            technologies: [
                'express', 'laravel', 'nodejs', 'php', 'vuejs'
            ]
        }
    }
}
</script>
<style>
    .tech_logo_image {
        max-width: 60px;
        max-height: 50px;
        margin: 10px 25px;
    }
</style>