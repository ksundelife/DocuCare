<template>
    <div class="slickSlide">
        <div class="slickSlide__imgBlock">
            <img class="slickSlide__img" :src="item.photo" :alt="item.user.name">
        </div>
        <div class="slickSlide__content">
            <div class="slickSlide__header">
                <h3 class="slickSlide__h3">{{item.user.surname+' '+item.user.name+' '+item.user.second_name}}</h3>
            </div>
            <div class="slickSlide__rating">
                <div v-for="(start, i) in 5" :key="i">
                    <div v-if="item.rating <= i">
                        <i class="fas fa-star noActive_star"></i>
                    </div>
                    <div v-else>
                        <i class="fas fa-star active_star"></i>
                    </div>
                </div>
                <span>({{ item.scoresCount }})</span>
            </div>

            <div class="slickSlide__speciality">{{ item.category.name }}</div>
            <div class="slickSlide__coast"><i class="far fa-money-bill-alt"></i> {{ item.price | toFix }}</div>

        </div>
        <div class="slickSlide__buttons">
            <a :href="routedoctor.replace('xxx', item.id)" class="slickSlide__btn btn">Подробнее</a>
            <a :href="routeshedule.replace('xxx', item.id)" class="slickSlide__btn btn slickSlide__btn_bookNow">Записаться</a>
        </div>

    </div>
</template>
<script>
import toFix from '../../filters/toFix';
export default {
    name: 'cardComponent',
    props: ['item', 'routedoctor', 'routeshedule'],
    filters: {
        toFix
    },
}
</script>
<style>
    .slickSlide {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 10px;
        width: 250px;
        box-sizing: border-box;
        box-shadow: 2px 2px 13px rgb(0 0 0 / 10%);
        background: white;
        margin: 0 5px 20px 5px;
    }
    .slickSlide__header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .slickSlide__imgBlock {
        position: relative;
        overflow: hidden;
    }
    .slickSlide__img {
        transition: all 0.6s;
    }

    .slickSlide__img:hover {
        transform: scale(1.2);
    }

    .slickSlide__btn {
        color: #4890cb;
        font-size: 13px;
        border: 2px solid #4890cb;
        text-align: center;
        display: block;
        font-weight: 500;
        padding: 6px;
        border-radius: 10px;
        transition: all 0.6s;
    }
    .slickSlide__buttons {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .slickSlide__btn:hover {
        background: #4890cb;
        color: white;
    }
    .slickSlide__btn_bookNow {
        background: #4890cb;
        color: white;
        margin-left: 10px;
    }
    .slickSlide__btn_bookNow:hover {
        background: #4184bb;
    }
    .slickSlide__content {
        color: #757575;
        font-size: 13px;
        margin-top: 10px;
    }
    .slickSlide__rating {
        display: flex;
        margin-top: 10px;
    }
    .slickSlide__speciality {
        margin-top: 10px;
    }
    .slickSlide__coast {
        margin-top: 10px;
    }
    .slickSlide__statusOk {
        color: green;
    }
    .slickSlide__statusNotOk {
        color: red;
    }
</style>
