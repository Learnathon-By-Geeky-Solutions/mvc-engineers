import { useState } from "react";


const Home = () => {
  const [count, setCount] = useState(0)
  

  return (
    <div className='text-center'>
      <h1 className='text-xl mb-8 font-bold'> RMS || Learnathon </h1>
      <button className='btn btn-primary btn-lg' onClick={() => setCount((count) => count + 1)}>
        count is {count}
      </button>
    </div>
  );
};

export default Home;