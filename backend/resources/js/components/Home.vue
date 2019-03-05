<template>
    <div>

        <Header></Header>
        <section>
            <h2 class="hidden">
                Who am I?
            </h2>

            <div class="columns">
                <div class="hero__intro column has-text-black" >
                    <span class="hero__intro--hello">

                        Hello

                    </span>
                    <div class="hero__intro--who" >
                        I'M
                    </div>
                    <div class="hero__intro--fname">
                        Lakhveer
                    </div>
                    <div  class="hero__intro--nlame">
                        Bawa
                    </div>
                    <div>Full Stack Web Developer</div>
                </div>

                <div class="hero__image column">
                    <img src="/hero.png" alt="Lakhveer Bawa Image" class="hero__img" >
                </div>
            </div>
        </section>
        <div class="container">

            <section class="site-section about has-text-centered">
                <h2 class="hidden">About Me</h2>
                <div class="site-section__title" id="aboutme">- About Me -</div>
                <div class="about__info" style="
  margin-bottom: 25px;
">
                    I am passionate web developer. I started learning programming as hobby in 2016, and kept on learning the stuff whenever i had time, Currently I am doing Interactive media specialist program at Fanshawe College, London to turn my hobby into career
                </div>
                <div class="columns2">
                    <a href="#" class="button is-medium  is-light" >My Resume</a>
                    <a href="#" class="button is-medium  is-dark">Hire Me</a></div>
            </section>

            <div class="columns main-section">

                <section class="column row-section">
                    <h2 class="hidden">Education and Jobs</h2>

                    <div class="row-section__title">Education & Jobs</div>
                    <div class="row-section__content">
                        <ul>
                            <li class="job">
                                <div class="job__date">
                                    Sept 2018 - May 2019
                                </div>
                                <div class="job__title"> Interactive Media Specialist
                                </div>
                                <div class="job__place">
                                    Fanshawe College, London
                                </div>
                            </li>

                            <li class="job">
                                <div class="job__date">
                                    March 2015 - April 2017
                                </div>
                                <div class="job__title"> Freelance Web Developer
                                </div>
                                <div class="job__place">
                                    Hatch2Web Technologies
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="column row-section">
                    <h3 class="hidden">What i am doing</h3>

                    <div class="row-section__title">What I am doing</div>
                    <div class="row-section__content">
                        I develop the websites, I work on various technologies and platforms in order to make a website that is good looking and feature rich.
                    </div>
                </section>
                <section class="column row-section" id="skills">
                    <h2 class="hidden">Skills and Abilities</h2>

                    <div class="row-section__title">Skills & Abilities</div>
                    <div class="row-section__content">
                        <ul>
                            <li>
                                PHP / MYSQL<br>
                                <progress class="progress is-small is-primary" value="90" max="100">90%</progress>
                            </li>
                            <li>
                                Node / MongoDB<br>
                                <progress class="progress is-small is-link" value="70" max="100">70%</progress>
                            </li>
                            <li>
                                Javascript<br>
                                <progress class="progress is-small is-success" value="70" max="100">70%</progress>
                            </li>
                            <li>
                                HTML / CSS<br>
                                <progress class="progress is-small is-success" value="90" max="100">90%</progress>
                            </li>
                            <li>
                                Laravel<br>
                                <progress class="progress is-small is-primary" value="85" max="100">85%</progress>
                            </li>
                            <li>
                                Express<br>
                                <progress class="progress is-small is-primary" value="75" max="100">75%</progress>
                            </li>
                            <li>
                                Vue JS<br>
                                <progress class="progress is-small is-primary" value="80" max="100">80%</progress>
                            </li>
                            <li>
                                Wordpress<br>
                                <progress class="progress is-small is-primary" value="65" max="100">65%</progress>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <section class="site-section has-text-centered" id="myprojects">
                <h3 class="hidden" >My Portfoli</h3>

                <div class="site-section__title">- My Projects -</div>
                    <Projects></Projects>
            </section>
        </div>
        <div class="container-fluid">

            <section class="site-section has-text-centered featured_tech">
                <h4 class="hidden">Featured Technologies</h4>

                <!--<div class="site-section__title">- Featured Technogies -</div>-->
                <Featured_Technologies></Featured_Technologies>
            </section>
            <Footer></Footer>
        </div>

    </div>
</template>

<script>
import Header from './Header';
import Projects from './Projects';
import Featured_Technologies from './Featured_Technologies';
import Footer from './Footer';

export default {
components: { Header,Footer, Projects, Featured_Technologies}
}
</script>

<style>

    .container {
    }

    .site-section.about.has-text-centered {
    }

    .site-section__title {
    }

    .about__info {
        margin-bottom: 25px;
    }

    .columns2 {
        text-transform: uppercase;
        margin: 10px;
    }

    .button.is-medium.is-light {
        margin-right: 25px;
    }

    .button.is-medium.is-dark {
    }

    .columns {
    }

    .column.row-section {
    }

    .row-section__title {
    }

    .row-section__content {
        max-width: 75%;
        text-align:justify;
        margin-top:6%;
    }

    .job {
    }

    .job__date {
        font-size: 13px;
        margin-bottom: 3px;
    }

    .job__title {
        color: rgb(50, 115, 220);
        /* text-transform: uppercase; */
        font-size: 15px;
    }

    .job__place {
        opacity: 0.7;
        font-size: 14px;
    }

    .progress.is-small.is-primary {
    }

    .progress.is-small.is-link {
    }

    .progress.is-small.is-success {
    }
    .featured_tech {
        background-color: #eee;
    }


    .columns {
    }

    .hero__intro.column.has-text-black {
        text-align: right;
        padding-right: 45px;
        text-transform: uppercase;
    }

    .hero__intro--hello {
        font-size: 24px;
        border-bottom: 1px solid #202020;
    }

    .hero__intro--who {
        font-size: 38px;
        letter-spacing: 4px;
    }

    .hero__intro--fname {
        font-size: 38px;
        font-weight: bold;
        letter-spacing: 4px;
    }

    .hero__intro--nlame {
        font-size: 38px;
        font-weight: bold;
        letter-spacing: 4px;
    }

    .hero__image.column {
        min-height: 422px;
        overflow: hidden;
        position: relative;
    }

    .hero__img {
        max-width: 300px;
        position: absolute;
        top: 1%;
        z-index: 9999;
    }
    @media screen and (max-width: 768px) {
        .column.row-section {
            text-align: center;
        }
        .hero__img {
            text-align: center;
        }
        .hero__image.column {
            text-align: center;
        }
    }

</style>