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
  </article>
</main>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php";
?>
