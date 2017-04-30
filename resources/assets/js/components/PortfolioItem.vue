<template>

    <section class="modal-card-body portfolio-modal">
        <div class="portfolio-asset">
            <img :src="item.image">
        </div>
        <div class="portfolio-meta">
            <p class="portfolio-title">{{ item.name }}</p>
            <p>{{ item.description }}</p>
        </div>

    </section>

</template>

<script>
  export default {

    name: 'PortfolioItem',

    props: ['item']

  }
</script>
