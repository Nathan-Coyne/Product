<template>
  <div>
    <h2>{{ product.name }}</h2>
    <p>Description: <span> {{product.description}}</span></p>
    <p>Price: <span> {{product.price}}</span></p>
    <p>Stock: <span> {{product.stock}}</span></p>

  </div>
</template>
<script>

export default {
  props: {
    product: {
      type: Object,
      required: true
    }
  },
}
</script>

<style scoped>

</style>