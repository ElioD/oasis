<template>
  <div class="col-4 style">
    <p class="titulo">RESTAURANTE</p>
    <div v-for="res in restaurantes">
      <hr>
      <p class="nombreRestaurante">{{ res.nombre }}</p>
      <p class="categoraRestaurante">{{ res.concepto_es }}</p>
      <p class="horario">
        ABIERTO HOY
        <br>
        {{ res.hora_inicio }} - {{ res.hora_final }}
      </p>
      <a href="#" role="button">
        <img src="/boton_blanco.png" class="ver-mas" @click="vermasRestaurante(res.id)">
      </a>
    </div>
    <hr>
  </div>
</template>

<style>
.todo {
  background-image: url("/boton_blanco.png");
}
</style>

<script>
export default {
  data() {
    return {
      restaurantes: []
    };
  },
  mounted() {
    this.restaurantesAll();
  },
  methods: {
    restaurantesAll() {
      var dia = this.formatoDias();

      axios.get("/api/restaurantes/" + dia).then(res => {
        this.restaurantes = res.data;
      });
    },
    vermasRestaurante(res) {
      var dia = this.formatoDias();
      this.$parent.show(res, dia);
      this;
    },
    formatoDias() {
      var diasSemana = new Array(
        "Domingo",
        "Lunes",
        "Martes",
        "Miercoles",
        "Jueves",
        "Viernes",
        "Sabado"
      );
      var f = new Date();
      var dia = diasSemana[f.getDay()];

      var semana = new Array(6);
      semana[0] = "Lunes";
      semana[1] = "Martes";
      semana[2] = "Miercoles";
      semana[3] = "Jueves";
      semana[4] = "Viernes";
      semana[5] = "Sabado";
      semana[6] = "Domingo";

      for (var i = 0; i < 7; i++) {
        if (semana[i] == dia) {
          return i;
        }
      }
    }
  }
};
</script>