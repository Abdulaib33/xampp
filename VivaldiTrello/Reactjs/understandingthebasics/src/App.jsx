import logo from './logo.svg';
import './App.css';


function App() {

  let i = 2
  let myStyle = {
    fontSize: 100,
    color: "#FF0000"
  }
  let background = {
    backgroundColor: "darkslategray",
    color: "wheat"
  }

  
    
    let state = {
      header: "Header from state",
      content: "Content from state"
    }


  return (
    <div className="App" style = {background}>
      <p>{state.header}</p>
      <p>{state.content}</p>
      {
        // < Header />
        // THEY ARE ALL THE SAME, IT'S LIKE CALLING A IMG tag
        // <Header></Header>
      }
      <>
      < Header />
      <Content/>
      </>
      <h1>{i === 1 ? "BADASS" : "Trop BADASS HAHAHAHHAHHAHAHAH"}</h1>
      <h2 style= {myStyle}> HEADER</h2>
      { 
        // End of the line Comment...
        // Another Comment
      }

      {/* 

      Multi line comment ... 
      
      */}
      <img src= {logo} alt="coucou"/>

      <HelloWorld> 
        <h1>Abdoulaye Bayo</h1>
      </HelloWorld>

    </div>
  );
}

function HelloWorld() {
  return (

    <h1>Hello World</h1>

  )
}

function Header() {
  return (
    <div>
      <h1>POURQUIO TU EST AUTANT UN GENIE</h1>
    </div>
  )
}

function Content() {
  return (
    <div>
      <h1>IM THE BEST ROBLOX PLAYER AND I WILL BE in the will of God THE BEST ROBLOX DEV</h1>
    </div>
  )
}

export default App;
