<template>
    <div>
        <section class="section">
            <div class="container portfolio" v-if="dataLoaded">
                <template v-for="item in portfolioItems">
                    <div class="portfolio-item" @click="showPortfolioItem(item)">
                        <img :src="item.thumbnail">
                    </div>
                </template>
            </div>
        </section>

        <modal :show-modal="showModal" @close-modal="showModal=false">
            <portfolio-item :item="featuredItem"></portfolio-item>
        </modal>
    </div>
</template>

<script>
  export default {
    name: 'Portfolio',

    data() {
      return {
        dataLoaded: false,
        showModal: false,
        featuredItem: {},
        portfolioItems: {}
      }
    },

    components: {
      'portfolio-item': require('./PortfolioItem.vue'),
      'modal': require('./Modal.vue')
    },

    created() {
      axios.get('/api/portfolio').then(res => {
        this.portfolioItems = res.data;
        this.dataLoaded = true;
      })
    },

    methods: {
      showPortfolioItem(item) {
        this.featuredItem = item;
        this.showModal = true;
      }
    }
  }
</script>