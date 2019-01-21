<?php
include $_SERVER["DOCUMENT_ROOT"] . "/includes/header.php";
?>

<main id="courses" class="centred--wide">
  <h3 class="projects__heading secondary-heading">Build Front-End Web Applications from Scratch</h3>

  <article class="unit">
    <h4>Unit 2: Introduction to React</h4>
    <article class="module">
      <h5>Intro to JSX</h5>
      <ul>
        <li>JSX is a syntax extention to Javascript, written for use with React</li>
        <li>Looks a lot like HTML</li>
        <li>It is not valid JS and browsers can't understand it.</li>
        <li>Any JSX needs to be compiled to regular JavaScript before read by a browser.</li>
      </ul>
      <section>
        <h6>JSX Elements</h6>
        <p>Basic unit of JSX</p>
        <pre>
          <code>
            <h1>Hello World!</h1>
          </code>
        </pre>
        <p>The only noticable difference between a JSX element and an HTML element is that it is found in a JavaScript file</p>
      </section>
      <section>
        <h6>JSX Elements and Their Surroundings</h6>
        <p>JSX elements are treated like JavaScript expressions and go anywhere JavaScript expressions go.</p>
        <p>ie. saved in a variable, passed to a function, stored in an object or array, etc.</p>
        <pre>
          <code>
            //saved as a variable
            const navBar = <nav>I am a nav bar</nav>;

            //stored in an object
            const myTeam = {
              center: <li>Auston Matthews</li>,
              rightWing: <li>Mitch Marner</li>,
              leftWing: <li>Kasperi Kapanen</li>,
              rightDefence: <li>Morgan Rielly</li>,
              leftDefence: <li>Ron Hainsey</li>
            }
          </code>
        </pre>
      </section>
      <section>
        <h6>Nested JSX</h6>
        <p>JSX elemnts can be nested within each other just like HTML</p>
        <p>If you want to use line breaks for readability, you need to wrap the JSX expression in parentheses:</p>
        <pre>
          <code>
            const eample = (
              <a href="https://google.com">
                <h1>
                  Click me!
                </h1>
              </a>
            );
          </code>
        </pre>
      </section>
      <section>
        <h6>JSX Outer Elements</h6>
        <p>JSX expressions must have exactly <em>one</em> outermost element.</p>
        <p>This will work:</p>
        <pre>
          <code>
            const paragraphs = (
              <div id="i-am-the-outermost-element">
                <p>I am a paragraph.</p>
                <p>I, too, am a paragraph.</p>
              </div>
            );
          </code>
        </pre>
        <p>This won't:</p>
        <pre>
          <code>
            const paragraphs = (
              <p>I am a paragraph.</p>
              <p>I, too, am a paragraph.</p>
            );
          </code>
        </pre>
        <p>To fix an expression with multiple outer elements, the simplest solutions is to wrap everything in a div.</p>
      </section>
      <section>
        <h6>Rendering JSX</h6>
        <pre>
          <code>
            import React from 'react';
            import ReactDOM from 'react-dom';

            // Copy code here:
            ReactDOM.render(<h1>Hello world</h1>, document.getElementById('app'));
          </code>
        </pre>

        <p>
          <code>ReactDOM</code> is a JavaScript library containing several React-specific methods that deal with the DOM
        </p>
        <p>
          <code>.render()</code> is the most common method of <code>ReactDOM</code> used to render JSX.
        </p>
        <p>
          The first argument of <code>.render()</code> should evaluate to the JSX expression you want to render (meaning you can pass variables to it, as long as that variable evaluates to a JSX expression).
        </p>
        <p>
          The second argument of <code>.render()</code> is the HTML element you want to append the JSX expression from the first argument.
        </p>
        <pre>
          <code>
            const myList = (
            	<ul>
              	<li>Hockey</li>
              	<li>Golf</li>
              	<li>Baseball</li>
              </ul>
            );

            ReactDOM.render(
            	myList,
              document.getElementById('app')
            );
          </code>
        </pre>
      </section>
      <section>
        <h6>The Virtual DOM</h6>
        <p>
          <code>ReactDOM.render()</code> only updates DOM elements that have changed.
        </p>
        <p>
          That means if you render the same thing twice in a row, the second render will do nothing.
        </p>
        <p>
          Only updating the necessary DOM elements is a large part of what makes React so successful.
        </p>
        <p>
          In React, for every DOM object, there is a corresponding virtual DOM object, which is a representation or 'lightweight copy' of the DOM object.
        </p>
        <p>
          Virtual DOM objects have the same properties, but lack the real DOM's power to directly change what is on the screen.
        </p>
        <p>
          Manipulating the DOM is slow. Manipulating the vitual DOM is much faster, because nothing is drawn onscreen.
        </p>
        <p>
          Think editing a blueprint (virtual DOM), as opposed to moving rooms in an actual house (real DOM).
        </p>
        <p>
          Rendering JSX updates every virtual DOM object, very quickly. React then compares the updated virtual DOM to a <em>snapshot</em> of what the virtual DOM looked like right before the update. This process is called <em>diffing</em>
        </p>
        <p>
          Once React knows which virtual DOM objects have changed, React updates those objects only on the real DOM. Whereas, updating the DOM directly would update all the objects, even if they haven't changed and are updated to the exact thing they were already. This is largely what allows React to boost performance.
        </p>
        <p>In summary, here's what happens when you try to update the DOM in React:</p>
        <ol>
          <li>A JSX element renders.</li>
          <li>The entire virtual DOM gets updated.</li>
          <li>The virtual DOM "diffs," comparing what it looked like before you updated it. React figures out which objects have changed.</li>
          <li>The changed objects, and the changed objects only, get updated on the real DOM.</li>
          <li>Changes on the real DOM cause the screen to change</li>
        </ol>
      </section>
    </article>

    <article class="module">
      <h5>Advance JSX</h5>
      <section>
        <h6>class vs className</h6>
        <p>In HTML you'd use</p>
        <pre>
          <code>
            <h1 class="big">Hey!</h1>
          </code>
        </pre>
        <p>In JSX you must use:</p>
        <pre>
          <code>
            <h1 className="big">Hey!</h1>
          </code>
        </pre>
        <p>
          This because <code>class</code> is a reserved word in Javascript, so when the JSX renders it would break the code.
        </p>
        <p>
          When JSX is rendered, <code>className</code> attributes are automatically rendered as HTML <code>class</code> attributes.
        </p>
        <p>Example:</p>
        <pre>
          <code>
            const myDiv = (
            	<div className="big">
              	I AM A BIG DIV
              </div>
            );

            ReactDOM.render(
            	myDiv,
              document.getElementById('app')
            );
          </code>
        </pre>
      </section>
      <section>
        <h6>Self-Closing Tags</h6>
        <p>
          In JSX, self-closing tags <strong>MUST</strong> include the 'closing' slash, or it will through an error
        </p>
        <p>
          <code><img src="img.jpg"></code>: bad
        </p>
        <p>
          <code><img src="img.jpg" /></code>: good
        </p>
      </section>
      <section>
        <h6>Curly Braces in JSX</h6>
        <p>
          Wrapping code in curly braces <code>{2 + 3}</code> tells the render "even though I'm between JSX tags, treat me like ordinary JavaScript."
        </p>
        <p>
          The curly braces are treated as <em>markers</em> for where to inject JavaScript into JSX and don't get rendered.
        </p>
        <p>
          <code><h1>2 + 3</h1></code> prints:  2 + 3
        </p>
        <p>
          <code><h1>{2 + 3}</h1></code> prints: 5
        </p>
        <pre>
          <code>
            const math = (
            	<h1>
              	2 + 3 = {2 + 3}
              </h1>
            );

            ReactDOM.render(
              math,
              document.getElementById('app')
            );
            // Renders: 2 + 3 = 5
          </code>
        </pre>

        <p>
          You can use this to inject variables or object properties into JSX as well:
        </p>
        <pre>
          <code>
            const name = "Dave";
            const greeting = <p>Hello, {name}!</p>;
          </code>
        </pre>

        <p>
          You can also use this to inject variables or object properties to set attributes:
        </p>
        <pre>
          <code>
            const sideLength = "200px";
            const panda = (
              <img
                src="images/panda.jpg"
                alt="panda"
                height={sideLength}
                width={sideLength} />
            );

            const pics = {
              panda: "images/panda.jpg",
              owl: "images/owl.jpg",
              owlCat: "images/owlCat.jpg"
            };

            const owl = (
              <img
                src={pics.owl}
                alt="Lazy Owl" />
            );
          </code>
        </pre>
      </section>
      <section>
        <h6>Event Listeners in JSX</h6>
        <p>
          You can add event listener attributes to JSX elements.
        </p>
        <pre>
          <code>
            function makeDoggy(e) {
              // Call this extremely useful function on an <img>.
              // The <img> will become a picture of a doggy.
              e.target.setAttribute('src', 'https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-puppy.jpeg');
              e.target.setAttribute('alt', 'doggy');
            }

            const kitty = (
            	<img
            		src="https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-kitty.jpg"
            		alt="kitty" onClick={makeDoggy} />
            );

            ReactDOM.render(kitty, document.getElementById('app'));
          </code>
        </pre>
      </section>

      <section>
        <h6>JSX Conditionals: If Statements That Don't Work</h6>
        <p>You can't inject an <code>if</code> statement into JSX.</p>
        <p>This <strong>WILL NOT</strong> work:</p>
        <pre>
          <code>
            const example = (
              <h1>
                {
                  if (purchase.complete){
                    'Thank you for placing an order!'
                  }
                }
              </h1>
            );
          </code>
        </pre>
      </section>

      <section>
        <h6>JSX Conditionals: If Statements That Do Work</h6>
        <p>Here is the most common way to write an <code>if</code> statement that will work with JSX:</p>
        <pre>
          <code>
            let example;
            if(user.age >= drinkingAge){
              example = (
                <h1>
                  Drink Beer!!
                </h1>
              );
            } else {
              example = (
                <h1>
                  Drink Milk!!
                </h1>
              );
            }
          </code>
        </pre>
      </section>

      <section>
        <h6>JSX Conditionals: The Ternary Operator</h6>
        <p>
          In contrast, Ternary Operators do work when injected into a JSX element:
        </p>
        <pre>
          <code>
            const headline = (
              <h1>
                {
                  age >= drinkingAge ? 'Get Drunk' : 'Drink Milk'
                }
              </h1>
            )
          </code>
        </pre>
        <p>An example getting parameters from an object:</p>
        <pre>
          <code>
            function coinToss () {
              // Randomly return either 'heads' or 'tails'.
              return Math.random() < 0.5 ? 'heads' : 'tails';
            }

            const pics = {
              kitty: 'https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-kitty.jpg',
              doggy: 'https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-puppy.jpeg'
            };

            const img = <img src={pics[coinToss() === 'heads' ? 'kitty' : 'doggy']} />;

            ReactDOM.render(
            	img,
            	document.getElementById('app')
            );
          </code>
        </pre>
      </section>

      <section>
        <h6>JSX Conditionals: &&</h6>
        <p>
          the <code>&&</code> operator works best for conditionals that will sometimes do an action, and other times to absolutely nothing:
        </p>
        <pre>
          <code>
            // judgmental will be true half the time.
            const judgmental = Math.random() < 0.5;

            const favoriteFoods = (
              <div>
                <h1>My Favorite Foods</h1>
                <ul>
                  <li>Sushi Burrito</li>
                  <li>Rhubarb Pie</li>
                  { !judgmental && <li>Nacho Cheez Straight Out The Jar</li> }
                  <li>Broiled Grapefruit</li>
                </ul>
              </div>
            );

            ReactDOM.render(
            	favoriteFoods,
            	document.getElementById('app')
            );
          </code>
        </pre>
        <p>
          This will only render <code><li>Nacho Cheez Straight Out the Jar</code> if <code>judgmental</code> returns true.
        </p>
        <p>
          This is completely different from standard JavaScript, where && is used to qualify if two or more statements validate as required: <code>if(1+1 === 2 && 2+2 === 4){ do something }</code>
        </p>
      </section>

      <section>
        <h6>.map in JSX</h6>
        <p>
          Used to create an array of strings to be rendered. Very useful for something like a list:
        </p>
        <pre>
          <code>
            const strings = ['Home', 'Shop', 'About Me'];

            const listItems = strings.map(string => <li>{string}</li>);

            ReactDOM.render(<ul>{listItems}</ul>, document.getElementById('app'));
            /* renders
            <ul>
              <li>Home</li>
              <li>Shop</li>
              <li>About Me</li>
            </ul>
            */
          </code>
        </pre>
      </section>

      <section>
        <h6>Keys</h6>
        <p>
          The <code>key</code> attribute of a JSX element is used to keep track of lists. Not using keys when you're supposed to can lead to React rendering your list in the wrong order.
        </p>
        <pre>
          <code>
            const list = (
              <ul>
                <li key="li-01">Example1</li>
                <li key="li-02">Example2</li>
                <li key="li-03">Example3</li>
              </ul>
            );

            const people = ['James', 'Lars', 'Kirk', 'Robert', 'Jason', 'Cliff'];

            const peopleList = people.map((person, i) =>
              <li key={'person_' + i}>{person}</li> 
            );
          </code>
        </pre>
        <p>
          A list needs <code>keys</code> if either of the following are true:
          <ol>
            <li>
              The list-items have <em>memory</em> from one render to the next. For instance, when a to-do list renders, each item must "remember" whether it was checked off.
            </li>
            <li>
              A list's order might be shuffled. For instance, a list of search results might be shuffled from one render to the next.
            </li>
          </ol>
        </p>
        <p>
          If you're not sure you need <code>keys</code>, use them. It can't hurt, only help.
        </p>
      </section>

      <section>
        <h6>React.createElement</h6>
        <p>
          Every time JSX element is compiled, it is secretly a call to <code>React.createElement</code>, which transforms the JSX into that method:
        </p>
        <pre>
          <code>
            //JSX element
            const h1 = <h1>Hello world</h1>;

            //JSX compiler transforms the above into this when Rendering
            const h1 = React.createElement(
              "h1",
              null,
              "Hello world"
            );
          </code>
        </pre>
        <p>
          Therefore, you can also use React by calling <code>.createElement()</code> directly (though it's not common to do so).
        </p>
      </section>
    </article>

    <article class="module">
      <h5>Your First React Component</h5>
      <p>
        A small, reusable chunck of code responsible for one job - often involves rendering HTML.
      </p>
      <p>
        Every component must come from a <em>component class</em> - like a factory class that can produce as many components as you want. This is not the actual component. When you start making components, each will come from a component class.
      </p>
      <p>
        Component classes are made using a base class from the React library: <code>React.Component</code>
      </p>
      <p>
        <code>React.Component</code> is a JavaScript class.
      </p>
      <p>
        Creating your own component class requires you to <em>subclass</em> <code>React.Component</code>: <code>class ComponentName extends React.Component {}</code>
      </p>
      <p>
        <strong>Component class variable names must begin with capital letters.</strong>
      </p>
      <p>
        The body of a component class acts as the instructions for how the component class should build a React component.
      </p>
      <p>
        there is only one property that <strong>must</strong> be included: <strong>a render method</strong>, which must contain a <code>return</code> statement in order for it to render on the screen. The <code>return</code> usually returns a JSX expression, and is called via <code>ReactDOM.render()</code>:
        <code>
          render() {
            return <h1>Hello World</h1>;
          }
        </code>
      </p>
      <p>
        To create a React component from your component class, you write a JSX element, and give it the name of your component class rather than something like <code>h1</code> or <code>div</code>.
      </p>
      <p>
        JSX elements can be either HTML-like (<code>h1, div, p</code>) or <em>component instances</em>. JSX uses capitalization to distinguish the two - this is the React reason why component class names must begin with capital letters: when you create a JSX element starting with a Capital, it tells React "I will be a component instance, and not an HTML tag."
      </p>
      <pre>
        <code>
          //import the React library - contains properties needed to make React work
          import React from 'react';
          //import the ReactDOM library - contains properties needed to help React interact with the DOM
          import ReactDOM from 'react-dom';

          class MyComponentClass extends React.Component {
            render() {
              return <h1>Hello world</h1>;
            }
          }

          ReactDOM.render(
          	<MyComponentClass />,
          	document.getElementById('app')
          );
        </code>
      </pre>
    </article>

    <article class="module">
      <h5>Components and Advanced JSX</h5>
      <section>
        <h6>Multiline JSX in a Component</h6>
        <p>
          Simplest example is to wrap the return in parentheses:
        </p>
        <pre>
          <code>
            class QuoteMaker extends React.Component {
              render() {
                return (
                  <blockquote>
                    <p>
                      The world is full of objects, more or less interesting; I do not wish to add any more.
                    </p>
                    <cite>
                      <a target="_blank"
                        href="https://en.wikipedia.org/wiki/Douglas_Huebler">
                        Douglas Huebler
                      </a>
                    </cite>
                  </blockquote>
                );
              }
            };
          </code>
        </pre>
      </section>
      <section>
        <h6>Use a Variable Attribute in a Component</h6>
        <p>
          User curly-brace JavaScript injections inside the render function.
        </p>
        <pre>
          <code>
            const redPanda = {
              src: "img/image.jpg",
              alt: 'Red Panda',
              width: '200px'
            };

            class RedPanda extends React.Component {
              render() {
                return (
                  <div>
                    <h1>Cute Red Panda</h1>
                    <img
                      src={redPanda.src}
                      alt={redPanda.alt}
                      width={redPanda.width} />
                  </div>
                );
              }
            }

            ReactDOM.render(
              <RedPanda />,
              document.getElementById('app')
            );
          </code>
        </pre>
      </section>

      <section>
        <h6>Put Logic in a Render Function</h6>
        <p>
          While <code>render()</code> function <strong>must</strong> have <code>return</code> statements, they can also include other logic.
        </p>
        <pre>
          <code>
            const friends = [
            {
              title: "Yummmmmmm",
              src: "https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-monkeyweirdo.jpg"
            },
            {
              title: "Hey Guys!  Wait Up!",
              src: "https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-earnestfrog.jpg"
            },
            {
              title: "Yikes",
              src: "https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-alpaca.jpg"
            }
          ];

          // New component class starts here:
          class Friend extends React.Component{
            render() {
              const friend = friends[0];
              return (
                <div>
                	<h1>{friend.title}</h1>
                	<img
                		src={friend.src} />
                </div>
              );
            }
          };

          ReactDOM.render(
            <Friend />,
            document.getElementById('app')
          );
          </code>
        </pre>
      </section>

      <section>
        <h6>Use a Conditional in a Render Function</h6>
        <p>You can put conditionals inside the <code>render()</code> function, but before the <code>return</code> statment.</p>
        <p>
          Conditional <strong>cannot</strong> include a JSX element. Just a conditional value that will be injected into a JSX element
        </p>
        <pre>
          <code>
            const fiftyFifty = Math.random() < 0.5;

            // New component class starts here:
            class TonightsPlan extends React.Component{
              render() {
                let flip = (fiftyFifty) ? "Tonight I'm going out WOO" :  "Tonight I'm going to bed WOO";

                let heading = <h1>{flip}</h1>;
                return heading;
              }
            };

            ReactDOM.render(
              <TonightsPlan />,
              document.getElementById('app')
            );
          </code>
        </pre>
      </section>

      <section>
        <h6>Use this in a Component</h6>
        <p>
          Most of the time, <code>this</code> refers to an instance of your component class.
        </p>
        <p>
          One of the most frequent uses of <code>this</code> is to call getter methods from your component class:
        </p>
        <pre>
          <code>
            class MyName extends React.Component {
            	// name property goes here:
            	get name() {
                return 'Timbo';
              }

              render() {
                return <h1>My name is {this.name}.</h1>;
              }
            }

            ReactDOM.render(<MyName />, document.getElementById('app'));
          </code>
        </pre>
      </section>

      <section>
        <h6>Use an Event Listener in a Component</h6>
        <p>
          Render functions often contain event listeners:
        </p>
        <pre>
          <code>
            class MyClass extends React.Component {
              myFunc() {
                alert('Stop it! Stop hovering!');
              }

              render() {
                return(
                  <div onHover={this.myFunc}>
                  </div>
                );
              }
            };
          </code>
        </pre>
      </section>

      <aside class="project">
        <h6>Authorization Form</h6>
        <pre>
          <code>
            import React from 'react';
            import ReactDOM from 'react-dom';

            class Contact extends React.Component {
              constructor(props) {
                super(props);
                this.state = {
                  password: 'swordfish',
                  authorized: false
                };
                this.authorize = this.authorize.bind(this);
              }

              authorize(e) {
                const password = e.target.querySelector(
                  'input[type="password"]').value;
                const auth = password == this.state.password;
                this.setState({
                  authorized: auth
                });
              }

              render() {
                let heading = (this.state.authorized) ? "Contact" : "Enter the Password";

                const login = (
                	<form action="#" onSubmit={this.authorize}>
                  	<input type="password" placeholder="Password" />
                  	<input type="submit" />
                  </form>
                );

                const contactInfo = (
                  <ul>
                      <li>
                        client@example.com
                      </li>
                      <li>
                        555.555.5555
                      </li>
                    </ul>
                );

                return (
                  <div id="authorization">
                    <h1>{heading}</h1>
            				{ this.state.authorized ? contactInfo : login }
                  </div>
                );
              }
            }

            ReactDOM.render(
              <Contact />,
              document.getElementById('app')
            );
          </code>
        </pre>
      </aside>
    </article>

    <article class="module">
      <h5>Creating a React App</h5>
      <ol>
        <li>
          Globally install <em>create-react-app</em>: <code>npm install -g create-react-app</code> (you only need to do this once)
        </li>
        <li>
          In terminal, navigate to the folder you want to create your React app in, and run <code>create-react-app</code> with the name you want to use for your project: <code>create-react-app my-first-app</code>
          <li>
            This will install the React boilerplate application, which works out-of-the-box, and provides a consistent structure for all React apps.
          </li>
          <li>
            Start the React app development server:
            <li>
              In terminal <code>cd</code> into the React app folder and run <code>npm start</code>. This will open up the boilerplate landing page in your default browser; which should be at the address http://localhost:3000/.
            </li>
            <li>
              Leave this terminal tab running, as it will constantly serve the React app. With this process running, every time you save a update to a file within the React app, the development server will automatically refresh with your updates.
            </li>
          </li>
        </li>
      </ol>
    </article>

    <article class="module">
      <h5>React Developer Tools</h5>
      <p>
        Chrome extention created by Facebook to help with debugging React apps while they run in the development environment.
      </p>
      <section>
        <h6>Install React Developer Tools</h6>
        <p>
          Install the Chrome extention from here: <a href="https://chrome.google.com/webstore/detail/react-developer-tools/fmkadmapgofadopljbjfkapdkoienihi" target="_blank">React Developer Tools</a>
        </p>
        <p>
          When you start your React app and visit it in Chrome, the React Developer Tools icon will change from inactive to active, indicating the site you're browsing is a React App.
        </p>
        <p>
          Open the React Develper Tools by opening the Chrome DevTools and Selecting the "React" tab.
        </p>
        <p>
          Expanding <code><App>...</App></code>, you'll see all the rendered React components.
        </p>
        <p>
          Clicking on component elements on the left side of the tools, will expose their properties on the right side.
        </p>
      </section>
      <section>
        <h6>Modify Components with JavaScript</h6>
        <p>
          Throught the React  Developer Tools, you can modify rendered React components. Allowing you to experiment with changing component values, calling methods, and testing interaction between components.
        </p>
      </section>
    </article>

    <article class="module">
      <h5>Components Render Other Components</h5>
      <p>
        Component render methods can return <em>component instances</em>.
      </p>
      <pre>
        <code>
          class OMG extends React.Component {
            render() {
              return <h1>Whooooa!</h1>;
            }
          }

          class Crazy extends React.Component {
            render() {
              return <OMG />
            }
          }
        </code>
      </pre>
      <p>
        You can import components from other JavaScript files using an <code>import</code> statement.
      </p>
      <p>
        We've already seen this when adding the BusinessList and SearchBar components to the main App.js in the first part of the <em>ravenous</em> project.
      </p>
      <p>
        The most common way to export a component from it's component class file is via <em>named exports</em>; which is when you place <code>export</code> ahead of the <code>var</code>, <code>let</code>, <code>const</code>, <code>function</code>, or <code>class</code> that you want export.
      </p>
      <p>
        These named exports are then imported into a differnt file using an import statement, with the names of what you're importing wrapped in curly braces.
      </p>
      <pre>
        <code>
          //File1.js
          export const myName = 'Timbo';
          export const mySkills = {
            code: "HTML, CSS, etc",
            sports: "Hockey, Golf, etc"
          };

          //File2.js
          import {myName, mySkills} from './File1';
        </code>
      </pre>
    </article>

    <article class="module">
      <h5>this.props</h5>
      <p>A way for a component to pass information (properties or <em>props</em>) to another component.</p>
      <p>
        Every component has a <code>props</code> object, which holds information about the component. You access a components <code>props</code> using the expression <code>this.props</code>.
      </p>
      <p>
        Most of the info within <code>this.props</code> is pretty useless, but some is extemely important.
      </p>
      <p>
        You can pass information to a React component by giving the component attributes:
      </p>
      <pre>
        <code>
          <MyComponent foo="bar" />
          <MyComponent message="message passed to component" />
          <MyComponent info={["top", "left"]} />
          <MyComponent name="Timbo" town="Hereton" age={23} living={true} />
        </code>
      </pre>
      <p>
        These attribues become the key:value pairs in the <code>this.props</code> object when the component renders.
      </p>
      <p>
        You can render the information within the <code>props</code> object by calling <code>this.props.nameOfAttribute</code> within the components render method.
      </p>
      <p>
        <code>return <h1>Message: {this.props.message}.</code>
      </p>

      <section>
        <h6>Pass props from Component to Component</h6>
        <p>
          In order for ComponentA to pass a prop to ComponentB, ComponentA needs to render ComponentB, and vice versa.
        </p>
        <pre>
          <code>
            //Greeting.js
            import React from 'react';

            export class Greeting extends React.Component {
              render() {
                return <h1>Hi there, {this.props.name}!</h1>;
              }
            }

            //App.js
            import React from 'react';
            import ReactDOM from 'react-dom';
            import {Greeting} from './Greeting';

            class App extends React.Component {
              render() {
                return (
                  <div>
                    <h1>
                      Hullo and, "Welcome to The Newzz," "On Line!"
                    </h1>
                    <Greeting name="Bruno" />
                    <article>
                      Latest newzz:  where is my phone?
                    </article>
                  </div>
                );
              }
            }

            ReactDOM.render(
              <App />,
              document.getElementById('app')
            );
          </code>
        </pre>
      </section>

      <section>
        <h6>Render Different UI Based on prop</h6>
        <p>
          You can also uses props within conditionals to render different content based on the values.
        </p>
        <pre>
          <code>
            export class MyClass extends React.Component {
              render() {
                if(this.props.name === 'Timbo'){
                  return(
                    <h2>It's Tim "The Tool Man" Taylor!</h2>
                  );
                } else {
                  return (
                    <h2>Oh, that's {this.props.name}.</h2>
                  );
                }
              }
            }
          </code>
        </pre>
      </section>
      <section>
        <h6>Pass an Event Handler in a Component Class</h6>
        <p>
          Start by defining the event handler as a method in a component class.
        </p>
        <pre>
          <code>
            class Example extends React.Component {
              eventHandler() {
                console.log('event handler called');
              }

              render() {
                return (
                  <h1 onClick={this.eventHandler}>Click me!</h1>
                );
              }
            }
          </code>
        </pre>
      </section>
      <section>
        <h6>Pass and Receive an Event Handler as a prop</h6>
        <p>
          This allows you to use the event handler in another component.
        </p>
        <pre>
          <code>
            //Talker.js
            import React from 'react';
            import ReactDOM from 'react-dom';
            import { Button } from './Button';

            class Talker extends React.Component {
              talk() {
                alert("talking!");
              }

              render() {
                return <Button talk={this.talk} />;
                //Button component defined in a separate file; the talk method is passed to it.
              }
            }

            ReactDOM.render(
              <Talker />,
              document.getElementById('app')
            );

            //Button.js
            import React from 'react';

            export class Button extends React.Component{
              render() {
                return (
                  <button onClick={this.props.talk}>
                    Click me!
                  </button>
                );
              }
            }
          </code>
        </pre>
      </section>
      <section>
        <h6>handleEvent, onEvent, and this.props.onEvent</h6>
        <p>
          Standar (but not mandatory) naming conventions:
          <ul>
            <li>
              Event handler should be named for the event it's litening for:
              <li>
                ie: if you'r listening for a "click" event, you'd name your event handler <code>handleClick</code>; "keyPress" event: <code>handleKeyPress</code>
              </li>
            </li>
            <li>
              The prop name should be the word <code>on</code>, plus the event type:
              <li>
                ie: click event - <code>onClick</code>; "keyPress" event - onKeyPress
              </li>
            </li>
          </ul>
        </p>
        <pre>
          <code>
            //main component
            class MyClass extends React.Component {
              handleClick() {
                console.log("click handled");
              }

              render() {
                //note: this use of onClick does not define a click event, it's just the arbitrary name of an attribute, becuase it's not being called an HTML-like element, which this isn't. Here you are passing an instance of the OtherComponent component and giving it props
                return <OtherComponent onClick={this.handleClick} />;
              }
            }
            //other component
            export MyOtherClass extends React.Component {
              render() {
                return (
                  <button onClick={this.props.onClick}>
                    Click me!
                  </button>
                );
              }
            }
          </code>
        </pre>
      </section>
      <section>
        <h6>this.props.children</h6>
        <p>
          Every components <code>props</code> object has a propery named <code>children</code>.
        </p>
        <p>
          <code>this.props.children</code> will pass evethying between a components opening and closing JSX tags.
        </p>

        <pre>
          <code>
            //App.js
            import React from 'react';
            import ReactDOM from 'react-dom';
            import { List } from './List';

            class App extends React.Component {
              render() {
                return (
                  <div>
                    //this instance definition does not mean that the rendered List component will necesarrily be a list with list items, you still need to define exactly what List components render (ideally, that includes an ol or ul), and the li's here are pulled into the ul/ol defined in the List component using this.props.children
                    <List type='Living Musician'>
                      <li>Sachiko M</li>
                      <li>Harvey Sid Fisher</li>
                    </List>
                    <List type='Living Cat Musician'>
                      <li>Nora the Piano Cat</li>
                      <li>Nora the Piano Cat</li>
                    </List>
                  </div>
                );
              }
            }

            ReactDOM.render(
              <App />,
              document.getElementById('app')
            );

            //List.js
            import React from 'react';

            export class List extends React.Component {
              render() {
                let titleText = `Favorite ${this.props.type}`;
                if (this.props.children instanceof Array) {
                	titleText += 's';
                }
                return (
                  <div>
                    <h1>{titleText}</h1>
                    <ul>{this.props.children}</ul>
                  </div>
                );
              }
            }
          </code>
        </pre>
      </section>
      <section>
        <h6>defaultProps</h6>
        <p>
          <code>defaultProps</code> is an object that you fill out with default values for <code>props</code> in the event you call for one that doesn't get passed to it.
        </p>
        <pre>
          <code>
            class MyClass extends React.Component {
              render() {
                return (
                  <button>
                    {this.props.text}
                  </button>
                );
              }
            }

            MyClass.defaultProps = {
              text: 'howdy'
            }
          </code>
        </pre>
        <p>
          Therefore is somewhere there is an instance of <code>MyClasss</code> like this:
          <code><MyClass /></code>, the button MyClass renders will say 'howdy', rather than being blank.
        </p>
        <p>
          Otherwise, if the prop is passed, that value will be used (even if it's blank):
          <code><MyClass text='what you say?' /></code>
        </p>
      </section>
    </article>

    <article class="module">
      <h5>this.state</h5>
      get notes from work laptop

      <aside class="project">
        <h6>Random Color Picker</h6>
        <pre>
          <code>
            //Random.js
            import React from 'react';
            import ReactDOM from 'react-dom';
            import { Button } from './Button';

            class Random extends React.Component {
              constructor(props){
                super(props);
                this.state = {
                  color: [45, 12, 64]
                }
                this.handleClick = this.handleClick.bind(this);
              }

              componentDidMount() {
                this.applyColor();
              }

              componentDidUpdate(prevProps, prevState) {
                this.applyColor();
              }

              formatColor(ary) {
                return 'rgb(' + ary.join(', ') + ')';
              }

              isLight() {
                const rgb = this.state.color;
                return rgb.reduce((a,b) => a+b) < 127 * 3;
              }

              applyColor() {
                const color = this.formatColor(this.state.color);
                document.body.style.background = color;
              }

              chooseColor() {
                const random = [];
                for (let i = 0; i < 3; i++) {
                  random.push(Math.floor(Math.random()*256));
                }
                return random;
              }

              handleClick() {
                this.setState({
                  color: this.chooseColor()
                });
              }

              render() {
                return (
                  <div>
                    <h1 className={this.isLight() ? 'white' : 'black'}>
            					Your color is {this.formatColor(this.state.color)}.
                    </h1>
            				<Button light={this.isLight()} onClick={this.handleClick} />
                  </div>
                );
              }
            }

            ReactDOM.render(
              <Random />,
              document.getElementById('app')
            );

            //Button.js
            import React from 'react';

            export class Button extends React.Component {
            	render() {
            		return (
            			<button
            				className={ this.props.light ? 'light-button' : 'dark-button' } onClick={this.props.onClick}>
            				Refresh
            			</button>
            		);
            	}
            }
          </code>
        </pre>
      </aside>
    </article>

    <article class="module">
      <h5>Stateless Components Inherit from Stateful Components</h5>

      <p>
        Having a Stateless Component inherit a <code>state</code> from a Stateful Component is a very common <em>programming pattern</em>.
      </p>

      <p>
        <strong>Stateful Component:</strong> any component that has a <code>state</code> property
      </p>
      <pre>
        <code>
          //simple Stateful Component
          import React from 'react';
          import ReactDOM from 'react-dom';

          class Parent extends React.Component {
            constructor(props){
              super(props);
              this.state = {
                name: 'Frarthur'
              };
            }

            render() {
              return <div></div>;
            }
          }
        </code>
      </pre>
      <p>
        <strong>Stateless Component:</strong> any component that does not have a <code>state</code> property
      </p>
      <pre>
        <code>
          //simple Stateless Component
          import React from 'react';

          export class Child extends React.Component {
            render() {
              return <h1>Hey, my name is {this.props.name}!</h1>;
            }
          }
        </code>
      </pre>
    </article>

    <article class="module">
      <h5>When to use props or state?</h5>
      <p>
        A React component should use <code>props</code> to store information that can be changes, but can only be changed by a <em>different</em> component.
      </p>
      <p>
        A React component should use <code>state</code> to store information that the component itself can change.
      </p>
    </article>

    <article class="module">
      <h5>Child Components Update Their Parents state</h5>
      <p>
        Expanding on the programming pattern of passing information from a stateful component to a stateless component, a stateless, child component can update the state of the parent component.
      </p>
      <p>
        How this works:
        <ol>
          <li>
            The <em>parent</em> component class defines a method that call <code>this.setState()</code>.
            <pre>
              <code>
                handleClick() {
                  const total = this.state.totalClicks;

                  this.setState({
                    totalClicks: total + 1
                  });
                }
              </code>
            </pre>
          </li>
          <li>
            The parent component binds this method to the current instance of the component in its constructor. This ensures that when we pass the method to the child component, it will update the parent.
            <pre>
              <code>
                constructor(props){
                  super(props);

                  this.state = {
                    totalClick = 0
                  };
                }
              </code>
            </pre>
          </li>
          <li>
            Once the parent has defined the method that updates its state, and bound that method to its state, the parent can then pass the method down to a <em>child</em>.
            <pre>
              <code>
                render() {
                  return(
                    <ChildClass onClick={this.handleClick} />
                  );
                }
              </code>
            </pre>
          </li>
          <li>
            The <em>child</em> receives the passed-down method and uses it as event handler, thus allowing the child to update the state of the parent:
            <pre>
              <code>
                render(){
                  return(
                    <button onClick={this.props.onClick}>
                      click me!
                    </button>
                  );
                }
              </code>
            </pre>
          </li>
        </ol>
      </p>

      <aside class="example">
        <h6>Example of Child updating Parent's state</h6>
        <pre>
          <code>
            //Parent.js
            import React from 'react';
            import ReactDOM from 'react-dom';

            import { Child } from './Child';

            class Parent extends React.Component {
              constructor(props) {
                super(props);

                this.state = { name: 'Frarthur' };

                this.changeName = this.changeName.bind(this);
              }

              changeName(newName) {
                this.setState({
                  name: newName
                });
              }

              render() {
                return <Child name={this.state.name} onChange={this.changeName} />
              }
            }

            ReactDOM.render(
            	<Parent />,
            	document.getElementById('app')
            );

            //Child.js
            import React from 'react';

            export class Child extends React.Component {
              constructor(props){
                super(props);

                this.handleChange = this.handleChange.bind(this);
              }

              handleChange(e) {
                const name = e.target.value;
                this.props.onChange(name);
              }

              render() {
                return (
                  <div>
                    <h1>
                      Hey my name is {this.props.name}!
                    </h1>
                    <select id="great-names" onChange={this.handleChange}>
                      <option value="Frarthur">
                        Frarthur
                      </option>

                      <option value="Gromulus">
                        Gromulus
                      </option>

                      <option value="Thinkpiece">
                        Thinkpiece
                      </option>
                    </select>
                  </div>
                );
              }
            }
          </code>
        </pre>
      </aside>
    </article>

    <article class="module">
      <h5>Child Components Update their Siblings' props</h5>
      <p>
        A further expansion of the stateful components passing information to stateless components programming pattern, you can create a child component that updates its parents state, and the parent passes that updated state to a sibling component.
      </p>

      <section>
        <h6>One Sibling to Display, Another to Change</h6>
        <p>
          The previous lesson broke the rule of components only having one job, as the Child component had two jobs:
          <ol>
            <li>
              <code>Child</code> displayed a name
            </li>
            <li>
              <code>Child</code> offered a way to change that name.
            </li>
          </ol>
        </p>
        <p>
          Instead, Child should be two stateless components: one to display the name, and another allowing you to change that name. (ie. one child renders the heading, and the other renders the select box and defines the methods for handling the events and updating the parent state):
        </p>
        <pre>
          <code>
            //Parent.js
            import React from 'react';
            import ReactDOM from 'react-dom';
            import { Child } from './Child';
            import { Sibling } from './Sibling';

            class Parent extends React.Component {
              constructor(props) {
                super(props);

                this.state = { name: 'Frarthur' };

                this.changeName = this.changeName.bind(this);
              }

              changeName(newName) {
                this.setState({
                  name: newName
                });
              }

              render() {
                return (
                  <div>
                    <Child onChange={this.changeName} />
                    <Sibling name={this.state.name} />
                  </div>
                );
              }
            });

            ReactDOM.render(
              <Parent />,
              document.getElementById('app')
            );

            //Child.js
            import React from 'react';

            export class Child extends React.Component {
              constructor(props) {
                super(props);

                this.handleChange = this.handleChange.bind(this);
              }

              handleChange(e) {
                const name = e.target.value;
                this.props.onChange(name);
              }

              render() {
                return (
                  <div>
                    <select
                      id="great-names"
                      onChange={this.handleChange}>

                      <option value="Frarthur">Frarthur</option>
                      <option value="Gromulus">Gromulus</option>
                      <option value="Thinkpiece">Thinkpiece</option>
                    </select>
                  </div>
                );
              }
            }

            //Sibling.js
            import React from 'react';

            export class Sibling extends React.Component {
              render() {
                const name = this.props.name;
                return (
                  <div>
                    <h1>Hey, my name is {name}!</h1>
                    <h2>Don't you think {name} is the prettiest name ever?</h2>
                    <h2>Sure am glad that my parents picked {name}!</h2>
                  </div>
                );
              }
            }
          </code>
        </pre>
      </section>
    </article>

    <article class="module">
      <h5>Stateless Components Inherit from Statefull Components - Full Programming Pattern</h5>
      <ul>
        <li>
          A stateful component class defines a function that calls this.setState. (Parent.js, lines 15-19)
        </li>
        <li>
          The stateful component passes that function down to a stateless component. (Parent.js, line 24)
        </li>
        <li>
          That stateless component class defines a function that calls the passed-down function, and that can take an event object as an argument. (Child.js, lines 10-13)
        </li>
        <li>
          The stateless component class uses this new function as an event handler. (Child.js, line 20)
        </li>
        <li>
          When an event is detected, the parent's state updates. (A user selects a new dropdown menu item)
        </li>
        <li>
          The stateful component class passes down its state, distinct from the ability to change its state, to a different stateless component. (Parent.js, line 25)
        </li>
        <li>
          That stateless component class receives the state and displays it. (Sibling.js, lines 5-10)
        </li>
        <li>
          An instance of the stateful component class is rendered. One stateless child component displays the state, and a different stateless child component displays a way to change the (Parent.js, lines 23-26)
        </li>
      </ul>
    </article>

  </article>
</main>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php";
?>
