<!-- <template>
  <div>
    <h1>Hello, {{ userName }}!</h1>
  </div>
</template>

<script>
export default {
  data() {
    return {
      userName: 'Naresh'
    };
  }
}



         </script> -->


v-bind

<!-- <template>
  <div>
    <h2>Hanuman Image</h2>
    <img :src="imageUrl" alt="Product Image" width="300" />
    <br /><br />
    <button @click="changeImage">Add Another image</button>
  </div>
</template>

<script setup>
import { ref } from 'vue';

// Start with 1st image
const imageUrl = ref("https://i.pinimg.com/236x/3c/74/f5/3c74f50824979bc2cd9f61bfc3c7e22c.jpg");

// Function to change image
function changeImage() {
  imageUrl.value = "https://t3.ftcdn.net/jpg/13/69/15/62/360_F_1369156252_Cvf0Eu8IhuRB7oALnDs7nHE5KTm3DGhC.jpg";
}
</script> -->
v-model
<!-- <template>
  <div>
    <input v-model="text" placeholder="Enter your name" />
    <p>You typed, {{ text }}</p>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const text = ref(''); // ✅ Matches v-model and {{ text }}
</script> -->


v-if, v-else-if, v-else.
<!-- 
 <template>
  <div>
    <p v-if="showOffer">"you got 50% discount"</p>
    <p v-else>"😢 No discounts available."</p>
    <button @click="showOffer = !showOffer">
      Login to see offers
    </button>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const showOffer = ref(true); // Initially not logged in
</script> -->

v-for
<!-- 
   <template>
  <div>
    <h2>🛒 Your Cart</h2>
    <ul>
      <li v-for="(item, index)  in cartItems" :key="index">
       {{ item.type }} {{ item.name }} - ${{ item.price }}
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const cartItems = ref([
  {type:'product', name: 'Laptop', price: 1200 },
  {type:'product', name: 'Headphones', price: 150 },
  {type:'product', name: 'Mouse', price: 30 },
  {type:'product', name: 'keyborad',price:90}
])
</script> -->


v- show
<!-- <template>
  <div>
    <button @click="show = !show">Toggle Message</button>
    <p v-show="show">👋 Hello, I’m always in the DOM!</p>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const show = ref(true)
</script> -->
v-on
<!-- <button v-on:click="sayHi">Click</button> -->
vue -events

<!-- <template>
  <div>
    <h2>👆 Counter Example</h2>
    <p>You clicked the button {{ count }} times.</p>
    <button @click="incrementCount">Click Me</button>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const count = ref(0)

function incrementCount() {
  count.value++
}
</script> -->

<!-- <template>
  <div>
    <button @click="cart">Add to cart</button>
    <button @click="clearCart">Clear Cart</button>
    <h1>{{ message }}</h1>
    <h1>{{ news }}</h1>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const message = ref('')
const news = ref('')

const cart = () => {
  message.value = 'Product added to cart!'
  news.value = ''
}

const clearCart = () => {
  message.value = ''
  news.value = '🛒 Cart is now empty!'
}
</script> -->


<!-- <template>
  <div>
    <input v-model="price" type="number" />
    <button @click="applyDiscount">Apply Discount</button>
    <p>{{ discountedPriceMessage }}</p>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const price = ref('')
const discountedPriceMessage = ref('')

function applyDiscount() {
  if (price.value > 100) {
    discountedPriceMessage.value = `Discounted Price: $${price.value * 0.8}`
  } else {
    discountedPriceMessage.value = 'No discount available'
  }
}
</script> -->


<!-- 
  <template>
  <form @submit.prevent="submitForm">
    <input v-model="name" placeholder="Enter your name" />
    <button type="submit">Submit</button>
  </form>
</template>

<script setup>
import { ref } from 'vue'

const name = ref('')

function submitForm() {
  alert(`Hello, ${name.value}`)
}
</script> -->


              computed properties

 <!-- <template>
  <input v-model="firstName" placeholder="First Name" />
  <input v-model="lastName" placeholder="Last Name" />
  <p>Your full name is: {{ fullName }}</p>
</template>

<script setup>
import { ref, computed } from 'vue'

const firstName = ref('')
const lastName = ref('')

const fullName = computed(() => {
  return `${firstName.value} ${lastName.value}`
})
</script> -->

<!-- App.vue -->


<!-- 
<template>
  <div style="padding: 20px">
    <h2>👤 User Info</h2>

    <input v-model="firstName" placeholder="First Name" />
    <input v-model="lastName" placeholder="Last Name" />

    <p>Full Name (Computed): <strong>{{ fullName }}</strong></p>

    <button @click="showFullName">Show Full Name</button>
  </div>
</template>

 <script setup>
import { ref, computed } from 'vue'

// Reactive data
const firstName = ref('')
const lastName = ref('')

// Computed property
const fullName = computed(() => {
  return `${firstName.value} ${lastName.value}`.trim()
})

// Method
function showFullName() {
  alert(`Full name is: ${fullName.value}`)
}
</script>  -->
                  <!-- //watcher
<template>
  <div>
    <input v-model="searchTerm" placeholder="Type to search..." />
    <p v-if="loading">🔍 Searching for "{{ searchTerm }}"...</p>
  </div>
</template>

<script setup>
import { ref, watch } from 'vue'

const searchTerm = ref('')
const loading = ref(false)

watch(searchTerm, (newVal, oldVal) => {
  if (newVal !== '') {
    loading.value = true

    setTimeout(() => {
      loading.value = false
    }, 1000) // Simulate 1 second delay
  }
})
</script> -->


<!-- <template>
  <div>
    <h2>🛍 Product: Headphones</h2>
    <input type="number" v-model="quantity" />
    <p>Price per item: ${{ price }}</p>
    <p>Total Price: ${{ totalPrice }}</p>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'

const price = ref(1200)
const quantity = ref(1)

const totalPrice = computed(() => {
  return price.value * quantity.value
})
</script> -->
<template>
  <div>
    <h2>Product: Headphones</h2>
    
    <input type="number" v-model="quantity" min="1" />  
    
    <p>Price per item: ${{ price }}</p>
    <p>Total price: ${{ totalPrice }}</p>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'

const price = ref(112)
const quantity = ref(1)

const totalPrice = computed(() => {
  return price.value * quantity.value
})
</script>
