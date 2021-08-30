<template>
    <div class="slickList overflow">

        <div class="slickTrack">
            <div class="slickTrack__visible">
                <cardComponent
                    v-for="(item, i) in specialists" :key="i"
                    :item="item"
                    :routedoctor="routedoctor"
                    :routeshedule="routeshedule"
                />
            </div>
        </div>

        <div class="slickNavigation">
            <button class="slickNavigation__left" data-control="left">
                <i class="fas fa-chevron-left" data-control="left"></i>
            </button>
            <button class="slickNavigation__right" data-control="right">
                <i class="fas fa-chevron-right" data-control="right"></i>
            </button>
        </div>
    </div>
</template>
<script>
import cardComponent from '../doctor/cardComponent.vue'

export default {
    name: 'CardCarouselComponent',
    props: {
        doctors: Array,
        routedoctor: {type: String},
        routeshedule: {type: String},
    },
    data() {
        return {
            offset: 0,
            scrollWidth: 0,
            widthItem: 0,
            sliderWidth: 0,
            marginBlock: 10,
            specialists: [],
        }
    },
    components: {
        cardComponent
    },
    methods: {
        initSlider() {

            setTimeout(() => {
                this.widthItem = document.querySelector('.slickSlide').offsetWidth;
                this.sliderWidth = this.specialists.length * this.widthItem;
                this.currentOffsetBlock = document.querySelector('.slickList').offsetWidth;
                this.scrollWidth = document.querySelector('.slickTrack__visible').scrollWidth;
            }, 1000)

            let slickNavigation = document.querySelector('.slickNavigation');
            slickNavigation.addEventListener('click', (e) => {
                let control = e.target.dataset.control;

                if (control !== 'left' && control !== 'right') {
                    return null
                }

                if (control === 'left') {
                    this.slideToLeft();
                } else {
                    this.slideToRight();
                }

            })
        },
        slideToLeft() {
            let slickList = document.querySelector('.slickList');
            let slickListWidth = document.querySelector('.slickList').offsetWidth;
            let slickNavigation__left = document.querySelector('.slickNavigation__left');
            let slickNavigation__right = document.querySelector('.slickNavigation__right');
            let slickTrack = document.querySelector('.slickTrack');
            let ostatok = slickListWidth - (Math.abs(this.offset));

            slickNavigation__right.classList.remove('slickNavigation__hide');

            if (Math.abs(this.offset) > Math.abs(this.widthItem)) {
                this.offset = this.offset + this.widthItem;
                slickTrack.style.transform = `translateX(${this.offset}px)`;
            } else {
                this.offset = 0;
                slickNavigation__left.classList.add('slickNavigation__hide');
                slickTrack.style.transform = `translateX(${this.offset}px)`;
            }

        },
        slideToRight() {
            let slickList = document.querySelector('.slickList');
            let slickListWidth = document.querySelector('.slickList').offsetWidth;
            let slickNavigation__left = document.querySelector('.slickNavigation__left');
            let slickNavigation__right = document.querySelector('.slickNavigation__right');
            let slickTrack = document.querySelector('.slickTrack');
            let ostatok = this.scrollWidth + (this.offset - this.marginBlock) - slickListWidth;

            slickNavigation__left.classList.remove('slickNavigation__hide');

            if (ostatok === 0) {
                return
            }

            if (ostatok >= this.widthItem) {
                this.offset = this.offset - this.widthItem;
                slickTrack.style.transform = `translateX(${this.offset}px)`;
            } else {
                this.offset = this.offset - (ostatok + this.marginBlock + this.marginBlock * 2);
                slickTrack.style.transform = `translateX(${this.offset}px)`;
                slickNavigation__right.classList.add('slickNavigation__hide');
            }
        },
    },
    mounted() {
        this.specialists = this.doctors;
        this.initSlider();
    }
}
</script>
<style>
    .slickList {
        position: relative;
        padding: 10px;
    }

    .overflow {
        overflow: hidden;
    }

    .slickList__body {
        display: flex;
        justify-content: space-between;
    }

    .slickTrack__visible {
        display: flex;
        flex-wrap: nowrap;
    }

    .slickTrack__visibleList {
        display: flex;
        flex-wrap: wrap;
    }

    .slickTrack {
        position: relative;
        padding: 0 10px;
        transition: all 0.6s;
    }

    .slickNavigation__left {
        position: absolute;
        top: calc(50% - 50px);
        left: 0;
        width: 50px;
        height: 50px;
        background: white;
        border-radius: 50px;
        box-shadow: 1px 6px 14px rgb(0 0 0 / 20%);
        transition: background 0.6s;
    }

    .slickNavigation__left:hover {
        background: #4890cb;
        color: white;
    }

    .slickNavigation__right {
        position: absolute;
        top: calc(50% - 50px);
        right: 0;
        width: 50px;
        height: 50px;
        background: white;
        border-radius: 50px;
        box-shadow: 1px 6px 14px rgb(0 0 0 / 20%);
        transition: background 0.6s;
    }
    .slickNavigation__hide {
        display: none;
    }

    .active_star {
        color: #f4c150;
    }

    .noActive_star {
        color: #dedfe0;
    }

</style>
