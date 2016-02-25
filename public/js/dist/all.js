'use strict';

(function () {

  var topAnchor = document.getElementById('top-anchor');

  angular.module('portfolio', ['ngRoute', 'ngResource', 'ngAnimate', 'smoothScroll', 'templates']).controller('PortfolioCtrl', ['$scope', function ($scope) {
    $scope.name = 'kg-portfolio';
  }]).controller('CollapseCtrl', ['$scope', function ($scope) {
    $scope.isCollapsed = false;
  }]).controller('DropdownCtrl', ['$scope', '$log', function ($scope, $log) {
    $scope.sections = ['Headings', 'Interests', 'GitHub', 'Creativity', 'More'];

    $scope.status = {
      isopen: false
    };

    $scope.toggled = function (open) {
      $log.log('Dropdown is now: ', open);
    };

    $scope.toggleDropdown = function ($event) {
      $event.preventDefault();
      $event.stopPropagation();
      $scope.status.isopen = !$scope.status.isopen;
    };
  }]).controller('ScrollBtnCtrl', ['smoothScroll', '$scope', function (smoothScroll, $scope) {
    $scope.scrollToTop = function () {
      smoothScroll(topAnchor);
    };
  }]).controller('NavBarCtrl', ['$scope', function ($scope) {}]).controller('CardDirCtrl', function () {

    this.title = {
      text: 'Professional Card'
    };

    this.content = {
      shown: false,
      text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,\n        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris\n        nisi ut aliquip ex ea commodo consequat.',
      show: function show() {
        this.shown = true;
      },
      hide: function hide() {
        this.shown = false;
      }
    };

    this.image = {
      blurred: false,
      restore: function restore() {
        this.blurred = false;
      },
      blur: function blur() {
        this.blurred = true;
      }
    };
  }).directive('card', function () {
    return {
      restrict: 'E',
      scope: {},
      replace: true,
      transclude: true,
      templateUrl: 'profcard.html',
      controller: 'CardDirCtrl',
      controllerAs: 'card',
      bindToController: {
        title: '@',
        content: '@',
        image: '@'
      },
      link: function link(scope, element, attr) {
        element.on('mouseover', function (event) {
          event.preventDefault();
          scope.$apply(function () {
            scope.card.image.blur();
            scope.card.content.show();
          });
        });

        element.on('mouseout', function (event) {
          event.preventDefault();
          scope.$apply(function () {
            scope.card.image.restore();
            scope.card.content.hide();
          });
        });
      }
    };
  });
})();
"use strict";

(function () {
  angular.module("templates", []).run(["$templateCache", function ($templateCache) {
    $templateCache.put("profcard.html", "\n<div class=\"profcard\">\n  <div class=\"title {{ card.title.color }}\">\n    <span>{{ card.title.text }}</span>\n  </div>\n  <div class=\"content\" ng-class=\"{ \'hidden\': !card.content.shown }\">\n    <span>{{ card.content.text }}</span>\n  </div>\n  <div class=\"image\" ng-class=\"{ \'blur\': card.image.blurred }\" ng-transclude>\n  </div>\n</div>\n");
  }]);
})();
//# sourceMappingURL=all.js.map
