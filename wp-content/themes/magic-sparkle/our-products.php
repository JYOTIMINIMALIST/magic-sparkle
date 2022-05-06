<?php get_header(); /*Template Name: Our Products*/ ?>

<section class="ourproductsSection" id="productApp">
	<div class="wrapper" >
		<ul class="tabs">
			<li v-for='t in product' class="tab fontW300 font18 colorW" :class="{'active': t == selelctedTab}" @click="selectTab(t)">{{t.tab_heading}}</li>
		</ul>

		<div class="tab-content" v-if="selelctedTab">
			<div class="productsContent">
	  			<div class="productsGallery">
	  				<template v-if="selectedproduct">
	  					<img :src="selectedproduct.product_image" class="dummyImg" loading="lazy" alt="" />
		  				<transition name="slide-fade">
							<img v-if="show" :src="selectedproduct.product_image" class="dummyImg1" loading="lazy" alt="" />
						</transition>
					</template>
					<template v-else>
	  					<img :src="selelctedTab.tab_image" class="dummyImg" loading="lazy" alt="" />
		  				<transition name="slide-fade">
							<img v-if="show" :src="selelctedTab.tab_image" class="dummyImg1" loading="lazy" alt="" />
						</transition>
					</template>
	  			</div>
  				<div class="productsInfo">
  					<div>
  						<template v-if="selectedproduct">
	  						<transition name="slide-fade">
		  						<div v-if="show">
		  							<h2 class="font60 colorW fontW400 playfair ajaxheading">{{selectedproduct.product_heading}}</h2>
				    				<p class="font18 colorW fontW400" v-html="selectedproduct.product_description"></p>
		  						</div>
				    		</transition>
				    	</template>
				    	<template v-else>
				    		<transition name="slide-fade">
		  						<div v-if="show">
		  							<h2 class="font60 colorW fontW400 playfair ajaxheading">{{selelctedTab.tab_heading}}</h2>
				    				<p class="font18 colorW fontW400" v-html="selelctedTab.tab_description"></p>
		  						</div>
				    		</transition>
				    	</template>
  					</div>
		    		<div>
		    			<ul class="productsColors">
	    					<li class="colorCircle" v-for='p in selelctedTab.product_content' @click="selectProduct(p)">
	    						<img :src="p.product_color" class="colorPick" loading="lazy" alt="" />
	    					</li>
			    		</ul>
						<div class="productsFeatures">
			    			<div class="productsFeaturesInfo" v-for='f in selelctedTab.product_features'>
								<img :src="f.feature_icon" loading="lazy" alt="" />
			    				<p class="colorW fontW400">{{f.feature_text}}</p>
			    			</div>
			    		</div>
			    		<a :href="selelctedTab.cta_link" class="cta font18 fontWeight400 colorW sparkley">{{selelctedTab.cta_text}}</a>
		    		</div>
	  			</div>
	  		</div>
  		</div>

  		<p v-else>Please add data from dashboard</p>

	</div>
</section>

<?php get_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<script type="text/javascript">
	<?php
		$branch_array_json = json_encode(get_field('tabs_content'));
	?>
	const app = new Vue({
	el: "#productApp",
	data: {
		product: <?= $branch_array_json; ?>,
        selelctedTab: null,
        selectedproduct: null,
        show: true,
    },
    mounted(){
        const self= this;

        let tab = self.getParameterByName('tab');
        console.log(tab)
        if(tab){
        	console.log(tab);

        	const selelctedTab = this.product.find(e=> e.tab_heading.toLowerCase().replace(" ", "-").trim() === tab.toLowerCase().replace(" ", "-").trim());
        	console.log(selelctedTab);
        	if(selelctedTab){
				this.selelctedTab = selelctedTab
        	}else{
        		this.selelctedTab = this.product[0];
        	}
        }else{
        	this.selelctedTab = this.product[0];
        }
        // this.selectedproduct = this.product[0]['product_content'][0];
    },
    computed:{
        filtered: function(){
            return true;
        }
    },
    methods:{
       selectTab: function(value){
       		console.log(value);
       			this.selelctedTab = value;
       			this.selectedproduct = null;
       },
       selectProduct: function(value){
       		const self= this;
       		this.show= false;
   			this.selectedproduct = value;
   			setTimeout(function() {
   				self.show=true;
   			}, 100);

       },
       getParameterByName: function(name, url = window.location.href) {
          	name = name.replace(/[\[\]]/g, "\\$&");
          	var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
          		results = regex.exec(url);
          	if (!results) return null;
          	if (!results[2]) return "";
          	return decodeURIComponent(results[2].replace(/\+/g, " "));
          }
    }
})
</script>