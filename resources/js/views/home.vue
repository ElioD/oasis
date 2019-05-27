<template>
  <div>
    <div class="container">
      <div class="row">
        <header-component></header-component>
      </div>
      <div class="row">
        <restaurantes-component></restaurantes-component>
        <bares-component></bares-component>
        <vista-component :dia="dia" :id="id"></vista-component>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      id: "",
      dia: ""
    };
  },
  methods: {
    show(res, dia) {
      this.id = res;
      this.dia = dia;
    }
  }
};
</script>