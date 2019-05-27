<template>
  <div class="col-4 fondo style">
    <p class="titulo_bar">BARES</p>
    <div v-for="bar in bares">
      <hr class="border">
      <p class="datos_bar">{{ bar.nombre }}</p>
      <p class="datos_bar">ABIERTO HOY</p>
      <span class="datos_bar">{{ bar.hora_inicio }} - {{ bar.hora_final }}</span>
      <a href="#" role="button">
        <img src="/boton_gris.png" class="ver-mas" @click="vermasBares(bar.id)">
      </a>
    </div>
    <hr class="border">
  </div>
</template>
<script>
export default {
  data() {
    return {
      bares: []
    };
  },
  mounted() {
    this.baresAll();
  },
  methods: {
    baresAll() {
      var dia = this.formatoDias();

      axios.get("/api/bares/" + dia).then(res => {
        this.bares = res.data;
      });
    },
    vermasBares(id) {
      var dia = this.formatoDias();
      this.$parent.show(id, dia);
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