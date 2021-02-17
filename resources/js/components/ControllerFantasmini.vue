<template>
  <div>
    <div class="create-ghost">

      <h2>Create a new Ghost</h2>
      <select name="colore" v-model="newGhostColor">
        <option v-for="color in all_colors" :value="color.id">
          {{ color.name }}
        </option>
      </select>
      <button type="button" name="Crea" @click="crea()">Crea</button>

    </div>

    <fantasmino-component
      v-for="fantasmino in all_fantasmini"
      :key="fantasmino.id"
      :ghost_color="all_colors[(fantasmino.color_id - 1)]"
      :all_colors="all_colors"
      :ghost="fantasmino"
    ></fantasmino-component>

  </div>

</template>

<script>
    export default {

        data: function() {
           return {
             newGhostColor: '',
             all_fantasmini: this.fantasmini
           };
        },

        props: {
          fantasmini: Array,
          all_colors: Array
        },

        watch: {

        },

        mounted() {
            console.log('Controller fantasmini mounted.');
            console.log(this.fantasmini);
            // console.log(this.all_colors);
        },

        methods: {
          crea: function(){
            console.log(this.newGhostColor);
            axios.post('http://localhost:8000/create/ghost', {
                color: this.newGhostColor
              })
              .then((response) => {
                // console.log(response.data);
                this.all_fantasmini = response.data.ghosts;
              })
          }
        }

    }
</script>
