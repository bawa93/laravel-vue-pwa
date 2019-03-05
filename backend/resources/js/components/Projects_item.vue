<template>
    <div>
        <div class="projects__item">
                <img :src="project.image" alt="Project Image" class="projects__item-image"><br>
            <div class="projects__item-skills">
                <span class="project-skills__item button is-primary is-small " v-for="skill in projectSkills">{{skill}}</span>
            </div>
            <router-link :to="{ name: 'project', params: { id: project.id }}">{{ project.title | uppercase }}</router-link>

            <br>
        </div>
    </div>
</template>
<script>
export default {
    props: ['project' ],
    data() {
        return {

        }
    },
    computed: {
      projectSkills() {
          return this.project.skills.map(skill => skill.title);
      }
    },
    mounted() {
        let self = this;
    }
}
</script>

<style lang="scss">
    .projects__item {
        color: #000;
        text-align: center;
        /*background-color: green;*/
        margin: 10px;
    ;
    }
    .projects__item-image {
        max-width: 400px;

        padding: 8px;
        /*border: 1px solid #000;*/
    }
    .project-skills__item {
        text-transform: uppercase;
        font-size:11px;
        margin: 0 5px;
    }
</style>