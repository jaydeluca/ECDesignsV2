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

        <div class="modal" :class="{ 'is-active': showModal }">
            <div class="modal-background" @click="showModal = false"></div>
            <div class="modal-card">
                <portfolio-item :item="featuredItem"></portfolio-item>
            </div>
            <button class="modal-close" @click="showModal = false"></button>
        </div>

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
        'portfolio-item': require('./PortfolioItem.vue')
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