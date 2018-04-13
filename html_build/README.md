# Onefall.co.uk

---

## Local development

This project uses [Jekyll](http://jekyllrb.com/) to generate pages, and various NPM packages with [Gulp](http://gulpjs.com/) to compile the assets into the `build` directory. To install all the necessary dependencies:

```
bundle install
npm install
```

The default gulp task will build and compile all the assets, start a local server, and watch for file changes:

```
gulp
```

_Note: for the browser to reload automatically when a file changes, you will need to install the LiveReload extension._

### Run the prototype on a local server

If you simply need to view the prototype on your computer, you can run the server without re-building the prototype or starting the watch task:

```
gulp connect
```

A local version of the prototype will then be accessible at <http://localhost:9000>.
