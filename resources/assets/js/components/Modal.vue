<template>
    <div class="modal" :class="{ 'is-active': showModal }">
        <div class="modal-background" @click="$emit('close-modal')"></div>
        <div class="modal-card">
            <section class="modal-card-body portfolio-modal">
                <div class="portfolio-asset">
                    <slot></slot>
                </div>
            </section>
        </div>
        <button class="modal-close" @click="$emit('close-modal')"></button>
    </div>
</template>

<script>
  export default {
    props: ['showModal']
  }
</script>