<template>
  <div class="fantasmino-container">
    <img class="fantasmino-img" :src="'/storage/imgs/' + ghostColor + '.png'" alt="">

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
              ghostColor: this.ghost_color.name
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
              .then((response) => {
                // console.log(response.data.new_color.name);
                this.ghostColor = response.data.new_color.name;
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
