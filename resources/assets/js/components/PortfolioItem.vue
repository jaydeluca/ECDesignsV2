<template>

    <section class="modal-card-body portfolio-modal">
        <div class="portfolio-asset">
            <template v-if="item.type === 'image'">
                <img :src="item.image">
            </template>
            <template v-if="item.type === 'video'">
                <iframe :src="item.url" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </template>
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
