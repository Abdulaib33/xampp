<template>
  <div id="app">
    <div class="container">
    <h1>{{ message }}</h1>
    <input v-model="message" placeholder="Type Something">
    <button @click="resetMessage">Reset</button>
    </div>
  </div>
</template>

<script>


export default {
  name: 'App',
  data() {
    return {
      message: 'Hello Vue!'
    }
  },
  methods: {
    resetMessage() {
      this.message = "Hello Vue!";
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
  background: rgba(255, 255, 255, 0.1);
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
