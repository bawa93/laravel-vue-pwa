<template>
    <div>
        <Header></Header>
        <div class="page-headline">Project Overview</div>

        <section class="project columns has-black-text">
            <h2 class="hidden">Project Overview</h2>
            <div class="project__visual column">
                <img :src="project.image" alt="Project Image" class="project__image"><br>



            </div>
            <div class="project__written column">
                <div class="project__written-title has-black-text">
                    {{ project.title}}
                </div>
                <div class="project__written-info">
                    {{ project.info}}
                </div>
                <div class="project__written-skills">
                    <strong class="has-text-black">Skills</strong>:
                    <span class="project__written-skills__items button is-primary is-small mx-2" v-for="pskill in projectSkills">
                        {{ pskill}}
                    </span>
                </div>
                <div class="project__image-footer">
                    <span>122</span>
                    <a href="#">

                        <span style="color: red;">&#10084;</span>
                    </a>
                </div>


            </div>
        </section>
        <Footer></Footer>
    </div>
</template>

<script>
import Header from './Header';
import Footer from './Footer';

export default {
    components: { Header, Footer},
    data() {
        return {
          project: '',
        }
    },
    computed: {
      projectSkills() {
          if (this.project.skills) {

              return this.project.skills.map(skill => skill.title);
          }
      }
    },
    created() {
        let project_id = this.$route.params.id;
        let self = this;
        axios.get('/api/projects/' + project_id).then(function(response) {
            self.project = response.data.data;
        })
    }
}
</script>
<style lang="scss">
    .project {
        margin-bottom: 35px;
    }
.project__image {
    max-width: 400px;
    padding: 0 15px;
    border: 1px solid white;
}
.project__written {
    padding:5px;
    &-info {
        width: 70%;
    }
}
    .project__written-title {
        font-size: 25px;
        text-transform: uppercase;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .project {
        color: black;
    }
    .project__written-skills__items {
        text-transform: uppercase;
        margin:0 4px;
    }
    .project__image-footer {
        margin-top: 10px;
        font-size:17px;
    }
    .project__visual {
        text-align: right;
    }

    .project__written-info {
        margin:8px 0;
    }
    @media screen and (max-width: 768px) {

    .project__visual {
        text-align: center;
    }
    .project__written {
        text-align: center;
        margin:0 auto;
    }
    .project__written-info {
        margin: 0 auto;
    }
}
</style>
