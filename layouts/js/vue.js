Vue.component('product',{
	props:{
		premium:{
			type: Boolean,
			required: true
		}
	},
	template: `<div class="container"><div class="row">
				<div class="p-img col-sm-6">
					 <ul class="a-lists yellow stars">
						<li><i class="far fa-star"></i></li>
						<li><i class="far fa-star"></i></li>
						<li><i class="far fa-star"></i></li>
						<li><i class="far fa-star"></i></li>
						<li><i class="far fa-star"></i></li>
					</ul>
					<img v-bind:src="image" />
					<div class="heart"><i class="far fa-heart red"></i></div>
				 </div>
				 <div class="p-info col-sm-6 pt-4">
				 <h3 v-once>{{  title  }}</h3>
				 <p class="p-ava" v-if="available">Available</p>
				 <p class="p-ava" v-else>Not Available</p>
				 <p>Cost: {{ cost }}</p>
				 <ul class="p-list">
					<li v-for="detail in details">{{ detail }}</li>
				 </ul>
				 <ul class="c-list">
					<li v-for="(detail, index) in color" 
						@mouseover="changeImage(index)" 
						:style="{ backgroundColor: detail.colr }">
						{{ detail.colr }}
					</li>
				 </ul>
				 <button class="a-btns" 
						 v-on:click="addProduct" 
						 v-bind:disabled="!available" 
						 :class="{ disabledButton: !available }">Add to Cart</button>
				<input type="number" min="1" class="quantity" value="1" title="Quantity"/>
				</div>
			</div></div>`,
	data() {
		return {
			brand: 'Simple',
			productName: 'Product Name', 
			selectedColor: 0, 
			details: [ 'Get SVG' , 'Get PNG' , 'Get JPG' ],
			color:[ // I think this part need to be from database
				{
					colrId: 200,
					colr: 'lightBlue',
					colrimg: 'layouts/images/10.png',
					colrQuantatiy: 10
				},
				{
					colrId: 201,
					colr: 'Pink',
					colrimg: 'layouts/images/8.png',
					colrQuantatiy: 0
				}
			]
		}
	},
	methods:{
		addProduct: function (){
			this.$emit('add-to-cart',this.color[this.selectedColor].colrId);
		},
		changeImage: function (index){
			this.selectedColor = index; 
		} 
	},
	computed:{
		title(){
			return this.brand + ' ' + this.productName;
		},
		image(){
			return this.color[this.selectedColor].colrimg;
		},
		available(){
			return this.color[this.selectedColor].colrQuantatiy;
		},
		cost(){ // This part also need to be from database
			if(this.premium){
				return 'Free';
			}else{
				return '3.00$';
			}
		}
	}
});

 
// Step 1: Create new instance from Vue
var cart = new Vue({
	el: '#app', // Step 2: Declare The element you will put your work in it.
	data:{
		premium: false,
		cart: []
	},
	   methods: {
        updateCart(id) {
          this.cart.push(id)
        }
      }
	
});
 
