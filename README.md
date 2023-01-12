<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/melvin78/Puntastic/master/blob/chat.png" width="400" alt="Puntastic Logo"></a></p>


## Puntastic

This is a ChatBot 🤖 that gives you responses based on three chat contexts, fun facts 💡, quotes ✍ and Puns/Jokes🙂. Responses are given
after keying a random value between 1 and 50.
With the help of [Open AI's Chat GPT](https://openai.com/blog/chatgpt/) , this default responses are then passed as prompts to the Davinci-003 Model based
on options chosen i.e explain this joke, Poem the joke, fact check a fun fact, retrieve similar quotes, explain the quote e.t.c.

## Demo 🚀

Be sure to check out the [Live Demo](https://chat-bot.webmelvin.me) 

## Preview 🌟

Credit for the design of the chat component goes to [vue-advanced-chat](https://github.com/antoine92190/vue-advanced-chat). A simple web chat component that works with most frontend frameworks
and not only vue, i.e react,angular, svelte.

<img src="https://raw.githubusercontent.com/melvin78/Puntastic/master/blob/fun-fact.png" width="400" alt="Puntastic Logo">

<img src="https://raw.githubusercontent.com/melvin78/Puntastic/master/blob/pun-joke.png" width="400" alt="Puntastic Logo">

<img src="https://raw.githubusercontent.com/melvin78/Puntastic/master/blob/quotes.png" width="400" alt="Puntastic Logo">



## Features and architecture

The project has three parts the data source, front-end and back end. The frontend and backend are monolithic
and not in different repositories.

- Data Source: [MongoDB](https://github.com/mongodb/mongo) - Responsible for storing all the quotes,jokes and fun facts collections. Each document has a unique number between 
  and 50 that will be used as the index when retrieving a document.
  <p>It also holds emoji reactions for each message for each user for each room.
  </p>
- Back-end: [Laravel](https://github.com/laravel/laravel) - Responsible for retrieving message information
  from the data source , transform and package it to be consumed in the frontend. 
  This is where prompt messages are passed to the [DaVinci Model](https://beta.openai.com/docs/models/gpt-3)
- Front-End: [Vue 3](https://github.com/vuejs/vue), [Tailwind](https://github.com/tailwindlabs/tailwindcss), [Vite](https://github.com/vitejs/vite) - Tailwind for styling, vite as the bundler and vue at the core
  for displaying chat components,sending and receiving messages e.t.c. 
 

## Installation

### Requirements
- PHP Version 8 or later,
- Node JS 
- MongoDB Instance
- PHP Composer

### Procedure
  
First acquire an api key from [Open Ai](https://openai.com/) this key will be used everytime you make a request to the model. Keep it safe.

Create a .env in the root project directory if it doesn't exist and add this 

```
OPENAI_API_KEY = YOUR_SUPER_SECRET_OPEN_AI_KEY
```

Check and confirm that the db environment variables point to your MONGO_DB instance. Ideally in the .env it should be similar to something like this.
```
DB_CONNECTION=mongodb
DB_URI=127.0.0.1
DB_PORT=27017
DB_DATABASE=puntastic
DB_USERNAME=
DB_PASSWORD=
```

Afterwards update and install the laravel dependencies requires with the help of composer. Ensure you have composer installed then run this in the terminal of the project's root directory
```bash
 $ composer update
 
 $ composer install
```

If everything runs okay without any errors you can proceed and
run migrations, but before that ensure you created a database called 'puntastic' in your mongoDB instance. After that is done you can run this
```bash
 $ php artisan migrate
```
If this was successful you will see the collections(fun_facts,quotes and puns and jokes) added to the database you just created. 
```bash
 $ php artisan migrate
```

You can seed
your database with the default responses by running the following commands:
```bash
 $  php artisan db:seed --class=QuotesSeeder    
 
 $  php artisan db:seed --class=PunsSeeder 
 
 $ php artisan db:seed --class=FunFactsSeeder    
```


Also install the frontend dependencies and start the vite dev server that will ensure hot reloads
of changes you make to the assets



## Contributing

Thank you for considering contributing to the project, feel free to open a pull request.

## License

The project is open-sourced and under the [MIT license](https://opensource.org/licenses/MIT).
