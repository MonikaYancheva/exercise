const jokesEl = document.querySelector('#jokes');
const buttonEl = document.querySelector('button');

const addNewJoke = async () => {
  const jokeText = await getDadJoke();
  const newLiEl = document.createElement('LI');

  newLiEl.append(jokeText);
  jokesEl.append(newLiEl);
};
const getDadJoke = async () => {
  try {
    const config = {
      headers: {
        Accept: 'application/json'
      }
    };
    const res = await axios.get('https://icanhazdadjoke.com/', config);

    const defaultResponse = await axios.get('https://icanhazdadjoke.com/');
    const textResponse = await axios.get('https://icanhazdadjoke.com/', { headers: { Accept: 'text/plain' } });
    console.log({ defaultResponse, textResponse, jsonResponse: res });
    console.table({ defaultResponse, textResponse, jsonResponse: res });

    return res.data.joke;
  } catch (e) {
    return 'No Jokes Available!';
  }
};

buttonEl.addEventListener('click', addNewJoke);
