# FoodLog

A an app where users may track the food they ate for the day, log a description, and keep track of their calories.

# User Story …

* Log a food I have eaten by submitting a form with food name, calories and details.
* Ability to view a list of foods I have logged.
* Options to view all foods, only high-calorie foods (more than 500 calories), or only lower-calorie foods (less than 500 calories).
* I can click a food to edit its name, details or calories (for necessary changes and ... cheating!).

## Technologies used:
- Primarily written in Typescript.
- Others: HTML, CSS, Bootstrap, Node.js, and Bower
This project was generated with [angular-cli](https://github.com/angular/angular-cli) version 1.0.0-beta.28.3.


## Prerequisites

You will need the following things properly installed on your computer.

* [Git](https://git-scm.com/)
* [Node.js](https://nodejs.org/) (with NPM)
* [Bower](https://bower.io/)
* [Typescript](https://www.typescriptlang.org/)
* [@angular/cli](https://cli.angular.io/) (Angular 2)

### Usage

* Go to my Github repository (https://github.com/Evan-Alexander/food-log)

* From your terminal:

* `git clone` this repository to your Desktop
* `cd food-log`

### Install Node Package Manager

```bash
$ npm install   # Needed to update necessary dependencies.
```

### Install Bower Package Manager

```bash
$ bower install   # Handles front end packages like Jquery and Bootstrap.
```
## Now you may view the project on your computer by running:

```bash
$ ng serve   # Starts the local server on your computer.
```
* Visit your app at [http://localhost:4200](http://localhost:4200).

## Planning

* $ ng g component home - create first home component
* $ touch src/app/app.routing.ts - create routing file
* src/app/app.module.ts - import { routing } from './app.routing';
* src/app/food-log-model.ts - create food log class
* index.html src="https://www.gstatic.com/firebasejs/3.7.4/firebase.js" - create firebase script tag
* src/app/food-log.service.ts - create project service file
* src/app/mock-logs.ts - create mock food-log
* src/app/home/home.component.ts - create getFoodLog function
* src/app/api-keys.ts - place api key here
  var masterFirebaseConfig = {

    };
    firebase.initializeApp(config);
* src/app/home/home.component.html - create first for loop to display first entries
* src/app/app.module.ts - import food-log service and name as providers
* ng g c new-log - create new-log component
* src/app/new-project/new-log.component.html - create form to save a new log entry
* src/app/home/home.component.ts - create addNewLog function
* src/app/home/home.component.html - place new-log component selector here
* src/app/new-project/new-log.component.ts - add import for Output, EventEmitter; create addNewFood-log
* src/app/home/home.component.html add new-log-sender within new-log selector tag
* ng g c edit-log
* src/app/home/home.component.html - place edit-log selector tag with data binding and button sender; add button to edit log
* src/app/home/home.component.ts - create editLog function
* src/app/edit-log/edit-log.component.ts - add input and outputs; buttonsenderfunction
* src/app/edit-log/edit-log.component.html - add form to edit log
* src/app/delete-log/delete-log.component.ts - add deleteLog function
* src/app/delete-log/delete-log.component.html - add
* src/app/food-log.service.ts - add update project function
* src/app/food-log.service.ts - add deleteLog function
* src/app/home/home.component.ts - add deleteLog function
* src/app/home/home.component.html - add delete button
* add pipe to show only foods that are higher than 500 calories

&nbsp;
## Known Bugs
* No known bugs

Copyright (c) 2017 Jason Brown

This software is licensed under the GPL license
