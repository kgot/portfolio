;(function() {

  var topAnchor = document.getElementById('top-anchor');

  var portfolio = angular.module('portfolio', [
    'ngRoute',
    'ngResource',
    'ngAnimate',
    'smoothScroll'
  ]);

  portfolio.run(['$templateCache',
    function($templateCache) {
      $templateCache.put('templates/profcard.html');
    }
  ]);

  portfolio.controller("PortfolioCtrl", ['$scope', function($scope) {
    $scope.name = "kg-portfolio";
  }]);

  portfolio.controller('CollapseCtrl', function($scope) {
    $scope.isCollapsed = false;
  });

  portfolio.controller('DropdownCtrl', function($scope, $log) {
    $scope.sections = [
      'Headings',
      'Interests',
      'GitHub',
      'Creativity',
      'More'
    ];

    $scope.status = {
      isopen: false
    };

    $scope.toggled = function(open) {
      $log.log('Dropdown is now: ', open);
    };

    $scope.toggleDropdown = function($event) {
      $event.preventDefault();
      $event.stopPropagation();
      $scope.status.isopen = !$scope.status.isopen;
    };
  });

  portfolio.controller('ScrollBtnCtrl', ['smoothScroll', '$scope',
    function(smoothScroll, $scope) {
      $scope.scrollToTop = function() {
        smoothScroll(topAnchor);
      };
    }
  ]);

  portfolio.controller('NavBarCtrl', ['$scope',
    function($scope) {

    }
  ]);

  portfolio.controller('CardDirCtrl', function() {
    this.title = 'Professional Card';
    this.content = {
      show: false,
      text: `
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\
        `
    };

    this.toggleContent = function() {
      this.content.show = !this.content.show;
    };

    this.contentShown = function() {
      return this.content.show;
    };
  });

  portfolio.directive('card', function() {
    return {
      restrict: 'E',
      scope: {},
      replace: true,
      transclude: true,
      templateUrl: 'templates/profcard.html',
      controller: 'CardDirCtrl',
      controllerAs: 'card',
      bindToController: {
        title: '@',
        content: '@'
      },
      link: function(scope, element, attr) {

        element.on('mousedown', function(event) {
          // Prevent default dragging of selected content
          event.preventDefault();
          console.log('Element clicked: ' + element);
        });

        element.on('mouseover', function(event) {
          // Prevent default dragging of selected content
          event.preventDefault();
          // TODO show content text
          scope.card.toggleContent();
        });

        element.on('mouseout', function(event) {
          event.preventDefault();
          // TODO reset hover state
          scope.card.toggleContent();
        });
      }
    };
  });

})();
