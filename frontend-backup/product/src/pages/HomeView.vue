<template>
  <div>
    <h1>Categories</h1>
    <input type="text" v-model="search">
    <h2 v-if="error"> {{error}}</h2>
    <div v-else>
      <select v-model="selectedCategoryId" @change="handleCategoryChange">
        <option v-for="category in categories" :key="category.id" :value="category.id">
          {{ category.name }}
        </option>
      </select>

      <select v-if="subCategories.length" v-model="selectedSubCategoryId" @change="handleSubCategoryChange">
        <option v-for="subCategory in subCategories" :key="subCategory.id" :value="subCategory.id">
          {{ subCategory.name }}
        </option>
      </select>

      <div class="row" v-for="product in filteredProducts" :key="product.id">
        <ProductCard :product="product"/>
      </div>

    </div>
  </div>
</template>
<script>
import instance from "@/axois";
import ProductCard from "@/components/ProductCard.vue";
export default {
  components: {ProductCard},
  data() {
    return {
      error: null,
      categories: [],
      products: [],
      selectedCategoryId: null,
      subCategories: [],
      search: '',
      selectedSubCategoryId: null,
    }
  },
  async mounted() {
    const categories = await instance.get('/categories').catch(() => {
      this.error = 'Sorry it seems your product is faulty :(';
    });

    categories.status !== 200 ?
        this.error = 'Sorry it seems your product is faulty :(' :
        this.error = null

    this.categories = categories.data;

    const products = await instance.get('/products').catch(() => {
      this.error = 'Sorry it seems your product is faulty :(';
    });

    products.status !== 200 ?
        this.error = 'Sorry it seems your product is faulty :(' :
        this.error = null

    this.products = products.data.map(product => product.attributes);
  },
  computed: {
    filteredProducts() {
      if (!this.search) {
        return this.products;
      }

      return this.products.filter(product => {
        return product.name.toLowerCase().includes(this.search.toLowerCase());
      });
    }
  },
  methods: {
    async handleCategoryChange(event) {
      this.selectedCategoryId = event.target.value;
      const products = await instance.get('/categories/'+ this.selectedCategoryId +'/sub-categories/products').catch(() => {
        this.error = 'Sorry it seems your product is faulty :(';
      });

      products.status !== 200 ?
          this.error = 'Sorry it seems your product is faulty :(' :
          this.error = null

      this.products = products.data.map(product => product.attributes);

      const subCategories = await instance.get('/categories/'+ this.selectedCategoryId +'/sub-categories').catch(() => {
        this.error = 'Sorry it seems your product is faulty :(';
      });

      this.subCategories = subCategories.data;
    },
    async handleSubCategoryChange(event) {
      this.selectedSubCategoryId = event.target.value;
      const products = await instance.get('/sub-categories/'+ this.selectedSubCategoryId +'/products').catch(() => {
        this.error = 'Sorry it seems your product is faulty :(';
      });

      products.status !== 200 ?
          this.error = 'Sorry it seems your product is faulty :(' :
          this.error = null

      this.products = products.data.map(product => product.attributes);
    }
  },
}
</script>
<style scoped>

</style>