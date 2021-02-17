<template>
  <div class="fantasmino-container" v-show="!ifDeleted">
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

    <button type="button" name="Delete" @click="delete_ghost()" >Delete</button>
  </div>
</template>

<script>
    export default {

        data: function() {
           return {
              selectedColor: this.ghost_color.id,
              ghostColor: this.ghost_color.name,
              ifDeleted: false
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
            // console.log(this.ghost_color);
            // console.log(this.all_colors);
            // console.log(this.ghost);
        },

        methods: {
           delete_ghost: function () {
             axios.get('http://localhost:8000/delete/ghost/' + this.ghost.id)
              .then((response) => {
                console.log(response);
                this.ifDeleted = true;
              })
           }
        }

    }
</script>
