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
</main>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php";
?>