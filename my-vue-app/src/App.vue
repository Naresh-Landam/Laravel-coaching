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

<template>
  <div>
    <button @click="sayHello">Click Me</button>
    <p>{{ message }}</p>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const message = ref('')

const sayHello = () => {
  message.value = 'Hello from Vue!'
}
</script>


                             