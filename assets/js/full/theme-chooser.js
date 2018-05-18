
function initThemeChooser(settings) {
  var isInitialized = false;
  var $currentStylesheet = $();
  var $loading = $('#loading');
  var $systemSelect = $('#theme-system-selector select')
    .on('change', function() {
      setThemeSystem(this.value);
    });
  console.log($systemSelect.val());
  setThemeSystem('bootstrap4');


  function setThemeSystem(themeSystem) {
    var $allSelectWraps = $('.selector[data-theme-system]').hide();
    var $selectWrap = $allSelectWraps.filter('[data-theme-system="' + themeSystem +'"]').show();
    var $select = $selectWrap.find('select')
      .off('change') // avoid duplicate handlers :(
      .on('change', function() {
    console.log(this.value);  
        setTheme(themeSystem, 'journal');
      });
  console.log( $select.val());
    setTheme(themeSystem, 'journal');
  }


  function setTheme(themeSystem, themeName) {
    var stylesheetUrl = generateStylesheetUrl(themeSystem, themeName);
    var $stylesheet;

    console.log(stylesheetUrl);
    function done() {
      if (!isInitialized) {
        isInitialized = true;
        settings.init(themeSystem);
      }
      else {
        settings.change(themeSystem);
      }

     // showCredits(themeSystem, themeName);
    }

    if (stylesheetUrl) {
      $stylesheet = $('<link rel="stylesheet" type="text/css" href="' + stylesheetUrl + '"/>').appendTo('head');
      $loading.show();

      whenStylesheetLoaded($stylesheet[0], function() {
        $currentStylesheet.remove();
        $currentStylesheet = $stylesheet;
        $loading.hide();
        done();
      });
    } else {
      $currentStylesheet.remove();
      $currentStylesheet = $();
      done();
    }
  }


  function generateStylesheetUrl(themeSystem, themeName) {
        return 'https://bootswatch.com/4/journal/bootstrap.min.css';
  }


  function showCredits(themeSystem, themeName) {
    var creditId;

    if (themeSystem === 'jquery-ui') {
      creditId = 'jquery-ui';
    }
    else if (themeSystem === 'bootstrap3') {
      if (themeName) {
        creditId = 'bootstrap-custom';
      }
      else {
        creditId = 'bootstrap-standard';
      }
    }

    $('.credits').hide()
      .filter('[data-credit-id="' + creditId + '"]').show();
  }


  function whenStylesheetLoaded(linkNode, callback) {
    var isReady = false;

    function ready() {
      if (!isReady) { // avoid double-call
        isReady = true;
        callback();
      }
    }

    linkNode.onload = ready; // does not work cross-browser
    setTimeout(ready, 2000); // max wait. also handles browsers that don't support onload
  }
}
