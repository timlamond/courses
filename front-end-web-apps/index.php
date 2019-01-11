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

  <article class="module">
    <h5>Conditional Statements</h5>

    <section>
      <h6>Short-Circuit Evaluation</h6>
      <pre>
        <code>
          let defaultName;
          if (username) {
            defaultName = username;
          } else {
            defaultName = 'Stranger';
          }
        </code>
      </pre>
      <p>becomes...</p>
      <pre>
        <code>
          let defaultName = username || 'Stranger';
        </code>
      </pre>
    </section>

    <section>
      <h6>The switch keyword</h6>
      <pre>
        <code>
          let groceryItem = 'papaya';

          if (groceryItem === 'tomato') {
            console.log('Tomatoes are $0.49');
          } else if (groceryItem === 'papaya'){
            console.log('Papayas are $1.29');
          } else {
            console.log('Invalid item');
          }
        </code>
      </pre>
      <p>becomes...</p>
      <pre>
        <code>
          let groceryItem = 'papaya';

          switch (groceryItem) {
            case 'tomato':
              console.log('Tomatoes are $0.49');
              break;
            case 'lime':
              console.log('Limes are $1.49');
              break;
            case 'papaya':
              console.log('Papayas are $1.29');
              break;
            default:
              console.log('Invalid item');
              break;
          }

          // Prints 'Papayas are $1.29'
        </code>
      </pre>

      <aside class="project">
        <h6>Magic Eight Ball</h6>
        <pre>
          <code>
            const userName = "Billy";

            userName ? console.log(`Hello, ${userName}!`) : console.log('Hello!');

            let userQuestion = 'Am I cool?';
            console.log(`${userName} asked: ${userQuestion}`);

            let randomNumber = Math.floor(Math.random() * 8);

            let eightBall = "";

            switch (randomNumber) {
              case 0:
                eightBall = 'It is certain';
                break;
             	case 1:
                eightBall = 'It is decidedly so';
                break;
              case 2:
                eightBall = 'Reply hazy try again';
                break;
              case 3:
                eightBall = 'Cannot predict now';
                break;
              case 4:
                eightBall = 'Do not count on it';
                break;
              case 5:
                eightBall = 'My sources say so';
                break;
              case 6:
                eightBall = 'Outlook not so good';
                break;
              case 7:
                eightBall = 'Signs point to yes';
                break;
              default:
                eightBall = 'Response not available';
                break;
            }

            console.log(eightBall);
          </code>
        </pre>
      </aside>

      <aside class="project">
        <h6>Race Day</h6>
        <pre>
          <code>
            let raceNumber = Math.floor(Math.random() * 1000);

            let isRegisteredEarly = true;
            let runnersAge = 18;

            if(isRegisteredEarly && runnersAge > 18){
              raceNumber += 1000;
            }

            if(isRegisteredEarly && runnersAge > 18){
              console.log(`You will run at 9:30am, and wear the number ${raceNumber}.`);
            } else if(!isRegisteredEarly && runnersAge > 18){
              console.log(`You will run at 11:00am, and wear the number ${raceNumber}.`);
            } else if(runnersAge < 18){
              console.log(`You will run at 12:30pm, and wear the number ${raceNumber}.`);
            } else {
              console.log(`Please see the registration desk.`);
            }
          </code>
        </pre>
      </aside>
    </section>
  </article>

  <article class="module">
    <h5>Objects</h5>

    <section>
      <h6>Creating Object Literals</h6>
      <p>Objects can be assigned to variables just like any JavaScript type. We use curly braces, {}, to designate an object literal:</p>
      <pre>
        <code>
          let spaceship = {
            'Fuel Type' : 'deisel',
            color : 'red' //doesn't need quotes around the key because it doesn't have a space
          }; // spaceship is an empty object
        </code>
      </pre>
    </section>

    <section>
      <h6>Getters</h6>
      <p>Getters are methods that get and return the internal properties of an object.</p>
      <pre>
        <code>
          const robot = {
            _model: '1E78V2',
            _energyLevel: 100,
            get energyLevel () {
              if(typeof(this._energyLevel) === 'number'){
                return `My current energy level is ${this._energyLevel}`;
              } else {
                return 'System malfunction: cannot retrieve energy level';
              }
            }
          };

          console.log(robot.energyLevel);
        </code>
      </pre>
    </section>

    <section>
      <h6>Setters</h6>
      <p>methods which reassign values of existing properties within an object</p>
      <pre>
        <code>
          const robot = {
            _model: '1E78V2',
            _energyLevel: 100,
            _numOfSensors: 15,
            get numOfSensors(){
              if(typeof this._numOfSensors === 'number'){
                return this._numOfSensors;
              } else {
                return 'Sensors are currently down.'
              }
            },
            set numOfSensors(num){
              if(typeof num === 'number' && num >= 0){
                this._numOfSensors = num;
              } else {
                console.log('Pass in a number that is greater than or equal to 0');
              }
            }
          };

          robot.numOfSensors = 100;
          console.log(robot.numOfSensors);
        </code>
      </pre>
    </section>

    <section>
      <h6>Factory Functions</h6>
      <p>a function that returns an object and can be reused to make multiple object instances. Factory functions can also have parameters allowing us to customize the object that gets returned.</p>
      <pre>
        <code>
          const robotFactory = (model, mobile) => {
            return {
              model: model,
              mobile: mobile,
              beep (){
                console.log('Beep Boop')
              }
            }
          }

          const tinCan = robotFactory('P-500', true);
          tinCan.beep();
        </code>
      </pre>
    </section>
    <section>
      <h6>Property Value Shorthand</h6>
      <p>A type of <em>destructuring</em> that can be used when the names of the properties passed into a factory function match the names of the properties being returned.</p>
      <p>The above becomes...</p>
      <pre>
        <code>
          const robotFactory = (model, mobile) => {
            return {
              model,
              mobile,
              beep (){
                console.log('Beep Boop')
              }
            }
          }
        </code>
      </pre>
    </section>
    <section>
      <h6>Destructuring Assignment</h6>
      <p>In destructured assignment we create a variable with the name of an object's key that is wrapped in curly braces { } and assign to it the object.</p>
      <pre>
        <code>
          const vampire = {
            name: 'Dracula',
            residence: 'Transylvania',
            preferences: {
              day: 'stay inside',
              night: 'satisfy appetite'
            }
          };

          const residence = vampire.residence;
          console.log(residence); // Prints 'Transylvania'
          const day = vampire.preference.day;
          console.log(day); // Prints 'stay inside'
        </code>
      </pre>
      <p>becomes...</p>
      <pre>
        <code>
          ...

          const {residence} = vampire;
          console.log(residence); //Print 'Transylvania'
          const {day} = vampire.preference;
          console.log(day); // Prints 'stay inside'
        </code>
      </pre>
      <p>Another example</p>
      <pre>
        <code>
          const robot = {
            model: '1E78V2',
            energyLevel: 100,
            functionality: {
              beep() {
                console.log('Beep Boop');
              },
              fireLaser() {
                console.log('Pew Pew');
              },
            }
          };

          const {functionality} = robot;
          functionality.beep();
        </code>
      </pre>
    </section>
    <aside class="project">
      <h6>Meal Maker</h6>
      <pre>
        <code>
          //create an empty menu object
          const menu = {
            //Add a _courses property to your menu object and set its value to an empty object.
            _courses : {
              //Create three properties inside the _courses object called appetizers, mains, and desserts. Each one of these should initialize to an empty array.
              appetizers: [],
              mains: [],
              desserts: [],
            },
            get appetizers() {

            },
            //Create getter and setter methods for the appetizers, mains, and desserts properties.
            get mains(){
            },
            get desserts(){
            },
            set appetizers(dishInfo){
              if(dishInfo.name !== "" && dishInfo.price !== ""){
                this._courses.appetizers.push({"name" : dishInfo.name, "price" : dishInfo.price});
              }
            },
            set mains(dishInfo){
              if(dishInfo.name !== "" && dishInfo.price !== ""){
                this._courses.mains.push({"name" : dishInfo.name, "price" : dishInfo.price});
              }
            },
            set desserts(dishInfo){
              if(dishInfo.name !== "" && dishInfo.price !== ""){
                this._courses.desserts.push({"name" : dishInfo.name, "price" : dishInfo.price});
              }
            },
            //create an empty getter method for the _courses property.
            get courses(){
              //return an object that contains key/value pairs for appetizers, mains, and desserts.
              return {
                appetizers: this._courses.appetizers,
                mains: this._courses.mains,
                desserts: this._courses.desserts
              }
            },
            //create a method called .addDishToCourse() which will be used to add a new dish to the specified course on the menu.
            addDishToCourse(courseName, name, price) {
              const dish = {
                name,
                price
              }
              this[courseName] = dish;
            },
            //reate a method inside the menu object called .getRandomDishFromCourse()
            getRandomDishFromCourse(courseName){
              //Retrieve the array of the given course's dishes from the menu's _courses object and store in a variable called dishes.
              const dishes = this._courses[courseName];
              //Generate a random index by multiplying Math.random() by the length of the dishes array
              const randomNumber = Math.floor(Math.random() * dishes.length);
              //Return the dish located at that index in dishes
              return dishes[randomNumber];
            },
            //create a .generateRandomMeal() function which will automatically generate a three-course meal for us.
            generateRandomMeal(){
              const appetizer = this.getRandomDishFromCourse('appetizers');
              const main = this.getRandomDishFromCourse('mains');
              const dessert = this.getRandomDishFromCourse('desserts');
              const coursePrices = [appetizer.price, main.price, dessert.price];
              const mealPrice = coursePrices.reduce((accumulator, currentValue) => {
                return accumulator + currentValue;
              });

              return `Your meal is ${appetizer.name}, ${main.name} and ${dessert.name}. The price of your meail is $${mealPrice}.`;
            }
          };

          menu.addDishToCourse('appetizers', 'spring rolls', 5);
          menu.addDishToCourse('appetizers', 'salad', 2);
          menu.addDishToCourse('appetizers', 'soup', 3);

          menu.addDishToCourse('mains', 'steak', 20);
          menu.addDishToCourse('mains', 'chicken', 15);
          menu.addDishToCourse('mains', 'fish', 18);

          menu.addDishToCourse('desserts', 'pie', 4);
          menu.addDishToCourse('desserts', 'cake', 3);
          menu.addDishToCourse('desserts', 'ice cream', 2);

          meal = menu.generateRandomMeal();
          console.log(meal);
        </code>
      </pre>
    </aside>
    <aside class="project">
      <h6>Team Stats</h6>
      <pre>
        <code>
          const team = {
            _players: [
            	{
              	firstName: 'Mats',
              	lastName: 'Sundin',
              	age: 35
            	},
              {
                firstName: 'Curtis',
                lastName: 'Joseph',
                age: 32
              },
              {
                firstName: 'Auston',
                lastName: 'Matthews',
                age: 20
              }
            ],
            _games: [
              {
                opponent: 'Canadiens',
                teamPoints: 4,
                opponentPoints: 3
              },
              {
                opponent: 'Senators',
                teamPoints: 6,
                opponentPoints: 0
              },
              {
                opponent: 'Lightning',
                teamPoints: 2,
                opponentPoints: 4
              }
            ],
            get players() {

            },
            get games() {

            },
            addPlayer(firstName, lastName, age){
              const player = {
                firstName,
                lastName,
                age
              }
              this._players.push(player);
            },
            addGame(opponent, teamPoints, opponentPoints){
              const game = {
                opponent,
                teamPoints,
                opponentPoints
              }
              this._games.push(game);
            }
          };

          team.addPlayer('Mitch', 'Marner', 21);
          team.addPlayer('John', 'Tavares', 28);
          team.addPlayer('Morgan', 'Reilly', 24);

          team.addGame('Red Wings', 5, 2);
          team.addGame('Bruins', 2, 3);
          team.addGame('Canucks', 2, 1);

          console.log(team._players);
          console.log(team._games);
        </code>
      </pre>
    </aside>
  </article>

  <article class="module">
    <h5>Classes</h5>
    <pre>
      <code>
        class HospitalEmployee {
          constructor(name) {
            this._name = name;
            this._remainingVacationDays = 20;
          }

          get name() {
            return this._name;
          }

          get remainingVacationDays() {
            return this._remainingVacationDays;
          }

          takeVacationDays(daysOff) {
            this._remainingVacationDays -= daysOff;
          }

          //Static methods are called on the class, but not on instances of the class.
          static generatePassword() {
            const randInt = Math.floor(Math.random()*10000);
            return randInt;
          }
        }

        class Nurse extends HospitalEmployee {
          constructor(name, certifications) {
            super(name);
            this._certifications = certifications;
          }

          get certifications() {
            return this._certifications;
          }

          addCertification(newCertification) {
            this.certifications.push(newCertification);
          }
        }

        const nurseOlynyk = new Nurse('Olynyk', ['Trauma','Pediatrics']);
        nurseOlynyk.takeVacationDays(5);
        console.log(nurseOlynyk.remainingVacationDays);
        nurseOlynyk.addCertification('Genetics');
        console.log(nurseOlynyk.certifications);
      </code>
    </pre>

    <aside class="project">
      <h6>Build a Library</h6>
      <pre>
        <code>
          class Media {
            constructor(title){
              this._title = title;
              this._isCheckedOut = false;
              this._ratings = [];
            }

            get title() {
              return this._title;
            }

            get isCheckedOut() {
              return this._isCheckedOut;
            }

            get ratings() {
              return this._ratings;
            }

            getAverageRating() {
              const numberOfRatings = this._ratings.length;
              const sumOfRatings = this._ratings.reduce((accumulator, currentValue) => {
                return accumulator + currentValue;
              });
              const averageRating = sumOfRatings / numberOfRatings;
              return averageRating;
            }

            set isCheckedOut(value){
              this._isChecktOut = value;
            }

            toggleCheckOutStatus() {
              this._isCheckedOut = !this._isCheckedOut;
            }

            addRating(rating){
              this._ratings.push(rating);
            }
          }

          class Book extends Media {
            constructor(title, author, pages){
              super(title);
              this._author = author;
              this._pages = pages;
            }

            get author() {
              return this._author;
            }

            get pages() {
              return this._pages;
            }
          }

          class Movie extends Media {
            constructor(title, director, runTime){
              super(title);
              this._director = director;
              this._runTime = runTime;
            }

            get director() {
              return this._director;
            }

            get runTime() {
              return this._runTime;
            }
          }

          class CD extends Media {
            constructor(title, artist){
              super(title);
              this._artist = artist;
            }

            get artist() {
              return this._artist;
            }
          }

          const bookWizard = new Book('Wizards First Rule', 'Terry Goodkind', 523);
          console.log(bookWizard.title);
          bookWizard.toggleCheckOutStatus();
          console.log(bookWizard.isCheckedOut);
          console.log(bookWizard.author);
          console.log(bookWizard.pages);
          bookWizard.addRating(4);
          bookWizard.addRating(8);
          bookWizard.addRating(10);
          bookWizard.addRating(9);
          console.log(bookWizard.getAverageRating());

          const movieHook = new Movie('Hook', 'Steven Speilberg', 105);
          console.log(movieHook.title);
          console.log(movieHook.isCheckedOut);
          console.log(movieHook.director);
          console.log(movieHook.runTime);
          movieHook.addRating(8);
          movieHook.addRating(9);
          console.log(movieHook.getAverageRating());

          const cdRTL = new CD('Ride the Lightning', 'Metallica');
          console.log(cdRTL.title);
          console.log(cdRTL.artist);
          cdRTL.toggleCheckOutStatus();
          console.log(cdRTL.isCheckedOut);
          cdRTL.addRating(10);
          cdRTL.addRating(9.5);
          cdRTL.addRating(10);
          cdRTL.addRating(9);
          console.log(cdRTL.getAverageRating());
          cdRTL.toggleCheckOutStatus();
          console.log(cdRTL.isCheckedOut);
        </code>
      </pre>
    </aside>

    <aside class="project">
      <h6>School Catalogue</h6>
      <pre>
        <code>
          class School {
            constructor(name, level, numberOfStudents){
              this._name = name;
              this._level = level;
              this._numberOfStudents = numberOfStudents;
            }

            get name() {
              return this._name;
            }

            get level() {
              return this._level;
            }

            get numberOfStudents() {
              return this._numberOfStudents;
            }

            set numberOfStudents(value) {
              if(value.isNaN()){
                console.log('Invalid input: numberOfStudents must be set to a Number.');
              } else {
                this._numberOfStudents = value;
              }
            }

            quickFacts() {
              console.log(`${this._name} educates ${this._numberOfStudents} at the ${this._level} school level.`);
            }

            static pickSubstituteTeacher(substituteTeachers) {
              const randNumber = Math.floor(Math.random() * substituteTeachers.length);
              return substituteTeachers[randNumber];
            }
          }

          class PrimarySchool extends School {
            constructor(name, numberOfStudents, pickupPolicy){
              super(name, 'primary', numberOfStudents);
              this._pickupPolicy = pickupPolicy;
            }

            get pickupPolicy() {
              return this._pickupPolicy;
            }
          }

          class MiddleSchool extends School {
            constructor(name, numberOfStudents){
              super(name, 'middle', numberOfStudents);
            }
          }

          class HighSchool extends School {
            constructor(name, numberOfStudents, sportsTeams){
              super(name, 'high', numberOfStudents);
              this._sportsTeams = [];
            }

            get sportsTeams() {
              return this._sportsTeams;
            }
          }

          const plumTreePark = new PrimarySchool('Plum Tree Park', 340, 'morning and night');
          plumTreePark.quickFacts();
          const sub = School.pickSubstituteTeacher(['Rachelle', 'Victor', 'Kate']);
          console.log(sub);
        </code>
      </pre>
    </aside>
  </article>

  <article class="module">
    <h5>Intermediate JavaScript Modules</h5>
    <p>JavaScript modules are reusable pieces of code that can be exported from one program and imported for use in another program.</p>
    <p>By separating code with similar logic into files called modules, we can:</p>
    <ul>
      <li>find, fix, and debug code more easily;</li>
      <li>reuse and recycle defined logic in different parts of our application;</li>
      <li>keep information private and protected from other modules;</li>
      <li>and, importantly, prevent pollution of the global namespace and potential naming collisions, by cautiously selecting variables and behavior we load into a program.</li>
    </ul>
    <p>
      I could use this to break out and simplify the craziness of BRUCE's global.js file.
    </p>

    <section>
      <h6>module.exports</h6>
      <p>The pattern we use to export modules is thus:</p>
      <ol>
        <li>Define an object to represent the module.</li>
        <li>Add data or behavior to the module.</li>
        <li>Export the module.</li>
      </ol>
      <pre>
        <code>
          let Airplane = {};
          Airplane.myAirplane = "StarJet";

          module.exports = Airplane;
        </code>
      </pre>
    </section>

    <section>
      <h6>require()</h6>
      <p>The pattern to import a module is:</p>
      <ol>
        <li>Import the module</li>
        <li>Use the module and its properties within a program.</li>
      </ol>
      <pre>
        <code>
          const Airplane = require('./1-airplane.js');

          function displayAirplane() {
            console.log(Airplane.myAirplane);
          }

          displayAirplane();
        </code>
      </pre>
    </section>

    <section>
      <h6>module.exports II</h6>
      <p>You can also user module.exports to export methods</p>
      <pre>
        <code>
          let Airplane = {};

          module.exports = {
            myAirplane: "CloudJet",
            displayAirplane: function(){
              return this.myAirplane;
            }
          };
        </code>
      </pre>
    </section>

    <section>
      <h6>export default</h6>
      <p>Replaces module.exports in ES6</p>
      <pre>
        <code>
          module.exports = Airplane;
        </code>
      </pre>
      <p>becomes...</p>
      <pre>
        <code>
          export default Airplane;
        </code>
      </pre>
    </section>

    <section>
      <h6>import</h6>
      <p>ES6 introduced way of importing objects.</p>
      <pre>
        <code>
          import Airplane from './airplane';

          function displayFuelCapacity(){
            Airplane.availableAirplanes.forEach(function(element){
              console.log('Fuel Capacity of ' + element.name + ' : ' + element.fuelCapacity);
            });
          }

          displayFuelCapacity();
        </code>
      </pre>
    </section>

    <section>
      <h6>Named Exports</h6>
      <p>Introduced in ES6 - allows you to specify which objects to export, rather than globally exporting the entire module.</p>
      <pre>
        <code>
          let availableAirplanes = [
          {
            name: 'AeroJet',
            fuelCapacity: 800,
            availableStaff: [
              'pilots',
              'flightAttendants',
              'engineers',
              'medicalAssistance',
              'sensorOperators'
            ]
          },
          {
            name: 'SkyJet',
            fuelCapacity: 500,
            availableStaff: [
              'pilots',
              'flightAttendants'
            ]
          }
        ];

        let flightRequirements = {
          requiredStaff: 4
        };

        const meetsStaffRequirements = (availableStaff, requiredStaff) => {
          if(availableStaff.length >= requiredStaff){
            return true;
          } else {
            return false;
          }
        }

        export {availableAirplanes, flightRequirements, meetsStaffRequirements};
        </code>
      </pre>
    </section>

    <section>
      <h6>Named Imports</h6>
      <p>Used to import objects from the Named Exports. These objects are available to be used as is in the code, without the need for, for example, <code>Airplane.flightRequirements</code>. It would just be used as <code>flightRequirements</code></p>
      <pre>
        <code>
          import {availableAirplanes, flightRequirements, meetsStaffRequirements} from './airplane';

          function displayFuelCapacity(){
            availableAirplanes.forEach(function(element){
              console.log('Fuel Capacity of ' + element.name + ' : ' + element.fuelCapacity);
            });
          }

          displayFuelCapacity();

          function displayStaffStatus() {
            availableAirplanes.forEach(function(element){
              console.log(element.name + ' meets staff requirements: ' + meetsStaffRequirements(element.availableStaff, flightRequirements.requiredStaff));
            });
          }

          displayStaffStatus();
        </code>
      </pre>
    </section>

    <section>
      <h6>Export Named Exports</h6>
      <p>Named exports can be exported as soon as they are defined by prepending them with the <code>export</code> keyword. Exported Named Exports import the same way as defined previously.</p>
      <pre>
        <code>
          export let availableAirplanes = [
          {
            name: 'AeroJet',
            fuelCapacity: 800,
            availableStaff: [
              'pilots',
              'flightAttendants',
              'engineers',
              'medicalAssistance',
              'sensorOperators'
            ],
            maxSpeed: 1200,
            minSpeed: 300
          },
          {
            name: 'SkyJet',
            fuelCapacity: 500,
            availableStaff: [
              'pilots',
              'flightAttendants'
            ],
            maxSpeed: 800,
            minSpeed: 200
          }
        ];

        export let flightRequirements = {
          requiredStaff: 4,
          requiredSpeedRange: 700
        };

        export const meetsStaffRequirements = (availableStaff, requiredStaff) => {
          if(availableStaff.length >= requiredStaff){
            return true;
          } else {
            return false;
          }
        }

        export const meetsSpeedRangeRequirements = (maxSpeed, minSpeed, requiredSpeedRange) => {
          const range = maxSpeed - minSpeed;
          if(range > requiredSpeedRange){
            return true;
          } else {
            return false;
          }
        }
        </code>
      </pre>
    </section>

    <section>
      <h6>Export as</h6>
      <p>Allows you to give exported variables names an alias. Only works with the export statement <code>export {variable as var}</code>, and not <code>export let variable = {}</code></p>
    </section>

    <section>
      <h6>Import as</h6>
      <p>Basic usage is to call the alias names in the standard import statement</p>
      <pre>
        <code>
          import {var} from './module'
        </code>
      </pre>
      <p>You can also give an alias to a variable not aliased in the export</p>
      <pre>
        <code>
          import {var, variable2 as var2} from './module'
        </code>
      </pre>
      <p>Or, you can give an alias to the entire module</p>
      <pre>
        <code>
          import * as AliasName from './module';

          AliasName.var;
        </code>
      </pre>
    </section>

    <aside class="project">
      <h6>Message Mixer</h6>
      <p>messageMixer.js</p>
      <pre>
        <code>
          const countCharacter = function(inputString, inputCharacter) {
            let count = 0;
            let string = inputString.toLowerCase();
            let character = inputCharacter.toLowerCase();
              for (let i = 0; i < string.length; i++) {
                if (string[i] === character) {
                   count++;
                }
              }
            return count;
          };

          const capitalizeFirstCharacterOfWords = function(string) {
            let arr = string.split(" ");
              for (let i = 0; i < arr.length; i++) {
                let word = arr[i];
                  arr[i] = word[0].toUpperCase() + word.substring(1);
              }
            return arr.join(" ");
          };


          const reverseWord = function(word) {
            return word.split("").reverse().join("");
          };

          const reverseAllWords = function(sentence) {
            let words = sentence.split(" ");
              for (let i = 0; i < words.length; i++) {
                words[i] = reverseWord(words[i]);
              }
             return words.join(" ");
          };


          const replaceFirstOccurence = function(string, toBeReplaced, replaceWith) {
            return string.replace(toBeReplaced, replaceWith);
          };


          const replaceAllOccurrences = function(string, toBeReplaced, replaceWith) {
            return string.split(toBeReplaced).join(replaceWith);
          };

          const encode = function(string) {
            let replacementObject = { "a": "@", "s": "$", "i": "!", "o":"0" };
              for (let key in replacementObject) {
                string = replaceAllOccurrences(string, key, replacementObject[key]);
              }
              return string;
          };

          const palindrome = function(str){
            return str + " " + reverseWord(str);
          }

          const pigLatin = function(sentence, character){
            return sentence.split(" ").join(character + " ");
          }

          export {countCharacter, capitalizeFirstCharacterOfWords, reverseWord, reverseAllWords, replaceFirstOccurence, replaceAllOccurrences, encode, palindrome, pigLatin};
        </code>
      </pre>
      <p>message.js</p>
      <pre>
        <code>
          import {countCharacter, capitalizeFirstCharacterOfWords, reverseWord, reverseAllWords, replaceFirstOccurence, replaceAllOccurrences, encode, palindrome, pigLatin} from './messageMixer';

          function displayMessage() {
            console.log(countCharacter("What is the color of the sky?", "t"));
            console.log(capitalizeFirstCharacterOfWords("What is the color of the sky?"));
            console.log(reverseWord("What is the color of the sky?"));
            console.log(reverseAllWords("What is the color of the sky?"));
            console.log(replaceFirstOccurence("What is the color of the sky?", "sky", "water"));
            console.log(encode("What is the color of the sky?"));
            console.log(palindrome("What is the color of the sky?"));
            console.log(pigLatin("What is the color of the sky?", "q"));
          }

          displayMessage();
        </code>
      </pre>
    </aside>

    <aside class="project">
      <h6>WorkAround</h6>
      <p>employee.js</p>
      <pre>
        <code>
          let Employee = {
            salary: 100000
          };

          let payGrades = {
            entryLevel: { taxMultiplier: .05, benefits: ['health'], minSalary: 10000, maxSalary: 49999 },
            midLevel: { taxMultiplier: .1, benefits: ['health', 'housing'], minSalary: 50000, maxSalary: 99999 },
            seniorLevel: { taxMultiplier: .2, benefits: ['health', 'housing', 'wellness', 'gym'], minSalary: 100000, maxSalary: 200000 }
          };

          const getCadre = function() {
            if (Employee.salary >= payGrades.entryLevel.minSalary && Employee.salary <= payGrades.entryLevel.maxSalary) {
              return 'entryLevel';
            } else if (Employee.salary >= payGrades.midLevel.minSalary && Employee.salary <= payGrades.midLevel.maxSalary) {
              return 'midLevel';
            } else return 'seniorLevel';
          }

          const calculateTax = function() {
            return payGrades[getCadre()].taxMultiplier * Employee.salary;
          }

          const getBenefits = function() {
            return payGrades[getCadre()].benefits.join(', ');
          }

          const calculateBonus = function() {
            return .02 * Employee.salary;
          }

          const reimbursementEligibility = function() {
            let reimbursementCosts = { health: 5000, housing: 8000, wellness: 6000, gym: 12000 };
            let totalBenefitsValue = 0;
            let employeeBenefits = payGrades[getCadre()].benefits;
            for (let i = 0; i < employeeBenefits.length; i++) {
              totalBenefitsValue += reimbursementCosts[employeeBenefits[i]];
            }
            return totalBenefitsValue;
          }

          export {getCadre as cadre, calculateTax as tax, getBenefits as benefits, calculateBonus as bonus, reimbursementEligibility as reimbursement};

          export default Employee;
        </code>
      </pre>
      <p>workAround.js</p>
      <pre>
        <code>
          import {cadre, tax, benefits, bonus, reimbursement} from './employee';
          import Employee from './employee';

          function getEmployeeInformation(inputSalary) {
            Employee.salary = inputSalary;
            console.log('Cadre: ' + cadre());
            console.log('Tax: ' + tax());
            console.log('Benefits: ' + benefits());
            console.log('Bonus: ' + bonus());
            console.log('Reimbursement Eligibility: ' + reimbursement() + '\n');
          }

          getEmployeeInformation(10000);
          getEmployeeInformation(50000);
          getEmployeeInformation(100000);
        </code>
      </pre>
    </aside>
  </article>
</article>
</main>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php";
?>
