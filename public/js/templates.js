var templates = angular.module('templates', []);

angular.module('templates').run(['$templateCache',
  function($templateCache) {
    $templateCache.put('templates/profcard.html');
  }
]);
