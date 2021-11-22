<template>
  <div class="container">
    <h1>Componente App Vue!</h1>
    <Posts />
  </div>
</template>

<script>
import Posts from "./Posts";

export default {
  name: "App",
  components: {
    Posts,
  },
};
</script>
