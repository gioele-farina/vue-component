<template>
  <div class="fantasmino-container">
    <img class="fantasmino-img" :src="'/storage/imgs/' + color + '.png'" alt="">
  </div>
</template>

<script>
    export default {

        data: function() {
           return {

           };
        },

        props: {
          color: String
        },

        mounted() {
            console.log('Fantasmino mounted.')
            console.log(this.color);
        },


    }
</script>
