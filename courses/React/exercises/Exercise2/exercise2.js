import React from 'react';

import './styles.css';

const INVALID_MESSAGE = "Invalid message";
const VALID_MESSAGE = "Valid message";
az
// don't change the Component name "App"
export default function App() {
    const [messageValidity,setMessageValidity] = React.useState(INVALID_MESSAGE);
    const messageChangeHandler = (event) => {
        const value = event.target.value;
        
//         if (value.trim().length < 3)
//     {
    
//     setMessageValidity('Invalid')
// } else {
//     setMessageValidity('Valid')
//  }

        setMessageValidity(value.trim().length < 3 ? INVALID_MESSAGE : VALID_MESSAGE);
    }




    return (
        <form>
            <label>Your message</label>
            <input type="text" onChange={messageChangeHandler}/>
            <p>{messageValidity}</p>
        </form>
    );
}