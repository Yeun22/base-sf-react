import React from 'react';
import ReactDOM from 'react-dom';
import ButtonCompo from './components/ButtonCompo';

const App = (props) => {
  return(
    <>
    <h1> Hello {props.name} !</h1>
        <ButtonCompo />
    </>
    
  )
  
};

ReactDOM.render(<App {...PROPS} />, document.getElementById('root'));

