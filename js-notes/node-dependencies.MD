# Install steps

__Create a manifest file__
- This stores a list of what packages are needed for the project, and what versions are needed.

npm init

__Install Gulp__
- Optimizes and packages up code, orchestrates other packages and dependencies.

npm install gulp --save-dev

__Browserify__
- Translates "require" and "exports" from Node to the Browser.

npm install browserify --save-dev

- After adding require and task to gulpfile.js:

gulp jsBrowserify

__Concatenation__
- Consolidating multiple js files into one.
- Concatenated files are stored in a folder named 'tmp'.

npm install gulp-concat --save-dev

__Minification__
- Removes extra characters, spacing, ect. Code is all now one line.

npm install-uglify --save-dev

__Create Environment Variables__
- Ability to call on specific tasks, because tasks are now seperated between dev and production

npm install gulp-util --save-dev

__To Build a production version__

gulp build --production

__To Build a Development Version__

gulp build

__Clean Tasks__
- Cleans our environment every time we make a build.
- Ensures latest versions of dependencies are loaded.

npm install del --save-dev

__JS Hint__

npm install jshint --save-dev

npm install gulp-jshint --save-dev

.gitignore at this point:
node_modules/
.DS_Store

__Vinyl Source Stream__
- Places browserfied source code into a new file.

npm install vinyl-source-stream --save-dev

__Bower__
- Manages front-end packages like Bootstrap and jQuery
- Allows front-end developers to work independantly of back-end.
- Makes sure each program is installed only once.  Versions are kept seperately from front-end and back-end.
- Can work with Rails, Angular

bower init

bower install jquery --save

bower install bootstrap --save

if cloning ...

npm install
bower install

__Moment.js__
- Incorporate date and times into your app.

bower install moment --save

__Bower Files__

npm install bower-files --save-dev

__When adding a new front-end dependency__

gulp bowerJS

add to .gitignore:
build/
tmp/

__Browser Sync__
- Add a local server.
- Set up server to accept auto-updating files during development.

npm install browser-sync --save-dev
