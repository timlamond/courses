<?php
include $_SERVER["DOCUMENT_ROOT"] . "/includes/header.php";
?>

<main id="courses" class="centred--wide">
  <h3 class="projects__heading secondary-heading">Build Front-End Web Applications from Scratch</h3>

  <article class="unit">
    <h4>Unit 1: Introduction to Javascript</h4>

    <article class="module">
      <h5>Variables</h5>
      <section>
        <h6>let</h6>
        <ul>
          <li>
              <code>let</code> signals that a variable can be reassinged a different value
              <pre>
                <code class="lang-js">
                  let meal = 'Enchinadas';
                  console.log(meal); // Output: Enchiladas
                  meal = 'Burrito';
                  console.log(meal); // Output: Burrito
                </code>
              </pre>
          </li>
          <li>
            we can declare variables without assigning a value
            <pre>
              <code>
                let price;
                console.log(price); // Output: undefined
                price = 350;
                console.log(price); //Output: 350
              </code>
            </pre>
          </li>
          <li>
            <code>let</code> variables replace the usage of <code>var</code> variables.
          </li>
        </ul>
      </section>
      <section>
        <h6>const</h6>
        <ul>
          <li>
            <code>const</code> variables cannot be reassinged, becuase it is constant
          </li>
          <li>
            trying to reassign a <code>const</code> with throw a <code>TypeError</code>
          </li>
          <li>
            constant variables must be assigned a value when declared, else it you'll get a <code>SyntaxError</code>
          </li>
          <li>
            if the variable you're creating will remain the same throughout your program, use <code>const</code>, otherwise use <code>let</code>
          </li>
        </ul>
      </section>

      <section>
        <h6>String Interpolation</h6>
        <ul>
          <li>
            in ES6 you can <em>interpolate</em> (insert) variables into strings using <em>template literals</em>
          </li>
          <li>
            template literals are wrapped in backticks <code>`</code>
          </li>
          <li>
            variables are interpolated to a string using a placeholder: <code>console.log(`I own a pet ${myPet}.`)</code>
          </li>
          <li>
            using template literals cleans up messy markup; and removes the worry of escaping double or single quotes.

            <pre>
              <code>
                const myName = 'Tim';
                const myCity = 'Mindemoya';
                console.log('My name is ' + myName + '. My favorite city is ' + myCity + '.');
              </code>
            </pre>
            becomes,
            <pre>
              <code>
                const myName = 'Tim';
                const myCity = 'Mindemoya';
                console.log(`My name is ${myName}. My favorite city is ${myCity}.`);
              </code>
            </pre>
          </li>
        </ul>
      </section>

      <section>
        <h6>typeof operator</h6>
        <ul>
          <li>
            <pre>
              <code>
                const unknown1 = 'foo';
                console.log(typeof unknown1); // Output: string

                const unknown2 = 10;
                console.log(typeof unknown2); // Output: number

                const unknown3 = true;
                console.log(typeof unknown3); // Output: boolean
              </code>
            </pre>
          </li>
        </ul>
      </section>
      <aside class="project">
        <h5>Kelvin Weather Conversions</h5>
        <pre>
          <code>
            //declare the variable kelvin, and set it equal to 293; it will stay constant, so we're using const
            const kelvin = 0;

            //declare a variable for Celsius, which is 273 less than Kelvin; it will stay constant, so we're using const
            const celsius = kelvin - 273;

            //declare a variable for Fahrenheit using existing equation Fahrenheit = Celsius * (9/5) + 32; we'll be rounding this value, so we're using let
            let fahrenheit = celsius * (9/5) + 32;
            //round the result of the fahrenhiet equation down to the closest whole number
            fahrenheit = Math.floor(fahrenheit);
            console.log(`The temperature is ${fahrenheit} degrees Fahrenheit.`);

            //declare the variable newton using the existing equation Newton = Celsius * (33/100); we'll be rounding thus using let
            let newton = celsius * (33/100);
            //round the result of the newton equation down to the closest whole number
            newton = Math.floor(newton);
            console.log(`Therefore, the temperature is ${newton} degrees Newton.`);
          </code>
        </pre>
      </aside>
      <aside class="project">
        <h5>Dog Years</h5>
        <pre>
          <code>
            //delare myAge const, set the value to my age
            const myAge = 31;
            //declare earlyYears let, set the value as 2
            let earlyYears = 2;
            earlyYears = earlyYears*10.5;
            //declare laterYears let, set value to myAge - 2, as 2 years are accounted for in earlyYears (we don't want to count them twice)
            let laterYears = myAge - 2;
            //multiply the value of later years by 4, and reasign the new value back to the laterYears variable
            laterYears *= 4;
            console.log(`Early years: ${earlyYears}`);
            console.log(`Later years: ${laterYears}`);
            //declare myAgeInDogYears const, set value to earlyYears + laterYears
            const myAgeInDogYears = earlyYears + laterYears;
            //declare myName const; set value to lower case version of my name
            const myName = 'Tim Lamond'.toLowerCase();
            //log your name, age and age in dog years using string interpolation
            console.log(`My name is ${myName}. I am ${myAge} years old in human years which is ${myAgeInDogYears} years old in dog years.`);
          </code>
        </pre>
      </aside>
    </article>

    <article class="module">
      <h5>Navigation - Using the Comand Line</h5>
      <section>
        <h6>ls</h6>
        <ul>
          <li>
            <code>$</code> = shell prompt
          </li>
          <li>
            <code>ls</code> <em>lists</em> the files and directories of the directory you are currently in.
          </li>
        </ul>
      </section>
      <section>
        <h6>pwd</h6>
        <ul>
          <li>
            <code>pwd</code> = print working directory
          </li>
        </ul>
      </section>
      <section>
        <h6>clear</h6>
        <ul>
          <li>
            <code>clear</code> = clears the terminal of any text
          </li>
        </ul>
      </section>
      <section>
        <h6>cd</h6>
        <ul>
          <li>
            <code>cd</code> = change directory
          </li>
          <li>
            navigate to a specific child directory using <code>cd folder1/folder2</code>
          </li>
          <li>
            navigate up 1 directory using <code>cd ..</code>; this would take you from <code>folder1/folder2</code>, up to <code>folder1/</code>
          </li>
          <li>
            navigate up 2 directories using <code>cd ../../</code>; go further with additional <code>../</code>, just like you would in markup.
          </li>
        </ul>
      </section>
      <section>
        <h6>mkdir</h6>
        <ul>
          <li>
            <code>mkdir</code> = make directory - creates a new directory named whatever argument you pass it, in the current working directory; ie <code>mkdir media</code>
          </li>
        </ul>
      </section>
      <section>
        <h6>touch</h6>
        <ul>
          <li>
            <code>touch</code> = create new file within current working directory, taking file name as it's argument; ie <code>touch keyboard.txt</code>
          </li>
        </ul>
      </section>
      <section>
        <h6>echo</h6>
        <ul>
          <li>
            <code>echo</code> = add content to a file; ie <code>echo "Hello there" >> test.txt</code>
          </li>
        </ul>
      </section>
      <section>
        <h6>cat</h6>
        <ul>
          <li>
            <code>cat</code> = print contest of a file in the terminal
          </li>
        </ul>
      </section>
    </article>

    <article class="module">
      <h5>Setting Up Your Command Line</h5>

      <section>
        <h6>What is Bash?</h6>
        <ul>
          <li>
            <strong>B</strong>ourne-<strong>A</strong>gain <strong>SH</strong>ell is an open source "shell"; a shell is a specific kind of Comand Line Interface (CLI)
          </li>
          <li>
            Bash is the default shell for Linux and Mac
          </li>
          <li>
            Everything from the previous module is Bash
          </li>
        </ul>
      </section>
    </article>
  </article>

  <article class="module">
    <h5>Functions</h5>

    <section>
      <h6>Arrow Functions</h6>
      <ul>
        <li>
          A newer alternative for declaring functions:
          <pre>
            <code>
              const functionName = function(arg1, arg2){

              };
            </code>
          </pre>
          becomes,
          <pre>
            <code>
              const functionName = (arg1, arg2) => {

              };
            </code>
          </pre>
        </li>
        <li>
          <strong>Concise body</strong>
          <ul>
            <li>
              <strong>Zero parameters: requiers parentheses</strong>
              <code>const functionName = () => {};</code>
            </li>
            <li>
              <strong>One Parameter: does not requier parentheses</strong>
              <code>const functionName = paramOne => {};</code>
            </li>
            <li>
              <strong>Two or More Parameters: requiers parentheses</strong>
              <code>const functionName = (paramOne, paramTwo) => {};</code>
            </li>
            <li>
              <strong>
                Single-line block: doesn't require curly brackets; will automatically evaluate and return value, without use of <code>return</code>; known as <em>implicit return</em>
              </strong>
              <code>const sumNumbers = number => number + number;</code>
              equivalent to:
              <code>
                const sumNumbers = number =>{
                  const sum = number + number;
                  return sum;
                };
              </code>
              another example:
              <code>
                const plantNeedsWater = (day) => {
                  return day === 'Wednesday' ? true : false;
                };
              </code>
              becomes:
              <code>
                const plantNeedsWater = day => day === 'Wednesday' ? true : false;
              </code>
            </li>
          </ul>
        </li>

      </ul>
    </section>
  </article>

  <article class="module">
    <h5>Arrays</h5>

    <section>
      <h6>Create an Array</h6>
      <ul>
        <li>
          <em>Array Literal</em>: defined by wrapping items in square brackets
          <code>
            let arrayLiteral = ['item1', 2, true];
          </code>
        </li>
      </ul>
    </section>
    <section>
      <h6>Arrays with let and const</h6>
      <ul>
        <li>
          <code>const</code>: elements of arrays declared with const are still mutable, but you cannot assign a new/differnt array or value to the variable
        </li>
      </ul>
    </section>
    <section>
      <h6>The .push() Method</h6>
      <ul>
        <li>Allows you to <strong>add items to the end</strong> of an array</li>
        <li>Mutates the original array</li>
      </ul>
    </section>
    <section>
      <h6>The .pop() Method</h6>
      <ul>
        <li>Allows you to <strong>remove the last item</strong> of an array</li>
        <li>Returns the value of the removed item, which can be stored in a variable</li>
        <li>Mutates the original array</li>
      </ul>
    </section>
    <section>
      <h6>The .shift() Method</h6>
      <ul>
        <li>Allows you to <strong>remove the first item</strong> from an array</li>
      </ul>
    </section>
    <section>
      <h6>The .unshift() Method</h6>
      <ul>
        <li>Allows you to <strong>add a new item to the beginning</strong> of an array</li>
      </ul>
    </section>
    <section>
      <h6>The .slice() Method</h6>
      <ul>
        <li>Allows you to <strong>grab a section of elements</strong> from an array</li>
        <li>Non-mutating function, meaning the orignal array stays intact</li>
      </ul>
    </section>
    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array" target="_blank">Additional Array Documentation</a>

    <aside class="project">
      <h6>Secret Message</h6>
      <pre>
        <code>
          let secretMessage = ['Learning', 'is', 'not', 'about', 'what', 'you', 'get', 'easily', 'the', 'first', 'time,', 'it', 'is', 'about', 'what', 'you', 'can', 'figure', 'out.', '-2015,', 'Chris', 'Pine,', 'Learn', 'JavaScript'];

          console.log(secretMessage.length);
          secretMessage.pop();
          console.log(secretMessage.length);

          secretMessage.push('to', 'Program');
          console.log(secretMessage.indexOf('easily'));
          secretMessage[7] = 'right';
          secretMessage.shift();
          secretMessage.unshift('Programming');

          console.log(secretMessage.indexOf('get'));
          secretMessage.splice(6, 5, 'know');

          console.log(secretMessage.join(' '));

          //Output:
          //24
          //23
          //7
          //6
          //Programming is not about what you know it is about what you can figure out. -2015, Chris Pine, Learn to Program
        </code>
      </pre>
    </aside>
  </article>

  <article class="module">
    <h4>Loops</h4>

    <section>
      <h5>while loops</h5>
      <p>Use a while when you don't know how many times a loop will need to run.</p>
      <aside class="example">
        <pre>
          <code>
            const cards = ['diamond', 'spade', 'heart', 'club'];

            let currentCard;
            while(currentCard != 'spade'){
              currentCard = cards[Math.floor(Math.random() * 4)];
              console.log(currentCard);
            }
          </code>
        </pre>
      </aside>
    </section>
    <section>
      <h5>do...while</h5>
      <p>do a task once (no matter what), and then keep doing it until a specified condition is no longer me.</p>
      <aside class="example">
        <pre>
          <code>
            let cupsOfSugarNeeded = 2;
            let cupsAdded = 0;

            //by default, add 1 cup, then add 1 cup at a time until cupsAdded === cupsOfSugarNeeded
            do{
              cupsAdded++;
            } while(cupsAdded < cupsOfSugarNeeded);
          </code>
        </pre>
      </aside>
    </section>

    <section>
      <h5>The break keyword</h5>
      <p>The break keyword allows programs to “break” out of the loop from within the loop's block.</p>
      <aside class="example">
        <pre>
          <code>
            const rapperArray = ["Lil' Kim", "Jay-Z", "Notorious B.I.G.", "Tupac"];

            for(let rapperArrayIndex = 0; rapperArrayIndex < rapperArray.length; rapperArrayIndex++){
              console.log(rapperArray[rapperArrayIndex]);
              if(rapperArray[rapperArrayIndex] === 'Notorious B.I.G.'){
                break;
              }
            }
            console.log("And if you don't know, now you know.");
          </code>
        </pre>
      </aside>
    </section>

    <aside class="project">
      <h6>Whale Talk</h6>
      <pre>
        <code>
          let input = "For whom the bell tolls. Time marches on.";
          const vowels = ["A", "E", "I", "O", "U", "a", "e", "i", "o", "u"];
          let resultArray = [];

          for(let i = 0; i < input.length; i++){
            //console.log(i);
            for(let v = 0; v < vowels.length; v++){
              //console.log(v);
              if(input[i] === vowels[v]){
                resultArray.push(input[i]);
              }
            }
            if(input[i] === "e" || input[i] === "u"){
              resultArray.push(input[i]);
            }
          }

          let whaleTalk = resultArray.join("").toUpperCase();
          console.log(whaleTalk);
        </code>
      </pre>
    </aside>
  </article>

  <article class="module">
    <h5>Higher-Order Functions</h5>
    <p>Functions that accept other functions as arguments and/or return functions as output.</p>
    <p>Allows us to build abstractions onto other abstractions.</p>
    <p>
      An abstraction is a simplifying of events into ideas. i.e. "I baked a cake." is an abstraction of the many events required to make a cake that can be understood without explicitly detailing them.
    </p>
    <p>The more abstraction in our code, the more modular and easy to read it can become.</p>

    <section>
      <h6>Functions as Data</h6>
      <p>
        Functions can be used as the value of new variables, which then allows the new variable to be invokes as if it were the original function. This can help simplify function calls.
      </p>
      <pre>
        <code>
          const checkThatTwoPlusTwoEqualsFourAMillionTimes = () => {
            for(let i = 1; i <= 1000000; i++) {
              if ( (2 + 2) != 4) {
                console.log('Something has gone very wrong :( ');
              }
            }
          }

          // Write your code below
          const is2p2 = checkThatTwoPlusTwoEqualsFourAMillionTimes;
          is2p2();
          //log the name of the original function assigned to is2p2
          console.log(is2p2.name);
        </code>
      </pre>
    </section>

    <section>
      <h6>Functions as Parameters</h6>
      <p>
        Functions can be passed into other functions as parameters, allowing them to be used as callback function
      </p>
      <p>They are passed without their parentheses, to ensure they are not evaluated until we ask them to be</p>
      <pre>
        <code>
          //define a single parameter function
          const timeFuncRuntime = funcParameter => {
            //run some code
             let t1 = Date.now();
             //invoke the parameter name as a function call (remember it's holding an instance of the passed function)
             funcParameter();
             //run some other code
             let t2 = Date.now();
             return t2 - t1;
          }
          //define an zero parameter function
          const addOneToOne = () => 1 + 1;
          //invoke the single parameter function, passing the zero parameter function as it's parameter
          timeFuncRuntime(addOneToOne);
        </code>
      </pre>

      <pre>
        <code>
          const checkThatTwoPlusTwoEqualsFourAMillionTimes = () => {
            for(let i = 1; i <= 1000000; i++) {
              if ( (2 + 2) != 4) {
                console.log('Something has gone very wrong :( ');
              }
            }
          };

          const addTwo = num => num + 2;

          const timeFuncRuntime = funcParameter => {
            let t1 = Date.now();
            funcParameter();
            let t2 = Date.now();
            return t2 - t1;
          };

          // Write your code below
          const time2p2 = timeFuncRuntime(checkThatTwoPlusTwoEqualsFourAMillionTimes);

          const checkConsistentOutput = (param1Function, param2Value) => {
            let results = [];
            for(let i = 0; i < 2; i++){
              results.push(param1Function(param2Value));
            }
            if(results[0] === results[1]){
              return param1Function(param2Value);
            } else{
              return 'This function returned inconsistent results';
            }
          }

          console.log(checkConsistentOutput(addTwo, 5));
        </code>
      </pre>
    </section>
  </article>

  <article class="module">
    <h5>Iterators</h5>
    <p>Built-in Javascript array methods that help us iterate.</p>

    <section>
      <h6>.forEach()</h6>
      <pre>
        <code>
          const fruits = ['mango', 'papaya', 'pineapple', 'apple'];

          // Iterate over fruits below
          fruits.forEach(fruitItem => console.log(`I want to eat a ${fruitItem}`));
        </code>
      </pre>
    </section>

    <section>
      <h6>.map()</h6>
      <p><code>.map()</code> work much the same as <code>.forEach()</code>, with the exception that <code>.map()</code> returns a new array.</p>
      <pre>
        <code>
          const animals = ['Hen', 'elephant', 'llama', 'leopard', 'ostrich', 'Whale', 'octopus', 'rabbit', 'lion', 'dog'];

          // Create the secretMessage array below
          const secretMessage = animals.map(animal => {
            return animal.substring(0,1);
          });

          console.log(secretMessage.join(''));
          //Output: HelloWorld

          const bigNumbers = [100, 200, 300, 400, 500];

          // Create the smallNumbers array below
          const smallNumbers = bigNumbers.map(number =>{
            return number / 100;
          });
        </code>
      </pre>
    </section>

    <section>
      <h6>.filter()</h6>
      <p><code>.filter()</code> returns a new array with elements of the original filtered out.</p>
      <pre>
        <code>
          const randomNumbers = [375, 200, 3.14, 7, 13, 852];

          // Call .filter() on randomNumbers below
          const smallNumbers = randomNumbers.filter(number =>{
            return number < 250;
          })

          const favoriteWords = ['nostalgia', 'hyperbole', 'fervent', 'esoteric', 'serene'];


          // Call .filter() on favoriteWords below
          const longFavoriteWords = favoriteWords.filter(words => {
            return words.length > 7;
          })
        </code>
      </pre>
    </section>

    <section>
      <h6>.findIndex()</h6>
      <p><code>.findIndex()</code> returns the index of the fist element that evaluates to <code>true</code> in the callback function.</p>
      <pre>
        <code>
          const animals = ['hippo', 'tiger', 'lion', 'seal', 'cheetah', 'monkey', 'salamander', 'elephant'];

          const foundAnimal = animals.findIndex(animal => {
            return animal == 'elephant';
          });

          const startsWithS = animals.findIndex(animal => {
            return animal.substring(0,1) == "s";
          });
        </code>
      </pre>
    </section>

    <section>
      <h6>.reduce()</h6>
      <p><code>.reduce()</code> returns a single value after iterating through elements of an array.</p>
      <p>
        The callback function has two parameters, <code>accumulator</code> and <code>currentValue</code>. The value of <code>accumulator</code> starts off as the value of the first element in the array and the <code>currentValue</code> starts as the second element.
      </p>
      <p>
        As <code>.reduce()</code> iterates through the array, the return value of the callback function becomes the <code>accumulator</code> value for the next iteration, <code>currentValue</code> takes on the value of the current element in the looping process.
      </p>
      <pre>
        <code>
          const newNumbers = [1, 3, 5, 7];

          const newSum = newNumbers.reduce((accumulator, currentValue) => {
            console.log('The value of accumulator: ', accumulator);
            console.log('The value of currentValue: ', currentValue);
            return accumulator + currentValue;
          });
          console.log(newSum);
          //Output:
          //The value of accumulator:  1
          //The value of currentValue:  3
          //The value of accumulator:  4
          //The value of currentValue:  5
          //The value of accumulator:  9
          //The value of currentValue:  7
          //16

          //Using a second parameter of 10
          const newNumbers = [1, 3, 5, 7];

          const newSum = newNumbers.reduce((accumulator, currentValue) => {
            console.log('The value of accumulator: ', accumulator);
            console.log('The value of currentValue: ', currentValue);
            return accumulator + currentValue;
          }, 10);
          console.log(newSum);
          //Output:
          //The value of accumulator:  10
          //The value of currentValue:  1
          //The value of accumulator:  11
          //The value of currentValue:  3
          //The value of accumulator:  14
          //The value of currentValue:  5
          //The value of accumulator:  19
          //The value of currentValue:  7
          //26
        </code>
      </pre>
    </section>

    <section>
      <h6>.some() and .every()</h6>
      <p>
        <code>.some()</code> returns true if <em>some</em> of the array elements match the callback.
      </p>
      <p>
        <code>.every()</code> returns true if <em>every</em> element in the array matches the callback.
      </p>
      <pre>
        <code>
          const words = ['unique', 'uncanny', 'pique', 'oxymoron', 'guise'];

          // Something is missing in the method call below
          console.log(words.some((word) => {
            return word.length < 6;
          }));

          // Use filter to create a new array
          const interestingWords = words.filter(word => {
            return word.length > 5;
          })

          // Make sure to uncomment the code below and fix the incorrect code before running it
          console.log(interestingWords.every((word) => {
          	return word.length > 5;
          } ));
        </code>
      </pre>
    </section>

    <aside class="project">
      <pre>
        <code>
          const favBands = ['Metallica', 'The Guess Who', 'The Beatles', 'Nightwish', 'Opeth'];

          // Define a callback function before you use it in a iterator.
          const countChars = function(band){
            return band.length;
          }

          favBands.forEach(band => {
            console.log(countChars(band));
          });

          // Define a callback function before you use it in a iterator.
          const totalChars = favBands.map(band => {
            return countChars(band);
          }).reduce((accumulator, currentValue) => {
            return accumulator + currentValue;
          })
          console.log(totalChars);

          // Define a callback function before you use it in a iterator.
          const favBandAndSong = [['Metallica', 'For Whom the Bell Tolls'], ['The Guess Who', 'No Sugar Tonight/New Mother Nature'], ['The Beatles', 'Magical Mystery Tour'], ['Nightwish', 'Ghost Love Score'], ['Opeth', 'In My Time of Need']];

          const condensedList = favBandAndSong.reduce((accumulator, currentValue) => {
            return accumulator.concat(currentValue);
          })
          console.log(condensedList);
        </code>
      </pre>
    </aside>

    <aside class="project">
      <h6>Mini Linter</h6>
      <pre>
        <code>
          let story = 'Last weekend, I took literally the most beautiful bike ride of my life. The route is called "The 9W to Nyack" and it actually stretches all the way from Riverside Park in Manhattan to South Nyack, New Jersey. It\'s really an adventure from beginning to end! It is a 48 mile loop and it basically took me an entire day. I stopped at Riverbank State Park to take some extremely artsy photos. It was a short stop, though, because I had a really long way left to go. After a quick photo op at the very popular Little Red Lighthouse, I began my trek across the George Washington Bridge into New Jersey.  The GW is actually very long - 4,760 feet! I was already very tired by the time I got to the other side.  An hour later, I reached Greenbrook Nature Sanctuary, an extremely beautiful park along the coast of the Hudson.  Something that was very surprising to me was that near the end of the route you actually cross back into New York! At this point, you are very close to the end.';

          let overusedWords = ['really', 'very', 'basically'];

          let unnecessaryWords = ['extremely', 'literally', 'actually' ];

          //split the string into individual words and save them in a new array called storyWords.
          const storyWords = story.split(" ");
          //console.log(storyWords);
          //console.log(storyWords.length);

          //Iterate over your array to filter out these words. Save the remaining words in an array called betterWords
          const betterWords = storyWords.filter(word => {
            return (unnecessaryWords.includes(word)) ? '' : word;
          });
          //console.log(betterWords.length);

          //let the user of your program know how many times they have used these overused words.
          let reallyCount = 0;
          let veryCount = 0;
          let basicallyCount = 0;

          for (word of storyWords){
            if(word == "really"){
              reallyCount += 1;
            } else if(word == "very"){
              veryCount += 1;
            } else if(word == "basically"){
              basicallyCount += 1;
            }
          }
          //console.log(`You used the word "really" ${reallyCount} times.`);
          //console.log(`You used the word "very" ${veryCount} times.`);
          //console.log(`You used the word "basically" ${basicallyCount} times.`);

          //count how many sentences are in the paragraph.
          let sentenceCount = 0;
          storyWords.forEach(word => {
            let lastChar = word[word.length - 1];
            if(lastChar == "." || lastChar == "!"){
              sentenceCount += 1;
            }
          });
          //console.log(sentenceCount);

          function logParagraphInfo(){
            console.log(`Your paragraph contains ${storyWords.length} word, and ${sentenceCount} sentences.`);
            console.log(`${reallyCount} of those words were "really."`);
            console.log(`${veryCount} of those words were "very."`);
            console.log(`${basicallyCount} of those words were "basically."`);
          }
          logParagraphInfo();
          console.log(betterWords.join(' '));
        </code>
      </pre>
    </aside>
  </article>
</article>
</main>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php";
?>
