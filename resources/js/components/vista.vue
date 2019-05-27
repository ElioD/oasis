<template>
  <div class="col-4">
    <p class="vista" v-if="vista.length == ''">DATOS</p>
    <div v-else>
      <p class="vista">{{ vista[0].nombre }}</p>
      <img :src="'https://api-onow.oasishoteles.net/' + vista[0].logo" width="40%" class="logo">
      <img
        :src="'https://api-onow.oasishoteles.net/' + vista[0].img_portada"
        width="100%"
        class="portada"
      >
      <div class="container info2">
        <div class="row">
          <div class="col-6">
            {{ vista[0].nombre }}
            <br>
            {{ vista[0].concepto_es }}
          </div>

          <div class="col-6 linea">
            <p>ABIERTO HOY</p>
            <p>{{ vista[0].hora_inicio }} - {{ vista[0].hora_final }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["dia", "id"],
  data() {
    return {
      vista: []
    };
  },
  watch: {
    id: function(newQuestion) {
      this.show();
    }
  },
  methods: {
    show() {
      axios.get("/api/show/" + this.id + "/" + this.dia).then(res => {
        this.vista = res.data;
      });
    }
  }
};
</script>