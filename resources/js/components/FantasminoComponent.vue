<template>
  <div class="fantasmino-container">
    <img class="fantasmino-img" :src="'/storage/imgs/' + ghost_color.name + '.png'" alt="">

    <div class="select-colori">
      <select name="colore" v-model="selectedColor">

        <option v-for="color in all_colors" :value="color.id"
        :selected="color.name === ghost_color.name"
        >
          {{ color.name }}
        </option>

      </select>
    </div>

  </div>
</template>

<script>
    export default {

        data: function() {
           return {
              selectedColor: this.ghost_color.id,
           };
        },

        props: {
          ghost_color: Object,
          all_colors: Array,
          ghost: Object
        },

        watch: {
          selectedColor: function(newColor) {

            console.log(newColor);
            let url = 'http://localhost:8000/edit/ghost/' + this.ghost.id
        
            axios.post(url, {
                newcolor: this.selectedColor
              })
              .then(function (response) {
                console.log(response.data);
              })

          }

        },

        mounted() {
            console.log('Fantasmino mounted.');
        },

        methods: {
           // edit: function (colorId) {
           //   console.log(colorId);
           // }
        }

    }
</script>
