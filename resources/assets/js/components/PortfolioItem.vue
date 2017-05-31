<template>

    <div>
        <template v-if="item.type === 'image'">
            <img :src="item.image">
        </template>
        <template v-if="item.type === 'video'">
            <iframe :src="item.url" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </template>

        <!--<div class="portfolio-meta">-->
        <!--<p class="portfolio-title">{{ item.name }}</p>-->
        <!--<p>{{ item.description }}</p>-->
        <!--</div>-->

    </div>
</template>

<script>
  export default {

    name: 'PortfolioItem',

    props: ['item']

  }
</script>
