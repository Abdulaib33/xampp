<template>
  <div id="app" @click="handleParentClick">
    <div class="container">
    <h1>{{ message }}</h1>
    <input v-model="message" placeholder="Type Something">
    <button @click="resetMessage">Reset</button>

    <h1>{{ message2 }}</h1>
    <button @click="changeMessage2">Click Me</button>

    <h1>{{ message2_1 }}</h1>
    <p>Current Count: {{ count }}</p>
    <button @click="increaseCount">Increase Count +1</button>
    <button @click="descreaseCount">Decrease Count -1</button>
    <button @click="resetCount">Reset Count 0</button>

    <p>Current date : {{ new Date().toLocaleDateString() }}</p>

    <img :src="imageUrl" alt="Vue Logo">
    <a :href="profileLink">VisitProfile</a>

    <input v-model="username" placeholder="Enter you Username">
       <p>Hello, {{username}}</p> 
    <p v-if="isLoggedIn">Welcome Back</p>
    <p v-else>Please Log In</p>

    <div @click.stop="handleChildClick"> <!-- The .stop will prevent the handleParentClick to execute when we click the child, but when we click the parent the child will not be executed aswell -->
      Click inside this box
    </div>



    <h1>Computed Properties Example</h1>

    <input v-model="firstname" placeholder="Enter your Firstname">
    <input v-model="lastname" placeholder="Enter your Lastname">
    <p>Your fullname is {{ fullname }}</p>


    </div>
  </div>
</template>

<script>


export default {
  name: 'App',
  data() {
    return {
      message: 'Hello Vue!',
      message2: "Hello Vue!",
      message2_1: "Welcome to Vue.js",
      count: 0,
      imageUrl: "https://vuejs.org/images/logo.png",
      profileLink: "https://vuejs.org",
      username: '',
      isLoggedIn: false,

      firstname: "",
      lastname: ""
    }
  },
  methods: {
    resetMessage() {
      this.message = "Hello Vue!";
    }, 
    changeMessage2() {
      this.message2 = "You click the button",
      setTimeout(() => {
        this.message2 = "Hello Vue! back after 2secs";
      }, 2000);
    },
    increaseCount() {
      this.count += 1
    },
    resetCount() {
      this.count = 0
    },
    descreaseCount() {
      this.count -= 1
    },


    handleParentClick() {
      alert("Parent Clicked")
    },
    handleChildClick() {
      alert("Child Clicked")
    }
  },

  computed: {
    fullname() {
      return `${this.firstname} ${this.lastname}`
    }
  }
}
</script>

<style>
/* Full-screen gradient background with animation */
#app {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(270deg, #42b983, #35495e);
  background-size: 400% 400%;
  animation: gradientAnimation 8s ease infinite;
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
}
 
/* Moving gradient animation */
@keyframes gradientAnimation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
 
/* Styling the container holding the text box and button */
.container {
  text-align: center;
  padding: 20px;
  background: darkslategray;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  backdrop-filter: blur(10px);
}
 
/* Heading styles */
h1 {
  color: white;
  margin-bottom: 20px;
  font-size: 2.5rem;
  font-weight: 600;
}
 
/* Styled input box */
input {
  padding: 10px 15px;
  border-radius: 30px;
  border: none;
  width: 300px;
  font-size: 1.2rem;
  outline: none;
  margin-bottom: 20px;
  transition: box-shadow 0.3s ease-in-out;
}
 
input:focus {
  box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
}
 
/* Button styling */
button {
  padding: 10px 30px;
  border: none;
  border-radius: 30px;
  background-color: #42b983;
  color: white;
  font-size: 1.2rem;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out, transform 0.2s ease;
}
 
button:hover {
  background-color: #35495e;
  transform: scale(1.05);
}
</style>
