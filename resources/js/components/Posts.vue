<template>
  <div class="posts">
    <ul>
      <li v-for="post in posts" :key="post.id">
        {{ post.title }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "Posts",
  data() {
    return {
      posts: [],
    };
  },
  mounted() {
    // Make a request for a user with a given ID
    axios
      .get("/api/posts")
      .then((response) => {
        // handle success
        this.posts = response.data;
        // console.log(this.posts);
      })
      .catch((error) => {
        // handle error
        console.log(error);
      });
  },
};
</script>