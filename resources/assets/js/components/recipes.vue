<template>
    <div id="app">
        <div class="category pb-5" id="category">
            <div class="d-flex flex-wrap h-auto w-100 pl-5 pr-5 pt-5 pb-5 mb-5 justify-content-center">
                <div v-for="value in categories.categories"
                     class="flex flex-wrap h-25 m-2 p-2 text-center" >
                    <h2 class="text-truncate"> {{value.strCategory}}</h2>
                    <a href="#meal"><img v-bind:src="value.strCategoryThumb" @click="updateCategory(value.strCategory)"
                                         class="w-100" id="cat"></a>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap meal justify-content-center" id="meal">
            <div v-if="showH" class="d-flex flex-row w-100 p-4 justify-content-center text-white">
                <h2>Latest Meals</h2>
            </div>
            <div class="d-flex flex-row h-25 pl-0 m-4 rounded mealValues" v-for="(value, key) in meals.meals">
                <div class="d-flex flex-column h-100 text-white justify-content-end text-truncate">
                    <div class="d-flex flex-row w-100 pl-1 pr-1 pt-2 mx-auto justify-content-center text-truncate">
                        <h4 class="text-truncate">{{value.strMeal}}</h4>
                    </div>
                    <popper trigger="hover" :options="{placement: 'top'}" class="align-self-end rounded-circle p-2 popperMain">
                        <div class="popper"> See Recipe</div>
                        <a href="#recipe" class="block fa fa-cutlery top p-lg-2 p-md-1 text-white" slot="reference"
                           aria-hidden="true" @click="updateRecipe(value.idMeal)">
                        </a>
                    </popper>
                    <div class="d-flex flex-column">
                        <img :src="value.strMealThumb" class="img-fluid w-auto">
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex recipe justify-content-center" id="recipe">
            <div class="row w-100 h-100 pt-4 pb-4 justify-content-center recipeDetail">
                <div v-if="showR" class="d-flex flex-row w-100 p-4 justify-content-center text-white">
                    <h2>Recipe of the Day</h2>
                </div>
                <div v-for="value in recipe.meals" class="row w-100 justify-content-center text-white recipeValue">
                    <h1 class="pb-3" style="font-size: 50px">{{value.strMeal}}</h1>
                </div>
                <div class="col-lg-2 col-md-4 p-4 text-white justify-items-center">
                    <div v-for="value in recipe.meals">
                        <img :src="value.strMealThumb" class="img-fluid">
                        <div class="btn w-100 h-25 mt-4 p-2 text-white recipeStyle">
                            <a :href="value.strYoutube" class="text-white recipeVideo">Watch Video</a>
                        </div>
                        <div class="w-100 pt-3 pb-3 justify-content-center">
                            <i class="fa fa-lg fa-map-marker pl-2 pr-2 pb-2 recipeIcon" aria-hidden="true">
                                <a class="text-white pl-2">{{value.strArea}}</a></i>
                            <i class="fa fa-lg fa-tag pl-2 pr-2 pb-2 recipeIcon" aria-hidden="true">
                                <a class="text-white pl-2">{{value.strTags}}</a></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 bg-dark py-4 m-4 text-white h-100" style="opacity: 0.8">
                    <h3 class="pb-2 pr-2 text-truncate">Ingredients</h3>
                    <div v-for="value in recipe.meals" class="d-flex flex-column justify-content-start">
                        <p><a class="float-left">{{value.strIngredient1}}</a><a class="float-right">{{value.strMeasure1}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient2}}</a><a class="float-right">{{value.strMeasure2}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient3}}</a><a class="float-right">{{value.strMeasure3}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient4}}</a><a class="float-right">{{value.strMeasure4}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient5}}</a><a class="float-right">{{value.strMeasure5}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient6}}</a><a class="float-right">{{value.strMeasure6}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient7}}</a><a class="float-right">{{value.strMeasure7}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient8}}</a><a class="float-right">{{value.strMeasure8}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient9}}</a><a class="float-right">{{value.strMeasure9}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient10}}</a><a class="float-right">{{value.strMeasure10}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient11}}</a><a class="float-right">{{value.strMeasure11}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient12}}</a><a class="float-right">{{value.strMeasure12}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient13}}</a><a class="float-right">{{value.strMeasure13}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient14}}</a><a class="float-right">{{value.strMeasure14}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient15}}</a><a class="float-right">{{value.strMeasure15}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient16}}</a><a class="float-right">{{value.strMeasure16}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient17}}</a><a class="float-right">{{value.strMeasure17}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient18}}</a><a class="float-right">{{value.strMeasure18}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient19}}</a><a class="float-right">{{value.strMeasure19}}</a>
                        </p>
                        <p><a class="float-left">{{value.strIngredient20}}</a><a class="float-right">{{value.strMeasure20}}</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 bg-dark p-4 m-4 text-white methodRecipe">
                    <h3 v-if="recipe.meals" class="pb-2">Method</h3>
                    <div v-for="value in recipe.meals" class="d-flex flex-column justify-content-start text-justify">
                        {{ value.strInstructions }}
                    </div>
                </div>
            </div>
        </div>
        <div id="return-to-top">
            <div class="d-flex justify-content-center align-items-center rounded-circle scrollTop">
                <a href="#category">
                    <div class="fa fa-lg fa-chevron-up text-white" aria-hidden="true"></div>
                </a>
            </div>
        </div>
    </div>
</template>
<script>
    import Popper from 'vue-popperjs';
    import 'vue-popperjs/dist/css/vue-popper.css';

    export default {
        components: {
            'popper': Popper
        },
        data() {
            return {
                categories: [],
                meals: '',
                strCategory: '',
                recipe: '',
                showH: true,
                showR: true
            }
        },
        methods: {
            updateCategory(value) {
                let strCategory = value;
                this.showH = false;
                this.$http.get("https://www.themealdb.com/api/json/v1/1/filter.php?c=" + strCategory).then(response => {
                    this.meals = response.body;
                }, error => {
                    console.error(error);
                });
                $("a[href^='#']").click(function (e) {
                    e.preventDefault();
                    let position = $($(this).attr("href")).offset().top;
                    $("body, html").animate({
                        scrollTop: position
                    }, 600);
                });
            },
            updateRecipe(value) {
                let Rid = value;
                this.showR = false;
                this.$http.get("https://www.themealdb.com/api/json/v1/1/lookup.php?i=" + Rid).then(response => {
                    this.recipe = response.body;
                }, error => {
                    console.error(error);
                });
                $("a[href^='#']").click(function (e) {
                    e.preventDefault();
                    let position = $($(this).attr("href")).offset().top;
                    $("body, html").animate({
                        scrollTop: position
                    }, 600);
                });
            }
        },
        created() {
            this.$http.get("https://www.themealdb.com/api/json/v1/1/categories.php").then(response => {
                this.categories = response.body;
            }, error => {
                console.error(error);
            });
            this.$http.get("https://www.themealdb.com/api/json/v1/1/latest.php").then(response => {
                this.meals = response.body;
            }, error => {
                console.error(error);
            });
            this.$http.get("https://www.themealdb.com/api/json/v1/1/random.php").then(response => {
                this.recipe = response.body;
            }, error => {
                console.error(error);
            });
        }
        ,
    }
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 50) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });
    $("a[href^='#']").click(function (e) {
        e.preventDefault();
        let position = $($(this).attr("href")).offset().top;
        $("body, html").animate({
            scrollTop: position
        }, 600);
    });
</script>