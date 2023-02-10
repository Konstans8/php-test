
import reactLogo from './assets/react.svg'
import './App.css'

function App() {
  return (
    <div>
      <form action="../sendmail.php" method="post" className='wrapper'>
        <select name="subject">
          <option disabled selected>Theme mail</option>
          <option value="1">Hello</option>
          <option value="2">How are you?</option>
          <option value="3">Wtf?</option>
        </select>
        <input type="email" name="email" id="" placeholder='please mail' maxLength='50' required/>
        <textarea name="message" id="" placeholder='Write text' maxLength='150' required></textarea>
        <input type="submit" value="Send mail" />
      </form>
    </div>
  )
}


export default App
