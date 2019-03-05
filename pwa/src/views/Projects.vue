<template>
  <div>
    <div class="skills">
      <div v-for="(skill,index) in skills" class="skills__item" :key="index">
        <router-link to="/"> {{ skill }}</router-link>
      </div>
    </div>
    <div class="projects">
      <projects_item
        v-for="(project, index) in projects"
        :key="index"
        :project="project"
      ></projects_item>
    </div>
  </div>
</template>
<script>
import Projects_item from "./Projects_item";
export default {
  components: { projects_item: Projects_item },
  data() {
    return {
      projects: [],
      skills: ["All", "PHP", "JS", "Laravel"]
    };
  },
  mounted() {
    let self = this;
    axios.get("/api/projects").then(function(response) {
      self.projects = response.data.data;
    });
  }
};
</script>
<style lang="scss">


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
