<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

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

</style>
<script>
export default {};
</script>
