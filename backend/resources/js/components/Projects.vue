<template>
    <div>


        <div class="skills">
            <div v-for="skill in skills" class="skills__item">
                <a href="#"> {{ skill}}</a>
            </div>
        </div>
        <div class="projects">

            <projects_item v-for="(project,index) in projects" :key="index" :project="project"></projects_item>
        </div>

    </div>
</template>
<script>
import Projects_item from './Projects_item'
export default {
    components: { projects_item: Projects_item},
    data(){
        return {
            projects: [],
            skills: [
                'All', 'PHP', 'JS', 'Laravel'
            ]
        }
    },
    mounted() {
        let self = this;
        axios.get('/api/projects').then(function(response) {
            self.projects = response.data.data;
        })
    }

}
</script>
<style lang="scss">
    .page-headline {
        color: #000;
        font-size: 25px;
        font-weight: bold;
        text-align: center;
        padding: 15px;
        /*border-bottom: 1px solid #ffffff;*/
    }
    .page-headline:after {
        content: ""; /* This is necessary for the pseudo element to work. */
        display: block; /* This will put the pseudo element on its own line. */
        margin: 0 auto; /* This will center the border. */
        width: 50%; /* Change this to whatever width you want. */
        padding-top: 20px; /* This creates some space between the element and the border. */
        border-bottom: 1px solid #000; /* This creates the border. Replace black with whatever color you want. */
    }

    .skills {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap-reverse;
        text-align: center;
        justify-content: center;
        &__item {
            color: #000;
            text-align: center;
            width: 120px;
            height: 45px;
            line-height: 45px;
            text-transform: uppercase;
            /*background-color: green;*/
            margin: 10px;
        }
    }

    .projects {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        text-align: center;
        justify-content: center;
    }

</style>